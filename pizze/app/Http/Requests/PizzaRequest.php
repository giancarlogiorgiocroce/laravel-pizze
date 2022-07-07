<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PizzaRequest extends FormRequest
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
            'name' => "required |max: 80 | min: 5",
            'price' => "required | numeric | max: 8 | min: 3",
            'popularity' => "required | numeric | max: 2 | min: 1",
            'ingredients' => "required | max: 255 | min: 5",
            'is_veggie' => "required |",
            'description' => "required |max: 80 | min: 5",

        ];
    }

    // public function message()
    // {
    //     return [
    //         'name.required' => "required |max: 80 | min: 5",
    //         // 'price' => "required |max: 80 | min: 5",
    //         // 'popularity' => "required | max: 80 | min: 5",
    //         // 'ingredients' => "required | max: 80 | min: 5",
    //         // 'is_veggie' => "required |",
    //         // 'description' => "required |max: 80 | min: 5",

    //     ];
    // }
}
