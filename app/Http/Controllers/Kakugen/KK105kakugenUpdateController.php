<?php

namespace App\Http\Controllers\Kakugen;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\KkKakugen; 

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
        
        $kk_kakugens = KkKakugen::find($id);
        $kk_kakugens->kakugen_person = $request->kakugen_person;
        $kk_kakugens->kakugen_naiyo = $request->kakugen_naiyo;
        $kk_kakugens->save();

        $kk_kakugens = KkKakugen::orderBy('id', 'asc')->paginate(5);

        //$request->session()->flash('flashmessage', '修正が完了しました。');
        //return redirect()->to('student/list')->with('flashmessage', '更新が完了いたしました。');

        //return redirect()->to('kakugen.kk003_kakugen_list', [
        //    'kk_kakugens' => $kk_kakugens,
        //]);

        $request->session()->flash('flashmessage', '修正が完了しました');
        return view('kakugen.kk003_kakugen_list', [
            'kk_kakugens' => $kk_kakugens,
        ]);

    }

}


