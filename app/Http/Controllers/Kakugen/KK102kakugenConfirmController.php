<?php

namespace App\Http\Controllers\Kakugen;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Kk_kakugen;

class KK102kakugenConfirmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function execute(Request $request)
    {

        $this->validate($request, [
            'kakugen_person' => 'max:100',
            'kakugen_naiyo' => 'required|max:5000',
        ]);
        
        $kk_kakugen = new Kk_kakugen();
        $kk_kakugen->kakugen_person = $request->kakugen_person;
        $kk_kakugen->kakugen_naiyo = $request->kakugen_naiyo;
        //$request->session()->put('kk_kakugen', $kk_kakugen);
        return view('kakugen.kk102_kakugen_confirm', compact('kk_kakugen'));
    }

}
