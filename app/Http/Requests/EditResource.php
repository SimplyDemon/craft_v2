<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditResource extends FormRequest {
	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize() {
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules() {
		return [
            'name'       => 'required|min:2|max:50|unique:resources,id,' . $this->currentID,
            'price_sell' => 'integer',
            'image'      => 'file',
        ];
	}
}
