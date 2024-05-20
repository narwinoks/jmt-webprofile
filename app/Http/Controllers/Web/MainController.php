<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Content;
use App\Models\Menu;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class MainController extends Controller
{
    public function show_page(Request $r)
    {
        $compact = [];
        // return response()->json(['data' => Menu::where('status_enabled', true)
        //     ->where('menu_id', null)
        //     ->with('children')
        //     ->get()]);
        switch ($r["pages"]) {
            case 'dashboard':
                array_push($compact, 'r');
                break;
            default:
                array_push($compact, 'r');
                break;
        }
        $exploded = explode("-", $r['pages']);
        switch ($exploded[0]) {
            case 'company':
                $pages = "company." . $r['pages'];
                break;
            case 'insight':
                $pages = "insight." . $r['pages'];
                break;
            case 'market':
                $pages = "market." . $r['pages'];
                break;
            case 'products':
                $products = Content::with(['category', 'mediaku'])
                    ->where('status_enabled', true)
                    ->whereHas('category', function ($query) {
                        $query->where('category', 'products');
                    })
                    ->get();
                $compact['products'] = $products;
                $pages = $r["pages"];
                break;
            default:
                $pages = $r["pages"];
                break;
        }
        array_push($compact, "pages");
        return view("pages.public." . $pages, $compact);
    }
    public function insight(Request $request)
    {
        return view('pages.public.insight.insight');
    }
    public function detailInsight(Request $request, $slug)
    {
        $content = Content::with('media')->where('slug', $slug)->whereHas('category', function ($query) {
            $query->where('category', '=', 'insight');
        })->whereHas('media', function ($query) {
            $query->where('status_enabled', true);
        })->first();
        return view('pages.public.insight.detail', [
            'content' => $content,
        ]);
    }
    public function insightData(Request $request)
    {
        $offset = $request->offset;
        $limit  = $request->limit;

        $contents = Content::with('category', 'thumbnail')
            ->where('status_enabled', true)
            ->when($limit, function ($query) use ($limit) {
                return $query->limit($limit);
            })
            ->when($offset, function ($query) use ($offset) {
                return $query->offset($offset);
            })
            ->whereHas('category', function ($query) {
                $query->where('category', '=', 'insight');
            })
            ->orderBy('updated_at', 'DESC')
            ->get();
        return view('pages.public.insight.data', compact('contents'));
    }
    public function data(Request $request)
    {
        $key = $request->key;
        switch ($key) {
            case 'career':
                return $this->getCareer($request);
                break;
            default:
                return response()->json(['message' => $key ."   " ."is not a valid"] ,Response::HTTP_NOT_FOUND);
            break;
        }
    }
    protected function getCareer(Request $request){
        $category = "Career";
        $carers = Content::with('category')->where('status_enabled', true)
            ->when($category, function ($query) use ($category) {
                return $query->whereHas('category', function ($subquery) use ($category) {
                    $subquery->where('category', $category);
                });
            })->get();
        return view('pages.public.data.career' ,compact('carers'));
    }
}
