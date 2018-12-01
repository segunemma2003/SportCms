<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Input;
class PostRequest extends FormRequest
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
       $rules= [
            'title'=>'required|string',
            'title_image'=>'image|mimes:jpeg,bmp,png|max:2000',
            'body'=>'required',
            'category'=>'required',
            'summary'=>'required',
        
        ];
       
        $photos = count(Input::file('all_image'));
        foreach(range(0, $photos) as $index) {
            $rules['photos.' . $index] = 'image|mimes:jpeg,bmp,png|max:2000';
        }
        return $rules;
    }
}
