<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use App\Models\Content;
use App\Models\ContentCategory;
use App\Responses\ServerResponse;
use App\Traits\Valet;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class AdminController extends Controller
{
    use Valet;
    public function career(Request $request)
    {
        return view('pages.admin.career.index');
    }
    public function showModal(Request $request)
    {
        $key = $request->key;
        switch ($key) {
            case 'career':
                return $this->showModalCareer($request);
                break;
            default:
                return response()->json(['message' => 'Data not found'], Response::HTTP_NOT_FOUND);
                break;
        }
    }
    public function showModalCareer(Request $request)
    {
        if ($request->id) {
            $data = Content::where('id', $request->id)->first();
            return view('pages.admin.career.edit-career', compact('data'));
        } else {
            return view('pages.admin.career.add-career');
        }
    }
    public function dataTables(Request $request)
    {
        $key = $request->key;
        switch ($key) {
            case 'career':
                return $this->dataCareer($request);
                break;
            default:
                return response()->json(['message' => 'Data not found'], Response::HTTP_NOT_FOUND);
                break;
        }
    }
    public function saveContent(Request $request)
    {
        $key = $request->key;
        switch ($key) {
            case 'career':
                return $this->saveCareer($request);
                break;
            default:
                return response()->json(['message' => 'Data not found'], Response::HTTP_NOT_FOUND);
                break;
        }
    }
    public function dataCareer(Request $request)
    {
        $category = "Career";
        $data = Content::with('category')->where('status_enabled', true)->select('title as position', 'id', 'created_at', 'status_enabled as status')
            ->when($category, function ($query) use ($category) {
                return $query->whereHas('category', function ($subquery) use ($category) {
                    $subquery->where('category', $category);
                });
            })->get();
        return datatables()->of($data)
            ->addColumn('action', 'pages.admin.career.action')
            ->addColumn('lastUpdate', function ($data) {
                return $data->created_at->diffForHumans();
            })
            ->addIndexColumn()
            ->toJson();
    }
    public function saveCareer(Request $request)
    {

        $validator = Validator::make(
            $request->all(),
            [
                'title' => 'required',
                'description' => 'required',
                'contact' => 'required',
                'kualifikasi' => 'required',
            ]

        );
        if ($validator->fails()) {
            $error = [
                'errors' => $validator->errors()
            ];
            return $this->error(ServerResponse::BAD_REQUEST, 400, $error);
        }
        $data = $request->only('title');
        $data['content_category_id'] = ContentCategory::where('category', 'career')->first()->id ?? 1;
        $content = [
            'kualifikasi' => $request->kualifikasi,
            'contact' => $request->contact,
            'description' => $request->description
        ];
        $data['content'] = json_encode($content);
        try {
            $result  = Content::updateOrCreate(['id' => $request->id], $data);
            $result = [
                'id' => $result->id
            ];
            $message = [
                'rc' => 200,
                'message' => 'Success'
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
    public function delete(Request $request)
    {
        try {
            Content::where('id', $request->id)->update(['status_enabled' => false]);
            $message = [
                'rc' => 200,
                'message' => 'Success'
            ];
        } catch (Exception $e) {
            $message = [
                'rc' => 500,
                'message' => $e->getMessage()
            ];
        }
        return $this->success($message, [], $message['rc']);
    }
}
