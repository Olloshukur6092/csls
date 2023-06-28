<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function lang(Request $request)
    {
        App::setLocale($request->lang);
        session()->put('lang', $request->lang);
        return redirect()->back();
    }
}
