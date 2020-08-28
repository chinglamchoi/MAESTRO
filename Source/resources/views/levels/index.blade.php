@extends('layouts.app')

@section('content')
    <?php
        if(isset($_GET['page'])) $page = $_GET['page']; else $page=1;
    ?>
    <h1>Levels</h1>
    @if(count($levels) > 0)
        @foreach($levels as $level)
            <?php
                $submissions = $level->submissions->where('user_id', '==', auth()->user()->id);
                if(count($submissions) == 0){
                    $class = '';
                    $status = 'New Level';
                }else{
                    $score = $submissions->sortByDesc('score')->first()->score;
                    if($score > 80){
                        $class = 'alert-success';
                    }else if($score > 50){
                        $class = 'alert-warning';
                    }else{
                        $class = 'alert-danger';
                    }
                    $status = 'High Score: '.$score.'/100';
                }
            ?>
            <div class="card my-2 alert {{$class}} ?>">
                <div class="card-body row">
                    <div class="col-8">
                        <h3 class="card-title"><a href="/levels/{{$level->id}}">{{$level->name}}</a></h3>
                        <p>Difficulty: {{$level->difficulty}} Length: {{$level->length}} seconds</p>
                        <small class="card-text">Added on {{$level->created_at}}</small>
                    </div>
                    <div class="col-4">
                        <h3>{{$status}}</h3>
                    </div>
                </div>
            </div>
        @endforeach
        {!!$levels->links()!!}
    @else
        <p>No levels found</p>
    @endif
    <div class="card">
        <div class="card-header" id="headingOne">
            <h5 class="mb-0">
                Order By:
            </h5>
        </div>
        <div class="card-body">
            {!! Form::open(['action' => 'LevelsController@index', 'method' => 'GET']) !!}
                <select id="order1" name="order1" class="form-control">
                    <option value="id">Default</option>
                    <option value="difficulty">Difficulty</option>
                    <option value="length">Length</option>
                </select>
                <select id="order2" name="order2" class="form-control">
                    <option value="asc">Ascending</option>
                    <option value="desc">Descending</option>
                </select>
                <input name="page" type="hidden" value={{$page}}>
                {!!Form::submit('Go', ['class' => 'btn btn-primary'])!!}
            {!! Form::close() !!}
        </div>
    </div>
@endsection