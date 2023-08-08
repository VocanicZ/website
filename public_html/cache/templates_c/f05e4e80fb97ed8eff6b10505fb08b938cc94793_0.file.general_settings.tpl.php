<?php
/* Smarty version 4.3.1, created on 2023-06-01 07:54:06
  from '/home/u302265335/domains/rainbowcreation.net/public_html/custom/panel_templates/Default/core/general_settings.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6477ec2e784597_21671265',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f05e4e80fb97ed8eff6b10505fb08b938cc94793' => 
    array (
      0 => '/home/u302265335/domains/rainbowcreation.net/public_html/custom/panel_templates/Default/core/general_settings.tpl',
      1 => 1685579651,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:sidebar.tpl' => 1,
    'file:navbar.tpl' => 1,
    'file:includes/update.tpl' => 1,
    'file:includes/alerts.tpl' => 1,
    'file:footer.tpl' => 1,
    'file:scripts.tpl' => 1,
  ),
),false)) {
function content_6477ec2e784597_21671265 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body id="page-top">

    <!-- Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php $_smarty_tpl->_subTemplateRender('file:sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main content -->
            <div id="content">

                <!-- Topbar -->
                <?php $_smarty_tpl->_subTemplateRender('file:navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800"><?php echo $_smarty_tpl->tpl_vars['GENERAL_SETTINGS']->value;?>
</h1>
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?php echo $_smarty_tpl->tpl_vars['PANEL_INDEX']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['DASHBOARD']->value;?>
</a></li>
                            <li class="breadcrumb-item active"><?php echo $_smarty_tpl->tpl_vars['CONFIGURATION']->value;?>
</li>
                            <li class="breadcrumb-item active"><?php echo $_smarty_tpl->tpl_vars['GENERAL_SETTINGS']->value;?>
</li>
                        </ol>
                    </div>

                    <!-- Update Notification -->
                    <?php $_smarty_tpl->_subTemplateRender('file:includes/update.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <!-- Success and Error Alerts -->
                            <?php $_smarty_tpl->_subTemplateRender('file:includes/alerts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                            <form action="" method="post">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="inputSiteName"><?php echo $_smarty_tpl->tpl_vars['SITE_NAME_LABEL']->value;?>
</label>
                                            <input type="text" class="form-control" id="inputSiteName" name="sitename"
                                                placeholder="<?php echo $_smarty_tpl->tpl_vars['SITE_NAME_LABEL']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['SITE_NAME']->value;?>
">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputContactEmail"><?php echo $_smarty_tpl->tpl_vars['CONTACT_EMAIL_ADDRESS']->value;?>
</label>
                                            <input type="email" class="form-control" id="inputContactEmail"
                                                name="contact_email" placeholder="<?php echo $_smarty_tpl->tpl_vars['CONTACT_EMAIL_ADDRESS']->value;?>
"
                                                value="<?php echo $_smarty_tpl->tpl_vars['CONTACT_EMAIL_ADDRESS_VALUE']->value;?>
">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="inputDefaultLanguage"><?php echo $_smarty_tpl->tpl_vars['DEFAULT_LANGUAGE']->value;?>
</label> <span
                                                class="badge badge-info"><i class="fas fa-question-circle"
                                                    data-container="body" data-toggle="popover" data-placement="top"
                                                    title="<?php echo $_smarty_tpl->tpl_vars['INFO']->value;?>
" data-content="<?php echo $_smarty_tpl->tpl_vars['DEFAULT_LANGUAGE_HELP']->value;?>
"></i></span>
                                            <div class="input-group">
                                                <select name="language" class="form-control" id="inputDefaultLanguage">
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['DEFAULT_LANGUAGE_VALUES']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value->is_default == 1) {?>
                                                        selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['item']->value->name;?>
</option>
                                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                </select>
                                                <div class="input-group-append">
                                                    <a class="btn btn-default" data-toggle="tooltip"
                                                        title="<?php echo $_smarty_tpl->tpl_vars['INSTALL_LANGUAGE']->value;?>
" href="<?php echo $_smarty_tpl->tpl_vars['INSTALL_LANGUAGE_LINK']->value;?>
">
                                                        <i class="fas fa-plus-circle"></i>
                                                    </a>
                                                    <a class="btn btn-default" data-toggle="tooltip"
                                                        title="<?php echo $_smarty_tpl->tpl_vars['UPDATE_USER_LANGUAGES']->value;?>
" onclick="showLanguageModal()">
                                                        <i class="fas fa-upload"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputDefaultTimezone"><?php echo $_smarty_tpl->tpl_vars['DEFAULT_TIMEZONE']->value;?>
</label>
                                            <select name="timezone" class="form-control" id="inputDefaultTimezone">
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['DEFAULT_TIMEZONE_LIST']->value, 'item', false, 'key');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['DEFAULT_TIMEZONE_VALUE']->value == $_smarty_tpl->tpl_vars['key']->value) {?>
                                                    selected<?php }?>>
                                                    (<?php echo $_smarty_tpl->tpl_vars['item']->value['offset'];?>
) - <?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
 (<?php echo $_smarty_tpl->tpl_vars['item']->value['time'];?>
)
                                                </option>
                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="inputHomepage"><?php echo $_smarty_tpl->tpl_vars['HOMEPAGE_TYPE']->value;?>
</label>
                                            <select name="homepage" class="form-control" id="inputHomepage">
                                                <option value="news" <?php if ($_smarty_tpl->tpl_vars['HOMEPAGE_VALUE']->value == 'news') {?> selected<?php }?>>
                                                    <?php echo $_smarty_tpl->tpl_vars['HOMEPAGE_NEWS']->value;?>
</option>
                                                <option value="custom" <?php if ($_smarty_tpl->tpl_vars['HOMEPAGE_VALUE']->value == 'custom') {?> selected<?php }?>>
                                                    <?php echo $_smarty_tpl->tpl_vars['HOMEPAGE_CUSTOM']->value;?>
</option>
                                                <option value="portal" <?php if ($_smarty_tpl->tpl_vars['HOMEPAGE_VALUE']->value == 'portal') {?> selected<?php }?>>
                                                    <?php echo $_smarty_tpl->tpl_vars['HOMEPAGE_PORTAL']->value;?>
</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputLoginMethod"><?php echo $_smarty_tpl->tpl_vars['LOGIN_METHOD']->value;?>
</label>
                                            <select name="login_method" class="form-control" id="inputLoginMethod">
                                                <option value="email" <?php if ($_smarty_tpl->tpl_vars['LOGIN_METHOD_VALUE']->value == "email") {?>
                                                    selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['EMAIL']->value;?>
</option>
                                                <option value="username" <?php if ($_smarty_tpl->tpl_vars['LOGIN_METHOD_VALUE']->value == "username") {?>
                                                    selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['USERNAME']->value;?>
</option>
                                                <option value="email_or_username" <?php if ($_smarty_tpl->tpl_vars['LOGIN_METHOD_VALUE']->value == "email_or_username") {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['EMAIL_OR_USERNAME']->value;?>
</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="inputFriendlyURL"><?php echo $_smarty_tpl->tpl_vars['USE_FRIENDLY_URLS']->value;?>
</label>
                                            <span class="badge badge-info"><i class="fas fa-question-circle"
                                                    data-container="body" data-toggle="popover" data-placement="top"
                                                    title="<?php echo $_smarty_tpl->tpl_vars['INFO']->value;?>
" data-content="<?php echo $_smarty_tpl->tpl_vars['USE_FRIENDLY_URLS_HELP']->value;?>
"></i></span>
                                            <select name="friendlyURL" class="form-control" id="inputFriendlyURL">
                                                <option value="true" <?php if ($_smarty_tpl->tpl_vars['USE_FRIENDLY_URLS_VALUE']->value) {?> selected<?php }?>>
                                                    <?php echo $_smarty_tpl->tpl_vars['ENABLED']->value;?>
</option>
                                                <option value="false" <?php if (!$_smarty_tpl->tpl_vars['USE_FRIENDLY_URLS_VALUE']->value) {?> selected<?php }?>>
                                                    <?php echo $_smarty_tpl->tpl_vars['DISABLED']->value;?>
</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputPrivateProfile"><?php echo $_smarty_tpl->tpl_vars['PRIVATE_PROFILES']->value;?>
</label>
                                            <select name="privateProfile" class="form-control" id="inputPrivateProfile">
                                                <option value="1" <?php if ($_smarty_tpl->tpl_vars['PRIVATE_PROFILES_VALUE']->value) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['ENABLED']->value;?>

                                                </option>
                                                <option value="0" <?php if (!$_smarty_tpl->tpl_vars['PRIVATE_PROFILES_VALUE']->value) {?> selected<?php }?>>
                                                    <?php echo $_smarty_tpl->tpl_vars['DISABLED']->value;?>
</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="inputForceHTTPS"><?php echo $_smarty_tpl->tpl_vars['FORCE_HTTPS']->value;?>
</label>
                                            <span class="badge badge-info"><i class="fas fa-question-circle"
                                                    data-container="body" data-toggle="popover" data-placement="top"
                                                    title="<?php echo $_smarty_tpl->tpl_vars['INFO']->value;?>
" data-content="<?php echo $_smarty_tpl->tpl_vars['FORCE_HTTPS_HELP']->value;?>
"></i></span>
                                            <select name="forceHTTPS" class="form-control" id="inputForceHTTPS">
                                                <option value="true" <?php if ($_smarty_tpl->tpl_vars['FORCE_HTTPS_VALUE']->value) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['ENABLED']->value;?>

                                                </option>
                                                <option value="false" <?php if (!$_smarty_tpl->tpl_vars['FORCE_HTTPS_VALUE']->value) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['DISABLED']->value;?>

                                                </option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputForceWWW"><?php echo $_smarty_tpl->tpl_vars['FORCE_WWW']->value;?>
</label>
                                            <select name="forceWWW" class="form-control" id="inputForceWWW">
                                                <option value="true" <?php if ($_smarty_tpl->tpl_vars['FORCE_WWW_VALUE']->value) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['ENABLED']->value;?>

                                                </option>
                                                <option value="false" <?php if (!$_smarty_tpl->tpl_vars['FORCE_WWW_VALUE']->value) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['DISABLED']->value;?>

                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="inputEnableNicknames"><?php echo $_smarty_tpl->tpl_vars['ENABLE_NICKNAMES']->value;?>
</label>
                                            <select name="displaynames" class="form-control" id="inputEnableNicknames">
                                                <option value="true" <?php if ($_smarty_tpl->tpl_vars['ENABLE_NICKNAMES_VALUE']->value == "1") {?>
                                                    selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['ENABLED']->value;?>
</option>
                                                <option value="false" <?php if ($_smarty_tpl->tpl_vars['ENABLE_NICKNAMES_VALUE']->value == "0") {?>
                                                    selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['DISABLED']->value;?>
</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputEmojiStyle"><?php echo $_smarty_tpl->tpl_vars['EMOJI_STYLE']->value;?>
</label>
                                            <span class="badge badge-info">
                                                <i class="fas fa-question-circle"
                                                   data-container="body" data-toggle="popover" data-placement="top"
                                                   title="<?php echo $_smarty_tpl->tpl_vars['INFO']->value;?>
" data-content='<?php echo $_smarty_tpl->tpl_vars['EMOJI_STYLE_HELP']->value;?>
'></i>
                                            </span>
                                            <select name="emoji_style" class="form-control" id="inputEmojiStyle">
                                                <option value="native" <?php if ($_smarty_tpl->tpl_vars['EMOJI_STYLE_VALUE']->value == "native") {?>selected<?php }?>>
                                                    <?php echo $_smarty_tpl->tpl_vars['NATIVE']->value;?>

                                                </option>
                                                <option value="twemoji" <?php if ($_smarty_tpl->tpl_vars['EMOJI_STYLE_VALUE']->value == "twemoji") {?>selected<?php }?>>
                                                    <?php echo $_smarty_tpl->tpl_vars['TWEMOJI']->value;?>

                                                </option>
                                                <option value="joypixels" <?php if ($_smarty_tpl->tpl_vars['EMOJI_STYLE_VALUE']->value == "joypixels") {?>selected<?php }?>>
                                                    <?php echo $_smarty_tpl->tpl_vars['JOYPIXELS']->value;?>

                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="inputAutoLanguage"><?php echo $_smarty_tpl->tpl_vars['ENABLE_AUTO_LANGUAGE']->value;?>
</label>
                                            <span class="badge badge-info"><i class="fas fa-question-circle"
                                                                              data-container="body" data-toggle="popover" data-placement="top"
                                                                              title="<?php echo $_smarty_tpl->tpl_vars['INFO']->value;?>
" data-content="<?php echo $_smarty_tpl->tpl_vars['AUTO_LANGUAGE_HELP']->value;?>
"></i></span>
                                            <select name="auto_language" class="form-control" id="inputAutoLanguage">
                                                <option value="true" <?php if ($_smarty_tpl->tpl_vars['AUTO_LANGUAGE_VALUE']->value) {?> selected<?php }?>>
                                                    <?php echo $_smarty_tpl->tpl_vars['ENABLED']->value;?>

                                                </option>
                                                <option value="false" <?php if (!$_smarty_tpl->tpl_vars['AUTO_LANGUAGE_VALUE']->value) {?> selected<?php }?>>
                                                    <?php echo $_smarty_tpl->tpl_vars['DISABLED']->value;?>

                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                                    <input type="submit" class="btn btn-primary" value="<?php echo $_smarty_tpl->tpl_vars['SUBMIT']->value;?>
">
                                </div>
                            </form>

                        </div>
                    </div>

                    <!-- Spacing -->
                    <div style="height:1rem;"></div>

                    <!-- End Page Content -->
                </div>

                <!-- End Main Content -->
            </div>

            <?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <!-- End Content Wrapper -->
        </div>

        <!-- User language modal -->
        <div class="modal fade" id="languageModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title"><?php echo $_smarty_tpl->tpl_vars['ARE_YOU_SURE']->value;?>
</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <?php echo $_smarty_tpl->tpl_vars['UPDATE_USER_LANGUAGES_INFO']->value;?>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['NO']->value;?>
</button>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['UPDATE_USER_LANGUAGES_LINK']->value;?>
" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['YES']->value;?>
</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- End Wrapper -->
    </div>

    <?php $_smarty_tpl->_subTemplateRender('file:scripts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php echo '<script'; ?>
 type="text/javascript">
        function showLanguageModal() {
            $('#languageModal').modal().show();
        }
    <?php echo '</script'; ?>
>

</body>

</html>
<?php }
}
