<?php

namespace App\Http\Controllers\Kakugen;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\KkKakugen;
use App\KkUserComment;

class KK004kakugenDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function execute($id)
    {
        $kk_kakugens = KkKakugen::find($id);

        $kk_user_comments = KkUserComment::where('kakugen_id','=', $id)->get();

        return view('kakugen.kk004_kakugen_detail', [
            'kk_kakugens' => $kk_kakugens,
            'kk_user_comments' => $kk_user_comments,
        ]);

    }

}
