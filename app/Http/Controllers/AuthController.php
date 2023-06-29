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
        return view('admin.login');
    }

    public function login(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), $this->rules());
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        // $admin = Admin::query()->where('login', $request->login)->where('password', '=', $request->password)->first();
        $conditations = [
            ['login', '=', "$request->login"],
            ['password', '=', "$request->password"],
        ];
        $admin = DB::table('admins')->where($conditations)->first();
        dd($admin);
        if ($admin !== null) {
            return redirect()->route('dashboard');
        } else {
            return redirect()->back()->with('error', 'Login or password error.');
        }
    }

    public function rules()
    {
        return [
            'login' => 'required',
            'password' => 'required',
        ];
    }
}
