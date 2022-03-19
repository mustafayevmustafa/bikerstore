<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SettingRequest extends FormRequest
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
            'site_logo'   => "mimes:png,jpg,jpeg",
            'site_title'  => 'required|string',
            'site_url'    => 'required|string',
            'address'     => 'required|string',
            'email'       => 'required|email',
            'mobile'      => 'required',
            'description' => 'required|string',
            'keywords'    => 'required|string',
            'author'      => 'required|string',
        ];
    }
}
