<!doctype html>
<html lang='en'>
<head>
<meta charset='utf-8' />
<title><?=isset($title) ? $title : 'ViewBoxLite v.1.2'?></title>
<link rel="stylesheet" href="css/style.css" type="text/css"/> 
<script src="js/jquery-1.7.2.min.js"></script>
<script src="js/ViewBoxLite.js"></script>
</head>
<body>

<script>
$(document).ready( function() {
   $(function() {
  $('.img').viewBoxLite({
  fadeInSpeedThumbs:300,
  fadeInSpeed: 500,
  fadeOutSpeed: 500,
  
  })
});     
});
</script>

<div id="content">
<div class="headline">ViewBoxLite.<span>resize your picture</span></div>
<div class="myLightBox">
<!-- BigPicture-->
 

 
    <img src='img/1.jpg'  style="width: 100%;max-height: 100%" />
  
    <!-- End BigPicture-->
</div>
<div id="overlay"></div>   
    <div class="ThumbHolder">
  
    <div class="thumb">
        
       <img src='img/1.jpg'/>
      
    </div>
    <div class="thumb">
  
        <img src='img/2.jpg'/>
    </div>
    <div class="thumb">
        <img src='img/3.jpg'  />
    </div>
     <div class="thumb">
        <img src='img/4.jpg'  />
    </div>
     <div class="thumb">
        <img src='img/5.jpg'  />
    </div>
     <div class="thumb">
        <img src='img/6.jpg'  />
    </div>
     <div class="thumb">
        <img src='img/7.jpg'  />
    </div>
       <div class="thumb">
        <img src='img/8.jpg'  />
    </div>
 
    </div>
</div>
</body>
</html>

