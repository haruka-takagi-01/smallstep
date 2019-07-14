@extends('layouts.app')
 
@section('title', 'マイページ')
@section('keywords', 'A,B,C')
@section('description', '説明文')
@section('pagecss',"page.css")

@include('commons.head')

@section('content')



<div class="container">
    <h1 class="mb-3">マイページ</h1>

    <div class="row">
        <div class="list-group col-12">
            @foreach ($kk_kakugens as $kk_kakugen)

                <div class="card mb-3">
                    <div class="card-body">
                        <h4 class="card-title">{!! link_to_route('kakugen.detail', e($kk_kakugen->kakugen_naiyo),['id' => $kk_kakugen->kakugen_id] ,['class' => 'text-dark']) !!}</h4>
                        <p class="card-text">{!! link_to_route('kakugen.detail', e($kk_kakugen->kakugen_person),['id' => $kk_kakugen->kakugen_id] ,['class' => 'text-dark']) !!}</p>
                        <p class="card-text border-dark border-top-1">みんなのコメント：ＸＸＸＸＸＸＸＸＸＸＸＸＸＸ</p>
                        @if (Auth::check())
                            @if ($kk_kakugen->is_favorite())
                                <p class="text-right">{!! link_to_route('kakugen.unfavorite', 'お気に入り解除', ['id' => $kk_kakugen->kakugen_id], ['class' => 'btn btn-success btn-sm']) !!}</p>
                            @endif
                        @endif
                    </div>
                </div>

            @endforeach
        </div>
</div>

</div>



@endsection
 
@include('commons.footer')
