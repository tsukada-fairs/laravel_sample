<?php

namespace App\Http\Requests;

use App\Http\Requests\ApiRequest;

class MemberAddRequest extends ApiRequest
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
            'email' => 'required|max:255|email|unique:members,email',
            'password' => 'required|confirmed',
            'last_name' => 'required|max:255',
            'first_name' => 'required|max:255',
            'last_name_kana' => 'required|max:255',
            'first_name_kana' => 'required|max:255',
            'sex' => 'required|integer|in:1,2',
            'birthday_year' => 'required|integer',
            'birthday_month' => 'required|integer',
            'birthday_day' => 'required|integer',
            'post_code' => 'required|max:7',
            'addr1' => 'required|max:255',
            'addr2' => 'required|max:255',
            'addr3' => 'required|max:255',
            'addr4' => 'max:255',
            'tel1' => 'required|max:255',
            'tel2' => 'max:255',
            'height' => 'required|integer',
            'weight' => 'required|integer',
        ];
    }

    /**
     * バリデーションエラーのカスタム属性の取得
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'email' => 'メールアドレス',
            'password' => 'パスワード',
            'last_name' => '姓',
            'first_name' => '名',
            'last_name_kana' => '姓（カナ）',
            'first_name_kana' => '名（カナ）',
            'sex' => '性別',
            'birthday' => '誕生日',
            'post_code' => '郵便番号',
            'addr1' => '都道府県',
            'addr2' => '市区町村',
            'addr3' => '以降の住所',
            'addr4' => '建物名、号室',
            'tel1' => '電話番号1',
            'tel2' => '電話番号2',
            'height' => '身長',
            'weight' => '体重',
        ];
    }
}
