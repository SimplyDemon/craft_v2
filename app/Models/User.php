<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable {
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'is_enable_animation',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function resources() {
        return $this->belongsToMany( Resource::class )->withPivot( 'price_buy' )->withPivot( 'price_sell' );
    }

    public function recipes() {
        return $this->belongsToMany( Recipe::class )->withPivot( 'price_buy' )->withPivot( 'price_sell' );
    }

    public function conversations() {
        return $this->belongsToMany( Conversation::class );
    }

    public function messages() {
        return $this->belongsToMany( Message::class );
    }

    public function getIsAdminAttribute() {

        return $this->attributes['is_admin'];
    }

    public function getIsCanUpdatePriceAttribute()
    {
        return $this->attributes['is_can_update_price'];
    }

    public function getIsEnableAnimationAttribute()
    {
        return $this->attributes['is_enable_animation'];
    }

    public function getIsHasNewMessageAttribute()
    {
        return $this->is_has_new_messages_for_admin || $this->is_has_new_messages_for_user;
    }

    public function getIsHasNewMessagesForAdminAttribute()
    {
        $isCurrentUserAdmin = $this->is_admin;
        if (!$isCurrentUserAdmin) {
            return false;
        }

        $conversationsWithNewMessagesForAdmin = Conversation::where('is_has_new_messages_for_admin', true)->get();

        return $conversationsWithNewMessagesForAdmin->count() > 0;
    }

    public function getIsHasNewMessagesForUserAttribute()
    {
        $conversationsWithNewMessagesForUser = Conversation::where('user_id', $this->id)->where(
            'is_has_new_messages_for_user',
            true
        )->get();

        return $conversationsWithNewMessagesForUser->count() > 0;
    }
}
