<?php /* Smarty version Smarty-3.1.19, created on 2014-10-22 14:08:06
         compiled from "/Applications/AMPPS/www/stream/demo/v1/frontend/v1/dev/www/smarty_t/wait/wait_v2.html" */ ?>
<?php /*%%SmartyHeaderCode:165699295454479e264da425-76403855%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b9f71d3667b080f2b2eb091e84ee89eef5ae9664' => 
    array (
      0 => '/Applications/AMPPS/www/stream/demo/v1/frontend/v1/dev/www/smarty_t/wait/wait_v2.html',
      1 => 1413977067,
      2 => 'file',
    ),
    '38612ca5fec7670c8afd7d07d319b423227f9b6e' => 
    array (
      0 => '/Applications/AMPPS/www/stream/demo/v1/frontend/v1/dev/www/smarty_t/layout/master_v2.html',
      1 => 1413974270,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '165699295454479e264da425-76403855',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54479e26570b55_87426612',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54479e26570b55_87426612')) {function content_54479e26570b55_87426612($_smarty_tpl) {?><!DOCTYPE html>
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

     

<a id="btnLogout"  href="<?php echo site_url('logout');?>
">
<img src="<?php echo images_url('icon/logout.png');?>
" width="100%">
</a>

<a id="btnHome"  href="<?php echo site_url('home');?>
" style="display:block; position:fixed; margin-left: 15px; margin-top:15px;">
	<div class="glyphicon glyphicon-home" style="font-size:32px;"></div>
</a>

<div class="pgContent pgWait">

	<div class="container text-center">
	

		<div class="welcomeBlock">
			<div class="title">
				Welcome <span class="textBlue playerName"> <?php echo $_smarty_tpl->tpl_vars['ci']->value->session->userdata('playerName');?>
 </span> 
				<br> <?php if ($_smarty_tpl->tpl_vars['player']->value['isPremium']) {?> PREMIUM <?php }?>
			</div>
			<div class="content">
				Shadow of Modor works only on <br>
				<span class="red">Chrome</span> & <span class="red">Firefox</span>
			</div>
		</div>



		<img src="<?php echo images_url('wait/line.png');?>
" alt="">



		<div class="queueBlock">
			<p> 
				You are in queue
				<span class="qIndex" style="display:none;"> 
					at position <span class="qpos textBlue"></span>
				</span> 
			</p>
			<p> Keep this browser <span class="textBlue">tab</span> <span class="textRed">open</span> to stay in the <span class="_textRed">queue</span> </p>
			
		</div>

	</div>  <!-- container -->





	<!-- ### pingBlock ### -->
	<div class="pingBlock">
		<div class="container text-center">
			<!-- <p> 
				Expect a delay of  
				<span id="delay" class="textRed"> ...... </span> 
				<span class="textBlue"> milliseconds </span>  
				when playing 
			</p> -->
			<p>
				Consider that the distance from you to our server affects the delay
			</p>
			<br>
			<img src="<?php echo images_url('wait/latency_animated.gif');?>
" class="latency">
		</div>  <!-- container -->
	</div> <!-- pingBlock -->




	<!-- ### twitchTV ### -->
	<div class="twitchTV">
		<div class="container text-center">
			<a class="title" href="http://www.twitch.tv/swyoexp"> watch SWYO @ twitch.tv </a>
			<!-- <iframe src="http://www.twitch.tv/swyoexp/embed" frameborder="0" scrolling="no" height="378" width="620"></iframe> -->
		</div>  <!-- container -->
	</div>	<!-- twitchTV -->




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
     
<script> $(document).ready(function(){
// -------------------------------------

	check_status(true);
	function check_status(loop) {
		$.ajax({
			type: "GET",
			url: '<?php echo site_url("wait/ajx_checkStatus");?>
',
		  	dataType: 'json',
			success: function(response) { 
				console.log(response); 
				if(response.status=='PLAY') {
					window.location.href = '<?php echo site_url("playws");?>
' ;
				}
				else if(response.status=='PLAY_TIME_OUT') {
					window.location.href = '<?php echo site_url("logout");?>
' ;
				}
				else if(response.inPQueue == 1) { 
					$(".qpos").text('#'+response.qpos);
					$(".qIndex").show();
				}
				else if(response.isPremium == 1) { 
					$(".qpos").text('#'+response.qpos);
					$(".qIndex").show();
				}

				if(loop==true){
					setTimeout(function(){ check_status(loop) }, 5000);
				}
			}
		});
	}

	var ping_start = 0;
	var ping_end = 0;
	var ping_delay = 0;

	getPingDelay_img( );
	// getPingDelay_ajax ( 5 );
	
	
	function getPingDelay_img()
	{
		ping_start = new Date().getTime();
		var img = new Image();
		img.src = "<?php echo images_url('icon/transparent.gif');?>
";
		img.onload = function() {
	    	ping_end = new Date().getTime();
	    	$("#delay").html( ping_end - ping_start );
		}
	}
	
	function getPingDelay_ajax(loop)
	{
		$.ajax({
			dataType: 'jsonp',
			type: 'get',
			url: "http://www.trackre.net"
			,beforeSend: function(  ) {
				ping_start = new Date().getTime();
			}
			,complete: function () {
				ping_end = new Date().getTime();
				ping_delay += ping_end - ping_start;

				var final_delay = Math.ceil((ping_delay/loop_count)) ;

				if(loop > 1) {
					setTimeout(function(){ getPingDelay_ajax(--loop) } , 400);
					$("#delay").html(final_delay);
				}
				else {
					$("#delay").html(final_delay);
				}
			}
		});
	}
	

	

// -------------------------------------
}); </script>

</body>
</html><?php }} ?>
