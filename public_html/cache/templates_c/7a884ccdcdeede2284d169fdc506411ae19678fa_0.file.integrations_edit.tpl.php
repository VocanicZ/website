<?php
/* Smarty version 4.3.1, created on 2023-06-01 08:25:43
  from '/home/u302265335/domains/rainbowcreation.net/public_html/custom/panel_templates/Default/core/integrations_edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6477f3974a8a44_24700201',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7a884ccdcdeede2284d169fdc506411ae19678fa' => 
    array (
      0 => '/home/u302265335/domains/rainbowcreation.net/public_html/custom/panel_templates/Default/core/integrations_edit.tpl',
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
function content_6477f3974a8a44_24700201 (Smarty_Internal_Template $_smarty_tpl) {
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
                        <h1 class="h3 mb-0 text-gray-800"><?php echo $_smarty_tpl->tpl_vars['INTEGRATIONS']->value;?>
</h1>
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?php echo $_smarty_tpl->tpl_vars['PANEL_INDEX']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['DASHBOARD']->value;?>
</a></li>
                            <li class="breadcrumb-item active"><?php echo $_smarty_tpl->tpl_vars['INTEGRATIONS']->value;?>
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
                                    <h5 style="margin-top: 7px; margin-bottom: 7px;"><?php echo $_smarty_tpl->tpl_vars['EDITING_INTEGRATION']->value;?>
</h5>
                                </div>
                                <div class="col-md-3">
                                    <span class="float-md-right">
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

                            <form role="form" action="" method="post">
                                <div class="form-group custom-control custom-switch">
                                    <input type="hidden" name="enabled" value="0">
                                    <input type="checkbox" name="enabled" class="custom-control-input" id="InputEnabled"
                                        value="1" <?php if ($_smarty_tpl->tpl_vars['ENABLED_VALUE']->value) {?> checked<?php }?>>
                                    <label class="custom-control-label" for="InputEnabled"><?php echo $_smarty_tpl->tpl_vars['ENABLED']->value;?>
</label>
                                </div>
                                <div class="form-group custom-control custom-switch">
                                    <input type="hidden" name="can_unlink" value="0">
                                    <input type="checkbox" name="can_unlink" class="custom-control-input"
                                        id="InputCanUnlink" value="1" <?php if ($_smarty_tpl->tpl_vars['CAN_UNLINK_VALUE']->value) {?> checked<?php }?>>
                                    <label class="custom-control-label"
                                        for="InputCanUnlink"><?php echo $_smarty_tpl->tpl_vars['CAN_UNLINK_INTEGRATION']->value;?>
</label>
                                </div>
                                <div class="form-group custom-control custom-switch">
                                    <input type="hidden" name="required" value="0">
                                    <input type="checkbox" name="required" class="custom-control-input"
                                        id="InputRequired" value="1" <?php if ($_smarty_tpl->tpl_vars['REQUIRED_VALUE']->value) {?> checked<?php }?>>
                                    <label class="custom-control-label"
                                        for="InputRequired"><?php echo $_smarty_tpl->tpl_vars['REQUIRE_INTEGRATION']->value;?>
</label>
                                </div>
                                <div class="form-group">
                                    <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                                    <input type="hidden" name="action" value="general_settings">
                                    <input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['SUBMIT']->value;?>
" class="btn btn-primary">
                                </div>
                            </form>
                        </div>
                    </div>

                    <?php if ((isset($_smarty_tpl->tpl_vars['SETTINGS_TEMPLATE']->value))) {?>
                        <div class="card shadow mb-4">
                            <div class="card-body">
                                <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['SETTINGS_TEMPLATE']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                            </div>
                        </div>
                    <?php }?>

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

</body>

</html><?php }
}
