<?php
/* Smarty version 4.3.1, created on 2023-06-01 09:10:54
  from '/home/u302265335/domains/rainbowcreation.net/public_html/custom/templates/Cobalt/user/settings.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6477fe2ec394b7_40800665',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4c6c37ceae5ec335a917069c777b57418eceb2c9' => 
    array (
      0 => '/home/u302265335/domains/rainbowcreation.net/public_html/custom/templates/Cobalt/user/settings.tpl',
      1 => 1685580388,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:navbar.tpl' => 1,
    'file:user/navigation.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6477fe2ec394b7_40800665 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php $_smarty_tpl->_subTemplateRender('file:navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
    <div class="row">
        <div class="col-lg-3">
            <?php $_smarty_tpl->_subTemplateRender('file:user/navigation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
        <div class="col-lg-9">
            <?php if (((isset($_smarty_tpl->tpl_vars['ERRORS']->value)) || (isset($_smarty_tpl->tpl_vars['ERROR']->value)))) {?>
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
                    <?php if ((isset($_smarty_tpl->tpl_vars['ERROR']->value))) {?>
                        <?php echo $_smarty_tpl->tpl_vars['ERROR']->value;?>

                    <?php }?>
                </div>
            <?php }?>
            <?php if (!empty($_smarty_tpl->tpl_vars['SUCCESS']->value)) {?>
                <div class="alert alert-success">
                    <?php echo $_smarty_tpl->tpl_vars['SUCCESS']->value;?>

                </div>
            <?php }?>
            <div class="card">
                <div class="card-header header-theme"><?php echo $_smarty_tpl->tpl_vars['SETTINGS']->value;?>
</div>
                <div class="card-body">
                    <form action="" method="post">
                        

                        <?php if ((isset($_smarty_tpl->tpl_vars['TOPIC_UPDATES']->value))) {?>
                            <div class="form-group">
                                <label for="inputTopicUpdates"><?php echo $_smarty_tpl->tpl_vars['TOPIC_UPDATES']->value;?>
</label>
                                <select class="form-control" name="topicUpdates" id="inputTopicUpdates">
                                    <option value="1" <?php if (($_smarty_tpl->tpl_vars['TOPIC_UPDATES_ENABLED']->value == true)) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['ENABLED']->value;?>
</option>
                                    <option value="0" <?php if (($_smarty_tpl->tpl_vars['TOPIC_UPDATES_ENABLED']->value == false)) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['DISABLED']->value;?>

                                    </option>
                                </select>
                            </div>
                        <?php }?>

                        <div class="form-group">
                            <label for="inputLanguage"><?php echo $_smarty_tpl->tpl_vars['ACTIVE_LANGUAGE']->value;?>
</label>
                            <select name="language" id="inputLanguage" class="form-control">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LANGUAGES']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
" <?php if ($_smarty_tpl->tpl_vars['language']->value['active'] == true) {?> selected<?php }?>>
                                        <?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
</option>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </select>
                        </div>

                        <?php if ((isset($_smarty_tpl->tpl_vars['CUSTOM_AVATARS']->value))) {?>
                            <div class="form-group">
                                <label for="inputGravatar"><?php echo $_smarty_tpl->tpl_vars['GRAVATAR']->value;?>
</label>
                                <select class="form-control" name="gravatar" id="inputGravatar">
                                    <option value="0" <?php if (($_smarty_tpl->tpl_vars['GRAVATAR_VALUE']->value == '0')) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['DISABLED']->value;?>
</option>
                                    <option value="1" <?php if (($_smarty_tpl->tpl_vars['GRAVATAR_VALUE']->value == '1')) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['ENABLED']->value;?>
</option>
                                </select>
                            </div>
                        <?php }?>

                        <?php if (count($_smarty_tpl->tpl_vars['TEMPLATES']->value) > 1) {?>
                            <div class="form-group">
                                <label for="inputTemplate"><?php echo $_smarty_tpl->tpl_vars['ACTIVE_TEMPLATE']->value;?>
</label>
                                <select class="form-control" name="template" id="inputTemplate">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['TEMPLATES']->value, 'template');
$_smarty_tpl->tpl_vars['template']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['template']->value) {
$_smarty_tpl->tpl_vars['template']->do_else = false;
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['template']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['template']->value['active'] == true) {?> selected<?php }?>>
                                            <?php echo $_smarty_tpl->tpl_vars['template']->value['name'];?>
</option>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </select>
                            </div>
                        <?php }?>

                        <div class="form-group">
                            <label for="inputTimezone"><?php echo $_smarty_tpl->tpl_vars['TIMEZONE']->value;?>
</label>
                            <select name="timezone" class="form-control" id="inputTimezone">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['TIMEZONES']->value, 'ITEM', false, 'KEY');
$_smarty_tpl->tpl_vars['ITEM']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['KEY']->value => $_smarty_tpl->tpl_vars['ITEM']->value) {
$_smarty_tpl->tpl_vars['ITEM']->do_else = false;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['KEY']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['SELECTED_TIMEZONE']->value == $_smarty_tpl->tpl_vars['KEY']->value) {?> selected<?php }?>>
                                        (<?php echo $_smarty_tpl->tpl_vars['ITEM']->value['offset'];?>
) - <?php echo $_smarty_tpl->tpl_vars['ITEM']->value['name'];?>
 (<?php echo $_smarty_tpl->tpl_vars['ITEM']->value['time'];?>
)
                                    </option>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </select>
                        </div>
                        <?php if ((isset($_smarty_tpl->tpl_vars['AUTHME_SYNC_PASSWORD']->value))) {?>
                            <div class="form-group">
                                <label for="inputAuthmeSync">
                                    <?php echo $_smarty_tpl->tpl_vars['AUTHME_SYNC_PASSWORD']->value;?>

                                    <div class="ui icon label mini" data-toggle="tooltip" data-trigger="hover" data-original-title="<?php echo $_smarty_tpl->tpl_vars['AUTHME_SYNC_PASSWORD_INFO']->value;?>
">
                                        <i class="fa-solid fa-circle-question"></i>
                                    </div>
                                </label>
                                <select class="ui fluid dropdown" name="authmeSync" id="inputAuthmeSync">
                                    <option value="1" <?php if (($_smarty_tpl->tpl_vars['AUTHME_SYNC_PASSWORD_ENABLED']->value == true)) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['ENABLED']->value;?>
</option>
                                    <option value="0" <?php if (($_smarty_tpl->tpl_vars['AUTHME_SYNC_PASSWORD_ENABLED']->value == false)) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['DISABLED']->value;?>
</option>
                                </select>
                            </div>
                        <?php }?>
                        <?php if ((isset($_smarty_tpl->tpl_vars['PRIVATE_PROFILE']->value))) {?>
                            <div class="form-group">
                                <label for="inputPrivateProfile"><?php echo $_smarty_tpl->tpl_vars['PRIVATE_PROFILE']->value;?>
</label>
                                <select name="privateProfile" class="form-control" id="inputPrivateProfile">
                                    <option value="1" <?php if ($_smarty_tpl->tpl_vars['PRIVATE_PROFILE_ENABLED']->value == true) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['ENABLED']->value;?>

                                    </option>
                                    <option value="0" <?php if ($_smarty_tpl->tpl_vars['PRIVATE_PROFILE_ENABLED']->value == false) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['DISABLED']->value;?>

                                    </option>
                                </select>
                            </div>
                        <?php }?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PROFILE_FIELDS']->value, 'field', false, 'name');
$_smarty_tpl->tpl_vars['field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->do_else = false;
?>
                            <div class="form-group">
                                <?php if (!(isset($_smarty_tpl->tpl_vars['field']->value['disabled']))) {?>
                                    <label for="input<?php echo $_smarty_tpl->tpl_vars['field']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['field']->value['name'];?>
</label> <?php if ($_smarty_tpl->tpl_vars['field']->value['type'] == "text") {?>
                                        <input type="text" class="form-control" name="<?php if ($_smarty_tpl->tpl_vars['name']->value == 'nickname') {?>nickname<?php } else { ?>profile_fields[<?php echo $_smarty_tpl->tpl_vars['field']->value['id'];?>
]<?php }?>" id="input<?php echo $_smarty_tpl->tpl_vars['field']->value['id'];?>
"
                                        value="<?php echo $_smarty_tpl->tpl_vars['field']->value['value'];?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['field']->value['description'];?>
"> <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] == "textarea") {?>
                                        <textarea class="form-control" name="profile_fields[<?php echo $_smarty_tpl->tpl_vars['field']->value['id'];?>
]"
                                        id="input<?php echo $_smarty_tpl->tpl_vars['field']->value['id'];?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['field']->value['description'];?>
"><?php echo $_smarty_tpl->tpl_vars['field']->value['value'];?>
</textarea> <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] == "date") {?>
                                        <input name="profile_fields[<?php echo $_smarty_tpl->tpl_vars['field']->value['id'];?>
]" id="input<?php echo $_smarty_tpl->tpl_vars['field']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['field']->value['value'];?>
" type="date"
                                        class="form-control"> <?php }?>
                                <?php }?>
                            </div>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <?php if ((isset($_smarty_tpl->tpl_vars['SIGNATURE']->value))) {?>
                            <label for="inputSignature"><?php echo $_smarty_tpl->tpl_vars['SIGNATURE']->value;?>
</label>
                            <textarea style="width:100%" name="signature" id="inputSignature" rows="15"><?php echo $_smarty_tpl->tpl_vars['SIGNATURE_VALUE']->value;?>
</textarea><br />
                        <?php }?>
                        
                        <div class="form-group">
                            <input type="hidden" name="action" value="settings">
                            <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                            <button type="submit" class="btn btn-theme"><?php echo $_smarty_tpl->tpl_vars['SUBMIT']->value;?>
</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card">
                <div class="card-header header-theme"><?php echo $_smarty_tpl->tpl_vars['CHANGE_EMAIL_ADDRESS']->value;?>
</div>
                <div class="card-body">
                    <form action="" method="post" id="form-user-email">
                        <div class="form-group">
                            <label for="inputPassword"><?php echo $_smarty_tpl->tpl_vars['CURRENT_PASSWORD']->value;?>
</label>
                            <input type="password" name="password" id="inputPassword" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="inputEmail"><?php echo $_smarty_tpl->tpl_vars['EMAIL_ADDRESS']->value;?>
</label>
                            <input type="email" name="email" id="inputEmail" value="<?php echo $_smarty_tpl->tpl_vars['CURRENT_EMAIL']->value;?>
"
                                class="form-control">
                        </div>
                        <input type="hidden" name="action" value="email">
                        <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                        <button type="submit" class="btn btn-theme"><?php echo $_smarty_tpl->tpl_vars['SUBMIT']->value;?>
</button>
                    </form>
                </div>
            </div>
            <div class="card">
                <div class="card-header header-theme"><?php echo $_smarty_tpl->tpl_vars['CHANGE_PASSWORD']->value;?>
</div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="inputOldPassword"><?php echo $_smarty_tpl->tpl_vars['CURRENT_PASSWORD']->value;?>
</label>
                            <input type="password" name="old_password" id="inputOldPassword" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="inputNewPassword"><?php echo $_smarty_tpl->tpl_vars['NEW_PASSWORD']->value;?>
</label>
                            <input type="password" name="new_password" id="inputNewPassword" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="inputNewPasswordAgain"><?php echo $_smarty_tpl->tpl_vars['CONFIRM_NEW_PASSWORD']->value;?>
</label>
                            <input type="password" name="new_password_again" id="inputNewPasswordAgain"
                                class="form-control">
                        </div>

                        <input type="hidden" name="action" value="password">
                        <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                        <button type="submit" class="btn btn-theme"><?php echo $_smarty_tpl->tpl_vars['SUBMIT']->value;?>
</button>
                    </form>
                </div>
            </div>
            <div class="card">
                <div class="card-header header-theme"><?php echo $_smarty_tpl->tpl_vars['TWO_FACTOR_AUTH']->value;?>
</div>
                <div class="card-body">
                    
                    <?php if ((isset($_smarty_tpl->tpl_vars['ENABLE']->value))) {?>
                        <a class="btn btn-theme" href="<?php echo $_smarty_tpl->tpl_vars['ENABLE_LINK']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['ENABLE']->value;?>
</a>
                    <?php } elseif ((isset($_smarty_tpl->tpl_vars['FORCED']->value))) {?>
                        <button class="btn btn-secondary" disabled><?php echo $_smarty_tpl->tpl_vars['DISABLE']->value;?>
</button>
                    <?php } else { ?>
                        <form action="<?php echo $_smarty_tpl->tpl_vars['DISABLE_LINK']->value;?>
" method="post">
                            <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                            <input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['DISABLE']->value;?>
" class="btn btn-secondary">
                        </form>
                    <?php }?>
                    
                </div>
            </div>
            <?php if ((isset($_smarty_tpl->tpl_vars['CUSTOM_AVATARS']->value))) {?>
                <div class="card">
                    <div class="card-header header-theme"><?php echo $_smarty_tpl->tpl_vars['UPLOAD_NEW_PROFILE_IMAGE']->value;?>
</div>
                    <div class="card-body">
                        <form action="<?php echo $_smarty_tpl->tpl_vars['CUSTOM_AVATARS_SCRIPT']->value;?>
" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label class="btn btn-secondary">
                                    <?php echo $_smarty_tpl->tpl_vars['BROWSE']->value;?>
 <input type="file" name="file" hidden />
                                </label>
                            </div>
                            <div class="form-group">
                                <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                                <input type="hidden" name="type" value="avatar">
                                <button type="submit" class="btn btn-theme"><?php echo $_smarty_tpl->tpl_vars['SUBMIT']->value;?>
</button>
                            </div>
                        </form>
                    </div>
                </div>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['HAS_CUSTOM_AVATAR']->value) {?>
            <div class="card">
                <div class="card-header header-theme"><?php echo $_smarty_tpl->tpl_vars['REMOVE_AVATAR']->value;?>
</div>
                <div class="card-body">
                <form class="ui form" action="" method="post" id="form-reset-avatar">
                    <input type="hidden" name="action" value="reset_avatar">
                    <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                    <button type="submit" class="btn btn-secondary"><?php echo $_smarty_tpl->tpl_vars['REMOVE']->value;?>
</button>
                </form>
                </div>
            </div>
            <?php }?>
        </div>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
