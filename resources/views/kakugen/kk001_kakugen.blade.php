@extends('layouts.app')
 
@section('title', '格言')
@section('keywords', 'A,B,C')
@section('description', '説明文')
@section('pagecss',"page.css")

@include('commons.head')

@section('content')



<div class="container">
    <div class="row">
        <h1 class="mb-3">おすすめの格言</h1>
    </div>
    <div class="list-group col-12">
        <div class="row mx-auto">
            @foreach ($kk_kakugens as $kk_kakugen)
    
                <div class="card col-12 mb-3 mx-auto">
                    <div class="card-body">
                        <h4 class="card-title">{!! link_to_route('kakugen.detail', nl2br(e($kk_kakugen->kakugen_naiyo)),['id' => $kk_kakugen->id] ,['class' => 'text-dark']) !!}</h4>
                        <p class="card-text">{!! link_to_route('kakugen.detail', nl2br(e($kk_kakugen->kakugen_person)),['id' => $kk_kakugen->id] ,['class' => 'text-dark']) !!}</p>
                    </div>
                </div>
    
            @endforeach
        </div>
    </div>

    <div class="row">
        <div class="card col-sm-5 my-3 p-0 mx-auto">
          <div class="card-header m-0">
            <br>
          </div>
          <div class="card-body">
            <h4 class="card-title">{!! link_to_route('kakugen.search', '格言を探す', []) !!}</h4>
            <p class="card-text">あなたの気に入る、座右の銘となる言葉を探してみましょう</p>
          </div>
        </div>
        <div class="card col-sm-5 my-3 p-0 mx-auto">
          <div class="card-header">
            <br>
          </div>
          <div class="card-body">
            <h4 class="card-title">{!! link_to_route('kakugen.input', '格言を登録する', []) !!}</h4>
            <p class="card-text">家族や友人などに言われた、心に残っている言葉を書き残しましょう</p>
          </div>
        </div>
    </div>

</div>

@endsection
 
@include('commons.footer')
