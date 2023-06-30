<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function sendMessage(Request $request)
    {
        $validator = Validator::make($request->all(), $this->rules());
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        $contact = new Contact();
        $contact->name = $request->name;
        $contact->number = $request->number;
        $contact->message = $request->message;
        $contact->save();

        return redirect()->back()->with('success', 'Ma\'lumotlar jo\'natildi. Tez orada siz bilan bog\'lanamiz.');
    }

    // this is method show new messages
    public function showMessages()
    {
        $messages = Contact::query()->get();
        return view('admin.show_messages', ['messages' => $messages]);
    }

    public function rules()
    {
        return [
            'name' => 'required',
            'number' => 'required',
            'message' => 'required',
        ];
    }
}
