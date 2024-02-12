<?php

namespace App\Http\Controllers\Web\Admin;

use App\Enums\ImageStatus;
use App\Http\Controllers\Controller;
use App\Models\Content;
use App\Models\ContentCategory;
use App\Models\Media;
use App\Models\Meta;
use App\Responses\ServerResponse;
use App\Traits\Valet;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class ContentController extends Controller
{
    use Valet;
    public function store(Request $request)
    {
        if ($request->id) {
            return  $this->update($request);
        }
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'content' => 'required|min:2',
            'type' => 'required'

        ]);
        if ($validator->fails()) {
            $error = [
                'errors' => $validator->errors()
            ];
            return $this->error(ServerResponse::BAD_REQUEST, 400, $error);
        }
        try {
            $data = $request->only('title', 'content');
            $data['slug'] = Str::slug($request->title, '-');
            $data['content_category_id'] = ContentCategory::Where('category', $request->category)->first()->id ?? null;
            $content = Content::create($data);
            $type = $request->type;
            $image = [];
            if ($type == ImageStatus::embed) {
                $data = [
                    'type' => ImageStatus::image,
                    'url' => $request->embed,
                    'content_id' => $content->id
                ];
                Media::create($data);
            } elseif ($type == ImageStatus::image) {
                $images = $request->images;
                if (count($images) > 0) {
                    foreach ($images as $key => $image) {
                        $imageName = Str::slug($content->title) . '-' . Str::random(5) . '.' . $image->extension();
                        $image->move(public_path('assets/images'), $imageName);
                        $media = [
                            'type' => ImageStatus::image,
                            'url' => $imageName,
                            'content_id' => $content->id
                        ];
                        Media::create($media);
                    }
                }
            } else if ($type == ImageStatus::video) {
                $videoName = Str::slug($content->title) . '-' . Str::random(5) . '.' . $request->video->extension();
                $request->video->move(public_path('assets/images'), $videoName);
                $media = [
                    'type' => ImageStatus::video,
                    'url' => $videoName,
                    'content_id' => $content->id
                ];
                Media::create($media);
            } else if ($type == ImageStatus::icon) {
                $media = [
                    'type' => ImageStatus::icon,
                    'url' => $request->media,
                    'content_id' => $content->id
                ];
                Media::create($media);
            }
            $meta = $request->meta;
            if ($meta) {
                Meta::create([
                    'content_id' => $content->id,
                    'description' => $meta,
                    'name' => $content->title,
                ]);
            }
            $result = $content->toArray();;
            $message = [
                'rc' => 201,
                'message' => Lang::get('message.200')
            ];
        } catch (Exception $e) {
            $message = [
                'rc' => 500,
                'message' => $e->getMessage()
            ];
            $result = [];
        }
        return $this->success($message, $result, $message['rc']);
    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'content' => 'required|min:2',
        ]);
        if ($validator->fails()) {
            $error = [
                'errors' => $validator->errors()
            ];
            return $this->error(ServerResponse::BAD_REQUEST, 400, $error);
        }
        try {
            $content = Content::find($request->id);
            if ($content) {
                $data = $request->only('title', 'content');
                if ($request->title != $request->oldTitle) {
                    $data['slug'] = Str::slug($request->title, '-');
                }
                $data['content_category_id'] = ContentCategory::Where('category', $request->category)->first()->id ?? null;
                $content->update($data);
                $type = $request->type;
                $image = [];
                if ($type == ImageStatus::embed) {
                    $media = [
                        'type' => ImageStatus::image,
                        'url' => $request->embed,
                        'content_id' => $content->id
                    ];
                    Media::create($media);
                } elseif ($type == ImageStatus::image) {
                    $images = $request->images;
                    if ($images && count($images) > 0) {
                        foreach ($images as $key => $image) {
                            $imageName = Str::slug($content->title) . '-' . Str::random(5) . '.' . $image->extension();
                            $image->move(public_path('assets/images'), $imageName);
                            $media = [
                                'type' => ImageStatus::image,
                                'url' => $imageName,
                                'content_id' => $content->id
                            ];
                            Media::create($media);
                        }
                    }
                } else if ($type == ImageStatus::video) {
                    $videoName = Str::slug($content->title) . '-' . Str::random(5) . '.' . $request->video->extension();
                    $request->video->move(public_path('assets/images'), $videoName);
                    $media = [
                        'type' => ImageStatus::video,
                        'url' => $videoName,
                        'content_id' => $content->id
                    ];
                    Media::create($media);
                } else if ($type == ImageStatus::icon) {
                    $media = [
                        'type' => ImageStatus::icon,
                        'url' => $request->media,
                        'content_id' => $content->id
                    ];
                    Media::create($media);
                }
                $meta = $request->meta;
                if ($meta) {
                    $meta = Meta::updateOrCreate(['content_id' => $request->id], [
                        'content_id' => $content->id,
                        'description' => $meta,
                        'name' => $content->title,
                    ]);
                }
                $result = $content->toArray();;
                $message = [
                    'rc' => 201,
                    'message' => Lang::get('message.200')
                ];
            } else {
                $message = [
                    'rc' => 404,
                    'message' => Lang::get('message.404')
                ];
                $request = [];
            }
        } catch (Exception $e) {
            $message = [
                'rc' => 500,
                'message' => $e->getMessage()
            ];
            $result = [];
        }
        return $this->success($message, $result, $message['rc']);
    }

    public function destroy(Request $request)
    {
        try {
            Content::where('id', $request->id)->update(['status_enabled' => false]);
            return redirect()->back()->with('success', Lang::get('message.200'));
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
    public function images(Request $request)
    {
        $data = Media::where('content_id', $request->id)->get();
        return view('pages.admin.content.images', compact('data'));
    }
    public function setThumbnail(Request $request)
    {
        $image = Media::where('id', $request->id)->update('is_thumbnail', true);
        return response()->json(['data' => $image], Response::HTTP_OK);
    }

    public function deleteImage(Request $request)
    {
        $image = Media::where('id', $request->id)->first();
        $imagePath = public_path('assets/images/' . $image->url);
        if (File::exists($imagePath)) {
            File::delete($imagePath);
        }
        $image->delete();
        return response()->json(['message' => "successfully"], Response::HTTP_OK);
    }
}
