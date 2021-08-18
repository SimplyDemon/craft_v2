<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditRecipe extends FormRequest {
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
            'cost'        => 'nullable|integer',
            'item_id'     => 'nullable|unique:recipes,item_id,' . $this->currentID,
            'resource_id' => 'nullable|unique:recipes,resource_id,' . $this->currentID,
        ];
	}
}
