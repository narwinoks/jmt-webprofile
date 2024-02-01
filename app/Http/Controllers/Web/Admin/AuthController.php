<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use App\Responses\ServerResponse;
use App\Traits\Valet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Lang;

class AuthController extends Controller
{
    use Valet;
    public function login(Request $request)
    {
        return view('pages.admin.auth.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        if (!$credentials) {
            return $this->error(Lang::get('auth.failed'), 400);
        }

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            $message = [
                'rc' => 200,
                'message' => Lang::get('auth.success') . " " . Auth::user()->name
            ];
            $data = [
                'user' => Auth::user(),
                'redirect' => route('dashboard.index')
            ];
            return $this->success($message, $data, 200);
        }
        $error = [
            'rc' => 404,
            'message' => Lang::get('message.404')
        ];
        return $this->error($error, 404);
    }
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('login')->with('success', Lang::get('message.200'));
    }
}
