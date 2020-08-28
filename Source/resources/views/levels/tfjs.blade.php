@extends('layouts.app')

@section('content')
<script>
    function postdone(taichiscore){
        $.post("demo_test.asp", {sub: "{{$sub->id}}", score: taichiscore});
    }
</script>
<div id="loading" style="display:flex"> 
    <div class="spinner-text"> Loading PoseNet 2 model... </div> 
    <div class="sk-spinner sk-spinner-pulse"> </div> 
</div> 
<div class="row">
    <div id="main" class="col"> 
        <video id="video" class="w100" playsinline="" style="-moz-transform:scaleX(-1);-o-transform:scaleX(-1);-webkit-transform:scaleX(-1);transform:scaleX(-1);display:none;"> </video> 
        <canvas id="output" class="w-100"> </canvas>
        <!--<script type="text/javascript">
            var trash=document.getElementById("output").getContext("2d");
            var trash2=document.getElementById("output");
        </script>-->
    </div>
    <!--<iframe src="/videos/{{$sub->level->id}}.mp4" class="col" id="coconut"></iframe>-->
    <div class="col">
        <video class="w-100" id="coconut" controls>
            <source src="/videos/{{$sub->level->id}}.mp4" type="video/mp4"/>
            Your browser does not support the video tag.
        </video>
    </div>
</div>
<script src="/js/poses/{{$sub->level->id}}.js"></script>
<!--<sciprt src="./ikea.js"></sciprt>-->
<script src="/js/camera.js"></script>
<!-- <script src="./read.js"></script>-->

<!--<img src="https://previews.123rf.com/images/thoermer/thoermer1703/thoermer170300126/74586583-young-woman-doing-a-taichi-or-qi-gong-exercise-at-a-lake.jpg" onclick="abc()">-->
<!--     <button onhover="document.getElementById" onclick="document.getElementById('morelog').innerHTML='1234'">update mask</button> -->
@endsection