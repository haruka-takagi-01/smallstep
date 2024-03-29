@extends('layouts.app')
 
@section('title', '名言/格言　詳細')
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

<div class="container">
    <div class="row">
        <h1 class="mb-3">名言/格言　詳細</h1>
    </div>
    <div class="row">

            <table class="table table-bordered">
                <tr>
                    <th>誰の言葉？</th>
                    <td>{{ $kk_kakugens->kakugen_person}}</td>
                </tr>
                <tr>
                    <th>名言・格言の内容</th>
                    <td>{!! nl2br(e($kk_kakugens->kakugen_naiyo))!!}</td>
                </tr>
            </table>
            

    
            @if (Auth::check())
                <div class="col-4 mb-3">
                    {!! link_to_route('kakugen.edit', '格言を修正する', ['id' => $kk_kakugens->id], ['class' => 'btn btn-success']) !!}
                </div>
            
                <div class="col-3 mb-3">
                    {!! Form::model($kk_kakugens, ['route' => ['kakugen.delete', $kk_kakugens->id], 'method' => 'get']) !!}
                        {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </div>
            @endif
    </div>

    <div class="row">
        
        <div class="list-group col-12">
            @foreach ($kk_user_comments as $kk_user_comment)
                
                <div class="card mb-3">
                    <div class="card-body">
                        <!--<h4 class="card-title">{{$kk_user_comment->user_id}}</h4>-->
                        <p class="card-text">{{$kk_user_comment->comment_naiyo}}</p>
                    </div>
                </div>

            @endforeach
        </div>
    </div>

    <div class="row">
            @if (Auth::check())
                <div class="col-12">
                    {!! Form::open(['route' => ['kakugen.comment', $kk_kakugens->id], 'method' => 'post']) !!}
            
                        <div class="form-group">
                                {!! Form::label('label_kakugen_naiyo', 'コメント',['class' => 'mt-3']) !!}
                                {!! Form::textarea('kakugen_comment', null, ["placeholder"=>"例）受験で辛かった時にこの言葉で勇気づけられました。",'class' => 'form-control']) !!}
                        </div>
            
                        {!! Form::submit('コメントする', ['class' => 'btn btn-primary']) !!}
                    {!! Form::close() !!}
                </div>
            @else
                <div class="col-12">
                    {!! Form::open(['route' => ['kakugen.comment', $kk_kakugens->id], 'method' => 'post']) !!}
            
                        <div class="form-group">
                                {!! Form::label('label_kakugen_naiyo', 'コメント',['class' => 'mt-3']) !!}
                                {!! Form::textarea('kakugen_comment', null, ["placeholder"=>"例）受験で辛かった時にこの言葉で勇気づけられました。",'class' => 'form-control','disabled' => 'disabled']) !!}
                        </div>
            
                        {!! Form::submit('コメントする', ['class' => 'btn btn-primary','disabled' => 'disabled']) !!}
                    {!! Form::close() !!}
                </div>
                <div class="col-12 mt-3">
                    <small>※コメントされる場合、ログインしてご利用ください </ small>
                </div>
            @endif
    </div>

</div>


            
@endsection
 
@include('commons.footer')
