<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'MAESTRO.ai') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        body {
            background: url("/images/background.png");
            background-attachment: fixed ;
            background-repeat: no-repeat;  
            background-size: cover;
            background-position: center;
        }
        .footer{position:fixed;left:0;bottom:0;width:100%;color:#000}
        .footer-text{max-width:600px;text-align:center;margin:auto}
        @media only screen and (max-width:600px){.dg,.footer-text{display:none}}
        .sk-spinner-pulse{width:20px;height:20px;margin:auto 10px;float:left;background-color:#333;border-radius:100%;-webkit-animation:sk-pulseScaleOut 1s ease-in-out infinite;animation:sk-pulseScaleOut 1s ease-in-out infinite}
        @-webkit-keyframes sk-pulseScaleOut{0%{-webkit-transform:scale(0);transform:scale(0)}to{-webkit-transform:scale(1);transform:scale(1);opacity:0}}
        @keyframes sk-pulseScaleOut{0%{-webkit-transform:scale(0);transform:scale(0)}to{-webkit-transform:scale(1);transform:scale(1);opacity:0}}
        .spinner-text{float:left}
    </style>
    <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
</head>
<body>
    <div id="app">
        @include('inc.navbar')
        <main class="container py-4">
            @include('inc.messages')
            @yield('content')
        </main>
    </div>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        window.onload = () => {
            let bannerNode = document.querySelector('[alt="www.000webhost.com"]').parentNode.parentNode;
            bannerNode.parentNode.removeChild(bannerNode);
        }
    </script>
</body>
</html>
