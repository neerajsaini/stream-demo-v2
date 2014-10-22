<?php /* Smarty version Smarty-3.1.19, created on 2014-10-22 14:26:35
         compiled from "/Applications/AMPPS/www/stream/demo/v1/frontend/v1/dev/www/smarty_t/playws/playws.html" */ ?>
<?php /*%%SmartyHeaderCode:3608950825447a27b77b011-38008028%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f1b1fdcf53d404804f341391e60ad4db4a36eeef' => 
    array (
      0 => '/Applications/AMPPS/www/stream/demo/v1/frontend/v1/dev/www/smarty_t/playws/playws.html',
      1 => 1413980786,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3608950825447a27b77b011-38008028',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5447a27b7982b4_24791778',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5447a27b7982b4_24791778')) {function content_5447a27b7982b4_24791778($_smarty_tpl) {?>    
    <link href="<?php echo assets_url('v2.css');?>
" rel="stylesheet">

    <!-- PAGE OVERLAY BEFORE PLAY
    ********************************************* -->

    <div id="pgOverlayBeforePlay" style="position:absolute; z-index:999;">
        <div class="heading"> 
            <div class="title">
                <span class="red"> Redirecting to </span> 
                <span class="blue"> game </span>
            </div>
            <div>
                if your luck betrays <span class="blue">refresh</span> the page
             </div>
         </div>
         
         <div class="imgLoading">
            <img src="<?php echo images_url('wait/load.gif');?>
" alt="">
        </div>
        <br>
        <div class="">
            <span class="">You can</span>
            <span class="red">test play</span>
            <span>for</span>
            <span class="blue">10 min!</span>
        </div>
    </div>

    <!-- LOGOUT
    ********************************* -->

    <a id="btnLogout"  href="<?php echo site_url('logout');?>
" style="position:absolute; z-index:100;">
        <img src="<?php echo images_url('icon/logout.png');?>
" width="100%">
    </a>

    <!-- GAME PANEL
    ********************************* -->
    <div id="gamePanel" style="position:absolute; z-index:100;">
        <div class="gpHandle">CONTROLS</div>
        <div style="clear:both;"></div>
        <div class="gpContent">
            <div class="aboutGame">
                <img src="<?php echo images_url('games/shadow_of_mordor_1.png');?>
" height="200px">
                
            </div>
            <ul class="gpControls">
                <li>  
                    <div class="title"> General keys </div>
                    <div class="desc"> 
                        <span class="ctrl"> A,W,S,D </span>  -  movement <br>
                        <span class="ctrl">E</span> - Drain orc for arrows <br>
                        <span class="ctrl">Space</span> - sprint/jump/dodge <br>
                        <span class="ctrl">Shift</span> - stealth <br>
                        <span class="ctrl">left mouse</span> - hit <br>
                        <span class="ctrl">right mouse</span> - parry 
                    </div>
                </li>
                <li>  
                    <div class="title"> Bow </div>
                    <div class="desc">  
                        <span class="ctrl">left mouse (hold)</span> - bow mode <br>
                        <span class="ctrl">right mouse (hold)</span> - charge arrow
                    </div>
                </li>
                <li>  
                    <div class="title"> Special moves </div>
                    <div class="desc">  
                        <span class="ctrl">Shift + left click</span> - stealth kill <br>
                        <span class="ctrl">Bow (aim on enemy) + X</span>  - blink kill <br>
                        ...... <br>
                        Experiment for additional special moves
                    </div>
                </li>
                <li> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </li>
            </ul>
            <div style="clear:both;"></div>
        </div>
    </div>


    <!-- SCRIPT
    *********************************************************** -->

    <script>
        $(document).ready(function(){
            $('#gamePanel .gpHandle').click(function(){
                $('#gamePanel .gpContent').slideToggle();
            });

            setTimeout(function(){
                $("#pgOverlayBeforePlay").hide();
                    setTimeout(function(){
                        $('#gamePanel .gpContent').slideToggle();
                    },2000);
            },10000);


        });
    </script><?php }} ?>
