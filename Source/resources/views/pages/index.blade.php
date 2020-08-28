@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>MAESTRO.ai</h1>
        @if(Auth::guest())
            <p>Virtual AI TaiChi tutor | Technology Bridging Generations</p>
            <a href="{{ url('redirect') }}">
                <img src="/images/google/btn_google_signin_dark_normal_web.png">
            </a> 
        @else
            <p>Welcome {{Auth::user()->name}}, what would you like to do today?</p>
            <a href="/levels" class="btn btn-primary">Levels</a>
            <a href="/forum" class="btn btn-primary">Chat</a>
            <a href="/stats" class="btn btn-primary">Stats</a>
        @endif
    </div>
@endsection