<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use App\Models\Content;
use Illuminate\Http\Request;

class ContentCtrl extends Controller
{
    public function index(Request $request)
    {
        return view('pages.admin.content.index');
    }
    public function create(Request $request)
    {
        return view('pages.admin.content.create');
    }
    public function edit(Request $request, $id)
    {
        $content = Content::where('id', $id)->first();
        return view('pages.admin.content.update', compact('content'));
    }
}
