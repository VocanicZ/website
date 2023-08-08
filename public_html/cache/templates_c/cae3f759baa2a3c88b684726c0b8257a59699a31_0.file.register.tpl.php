<?php
/* Smarty version 4.3.1, created on 2023-06-01 08:13:02
  from '/home/u302265335/domains/rainbowcreation.net/public_html/custom/templates/Cobalt/register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6477f09e09e1a7_99479189',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cae3f759baa2a3c88b684726c0b8257a59699a31' => 
    array (
      0 => '/home/u302265335/domains/rainbowcreation.net/public_html/custom/templates/Cobalt/register.tpl',
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
function content_6477f09e09e1a7_99479189 (Smarty_Internal_Template $_smarty_tpl) {
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

                                            <span class="lr-title"><?php echo $_smarty_tpl->tpl_vars['CREATE_AN_ACCOUNT']->value;?>
</span>
                                            <br /><br />
                                            <form action="" method="post" id="form-register">
                                                <?php if ((isset($_smarty_tpl->tpl_vars['REGISTRATION_ERROR']->value))) {?>
                                                    <div class="alert alert-danger">
                                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['REGISTRATION_ERROR']->value, 'error');
$_smarty_tpl->tpl_vars['error']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->do_else = false;
?> <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

                                                        <br /> <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                    </div>
                                                    <?php }?>



                                                    <?php $_smarty_tpl->_assignInScope('counter', 1);?>
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FIELDS']->value, 'field', false, 'field_key');
$_smarty_tpl->tpl_vars['field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field_key']->value => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->do_else = false;
?>
                                                    <div class="form-group">
                                                        <?php if ($_smarty_tpl->tpl_vars['field']->value['type'] == 1) {?>
                                                        <input class="form-control" type="text" name="<?php echo $_smarty_tpl->tpl_vars['field_key']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['field_key']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['field']->value['value'];?>
"
                                                            placeholder="<?php echo $_smarty_tpl->tpl_vars['field']->value['placeholder'];?>
" tabindex="<?php echo $_smarty_tpl->tpl_vars['counter']->value++;?>
" <?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?>
                                                            required<?php }?>>
                                                        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] == 2) {?>
                                                        <textarea class="form-control" name="<?php echo $_smarty_tpl->tpl_vars['field_key']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['field_key']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['field']->value['placeholder'];?>
"
                                                            tabindex="<?php echo $_smarty_tpl->tpl_vars['counter']->value++;?>
"></textarea>
                                                        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] == 3) {?>
                                                        <input class="form-control" type="date" name="<?php echo $_smarty_tpl->tpl_vars['field_key']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['field_key']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['field']->value['value'];?>
"
                                                            tabindex="<?php echo $_smarty_tpl->tpl_vars['counter']->value++;?>
">
                                                        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] == 4) {?>
                                                        <input class="form-control" type="password" name="<?php echo $_smarty_tpl->tpl_vars['field_key']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['field_key']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['field']->value['value'];?>
"
                                                            placeholder="<?php echo $_smarty_tpl->tpl_vars['field']->value['placeholder'];?>
" tabindex="<?php echo $_smarty_tpl->tpl_vars['counter']->value++;?>
" <?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?>
                                                            required<?php }?>>
                                                        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] == 5) {?>
                                                        <select class="form-control" name="<?php echo $_smarty_tpl->tpl_vars['field_key']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['field_key']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?>required<?php }?>>
                                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['field']->value['options'], 'option');
$_smarty_tpl->tpl_vars['option']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->do_else = false;
?>
                                                            <option value="<?php echo $_smarty_tpl->tpl_vars['option']->value['value'];?>
" <?php if ($_smarty_tpl->tpl_vars['option']->value['value'] == $_smarty_tpl->tpl_vars['field']->value['value']) {?> selected<?php }?>>
                                                                <?php echo $_smarty_tpl->tpl_vars['option']->value['option'];?>
</option>
                                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                        </select>
                                                        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] == 6) {?>
                                                        <input class="form-control" type="number" name="<?php echo $_smarty_tpl->tpl_vars['field_key']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['field_key']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['field']->value['value'];?>
"
                                                            placeholder="<?php echo $_smarty_tpl->tpl_vars['field']->value['name'];?>
" tabindex="<?php echo $_smarty_tpl->tpl_vars['counter']->value++;?>
" <?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?> required<?php }?>>
                                                        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] == 7) {?>
                                                        <input class="form-control" type="email" name="<?php echo $_smarty_tpl->tpl_vars['field_key']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['field_key']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['field']->value['value'];?>
"
                                                            placeholder="<?php echo $_smarty_tpl->tpl_vars['field']->value['placeholder'];?>
" tabindex="<?php echo $_smarty_tpl->tpl_vars['counter']->value++;?>
" <?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?>
                                                            required<?php }?>>
                                                        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] == 8) {?>
                                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['field']->value['options'], 'option');
$_smarty_tpl->tpl_vars['option']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->do_else = false;
?>
                                                        <div class="form-group">
                                                            <div class="form-control" tabindex="<?php echo $_smarty_tpl->tpl_vars['counter']->value++;?>
">
                                                                <input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['field_key']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['option']->value['value'];?>
" <?php if ($_smarty_tpl->tpl_vars['field']->value['value'] == $_smarty_tpl->tpl_vars['option']->value['value']) {?>checked<?php }?> <?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?>required<?php }?>>
                                                                <label><?php echo $_smarty_tpl->tpl_vars['option']->value['option'];?>
</label>
                                                            </div>
                                                        </div>
                                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] == 9) {?>
                                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['field']->value['options'], 'option');
$_smarty_tpl->tpl_vars['option']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->do_else = false;
?>
                                                        <div class="form-group">
                                                            <div class="form-control">
                                                                <input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['field_key']->value;?>
[]" value="<?php echo $_smarty_tpl->tpl_vars['option']->value['value'];?>
" <?php if (is_array($_smarty_tpl->tpl_vars['field']->value['value']) && in_array($_smarty_tpl->tpl_vars['option']->value['value'],$_smarty_tpl->tpl_vars['field']->value['value'])) {?>checked<?php }?>
                                                                    tabindex="<?php echo $_smarty_tpl->tpl_vars['counter']->value++;?>
">
                                                                <label><?php echo $_smarty_tpl->tpl_vars['option']->value['option'];?>
</label>
                                                            </div>
                                                        </div>
                                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                        <?php }?>
                                                    </div>
                                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                                                <div class="row">
                                                    <div class="col-4 col-md-5 col-lg-4">
                                                        <span class="button-checkbox">
                                                            <button style="margin-top: 7px" type="button"
                                                                class="btn float-left" data-color="info" tabindex="7">
                                                                <?php echo $_smarty_tpl->tpl_vars['I_AGREE']->value;?>
</button>
                                                            <input type="checkbox" name="t_and_c" id="t_and_c"
                                                                style="display:none;" value="1">
                                                        </span>
                                                    </div>
                                                    <div class="col-8 col-md-7 col-lg-8">
                                                        <span class="agree-terms"><?php echo $_smarty_tpl->tpl_vars['AGREE_TO_TERMS']->value;?>
</span>
                                                    </div>
                                                </div>
                                                <br /> <?php if ($_smarty_tpl->tpl_vars['CAPTCHA']->value) {?>
                                                        <div id="captcha" class="form-group"
                                                            style="width: 100%; justify-content: center; display: flex;">
                                                            <?php echo $_smarty_tpl->tpl_vars['CAPTCHA']->value;?>

                                                        </div>
                                                    <?php }?>
                                                <div class="row mb-2">
                                                    <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                                                    <input id="timezone" type="hidden" name="timezone" value="">
                                                    <div class="col-6"><button type="submit"
                                                            class="btn btn-theme btn-block"><?php echo $_smarty_tpl->tpl_vars['REGISTER']->value;?>
</button></div>
                                                    <div class="col-6"><a href="<?php echo $_smarty_tpl->tpl_vars['LOGIN_URL']->value;?>
"
                                                            class="btn btn-theme btn-block"><?php echo $_smarty_tpl->tpl_vars['LOG_IN']->value;?>
</a></div>
                                                </div>
                                                <?php if ($_smarty_tpl->tpl_vars['OAUTH_FLOW']->value) {?>
                                                    <a class="btn btn-secondary" href="<?php echo $_smarty_tpl->tpl_vars['OAUTH_CANCEL_REGISTER_URL']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['CANCEL']->value;?>
</a>
                                                <?php }?>
                                            </form>

                                            <?php if ($_smarty_tpl->tpl_vars['OAUTH_AVAILABLE']->value && !$_smarty_tpl->tpl_vars['OAUTH_FLOW']->value) {?>
                                                <div class="oauth-divider"><span class="or"><?php echo $_smarty_tpl->tpl_vars['OR']->value;?>
</span></div>
                                                <div class="flex mb-1">
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
"<?php }?>><?php echo $_smarty_tpl->tpl_vars['meta']->value['continue_with'];?>
</span>
                                                    </a>
                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                    </div>
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

                                    <span class="lr-title"><?php echo $_smarty_tpl->tpl_vars['CREATE_AN_ACCOUNT']->value;?>
</span>
                                    <br /><br />
                                    <form action="" method="post" id="form-register">
                                    <?php if ((isset($_smarty_tpl->tpl_vars['REGISTRATION_ERROR']->value))) {?>
                                        <div class="alert alert-danger">
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['REGISTRATION_ERROR']->value, 'error');
$_smarty_tpl->tpl_vars['error']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->do_else = false;
?> <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

                                            <br /> <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </div>
                                        <?php }?>



                                        <?php $_smarty_tpl->_assignInScope('counter', 1);?>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FIELDS']->value, 'field', false, 'field_key');
$_smarty_tpl->tpl_vars['field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field_key']->value => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->do_else = false;
?>
                                        <div class="form-group">
                                            <?php if ($_smarty_tpl->tpl_vars['field']->value['type'] == 1) {?>
                                            <input class="form-control" type="text" name="<?php echo $_smarty_tpl->tpl_vars['field_key']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['field_key']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['field']->value['value'];?>
"
                                                placeholder="<?php echo $_smarty_tpl->tpl_vars['field']->value['placeholder'];?>
" tabindex="<?php echo $_smarty_tpl->tpl_vars['counter']->value++;?>
" <?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?>
                                                required<?php }?>>
                                            <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] == 2) {?>
                                            <textarea class="form-control" name="<?php echo $_smarty_tpl->tpl_vars['field_key']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['field_key']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['field']->value['placeholder'];?>
"
                                                tabindex="<?php echo $_smarty_tpl->tpl_vars['counter']->value++;?>
"></textarea>
                                            <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] == 3) {?>
                                            <input class="form-control" type="date" name="<?php echo $_smarty_tpl->tpl_vars['field_key']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['field_key']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['field']->value['value'];?>
"
                                                tabindex="<?php echo $_smarty_tpl->tpl_vars['counter']->value++;?>
">
                                            <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] == 4) {?>
                                            <input class="form-control" type="password" name="<?php echo $_smarty_tpl->tpl_vars['field_key']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['field_key']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['field']->value['value'];?>
"
                                                placeholder="<?php echo $_smarty_tpl->tpl_vars['field']->value['placeholder'];?>
" tabindex="<?php echo $_smarty_tpl->tpl_vars['counter']->value++;?>
" <?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?>
                                                required<?php }?>>
                                            <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] == 5) {?>
                                            <select class="form-control" name="<?php echo $_smarty_tpl->tpl_vars['field_key']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['field_key']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?>required<?php }?>>
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['field']->value['options'], 'option');
$_smarty_tpl->tpl_vars['option']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->do_else = false;
?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['option']->value['value'];?>
" <?php if ($_smarty_tpl->tpl_vars['option']->value['value'] == $_smarty_tpl->tpl_vars['field']->value['value']) {?> selected<?php }?>>
                                                    <?php echo $_smarty_tpl->tpl_vars['option']->value['option'];?>
</option>
                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            </select>
                                            <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] == 6) {?>
                                            <input class="form-control" type="number" name="<?php echo $_smarty_tpl->tpl_vars['field_key']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['field_key']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['field']->value['value'];?>
"
                                                placeholder="<?php echo $_smarty_tpl->tpl_vars['field']->value['name'];?>
" tabindex="<?php echo $_smarty_tpl->tpl_vars['counter']->value++;?>
" <?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?> required<?php }?>>
                                            <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] == 7) {?>
                                            <input class="form-control" type="email" name="<?php echo $_smarty_tpl->tpl_vars['field_key']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['field_key']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['field']->value['value'];?>
"
                                                placeholder="<?php echo $_smarty_tpl->tpl_vars['field']->value['placeholder'];?>
" tabindex="<?php echo $_smarty_tpl->tpl_vars['counter']->value++;?>
" <?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?>
                                                required<?php }?>>
                                            <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] == 8) {?>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['field']->value['options'], 'option');
$_smarty_tpl->tpl_vars['option']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->do_else = false;
?>
                                            <div class="form-group">
                                                <div class="form-control" tabindex="<?php echo $_smarty_tpl->tpl_vars['counter']->value++;?>
">
                                                    <input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['field_key']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['option']->value['value'];?>
" <?php if ($_smarty_tpl->tpl_vars['field']->value['value'] == $_smarty_tpl->tpl_vars['option']->value['value']) {?>checked<?php }?> <?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?>required<?php }?>>
                                                    <label><?php echo $_smarty_tpl->tpl_vars['option']->value['option'];?>
</label>
                                                </div>
                                            </div>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] == 9) {?>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['field']->value['options'], 'option');
$_smarty_tpl->tpl_vars['option']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->do_else = false;
?>
                                            <div class="form-group">
                                                <div class="form-control">
                                                    <input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['field_key']->value;?>
[]" value="<?php echo $_smarty_tpl->tpl_vars['option']->value['value'];?>
" <?php if (is_array($_smarty_tpl->tpl_vars['field']->value['value']) && in_array($_smarty_tpl->tpl_vars['option']->value['value'],$_smarty_tpl->tpl_vars['field']->value['value'])) {?>checked<?php }?>
                                                        tabindex="<?php echo $_smarty_tpl->tpl_vars['counter']->value++;?>
">
                                                    <label><?php echo $_smarty_tpl->tpl_vars['option']->value['option'];?>
</label>
                                                </div>
                                            </div>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            <?php }?>
                                        </div>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                                    <div class="row">
                                        <div class="col-4 col-md-5 col-lg-4">
                                            <span class="button-checkbox">
                                                <button style="margin-top: 7px" type="button"
                                                    class="btn float-left" data-color="info" tabindex="7">
                                                    <?php echo $_smarty_tpl->tpl_vars['I_AGREE']->value;?>
</button>
                                                <input type="checkbox" name="t_and_c" id="t_and_c"
                                                    style="display:none;" value="1">
                                            </span>
                                        </div>
                                        <div class="col-8 col-md-7 col-lg-8">
                                            <span class="agree-terms"><?php echo $_smarty_tpl->tpl_vars['AGREE_TO_TERMS']->value;?>
</span>
                                        </div>
                                    </div>
                                    <br /> <?php if ($_smarty_tpl->tpl_vars['CAPTCHA']->value) {?>
                                            <div id="captcha" class="form-group"
                                                style="width: 100%; justify-content: center; display: flex;">
                                                <?php echo $_smarty_tpl->tpl_vars['CAPTCHA']->value;?>

                                            </div>
                                        <?php }?>
                                    <div class="row mb-2">
                                        <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                                        <input id="timezone" type="hidden" name="timezone" value="">
                                        <div class="col-6"><button type="submit"
                                                class="btn btn-theme btn-block"><?php echo $_smarty_tpl->tpl_vars['REGISTER']->value;?>
</button></div>
                                        <div class="col-6"><a href="<?php echo $_smarty_tpl->tpl_vars['LOGIN_URL']->value;?>
"
                                                class="btn btn-theme btn-block"><?php echo $_smarty_tpl->tpl_vars['LOG_IN']->value;?>
</a></div>
                                    </div>
                                </form>

                                <?php if ($_smarty_tpl->tpl_vars['OAUTH_AVAILABLE']->value && !$_smarty_tpl->tpl_vars['OAUTH_FLOW']->value) {?>
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
"<?php }?>><?php echo $_smarty_tpl->tpl_vars['meta']->value['continue_with'];?>
</span>
                                            </a>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </div>
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

    <?php if ($_smarty_tpl->tpl_vars['OAUTH_FLOW']->value && $_smarty_tpl->tpl_vars['OAUTH_EMAIL_VERIFIED']->value) {?>
        <?php echo '<script'; ?>
>
            document.getElementById('email').addEventListener('keyup', (e) => {
                checkEmailValidity(e.target.value);
            });
            const checkEmailValidity = (email) => {
                if ('<?php echo $_smarty_tpl->tpl_vars['OAUTH_EMAIL_VERIFIED']->value;?>
' && email !== '<?php echo $_smarty_tpl->tpl_vars['OAUTH_EMAIL_ORIGINAL']->value;?>
') {
                    addEmailCaption('<?php echo $_smarty_tpl->tpl_vars['OAUTH_EMAIL_NOT_VERIFIED_MESSAGE']->value;?>
', 'orange');
                } else {
                    addEmailCaption('<?php echo $_smarty_tpl->tpl_vars['OAUTH_EMAIL_VERIFIED_MESSAGE']->value;?>
', 'green');
                }
            }
            const addEmailCaption = (text, colour) => {
                const email = document.getElementById('email');
                document.getElementById('email-caption')?.remove();
                email.parentElement.insertAdjacentHTML('beforeend', '<div id="email-caption" style="margin-top: 5px;" class="ui basic ' + colour + ' label">' + text + '</div>');
            };
            window.onload = () => checkEmailValidity('<?php echo $_smarty_tpl->tpl_vars['EMAIL_INPUT']->value;?>
');
        <?php echo '</script'; ?>
>
    <?php }?>

    <?php $_smarty_tpl->_subTemplateRender('file:scripts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php if (!(isset($_smarty_tpl->tpl_vars['EXCLUDE_END_BODY']->value))) {?>
    </body>

    </html>
<?php }
}
}
