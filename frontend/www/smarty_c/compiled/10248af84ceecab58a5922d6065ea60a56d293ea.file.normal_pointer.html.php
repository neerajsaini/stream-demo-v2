<?php /* Smarty version Smarty-3.1.19, created on 2014-10-22 14:13:05
         compiled from "/Applications/AMPPS/www/stream/demo/v1/frontend/v1/dev/www/smarty_t/playws/normal_pointer.html" */ ?>
<?php /*%%SmartyHeaderCode:137183742154479f51cf4071-31112611%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10248af84ceecab58a5922d6065ea60a56d293ea' => 
    array (
      0 => '/Applications/AMPPS/www/stream/demo/v1/frontend/v1/dev/www/smarty_t/playws/normal_pointer.html',
      1 => 1413978219,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '137183742154479f51cf4071-31112611',
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
  'unifunc' => 'content_54479f51d84890_94920167',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54479f51d84890_94920167')) {function content_54479f51d84890_94920167($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
	<title>Play @ SWYO</title>
	
<link href="<?php echo assets_url('v2.css');?>
" rel="stylesheet">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script>
<script type="text/javascript" src="http://cdn.jquerytools.org/1.2.7/full/jquery.tools.min.js"></script>
<script type="text/javascript" src="http://releases.flowplayer.org/js/flowplayer-3.2.13.min.js"></script>

   
</head>

<body style="overflow: hidden"; onresize="setSizes()">

	<?php echo $_smarty_tpl->getSubTemplate ("playws/playws.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


	<a id="btnLogout"  href="<?php echo site_url('logout');?>
" style="position:absolute; z-index:100;">
		<img src="<?php echo images_url('icon/logout.png');?>
" width="100%">
	</a>

	<div onmousedown="event.preventDefault ? event.preventDefault() : event.returnValue = false" style="position: absolute; z-index:10;width:100%;height:100%;left: 0px; top: 0px;overflow:hidden;" >
		<object type="img/gif">
			<img src="<?php echo images_url('transparent.gif');?>
" width="100%" height="100%" id="lockgif"></img>
		</object>
	</div>
	<div style="position: absolute;width:100%;height:100%;left: 0px; top: 0px;z-index:0;overflow:hidden;" id="player"></div>    
	<div style="position: relative;margin-left: 80%;font-family: Arial Black;font-size: 10px; color: green;overflow:hidden;" id="out2"></div>






<!--  JANIS SCRIPT
############################################################ -->
		
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
var websocket;

 $(function() {
		window.WebSocket = window.WebSocket || window.MozWebSocket;
       	websocket = new WebSocket('ws://95.90.2.144:1235', 'interaction-protocol');
 });

var elem;
var clipURL;

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
			},
		},
		canvas: {
			backgroundGradient: 'none'
		}		
	});


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
		websocket.send("kbd"+keyCode);
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
var vHeight = 0;
var wHeight = 0; 
var vWidth = 0; 
var wWidth = 0;
var OffsetX = 0;
var OffsetY = 0;
var oldX = -1;
var oldY = -1;

function moveCallback(e) {
				
 if(Date.now() - lastMove > 5) {

 if(true)
	{ 
	  var positionX = (e.clientX ||
                    0) - OffsetX,
	      positionY = (e.clientY ||
                    0) - OffsetY;
					
	if( ((positionX >=0) && (positionX <=vWidth)) && ( (positionY >= 0) && (positionY <= vHeight)))
	{
	  websocket.send("px"+positionX+"w"+vWidth+"y"+positionY+"h"+vHeight);
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

var positionX = (e.clientX ||
                    0) - OffsetX,
	      positionY = (e.clientY ||
                    0) - OffsetY;

					
	if( ((positionX >=0) && (positionX <=vWidth)) && ( (positionY >= 0) && (positionY <= vHeight)))
	{
		switch (e.which) {
			case 1: // Left mouse button
				 websocket.send("cls"+positionX+"w"+vWidth+"y"+positionY+"h"+vHeight);
				break;
			case 2: // Middle mouse button
				break;
			case 3: // Right mouse button
				 websocket.send("crs"+positionX+"w"+vWidth+"y"+positionY+"h"+vHeight);
				break;
			default:
				alert('You have a strange Mouse!');
		}

	}	
}

function clickEndCallback(e) {
var positionX = (e.clientX ||
                    0) - OffsetX,
	      positionY = (e.clientY ||
                    0) - OffsetY;

					
	if( ((positionX >=0) && (positionX <=vWidth)) && ( (positionY >= 0) && (positionY <= vHeight)))
	{
		switch (e.which) {
			case 1: // Left mouse button
				 websocket.send("cle"+positionX+"w"+vWidth+"y"+positionY+"h"+vHeight);
				break;
			case 2: // Middle mouse button
				break;
			case 3: // Right mouse button
				 websocket.send("cre"+positionX+"w"+vWidth+"y"+positionY+"h"+vHeight);
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
	
	websocket.send("csa"+normalized);
	
	
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
