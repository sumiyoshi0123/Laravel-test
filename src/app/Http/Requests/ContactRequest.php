<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'familyname' => 'required',
            'name' => "required",
            'gender' => 'required',
            'email' => 'required|email',
            'postcode' => 'required|max:8' ,
            'address' => 'required',
            'option' => 'required|max:120'
        ];
    }

    public function messages()
    {
        return [
        'familyname.required' => '姓を入力してください',
        'name.required' => '名前を入力してください',
        'email.required' => 'メールアドレスを入力してください',
        'postcode.required' => '郵便番号を
        入力してください',
        'postcode.max' => '正しい郵便番号を入力してください',
        'address.required' => '住所を入力してください',
        'option.required' => '内容を入力してください',
        'option.max' => '120字以内で入力してください'
        ];
    }
}
