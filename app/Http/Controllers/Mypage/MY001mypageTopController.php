<?php

namespace App\Http\Controllers\Mypage;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\KkKakugen;

class MY001mypageTopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function execute(Request $request)
    {

        $kk_kakugens = KkKakugen::select()
                    ->join('kk_user_comments','kk_user_comments.kakugen_id','=','kk_kakugens.id')
                    ->orderBy('kk_user_comments.kakugen_id', 'asc')
                    ->get();

        //$employees = \DB::table('employees')
        //->join('depts','employees.dept_id','=','depts.dept_id')
        //->get();

        return view('mypage.my001_mypage_top', [
            'kk_kakugens' => $kk_kakugens,
        ]);


    }

}
