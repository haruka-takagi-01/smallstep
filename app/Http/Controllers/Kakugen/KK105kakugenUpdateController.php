<?php

namespace App\Http\Controllers\Kakugen;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Kk_kakugen; 

class KK105kakugenUpdateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function execute(Request $request, $id)
    {
        $this->validate($request, [
            'kakugen_person' => 'max:100',
            'kakugen_naiyo' => 'required|max:5000',
        ]);
        
        $kk_kakugens = Kk_kakugen::find($id);
        $kk_kakugen->kakugen_person = $request->kakugen_person;
        $kk_kakugen->kakugen_naiyo = $request->kakugen_naiyo;
        $kk_kakugen->save();

        return view('kakugen.kk105_kakugen_detail', [
            'kk_kakugens' => $kk_kakugens,
        ]);

    }

}


