<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'path' => 'required',
            'detail' => 'required|min:1',
        ];
    }

    public function messages() {
        return [
            'path.required' => '※画像を選択してください',
            'detail.required' => '※コメントを入力してください',
        ];
    } 
}
