@extends('layouts.app')
 
@section('title', '名言/格言　登録確認')
@section('keywords', 'A,B,C')
@section('description', '説明文')
@section('pagecss',"page.css")

@include('commons.head')

@section('content')



<div class="container">
    <div class="row">
        <h1 class="mb-3">名言/格言　登録確認</h1>
    </div>

    <div class="row">

        {!! Form::open(['route' => 'kakugen.complete']) !!}

            <div class="form-group">
                {!! Form::label('label_kakugen_person', '誰の言葉？') !!}
                {!! Form::label('kakugen_person', nl2br(e($kk_kakugen->kakugen_person))) !!}
                {!! Form::label('label_kakugen_naiyo', '名言・格言の内容',['class' => 'mt-3']) !!}
                {!! Form::label('kakugen_naiyo', nl2br(e($kk_kakugen->kakugen_naiyo))) !!}
            </div>
            {{Form::hidden('kakugen_person', nl2br(e($kk_kakugen->kakugen_person)))}}
            {{Form::hidden('kakugen_naiyo',  nl2br(e($kk_kakugen->kakugen_naiyo)))}}

            {!! Form::submit('格言を登録する', ['class' => 'btn btn-primary']) !!}

        {!! Form::close() !!}
    </div>

</div>


            
@endsection
 
@include('commons.footer')
