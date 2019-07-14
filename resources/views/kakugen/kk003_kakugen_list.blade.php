@extends('layouts.app')
 
@section('title', '格言一覧')
@section('keywords', 'A,B,C')
@section('description', '説明文')
@section('pagecss',"page.css")

@include('commons.head')

@section('content')

@if(Session::has('flashmessage'))


    <!-- モーダルウィンドウの中身 -->
    <div class="modal fade" id="modal_box" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
      <div class="modal-content">
      <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <h4 class="modal-title">完了</h4>
      </div>
      <div class="modal-body">
      {{ session('flashmessage') }}
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">閉じる</button>
      </div>
      </div>
      </div>
    </div>
    
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
    <script>
        $(function() {
            $('#modal_box').modal('show');
            $('#modal_box').addClass('show');
        });
    </script>
    

@endif

<div class="container p-0">
    <div class="row">
        <h1 class="mb-3">名言/格言　検索結果一覧</h1>
    </div>

    <div class="row">
        <div class="col-12 p-0 font-weight-bold">
            検索結果：{!! $kk_kakugens->total() !!}件
        </div>
        <div class="list-group col-12 mt-3">
            @foreach ($kk_kakugens as $kk_kakugen)

                <div class="card mb-3">
                    <div class="card-body">
                        <h4 class="card-title">{!! link_to_route('kakugen.detail', e($kk_kakugen->kakugen_naiyo),['id' => $kk_kakugen->id] ,['class' => 'text-dark']) !!}</h4>
                        <p class="card-text">{!! link_to_route('kakugen.detail', e($kk_kakugen->kakugen_person),['id' => $kk_kakugen->id] ,['class' => 'text-dark']) !!}</p>
                        <p class="card-text border-dark border-top-1">みんなのコメント：ＸＸＸＸＸＸＸＸＸＸＸＸＸＸ</p>
                        @if (Auth::check())
                            @if ($kk_kakugen->is_favorite())
                                <p class="text-right">{!! link_to_route('kakugen.favorite', 'お気に入り登録', ['id' => $kk_kakugen->id], ['class' => 'btn btn-success btn-sm']) !!}</p>
                            @endif
                        @endif
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
