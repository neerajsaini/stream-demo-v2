<?php /* Smarty version Smarty-3.1.19, created on 2014-10-18 07:55:25
         compiled from "/Applications/AMPPS/www/stream/demo/v1/frontend/v1/dev/www/smarty_t/play/play.html" */ ?>
<?php /*%%SmartyHeaderCode:1648242696544200cd727af2-20179413%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '381e17a1a7151be395c33f2185c75c4b803f19fe' => 
    array (
      0 => '/Applications/AMPPS/www/stream/demo/v1/frontend/v1/dev/www/smarty_t/play/play.html',
      1 => 1412439223,
      2 => 'file',
    ),
    'd5e86f1dc8253ddc547d9442cb8a60dc477b2163' => 
    array (
      0 => '/Applications/AMPPS/www/stream/demo/v1/frontend/v1/dev/www/smarty_t/layout/master_play.html',
      1 => 1413157628,
      2 => 'file',
    ),
    '1d2ef6dcc4fdfb652f4ae3ba84b683cc1ed63d8b' => 
    array (
      0 => '/Applications/AMPPS/www/stream/demo/v1/frontend/v1/dev/www/smarty_t/play/lock_pointer.html',
      1 => 1413158070,
      2 => 'file',
    ),
    'a3298392e1ef01d7294ada695948528b89ad002d' => 
    array (
      0 => '/Applications/AMPPS/www/stream/demo/v1/frontend/v1/dev/www/smarty_t/play/normal_pointer.html',
      1 => 1412422753,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1648242696544200cd727af2-20179413',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_544200cd807c43_59432464',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_544200cd807c43_59432464')) {function content_544200cd807c43_59432464($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> SWYO | Frontend </title>
    
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script>
	<script type="text/javascript" src="http://cdn.jquerytools.org/1.2.7/full/jquery.tools.min.js"></script>
	<script type="text/javascript" src="http://releases.flowplayer.org/js/flowplayer-3.2.13.min.js"></script>
</head>
<!-- onresize="handleWindowResize()"  -->
<body style="overflow: hidden"; onclick="lockPointer();"  onresize="handleWindowResize()"> 
      
     
	<?php if ($_smarty_tpl->tpl_vars['serverData']->value['htmlFile']=="lock_pointer") {?>
		<?php /*  Call merged included template "play/lock_pointer.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('play/lock_pointer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '1648242696544200cd727af2-20179413');
content_544200cd788393_58731893($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "play/lock_pointer.html" */?> 
	<?php } else { ?>
		<?php /*  Call merged included template "play/normal_pointer.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('play/normal_pointer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '1648242696544200cd727af2-20179413');
content_544200cd7b2431_18697695($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "play/normal_pointer.html" */?> 
	<?php }?>
 
     
<script> $(document).ready(function(){
// -------------------------------------
	
	var playerName = "<?php echo $_smarty_tpl->tpl_vars['playerName']->value;?>
";

	$.ajax({
			type: "GET",
			url: "<?php echo $_smarty_tpl->tpl_vars['urlSendKey']->value;?>
",
			dataType: 'jsonp',
			data: { np : playerName }
	});

	check_status(true);
	function check_status(loop) {
		$.ajax({
			type: "GET",
			url: '<?php echo site_url("play/ajx_checkStatus");?>
',
		  	dataType: 'json',
			success: function(response){ 
				console.log(response); 
				if(response.status=='PLAY_TIME_OUT') {
					window.location.href = '<?php echo site_url("logout");?>
' ;
				}
				if(loop==true){
					setTimeout(function(){ check_status(loop) }, 5000);
				}
			}
		});
	}

// -------------------------------------
}); </script>

</body>
</html><?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2014-10-18 07:55:25
         compiled from "/Applications/AMPPS/www/stream/demo/v1/frontend/v1/dev/www/smarty_t/play/lock_pointer.html" */ ?>
<?php if ($_valid && !is_callable('content_544200cd788393_58731893')) {function content_544200cd788393_58731893($_smarty_tpl) {?><style>
	#imgObjWrap { position: absolute; z-index:999; width:100%; height:100%; left: 0px; top: 0px; overflow:hidden; }
	#out2 { position: absolute; margin-left: 80%; font-family: Arial; font-size: 10px; color: green; overflow:hidden; }
	#player { position: absolute; width:100%; height:100%; left: 0px; top: 0px; z-index:0; overflow:hidden; }
</style>


<div id="imgObjWrap" style="position: absolute; z-index:999; width:100%; height:100%; left: 0px; top: 0px; overflow:hidden;"
>
	<object type="img/gif" onclick="lockPointer();">
		<img src="<?php echo images_url('transparent.gif');?>
" width="100%" height="100%" id="lockgif"></img>
	</object>
</div>

<div id="out2" style="position: absolute; margin-left: 80%; font-family: Arial; font-size: 10px; color: green; overflow:hidden;"
></div>
<div id="player" onclick="lockPointer();" style="position:absolute; width:900px; height:auto;  left: 0px; right:0; bottom:0; top: 0px; z-index:0; overflow:hidden;"
></div>    


<!-- JANIS SCRIPT -->
<script type="text/javascript">

	/* THE VIDEO PLAYER
	****************************************************************/

	function handleWindowResize()
	{
		console.log(' --------------- handleWindowResize ---------------');
		$("#player").width($(window).width());   //$("#player").height($(window).height());
		// $f().getClip().update(); 

		
		// console.log( $f("player").getClip().height );
	}
	$(document).ready(function()
	{
		// handleWindowResize();
	});

	$f("player", 
		{
			// src: "http://releases.flowplayer.org/swf/flowplayer-3.2.18.swf",
			src: "<?php echo vendor_url('flowplayer/flowplayer-3.2.18.swf');?>
",
			wmode: "opaque",
			
		},
		{ 
			// onLoad: function(){ 
			// 	console.log(' --------------- onLoad :: PLAYER ---------------');
			// 	handleWindowResize(); 
			// } , 
			clip: {
				url: '<?php echo $_smarty_tpl->tpl_vars['serverData']->value['videoID'];?>
',
				provider: 'rtmp', 
				scaling: 'fit', 
				accelerated: true,
				live: true, 
				bufferLength: 0.0, 
				bufferTime: 0.0, 
				autoPlay: true,
				onStart: function() {
					console.log(' --------------- onStart :: CLIP ---------------');
					//console.log( 'height = '+ $f("player").getClip().height );
					$f("player").getClip().update();
				},
				onBegin: function() {
					console.log(' --------------- onBegin :: CLIP ---------------');
				},
				onUpdate:  function() {
					console.log(' --------------- onUpdate :: CLIP ---------------');
			    	handleWindowResize();
				},
				onMetaData: function() {
					console.log(' --------------- onMetaData :: CLIP ---------------');
				},
				onResized: function() {
					console.log(' --------------- onResized :: CLIP ---------------');
					//handleWindowResize();

					//console.log( 'height = '+ $f("player").getClip().height );
				}
			},
			plugins: {
				controls:null,
				rtmp: { 
					all:false,
					url: "flowplayer.rtmp-3.2.13.swf",
					inBufferSeek:false,
					// subscribe: true;
					netConnectionUrl: 'rtmp://<?php echo $_smarty_tpl->tpl_vars['serverData']->value['videoServerIP'];?>
:<?php echo $_smarty_tpl->tpl_vars['serverData']->value['videoServerPort'];?>
/<?php echo $_smarty_tpl->tpl_vars['serverData']->value['applicationID'];?>
/' 
				},
				onLoad: function() {
			    	console.log(' --------------- onLoad :: PLUGINS ---------------');
			    	lockPointer();
			    }
			}
		}
	);

	/* AJAX FUNCTIONS
	****************************************************************/

	function sendAjaxMouseMove(dx, dy) 
	{
		$.ajax({
			type: "GET",
			url: "<?php echo $_smarty_tpl->tpl_vars['urlSendKey']->value;?>
",
			dataType: 'jsonp',
			data: { dx: dx, dy: dy }
			});
	}

	function sendAjaxKey(status, keyCode) 
	{
		$.ajax({
			type: "GET",
			url: "<?php echo $_smarty_tpl->tpl_vars['urlSendKey']->value;?>
",
			dataType: 'jsonp',
			data: { status: status, key: keyCode }
			});
	}

	var Key = 
	{
	  	pressed: {},
	  
	  	isDown: function(keyCode) {

	    	return this.pressed[keyCode];
	  	},

	   	sendKeyPressed: function(event) {
	   		var keyCode = event.keyCode;
			if(!(Key.isDown(keyCode)))
			{	//First time pressed, send to server
				this.pressed[keyCode] = true;
				sendAjaxKey("kbd", keyCode);
				//printKeys();
			}
	  	},

	  	sendKeyReleased: function(event) {
			var keyCode = event.keyCode;
			if(Key.isDown(keyCode))
			{	//Key released, send to server
				delete this.pressed[keyCode];
				//printKeys();
				sendAjaxKey("kbu", keyCode);
			}
	  	}	  
	};

	/* MOUSE 
	****************************************************************/
	
	var lastMove = 0;
	var mouseX = 0;
	var mouseY = 0;

	function moveCallback(e) 
	{
		var movementX = 	e.movementX       ||
							e.mozMovementX    ||
							e.webkitMovementX ||
							0,
			movementY = 	e.movementY       ||
							e.mozMovementY    ||
							e.webkitMovementY ||
							0;

		mouseX += movementX;
		mouseY += movementY;

		if(Date.now() - lastMove > 10) {

		sendAjaxMouseMove(mouseX, mouseY);
		mouseX = 0;
		mouseY = 0;
		var html = '';
		html += '<div>' + 'mousemove() position - x : ' + movementX + ', y : ' + movementY + '</div>';                
		$('#out2').html(html);  
		lastMove = Date.now();
		}
	}

	function clickStartCallback(e) 
	{
		switch (e.which) {
			case 1: // Left mouse button
				$.ajax({
				type: "GET",
				url: "<?php echo $_smarty_tpl->tpl_vars['urlSendKey']->value;?>
",
				dataType: 'jsonp',
				data: { clicks: "ls" }
				});	
				break;
			case 2: // Middle mouse button
				break;
			case 3: // Right mouse button
				$.ajax({
				type: "GET",
				url: "<?php echo $_smarty_tpl->tpl_vars['urlSendKey']->value;?>
",
				dataType: 'jsonp',
				data: { clicks: "rs" }
				});	
				break;
			default:
				alert('You have a strange Mouse!');
		}
	}

	function clickEndCallback(e) 
	{
		switch (e.which) {
			case 1: // Left mouse button
				$.ajax({
				type: "GET",
				url: "<?php echo $_smarty_tpl->tpl_vars['urlSendKey']->value;?>
",
				dataType: 'jsonp',
				data: { clicks: "le" }
				});	
				break;
			case 2: // Middle mouse button
				break;
			case 3: // Right mouse button
				$.ajax({
				type: "GET",
				url: "<?php echo $_smarty_tpl->tpl_vars['urlSendKey']->value;?>
",
				dataType: 'jsonp',
				data: { clicks: "re" }
				});	
				break;
			default:
				alert('You have a strange Mouse!');
		}
	}

	var wheel = document.getElementById('wheel');

	function mouseScroll(event) 
	{
	    var normalized;
	    if (event.wheelDelta) {
	        normalized = (event.wheelDelta % 120 - 0) == -0 ? event.wheelDelta / 120 : event.wheelDelta / 12;
	    } else {
	        var rawAmmount = event.deltaY ? event.deltaY : event.detail;
	        normalized = -(rawAmmount % 3 ? rawAmmount * 10 : rawAmmount / 3);
	    }
		
		$.ajax({
			type: "GET",
			url: "<?php echo $_smarty_tpl->tpl_vars['urlSendKey']->value;?>
",
			dataType: 'jsonp',
			data: { scroll: 'csa', amount: normalized }
			});
	}

	var event = 'onwheel' in document ? 'wheel' : 'onmousewheel' in document ? 'mousewheel' : 'DOMMouseScroll';
	window.addEventListener(event, mouseScroll);
	document.addEventListener('keyup', function(event) { Key.sendKeyReleased(event); }, false);
	document.addEventListener('keydown', function(event) { Key.sendKeyPressed(event); }, false);
	document.addEventListener("mousedown", clickStartCallback, false);
	document.addEventListener("mouseup", clickEndCallback, false);

	/* SET SIZE
	****************************************************************/

	/*function setSizes() 
    {
        $f().getClip().update();
        vHeight = $f().getClip().height;
        vWidth = $f().getClip().width;
        wWidth = window.innerWidth;
        wHeight = window.innerHeight; 

        OffsetX = (wWidth - vWidth)/2.0; 
        OffsetY = (wHeight - vHeight)/2.0;
    }*/

    /* POINTER LOCK
	****************************************************************/

    var elem;

    function lockPointer()
    {
		elem = document.getElementById("lockgif");
		elem.requestPointerLock = elem.requestPointerLock ||
					     elem.mozRequestPointerLock ||
					     elem.webkitRequestPointerLock;
		// Ask the browser to lock the pointer
		elem.requestPointerLock();
	}

	function pointerLockChange() 
	{
		if (document.pointerLockElement === elem ||
			document.mozPointerLockElement === elem ||
			document.webkitPointerLockElement === elem) {
			// Pointer was just locked
			// Enable the mousemove listener
				document.addEventListener("mousemove", moveCallback, false);
				document.addEventListener("mousedown", clickStartCallback, false);
				document.addEventListener("mouseup", clickEndCallback, false);
		} 
		else {
			// Pointer was just unlocked
			// Disable the mousemove listener
				document.removeEventListener("mousemove", moveCallback, false);  
				document.removeEventListener("mousedown", clickStartCallback, false);
				document.removeEventListener("mouseup", clickEndCallback, false);
				var html = '';
				$('#out2').html(html);
				unlockHook(this.elem);
		}
	}

	function unlockHook(elem)
	{
		// Ask the browser to release the pointer
		document.exitPointerLock = document.exitPointerLock ||
					   document.mozExitPointerLock ||
					   document.webkitExitPointerLock;
		document.exitPointerLock();
		document.removeEventListener("mousemove");
	}

	function pointerLockError() {
  		console.log("Error while locking pointer.");
	}

	document.addEventListener('pointerlockchange', pointerLockChange, false);
	document.addEventListener('mozpointerlockchange', pointerLockChange, false);
	document.addEventListener('webkitpointerlockchange', pointerLockChange, false);

	document.addEventListener('pointerlockerror', pointerLockError, false);
	document.addEventListener('mozpointerlockerror', pointerLockError, false);
	document.addEventListener('webkitpointerlockerror', pointerLockError, false);


	/* DOCUMENT
	****************************************************************/

	$( document ).ajaxError(function( event, request, settings ) {
		  $( "#msg" ).append( "<li>Error requesting page " + settings.url + "</li>" );
	});

	$(document).on("keydown", function (e) {
		e.preventDefault();
	});

	$(document).bind('contextmenu', function (e) {
		e.preventDefault(); // To prevent the default context menu.
	});

	document.body.focus();

</script><?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2014-10-18 07:55:25
         compiled from "/Applications/AMPPS/www/stream/demo/v1/frontend/v1/dev/www/smarty_t/play/normal_pointer.html" */ ?>
<?php if ($_valid && !is_callable('content_544200cd7b2431_18697695')) {function content_544200cd7b2431_18697695($_smarty_tpl) {?><style>
	#imgObjWrap { position: absolute; z-index:999; width:100%; height:100%; left: 0px; top: 0px; overflow:hidden; }
	#player { position: absolute; width:100%; height:100%; left: 0px; top: 0px; z-index:0; overflow:hidden; }
	#out2 { position: relative; margin-left: 80%; font-family: Arial; font-size: 10px; color: green; overflow:hidden; }
</style>


<div id="imgObjWrap">
	<object type="img/gif" >
		<img src="<?php echo images_url('transparent.gif');?>
" width="100%" height="100%" id="lockgif"></img>
	</object>
</div>

<div id="player"></div>    
<div id="out2"></div>


<!-- JANIS SCRIPT -->
<script type="text/javascript">




	/* BLOCK UNBLOCK
	****************************************************************/
	

	/* THE VIDEO PLAYER
	****************************************************************/

	$f("player", 
		{
			src: "http://releases.flowplayer.org/swf/flowplayer-3.2.18.swf",
			wmode: "opaque"
		},
		{ 
			clip: {
				url: '<?php echo $_smarty_tpl->tpl_vars['serverData']->value['videoID'];?>
',
				provider: 'rtmp', 
				accelerated: true,
				live: true, 
				scaling: 'fit', 
				bufferLength: 0.0, 
				bufferTime: 0.0, 
				autoPlay: true,
				onStart: function() {
						setSizes();
					}
			},
			plugins: {		
				controls:null,
				rtmp: { 
					all:false,
					url: "flowplayer.rtmp-3.2.13.swf",
					inBufferSeek:false,
					netConnectionUrl: 'rtmp://<?php echo $_smarty_tpl->tpl_vars['serverData']->value['videoServerIP'];?>
:<?php echo $_smarty_tpl->tpl_vars['serverData']->value['videoServerPort'];?>
/<?php echo $_smarty_tpl->tpl_vars['serverData']->value['applicationID'];?>
/' 
				} 
			}	
		}
	);

	/* AJAX FUNCTIONS
	****************************************************************/

	var lastMove = 0;
	var vHeight = 0;
	var wHeight = 0; 
	var vWidth = 0; 
	var wWidth = 0;
	var OffsetX = 0;
	var OffsetY = 0;
	var oldX = -1;
	var oldY = -1;

	function sendAjaxMousePos(x, y) {
		$.ajax({
			type: "GET",
			url: "<?php echo $_smarty_tpl->tpl_vars['urlSendKey']->value;?>
",
			dataType: 'jsonp',
			data: { posx: x, width: vWidth, posy: y, height: vHeight }
			});
	}

	function sendAjaxKey(status, keyCode) {
		$.ajax({
			type: "GET",
			url: "<?php echo $_smarty_tpl->tpl_vars['urlSendKey']->value;?>
",
			dataType: 'jsonp',
			data: { status: status, key: keyCode }
			});
	}

	var Key = 
	{
	  	pressed: {},
	  
	  	isDown: function(keyCode) {
	    	return this.pressed[keyCode];
	  	},

	   	sendKeyPressed: function(event) {
	   		var keyCode = event.keyCode;
			if(!(Key.isDown(keyCode)))
			{	//First time pressed, send to server
				this.pressed[keyCode] = true;
				sendAjaxKey("kbd", keyCode);
				//printKeys();
			}
	  	},

	  	sendKeyReleased: function(event) {
			var keyCode = event.keyCode;
			if(Key.isDown(keyCode))
			{	//Key released, send to server
				delete this.pressed[keyCode];
				//printKeys();
				sendAjaxKey("kbu", keyCode);
			}
	  	}	  
	};

	function clickStartCallback(e) 
	{
		var positionX = (e.clientX || 0) - OffsetX,
		    positionY = (e.clientY || 0) - OffsetY;

						
		if( ((positionX >=0) && (positionX <=vWidth)) && ( (positionY >= 0) && (positionY <= vHeight)))
		{
			switch (e.which) {
				case 1: // Left mouse button
					$.ajax({
					type: "GET",
					url: "<?php echo $_smarty_tpl->tpl_vars['urlSendKey']->value;?>
",
					dataType: 'jsonp',
					data: { click: "cls", posx: positionX, width: vWidth, posy: positionY, height: vHeight }
					});	
					break;
				case 2: // Middle mouse button
					break;
				case 3: // Right mouse button
					$.ajax({
					type: "GET",
					url: "<?php echo $_smarty_tpl->tpl_vars['urlSendKey']->value;?>
",
					dataType: 'jsonp',
					data: { click: "crs", posx: positionX, width: vWidth, posy: positionY, height: vHeight }
					});	
					break;
				default:
					alert('You have a strange Mouse!');
			}

		}	
	}

	function clickEndCallback(e) 
	{
		var positionX = (e.clientX || 0) - OffsetX,
		    positionY = (e.clientY || 0) - OffsetY;

		if( ((positionX >=0) && (positionX <=vWidth)) && ( (positionY >= 0) && (positionY <= vHeight)))
		{
			switch (e.which) {
				case 1: // Left mouse button
					$.ajax({
					type: "GET",
					url: "<?php echo $_smarty_tpl->tpl_vars['urlSendKey']->value;?>
",
					dataType: 'jsonp',
					data: { click: "cle", posx: positionX, width: vWidth, posy: positionY, height: vHeight }
					});	
					break;
				case 2: // Middle mouse button
					break;
				case 3: // Right mouse button
					$.ajax({
					type: "GET",
					url: "<?php echo $_smarty_tpl->tpl_vars['urlSendKey']->value;?>
",
					dataType: 'jsonp',
					data: { click: "cre", posx: positionX, width: vWidth, posy: positionY, height: vHeight }
					});	
					break;
				default:
					alert('You have a strange Mouse!');
			}
		}	
	}

	var wheel = document.getElementById('wheel');

	function mouseScroll(event) {
	    var normalized;
	    if (event.wheelDelta) {
	        normalized = (event.wheelDelta % 120 - 0) == -0 ? event.wheelDelta / 120 : event.wheelDelta / 12;
	    } else {
	        var rawAmmount = event.deltaY ? event.deltaY : event.detail;
	        normalized = -(rawAmmount % 3 ? rawAmmount * 10 : rawAmmount / 3);
	    }
		
		$.ajax({
			type: "GET",
			url: "<?php echo $_smarty_tpl->tpl_vars['urlSendKey']->value;?>
",
			dataType: 'jsonp',
			data: { scroll: 'csa', amount: normalized }
			});
	}

	$( document ).ajaxError(function( event, request, settings ) {
		  $( "#msg" ).append( "<li>Error requesting page " + settings.url + "</li>" );
	});


	/* HELPER FUNCTIONS
	****************************************************************/

	function moveCallback(e) 
	{
		if(Date.now() - lastMove > 100) {
			if(true)
			{ 
				var positionX = (e.clientX || 0) - OffsetX,
				positionY = (e.clientY || 0) - OffsetY;

				if( ((positionX >=0) && (positionX <=vWidth)) && ( (positionY >= 0) && (positionY <= vHeight)))
				{
					sendAjaxMousePos(positionX, positionY);
				}	

				var html = '';
				html += '<div>' + 'mouse position x : ' + positionX + ', y : ' + positionY + '<br>' + 
				' video width: ' + vWidth + ' height: ' + vHeight + '<br>' +
				' window width: ' + wWidth + ' height: ' + wHeight + '<br>' +
				' OffsetX: ' + OffsetX + ' OffsetY: ' + OffsetY + '</div>';                
				$('#out2').html(html);  

				oldX = e.clientX;
				oldY = e.clientY;

				lastMove = Date.now();
			}
		}
	}

	



	/* DOCUMENT
	****************************************************************/

	$(document).on("keydown", function (e) {
		if (e.which === 8 && !$(e.target).is("input, textarea")) {
			e.preventDefault();
		}
	});

	$(document).bind('contextmenu', function (e) {
		e.preventDefault(); // To prevent the default context menu.
	});
	
	var event = 'onwheel' in document ? 'wheel' : 'onmousewheel' in document ? 'mousewheel' : 'DOMMouseScroll';
	window.addEventListener(event, mouseScroll);

	document.addEventListener('keyup', function(event) { Key.sendKeyReleased(event); }, false);
	document.addEventListener('keydown', function(event) { Key.sendKeyPressed(event); }, false);

	document.addEventListener("mousedown", clickStartCallback, false);
	document.addEventListener("mouseup", clickEndCallback, false);
	
	$(document).ready(function() {
		$('#lockgif').mousemove(function(e){
			moveCallback(e);
		});
	});

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

    function lockPointer()
    {
    	
    }

</script><?php }} ?>
