<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AnnouncementRequest extends FormRequest
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
            'title'=>'required|string|max:120',
            'long_description'=>'required|string|max:400',
            'short_description'=>'required|string|max:400',
            'category'=>'required',
            'price' =>'required'
        ];
    }
    public function messages()
    {
        return [
            'title.required'=>'Il titlo è richiesto',
            'long_description.required'=>'La descrizione lunga è richiesta',
            'short_description.required'=>'La descrizione corta è richiesta',
            'price.required'=>'Il prezzo è richiesto',
        ];
    }
}
