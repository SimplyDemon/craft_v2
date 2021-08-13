<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model {
    use HasFactory;

    protected $guarded = [ 'id', 'created_at', 'updated_at', 'deleted_at' ];

    public function category() {
        return $this->belongsTo( Category::class );
    }

    public function recipe() {
        return $this->hasOne( Recipe::class );
    }
}
