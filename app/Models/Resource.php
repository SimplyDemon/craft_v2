<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Resource extends Model {
    use SoftDeletes;

    protected $guarded = [ 'id', 'created_at', 'updated_at', 'deleted_at' ];

    public function recipes() {
        return $this->belongsToMany( Recipe::class );
    }

    public function users() {
        return $this->belongsToMany( User::class );
    }


}
