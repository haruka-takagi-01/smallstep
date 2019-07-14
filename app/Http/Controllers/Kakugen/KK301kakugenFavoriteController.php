<?php

namespace App\Http\Controllers\Kakugen;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\KkKakugen;
use App\KkUserFavorite;

class KK301kakugenFavoriteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function execute($id)
    {

        $kk_user_favorite = new KkUserFavorite();
        $kk_user_favorite->kakugen_id = $id;

        //★仮　$kk_user_cavorite>user_id = $request->user_id;
        $kk_user_favorite->user_id = 1;
        
        $kk_user_favorite->save();
        
        $kk_kakugens = KkKakugen::find($id);
        return view('kakugen.kk004_kakugen_detail', [
            'kk_kakugens' => $kk_kakugens,
        ]);
    }

}
