@extends('layouts.app')
 
@section('title', '格言を探す')
@section('keywords', 'A,B,C')
@section('description', '説明文')
@section('pagecss',"page.css")

@include('commons.head')

@section('content')




<div class="container">
    <h1 class="mb-3">格言を探す</h1>
    
    @include('commons.error_messages')

    <div class="row">
        <div class="col-6 p-3">
            {!! Form::open(['route' => 'kakugen.list','method' => 'GET']) !!}
        
                <div class="form-group">
                    {!! Form::label('label_keyword', 'キーワード:') !!}
                    {!! Form::text('keyword', null, ['class' => 'form-control']) !!}
                </div>

                {!! Form::submit('格言を探す', ['class' => 'btn btn-primary']) !!}
        
            {!! Form::close() !!}
        </div>
    </div>

</div>


@endsection
 
@include('commons.footer')
