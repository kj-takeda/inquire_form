
<head>
    <meta charset="utf-8">
    <title>問い合わせ入力ページ</title>
    <link rel="stylesheet" href="/css/contact_form.css">
</head>

<form action="{{ route('contact_confirm') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div>
        <label for="name">名前：</label>
        <input type="text" name="name" id="name" 
        placeholder="50文字以内" maxlength="50"
        value="{{ old('name') }}" required>
    </div>

    @if($errors->has('name'))
        <div class="error-name-text">{{ $errors->first('name') }}</div>
    @endif

    <div>
        <label for="email">メールアドレス：</label>
        <input type="email" name="email" id="email"
         placeholder="@必須 50文字以内" maxlength="50"
         value="{{ old('email') }}" required>
    </div>

    @if($errors->has('email'))
        <div class="error-email-text">{{ $errors->first('email') }}</div>
    @endif

    <div>
        <label for="phone">電話番号：</label>
        <input type="tel" name="phone" id="phone" 
        placeholder="半角数字のみ ハイフン不要" 
        value="{{ old('phone') }}" maxlength="11" required>
    </div>

    @if($errors->has('phone'))
        <div class="error-phone-text">{{ $errors->first('phone') }}</div>
    @endif

    <div>
        <label>性別：</label>
        <label for="gender-male">男性</label>
        <input type="radio" name="gender" id="man" value=1>
        <label for="gender-female">女性</label>
        <input type="radio" name="gender" id="female" value=2>
    </div>

    @if($errors->has('gender'))
        <div class="error-gender-text">{{ $errors->first('gender') }}</div>
    @endif

    <div>
        <label for="image">画像：</label>
        <input type="file" name="image" id="image" 
        accept="image/*" value="{{ old('image') }}">
        <input type="button" id="clear" value="クリア">
    </div>

    @if($errors->has('image'))
        <div class="error-image-text">{{ $errors->first('image') }}</div>
    @endif

    <div>
        <label for="message">お問い合わせ内容：</label>
        <textarea name="message" id="message" 
        placeholder="1000文字以内" maxlength="1000" required>{{ old('message') }}</textarea>
    </div>

    @if($errors->has('message'))
        <div class="error-message-text">{{ $errors->first('message') }}</div>
    @endif

    <button type="submit">送信</button>
</form>

<script src="js/file_clear.js"></script>
<script src="js/input_validate.js"></script>
<script src="js/add_border_color.js"></script>


