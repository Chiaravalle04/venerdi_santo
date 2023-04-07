<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAnnouncementRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return  true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'city'=>'required|max:100',
            'country'=>'required|max:100',
            'price'=>'required|min:1|max:1000',
            'vote'=>'required|min:0|max:5|numeric',
            'image'=>'nullable|image|max:2048',
            'description'=>'required|min:3|max:1000',
            'booked'=>'required|in:0,1'
        ];
    }
}
