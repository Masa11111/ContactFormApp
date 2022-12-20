<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function confirm(Request $request)
    {
        $data = $request->all();

        $rules = [
            'name' => 'required',
            'email' => 'required|email',
            'content' => 'required'
        ];

        $messages = [
            'required' => '必須入力です',
            'email' => 'このメールアドレスは使用できません',
        ];

        $validator = Validator::make($data, $rules, $messages);

        if($validator->fails()){
            return redirect('/')
            ->withErrors($validator)
            ->withInput();
        }

        return view('contact.confirm')->with($data);
    }

    public function send(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $content = $request->content;

        Mail::to('protain1031@gmail.com')->send(new SendMail($name, $email, $content));

        return view('contact.ContactForm');
    }
}
