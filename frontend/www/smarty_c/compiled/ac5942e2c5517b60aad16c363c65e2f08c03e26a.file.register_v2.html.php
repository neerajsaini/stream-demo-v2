<?php /* Smarty version Smarty-3.1.19, created on 2014-10-18 02:42:44
         compiled from "/Applications/AMPPS/www/stream/demo/v1/frontend/v1/dev/www/smarty_t/register/register_v2.html" */ ?>
<?php /*%%SmartyHeaderCode:256624025441b78439f110-86240789%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ac5942e2c5517b60aad16c363c65e2f08c03e26a' => 
    array (
      0 => '/Applications/AMPPS/www/stream/demo/v1/frontend/v1/dev/www/smarty_t/register/register_v2.html',
      1 => 1413592946,
      2 => 'file',
    ),
    '38612ca5fec7670c8afd7d07d319b423227f9b6e' => 
    array (
      0 => '/Applications/AMPPS/www/stream/demo/v1/frontend/v1/dev/www/smarty_t/layout/master_v2.html',
      1 => 1413331957,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '256624025441b78439f110-86240789',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5441b78440fe87_95210683',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5441b78440fe87_95210683')) {function content_5441b78440fe87_95210683($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> SWYO | Frontend </title>

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
" rel="stylesheet">
     
</head>
<body>

     
<div class="pgContent">
	<div class="container">

		<div class="regFormBlock">
			<div class="border_frame">
				<img src="<?php echo images_url('register/border_frame.png');?>
">
			</div>

			<form method="post" id="formRegister">

				<div class="formHeader">
					<img class="signupIcon" src="<?php echo images_url('icon/signup.png');?>
">
					<div class="title">Sign Up</div>
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

					<div class="fieldRow">
						<input class="fInput" type="password" name="confirmPassword" value="" placeholder="confirm password">
					</div>

					<div class="fieldRow">
						<input class="fInput" type="email" name="email" value="<?php echo set_value('email');?>
" placeholder="email">
					</div>

					<div class="captcha">
						<img id="captcha" src="<?php echo $_smarty_tpl->tpl_vars['securimage_show_file_path']->value;?>
" alt="CAPTCHA Image"  style="opacity:0.7; border-radius: 5px;"/>
					</div>
					<div class="fieldRow">
						<input class="fInput" type="text" name="captcha_code" value="" placeholder="type above code">
					</div>

					<button type="submit" class="btn btnSignUp"> Sign Up</button>
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
