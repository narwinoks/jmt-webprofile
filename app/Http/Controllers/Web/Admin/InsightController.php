<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use App\Imports\ContentImport;
use App\Models\Content;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Facades\Excel;
use Symfony\Component\HttpFoundation\Response;

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
    public function export(Request $request)
    {
        return view('pages.admin.insight.export');
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'file' => 'required'
        ]);
        if ($validator->fails()) {
            return response()->json(['message' => 'validator error', 'error' => $validator->errors()], Response::HTTP_BAD_REQUEST);
        }

        try {
            $path = $request->file('file');
            Excel::import(new ContentImport(), $path);
        } catch (Exception $e) {
            return response()->json(['message' => $e->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
