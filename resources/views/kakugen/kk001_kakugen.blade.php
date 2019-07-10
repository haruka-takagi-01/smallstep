@extends('layouts.app')
 
@section('title', '格言')
@section('keywords', 'A,B,C')
@section('description', '説明文')
@section('pagecss',"page.css")

@include('commons.head')

@section('content')



<div class="container">
    <h2 class="mb-3">あなたにおすすめの格言</h2>
    <div class="row">
        <div class="card col-11 mb-3 mx-auto">
            <div class="card-body">
                <h4 class="card-title">もう終わりだと思うのも、さあ始まりだと思うのも、どちらも自分だ</h4>
                <p class="card-text">フェデリコ・フェリーニ</p>
            </div>
        </div>
        <div class="card col-11 mb-3 mx-auto">
            <div class="card-body">
                <h4 class="card-title">もう終わりだと思うのも、さあ始まりだと思うのも、どちらも自分だ</h4>
                <p class="card-text">フェデリコ・フェリーニ</p>
            </div>
        </div>
        <div class="card col-11 mb-3 mx-auto">
            <div class="card-body">
                <h4 class="card-title">もう終わりだと思うのも、さあ始まりだと思うのも、どちらも自分だ</h4>
                <p class="card-text">フェデリコ・フェリーニ</p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="card col-sm-5 m-3 p-0 mx-auto">
          <div class="card-header m-0">
            <br>
          </div>
          <div class="card-body">
            <h4 class="card-title">{!! link_to_route('kakugen.search', '格言を探す', []) !!}</h4>
            <p class="card-text">あなたの気に入る、座右の銘となる言葉を探してみましょう</p>
          </div>
        </div>
        <div class="card col-sm-5 m-3 p-0 mx-auto">
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
