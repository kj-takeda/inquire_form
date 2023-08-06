<head>
    <meta charset="utf-8">
    <title>確認ページ</title>
    <link rel="stylesheet" href="/css/contact_confirmation.css">
</head>

<form method="POST" action="{{ route('contact_complete') }}">
    @csrf

    @if (isset($name))
        <div class="confirmation-box">
            <label for="name">名前：</label>
            <p>{{ $name }}</p>
            <input name="name" value="{{ $name }}" type="hidden">
        </div>
    @endif

    @if (isset($email))
        <div class="confirmation-box">
            <label for="email">メールアドレス：</label>
            <p>{{ $email }}</p>
            <input name="email" value="{{ $email }}" type="hidden">
         </div>
    @endif

    @if (isset($phone))
        <div class="confirmation-box">
            <label for="phone">電話番号：</label>
            <p>{{ $phone }}</p>
            <input name="phone" value="{{ $phone }}" type="hidden">
        </div>
    @endif

    @if (isset($gender))
        <div class="confirmation-box">
            <label for="gender">性別：</label>
            <p>{{ $gender }}</p>
            <input name="gender" value="{{ $gender }}" type="hidden">
        </div>
    @endif

    @if (isset($message))
        <div class="confirmation-box">
            <label for="message">お問い合わせ内容：</label>
            <p>{{ $message }}</p>
            <input name="message" value="{{ $message }}" type="hidden">
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

    <button class="back-btn" type="submit" name="action" value="back">
        入力内容修正
    </button>
    <button class="next-btn" type="submit" name="action" value="submit">
        送信する
    </button>
</form>
