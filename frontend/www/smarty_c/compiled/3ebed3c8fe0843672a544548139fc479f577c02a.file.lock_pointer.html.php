<?php /* Smarty version Smarty-3.1.19, created on 2014-10-22 14:26:35
         compiled from "/Applications/AMPPS/www/stream/demo/v1/frontend/v1/dev/www/smarty_t/playws/lock_pointer.html" */ ?>
<?php /*%%SmartyHeaderCode:650785375447a27b6ddd43-15246073%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3ebed3c8fe0843672a544548139fc479f577c02a' => 
    array (
      0 => '/Applications/AMPPS/www/stream/demo/v1/frontend/v1/dev/www/smarty_t/playws/lock_pointer.html',
      1 => 1413980727,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '650785375447a27b6ddd43-15246073',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'serverData' => 0,
    'playerName' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5447a27b7705b5_42836573',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5447a27b7705b5_42836573')) {function content_5447a27b7705b5_42836573($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
	<title> Play @ SWYO </title>
	
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script>
<script type="text/javascript" src="http://cdn.jquerytools.org/1.2.7/full/jquery.tools.min.js"></script>
<script type="text/javascript" src="http://releases.flowplayer.org/js/flowplayer-3.2.13.min.js"></script>
    
</head>

<body style="overflow: hidden" onclick="lockPointer();">

	<?php echo $_smarty_tpl->getSubTemplate ("playws/playws.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



	<div style="position: absolute; z-index:999;width:100%;height:100%;left: 0px; top: 0px;overflow:hidden;" >
		<object type="img/gif" onclick="lockPointer();">
			<img src="<?php echo images_url('transparent.gif');?>
" width="100%" height="100%" id="lockgif"></img>
		</object>
	</div>

	<div style="position: absolute;margin-left: 80%;font-family: Arial Black;font-size: 10px; color: green;overflow:hidden;" id="out2"></div>
	<div style="position: absolute;width:100%;height:100%;left: 0px; top: 0px;z-index:0;overflow:hidden;" id="player" onclick="lockPointer();"></div>





    
<!-- this script block will install Flowplayer inside previous A tag -->
<script type="text/javascript">

var websocket;
var elem;
var clipURL;

 $(function() {
	window.WebSocket = window.WebSocket || window.MozWebSocket;
	websocket = new WebSocket('ws://95.90.2.144:1235', 'interaction-protocol');
});



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



clipURL=getParam("videoID");

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
			autoPlay: true 
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
		},
		onLoad: function() {
			lockPointer();
		}
	});


$( document ).ajaxError(function( event, request, settings ) {
  $( "#msg" ).append( "<li>Error requesting page " + settings.url + "</li>" );
});

//<object type="application/x-shockwave-flash" height="378" width="620" id="live_embed_player_flash" data="http://www.twitch.tv/widgets/live_embed_player.swf?channel=jhonthe7th" bgcolor="#000000"><param name="allowFullScreen" value="true" /><param name="allowScriptAccess" value="always" /><param name="allowNetworking" value="all" /><param name="movie" value="http://www.twitch.tv/widgets/live_embed_player.swf" /><param name="flashvars" value="hostname=www.twitch.tv&channel=jhonthe7th&auto_play=true&start_volume=25" /></object>

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
		websocket.send("kbd"+keyCode);
		//sendAjaxKey("kbd", keyCode);
		//printKeys();
	}
  },

  sendKeyReleased: function(event) {
	var keyCode = event.keyCode;
	if(Key.isDown(keyCode))
	{	//Key released, send to server
		delete this.pressed[keyCode];
		//printKeys();
		websocket.send("kbu"+keyCode);
	}
  }
  
};

var lastMove = 0;


function moveCallback(e) {
	var movementX = e.movementX       ||
                    e.mozMovementX    ||
                    e.webkitMovementX ||
                    0,
		movementY = e.movementY       ||
                    e.mozMovementY    ||
                    e.webkitMovementY ||
                    0;


 if(Date.now() - lastMove > 10) {
      	  
	  websocket.send("mx"+movementX+"y"+movementY);
	  var html = '';
	  html += '<div>' + 'mousemove() position - x : ' + movementX + ', y : ' + movementY + '</div>';                
	  $('#out2').html(html);  
      lastMove = Date.now();
    }
}

function clickStartCallback(e) {

		switch (e.which) {
			case 1: // Left mouse button
				websocket.send("ls");
				break;
			case 2: // Middle mouse button
				break;
			case 3: // Right mouse button
				websocket.send("rs");
				break;
			default:
				alert('You have a strange Mouse!');
		}
	
}

function clickEndCallback(e) {

		switch (e.which) {
			case 1: // Left mouse button
				websocket.send("le");
				break;
			case 2: // Middle mouse button
				break;
			case 3: // Right mouse button
				websocket.send("re");
				break;
			default:
				alert('You have a strange Mouse!');
		}

}


$(document).bind('contextmenu', function (e) {
    e.preventDefault();                 // To prevent the default context menu.
});
document.onkeydown = function (e) {
	if((e.which == 8)||(e.which == 16)){
		return false;
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
	websocket.send("csa"+normalized);
}

var event = 'onwheel' in document ? 'wheel' : 'onmousewheel' in document ? 'mousewheel' : 'DOMMouseScroll';
window.addEventListener(event, mouseScroll);

function lockPointer(){
elem = document.getElementById("lockgif");
elem.requestPointerLock = elem.requestPointerLock ||
			     elem.mozRequestPointerLock ||
			     elem.webkitRequestPointerLock;
// Ask the browser to lock the pointer
elem.requestPointerLock();
}

document.addEventListener('keyup', function(event) { Key.sendKeyReleased(event); }, false);
document.addEventListener('keydown', function(event) { Key.sendKeyPressed(event); }, false);
document.addEventListener("mousedown", clickStartCallback, false);
document.addEventListener("mouseup", clickEndCallback, false);

function pointerLockChange() {
if (document.pointerLockElement === elem ||
  document.mozPointerLockElement === elem ||
  document.webkitPointerLockElement === elem) {
  // Pointer was just locked
  // Enable the mousemove listener
  document.addEventListener("mousemove", moveCallback, false);
  document.addEventListener("mousedown", clickStartCallback, false);
  document.addEventListener("mouseup", clickEndCallback, false);
} else {
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


document.addEventListener('pointerlockchange', pointerLockChange, false);
document.addEventListener('mozpointerlockchange', pointerLockChange, false);
document.addEventListener('webkitpointerlockchange', pointerLockChange, false);

function pointerLockError() {
  console.log("Error while locking pointer.");
}

document.body.focus();

document.addEventListener('pointerlockerror', pointerLockError, false);
document.addEventListener('mozpointerlockerror', pointerLockError, false);
document.addEventListener('webkitpointerlockerror', pointerLockError, false);

</script>

<!--  NEERAJ
############################################################ -->
<script> 

	$(document).ready(function() {
		send_player_name("<?php echo $_smarty_tpl->tpl_vars['playerName']->value;?>
");
		check_status(true , 5000);
	});
	

	function send_player_name(playerName)
    {
    	if(websocket.readyState === 1) {
    		websocket.send("np"+playerName);
    	}
    	else {
    		setTimeout(function(){ send_player_name(playerName) }, 500);
    	}
    } 

    function check_status(run_loop , pulse_rate) 
    {
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
                if(run_loop==true){
                    setTimeout(function(){ check_status(run_loop) }, pulse_rate);
                }
            }
        });
    } 
</script>


   </body>
</html>
<?php }} ?>
