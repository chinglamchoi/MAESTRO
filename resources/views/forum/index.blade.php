@extends('layouts.app')

@section('content')
    <h1>Forum</h1>
    <a href='/forum/create' class='btn btn-primary'>New Topic</a>
    @if(count($topics) > 0)
        @foreach($topics as $topic)
        <div class="card my-2">
            <div class="card-body row">
                <div class="col-8">
                    <h3 class="card-title"><a href="/forum/{{$topic->id}}">{{$topic->title}}</a></h3>
                    <small class="card-text">Written on {{$topic->created_at}} by <a href="/users/{{$topic->user->id}}">{{$topic->user->name}}</a></small>
                </div>
                <div class="col-4">
                    <p>Replies: {{count($topic->replies)}}</p>
                    <small class="card-text">Last reply on {{$topic->replies->last()->created_at}} by <a href="/users/{{$topic->replies->last()->user->id}}">{{$topic->replies->last()->user->name}}</a></small>
                </div>
            </div>
        </div>
        @endforeach
        {{$topics->links()}}
    @else
        <p>No topics found</p>
    @endif
@endsection