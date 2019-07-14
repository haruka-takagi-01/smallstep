@extends('layouts.app')
 
@section('title', '名言/格言　修正')
@section('keywords', 'A,B,C')
@section('description', '説明文')
@section('pagecss',"page.css")

@include('commons.head')

@section('content')



<div class="container">
    <div class="row">
        <h1 class="mb-3">名言/格言　修正</h1>
    </div>
    <div class="row">

        {!! Form::model($kk_kakugens, ['route' => ['kakugen.update', $kk_kakugens->id], 'method' => 'post']) !!}

            <div class="form-group">
                {!! Form::label('label_kakugen_person', '誰の言葉？') !!}
                {!! Form::text('kakugen_person', null, ['class' => 'form-control']) !!}

                {!! Form::label('label_kakugen_naiyo', '名言・格言の内容',['class' => 'mt-3']) !!}
                {!! Form::textarea('kakugen_naiyo', null, ['class' => 'form-control']) !!}
                <p class="help-block">※5000文字以内</p>
            </div>

            {!! Form::submit('修正する', ['class' => 'btn btn-primary']) !!}

        {!! Form::close() !!}
    </div>

</div>


            
@endsection
 
@include('commons.footer')
