<?php

namespace App\Http\Controllers\Kakugen;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\KkKakugen;
use App\KkUserFavorite;

class KK003kakugenListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function execute(Request $request)
    {
        $this->validate($request, [
            'keyword' => 'max:100',
        ]);

        $keyword = $request->query('keyword');     
        $kk_kakugens = KkKakugen::where('kakugen_naiyo','LIKE', "%".$keyword."%")
                        ->orwhere('kakugen_person','LIKE', "%".$keyword."%")
                        ->orderBy('id', 'asc')->paginate(5);

        //$kk_user_favorites = KkUserFavorite::where('kakugen_id','=', $id)
        //                ->orwhere('user_id','=', \Auth::id());

        $kk_kakugens = KkKakugen::select()
                        ->leftjoin('kk_user_favorites','kk_kakugens.id','=','kk_user_favorites.kakugen_id')
                        ->where('kakugen_naiyo','LIKE', "%".$keyword."%")
                        ->orwhere('kakugen_person','LIKE', "%".$keyword."%")
                        ->orderBy('kk_kakugens.id', 'asc')->paginate(5);


        return view('kakugen.kk003_kakugen_list', [
            'kk_kakugens' => $kk_kakugens,
            //'kk_user_favorites' => $kk_user_favorites,
        ]);


    }

}
