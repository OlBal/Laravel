<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AnimalRequest extends FormRequest
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

                'name'=> ['required', "name","max:100"],
                'type'=> ['required', "type","max:100"],
                'date_of_birth'=> ['required', "date_of_birth"],
                'weight_kg'=> ['required', "weight_kg"],
                'height in meters'=> ['required', "height_m"],
                'biteyness'=> ['required', "biteyness"]
        ];
    }
}
