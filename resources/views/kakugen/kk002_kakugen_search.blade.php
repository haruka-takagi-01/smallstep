@extends('layouts.app')
 
@section('title', '格言を探す')
@section('keywords', 'A,B,C')
@section('description', '説明文')
@section('pagecss',"page.css")

@include('commons.head')

@section('content')




<div class="container">
    <div class="row">
        <h1 class="mb-3">格言を探す</h1>
    </div>
    @include('commons.error_messages')

    <div class="row">
        <div class="col-6 p-3">
            {!! Form::open(['route' => 'kakugen.list','method' => 'GET']) !!}
        
                <div class="form-group">
                    <h5>{!! Form::label('label_keyword', 'キーワードからさがす') !!}</h5>
                    {!! Form::text('keyword', null, ['class' => 'form-control']) !!}
                </div>

                {!! Form::submit('格言を探す', ['class' => 'btn btn-primary']) !!}
        
            {!! Form::close() !!}
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-12 p-3">
            <h5>タグからさがす</h5>
        </div> 
        <div class="tag col-6">
                <li class="m-1">{!! link_to_route('kakugen.list', '勇気', ['keyword' => '勇気'], ['class' => 'btn btn-success btn-sm']) !!}</li>
                <li class="m-1">{!! link_to_route('kakugen.list', '元気', ['keyword' => '元気'], ['class' => 'btn btn-success btn-sm']) !!}</li>
                <li class="m-1">{!! link_to_route('kakugen.list', '自分', ['keyword' => '自分'], ['class' => 'btn btn-success btn-sm']) !!}</li>
                <li class="m-1">{!! link_to_route('kakugen.list', '失敗', ['keyword' => '失敗'], ['class' => 'btn btn-success btn-sm']) !!}</li>
                <li class="m-1">{!! link_to_route('kakugen.list', '成功', ['keyword' => '成功'], ['class' => 'btn btn-success btn-sm']) !!}</li>
                <li class="m-1">{!! link_to_route('kakugen.list', 'エジソン', ['keyword' => 'エジソン'], ['class' => 'btn btn-success btn-sm']) !!}</li>
            </ul>
        </div>
    </div>
</div>


@endsection
 
@include('commons.footer')
