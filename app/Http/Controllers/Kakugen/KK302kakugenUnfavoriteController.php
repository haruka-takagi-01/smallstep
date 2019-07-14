<?php

namespace App\Http\Controllers\Kakugen;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\KkKakugen;
use App\KkUserFavorite;

class KK302kakugenUnfavoriteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function execute(Request $request,$id)
    {
        $kk_user_favorite = KkUserFavorite::select()
                            ->where('kk_user_favorites.kakugen_id','=', $id)
                            ->where('kk_user_favorites.user_id','=', \Auth::id())
                            ->delete();
                            
        //$kk_user_favorite->delete();

        //$kk_user_favorite->delete();
        //$kk_user_favorite->save();
        //dd(\Auth::id());
        //$kk_user_favorite->destroy($kk_user_favorite->id);
        


        $request->session()->flash('flashmessage', 'お気に入りを解除しました');

        $previous_url = url()->previous();
        if (strpos($previous_url,"kakugen/list")){
            return redirect()->route('kakugen.list', [], $status = 302);
        }elseif(strpos($previous_url,"mypage")){
            return redirect()->route('mypage.top', [], $status = 302);
        }else{
            return redirect()->route('kakugen.detail', ['id' => $id], $status = 302);
        }    
    }

}
