@extends('layouts.app')
 
@section('title', '名言/格言　詳細')
@section('keywords', 'A,B,C')
@section('description', '説明文')
@section('pagecss',"page.css")

@include('commons.head')

@section('content')



<div class="container">
    <h1 class="mb-3">名言/格言　詳細</h1>

    <div class="row">

        {!! Form::open(['route' => 'kakugen.complete']) !!}

            <div class="form-group">
                {!! Form::label('label_kakugen_person', '誰の言葉？') !!}
                {!! Form::label('kakugen_person', nl2br(e($kk_kakugen->kakugen_person))) !!}
                {!! Form::label('label_kakugen_naiyo', '名言・格言の内容',['class' => 'mt-3']) !!}
                {!! Form::label('kakugen_naiyo', nl2br(e($kk_kakugen->kakugen_naiyo))) !!}
            </div>

            {!! Form::submit('格言を修正する', ['class' => 'btn btn-primary']) !!}
        {!! Form::close() !!}
            
            
        {!! Form::open(['route' => 'kakugen.comment']) !!}

            <div class="form-group">
                    {!! Form::label('label_kakugen_naiyo', 'コメント',['class' => 'mt-3']) !!}
                    <textarea name="kakugen_naiyo" id="kakugen_naiyo" cols="45" rows="8" placeholder="例）受験で辛かった時にこの言葉で勇気づけられました。" class="form-control"></textarea>
            </div>

            {!! Form::submit('コメントする', ['class' => 'btn btn-primary']) !!}
        {!! Form::close() !!}

    </div>

</div>


            
@endsection
 
@include('commons.footer')
