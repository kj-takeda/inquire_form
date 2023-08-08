<?php
// app/Http/Controllers/ContactController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//フォームリクエストバリデーション
use App\Http\Requests\ContactStoreRequest;
// 画像の保存に使用するStorageクラス
use Illuminate\Support\Facades\Storage;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact_form');
    }

    public function confirm(ContactStoreRequest $request)
    {
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
        compact('request','image_path','extension','new_name'));
    }

    public function store(ContactStoreRequest $request)
    {
        return redirect('/complete');
    }
    
    public function complete()
    {
        return view('contact_complete');
    }
}

