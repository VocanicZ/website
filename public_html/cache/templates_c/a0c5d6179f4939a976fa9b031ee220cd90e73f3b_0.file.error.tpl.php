<?php
/* Smarty version 4.3.1, created on 2023-06-21 07:51:37
  from '/home/u302265335/domains/rainbowcreation.net/public_html/core/includes/error.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_649249992b9ee8_23961961',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a0c5d6179f4939a976fa9b031ee220cd90e73f3b' => 
    array (
      0 => '/home/u302265335/domains/rainbowcreation.net/public_html/core/includes/error.tpl',
      1 => 1685579651,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_649249992b9ee8_23961961 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/u302265335/domains/rainbowcreation.net/public_html/vendor/smarty/smarty/libs/plugins/modifier.count.php','function'=>'smarty_modifier_count',),));
?>
<!DOCTYPE html>
<html lang="<?php echo $_smarty_tpl->tpl_vars['LANG']->value;?>
" <?php echo $_smarty_tpl->tpl_vars['RTL']->value;?>
>

<head>
    <meta charset="<?php echo $_smarty_tpl->tpl_vars['LANG_CHARSET']->value;?>
">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['TITLE']->value;?>
">

    <title><?php echo $_smarty_tpl->tpl_vars['TITLE']->value;?>
</title>

    <meta name="author" content="<?php echo $_smarty_tpl->tpl_vars['SITE_NAME']->value;?>
">

    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['FOMANTIC_CSS']->value;?>
">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['FONT_AWESOME']->value;?>
">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['PRISM_CSS']->value;?>
">
</head>

<body>
    <?php if ($_smarty_tpl->tpl_vars['DETAILED_ERROR']->value) {?>
        <div class="ui inverted borderless menu" style="border-radius: 0;">
            <span class="item">
                <img style="width: 30px; height: 30px;" src="core/assets/img/namelessmc_logo.png" alt="Logo">&nbsp;
            </span>
            <div class="right menu">
                <a class="item" target="_blank" href="https://discord.gg/nameless">
                    <i class="life ring icon"></i><?php echo $_smarty_tpl->tpl_vars['NAMELESSMC_SUPPORT']->value;?>

                </a>
                <a class="item" target="_blank" href="https://docs.namelessmc.com">
                    <i class="book icon"></i><?php echo $_smarty_tpl->tpl_vars['NAMELESSMC_DOCS']->value;?>

                </a>
            </div>
        </div>
    <?php }?>

    <div class="ui container one column grid">
        <div class="row <?php if (!$_smarty_tpl->tpl_vars['DETAILED_ERROR']->value) {?>three column<?php }?>">
            <?php if (!$_smarty_tpl->tpl_vars['DETAILED_ERROR']->value) {?>
                <div class="column"></div>
            <?php }?>
            <div class="ui message <?php if (!$_smarty_tpl->tpl_vars['DETAILED_ERROR']->value) {?>column center aligned<?php }?>"
                 style="<?php if ($_smarty_tpl->tpl_vars['CAN_GENERATE_DEBUG']->value) {?>padding-bottom: 20px;<?php }?> margin-top: 30px; width: 100%; overflow-wrap: break-word;">
                <?php if ($_smarty_tpl->tpl_vars['DETAILED_ERROR']->value) {?>
                    <div class="ui large header">Uncaught <i><?php echo $_smarty_tpl->tpl_vars['ERROR_TYPE']->value;?>
</i></div>
                    <p></p>
                    <div class="ui large header"><kbd><?php echo $_smarty_tpl->tpl_vars['ERROR_STRING']->value;?>
</kbd></div>
                    <p></p>
                    <div class="ui medium header"><?php echo $_smarty_tpl->tpl_vars['ERROR_FILE']->value;?>
</div>
                    <p></p>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['CURRENT_URL']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['CURRENT_URL']->value;?>
</a>
                    <?php if ($_smarty_tpl->tpl_vars['CAN_GENERATE_DEBUG']->value) {?>
                        <button style="margin-top: -7px;" class="ui primary right floated button" id="show_debug_modal" onclick="showDebugModal()">
                            <?php echo $_smarty_tpl->tpl_vars['DEBUG_LINK']->value;?>

                        </button>
                    <?php }?>
                <?php } else { ?>
                    <h2><?php echo $_smarty_tpl->tpl_vars['FATAL_ERROR_TITLE']->value;?>
</h2>
                    <p><?php echo $_smarty_tpl->tpl_vars['FATAL_ERROR_MESSAGE_USER']->value;?>
</p>

                    <div class="btn-group" role="group" aria-label="...">
                        <button class="ui button primary" onclick="history.go(-1)">
                            <?php echo $_smarty_tpl->tpl_vars['BACK']->value;?>

                        </button>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['HOME_URL']->value;?>
" class="ui button success">
                            <?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>

                        </a>
                    </div>
                <?php }?>
            </div>
            <?php if (!$_smarty_tpl->tpl_vars['DETAILED_ERROR']->value) {?>
                <div class="column"></div>
            <?php }?>
        </div>

        <?php if ($_smarty_tpl->tpl_vars['DETAILED_ERROR']->value) {?>

        <div class="row">
            <div class="ui two item menu" style="cursor: pointer;">
                <div class="item" data-tab="stack">Stack trace</div>
                <div class="item" data-tab="sql">SQL trace</div>
            </div>
        </div>

        <div class="row">
            <div class="ui bottom attached tab segment active" id="stack" data-tab="stack" style="border-radius: 3px;">
                <div class="ui tab secondary vertical menu left floated tablinks-container" id="tablinks-container">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FRAMES']->value, 'frame');
$_smarty_tpl->tpl_vars['frame']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['frame']->value) {
$_smarty_tpl->tpl_vars['frame']->do_else = false;
?>
                        <button class="tablinks item" id="button-<?php echo $_smarty_tpl->tpl_vars['frame']->value['number'];?>
" onclick="openFrame(<?php echo $_smarty_tpl->tpl_vars['frame']->value['number'];?>
)">
                            <h5><?php echo $_smarty_tpl->tpl_vars['FRAME']->value;?>
 #<?php echo $_smarty_tpl->tpl_vars['frame']->value['number'];?>
</h5>
                            <sub><?php echo $_smarty_tpl->tpl_vars['frame']->value['file'];?>
:<?php echo $_smarty_tpl->tpl_vars['frame']->value['line'];?>
</sub>
                        </button>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FRAMES']->value, 'frame');
$_smarty_tpl->tpl_vars['frame']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['frame']->value) {
$_smarty_tpl->tpl_vars['frame']->do_else = false;
?>
                    <div id="frame-<?php echo $_smarty_tpl->tpl_vars['frame']->value['number'];?>
" class="tabcontent">
                        <h5 style="overflow: scroll !important;"><?php echo $_smarty_tpl->tpl_vars['frame']->value['file'];?>
</h5>
                        <div class="ui divider"></div>

                        <?php if ($_smarty_tpl->tpl_vars['frame']->value['code'] != '') {?>
                            <pre data-line="<?php echo $_smarty_tpl->tpl_vars['frame']->value['highlight_line'];?>
"
                                 data-start="<?php echo $_smarty_tpl->tpl_vars['frame']->value['start_line'];?>
"><code class="language-php line-numbers"><?php echo $_smarty_tpl->tpl_vars['frame']->value['code'];?>
</code></pre>
                        <?php } else { ?>
                            <pre class="text-center"><?php echo $_smarty_tpl->tpl_vars['CANNOT_READ_FILE']->value;?>
</pre>
                        <?php }?>
                    </div>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>

            <div class="ui bottom attached tab segment active" id="sql" data-tab="sql" style="border: 1px solid #d4d4d5; border-radius: 3px;">
                <div class="ui tab secondary vertical menu left floated tablinks-container" id="sql-tablinks-container">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ERROR_SQL_STACK']->value, 'stack');
$_smarty_tpl->tpl_vars['stack']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['stack']->value) {
$_smarty_tpl->tpl_vars['stack']->do_else = false;
?>
                        <button class="sql-tablinks item" id="sql-button-<?php echo $_smarty_tpl->tpl_vars['stack']->value['number'];?>
" onclick="openSqlFrame(<?php echo $_smarty_tpl->tpl_vars['stack']->value['number'];?>
)">
                            <h5><?php echo $_smarty_tpl->tpl_vars['SQL_QUERY']->value;?>
 #<?php echo $_smarty_tpl->tpl_vars['stack']->value['number'];?>
</h5>
                            <sub><?php echo $_smarty_tpl->tpl_vars['stack']->value['frame']['file'];?>
:<?php echo $_smarty_tpl->tpl_vars['stack']->value['frame']['line'];?>
</sub>
                        </button>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ERROR_SQL_STACK']->value, 'stack');
$_smarty_tpl->tpl_vars['stack']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['stack']->value) {
$_smarty_tpl->tpl_vars['stack']->do_else = false;
?>
                    <div id="sql-frame-<?php echo $_smarty_tpl->tpl_vars['stack']->value['number'];?>
" class="sql-tabcontent">
                        <h5 style="overflow: scroll !important;"><?php echo $_smarty_tpl->tpl_vars['stack']->value['frame']['file'];?>
</h5>
                        <div class="ui divider"></div>
                        <?php echo $_smarty_tpl->tpl_vars['stack']->value['sql_query'];?>


                        <?php if ($_smarty_tpl->tpl_vars['stack']->value['frame']['code'] != '') {?>
                            <pre data-line="<?php echo $_smarty_tpl->tpl_vars['stack']->value['frame']['highlight_line'];?>
"
                                data-start="<?php echo $_smarty_tpl->tpl_vars['stack']->value['frame']['start_line'];?>
"><code class="language-php line-numbers"><?php echo $_smarty_tpl->tpl_vars['stack']->value['frame']['code'];?>
</code></pre>
                        <?php } else { ?>
                            <pre class="text-center"><?php echo $_smarty_tpl->tpl_vars['CANNOT_READ_FILE']->value;?>
</pre>
                        <?php }?>
                    </div>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        </div>

        <?php }?>

    </div>

    <?php if ($_smarty_tpl->tpl_vars['CAN_GENERATE_DEBUG']->value) {?>
        <div class="ui modal tiny" id="debug_link_modal">
            <i class="close icon"></i>
            <div class="header">
                <?php echo $_smarty_tpl->tpl_vars['GENERATE_DEBUG_LINK']->value;?>

            </div>
            <div class="content">
                <?php echo $_smarty_tpl->tpl_vars['DEBUG_LINK_INFO']->value;?>

            </div>
            <div class="actions">
                <div class="actions">
                    <div class="ui button cancel">
                        <i class="remove icon"></i>
                        <?php echo $_smarty_tpl->tpl_vars['CANCEL']->value;?>

                    </div>
                    <div class="ui button green" id="generate_debug_url" onclick="generateUrl()">
                        <i class="checkmark icon"></i>
                        <?php echo $_smarty_tpl->tpl_vars['GENERATE']->value;?>

                    </div>
                </div>
            </div>
        </div>
    <?php }?>
</body>

<style>
    

    /* Style the buttons that are used to open the tab content */
    .tablinks, .sql-tablinks {
        text-align: left;
        cursor: pointer;
    }

    .tablinks:hover, .sql-tablinks:hover {
        background-color: rgb(247, 247, 247) !important;
    }

    /* Style the tab content */
    .tabcontent,
    .sql-tabcontent {
        float: left;
        width: 80%;
    }

    .tablinks-container {
        min-height: 920px !important;
        max-height: 920px;
        overflow-y: scroll;
    }

    @media (max-width: 1198px) {
        .tabcontent,
        .sql-tabcontent {
            width: 100%;
        }

        .tablinks, .sql-tablinks {
            width: 100% !important;
        }

        .tablinks-container {
            min-height: 0;
        }
    }

    /* Force SQL query to not overflow */
    .sql-tabcontent > pre {
        overflow-y: scroll;
    }

    code {
        cursor: default;
    }
    
</style>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['JQUERY']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['FOMANTIC_JS']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['PRISM_JS']->value;?>
"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
    function hideAllFrames() {
        $('.tabcontent').each(function() {
            $(this).css('display', 'none');
        });
    }

    function hideAllSqlFrames() {
        $('.sql-tabcontent').each(function() {
            $(this).css('display', 'none');
        });
    }

    function removeAllActive() {
        $('.tablinks').each(function() {
            $(this).removeClass('active');
        });
    }

    function removeAllActiveSqlFrames() {
        $('.sql-tablinks').each(function() {
            $(this).removeClass('active');
        });
    }

    $(document).ready(function() {
        $('.menu .item').tab();

        // Fix prism not highlighting the tabs which are "display: hidden;"
        // from the fomantic active class
        document.getElementById('sql').classList.remove('active');

        // handle expanding width of tablinks on mobile
        checkWidth();
        window.addEventListener('resize', checkWidth);

        openFrame(<?php echo smarty_modifier_count($_smarty_tpl->tpl_vars['FRAMES']->value)+$_smarty_tpl->tpl_vars['SKIP_FRAMES']->value;?>
);
        openSqlFrame(<?php echo smarty_modifier_count($_smarty_tpl->tpl_vars['ERROR_SQL_STACK']->value);?>
);
    });

    function checkWidth() {
        if (window.matchMedia("(max-width: 1198px)").matches) {
            document.getElementById('tablinks-container').classList.add('fluid');
            document.getElementById('sql-tablinks-container').classList.add('fluid');
        } else {
            document.getElementById('tablinks-container').classList.remove('fluid');
            document.getElementById('sql-tablinks-container').classList.remove('fluid');
        }
    }

    function openFrame(id) {
        hideAllFrames();
        removeAllActive();

        $('#frame-' + id).css('display', 'block');
        $('#button-' + id).addClass('active');
    }

    function openSqlFrame(id) {
        hideAllSqlFrames();
        removeAllActiveSqlFrames();

        $('#sql-frame-' + id).css('display', 'block');
        $('#sql-button-' + id).addClass('active');
    }

    <?php if ($_smarty_tpl->tpl_vars['CAN_GENERATE_DEBUG']->value) {?>
        function showDebugModal() {
            $('#debug_link_modal').modal('show');
        }

        function generateUrl() {
            const generate_debug_url = $('#generate_debug_url');
            generate_debug_url.addClass('loading');
            generate_debug_url.prop('disabled', true);
            $('#show_debug_modal').prop('disabled', true);

            $.get('<?php echo $_smarty_tpl->tpl_vars['DEBUG_LINK_URL']->value;?>
')
                .done((url) => {
                    $('#debug_link_modal').modal('hide');

                    if (!url.startsWith('https://debug.namelessmc.com/')) {
                        $('#show_debug_modal').addClass('red');

                        console.error('Debug link generation failure: ' + url);

                        toast('<?php echo $_smarty_tpl->tpl_vars['DEBUG_CANNOT_GENERATE']->value;?>
', 'error');
                    } else {
                        if (window.isSecureContext) {
                            navigator.clipboard.writeText(url);

                            toast('<?php echo $_smarty_tpl->tpl_vars['DEBUG_COPIED']->value;?>
', '', 5000);
                        } else {
                            toast('<?php echo $_smarty_tpl->tpl_vars['DEBUG_TOAST_CLICK']->value;?>
'.replaceAll('{url}', url));
                        }
                    }
                });
            }

            function toast(message, type = '', time = 0) {
                $('body').toast({
                    showIcon: 'fa-solid fa-circle-info move-right',
                    message: message,
                    class: type,
                    displayTime: time,
                    showProgress: time !== 0 ? 'bottom' : false,
                    closeIcon: time === 0,
                    position: 'bottom right',
                });
            }
        <?php }
echo '</script'; ?>
>

</html>
<?php }
}
