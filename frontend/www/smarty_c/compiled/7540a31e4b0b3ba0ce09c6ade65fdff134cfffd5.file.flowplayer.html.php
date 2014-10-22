<?php /* Smarty version Smarty-3.1.19, created on 2014-10-18 07:37:55
         compiled from "/Applications/AMPPS/www/stream/demo/v1/frontend/v1/dev/www/smarty_t/test/flowplayer.html" */ ?>
<?php /*%%SmartyHeaderCode:20320360825441fcb3b485e7-43529128%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7540a31e4b0b3ba0ce09c6ade65fdff134cfffd5' => 
    array (
      0 => '/Applications/AMPPS/www/stream/demo/v1/frontend/v1/dev/www/smarty_t/test/flowplayer.html',
      1 => 1413327035,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20320360825441fcb3b485e7-43529128',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'playerStyle' => 0,
    'serverData' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5441fcb3ba4fe6_57740094',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5441fcb3ba4fe6_57740094')) {function content_5441fcb3ba4fe6_57740094($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Test Flowplayer </title>
    
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script>
	<script type="text/javascript" src="http://cdn.jquerytools.org/1.2.7/full/jquery.tools.min.js"></script>
	<script type="text/javascript" src="<?php echo vendor_url('flowplayer/3.2.18/flowplayer-3.2.13.min.js');?>
"></script>
</head>
<!-- onresize="handleWindowResize()"  -->
<body style="margin:0;"; onresize="handleWindowResize()"> 

<!--++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    CSS
++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++-->
    
    <style>
        #player {  border: 0px solid blue; }
    </style>

<!--++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    HTML
++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++-->
    

    <div id="player" style="<?php echo $_smarty_tpl->tpl_vars['playerStyle']->value['default'];?>
">
        <img src="<?php echo images_url('logo/swyo_big.png');?>
" width="100%" />
    </div>

<!--++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    SCRIPT 
++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++-->   

<script>

    //###########################################################################
    // ON DOM READY
    //###########################################################################

        $(document).ready(function(){
            $( "#player" ).trigger( "click" );

            $( "#player" ).on( "click", function() {
                alert( "player clicked" );
            });
        });

    //###########################################################################
    // ON WINDOW RESIZE
    //###########################################################################

        function handleWindowResize()
        {
            $("#player").width($(window).width());
        }

    //###########################################################################
    // PRINT
    //###########################################################################

        var PRINT = 
        {
            func_name: function(name) {
                console.log( " ----------- "+name+" ----------- " );
            },
            clip_dimentions: function() {
                console.log( 'width = '+ $f("player").getClip().width );
                console.log( 'height = '+ $f("player").getClip().height );
            },
            none: 'none'
        };

    //###########################################################################
    // FLOWPLAYER SETUP
    //###########################################################################

        $f("player",{
            // ---------- FLASH CONFIGURATION -----------------------------
            src: "<?php echo vendor_url('flowplayer/3.2.18/flowplayer-3.2.18.swf');?>
",
            wmode: "opaque",
        },{
           // ---------- PLAYER CONFIGURATION -----------------------------
            onLoad: function() {
                PRINT.func_name('player::onLoad');
            },
            clip: {
                url: '<?php echo $_smarty_tpl->tpl_vars['serverData']->value['videoID'];?>
',
                provider: 'rtmp',
                scaling: 'fit',
                autoPlay: true,
                live: true,
                //------------------------------
                // metaData: false,
                // accelerated: true,
                // bufferLength: 0.0, 
                // bufferTime: 0.0, 
                // ratio: 9/16,
                //------------------------------
                onBegin: function() { 
                    PRINT.func_name('clip::onBegin');
                },
                onMetaData: function(clip) {
                    PRINT.func_name('clip::onMetaData');
                    console.log(clip.metaData);
                },
                onStart: function(clip) { 
                    PRINT.func_name('clip::onStart');

                    if('provider' in clip && clip.provider == 'rtmp') {
                        setTimeout(function(){
                            $("#player").width($(window).width());
                        },10000);
                    }
                },
                onResized: function(clip) { 
                    if('provider' in clip && clip.provider == 'rtmp') {
                        PRINT.func_name('clip::onResized');
                        PRINT.clip_dimentions();
                    }
                }
            },
            plugins: {
                controls: null,
                rtmp: { 
                    all: false,
                    url: "<?php echo vendor_url('flowplayer/rtmp/flowplayer.rtmp-3.2.13.swf');?>
",
                    inBufferSeek: false,
                    netConnectionUrl: 'rtmp://<?php echo $_smarty_tpl->tpl_vars['serverData']->value['videoServerIP'];?>
:<?php echo $_smarty_tpl->tpl_vars['serverData']->value['videoServerPort'];?>
/<?php echo $_smarty_tpl->tpl_vars['serverData']->value['applicationID'];?>
/'
                }
            },
            /*playlist:  [ 
                {
                    url: "<?php echo videos_url('BannerVideo.mp4');?>
",
                    duration: 2
                },
                {
                    url: '<?php echo $_smarty_tpl->tpl_vars['serverData']->value['videoID'];?>
',
                    provider: 'rtmp',
                    live: true,
                    autoPlay: true
                }
            ],*/
        });


    //###########################################################################
    // FLOWPLAYER API
    //###########################################################################

        /*flowplayer(function (api, root) {
 
            api.bind("load", function () {

                // do something when a new video is about to be loaded
                console.log('load');

            }).bind("ready", function () {

                // do something when a video is loaded and ready to play
                console.log('read');

            });
         
        });*/


</script>




</body>
</html><?php }} ?>
