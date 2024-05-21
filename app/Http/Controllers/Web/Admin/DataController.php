<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use App\Models\Content;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DataController extends Controller
{
    public function menu(Request $request)
    {
        $data  = Menu::where('status_enabled', true)->get();
        return datatables()->of($data)
            ->addColumn('action', 'pages.admin.menu.action')
            ->addIndexColumn()
            ->toJson();
    }

    public function content(Request $request)
    {
        $category = $request->category;
        $type = $request->type;
        $data = Content::with(['category', 'media'])
            ->where('status_enabled', true)
            ->when($category, function ($query) use ($category) {
                return $query->whereHas('category', function ($subquery) use ($category) {
                    $subquery->where('name', $category);
                });
            })
            ->when($type, function ($query) use ($type) {
                return $query->whereHas('category', function ($subquery) use ($type) {
                    $subquery->where('type', $type);
                });
            })
            ->orderBy('updated_at','DESC')
            ->get();

        return datatables()->of($data)
            ->addColumn('action', 'pages.admin.content.action')
            ->addColumn('last', function ($data) {
                return $data->updated_at->diffForHumans();
            })
            ->editColumn('content', function ($data) {
                return Str::limit($data->content, 20);
            })
            ->editColumn('title', function ($data) {
                return Str::limit($data->title, 20, '....');
            })
            ->addIndexColumn()
            ->toJson();
    }
}
