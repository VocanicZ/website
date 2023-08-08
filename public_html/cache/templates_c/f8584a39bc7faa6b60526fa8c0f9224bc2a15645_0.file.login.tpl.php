<?php
/* Smarty version 4.3.1, created on 2023-06-01 08:13:22
  from '/home/u302265335/domains/rainbowcreation.net/public_html/custom/templates/Cobalt/login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6477f0b26c9314_92510266',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f8584a39bc7faa6b60526fa8c0f9224bc2a15645' => 
    array (
      0 => '/home/u302265335/domains/rainbowcreation.net/public_html/custom/templates/Cobalt/login.tpl',
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
function content_6477f0b26c9314_92510266 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header-top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</head>

<body>
    <div class="container">
        <div class="card login-page-card">

            <div class="login-menu">

                <?php if ($_smarty_tpl->tpl_vars['THEME_LR_MODAL_IMAGE']->value == "yes") {?>

                    <?php if ($_smarty_tpl->tpl_vars['THEME_LR_COVERLAY']->value == "yes") {?><div class="login-overlay"></div><?php }?>
                    <div class="container-fluid">
                        <div class="row no-margin-row">
                            <div class="col-lg-6">
                                <div class="card lr-card">
                                    <div class="card-body">
                                        <div class="lr-import-container">

                                            <span class="lr-title"><?php echo $_smarty_tpl->tpl_vars['SIGN_IN']->value;?>
</span>
                                            <br /><br />
                                            <form id="form-login" role="form" action="" method="post">
                                                <?php if (count($_smarty_tpl->tpl_vars['ERROR']->value)) {?>
                                                    <div class="alert alert-danger" role="alert">
                                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ERROR']->value, 'error', false, NULL, 'err', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['error']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_err']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_err']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_err']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_err']->value['total'];
?> <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

                                                            <?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_err']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_err']->value['last'] : null)) {?><br /><?php }?> <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                        </div>
                                                    <?php }?>
                                                    <?php if ((isset($_smarty_tpl->tpl_vars['EMAIL']->value))) {?>
                                                        <div class="form-group">
                                                            <input type="email" class="form-control" style="width: 100%"
                                                                name="email" id="email" value="<?php echo $_smarty_tpl->tpl_vars['USERNAME_INPUT']->value;?>
"
                                                                placeholder="<?php echo $_smarty_tpl->tpl_vars['EMAIL']->value;?>
" tabindex="1">
                                                        </div>
                                                    <?php } else { ?>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" style="width:100%;"
                                                                name="username" id="username" value="<?php echo $_smarty_tpl->tpl_vars['USERNAME_INPUT']->value;?>
"
                                                                placeholder="<?php echo $_smarty_tpl->tpl_vars['USERNAME']->value;?>
" tabindex="1">
                                                        </div>
                                                    <?php }?>
                                                    <div class="form-group">
                                                        <input type="password" class="form-control" style="width: 100%;"
                                                            name="password" id="password" autocomplete="off"
                                                            placeholder="<?php echo $_smarty_tpl->tpl_vars['PASSWORD']->value;?>
" tabindex="2">
                                                    </div>

                                                    <div class="form-group" style="margin-bottom: 5rem !important">
                                                        <span class="button-checkbox">
                                                            <button style="max-width: 100%" type="button" class="btn float-left"
                                                                data-color="info" tabindex="3"> <?php echo $_smarty_tpl->tpl_vars['REMEMBER_ME']->value;?>
</button>
                                                            <input type="checkbox" name="remember" id="remember"
                                                                style="display:none;" value="1">
                                                        </span>
                                                    </div>

                                                    <?php if ($_smarty_tpl->tpl_vars['CAPTCHA']->value) {?>
                                                        <div id="captcha" class="form-group"
                                                            style="width: 100%; justify-content: center; display: flex;">
                                                            <?php echo $_smarty_tpl->tpl_vars['CAPTCHA']->value;?>

                                                        </div>
                                                    <?php }?>
                                                    <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['FORM_TOKEN']->value;?>
">
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <button type="submit" class="btn btn-theme btn-block"
                                                                    tabindex="5"><?php echo $_smarty_tpl->tpl_vars['SIGN_IN']->value;?>
</button>
                                                            </div>
                                                            <div class="col-6">
                                                                <a class="btn btn-theme btn-block"
                                                                    href="<?php echo $_smarty_tpl->tpl_vars['REGISTER_URL']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['REGISTER']->value;?>
</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>

                                                <?php if ($_smarty_tpl->tpl_vars['OAUTH_AVAILABLE']->value) {?>
                                                    <div class="oauth-divider"><span class="or"><?php echo $_smarty_tpl->tpl_vars['OR']->value;?>
</span></div>
                                                    <div class="flex">
                                                        <div class="flex-grow-1">
                                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['OAUTH_PROVIDERS']->value, 'meta', false, 'name');
$_smarty_tpl->tpl_vars['meta']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['meta']->value) {
$_smarty_tpl->tpl_vars['meta']->do_else = false;
?>
                                                            <a href="<?php echo $_smarty_tpl->tpl_vars['meta']->value['url'];?>
" class="btn btn-secondary ml-2 mr-2" <?php if ($_smarty_tpl->tpl_vars['meta']->value['button_css']) {?>style="<?php echo $_smarty_tpl->tpl_vars['meta']->value['button_css'];?>
"<?php }?>>
                                                                <?php if ($_smarty_tpl->tpl_vars['meta']->value['logo_url']) {?>
                                                                <img src="<?php echo $_smarty_tpl->tpl_vars['meta']->value['logo_url'];?>
" <?php if ($_smarty_tpl->tpl_vars['meta']->value['logo_css']) {?>style="<?php echo $_smarty_tpl->tpl_vars['meta']->value['logo_css'];?>
"<?php }?> alt="<?php echo ucfirst($_smarty_tpl->tpl_vars['name']->value);?>
">
                                                            <?php } elseif ($_smarty_tpl->tpl_vars['meta']->value['icon']) {?>
                                                                <i class="<?php echo $_smarty_tpl->tpl_vars['meta']->value['icon'];?>
 fa-lg"></i>
                                                            <?php }?>
                                                            <span <?php if ($_smarty_tpl->tpl_vars['meta']->value['text_css']) {?>style="<?php echo $_smarty_tpl->tpl_vars['meta']->value['text_css'];?>
"<?php }?>><?php echo $_smarty_tpl->tpl_vars['meta']->value['log_in_with'];?>
</span>
                                                            </a>
                                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                        </div>
                                                    </div>
                                                <?php }?>
                                                <a class="grey-link fp-link mt-4 d-inline-block"
                                                            href="<?php echo $_smarty_tpl->tpl_vars['FORGOT_PASSWORD_URL']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['FORGOT_PASSWORD']->value;?>
</a>
    


                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 bg-col">
                                    <?php if ((isset($_smarty_tpl->tpl_vars['THEME_L_BG']->value)) && preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['THEME_L_BG']->value, $tmp) > 4) {?>
                                        <picture>
                                            <source srcset="none" media="(max-width: 767px)">
                                            <?php if ((isset($_smarty_tpl->tpl_vars['THEME_L_BG_WEBP']->value)) && preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['THEME_L_BG_WEBP']->value, $tmp) > 4) {?>
                                                <source srcset="<?php echo $_smarty_tpl->tpl_vars['THEME_L_BG_WEBP']->value;?>
" type="image/webp">
                                            <?php }?>
                                            <source srcset="<?php echo $_smarty_tpl->tpl_vars['THEME_L_BG']->value;?>
">
                                            <img class="lr-bg-img" alt="logo" src='<?php echo $_smarty_tpl->tpl_vars['THEME_L_BG']->value;?>
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
                                        <span class="lr-title"><?php echo $_smarty_tpl->tpl_vars['SIGN_IN']->value;?>
</span>
                                        <br /><br />
                                        <form id="form-login" role="form" action="" method="post">
                                            <?php if (count($_smarty_tpl->tpl_vars['ERROR']->value)) {?>
                                                <div class="alert alert-danger" role="alert">
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ERROR']->value, 'error', false, NULL, 'err', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['error']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_err']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_err']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_err']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_err']->value['total'];
?> <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

                                                        <?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_err']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_err']->value['last'] : null)) {?><br /><?php }?> <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                    </div>
                                                <?php }?>
                                                <?php if ((isset($_smarty_tpl->tpl_vars['EMAIL']->value))) {?>
                                                    <div class="form-group">
                                                        <input type="email" class="form-control" style="width: 100%" name="email"
                                                            id="email" value="<?php echo $_smarty_tpl->tpl_vars['USERNAME_INPUT']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['EMAIL']->value;?>
" tabindex="1">
                                                    </div>
                                                <?php } else { ?>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" style="width:100%;" name="username"
                                                            id="username" value="<?php echo $_smarty_tpl->tpl_vars['USERNAME_INPUT']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['USERNAME']->value;?>
"
                                                            tabindex="1">
                                                    </div>
                                                <?php }?>
                                                <div class="form-group">
                                                    <input type="password" class="form-control" style="width: 100%;" name="password"
                                                        id="password" autocomplete="off" placeholder="<?php echo $_smarty_tpl->tpl_vars['PASSWORD']->value;?>
" tabindex="2">
                                                </div>

                                                <div class="form-group" style="margin-bottom: 5rem !important">
                                                    <span class="button-checkbox">
                                                        <button style="max-width: 100%" type="button" class="btn float-left"
                                                            data-color="info" tabindex="3"> <?php echo $_smarty_tpl->tpl_vars['REMEMBER_ME']->value;?>
</button>
                                                        <input type="checkbox" name="remember" id="remember" style="display:none;"
                                                            value="1">
                                                    </span>
                                                </div>

                                                <?php if ($_smarty_tpl->tpl_vars['CAPTCHA']->value) {?>
                                                    <div id="captcha" class="form-group"
                                                        style="width: 100%; justify-content: center; display: flex;">
                                                        <?php echo $_smarty_tpl->tpl_vars['CAPTCHA']->value;?>

                                                    </div>
                                                <?php }?>
                                                <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['FORM_TOKEN']->value;?>
">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <button type="submit" class="btn btn-theme btn-block"
                                                                tabindex="5"><?php echo $_smarty_tpl->tpl_vars['SIGN_IN']->value;?>
</button>
                                                        </div>
                                                        <div class="col-6">
                                                            <a class="btn btn-theme btn-block"
                                                                href="<?php echo $_smarty_tpl->tpl_vars['REGISTER_URL']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['REGISTER']->value;?>
</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>

                                            <?php if ($_smarty_tpl->tpl_vars['OAUTH_AVAILABLE']->value) {?>
                                                <div class="oauth-divider"><span class="or"><?php echo $_smarty_tpl->tpl_vars['OR']->value;?>
</span></div>
                                                <div class="flex">
                                                    <div class="flex-grow-1">
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['OAUTH_PROVIDERS']->value, 'meta', false, 'name');
$_smarty_tpl->tpl_vars['meta']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['meta']->value) {
$_smarty_tpl->tpl_vars['meta']->do_else = false;
?>
                                                    <a href="<?php echo $_smarty_tpl->tpl_vars['meta']->value['url'];?>
" class="btn btn-secondary ml-2 mr-2" <?php if ($_smarty_tpl->tpl_vars['meta']->value['button_css']) {?>style="<?php echo $_smarty_tpl->tpl_vars['meta']->value['button_css'];?>
"<?php }?>>
                                                        <?php if ($_smarty_tpl->tpl_vars['meta']->value['logo_url']) {?>
                                                        <img src="<?php echo $_smarty_tpl->tpl_vars['meta']->value['logo_url'];?>
" <?php if ($_smarty_tpl->tpl_vars['meta']->value['logo_css']) {?>style="<?php echo $_smarty_tpl->tpl_vars['meta']->value['logo_css'];?>
"<?php }?> alt="<?php echo ucfirst($_smarty_tpl->tpl_vars['name']->value);?>
">
                                                    <?php } elseif ($_smarty_tpl->tpl_vars['meta']->value['icon']) {?>
                                                        <i class="<?php echo $_smarty_tpl->tpl_vars['meta']->value['icon'];?>
 fa-lg"></i>
                                                    <?php }?>
                                                    <span <?php if ($_smarty_tpl->tpl_vars['meta']->value['text_css']) {?>style="<?php echo $_smarty_tpl->tpl_vars['meta']->value['text_css'];?>
"<?php }?>><?php echo $_smarty_tpl->tpl_vars['meta']->value['log_in_with'];?>
</span>
                                                    </a>
                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                    </div>
                                                </div>
                                            <?php }?>

                                            <a class="grey-link fp-link mt-4 d-inline-block"
                                                            href="<?php echo $_smarty_tpl->tpl_vars['FORGOT_PASSWORD_URL']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['FORGOT_PASSWORD']->value;?>
</a>

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
        <?php }
}
}
