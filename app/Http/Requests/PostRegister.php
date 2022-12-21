<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRegister extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name'=>'required|min:2',
            'email'=>'required|email',
            'password'=>'required',
            'confirm_password'=>'required|same:password'
        ];
    }
    public function messages()
    {
        return [
            'name.required'=>'Tên không được để trống',
            'name:min'=>'Tên phải nhiều hơn 2 ký tự',
            'email.required'=>'Email không được để trống',
            'email.email'=>'bạn vui lòng điền đúng định dạng email',
            'password.required'=>'Mật khẩu không được để rỗng',
            'confirm_password.required'=>'Mật khẩu không được để rỗng',
            'confirm_password.same'=>'phải trùng với mật khẩu bạn ơi'
        ];
    }
}
