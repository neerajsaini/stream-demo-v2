<?php /* Smarty version Smarty-3.1.19, created on 2014-10-12 18:24:40
         compiled from "/Applications/AMPPS/www/stream/demo/v1/frontend/v1/dev/www/smarty_t/login/login.html" */ ?>
<?php /*%%SmartyHeaderCode:1234838759543aab48a3d2b5-75965525%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '38a4d949d902ff385086c0dca00bcfd5b791ac0f' => 
    array (
      0 => '/Applications/AMPPS/www/stream/demo/v1/frontend/v1/dev/www/smarty_t/login/login.html',
      1 => 1411585809,
      2 => 'file',
    ),
    'd569792ebc02f99721138ef61e2886696d3fd389' => 
    array (
      0 => '/Applications/AMPPS/www/stream/demo/v1/frontend/v1/dev/www/smarty_t/layout/master.html',
      1 => 1411478286,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1234838759543aab48a3d2b5-75965525',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ci' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_543aab48ae7375_35106026',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543aab48ae7375_35106026')) {function content_543aab48ae7375_35106026($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> SWYO | Frontend </title>

    <!-- Bootstrap -->
    <link href="<?php echo vendor_url('bootstrap/3.2.0/css/bootstrap.min.css');?>
" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

    <header id="pgHeader" class="pgHeader">
        <div class="navbar navbar-default" role="navigation">
            <div class="container">

                <!-- navbar-header -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mainNav">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"> 
                        BrandName
                    </a>
                </div>
                 
                <!-- navbar-collapse -->
                <div class="collapse navbar-collapse" id="mainNav">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="<?php if ($_smarty_tpl->tpl_vars['ci']->value->uri->segment(1)=='home') {?> active <?php }?>"><a href="<?php echo site_url('home');?>
">home</a></li>
                        <li class="<?php if ($_smarty_tpl->tpl_vars['ci']->value->uri->segment(1)=='register') {?> active <?php }?>"><a href="<?php echo site_url('register');?>
">register</a></li>
                        <li class="<?php if ($_smarty_tpl->tpl_vars['ci']->value->uri->segment(1)=='login') {?> active <?php }?>"><a href="<?php echo site_url('login');?>
">login</a></li>
                        <li class="<?php if ($_smarty_tpl->tpl_vars['ci']->value->uri->segment(1)=='join') {?> active <?php }?>"><a href="<?php echo site_url('join');?>
">join</a></li>
                        <li class="<?php if ($_smarty_tpl->tpl_vars['ci']->value->uri->segment(1)=='wait') {?> active <?php }?>"><a href="<?php echo site_url('wait');?>
">wait</a></li>
                        <li class="<?php if ($_smarty_tpl->tpl_vars['ci']->value->uri->segment(1)=='play') {?> active <?php }?>"><a href="<?php echo site_url('play');?>
">play</a></li>
                        <li class="<?php if ($_smarty_tpl->tpl_vars['ci']->value->uri->segment(1)=='logout') {?> active <?php }?>"><a href="<?php echo site_url('logout');?>
">logout</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </header>
    

     
<div class="pgContent">
	<div class="container">
			
		<div class="row">
			<div class="col-sm-6">
				<h1>Login</h1>
				<br><br>
				<!-- ########## VALIDATION ERRORS ########## -->
				<?php if ($_smarty_tpl->tpl_vars['ci']->value->form_validation->error_count()>0) {?>
					<div class="validation_errors" style="padding:10px; margin-bottom:20px; background: pink;">
						<?php echo validation_errors();?>

					</div>
				<?php }?>
				<!-- ########## FORM ########## -->
				<form method="post" role="form">
					<div class="form-group">
						<label for="" class="control-label"> Player Name </label>
						<!-- <input type="text" name="playerName" class="form-control" value="<?php echo set_value('playerName');?>
" > -->
						<input type="text" name="playerName" class="form-control" value="JohnyDep" >
					</div>
					<div class="form-group">
						<label for="" class="control-label"> Password </label>
						<input type="password" name="password" class="form-control" value="admin" >
					</div>
					<button type="submit" class="btn btn-warning btn-lg btn-block"> Login </button>
				</form>
			</div> <!-- col -->
		</div> <!-- row -->

	</div> <!-- container -->
</div> <!-- pgContent -->
 

    <footer id="pgFooter" class="pgFooter" style="margin-top:40px; background: #333; color: #666; padding: 20px 0px;">
        <div class="container text-center">
            sywo
        </div>
    </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo vendor_url('bootstrap/3.2.0/js/bootstrap.min.js');?>
"></script>

     
</body>
</html><?php }} ?>
