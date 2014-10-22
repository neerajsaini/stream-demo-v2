<?php /* Smarty version Smarty-3.1.19, created on 2014-10-09 03:03:50
         compiled from "/Applications/AMPPS/www/stream/demo/v1/frontend/v1/dev/www/smarty_t/home/home_v1.html" */ ?>
<?php /*%%SmartyHeaderCode:3698837185435def6a6f078-84384000%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b1c0845cf5b00082efaeafddb3c14be55cc577d' => 
    array (
      0 => '/Applications/AMPPS/www/stream/demo/v1/frontend/v1/dev/www/smarty_t/home/home_v1.html',
      1 => 1412684055,
      2 => 'file',
    ),
    '1fcb9149e7c4471383895718a6115361222d79ad' => 
    array (
      0 => '/Applications/AMPPS/www/stream/demo/v1/frontend/v1/dev/www/smarty_t/layout/master_v1.html',
      1 => 1412698927,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3698837185435def6a6f078-84384000',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5435def6add8d8_12573290',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5435def6add8d8_12573290')) {function content_5435def6add8d8_12573290($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> SWYO | Frontend </title>

    <!-- FONTS -->
    <!-- font-family: 'Lato', sans-serif; -->
    <link href='http://fonts.googleapis.com/css?family=Lato:400,300' rel='stylesheet' type='text/css'>
    <!-- font-family: 'Roboto', sans-serif; -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100' rel='stylesheet' type='text/css'>

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

    <!-- HTML 5 VIDEO -->
    <link href="//vjs.zencdn.net/4.9/video-js.css" rel="stylesheet">
    <script src="//vjs.zencdn.net/4.9/video.js"></script>
    
    <!-- CSS -->
    <style>
        body, * { font-family: 'Roboto', sans-serif; font-weight: 300; }
    </style>
     
	<style>

		/* jumbotron
		**********************************************/
			.jumbotron { background-color: rgb(17,17,17); margin-bottom: 0; padding-top: 100px; padding-bottom: 100px; }
			.jumbotron .logo { max-width: 400px; margin: 0 auto; margin-bottom: 40px; }
			.jumbotron .slogon { max-width: 1000px; margin: 0 auto; }
			/*.jumbotron .slogan { padding: 20px 0px; margin-bottom: 20px; color: #ddd; font-weight: 300; }*/


		/* contactButtons
		**********************************************/
			.contactButtons {  }
			.contactButtons .btn { border: 1px solid #ddd;  margin: 0px 20px; font-weight: 300; }
			.contactButtons .btnTryOut { color:#22c7fc; border-color: #22c7fc; }
			.contactButtons .btnSignUp { color:#fa1557; border-color: #fa1557; }


		/* videoBlock
		**********************************************/
			#videoBlock  { position: relative; }
			#videoBlock .controllButtons  { position: absolute; right: 0; bottom: 0; margin: 100px;  z-index: 100; }
			#videoBlock .controllButtons .cBtn { cursor: pointer; }


		/* controllButtons
		**********************************************/
			#videoBlock .controllButtons .btnPlay , 
			#videoBlock .controllButtons .btnPause { 
				display: block; position: absolute;
				width: 36px; height: 36px;
				border: 1px solid #fff; border-radius: 22px;
				color: #fff; text-indent: -999em; 
			}
			#videoBlock .controllButtons .btnPlay:after {
				content: '';
				position: absolute; top: 11px; left: 12px;
				width: 0; height: 0; border: 14px solid transparent; border-width: 7px 14px;
				border-left-color: #fff; overflow: hidden;
			}
			#videoBlock .controllButtons .btnPause:before {
				content: '';
				position: absolute; top: 11px; left: 10px;
				width: 4px; height: 14px; border: 3px solid #fff;
				border-top: none; border-bottom: none;
			}
			#videoBlock .controllButtons .btnPause:after {
				content: '';
				position: absolute; top: 11px; right: 10px;
				width: 4px; height: 14px; border: 3px solid #fff;
				border-top: none; border-bottom: none;
			}
			#videoBlock .controllButtons .btnPause { display: none; }

		/* infoBlock
		**********************************************/
			.infoBlock { 
				position: absolute;  width: 100%; z-index: 10; 
				text-align: center; 
				background-color: transparent;
				opacity: 0.6;
				padding: 60px 20px;
			}
			/*.infoBlock .txtBig { font-size:2em; }*/
			.infoBlock .txtMain { max-width: 700px; margin: 0 auto; }


		/* twitchBlock
		**********************************************/
			.twitchBlock { 
				background-color: #000; padding:200px 20px; 
				text-align: center; color: #666; 
				font-size: 36px;  line-height: 2em;
			}
			.twitchBlock .logo { max-width: 300px; margin: 0 auto; }
			.twitchBlock .btnWatch { color:#999; border:1px solid #999; font-size: 20px; font-weight: 300; }

	</style>

</head>
<body>

     
	<div class="pgContent">



		<div class="jumbotron text-center">
			<img class="logo img-responsive" src="<?php echo images_url('logo/swyo_big.png');?>
" alt="">
			<img class="slogon img-responsive" src="<?php echo images_url('text_content/Slogan 1.png');?>
" alt="">

			<!-- <h1 class="slogan">All of your favorite PC content <br> in one place, on any screen </h1> -->
			<div class="contactButtons">
				<a class="btn btnTryOut fancybox.ajax" href="<?php echo site_url('login/login_form');?>
"> Try it out </a>
				<a class="btn btnSignUp" href="#"> Sign up </a>
			</div>
		</div>


		<!-- muted="muted" autoplay="autoplay" loop
		poster="https://www.paypalobjects.com/webstatic/mktg/wright/videos/pay-on-the-go.jpg"  -->
		<div id="videoBlock">
			<video id="bannerVideo" class="video-js vjs-default-skin" loop>
				<source src="<?php echo videos_url('BannerVideo.mp4');?>
" type="video/mp4">
			    <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
			</video>
			<div class="controllButtons">
				<a class="cBtn btnPlay" role="button"> &nbsp; </a>
				<a class="cBtn btnPause" role="button"> Pause </a>
			</div>
			<div class="clearfix"></div>
		</div>


		<div class="infoBlock">
			<img class="txtMain img-responsive" src="<?php echo images_url('text_content/Slogan 2.png');?>
" alt="">
			<div class="contactButtons">
				<a class="btn btnTryOut fancybox.ajax" href="<?php echo site_url('login/login_form');?>
"> Try it out </a>
				<a class="btn btnSignUp" href="#"> Sign up </a>
			</div>
		</div>


		<!-- <div class="twitchBlock">
			<img class="logo img-responsive" src="<?php echo images_url('logo/swyo_big.png');?>
" alt="">
			<div class="at"> @ </div>
			<div class="title"> (twitch.tv) </div>
			<iframe src="http://www.twitch.tv/swyoexp/embed" frameborder="0" scrolling="no" height="378" width="620"></iframe>
			<br>
			<a class="btn btnWatch" href="http://www.twitch.tv/swyoexp?tt_medium=live_embed&tt_content=text_link" > Watch live on Twitch </a>
		</div> -->

		
		
		
		
	</div>
 

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo vendor_url('bootstrap/3.2.0/js/bootstrap.min.js');?>
"></script>
    <!-- Fancybox -->
    <script src="<?php echo vendor_url('fancybox/source/jquery.fancybox.pack.js');?>
"></script>

     
	<script>

		$(document).ready(function() {

			$(".infoBlock").css("margin-top", - $(".infoBlock").outerHeight() + 60 );

			$(".btnPlay").click(function(){  
				$(this).hide();
				$(".btnPause").show();
				$(".infoBlock").slideUp();
			});
			$(".btnPause").click(function(){  
				$(this).hide();
				$(".btnPlay").show();
				$(".infoBlock").slideDown();
			});

			$(".contactButtons .btn").fancybox({
				maxWidth	: 800,
				maxHeight	: 600,
				fitToView	: false,
				//width		: '70%',
				//height		: '70%',
				autoSize	: true,
				closeClick	: false,
				openEffect	: 'none',
				closeEffect	: 'none'
			});
		});


		

		videojs("bannerVideo").ready(function()
		{
			var myPlayer = this;

			
			$("#videoBlock video").css("width","100%");
		  	$("#videoBlock video").css("height","auto");

		  	myPlayer.width( $(window).width() );
		  	$("#bannerVideo").css("height",  60 + $("#videoBlock video").height() );
		  	$( window ).resize(function() {
		  		myPlayer.width($( window ).width());
		  		$("#bannerVideo").css("height",  $("#videoBlock video").height() );
		  		$(".infoBlock").css("margin-top", - $(".infoBlock").outerHeight() );
		  	});

		  	$(".btnPlay").click(function(){ myPlayer.play(); });
		  	$(".btnPause").click(function(){ myPlayer.pause(); });
		});
		
	</script>

</body>
</html><?php }} ?>
