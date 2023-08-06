//クリアボタンの要素を取得
const clear_btn = document.querySelector('#clear');
//画像設定要素を取得
const image_input = document.querySelector('#image');
//クリアボタンをクリックすると設定画像が消える
clear_btn.addEventListener('click',()=>{
    image_input.value = '';
})