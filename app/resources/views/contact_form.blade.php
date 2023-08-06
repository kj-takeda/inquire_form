
<head>
    <meta charset="utf-8">
    <title>問い合わせ入力ページ</title>
    <link rel="stylesheet" href="/css/contact_form.css">
</head>

<form action="{{ route('contact_confirm') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div>
        <label for="name">名前：</label>
        <input type="text" name="name" id="name" maxlength="50" placeholder="50文字以内" required>
    </div>

    <div>
        <label for="email">メールアドレス：</label>
        <input type="email" name="email" id="email" maxlength="50" placeholder="@必須 50文字以内" required>
    </div>

    <div>
        <label for="phone">電話番号：</label>
        <input type="tel" name="phone" id="phone" maxlength="11" placeholder="半角数字のみ ハイフン不要" required>
    </div>

    <div>
        <label>性別：</label>
        <label for="gender-male">男性</label>
        <input type="radio" name="gender" id="gender-male" value="男性" required>
        <label for="gender-female">女性</label>
        <input type="radio" name="gender" id="gender-female" value="女性" required>
    </div>

    <div>
        <label for="image">画像：</label>
        <input type="file" name="image" id="image" accept="image/*">
        <input type="button" id="clear" value="クリア">
    </div>

    <div>
        <label for="message">お問い合わせ内容：</label>
        <textarea name="message" id="message" maxlength="1000" placeholder="1000文字以内" required></textarea>
    </div>

    <button type="submit">送信</button>
</form>

<script src="js/file_clear.js"></script>
<script src="js/input_validate.js"></script>

