<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreUpdatePost extends FormRequest
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
        $id = $this->segment(2);

        $rules = [
            'title' => [
                'required',
                'min:3',
                'max:160',
                //"unique:posts,title,{$id},id",
                Rule::unique('posts')->ignore($id),
            ],
            'content' => ['nullable', 'min:5', 'max:10000'],
            'image' => 'file|mimes:jpg,jpeg,png,gif|max:1024',
        ];

        if ($this->method() == 'PUT') {
            $rules['image'] = ['nullable', 'mimes:jpg,jpeg,png,gif|max:1024'];
        }

        return $rules;
    }
}
