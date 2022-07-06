<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SliderStoreRequest extends FormRequest
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
            'slider_title'     => 'required|min:3'
        ];
    }
    public function messages()
    {
        return [
            'slider_title.required' => 'Slider Title is required',
            'slider_title.min' => 'Minimum 3 simvol olmalidir'
        ];
    }
}
