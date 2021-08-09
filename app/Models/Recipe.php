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

}
