@extends('layouts.app')

@section('content')
    <?php $bbcode = new PheRum\BBCode\BBCodeParser; ?>
    <h1><img src = "{{$user->avatar}}" width = "10%"> {{$user->name}}</h1>
    <hr/>
    <h3>About:</h3>
    <div id="about">{!!$bbcode->parse(e($user->about))!!}</div>
    @if($user->id == auth()->user()->id)
        <div id="editabout" style="display: none">
            {!! Form::open(['action' => ['PagesController@userabout', $user->id], 'method' => 'POST']) !!}
            <div class='form-group'>
                {{Form::textarea('about', $user->about, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'About'])}}
            </div>
            {{Form::submit('Save', ['class' => 'btn btn-primary'])}}
            {!! Form::close() !!}
        </div>
        <br/>
        <script type="text/javascript">
            function edit() {
                var about = document.getElementById("about");
                var edit = document.getElementById("editabout");
                if(edit.style.display === "none"){
                    about.style.display = "none";
                    edit.style.display = "block";
                }else{
                    about.style.display = "block";
                    edit.style.display = "none";
                }
            }
        </script>
        <button class="btn btn-primary" onclick="edit()">Edit</button>
    @endif
    </div>
@endsection