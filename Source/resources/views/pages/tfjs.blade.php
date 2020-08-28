<!DOCTYPE html>
<html>
  <head>
    <title>PoseNet - Maestro</title>
    <script type="text/javascript">
       var poseforccl;
    </script>
    <style>
      .footer{position:fixed;left:0;bottom:0;width:100%;color:#000}
      .footer-text{max-width:600px;text-align:center;margin:auto}
      @media only screen and (max-width:600px){.dg,.footer-text{display:none}}
      .sk-spinner-pulse{width:20px;height:20px;margin:auto 10px;float:left;background-color:#333;border-radius:100%;-webkit-animation:sk-pulseScaleOut 1s ease-in-out infinite;animation:sk-pulseScaleOut 1s ease-in-out infinite}
      @-webkit-keyframes sk-pulseScaleOut{0%{-webkit-transform:scale(0);transform:scale(0)}to{-webkit-transform:scale(1);transform:scale(1);opacity:0}}
      @keyframes sk-pulseScaleOut{0%{-webkit-transform:scale(0);transform:scale(0)}to{-webkit-transform:scale(1);transform:scale(1);opacity:0}}
      .spinner-text{float:left}
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body> 
    <p id="moreloglog">10:32pm</p>
    <div id="info" style="display:none"> </div> 
    <div id="loading" style="display:flex"> 
      <div class="spinner-text"> Loading PoseNet 2 model... </div> 
      <div class="sk-spinner sk-spinner-pulse"> </div> 
    </div> 
    <div id="main" style="display:none"> 
      <video id="video" playsinline="" style="-moz-transform:scaleX(-1);-o-transform:scaleX(-1);-webkit-transform:scaleX(-1);transform:scaleX(-1);display:none;"> </video> 
      <canvas id="output"> </canvas>
    </div> 
    <div class="footer"> 
      <div class="footer-text"> 
        <p id="log">hello2</p>
        <p id="morelog">moremorelog!!!</p>
        <p> PoseNet runs with either a <strong>single-pose</strong> or <strong>multi-pose</strong> detection algorithm. The single person pose detector is faster and more accurate but requires only one subject present in the image. <br> <br> The <strong>output stride</strong> and <strong>input resolution</strong> have the largest effects on accuracy/speed. A <i>higher</i> output stride results in lower accuracy but higher speed. A <i>higher</i> image scale factor results in higher accuracy but lower speed. </p> 
      </div> 
    </div> 
    
    <script src="{{asset('js/camera.js')}}"></script>
    <script src="{{asset('js/read.js')}}"></script>
    <img src="https://previews.123rf.com/images/thoermer/thoermer1703/thoermer170300126/74586583-young-woman-doing-a-taichi-or-qi-gong-exercise-at-a-lake.jpg" onclick="abc()">
<!--     <button onhover="document.getElementById" onclick="document.getElementById('morelog').innerHTML='1234'">update mask</button> -->
  </body>
</html>
