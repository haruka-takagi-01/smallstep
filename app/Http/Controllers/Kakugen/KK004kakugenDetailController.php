<?php

namespace App\Http\Controllers\Kakugen;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Kk_kakugen; 

class KK004kakugenDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function execute($id)
    {
        $kk_kakugens = Kk_kakugen::find($id);

        return view('kakugen.kk004_kakugen_detail', [
            'kk_kakugens' => $kk_kakugens,
        ]);

    }

}
