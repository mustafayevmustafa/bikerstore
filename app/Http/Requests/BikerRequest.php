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
        return [
//            'description' => 'required|string',
//            'fuel_id' => 'required|number',
//            'credit' => 'required|boolean',
//            'barter' => 'required|boolean',
//            'hit' => 'required|boolean',
//            'image' => 'required|string',
//            'price' => 'required|number',
//            'city_id' => 'required|number',
//            'vehicle_id' => 'required|number',
            'marka_id' => 'required|integer',
//            'pattern_id' => 'required|number',
//            'customer_id' => 'required|number',
//            'category_id' => 'required|number',
//            'color_id' => 'required|number',
        ];
    }
}
