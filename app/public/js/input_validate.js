//名前入力箇所
const name_input = document.querySelector('#name');
//メアド入力箇所
const mail_input = document.querySelector('#email');
//電話番号入力箇所
const phone_input = document.querySelector('#phone');
//お問い合わせ内容入力箇所
const message_input = document.querySelector('#message');

//名前の文字数制限
name_max    = 50;
//メアドの文字数制限
mail_max    = 50;
//電話番号の文字数制限
phone_max     = 11;
//問い合わせ内容の文字数制限
message_max = 1000;

//名前項目キーが押されたとき
name_input.addEventListener('keyup',()=>{
    //50文字より文字数が多ければ
    if(name_input.value.length > name_max){
        alert("50文字以内で入力してください")
    }
})

//メアド項目キーが押されたとき
mail_input.addEventListener('keyup',()=>{
    //50文字より文字数が多ければ
    if(mail_input.value.length > mail_max){
        alert("50文字以内で入力してください")
    }
})

//電話番号項目キーが押されたとき
phone_input.addEventListener('keyup',()=>{
    //11文字より文字数が多ければ
    if(phone_input.value.length > phone_max){
        alert("11文字以内で入力してください")
    }
    //半角数字以外が含まれていれば
    if (!/^\d+$/.test(phone_input.value)) {
        alert("入力内容に半角数字、ハイフン以外が含まれています");
    }
})  

//お問い合わせ内容項目キーが押されたとき
message_input.addEventListener('keyup',()=>{
    //1000文字より文字数が多ければ
    if(message_input.value.length > message_max){
        alert("1000文字以内で入力してください")
    }
})