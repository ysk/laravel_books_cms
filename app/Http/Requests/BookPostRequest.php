<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookPostRequest extends FormRequest
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
            'item_name'   => 'required|min:3|max:255',
            'item_number' => 'required|min:1|max:3',
            'item_amount' => 'required|max:10',
            'published'   => 'required',
        ];
    }

    public function attributes()
    {
        return [
            'item_name'   => '本のタイトル',
            'item_number' => '冊数',
            'item_amount' => '価格',
            'published'   => '出版日',
        ];
    }
    
}
