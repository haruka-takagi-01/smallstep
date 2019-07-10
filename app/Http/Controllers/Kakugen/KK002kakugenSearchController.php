<?php

namespace App\Http\Controllers\Kakugen;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Kk_kakugen; 

class KK002kakugenSearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function execute()
    {
        return view('kakugen.kk002_kakugen_search');
    }

}
