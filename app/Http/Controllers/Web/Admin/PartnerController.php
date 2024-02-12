<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use App\Models\Content;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.admin.partner.index');
    }
    public function create(Request $request)
    {
        return view('pages.admin.partner.create');
    }
    public function edit(Request $request)
    {
        $partner = Content::where('id', $request->id)->with('media')->first();
        return view('pages.admin.partner.update', compact('partner'));
    }
}
