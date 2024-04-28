<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ItemRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // return false;
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
                'name' => ['required','string'],
                'imagelink' => ['required','string'],
                'category' => ['required','string'],
                'image' => ['required','image','mimes:jpeg,png,jpg,gif,svg','max:2048'],
                'description' => ['required','string'],
                'qty' => ['required','integer'],
            ];
         
    }

    // public function messages(){
    //     if(request()->isMethod('post')) {
    //         return [
    //             'name.required' => 'Name is required!',
    //             // 'image.required' => 'Image is required!',
    //             'description.required' => 'Descritpion is required!'
    //         ];
    //     } else {
    //         return [
    //             'name.required' => 'Name is required!',
    //             'description.required' => 'Descritpion is required!'
    //         ];   
    //     }
    
    // }
}
