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

    /**
     *  Calculate masterwork (double craft) proc chance
     *
     * Recipe levels and craft level on bow example:
     *    Vesper Thrower; Grade = S-84; Recipe lvl = 10; craft lvl = 82
     *    Icarus Spitter; Grade = S-80; Recipe lvl = 9; craft lvl = 70
     *    Dynasty Bow; Grade = S; Recipe lvl = 9; craft lvl = 70
     *    Draconic Bow; Grade = S; Recipe lvl = 9; craft lvl = 70
     *    Shyeed's Bow; Grade = A; Recipe lvl = 8; craft lvl = 62
     *    Soul Bow; Grade = A; Recipe lvl = 8; craft lvl = 62
     *    Carnage Bow; Grade = A; Recipe lvl = 7; craft lvl = 55
     *    Bow of Peril; Grade = B; Recipe lvl = 7; craft lvl = 55
     *    Dark Elven Longbow; Grade = B; Recipe lvl = 6; craft lvl = 49
     *    Eminence Bow; Grade = C; Recipe lvl = 6; craft lvl = 49
     *    Akat Longbow; Grade = C; Recipe lvl = 5; craft lvl = 43
     *    Noble Elven Bow; Grade = C; Recipe lvl = 5; craft lvl = 43
     *    Elemental Bow; Grade = C; Recipe lvl = 5; craft lvl = 43
     *    Crystallized Ice Bow; Grade = C; Recipe lvl = 4; craft lvl = 36
     *
     * Here we can see lowest grade tier item has different recipe lvl, so we don't need add recipe lvl for all item, only for lowest and top C grade.
     *
     * Use grade switch only for case if recipe lvl not set
     */
    public function getRareChanceAttribute() {
        $lvl = $this->attributes['lvl'];
        if ( $lvl ) {
            switch ( $lvl ) {
                case 10:
                    $craftLevel = 82;
                    break;

                case 9:
                    $craftLevel = 70;
                    break;

                case 8:
                    $craftLevel = 62;
                    break;

                case 7:
                    $craftLevel = 55;
                    break;

                case 6:
                    $craftLevel = 49;
                    break;

                case 5:
                    $craftLevel = 43;
                    break;

                case 4:
                    $craftLevel = 36;
                    break;

                case 3:
                    $craftLevel = 28;
                    break;

                case 2:
                    $craftLevel = 20;
                    break;

                case 1:
                    $craftLevel = 5;
                    break;

                case 0:
                    $craftLevel = 0;
                    break;

                default:
                    return null;

            }
        } else {
            $grade = $this->attributes['grade'];

            switch ( $grade ) {
                case 'S-84':
                    $craftLevel = 82;
                    break;

                case 'S-80':
                case 'S':
                    $craftLevel = 70;
                    break;

                case 'A':
                    $craftLevel = 62;
                    break;

                case 'B':
                    $craftLevel = 55;
                    break;

                case 'C':
                    $craftLevel = 43;
                    break;

                default:
                    return null;
            }
        }

        $crafterLevel = 85;

        return 3 + ( $crafterLevel - $craftLevel ) * 0.2;
    }

    /*
     * Get master work text
     * Items of C grade has no masterwork bonuses, instead of this they has double craft chance.
     */
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
