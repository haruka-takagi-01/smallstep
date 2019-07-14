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
        $kk_user_favorite->user_id = \Auth::id();
        $kk_user_favorite->save();

        $previous_url = url()->previous();
        if (strpos($previous_url,"kakugen/list")){
            $kk_kakugens = KkKakugen::orderBy('id', 'asc')->paginate(5);
            return redirect()->route('kakugen.list', ['kk_kakugens' => $kk_kakugens], $status = 302);
            return view('kakugen.kk003_kakugen_list', [
                'kk_kakugens' => $kk_kakugens,
            ]);
        }else{
            dd($previous_url);
            $kk_kakugens = KkKakugen::find($id);
            return view('kakugen.kk004_kakugen_detail', [
                'kk_kakugens' => $kk_kakugens,
            ]);
        }    
    }

}
