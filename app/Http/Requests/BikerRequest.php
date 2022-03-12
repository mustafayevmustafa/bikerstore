<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BikerRequest extends FormRequest
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
//        $image = $this->isMethod('POST') ? 'required' : 'nullable';

        return [
            'description' => 'string',
            'fuel_id'     => 'required',
            'image'       => "mimes:png,jpg,jpeg",
            'city_id'     => 'required',
            'km'          => 'required',
            'marka_id'    => 'required',
            'price'       => 'required',
            'pattern_id'  => 'required',
            'user_id'     => 'nullable',
            'category_id' => 'required',
            'color_id'    => 'required',
            'year'        => 'required',
            'barter'      => 'nullable|string',
            'credit'      => 'nullable|string',
            'contact_name'      => 'nullable|string',
            'contact_mail'      => 'nullable|string',
            'contact_phone'      => 'nullable',
        ];
    }
}
