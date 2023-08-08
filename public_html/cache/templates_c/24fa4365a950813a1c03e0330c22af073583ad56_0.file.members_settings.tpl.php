<?php
/* Smarty version 4.3.1, created on 2023-06-01 08:20:34
  from '/home/u302265335/domains/rainbowcreation.net/public_html/custom/panel_templates/Default/members/members_settings.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6477f262cba115_30243813',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '24fa4365a950813a1c03e0330c22af073583ad56' => 
    array (
      0 => '/home/u302265335/domains/rainbowcreation.net/public_html/custom/panel_templates/Default/members/members_settings.tpl',
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
function content_6477f262cba115_30243813 (Smarty_Internal_Template $_smarty_tpl) {
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
                        <h1 class="h3 mb-0 text-gray-800"><?php echo $_smarty_tpl->tpl_vars['SETTINGS']->value;?>
</h1>
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?php echo $_smarty_tpl->tpl_vars['PANEL_INDEX']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['DASHBOARD']->value;?>
</a></li>
                            <li class="breadcrumb-item active"><?php echo $_smarty_tpl->tpl_vars['MEMBERS']->value;?>
</li>
                            <li class="breadcrumb-item active"><?php echo $_smarty_tpl->tpl_vars['SETTINGS']->value;?>
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
                                    <label for="link_location"><?php echo $_smarty_tpl->tpl_vars['LINK_LOCATION']->value;?>
</label>
                                    <select class="form-control" id="link_location" name="link_location">
                                        <option value="1" <?php if ($_smarty_tpl->tpl_vars['LINK_LOCATION_VALUE']->value == 1) {?> selected<?php }?>>
                                            <?php echo $_smarty_tpl->tpl_vars['LINK_NAVBAR']->value;?>

                                        </option>
                                        <option value="2" <?php if ($_smarty_tpl->tpl_vars['LINK_LOCATION_VALUE']->value == 2) {?> selected<?php }?>>
                                            <?php echo $_smarty_tpl->tpl_vars['LINK_MORE']->value;?>

                                        </option>
                                        <option value="3" <?php if ($_smarty_tpl->tpl_vars['LINK_LOCATION_VALUE']->value == 3) {?> selected<?php }?>>
                                            <?php echo $_smarty_tpl->tpl_vars['LINK_FOOTER']->value;?>

                                        </option>
                                        <option value="4" <?php if ($_smarty_tpl->tpl_vars['LINK_LOCATION_VALUE']->value == 4) {?> selected<?php }?>>
                                            <?php echo $_smarty_tpl->tpl_vars['LINK_NONE']->value;?>

                                        </option>
                                    </select>
                                </div>

                                <div class="form-group custom-control custom-switch">
                                    <input type="hidden" name="action" value="toggle_hide_banned_users">
                                    <input id="inputToggleHideBannedUsers" name="hide_banned_users" type="checkbox" class="custom-control-input js-check-change" value="1" <?php if ($_smarty_tpl->tpl_vars['HIDE_BANNED_USERS_VALUE']->value == 1) {?> checked<?php }?> />
                                    <label for="inputToggleHideBannedUsers" class="custom-control-label">
                                        <?php echo $_smarty_tpl->tpl_vars['HIDE_BANNED_USERS']->value;?>

                                    </label>
                                </div>

                                <div class="form-group">
                                    <label for="groups"><?php echo $_smarty_tpl->tpl_vars['GROUPS']->value;?>
</label>
                                    <select name="groups[]" id="groups" class="form-control" multiple>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['GROUPS_ARRAY']->value, 'group');
$_smarty_tpl->tpl_vars['group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->do_else = false;
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['group']->value['id'];?>
" <?php if (in_array($_smarty_tpl->tpl_vars['group']->value['id'],$_smarty_tpl->tpl_vars['GROUPS_VALUE']->value)) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['group']->value['name'];?>
</option>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                                    <input type="submit" class="btn btn-primary" value="<?php echo $_smarty_tpl->tpl_vars['SUBMIT']->value;?>
" />
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

        <!-- End Wrapper -->
    </div>

    <?php $_smarty_tpl->_subTemplateRender('file:scripts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php echo '<script'; ?>
>
        $('#groups').select2({
            placeholder: "<?php echo $_smarty_tpl->tpl_vars['NO_ITEM_SELECTED']->value;?>
"
        });
    <?php echo '</script'; ?>
>

</body>

</html>
<?php }
}
