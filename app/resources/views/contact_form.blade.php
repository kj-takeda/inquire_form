
<head>
    <meta charset="utf-8">
    <title>問い合わせ入力ページ</title>
    <link rel="stylesheet" href="/css/contact_form.css">
</head>

<!-- バリデーションエラー -->
<ul>
@foreach($errors->all() as $error)
    <li class="error-message"><p class="error-message-text">{{$error}}</p></li>
@endforeach
</ul>

<form action="{{ route('contact_confirm') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div>
        <label for="name">名前：</label>
        <input type="text" name="name" id="name" 
        placeholder="50文字以内" maxlength="50" 
        value="{{ old('name') }}" required>
    </div>

    <div>
        <label for="email">メールアドレス：</label>
        <input type="email" name="email" id="email"
         placeholder="@必須 50文字以内" maxlength="50" 
         value="{{ old('email') }}" required>
    </div>

    <div>
        <label for="phone">電話番号：</label>
        <input type="tel" name="phone" id="phone" 
        placeholder="半角数字のみ ハイフン不要" maxlength="11" 
        value="{{ old('phone') }}" required>
    </div>

    <div>
        <label>性別：</label>
        <label for="gender-male">男性</label>
        <input type="radio" name="gender" id="gender-male" required>
        <label for="gender-female">女性</label>
        <input type="radio" name="gender" id="gender-female" required>
    </div>

    <div>
        <label for="image">画像：</label>
        <input type="file" name="image" id="image" 
        accept="image/*" value="{{ old('image') }}">
        <input type="button" id="clear" value="クリア">
    </div>

    <div>
        <label for="message">お問い合わせ内容：</label>
        <textarea name="message" id="message" 
        placeholder="1000文字以内" maxlength="1000" required>
            {{ old('message') }}
        </textarea>
    </div>

    <button type="submit">送信</button>
</form>

<script src="js/file_clear.js"></script>
<script src="js/input_validate.js"></script>

