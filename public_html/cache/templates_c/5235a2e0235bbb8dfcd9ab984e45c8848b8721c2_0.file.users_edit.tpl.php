<?php
/* Smarty version 4.3.1, created on 2023-06-01 08:55:30
  from '/home/u302265335/domains/rainbowcreation.net/public_html/custom/panel_templates/Default/core/users_edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6477fa926d0a26_03216351',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5235a2e0235bbb8dfcd9ab984e45c8848b8721c2' => 
    array (
      0 => '/home/u302265335/domains/rainbowcreation.net/public_html/custom/panel_templates/Default/core/users_edit.tpl',
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
function content_6477fa926d0a26_03216351 (Smarty_Internal_Template $_smarty_tpl) {
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
                        <h1 class="h3 mb-0 text-gray-800"><?php echo $_smarty_tpl->tpl_vars['USERS']->value;?>
</h1>
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?php echo $_smarty_tpl->tpl_vars['PANEL_INDEX']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['DASHBOARD']->value;?>
</a></li>
                            <li class="breadcrumb-item active"><?php echo $_smarty_tpl->tpl_vars['USER_MANAGEMENT']->value;?>
</li>
                            <li class="breadcrumb-item active"><?php echo $_smarty_tpl->tpl_vars['USERS']->value;?>
</li>
                        </ol>
                    </div>

                    <!-- Update Notification -->
                    <?php $_smarty_tpl->_subTemplateRender('file:includes/update.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                    <div class="card shadow mb-4">
                        <div class="card-body">

                            <div class="row">
                                <div class="col-md-9">
                                    <h5 style="margin-top: 7px; margin-bottom: 7px;"><?php echo $_smarty_tpl->tpl_vars['EDITING_USER']->value;?>
</h5>
                                </div>
                                <div class="col-md-3">
                                    <span class="float-md-right">
                                        <?php if ((isset($_smarty_tpl->tpl_vars['DELETE_USER']->value)) || (isset($_smarty_tpl->tpl_vars['RESEND_ACTIVATION_EMAIL']->value)) || (isset($_smarty_tpl->tpl_vars['VALIDATE_USER']->value))) {?>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-primary dropdown-toggle"
                                                data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false"><?php echo $_smarty_tpl->tpl_vars['ACTIONS']->value;?>
</button>
                                            <div class="dropdown-menu">
                                                <?php if ((isset($_smarty_tpl->tpl_vars['DELETE_USER']->value))) {?><a class="dropdown-item" href="#"
                                                    onclick="showDeleteModal()"><?php echo $_smarty_tpl->tpl_vars['DELETE_USER']->value;?>
</a><?php }?>
                                                <?php if ((isset($_smarty_tpl->tpl_vars['RESEND_ACTIVATION_EMAIL']->value))) {?><a class="dropdown-item"
                                                    href="<?php echo $_smarty_tpl->tpl_vars['RESEND_ACTIVATION_EMAIL_LINK']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['RESEND_ACTIVATION_EMAIL']->value;?>
</a><?php }?>
                                                <?php if ((isset($_smarty_tpl->tpl_vars['VALIDATE_USER']->value))) {?><a class="dropdown-item" href="#"
                                                    onclick="validateUser()"><?php echo $_smarty_tpl->tpl_vars['VALIDATE_USER']->value;?>
</a><?php }?>
                                                <?php if ((isset($_smarty_tpl->tpl_vars['CHANGE_PASSWORD']->value))) {?><a class="dropdown-item" href="#"
                                                    onclick="changePassword()"><?php echo $_smarty_tpl->tpl_vars['CHANGE_PASSWORD']->value;?>
</a> <?php }?>
                                            </div>
                                        </div>
                                        <?php }?>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['BACK_LINK']->value;?>
" class="btn btn-warning"><?php echo $_smarty_tpl->tpl_vars['BACK']->value;?>
</a>
                                    </span>
                                </div>
                            </div>
                            <hr />

                            <!-- Success and Error Alerts -->
                            <?php $_smarty_tpl->_subTemplateRender('file:includes/alerts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                            <?php if ((isset($_smarty_tpl->tpl_vars['WARNINGS']->value)) && count($_smarty_tpl->tpl_vars['WARNINGS']->value)) {?>
                            <div class="alert bg-warning text-white alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <h5><i class="icon fas fa-exclamation-triangle"></i> <?php echo $_smarty_tpl->tpl_vars['WARNINGS_TITLE']->value;?>
</h5>
                                <ul>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['WARNINGS']->value, 'warning');
$_smarty_tpl->tpl_vars['warning']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['warning']->value) {
$_smarty_tpl->tpl_vars['warning']->do_else = false;
?>
                                    <li><?php echo $_smarty_tpl->tpl_vars['warning']->value;?>
</li>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </ul>
                            </div>
                            <?php }?>

                            <form role="form" action="" method="post">
                                <div class="form-group">
                                    <label for="InputMCUsername"><?php echo $_smarty_tpl->tpl_vars['USERNAME']->value;?>
</label>
                                    <input type="text" name="username" class="form-control" id="InputMCUsername"
                                        placeholder="<?php echo $_smarty_tpl->tpl_vars['USERNAME']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['USERNAME_VALUE']->value;?>
">
                                </div>
                                <?php if ($_smarty_tpl->tpl_vars['DISPLAYNAMES']->value == true) {?>
                                    <div class="form-group">
                                        <label for="InputUsername"><?php echo $_smarty_tpl->tpl_vars['NICKNAME']->value;?>
</label>
                                        <input type="text" name="nickname" class="form-control" id="InputUsername"
                                            placeholder="<?php echo $_smarty_tpl->tpl_vars['NICKNAME']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['NICKNAME_VALUE']->value;?>
">
                                    </div>
                                <?php } else { ?>
                                    <input type="hidden" name="nickname" value="<?php echo $_smarty_tpl->tpl_vars['NICKNAME_VALUE']->value;?>
">
                                <?php }?>
                                <div class="form-group">
                                    <label for="InputEmail"><?php echo $_smarty_tpl->tpl_vars['EMAIL_ADDRESS']->value;?>
</label>
                                    <input type="email" name="email" class="form-control" id="InputEmail"
                                        placeholder="<?php echo $_smarty_tpl->tpl_vars['EMAIL_ADDRESS']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['EMAIL_ADDRESS_VALUE']->value;?>
">
                                </div>
                                <div class="form-group">
                                    <label for="InputTitle"><?php echo $_smarty_tpl->tpl_vars['USER_TITLE']->value;?>
</label>
                                    <input type="text" name="title" class="form-control" id="InputTitle"
                                        placeholder="<?php echo $_smarty_tpl->tpl_vars['USER_TITLE']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['USER_TITLE_VALUE']->value;?>
">
                                </div>
                                <?php if ($_smarty_tpl->tpl_vars['PRIVATE_PROFILE_ENABLED']->value == true) {?>
                                    <div class="form-group">
                                        <label for="inputPrivateProfile"><?php echo $_smarty_tpl->tpl_vars['PRIVATE_PROFILE']->value;?>
</label>
                                        <select name="privateProfile" class="form-control" id="inputPrivateProfile">
                                            <option value="1" <?php if ($_smarty_tpl->tpl_vars['PRIVATE_PROFILE_VALUE']->value == 1) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['ENABLED']->value;?>

                                            </option>
                                            <option value="0" <?php if ($_smarty_tpl->tpl_vars['PRIVATE_PROFILE_VALUE']->value == 0) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['DISABLED']->value;?>

                                            </option>
                                        </select>
                                    </div>
                                <?php } else { ?>
                                    <input type="hidden" name="privateProfile" value="0">
                                <?php }?>
                                <div class="form-group">
                                    <label for="inputLanguage"><?php echo $_smarty_tpl->tpl_vars['LANGUAGE']->value;?>
</label>
                                    <select name="language" class="form-control" id="inputLanguage">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LANGUAGES']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['language']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['language']->value['active']) {?> selected<?php }?>>
                                                <?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>

                                            </option>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </select>
                                </div>
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
" <?php if ($_smarty_tpl->tpl_vars['TIMEZONE_VALUE']->value == $_smarty_tpl->tpl_vars['KEY']->value) {?> selected<?php }?>>
                                                (<?php echo $_smarty_tpl->tpl_vars['ITEM']->value['offset'];?>
) <?php echo $_smarty_tpl->tpl_vars['ITEM']->value['name'];?>
 &middot; (<?php echo $_smarty_tpl->tpl_vars['ITEM']->value['time'];?>
)
                                            </option>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="inputTemplate"><?php echo $_smarty_tpl->tpl_vars['ACTIVE_TEMPLATE']->value;?>
</label>
                                    <select name="template" class="form-control" id="inputTemplate">
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
                                <div class="form-group">
                                    <label for="InputSignature"><?php echo $_smarty_tpl->tpl_vars['SIGNATURE']->value;?>
</label>
                                    <textarea style="width:100%" rows="10" name="signature"
                                        id="InputSignature"><?php echo $_smarty_tpl->tpl_vars['SIGNATURE_VALUE']->value;?>
</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="inputGroups"><?php echo $_smarty_tpl->tpl_vars['GROUPS']->value;?>
</label>
                                    <div
                                        class="card shadow <?php if (!(isset($_smarty_tpl->tpl_vars['CANT_EDIT_GROUP']->value))) {?>border-left-info<?php } else { ?>border-left-warning<?php }?>">
                                        <div class="card-body">
                                            <strong><?php echo $_smarty_tpl->tpl_vars['MAIN_GROUP_INFO']->value;?>
: </strong><?php echo $_smarty_tpl->tpl_vars['MAIN_GROUP']->value->name;?>
 <?php if ((isset($_smarty_tpl->tpl_vars['CANT_EDIT_GROUP']->value))) {?><i>(<?php echo $_smarty_tpl->tpl_vars['CANT_EDIT_GROUP']->value;?>
)</i><?php }?>
                                        </div>
                                    </div>
                                    <br />
                                    <select class="form-control" name="groups[]" id="inputGroups" multiple>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ALL_GROUPS']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
" <?php if (in_array($_smarty_tpl->tpl_vars['item']->value->id,$_smarty_tpl->tpl_vars['GROUPS_VALUE']->value)) {?>
                                            selected<?php }?>><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['item']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </select>
                                </div>
                                <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                                <input type="hidden" name="action" value="update">
                                <input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['SUBMIT']->value;?>
" class="btn btn-primary">
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

        <?php if ((isset($_smarty_tpl->tpl_vars['DELETE_USER']->value))) {?>
        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog">
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
                        <?php echo $_smarty_tpl->tpl_vars['CONFIRM_DELETE_USER']->value;?>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['NO']->value;?>
</button>
                        <form action="" method="post">
                            <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                            <input type="hidden" name="action" value="delete">
                            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['USER_ID']->value;?>
">
                            <input type="submit" class="btn btn-primary" value="<?php echo $_smarty_tpl->tpl_vars['YES']->value;?>
">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php }?>
        <?php if ((isset($_smarty_tpl->tpl_vars['CHANGE_PASSWORD']->value))) {?>
            <div class="modal fade" id="passwordModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title"><?php echo $_smarty_tpl->tpl_vars['CHANGE_PASSWORD']->value;?>
</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="" method="post">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="inputPassword"><?php echo $_smarty_tpl->tpl_vars['NEW_PASSWORD']->value;?>
</label>
                                    <input type="password" name="password" id="inputPassword" placeholder="<?php echo $_smarty_tpl->tpl_vars['PASSWORD']->value;?>
"
                                           autocomplete="off" tabindex="2" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputPasswordAgain"><?php echo $_smarty_tpl->tpl_vars['CONFIRM_NEW_PASSWORD']->value;?>
</label>
                                    <input type="password" name="password_again" id="inputPasswordAgain"
                                           placeholder="<?php echo $_smarty_tpl->tpl_vars['CONFIRM_PASSWORD']->value;?>
" autocomplete="off" tabindex="3" class="form-control">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                                <input type="hidden" name="action" value="change_password">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['BACK']->value;?>
</button>
                                <input type="submit" class="btn btn-primary" value="<?php echo $_smarty_tpl->tpl_vars['SUBMIT']->value;?>
">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        <?php }?>

        <!-- End Wrapper -->
    </div>

    <form style="display:none" action="<?php echo $_smarty_tpl->tpl_vars['VALIDATE_USER_LINK']->value;?>
" method="post" id="validateUserForm">
        <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
" />
    </form>

    <?php $_smarty_tpl->_subTemplateRender('file:scripts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php echo '<script'; ?>
 type="text/javascript">
        <?php if ((isset($_smarty_tpl->tpl_vars['DELETE_USER']->value))) {?>
            function showDeleteModal() {
                $('#deleteModal').modal().show();
            }
        <?php }?>

        <?php if ((isset($_smarty_tpl->tpl_vars['VALIDATE_USER']->value))) {?>
            function validateUser() {
                $('#validateUserForm').submit();
            }
        <?php }?>

        <?php if ((isset($_smarty_tpl->tpl_vars['CHANGE_PASSWORD']->value))) {?>
            function changePassword() {
                $('#passwordModal').modal().show();
            }
        <?php }?>

        $(document).ready(() => {
            $('#inputGroups').select2({ placeholder: "<?php echo $_smarty_tpl->tpl_vars['NO_ITEM_SELECTED']->value;?>
" });
        })
    <?php echo '</script'; ?>
>

</body>

</html>
<?php }
}
