<?php
/* Smarty version 4.3.1, created on 2023-06-20 05:13:57
  from '/home/u302265335/domains/rainbowcreation.net/public_html/custom/templates/Cobalt/authme.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6490d3251c0aa6_04024493',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '12db6669bce83df108fa6fe7af2acc5dcaa5163b' => 
    array (
      0 => '/home/u302265335/domains/rainbowcreation.net/public_html/custom/templates/Cobalt/authme.tpl',
      1 => 1685580388,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header-top.tpl' => 1,
    'file:scripts.tpl' => 1,
  ),
),false)) {
function content_6490d3251c0aa6_04024493 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header-top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</head>

<body>
    <div class="container">
        <div class="card register-page-card">

            <div class="register-menu">

                <?php if ($_smarty_tpl->tpl_vars['THEME_LR_MODAL_IMAGE']->value == "yes") {?>

                    <?php if ($_smarty_tpl->tpl_vars['THEME_LR_COVERLAY']->value == "yes") {?><div class="register-overlay"></div><?php }?>
                    <div class="container-fluid">
                        <div class="row no-margin-row">
                            <div class="col-lg-6">
                                <div class="card lr-card">
                                    <div class="card-body">
                                        <div class="lr-import-container">

                                            <span class="lr-title"><?php echo $_smarty_tpl->tpl_vars['CONNECT_WITH_AUTHME']->value;?>
</span>
                                            <br /><br />


                                            <?php if ((isset($_smarty_tpl->tpl_vars['ERRORS']->value))) {?>
                                                <div class="alert alert-danger">
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ERRORS']->value, 'error');
$_smarty_tpl->tpl_vars['error']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->do_else = false;
?> <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

                                                    <br /> <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                </div>
                                            <?php }?>

                                            <?php if ($_smarty_tpl->tpl_vars['AUTHME_SETUP']->value) {?>
                                            <form action="" method="post" id="form-register">
                                                <div class="alert alert-info">
                                                    <?php echo $_smarty_tpl->tpl_vars['AUTHME_INFO']->value;?>

                                                </div>
                                                <div class="form-group">
                                                    <label for="inputUsername"><?php echo $_smarty_tpl->tpl_vars['USERNAME']->value;?>
</label>
                                                    <input class="form-control" type="text" id="inputUsername" name="username" placeholder="<?php echo $_smarty_tpl->tpl_vars['USERNAME']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['USERNAME_INPUT']->value;?>
" tabindex="1" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputPassword"><?php echo $_smarty_tpl->tpl_vars['PASSWORD']->value;?>
</label>
                                                    <input class="form-control" type="password" id="inputPassword" name="password" placeholder="<?php echo $_smarty_tpl->tpl_vars['PASSWORD']->value;?>
" tabindex="2" required>
                                                </div>
                                                <?php if ($_smarty_tpl->tpl_vars['CAPTCHA']->value) {?>
                                                    <div id="captcha" class="form-group"
                                                        style="width: 100%; justify-content: center; display: flex;">
                                                        <?php echo $_smarty_tpl->tpl_vars['CAPTCHA']->value;?>

                                                    </div>
                                                <?php }?>
                                                <hr /> <?php echo $_smarty_tpl->tpl_vars['AGREE_TO_TERMS']->value;?>

                                                <br />
                                                <span class="button-checkbox">
                                                    <button type="button" class="btn" data-color="info" tabindex="7">
                                                        <?php echo $_smarty_tpl->tpl_vars['I_AGREE']->value;?>
</button>
                                                    <input type="checkbox" name="t_and_c" id="t_and_c" style="display:none;"
                                                        value="1" required>
                                                </span>
                                                <br />
                                                <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                                                <br />
                                                <button type="submit" class="btn btn-theme"><?php echo $_smarty_tpl->tpl_vars['SUBMIT']->value;?>
</button>
                                            </form>
                                            <?php } else { ?>
                                            <div class="alert alert-danger">
                                                <?php echo $_smarty_tpl->tpl_vars['AUTHME_NOT_SETUP']->value;?>

                                            </div>
                                            <?php }?>


                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 bg-col">
                                <?php if ((isset($_smarty_tpl->tpl_vars['THEME_R_BG']->value)) && preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['THEME_R_BG']->value, $tmp) > 4) {?>
                                    <picture>
                                        <source srcset="none" media="(max-width: 767px)">
                                        <?php if ((isset($_smarty_tpl->tpl_vars['THEME_R_BG_WEBP']->value)) && preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['THEME_R_BG_WEBP']->value, $tmp) > 4) {?>
                                            <source srcset="<?php echo $_smarty_tpl->tpl_vars['THEME_R_BG_WEBP']->value;?>
" type="image/webp">
                                        <?php }?>
                                        <source srcset="<?php echo $_smarty_tpl->tpl_vars['THEME_R_BG']->value;?>
">
                                        <img class="lr-bg-img" alt="logo" src='<?php echo $_smarty_tpl->tpl_vars['THEME_R_BG']->value;?>
'>
                                    </picture>
                                <?php }?>
                            </div>
                        </div>
                    </div>

                <?php } else { ?>

                    <div class="container-fluid">
                        <div class="card lr-card">
                            <div class="card-body">
                                <div class="lr-import-container">

                                <span class="lr-title"><?php echo $_smarty_tpl->tpl_vars['CONNECT_WITH_AUTHME']->value;?>
</span>
                                <br /><br />


                                <?php if ((isset($_smarty_tpl->tpl_vars['ERRORS']->value))) {?>
                                    <div class="alert alert-danger">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ERRORS']->value, 'error');
$_smarty_tpl->tpl_vars['error']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->do_else = false;
?> <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

                                        <br /> <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </div>
                                <?php }?>

                                <?php if ($_smarty_tpl->tpl_vars['AUTHME_SETUP']->value) {?>
                                <form action="" method="post" id="form-register">
                                    <div class="alert alert-info">
                                        <?php echo $_smarty_tpl->tpl_vars['AUTHME_INFO']->value;?>

                                    </div>
                                    <div class="form-group">
                                        <label for="inputUsername"><?php echo $_smarty_tpl->tpl_vars['USERNAME']->value;?>
</label>
                                        <input class="form-control" type="text" id="inputUsername" name="username" placeholder="<?php echo $_smarty_tpl->tpl_vars['USERNAME']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['USERNAME_INPUT']->value;?>
" tabindex="1" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword"><?php echo $_smarty_tpl->tpl_vars['PASSWORD']->value;?>
</label>
                                        <input class="form-control" type="password" id="inputPassword" name="password" placeholder="<?php echo $_smarty_tpl->tpl_vars['PASSWORD']->value;?>
" tabindex="2" required>
                                    </div>
                                    <?php if ($_smarty_tpl->tpl_vars['CAPTCHA']->value) {?>
                                        <div id="captcha" class="form-group"
                                            style="width: 100%; justify-content: center; display: flex;">
                                            <?php echo $_smarty_tpl->tpl_vars['CAPTCHA']->value;?>

                                        </div>
                                    <?php }?>
                                    <hr /> <?php echo $_smarty_tpl->tpl_vars['AGREE_TO_TERMS']->value;?>

                                    <br />
                                    <span class="button-checkbox">
                                        <button type="button" class="btn" data-color="info" tabindex="7">
                                            <?php echo $_smarty_tpl->tpl_vars['I_AGREE']->value;?>
</button>
                                        <input type="checkbox" name="t_and_c" id="t_and_c" style="display:none;"
                                            value="1" required>
                                    </span>
                                    <br />
                                    <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                                    <br />
                                    <button type="submit" class="btn btn-theme"><?php echo $_smarty_tpl->tpl_vars['SUBMIT']->value;?>
</button>
                                </form>
                                <?php } else { ?>
                                <div class="alert alert-danger">
                                    <?php echo $_smarty_tpl->tpl_vars['AUTHME_NOT_SETUP']->value;?>

                                </div>
                                <?php }?>




                                </div>
                            </div>
                        </div>
                    </div>

                <?php }?>
            </div>

        </div>
    </div>

    <?php $_smarty_tpl->_subTemplateRender('file:scripts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php if (!(isset($_smarty_tpl->tpl_vars['EXCLUDE_END_BODY']->value))) {?>
    </body>

    </html>
<?php }?>

<?php }
}
