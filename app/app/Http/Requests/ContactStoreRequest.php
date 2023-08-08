<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactStoreRequest extends FormRequest
{
    // バリデーションエラーがあれば入力ページに遷移
    protected $redirect = '/';
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name'    => 'required|string|max:50',
            'email'   => 'required|email|max:50',
            'phone'   => 'required|numeric|max:11',
            'gender'  => 'required|string',
            'message' => 'required|string|max:1000',
            'image'   => 'image|mimes:jpg,jpeg,png',
        ];
    }

    public function messages()
    {
        return [
            'required'    => ':attributeは必須です。',
            'email'       => ':attributeはメールアドレス形式で入力してください。',
            'string'      => ':attributeは文字列で入力してください。',
            'numeric'     => ':attributeは半角数値で入力してください。',
            'name.max'    => ':attributeは50文字以内で入力してください。',
            'email.max'   => ':attributeは50文字以内で入力してください。',
            'phone.max'   => ':attributeは11文字以内で入力してください。',
            'message.max' => ':attributeは1000文字以内で入力してください。',
            'mimes'       => ':attributeは「jpeg」「png」「jpg」限定となります。',
        ];
    }

    public function attributes()
    {
        return [
            'name'    => '名前',
            'email'   => 'メールアドレス',
            'phone'   => '電話番号',
            'gender'  => '性別',
            'image'   => '画像',
            'message' => 'お問い合わせ内容',
        ];
    }
}
