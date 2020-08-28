@extends('layouts.app')

@section('content')
<div class="text-center">
    <h3 class="my-5">{{$sub->level->name}}</h3>
    <small>Difficulty: {{$sub->level->difficulty}}</small>
    <small>Length: {{$sub->level->length}} seconds</small><hr/>
    {!! Form::open(['action' => 'LevelsController@done', 'method' => 'POST']) !!}
        {!!Form::number('score', 'value')!!}
        <input name="sub" type="hidden" value={{$sub->id}}>
        {!!Form::submit('Go', ['class' => 'btn btn-primary'])!!}
    {!! Form::close() !!}
</div>
@endsection