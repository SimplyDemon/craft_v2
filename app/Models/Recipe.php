<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Recipe extends Model {
    use SoftDeletes;

    protected $guarded = [ 'id', 'created_at', 'updated_at', 'deleted_at' ];

    public function category() {
        return $this->belongsTo( Category::class );
    }

    public function resource() {
        return $this->belongsTo( Resource::class );
    }

    public function resources() {
        return $this->belongsToMany( Resource::class )->withPivot( 'resource_quantity' );
    }

    public function users() {
        return $this->belongsToMany( User::class );
    }

    public function getGradeImageAttribute() {
        $grade = $this->grade;

        if ( empty( $grade ) || $grade === 'none' ) {
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

    public function getRareChanceAttribute() {
        $grade = $this->attributes['grade'];

        switch ( $grade ) {
            case 'S-84':
                $craftLevel = 82;
                break;

            case 'S-80':
            case 'S':
                $craftLevel = 70;
                break;

            default:
                return null;
                break;
        }

        $crafterLevel = 85;
        $rareChance   = 3 + ( $crafterLevel - $craftLevel ) * 0.2;

        return $rareChance;
    }

    public function getMasterworkTextAttribute() {
        $masterWorkText = null;

        if ( $this->attributes['masterwork_description'] ) {
            $masterWorkText = '';

            if ( $this->rare_chance ) {
                $masterWorkText = 'Crafter level <b>85</b><br>';
                $masterWorkText .= 'Chance: <b>' . $this->rare_chance . '</b>%<br>';
            }
            if ( $this->attributes['masterwork_name'] ) {
                $masterWorkText .= '<i>' . $this->attributes['masterwork_name'] . '</i><br>';
            }
            $masterWorkText .= $this->attributes['masterwork_description'];
        }

        return $masterWorkText;
    }
}
