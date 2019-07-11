<?php

namespace App\Http\Controllers\Kakugen;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Kk_kakugen; 

class KK003kakugenListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function execute(Request $request)
    {
        $this->validate($request, [
            'keyword' => 'max:100',
        ]);
        
        $kk_kakugens = Kk_kakugen::where('kakugen_naiyo','LIKE', "%".$request->keyword."%")->orderBy('id', 'asc')->paginate(5);

        return view('kakugen.kk003_kakugen_list', [
            'kk_kakugens' => $kk_kakugens,
        ]);

    }

}
