<?php /* Smarty version Smarty-3.1.19, created on 2014-09-23 20:46:18
         compiled from "/Applications/AMPPS/www/stream/demo/v1/frontend/v1/dev/www/smarty_t/play/Strat.html" */ ?>
<?php /*%%SmartyHeaderCode:9254013785421bffa497531-78607307%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb96631c354f70dcd7cca78f738997e81428d77f' => 
    array (
      0 => '/Applications/AMPPS/www/stream/demo/v1/frontend/v1/dev/www/smarty_t/play/Strat.html',
      1 => 1411497909,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9254013785421bffa497531-78607307',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'serverData' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5421bffa4d8288_98504558',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5421bffa4d8288_98504558')) {function content_5421bffa4d8288_98504558($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
	<title>DelayedInteractive</title>
	

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script>
<script type="text/javascript" src="http://cdn.jquerytools.org/1.2.7/full/jquery.tools.min.js"></script>
<script type="text/javascript" src="http://releases.flowplayer.org/js/flowplayer-3.2.13.min.js"></script>
   
</head>

<body style="overflow: hidden"; onresize="setSizes()">
	<div onmousedown="event.preventDefault ? event.preventDefault() : event.returnValue = false" style="position: absolute; z-index:10;width:100%;height:100%;left: 0px; top: 0px;overflow:hidden;" >
		<object type="img/gif">
	      <img src="transparent.gif" width="100%" height="100%" id="lockgif"></img>
		</object>
	</div>
	<div style="position: absolute;width:100%;height:100%;left: 0px; top: 0px;z-index:0;overflow:hidden;" id="player"></div>    
	<div style="position: relative;margin-left: 80%;font-family: Arial Black;font-size: 10px; color: green;overflow:hidden;" id="out2"></div>
		
		
	<!-- this script block will install Flowplayer inside previous A tag -->
	<script type="text/javascript">

		function getParam( sParamName ){
		  sLocation = location.href;
		  aLCQS = sLocation.split("?");
		  if (aLCQS.length > 1){ // there are a querystring
		    aParams = aLCQS[1].split("&");
		    for( f=0; f<aParams.length; f++ ){
		      aParam = aParams[f].split("=");
		      if( aParam[0] == sParamName ){
		        return aParam[1]; // return the value
		      }
		    }
		  }
		}


		var elem;
		var clipURL;

		clipURL=getParam("videoID");
		clipURL = '123';

		$f("player", 
			{
				src: "http://releases.flowplayer.org/swf/flowplayer-3.2.18.swf",
				wmode: "opaque"
			},
			{ 
				clip: {
					url: clipURL,
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
						netConnectionUrl: 'rtmp://<?php echo $_smarty_tpl->tpl_vars['serverData']->value['serverIP'];?>
:1935/live/' } 
				},
			
				canvas: {
			        backgroundGradient: 'none'
			    }		
			}
		);
		
		function sendAjaxKey(status, keyCode) {
			$.ajax({
				type: "GET",
				url: "Strat.php",
				data: { status: status, key: keyCode }
				});
		}

		function sendAjaxMousePos(x, y) {
			$.ajax({
				type: "GET",
				url: "Strat.php",
				data: { posx: x, width: vWidth, posy: y, height: vHeight }
				});
		}

		$( document ).ajaxError(function( event, request, settings ) {
		  $( "#msg" ).append( "<li>Error requesting page " + settings.url + "</li>" );
		});

		var Key = {
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

		var lastMove = 0;
		var vHeight = 0;
		var wHeight = 0; 
		var vWidth = 0; 
		var wWidth = 0;
		var OffsetX = 0;
		var OffsetY = 0;
		var oldX = -1;
		var oldY = -1;

		function moveCallback(e) {
						
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

		function clickStartCallback(e) {
			var positionX = (e.clientX || 0) - OffsetX,
			    positionY = (e.clientY || 0) - OffsetY;

							
			if( ((positionX >=0) && (positionX <=vWidth)) && ( (positionY >= 0) && (positionY <= vHeight)))
			{
				switch (e.which) {
					case 1: // Left mouse button
						$.ajax({
						type: "GET",
						url: "Strat.php",
						data: { click: "cls", posx: positionX, width: vWidth, posy: positionY, height: vHeight }
						});	
						break;
					case 2: // Middle mouse button
						break;
					case 3: // Right mouse button
						$.ajax({
						type: "GET",
						url: "Strat.php",
						data: { click: "crs", posx: positionX, width: vWidth, posy: positionY, height: vHeight }
						});	
						break;
					default:
						alert('You have a strange Mouse!');
				}

			}	
		}

		function clickEndCallback(e) {
			var positionX = (e.clientX || 0) - OffsetX,
			    positionY = (e.clientY || 0) - OffsetY;

							
			if( ((positionX >=0) && (positionX <=vWidth)) && ( (positionY >= 0) && (positionY <= vHeight)))
			{
				switch (e.which) {
					case 1: // Left mouse button
						$.ajax({
						type: "GET",
						url: "Strat.php",
						data: { click: "cle", posx: positionX, width: vWidth, posy: positionY, height: vHeight }
						});	
						break;
					case 2: // Middle mouse button
						break;
					case 3: // Right mouse button
						$.ajax({
						type: "GET",
						url: "Strat.php",
						data: { click: "cre", posx: positionX, width: vWidth, posy: positionY, height: vHeight }
						});	
						break;
					default:
						alert('You have a strange Mouse!');
				}

			}	
		}

		$(document).bind('contextmenu', function (e) {
		    e.preventDefault();                 // To prevent the default context menu.
		});

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
				url: "Strat.php",
				data: { scroll: 'csa', amount: normalized }
				});
			
			
		}

		var event = 'onwheel' in document ? 'wheel' : 'onmousewheel' in document ? 'mousewheel' : 'DOMMouseScroll';
		window.addEventListener(event, mouseScroll);

		document.addEventListener('keyup', function(event) { Key.sendKeyReleased(event); }, false);
		document.addEventListener('keydown', function(event) { Key.sendKeyPressed(event); }, false);

		function setSizes() {

			  $f().getClip().update();
			  vHeight = $f().getClip().height;
			  vWidth = $f().getClip().width;
			  wWidth = window.innerWidth;
			  wHeight = window.innerHeight; 
			  
			  OffsetX = (wWidth - vWidth)/2.0; 
			  OffsetY = (wHeight - vHeight)/2.0;
		}

		document.addEventListener("mousedown", clickStartCallback, false);
		document.addEventListener("mouseup", clickEndCallback, false);

		$(document).ready(function() {
			$('#lockgif').mousemove(function(e){
			
			moveCallback(e);
			}
			
		)})

	</script>
</body>
</html>
<?php }} ?>
