<?php /* Smarty version Smarty-3.1.19, created on 2014-09-24 22:38:27
         compiled from "/Applications/AMPPS/www/stream/demo/v1/frontend/v1/dev/www/smarty_t/backend/autoprocess.html" */ ?>
<?php /*%%SmartyHeaderCode:181088436754232bc36ce534-75136841%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d0d78da02c117989afe0472a8ee9effdefede4f' => 
    array (
      0 => '/Applications/AMPPS/www/stream/demo/v1/frontend/v1/dev/www/smarty_t/backend/autoprocess.html',
      1 => 1411582747,
      2 => 'file',
    ),
    'd5e86f1dc8253ddc547d9442cb8a60dc477b2163' => 
    array (
      0 => '/Applications/AMPPS/www/stream/demo/v1/frontend/v1/dev/www/smarty_t/layout/master_play.html',
      1 => 1411590490,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '181088436754232bc36ce534-75136841',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54232bc3729d94_36659945',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54232bc3729d94_36659945')) {function content_54232bc3729d94_36659945($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> SWYO | Frontend </title>
    
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script>
	<script type="text/javascript" src="http://cdn.jquerytools.org/1.2.7/full/jquery.tools.min.js"></script>
	<script type="text/javascript" src="http://releases.flowplayer.org/js/flowplayer-3.2.13.min.js"></script>
    <script>
        function setSizes() 
        {
            $f().getClip().update();
            vHeight = $f().getClip().height;
            vWidth = $f().getClip().width;
            wWidth = window.innerWidth;
            wHeight = window.innerHeight; 

            OffsetX = (wWidth - vWidth)/2.0; 
            OffsetY = (wHeight - vHeight)/2.0;
        }
    </script>
</head>
<body style="overflow: hidden"; onresize="setSizes()">
     
<div id="result">
	
</div>
 
      
     
<script> $(document).ready(function(){
// -------------------------------------

	auto_process(true);
	function auto_process(loop) {
		$.ajax({
			url: '<?php echo site_url("backend/ajxAutoProcess");?>
',
		  	dataType: 'json',
			success: function(response) { 
				console.log(response); 
				if(loop==true){
					setTimeout(function(){ auto_process(loop) }, 10000);
				}
			}
		});
	}

// -------------------------------------
}); </script>

</body>
</html><?php }} ?>
