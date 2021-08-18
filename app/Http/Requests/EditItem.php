<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditItem extends FormRequest {
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
            'name'        => 'required|min:2|max:100|unique:items,id,' . $this->currentID,
            'category_id' => 'required|integer',

            'image'              => 'nullable|file',
            'cost'               => 'nullable|integer',
            'rare_cost'          => 'nullable|integer',
            'crystal_count'      => 'nullable|integer',
            'p_attack'           => 'nullable|integer',
            'm_attack'           => 'nullable|integer',
            'soul_shots_count'   => 'nullable|integer',
            'spirit_shots_count' => 'nullable|integer',
            'p_def'              => 'nullable|integer',
            'm_def'              => 'nullable|integer',
        ];
    }
}
