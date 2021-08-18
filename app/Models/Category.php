<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {
    protected $guarded = [ 'id', 'created_at', 'updated_at', 'deleted_at' ];

    public function items() {
        return $this->hasMany( Item::class );
    }

    public function parentCategory() {
        return $this->belongsTo( Category::class, 'category_id' );
    }
}
