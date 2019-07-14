<?php

namespace App\Http\Controllers\Kakugen;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\KkKakugen;
use App\KkUserComment;



class KK201kakugenCommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function execute(Request $request, $id)
    {
        $this->validate($request, [
            'kakugen_comment' => 'required|max:5000',
        ]);
        
        
        
        $kk_user_comments = new KkUserComment();
        $kk_user_comments->kakugen_id = $id;
        $kk_user_comments->user_id = \Auth::id();
        $kk_user_comments->comment_naiyo = $request->kakugen_comment;
        $kk_user_comments->save();
        
        $kk_kakugens = KkKakugen::find($id);


        $kk_user_comments = KkUserComment::where('kakugen_id','=', $id)->get();
        return view('kakugen.kk004_kakugen_detail', [
            'kk_kakugens' => $kk_kakugens,
            'kk_user_comments' => $kk_user_comments,
        ]);
    }

}

