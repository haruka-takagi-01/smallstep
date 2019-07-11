@extends('layouts.app')
 
@section('title', '格言一覧')
@section('keywords', 'A,B,C')
@section('description', '説明文')
@section('pagecss',"page.css")

@include('commons.head')

@section('content')


<div class="container">
    <h1 class="mb-3">名言/格言　検索結果一覧</h1>

    <div class="row">
        <div class="list-group col-12">
            @foreach ($kk_kakugens as $kk_kakugen)

                <div class="card mb-3">
                    <div class="card-body">
                        <h4 class="card-title">{!! link_to_route('kakugen.detail', nl2br(e($kk_kakugen->kakugen_naiyo)),['id' => $kk_kakugen->id] ,['class' => 'text-dark']) !!}</h4>
                        <p class="card-text">{!! link_to_route('kakugen.detail', nl2br(e($kk_kakugen->kakugen_person)),['id' => $kk_kakugen->id] ,['class' => 'text-dark']) !!}</p>
                        <p class="card-text border-dark border-top-1">みんなのコメント：ＸＸＸＸＸＸＸＸＸＸＸＸＸＸ</p>
                    </div>
                </div>

            @endforeach
        </div>
        <div class="col-12">
            {{ $kk_kakugens->render('pagination::bootstrap-4') }}
        </div>  
    </div>

</div>



@endsection
 
@include('commons.footer')
