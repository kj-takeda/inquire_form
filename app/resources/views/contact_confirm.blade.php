<head>
    <meta charset="utf-8">
    <title>確認ページ</title>
    <link rel="stylesheet" href="/css/contact_confirmation.css">
</head>

<form method="POST" action="{{ route('contact_store') }}">
    @csrf
    <div class="confirmation-box">
        <label for="name">名前：</label>
        <p>{{$request->name }}</p>
        <input name="name" value="{{ $request->name }}" type="hidden">
    </div>
    
    <div class="confirmation-box">
        <label for="email">メールアドレス：</label>
        <p>{{ $request->email }}</p>
        <input name="email" value="{{ $request->email }}" type="hidden">
    </div>
    
    <div class="confirmation-box">
        <label for="phone">電話番号：</label>
        <p>{{ $request->phone }}</p>
        <input name="phone" value="{{ $request->phone }}" type="hidden">
    </div>

    <div class="confirmation-box">
        <label for="gender">性別：</label>
        @if($request->gender == 1)
            <p>男性</p>
        @else
            <p>女性</p>
        @endif
        <input name="gender" value="{{ $request->gender }}" type="hidden">
    </div>

    <div class="confirmation-box">
        <label for="message">お問い合わせ内容：</label>
        <p>{{ $request->message }}</p>
        <input name="message" value="{{ $request->message }}" type="hidden">
    </div>

    <div class="confirmation-box">
        <label for="image">画像：</label>
        {{ $image_path }}
        <img src="storage/{{ $new_name }}">
        <input type="hidden" name="image_path" value="{{ $image_path }}">
        <input type="hidden" name="extension" value="{{ $extension }}">
    </div>

    <button class="next-btn" type="submit" name="action" value="submit">
        送信する
    </button>
</form>
