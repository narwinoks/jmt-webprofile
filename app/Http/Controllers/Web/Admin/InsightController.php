<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use App\Models\Content;
use Illuminate\Http\Request;

class InsightController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.admin.insight.index');
    }
    public function create(Request $request)
    {
        return view('pages.admin.insight.create');
    }
    public function edit(Request $request)
    {
        $insight = Content::where('id', $request->id)->with('media', 'meta')->first();
        return view('pages.admin.insight.update', compact('insight'));
    }
}
