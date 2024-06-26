<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InventoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules():array
    {
       if(request()-> isMethod('post')){
        return [
            //
            'user'=>'rquired|string|max:300',
            'name'=>'rquired|string',
            'description'=>'rquired|string',
        ];
       } 
       else
    }{
        return [
            //
            'user.required'=>'user is rquired ',
            'name.required'=>'rquired',
            'description.required'=>'rquired',
        ];
       } 


       public function messages() 
       {
          if(request()-> isMethod('post')){
           return [
               //
               'user.required'=>'user is rquired ',
            ];
          } 
          else
       }{
           return [
               //
               'name.required'=>'rquired',
               'description.required'=>'rquired',
           ];
          } 
   
    }
