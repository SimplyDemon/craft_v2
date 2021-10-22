<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Recipe extends Model {
    use SoftDeletes;

    protected $guarded = [ 'id', 'created_at', 'updated_at', 'deleted_at' ];

    public function categories() {
        return $this->belongsTo( 'App\Models\Category' );
    }

    public function resources() {
        return $this->belongsToMany( 'App\Models\Resource' );
    }

    public function getGradeImageAttribute() {
        $grade = $this->grade;

        if ( empty( $grade ) ) {
            return null;
        }

        return asset( 'storage' ) . '/' . "uploads/grade/{$grade}.png";
    }

    /*
     * Replace % on %25 for correct display percent symbol in url address
     */
    public function getImgAttribute() {

        return str_replace( '%', '%25', $this->attributes['img'] );
    }
}
