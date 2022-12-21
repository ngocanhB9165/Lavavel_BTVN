<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthorEditRequest extends FormRequest
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
            'name'=> 'required|min:2|unique:author,name,'.request()->id
        ];
    }
    public function messages()
    {
        return[
            'name.required' => 'Tên không được để rỗng',
            'name.min' => 'Tên phải dài hơn 2 ký tự',
            'name.unique'=> request()->name.' đã tồn tại'
        ];
       
    }
}
