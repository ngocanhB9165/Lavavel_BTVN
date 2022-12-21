<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookAddRequest extends FormRequest
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
            'name' => 'required|unique:book|min:2',
            'price' => 'required|numeric|min:1',
            'file' => 'required|mimes:jpg,bmp,png,webp,jpeg'
        ];
    }
    public function messages()
    {
        return[
            'name.required' => 'Tên không được để rỗng',
            'name.unique' => request()->name.' đã tồn tại',
            'name.min' => 'Tên phải nhiều hơn 2 ký tự',
            'price.required' => 'Giá không được để rỗng',
            'price.numeric' => 'Giá phải là số',
            'price.min' => 'Giá phải lớn hơn hoặc bằng 1',
            'file.required' => 'Ảnh không được để trống',
            'file.mimes' => 'Ảnh phải thuộc định dạng:jpg,bmp,png,webp,jpeg '
        ];
        
    }
}
