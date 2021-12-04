<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\View\View;

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

        /*
         * C items has no masterwork description
         * Craft count only 1, exclude shots
         */
        if ( $this->craft_count === 1 && ( $this->grade === 'C' || $this->masterwork_description ) && $this->grade && $this->rare_chance ) {
            $chanceText = 'Шанс МВ';
            if ( $this->grade === 'C' ) {
                $chanceText = 'Шанс дабл крафта';
            }

            $masterWorkText = 'Уровень крафтера: <b>85</b><br>';
            $masterWorkText .= $chanceText . ': <b>' . $this->rare_chance . '</b>%<br>';

            if ( $this->masterwork_name ) {
                $masterWorkText .= '<i>' . $this->masterwork_name . '</i><br>';
            }

            if ( $this->masterwork_description ) {
                $masterWorkText .= $this->attributes['masterwork_description'];
            }
        }

        return $masterWorkText;
    }

    public function getCrystalsTextAttribute() {
        $crystalsText = null;

        if ( $this->grade && $this->crystals_count ) {
            $crystalResource = \App\Models\Resource::where( 'name', 'Crystal ' . $this->basic_grade )->firstOrFail();
            $crystalImgPath  = asset( 'storage' ) . '/' . $crystalResource->img;
            $crystalUrl      = route( 'resources.show', $crystalResource );
            $crystalsText    .= "<a class='no-decoration resource-link' href='{$crystalUrl}'><img width='20' src='{$crystalImgPath}' alt='{$crystalResource->name}'></a>";
            $crystalsPrice   = prettifyNumber( $crystalResource->price * $this->crystals_count );
            $crystalsText    .= "$crystalResource->name: {$this->crystals_count}. Их цена: $crystalsPrice";
        }

        return $crystalsText;

    }

    public function getBasicGradeAttribute() {
        switch ( $this->grade ) {
            case 'S-84':
            case 'S-80':
                $basicGrade = 'S';
                break;
            default:
                $basicGrade = $this->grade;
                break;
        }

        return $basicGrade;
    }

    public function getPriceAttribute() {
        $user = auth()->user();

        if ( $this->attributes['resource_id'] ) {
            $resource = $this->resource;

            $recipePriceSell = $user && $user->resources->find( $resource->id ) && $user->resources->find( $resource->id )->pivot->price_sell ? $user->resources->find( $resource->id )->pivot->price_sell : $resource->price_sell;

        } else {
            $recipePriceSell = $user && $user->recipes->find( $this->id ) && $user->recipes->find( $this->id )->pivot->price_sell ? $user->recipes->find( $this->id )->pivot->price_sell : $this->price_sell;

        }

        return $recipePriceSell;
    }

    public function getSaHtmlAttribute() {
        $saHtml = null;
        $saInfo = $this->sa_info;
        if ( $saInfo ) {
            $saHtml = view( 'pages.recipes.SaInfoShow', $saInfo );
        }

        return $saHtml;
    }

    public function getSaHtmlIndexAttribute() {
        $saHtml = null;
        $saInfo = $this->sa_info;
        if ( $saInfo ) {
            $saHtml = view( 'pages.recipes.SaInfoIndex', $saInfo );
        }

        return $saHtml;
    }

    public function getSaInfoAttribute() {
        $saInfo = null;
        if ( $this->sa_lvl ) {
            $saInfo             = [];
            $saLvl              = $this->sa_lvl;
            $saGemCount         = $this->sa_gem_count;
            $saRedName          = $this->sa_red_name;
            $saRedDescription   = $this->sa_red_description;
            $saGreenName        = $this->sa_green_name;
            $saGreenDescription = $this->sa_green_description;
            $saBlueName         = $this->sa_blue_name;
            $saBlueDescription  = $this->sa_blue_description;
            $saRedImg           = asset( '/images/SA Red.png' );
            $saGreenImg         = asset( '/images/SA Green.png' );
            $saBlueImg          = asset( '/images/SA Blue.png' );
            $gem                = \App\Models\Resource::where( 'name', "Gemstone ({$this->basic_grade}-grade)" )->firstOrFail();
            $gemsPriceTotal     = prettifyNumber( $gem->price * $saGemCount );

            $saInfo['saLvl']              = $saLvl;
            $saInfo['saGemCount']         = $saGemCount;
            $saInfo['saRedName']          = $saRedName;
            $saInfo['saRedDescription']   = $saRedDescription;
            $saInfo['saGreenName']        = $saGreenName;
            $saInfo['saGreenDescription'] = $saGreenDescription;
            $saInfo['saBlueName']         = $saBlueName;
            $saInfo['saBlueDescription']  = $saBlueDescription;
            $saInfo['saRedImg']           = $saRedImg;
            $saInfo['saGreenImg']         = $saGreenImg;
            $saInfo['saBlueImg']          = $saBlueImg;
            $saInfo['gem']                = $gem;
            $saInfo['gemsPriceTotal']     = $gemsPriceTotal;
        }

        return $saInfo;
    }
}
