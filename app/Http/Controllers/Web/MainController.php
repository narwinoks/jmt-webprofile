<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Content;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function show_page(Request $r)
    {
        $compact = [];

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
        $content = Content::where('slug', $slug)->whereHas('category', function ($query) {
            $query->where('category', '=', 'insight');
        })->first();
        return view('pages.public.insight.detail', [
            'content' => $content,
        ]);
    }
    public function insightData(Request $request)
    {
        $offset = $request->offset;
        $limit  = $request->limit;

        $contents = Content::with('category')
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
            ->get();
        foreach ($contents as $content) {
            $content->thumbnail = $content->getThumbnail()->url;
        }
        return view('pages.public.insight.data', compact('contents'));
    }
}
