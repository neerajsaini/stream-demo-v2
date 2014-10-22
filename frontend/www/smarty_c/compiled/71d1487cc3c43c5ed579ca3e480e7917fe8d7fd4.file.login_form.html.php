<?php /* Smarty version Smarty-3.1.19, created on 2014-10-11 12:38:09
         compiled from "/Applications/AMPPS/www/stream/demo/v1/frontend/v1/dev/www/smarty_t/login/login_form.html" */ ?>
<?php /*%%SmartyHeaderCode:171227612754390891a24d94-67801647%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '71d1487cc3c43c5ed579ca3e480e7917fe8d7fd4' => 
    array (
      0 => '/Applications/AMPPS/www/stream/demo/v1/frontend/v1/dev/www/smarty_t/login/login_form.html',
      1 => 1412817141,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '171227612754390891a24d94-67801647',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54390891a65367_27133548',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54390891a65367_27133548')) {function content_54390891a65367_27133548($_smarty_tpl) {?>
				
	<form id="formLogin" role="form">
		<!-- VALIDATION ERRORS  -->

		<div class="validation_errors" style="padding:10px; margin-bottom:20px; background: pink; display:none;">
		</div>
		<!-- playerName  -->
		<div class="form-group">
			<label for="" class="control-label"> Player Name </label>
			<!-- <input type="text" name="playerName" class="form-control" value="<?php echo set_value('playerName');?>
" > -->
			<input type="text" name="playerName" class="form-control" value="JohnyDep99" >
		</div>
		<!-- password  -->
		<div class="form-group">
			<label for="" class="control-label"> Password </label>
			<input type="password" name="password" class="form-control" value="admin" >
		</div>
		<!-- button  -->
		<button type="button" id="btnLogin" class="btn btn-warning btn-lg btn-block"> Login </button>
	</form>

	<script>
		$("#btnLogin").click(function(e){
			e.preventDefault();
			$.ajax({
				type: "POST",
				url: "<?php echo site_url('login');?>
",
				data:  $( "#formLogin" ).serialize() ,
				dataType : 'json' ,
				success: function (response) {
					if(response.error == true) {
						$("#formLogin .validation_errors").html(response.errorMsg).show();
					}
					else {
						window.location = "<?php echo site_url('join');?>
";
					}
				}
			});
		});
	</script><?php }} ?>
