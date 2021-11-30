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

    public function recipe() {
        return $this->hasOne( Recipe::class );
    }

    public function users() {
        return $this->belongsToMany( User::class );
    }

    public function getPriceAttribute() {
        $user = auth()->user();

        return $user && $user->resources->find( $this->id ) && $user->resources->find( $this->id )->pivot->price_sell ? $user->resources->find( $this->id )->pivot->price_sell : $this->price_sell;
    }
}
