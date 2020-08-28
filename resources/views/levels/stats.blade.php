@extends('layouts.app')

@section('content')
    <a href="/" class="btn btn-secondary">Back</a><br/><br/>
    <h3>Stats</h3>
    @if(count($levels) > 0)
        {{$levels->links()}}
        <table class="table table-bordered table-hover">
            <tr>
                <th>Level</th>
                <th>High Score</th>
                <th>81 ~ 100</th>
                <th>51 ~ 80</th>
                <th>1 ~ 50</th>
                <th>0</th>
            </tr>
        @foreach($levels as $level)
        <?php
            $submissions = $level->submissions->where('user_id', '==', auth()->user()->id);
            $scorehigh = 0; $score100 = 0; $score80 = 0; $score50 = 0; $score0 = 0;
            if(count($submissions) == 0){
                    $class = '';
                    $scorehigh = '/';
            }else{
                foreach($submissions as $submission){
                    $score = $submission->score;
                    if($score > $scorehigh){$scorehigh = $score;}
                    if($score > 80){$score100++;}
                    else if($score > 50){$score80++;}
                    else if($score > 0){$score50++;}
                    else{$score0++;}
                }
                if($scorehigh > 80){
                    $class = 'alert-success';
                }else if($scorehigh > 50){
                    $class = 'alert-warning';
                }else{
                    $class = 'alert-danger';
                }
            }
        ?>
        <tr class="{{$class}}">
            <td><a href="/levels/{{$level->id}}">{{$level->name}}</a></td>
            <td>{{$scorehigh}}</td>
            <td>{{$score100}}</td>
            <td>{{$score80}}</td>
            <td>{{$score50}}</td>
            <td>{{$score0}}</td>
        </tr>
        @endforeach
        </table>
        {{$levels->links()}}
    @else
        <p>No submissions found</p>
    @endif
@endsection