@extends('layouts.app')

@section('content')
<?php
    if($sub->score > 80){
        $class = 'text-success';
    }else if($sub->score > 50){
        $class = 'text-warning';
    }else{
        $class = 'text-danger';
    }
?>
<a href="/levels" class="btn btn-secondary">Back</a>
<div class="text-center">
    <h3 class="my-5">{{$sub->level->name}}</h3>
    <small>Difficulty: {{$sub->level->difficulty}}</small>
    <small>Length: {{$sub->level->length}}</small><hr/>
    <h4 class="{{$class}}">Score: {{$sub->score}}/100</h4><hr/>
    <small>Added on: {{$sub->level->created_at}}</small>
</div>
@endsection