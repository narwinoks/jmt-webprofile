<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use App\Models\Content;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.admin.products.index');
    }
    public function create(Request $request)
    {
        return view('pages.admin.products.create');
    }
    public function edit(Request $request)
    {
        $product = Content::where('id', $request->id)->with('media')->first();
        return view('pages.admin.products.update', compact('product'));
    }
}
