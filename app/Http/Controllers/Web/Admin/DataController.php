<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
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
}
