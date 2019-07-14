<?php

namespace App\Http\Controllers\Kakugen;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\KkKakugen;

class KK106kakugenDeleteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function execute($id)
    {
        $kk_kakugens = KkKakugen::find($id);
        $kk_kakugens->delete();

        return redirect('/');
    }

}
