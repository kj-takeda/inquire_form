//名前入力箇所
const name_input = document.querySelector('#name');
//メアド入力箇所
const mail_input = document.querySelector('#email');
//電話番号入力箇所
const phone_input = document.querySelector('#phone');
//性別(男性)選択箇所
const gender_man_radio = document.querySelector('#man');
//性別(女性)選択箇所
const gender_female_radio = document.querySelector('#female');
//画像選択箇所
const image_file = document.querySelector('#image');
//お問い合わせ内容入力箇所
const message_input = document.querySelector('#message');

// // //お問い合わせ内容入力箇所
// const message_input = document.querySelector('#message');

window.addEventListener('load', function() {
    //名前エラー
    const error_name = document.querySelector('.error-name-text');
    //メアドエラー
    const error_email = document.querySelector('.error-email-text');
    //電話番号エラー
    const error_phone = document.querySelector('.error-phone-text');
    //性別エラー
    const error_gender = document.querySelector('.error-gender-text');
    //画像エラー
    const error_image = document.querySelector('.error-image-text');
    //お問い合わせ内容エラー
    const error_message = document.querySelector('.error-message-text');


    if(error_name){
        alert("name_error");
        name_input.style.border = '2px solid red';
    }
    
    if(error_email){
        alert("email_error");
        mail_input.style.border = '2px solid red';
    }

    if(error_phone){
        alert("phone_error");
        phone_input.style.border = '2px solid red';
    }

    if(error_gender){
        alert("gender_man_error");
        gender_man_radio.style.border = '2px solid red';
        gender_female_radio.style.border = '2px solid red';
    }

    if(error_image){
        alert("image_error");
        image_file.style.border = '2px solid red';
    }

    if(error_message){
        alert("message_error");
        message_input.style.border = '2px solid red';
    }
});