<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditPost extends FormRequest
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
    public function rules(): array
    {
        return [
            'title' => [
                'required',
                'max:250',
                'unique:posts,id,' . $this->currentID,
            ],
            'content' => [
                'required',
            ],
            'excerpt' => [
                'required',
            ],
            'keywords' => [
                'required',
            ],
            'image' => [
                'required',
            ],
        ];
    }
}
