<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TokuRequest extends FormRequest
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
            'category' => 'required',
            'find' => 'required',
            'deliver' => 'required|string|max:100',
            'description' => 'string|max:200',
            'image_url' => 'required'
        ];
    }
}
