<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use App\Models\Content;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.admin.contact.index');
    }
    public function create(Request $request)
    {
        return view('pages.admin.contact.create');
    }
    public function edit(Request $request)
    {
        $contact = Content::where('id', $request->id)->with('media')->first();
        return view('pages.admin.contact.update',compact('contact'));
    }
}
