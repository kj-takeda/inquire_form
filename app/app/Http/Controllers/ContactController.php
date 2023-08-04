<?php
// app/Http/Controllers/ContactController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact_form');
    }

    public function confirm(Request $request)
    {
        //バリデーションを実行（結果に問題があれば処理を中断してエラーを返す）
    //    // $request->validate([
    //      //   'name' => 'required',
    //         'email' => 'required',
    //         'phone'  => 'required',
    //         'gender'  => 'required',
    //         'image'  => 'required',
    //         'phone'  => 'required',
    //         'message'  => 'required',
    //     ]);
        
        //フォームから受け取ったすべてのinputの値を取得
        $name   = $request->name;
        $email  = $request->email;
        $phone  = $request->phone;
        $gender = $request->gender;
        $message = $request->message;


        return view('contact_confirm', 
        compact('name','email','phone','gender','message'));
    }

    public function complete(Request $request)
    {
        return view('contact_complete');
    }
}

