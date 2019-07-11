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
        @foreach ($kk_kakugens as $kk_kakugen)
        
            
            <table class="table table-bordered">
                <tr>
                    <th>誰の言葉？</th>
                    <td>{{ $kk_kakugen->kakugen_person}}</td>
                </tr>
                <tr>
                    <th>名言・格言の内容</th>
                    <td>nl2br(e($kk_kakugen->kakugen_naiyo))</td>
                </tr>
            </table>
            
        
            {!! link_to_route('kakugen.edit', '格言を修正する', ['id' => $kk_kakugen->id], ['class' => 'btn btn-light']) !!}
        
            {!! Form::model($kk_kakugen, ['route' => ['kakugen.delete', $kk_kakugen->id], 'method' => 'get']) !!}
                {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
    
            {!! Form::open(['route' => 'kakugen.comment']) !!}
    
                <div class="form-group">
                        {!! Form::label('label_kakugen_naiyo', 'コメント',['class' => 'mt-3']) !!}
                        <textarea name="kakugen_naiyo" id="kakugen_naiyo" cols="45" rows="8" placeholder="例）受験で辛かった時にこの言葉で勇気づけられました。" class="form-control"></textarea>
                </div>
    
                {!! Form::submit('コメントする', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        @endforeach

    </div>

</div>


            
@endsection
 
@include('commons.footer')
