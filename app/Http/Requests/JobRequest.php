<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JobRequest extends FormRequest
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
            'country_id'=>'required',
            'name_uz'=>'required|max:255',
            'name_en'=>'required|max:255',
            'title_uz'=>'required',
            'title_en'=>'required',
            'file'=>'required',
        ];
    }
}
