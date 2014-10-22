<?php /* Smarty version Smarty-3.1.19, created on 2014-10-22 15:57:12
         compiled from "/Applications/AMPPS/www/stream/demo/v2/frontend/www/smarty_t/home/home_v2.html" */ ?>
<?php /*%%SmartyHeaderCode:3144597065447b7b8c5b0f2-63248956%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '358141a09c6775396cbd9516fd2baf0d12f453b0' => 
    array (
      0 => '/Applications/AMPPS/www/stream/demo/v2/frontend/www/smarty_t/home/home_v2.html',
      1 => 1413975386,
      2 => 'file',
    ),
    '28ec7b633de5b41afe83fc43aac3cd0af0b76878' => 
    array (
      0 => '/Applications/AMPPS/www/stream/demo/v2/frontend/www/smarty_t/layout/master_v2.html',
      1 => 1413974270,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3144597065447b7b8c5b0f2-63248956',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5447b7b8cf3848_55227211',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5447b7b8cf3848_55227211')) {function content_5447b7b8cf3848_55227211($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> SWYO | PC Game @ Browser </title>

    <!-- FONTS -->
    <!-- 
        font-family: 'Roboto', sans-serif;
        font-family: 'Source Sans Pro', sans-serif;
        font-family: 'Raleway', sans-serif;
        font-family: 'Titillium Web', sans-serif;
        font-family: 'Exo 2', sans-serif;
        font-family: 'Advent Pro', sans-serif;
        font-family: 'Megrim', cursive;
        font-family: 'Sigmar One', cursive;
    -->
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300' rel='stylesheet' type='text/css'>

    <!-- Bootstrap -->
    <link href="<?php echo vendor_url('bootstrap/3.2.0/css/bootstrap.min.css');?>
" rel="stylesheet">
    <!-- Fancybox -->
    <link href="<?php echo vendor_url('fancybox/source/jquery.fancybox.css');?>
" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- vjs -->
    <link href="//vjs.zencdn.net/4.9/video-js.css" rel="stylesheet">
    <script src="//vjs.zencdn.net/4.9/video.js"></script>

    <!-- SOCIAL SHARE -->
    <script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
    <script type="text/javascript">
        stLight.options({publisher: "5b799276-10c5-427d-80a2-db25a94b676b", doNotHash: false, doNotCopy: false, hashAddressBar: false});
    </script>
    
    <link href="<?php echo assets_url('v2.css');?>
?<?php echo time();?>
" rel="stylesheet">
     
	

</head>
<body>

     
<div class="pgContent">

	<canvas id="c" width="100%" height="300" style="position:absolute; width:100%; left:0; top:0; right:0;"></canvas>

	<!-- ### jumbotron ### -->
	<div id="jumbotron" class="jumbotron" style="position:relative; z-index:10;">
		
		<div class="logoBox">
			<img class="logo" src="<?php echo images_url('logo/swyo_big.png');?>
" >
		</div>
		<div class="sloganBox">
			Experiment to bring your favourite PC content <br>
			in one place, on any screen
		</div>
		<div class="contactButtons">
			<?php if ($_smarty_tpl->tpl_vars['ci']->value->session->userdata('logged_in')) {?>
			<a class="btn btnTryOut" href="<?php echo site_url('wait');?>
"> Try it out </a>
			<?php } else { ?>
			<a class="btn btnTryOut "href="<?php echo site_url('login');?>
"> Try it out </a>
			<?php }?>
			<a class="btn btnSignUp" href="<?php echo site_url('register');?>
"> Sign up </a>
		</div>
	</div>

	


	
	<!-- ### prototypeVideoBlock ### -->
	<div id="prototypeVideoBlock" class="prototypeVideoBlock" >
		<!-- ### videoControlButtons ### -->
		<div id="videoControlButtons" class="videoControlButtons">
			<a class="btnPlay" role="button"> Play </a>
			<a class="btnPause" role="button"> Pause </a>
		</div>
		<!-- ### videoOverlayBlock ### -->
		<div class="videoOverlayBlock">
			<div class="txtBlock">
				<div class="txtSmall">Let's experience PC gaming on the </div>
				<div class="txtBig">Browser</div>
			</div>
			<div class="contactButtons">
				<?php if ($_smarty_tpl->tpl_vars['ci']->value->session->userdata('logged_in')) {?>
				<a class="btn btnTryOut" href="<?php echo site_url('wait');?>
"> Try it out </a>
				<?php } else { ?>
				<a class="btn btnTryOut" href="<?php echo site_url('login');?>
"> Try it out </a>
				<?php }?>
				<a class="btn btnSignUp" href="<?php echo site_url('register');?>
"> Sign up </a>
			</div>
		</div>
		<!-- ### prototypeVideo ### -->
		<video id="prototypeVideo" class="video-js vjs-default-skin" style="background:#111;" loop>
			<source src="<?php echo videos_url('BannerVideo.mp4');?>
" type="video/mp4">
			<source src="<?php echo videos_url('BannerVideo.webm');?>
" type="video/webm">
			<source src="<?php echo videos_url('BannerVideo.ogg');?>
" type="video/ogg">
			Your browser does not support the video tag.
		</video>
	</div>



	<!-- ### stat ### -->
	<div class="statBlock">
		<div class="container">
			<div class="row">
				<div class="col-sm-4 text-center">
					<a class="stat noTesters" href="http://www.twitch.tv/swyoexp">
						<span class="val"> 
							<span class=" glyphicon glyphicon-globe "></span>
						</span> 
						<br>
						<span class="lab">Testers</span>
					</a>
				</div>
				<div class="col-sm-4 text-center">
					<a class="stat noHomePC" href="http://www.twitch.tv/swyoexp">
						<span class="val">03</span>
						<br>
						<span class="lab">Home PCs</span>
					</a>
				</div>
				<div class="col-sm-4 text-center">
					<a class="stat noFAQ" href="http://www.twitch.tv/swyoexp">
						<span class="val"> &infin; </span>
						<br>
						<span class="lab"> #FAQ </span>
					</a>
				</div>
			</div>
		</div>
	</div>



	<!-- ### feedbackBlock ### -->
	<div class="feedbackBlock">
		<div class="container">
			<div class="heading"> We value your feedback! </div>
			<p class="desc"> Like the experiment? Help us spread the word out! </p>
			<ul class="iconSet">
				<!-- <li> <img src="<?php echo images_url('icon/facebook.png');?>
" alt=""> </li>
				<li> <img src="<?php echo images_url('icon/google.png');?>
" alt=""> </li>
				<li> <img src="<?php echo images_url('icon/tweeter.png');?>
" alt=""> </li> -->
				<span class='st_facebook_large' displayText='Facebook'></span>	
				<span class='st_googleplus_large' displayText='Google +'></span>
				<span class='st_twitter_large' displayText='Tweet'> </span>
			</ul>
		</div>
	</div>


	<!-- ### rights ### -->
	<div class="rights">
		<div class="container">
			© 2014 All Rights Reserved – <span class="hlight">SevenRE UG</span> | Contact
		</div>
	</div>
	

	
</div>
 

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo vendor_url('bootstrap/3.2.0/js/bootstrap.min.js');?>
"></script>
    <!-- Fancybox -->
    <script src="<?php echo vendor_url('fancybox/source/jquery.fancybox.pack.js');?>
"></script>
    <script src="<?php echo vendor_url('placeholder/jquery.placeholder.js');?>
"></script>
    
    <script>
        $('input, textarea').placeholder();
    </script>
     
<script>
	$(document).ready(function() 
	{
		setJumbotronSize();
		$( window ).resize(function() {
			setJumbotronSize();
		});


		function setJumbotronSize(){
			var wHeight = $(window).height();
			var eHeight = $("#jumbotron").height();
			var diffHeight = wHeight - eHeight - 140;
			$("#jumbotron").css("padding-top",diffHeight/2);
			$("#jumbotron").css("padding-bottom",diffHeight/2);
		}
	});

	videojs("prototypeVideo").ready(function() 
	{
		var prototypeVideo = this;
		// prototypeVideo.play();

		setSize();
		$( window ).resize(function() {
			setSize();
		});



		$(".btnPause").css("display","block");
		$(".btnPlay").click(function(){ prototypeVideo.play(); 	$(this).hide(); $(".btnPause").show(); });
		$(".btnPause").click(function(){ prototypeVideo.pause(); $(this).hide(); $(".btnPlay").show(); });

		function setSize() {
			var vWidth = $("#prototypeVideoBlock").outerWidth();
			var vHeight = vWidth/1.75;
			vHeight = vHeight > 240 ? vHeight : 240 ;
			prototypeVideo.width(vWidth);
			prototypeVideo.height(vHeight);
		}
	});
</script>
<script>
	// requestAnimFrame shim
	window.requestAnimFrame = (function()
	{
	   return  window.requestAnimationFrame       || 
	           window.webkitRequestAnimationFrame || 
	           window.mozRequestAnimationFrame    || 
	           window.oRequestAnimationFrame      || 
	           window.msRequestAnimationFrame     || 
	           function(callback)
	           {
	               window.setTimeout(callback);
	           };
	})();

	// remove frame margin and scrollbars when maxing out size of canvas
	//document.body.style.margin = "0px";
	//document.body.style.overflow = "hidden";

	// get dimensions of window and resize the canvas to fit
	var width = window.innerWidth,
	    height = window.innerHeight,
	    canvas = document.getElementById("c"),
	    jumbotron = document.getElementById("jumbotron"),
	    mousex = width/2, mousey = height*60/100;
		
	canvas.width = width;
	canvas.height = height;

	// get 2d graphics context and set global alpha
	var G=canvas.getContext("2d");
	G.globalAlpha=0.65;

	// setup aliases
	var Rnd = Math.random,
	    Sin = Math.sin,
	    Floor = Math.floor;

	// constants and storage for objects that represent star positions
	var warpZ = 8,
	    units = 500,
	    stars = [],
	    cycle = 0,
	    Z = 0.025 + (1/25 * 2);

	// mouse events
	function addCanvasEventListener(name, fn) {
	   // jumbotron.addEventListener(name, fn, false);
	}

	addCanvasEventListener("mousemove", function(e) {
	   mousex = e.clientX;
	   mousey = e.clientY;
	});


	/*function wheel (e) {
	   var delta = 0;
	   if (e.detail)
	   {
	      delta = -e.detail / 3;
	   }
	   else
	   {
	      delta = e.wheelDelta / 120;
	   }
	   var doff = (delta/25);
	   if (delta > 0 && Z+doff <= 0.5 || delta < 0 && Z+doff >= 0.01)
	   {
	      Z += (delta/25);
	      //console.log(delta +" " +Z);
	   }
	}*/

	//addCanvasEventListener("DOMMouseScroll", wheel);
	//addCanvasEventListener("mousewheel", wheel);

	// function to reset a star object
	function resetstar(a)
	{
	   a.x = (Rnd() * width - (width * 0.5)) * warpZ; 
	   a.y = (Rnd() * height - (height * 0.5)) * warpZ; 
	   a.z = warpZ;
	   a.px = 0;
	   a.py = 0;
	}

	// initial star setup
	for (var i=0, n; i<units; i++)
	{
	   n = {};
	   resetstar(n);
	   stars.push(n);
	}

	// star rendering anim function
	var rf = function()
	{
	   // clear background
	   G.fillStyle = "#000";
	   G.fillRect(0, 0, width, height);
	   
	   // mouse position to head towards
	   var cx = (mousex - width / 2) + (width / 2),
	       cy = (mousey - height / 2) + (height / 2);
	   
	   // update all stars
	   /*var sat = Floor(Z * 500);       // Z range 0.01 -> 0.5
	   sat = Math.floor((Math.random() * 90) + 5);
	   if (sat > 100) sat = 100;*/

	   var strokeStyle = "#ffffff";
	   for (var i=0; i<units; i++)
	   {
	      var n = stars[i],            // the star
	          xx = n.x / n.z,          // star position
	          yy = n.y / n.z,
	          e = (1.0 / n.z + 1) * 2;   // size i.e. z

		      if( i%7 == 0){
		      	strokeStyle = "#fa1557";
		      }
	          else if( i%5 == 0){
	          	strokeStyle = "#22c7fc";
	          }
	          else {
	          	strokeStyle = "#ffffff";
	          }
	      
	      if (n.px !== 0)
	      {
	         // hsl colour from a sine wave
	         // G.strokeStyle = "hsl(" + ((cycle * i) % 360) + "," + sat + "%,90%)";
	         // G.strokeStyle = "hsl(" + ((cycle * i) % 360) + ",100%,50%)";
	         G.strokeStyle = strokeStyle;
	         G.lineWidth = e;
	         G.beginPath();
	         G.moveTo(xx + cx, yy + cy);
	         G.lineTo(n.px + cx, n.py + cy);
	         G.stroke();
	      }
	      
	      // update star position values with new settings
	      n.px = xx - 2;
	      n.py = yy - 2;
	      n.z -= Z;
	      
	      // reset when star is out of the view field
	      if (n.z < Z || n.px > width || n.py > height)
	      {
	         // reset star
	         resetstar(n);
	      }
	   }
	   
	   // colour cycle sinewave rotation
	   cycle += 0.01;
	   
	   setTimeout(function(){ requestAnimFrame(rf); },20);
	   
	};
	// requestAnimFrame(rf);


</script>

</body>
</html><?php }} ?>
