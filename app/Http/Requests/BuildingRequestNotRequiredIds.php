<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BuildingRequestNotRequiredIds extends FormRequest
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
            //

            'imagesArrayHolder' => 'required|json',

            'name' => 'required|string|min:3|max:100',

            'price' => 'required|integer',

            'status'=> 'nullable|integer',

            'state'=> 'required|integer',
            
            'rent'=> 'required|integer',

            'square'=> 'required|integer',

            'type'=> 'required|integer',

            'roomNumber'=> 'nullable|integer',
            
            'lang' => 'nullable|integer', 

            'lat'=> 'nullable|integer',

            'largDisc' => 'required|min:5|max:200', 

            'kind'=> 'required|integer',

           'tag_list' => 'nullable|array',

            'area_id'=> 'required|integer',

            'tel' => 'required|string|min:8|max:14'


            
        
        ];

    }

    public function messages()
    {
        
        $messages = [
        /*
        'same'    => 'The :attribute and :other must match.',
        'size'    => 'The :attribute must be exactly :size.',
        'between' => 'The :attribute must be between :min - :max.',
        'in'      => 'The :attribute must be one of the following types: :values',
        */
        ];

        return [
        /*
            'title.required' => 'A title is required',
            'body.required'  => 'A message is required',
        */
        ];

    }
}
