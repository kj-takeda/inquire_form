<head>
    <meta charset="utf-8">
    <title>確認ページ</title>
    <link rel="stylesheet" href="/css/contact_confirmation.css">
</head>

<form method="POST" action="{{ route('contact_store') }}">
    @csrf

    @if (isset($request->name))
        <div class="confirmation-box">
            <label for="name">名前：</label>
            <p>{{$request->name }}</p>
            <input name="name" value="{{ $request->name }}" type="hidden">
        </div>
    @endif

    @if (isset($request->email))
        <div class="confirmation-box">
            <label for="email">メールアドレス：</label>
            <p>{{ $request->email }}</p>
            <input name="email" value="{{ $request->email }}" type="hidden">
         </div>
    @endif

    @if (isset($request->phone))
        <div class="confirmation-box">
            <label for="phone">電話番号：</label>
            <p>{{ $request->phone }}</p>
            <input name="phone" value="{{ $request->phone }}" type="hidden">
        </div>
    @endif

    @if (isset($request->gender))
        <div class="confirmation-box">
            <label for="gender">性別：</label>
            <p>{{ $request->gender }}</p>
            <input name="gender" value="{{ $request->gender }}" type="hidden">
        </div>
    @endif

    @if (isset($request->message))
        <div class="confirmation-box">
            <label for="message">お問い合わせ内容：</label>
            <p>{{ $request->message }}</p>
            <input name="message" value="{{ $request->message }}" type="hidden">
        </div>
    @endif

    @if (isset($image_path))
        <div class="confirmation-box">
            <label for="image">画像：</label>
            {{ $image_path }}
            <img src="storage/{{ $new_name }}">
            <input type="hidden" name="image_path" value="{{ $image_path }}">
            <input type="hidden" name="extension" value="{{ $extension }}">
        </div>
    @else
        <div class="confirmation-box">
            <label for="image">画像：</label>
            {{ $image_path }}
            <img src="storage/{{ $new_name }}">
            <input type="hidden" name="image_path" value="{{ $image_path }}">
            <input type="hidden" name="extension" value="{{ $extension }}">
        </div>
    @endif

    <button class="next-btn" type="submit" name="action" value="submit">
        送信する
    </button>
</form>
