<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateProduct extends FormRequest
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
        if ($this->id){
            return [
                'category_id' => 'required',
                'title' => 'required',
                'slug' => 'required|unique:products,slug,'.$this->id,
                'short_description' => 'required',
                'description' => 'required',
                'image' => 'required',
            ];
        }else{
            return [
                'category_id' => 'required',
                'title' => 'required',
                'slug' => 'required|unique:products',
                'short_description' => 'required',
                'description' => 'required',
                'image' => 'required',
            ];
        }
    }
}
