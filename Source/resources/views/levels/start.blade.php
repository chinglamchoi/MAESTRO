@extends('layouts.app')

@section('content')
<a href="/levels" class="btn btn-secondary">Back</a>
<div class="text-center">
    <h3 class="my-5">{{$level->name}}</h3>
    <small>Difficulty: {{$level->difficulty}}</small>
    <small>Length: {{$level->length}} seconds</small><hr/>
    <p>{{$level->description}}</p><hr/>
    <small>Added on: {{$level->created_at}}</small>
    <h1 class="my-5">
        <a href="/levels/{{$level->id}}/start" class="btn btn-success">Start</a>
    </h1>
</div>
@endsection