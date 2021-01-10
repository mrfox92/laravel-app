<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ServiceCreateRequest extends FormRequest
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
            'name'          =>  'required',
            'description'   =>  'required|max:500',
            'type_id'       =>  ['required', Rule::exists('types', 'id')],
            'price'         =>  'nullable|numeric|min:1',
            'quantity'      =>  'nullable|numeric|min:1',
            'finished_at'   =>  'nullable|date',
            'category_id'   =>  ['required', Rule::exists('categories', 'id')],
            'region_id'     =>  ['required', Rule::exists('regions', 'id')],
            'commune_id'    =>  ['required', Rule::exists('communes', 'id')],
            'picture'       =>  'required|image|mimes:jpg,jpeg,png'
        ];
    }

    public function messages() {
        return [
            'category_id.required'  =>  'Este campo es obligatorio',
            'description.required'  =>  'Debe ingresar una descripción'
        ];
    }

    public function attributes () {
        return [
            'quantity'  =>  'cantidad'
        ];
    }
}
