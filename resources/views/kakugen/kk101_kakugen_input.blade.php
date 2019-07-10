@extends('layouts.app')
 
@section('title', '格言を登録する')
@section('keywords', 'A,B,C')
@section('description', '説明文')
@section('pagecss',"page.css")

@include('commons.head')

@section('content')




<div class="container">
    <h1 class="mb-3">■格言を登録する</h1>
    
    @include('commons.error_messages')

    <div class="row">
        <div class="col-6 p-3">
            {!! Form::open(['route' => 'kakugen.confirm']) !!}
        
                <div class="form-group">
                    {!! Form::label('label_kakugen_person', '誰の言葉？') !!}
                    {!! Form::text('kakugen_person', null, ["placeholder"=>"例）エジソン",'class' => 'form-control']) !!}

                    {!! Form::label('label_kakugen_naiyo', '名言・格言の内容',['class' => 'mt-3']) !!}
                    
                    <textarea name="kakugen_naiyo" id="kakugen_naiyo" cols="45" rows="8" placeholder="例）天才とは1%のひらめきと99%の努力である" class="form-control"></textarea>
                    <p class="help-block">※5000文字以内</p>
                </div>

                {!! Form::submit('確認画面へ', ['class' => 'btn btn-primary']) !!}
        
            {!! Form::close() !!}
        </div>
    </div>

</div>


@endsection
 
@include('commons.footer')
