<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Recipe extends Model {
    use SoftDeletes;

    protected $guarded = [ 'id', 'created_at', 'updated_at', 'deleted_at' ];

    public function item() {
        return $this->belongsTo( Item::class );
    }

    public function resource() {
        return $this->belongsTo( Resource::class );
    }

    public function resources() {
        return $this->belongsToMany( Resource::class )->withPivot( 'resource_quantity' );
    }

    public function getCraftItemAttribute() {

        return ! empty( $this->resource_id ) ? $this->resource : $this->item;
    }

}
