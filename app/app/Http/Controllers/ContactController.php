<?php
// app/Http/Controllers/ContactController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// 画像の保存に使用するStorageクラス
use Illuminate\Support\Facades\Storage;

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

        $image = $request->file('image');

        if ($image) {
            // 拡張子の取得
            $extension = $image->getClientOriginalExtension();

            // 新しいファイル名を作る（ランダムな文字数とする）
            $new_name = uniqid() . "." . $extension;

            // 一時的にtmpフォルダに保存する
            $image_path = Storage::putFileAs(
                'public', $request->file('image'), $new_name
            );

        } else {
            $new_name = 'noimage.jpg';
            $extension = '0';
            $image_path = 'noimage.jpg';
        }

        return view('contact_confirm', 
        compact('name','email','phone','gender',
        'message', 'image_path','extension','new_name'));
    }

    public function complete(Request $request)
    {
        return view('contact_complete');
    }
}

