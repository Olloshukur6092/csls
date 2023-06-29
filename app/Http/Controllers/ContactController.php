<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        return view('contact');
    }

    public function sendMessage(Request $request)
    {
        if ($request->all()) {
           return redirect()->back()->with('success', 'Ma\'lumotlaringiz yuborildi. Siz bilan tez orada bog\'lanamiz.');
        } else {
            return redirect()->back()->with('error', 'Ma\'lumot yuborishda xatolik. Qaytadan yuboring.');
        }
    }
}
