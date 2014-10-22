<?php /* Smarty version Smarty-3.1.19, created on 2014-10-09 08:04:34
         compiled from "/Applications/AMPPS/www/stream/demo/v1/frontend/v1/dev/www/smarty_t/wait/wait.html" */ ?>
<?php /*%%SmartyHeaderCode:143662585754362572510c77-88577376%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b139a2a3d9d260cbc542e0b077c24e80b8ba570' => 
    array (
      0 => '/Applications/AMPPS/www/stream/demo/v1/frontend/v1/dev/www/smarty_t/wait/wait.html',
      1 => 1412829074,
      2 => 'file',
    ),
    'd569792ebc02f99721138ef61e2886696d3fd389' => 
    array (
      0 => '/Applications/AMPPS/www/stream/demo/v1/frontend/v1/dev/www/smarty_t/layout/master.html',
      1 => 1411478286,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '143662585754362572510c77-88577376',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ci' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_543625725b4836_77782657',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543625725b4836_77782657')) {function content_543625725b4836_77782657($_smarty_tpl) {?><!DOCTYPE html>
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
					window.location.href = '<?php echo site_url("play");?>
' ;
				}
				else if(response.status=='PLAY_TIME_OUT') {
					window.location.href = '<?php echo site_url("logout");?>
' ;
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
	var loop_count = 2 ;
	// getPingDelay_ajax( loop_count );
	// getPingDelay_img( img );
	

	function getPingDelay_img()
	{
		ping_start = new Date().getTime();
		var img = new Image();
		img.src = "<?php echo images_url('icon/transparent.gif');?>
";
		img.onload = function() {
	    	ping_end = new Date().getTime();
	    	ping_delay += ping_end - ping_start;
	    	alert(ping_delay);
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

				if(loop > 1) {
					setTimeout(function(){ getPingDelay_ajax(--loop) } , 100);
				}
				else {
					alert((ping_delay/loop_count)/2);
				}
			}
		});
	}
	

	

// -------------------------------------
}); </script>

</body>
</html><?php }} ?>
