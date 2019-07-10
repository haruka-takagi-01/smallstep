@section('head')
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <base href="{{ asset('/') }}">
    
    <!-- TDK -->
    <title>@yield('title') | {{ config('app.name', 'Laravel') }}</title>
    <meta name="description" itemprop="description" content="@yield('description')">
    <meta name="keywords" itemprop="keywords" content="@yield('keywords')">
    
    <!-- Styles -->
    <!-- <link href="css/app.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link href="css/basestyle.css" rel="stylesheet">
    <link href="css/@yield('pagecss')" rel="stylesheet">
@endsection