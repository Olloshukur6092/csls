<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function create()
    {
        if (session()->get('admin')) {
            return redirect('/admin/dashboard');
        }
        // dd(session()->get('admin'));
        return view('admin.login');
    }

    public function login(Request $request)
    {

        $validator = Validator::make($request->all(), $this->rules());
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        $admin = Admin::query()->where('login', '=', $request->login, 'and', 'password', '=', $request->password)->first();
        if ($admin !== null) {
            $request->session()->put('admin', $admin);
            return redirect('/admin/dashboard');
        } else {
            return redirect()->back()->with('error', 'Login or password error.');
        }
    }

    public function logout()
    {
        session()->forget('admin');
        return redirect()->route('login');
    }

    public function rules()
    {
        return [
            'login' => 'required',
            'password' => 'required',
        ];
    }
}
