<?php /* Smarty version Smarty-3.1.19, created on 2014-10-22 14:31:34
         compiled from "/Applications/AMPPS/www/stream/demo/v1/frontend/v1/dev/www/smarty_t/backend/backend.html" */ ?>
<?php /*%%SmartyHeaderCode:21308250495447a3a69f0bd7-25292830%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bdca6ff9da0d100213db8bbdf36c3f34b48c3c80' => 
    array (
      0 => '/Applications/AMPPS/www/stream/demo/v1/frontend/v1/dev/www/smarty_t/backend/backend.html',
      1 => 1413580435,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21308250495447a3a69f0bd7-25292830',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'links' => 0,
    'href' => 0,
    'name' => 0,
    'serverSlotInfo' => 0,
    'row' => 0,
    'systemParam' => 0,
    'key' => 0,
    'val' => 0,
    'counterParam' => 0,
    'sessionData' => 0,
    'col' => 0,
    'playerData' => 0,
    'sessionStatusLogData' => 0,
    'sessionLogData' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5447a3a6ad5564_67096361',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5447a3a6ad5564_67096361')) {function content_5447a3a6ad5564_67096361($_smarty_tpl) {?>
	<style>
		a.func { text-decoration: none; padding:5px; display: inline-block; background-color: #eee; margin: 10px; }
	</style>
	<?php  $_smarty_tpl->tpl_vars['href'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['href']->_loop = false;
 $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['links']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['href']->key => $_smarty_tpl->tpl_vars['href']->value) {
$_smarty_tpl->tpl_vars['href']->_loop = true;
 $_smarty_tpl->tpl_vars['name']->value = $_smarty_tpl->tpl_vars['href']->key;
?>
		<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" class="func"> <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 </a>
	<?php } ?>

	<div style="clear:both;"> <hr> </div>

	<div style=" margin:20px; padding:20px; background:#eee; float:left; ">
		<h2>Server Slot Info</h2>
		<table border="1" cellpadding="5">
		<tr>
			<td>SERVER</td>
			<td>PLAYER</td>
		</tr>
		<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['serverSlotInfo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
		<tr>
			<td> <?php echo $_smarty_tpl->tpl_vars['row']->value['serverName'];?>
 (<?php echo $_smarty_tpl->tpl_vars['row']->value['serverID'];?>
.<?php echo $_smarty_tpl->tpl_vars['row']->value['slotNo'];?>
) </td>
			<td> <?php if ($_smarty_tpl->tpl_vars['row']->value['playerName']) {?> <?php echo $_smarty_tpl->tpl_vars['row']->value['playerName'];?>
 (<?php echo $_smarty_tpl->tpl_vars['row']->value['playerID'];?>
) <?php }?></td>
		</tr>
		<?php } ?>
		</table>
	</div>

	<!-- System Param &&   Counter Param -->

	<div style=" margin:20px; padding:10px; background:#eee; float:left; ">
		System Param <hr>
		<table border="0" cellpadding="5">
		<tr>
		<?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['systemParam']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['val']->key;
?>
			<td> <?php echo $_smarty_tpl->tpl_vars['key']->value;?>
: <b><?php echo $_smarty_tpl->tpl_vars['val']->value;?>
</b> &nbsp;&nbsp;&nbsp;&nbsp; </td>
		<?php } ?>
		</tr>
		</table>

		<br><br> Counter Param <hr>
		<table border="0" cellpadding="5">
		<tr>
		<?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['counterParam']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['val']->key;
?>
			<td> <?php echo $_smarty_tpl->tpl_vars['key']->value;?>
: <b><?php echo $_smarty_tpl->tpl_vars['val']->value;?>
</b> &nbsp;&nbsp;&nbsp;&nbsp; </td>
		<?php } ?>
		</tr>
		</table>
	</div>

	<div style="clear:both;"> <hr> </div>

	
	<!-- Session -->

	<div style=" margin:20px; padding:20px; background:#eee; float:left; ">
		<h2>Session</h2>
		<table border="1" cellpadding="5">
		<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sessionData']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["sessData"]['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["sessData"]['index']++;
?>
		<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['sessData']['index']==0) {?> 
		<tr>
			<?php  $_smarty_tpl->tpl_vars['col'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['col']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['row']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['col']->key => $_smarty_tpl->tpl_vars['col']->value) {
$_smarty_tpl->tpl_vars['col']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['col']->key;
?>
			<th><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</th>
			<?php } ?>
		</tr>
		<?php }?>
		<tr>
			<?php  $_smarty_tpl->tpl_vars['col'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['col']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['row']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['col']->key => $_smarty_tpl->tpl_vars['col']->value) {
$_smarty_tpl->tpl_vars['col']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['col']->key;
?>
			<td> <?php echo $_smarty_tpl->tpl_vars['col']->value;?>
  <?php if ($_smarty_tpl->tpl_vars['key']->value=='playerID') {?>  ::  <?php echo $_smarty_tpl->tpl_vars['playerData']->value[$_smarty_tpl->tpl_vars['col']->value]['playerName'];?>
 <?php }?></td>
			<?php } ?>
		</tr>
		<?php } ?>
		</table>
	</div>

	<div style="clear:both;"> <hr> </div>

	<div style=" margin:20px; padding:20px; background:#eee; float:left; ">
		<h2>Session Status LOG</h2>
		<table border="1" cellpadding="5">
		<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sessionStatusLogData']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["sssLogData"]['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["sssLogData"]['index']++;
?>
		<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['sssLogData']['index']==0) {?> 
		<tr>
			<?php  $_smarty_tpl->tpl_vars['col'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['col']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['row']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['col']->key => $_smarty_tpl->tpl_vars['col']->value) {
$_smarty_tpl->tpl_vars['col']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['col']->key;
?>
			<th><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</th>
			<?php } ?>
		</tr>
		<?php }?>
		<tr>
			<?php  $_smarty_tpl->tpl_vars['col'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['col']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['row']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['col']->key => $_smarty_tpl->tpl_vars['col']->value) {
$_smarty_tpl->tpl_vars['col']->_loop = true;
?>
			<td><?php echo $_smarty_tpl->tpl_vars['col']->value;?>
</td>
			<?php } ?>
		</tr>
		<?php } ?>
		</table>
	</div>
	<div style=" margin:20px; padding:20px; background:#eee; float:left; ">
		<h2>Session LOG</h2>
		<table border="1" cellpadding="5">
		<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sessionLogData']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["ssLogData"]['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["ssLogData"]['index']++;
?>
		<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['ssLogData']['index']==0) {?> 
		<tr>
			<?php  $_smarty_tpl->tpl_vars['col'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['col']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['row']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['col']->key => $_smarty_tpl->tpl_vars['col']->value) {
$_smarty_tpl->tpl_vars['col']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['col']->key;
?>
			<th><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</th>
			<?php } ?>
		</tr>
		<?php }?>
		<tr>
			<?php  $_smarty_tpl->tpl_vars['col'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['col']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['row']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['col']->key => $_smarty_tpl->tpl_vars['col']->value) {
$_smarty_tpl->tpl_vars['col']->_loop = true;
?>
			<td><?php echo $_smarty_tpl->tpl_vars['col']->value;?>
</td>
			<?php } ?>
		</tr>
		<?php } ?>
		</table>
	</div>
<?php }} ?>
