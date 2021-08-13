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
            'name'               => 'required|min:2|max:100|unique:items,id,' . $this->currentID,
            'cost'               => 'integer',
            'rare_cost'          => 'integer',
            'crystal_count'      => 'integer',
            'category_id'        => 'integer',
            'p_attack'           => 'integer',
            'm_attack'           => 'integer',
            'soul_shots_count'   => 'integer',
            'spirit_shots_count' => 'integer',
            'p_def'              => 'integer',
            'm_def'              => 'integer',
        ];
    }
}
