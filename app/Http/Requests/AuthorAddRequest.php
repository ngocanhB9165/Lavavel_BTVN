<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthorAddRequest extends FormRequest
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
            'name' => 'required|min:2|unique:author'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Tên không được để rỗng',
            'name.min'=> 'Tên phải nhiều hơn 2 thứ tự',
            'name.unique'=>request()->name.' đã tồn tại'
        ];
    }
}
