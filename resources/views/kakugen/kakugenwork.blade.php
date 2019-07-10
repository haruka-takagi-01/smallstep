@extends('layouts.app')
 
@section('title', 'ページタイトル')
@section('keywords', 'A,B,C')
@section('description', '説明文')
@section('pagecss',"page.css")

@include('commons.head')

@section('content')
<div class="container">
    <p>コンテンツ内容</p>
    
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Library</a></li>
        <li class="breadcrumb-item active" aria-current="page">Data</li>
      </ol>
    </nav>

    <style type="text/css">
    <!--
    　.jumbotron-extend {
        position: relative;
        height: 100vh;
        min-height: 300px;
        background: url(../img/main.jpg) no-repeat center center;
        background-size: cover;
    　}
    -->
    </style>
        
    <div class="jumbotron jumbotron-extend">
        <div class="container">
            <img class="img-responsive center vh-25" src="img/jumbotron.jpg" alt=""></p>
        </div>
    </div>


    <div class="jumbotron">
        <h1 class="display-3">Hello, world!</h1>
        <p class="lead">This is a simple hero unit, a simple jumbotron-style component for
                      calling extra attention to featured content or information.</p>
        <hr class="my-2">
        <p>It uses utility classes for typography and
            spacing to space content out within the larger container.</p>
        <p class="lead">
            <a class="btn btn-primary btn-lg" href="#!" role="button">Some action</a>
        </p>
    </div>
    
    @include('commons.error_messages')
    <div class="alert alert-danger" role="alert">
        <strong>Oh snap!</strong> Change a few things up and try submitting again.
    </div>
    <span class="badge badge-pill  badge-primary">元気がでる</span>
    <span class="badge badge-pill  badge-primary">勇気を持てる</span>
    
    <button type="button" class="btn btn-success btn-sm">登録</button>
    
    <h4>Example heading <span class="badge badge-secondary">New</span></h4>
    
    <div class="card">
        <img class="card-img-top" src="/images/pathToYourImage.png" alt="Card image cap">
        <div class="card-body">
            <h4 class="card-title">Card title</h4>
            <p class="card-text">
              Some quick example text to build on the card title
              and make up the bulk of the card's content.
            </p>
            <a href="#!" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
    
</div>

    <br>
    <link href="css/comment.css" rel="stylesheet">
    @include('parts.comment')

@endsection
 
@include('commons.footer')
