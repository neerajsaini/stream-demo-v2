<?php /* Smarty version Smarty-3.1.19, created on 2014-10-22 14:06:40
         compiled from "/Applications/AMPPS/www/stream/demo/v1/frontend/v1/dev/www/smarty_t/login/login_v2.html" */ ?>
<?php /*%%SmartyHeaderCode:210676078354479dd03f7004-92595567%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b847ea022742fbc775346eb3e54134c339f124f8' => 
    array (
      0 => '/Applications/AMPPS/www/stream/demo/v1/frontend/v1/dev/www/smarty_t/login/login_v2.html',
      1 => 1413131692,
      2 => 'file',
    ),
    '38612ca5fec7670c8afd7d07d319b423227f9b6e' => 
    array (
      0 => '/Applications/AMPPS/www/stream/demo/v1/frontend/v1/dev/www/smarty_t/layout/master_v2.html',
      1 => 1413974270,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '210676078354479dd03f7004-92595567',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54479dd0480929_42268755',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54479dd0480929_42268755')) {function content_54479dd0480929_42268755($_smarty_tpl) {?><!DOCTYPE html>
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
	<div class="container">


		<div class="loginFormBlock">
			<div class="border_frame">
				<img src="<?php echo images_url('register/border_frame.png');?>
">
			</div>

			<form method="post" id="formLogin">
				<div class="formHeader">
					<img class="signupIcon" src="<?php echo images_url('icon/lock.png');?>
">
					<div class="title">Login</div>
				</div>

				<?php if ($_smarty_tpl->tpl_vars['ci']->value->form_validation->error_count()>0) {?>
					<div class="validation_errors" style="color: pink;">
						<?php echo validation_errors();?>

					</div>
				<?php }?>

				<div class="fieldSet">
					<div class="fieldRow">
						<input class="fInput" type="text" name="playerName" value="<?php echo set_value('playerName');?>
" placeholder="player name">
					</div>
					<div class="fieldRow">
						<input class="fInput" type="password" name="password" value="" placeholder="password">
					</div>
					<button type="submit" class="btn btnLogin">Login</button>
				</div>
			</form>
		</div>

	</div> <!-- container -->
</div> <!-- pgContent -->
 

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
     
</body>
</html><?php }} ?>
