<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\KkUserFavorite;

class KkKakugen extends Model
{
    public function is_favorite()
    {

        $kk_user_favorites = KkUserFavorite::where('kakugen_id','=', $this->id)
                                ->where('user_id','=', \Auth::id())
                                ->get();

        if (count($kk_user_favorites) == 0){
            return true;
        }else{
            return false;
        }
        
    }
}
