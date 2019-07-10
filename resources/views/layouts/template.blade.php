@extends('layouts.app')
 
@section('title', 'ページタイトル')
@section('keywords', 'A,B,C')
@section('description', '説明文')
@section('pagecss',"page.css")

@include('commons.head')

@section('content')
    <p>コンテンツ内容</p>
@endsection
 
@include('commons.footer')
