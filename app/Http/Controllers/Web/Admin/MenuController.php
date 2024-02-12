<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Responses\ServerResponse;
use App\Traits\Valet;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Validator;

class MenuController extends Controller
{
    use Valet;
    public function index(Request $request)
    {
        return view('pages.admin.menu.index');
    }

    public function create(Request $request)
    {
        $menus = Menu::all();
        return view('pages.admin.menu.create', compact('menus'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'url' => 'required',
            'order' => 'nullable|integer',
        ]);
        if ($validator->fails()) {
            $error = [
                'errors' => $validator->errors()
            ];
            return $this->error(ServerResponse::BAD_REQUEST, 400, $error);
        }
        $data = $request->only('name', 'menu_id', 'description', 'order', 'url');
        try {
            $menu = Menu::updateOrCreate(['id' => $request->id], $data);

            $message = [
                'rc' => 201,
                'message' => Lang::get('message.200')
            ];
        } catch (Exception $e) {
            $message = [
                'rc' => $e->getCode(),
                'message' => $e->getMessage()
            ];
            $menu = [];
        }
        return $this->success($message, [], 201);
    }

    public function edit(Request $request)
    {
        $menus = Menu::all();
        $menu = Menu::find($request->id);
        if ($menu) {
            return view('pages.admin.menu.update', compact('menus', 'menu'));
        }
        return $this->error(ServerResponse::NOT_FOUND, 404);
    }
    public function update(Request $request)
    {
    }
    public function destroy(Request $request)
    {
        try {
            Menu::find($request->id)->delete();
            return redirect()->back()->with('success', Lang::get('message.200'));
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
