<?php

namespace App\Http\Controllers\Kakugen;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Kk_kakugen;


class KK103kakugenCompleteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function execute(Request $request)
    {
        $kk_kakugen = new Kk_kakugen();
        
        //$Kk_kakugen = $request->session()->get('Kk_kakugen');
        $kk_kakugen->kakugen_person = $request->kakugen_person;
        $kk_kakugen->kakugen_naiyo = $request->kakugen_naiyo;
        $kk_kakugen->save();
        
        return view('kakugen.kk103_kakugen_complete');
    }

}
