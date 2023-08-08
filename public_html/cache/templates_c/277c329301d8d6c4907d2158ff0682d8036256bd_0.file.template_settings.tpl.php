<?php
/* Smarty version 4.3.1, created on 2023-06-01 07:53:34
  from '/home/u302265335/domains/rainbowcreation.net/public_html/custom/panel_templates/Default/core/template_settings.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6477ec0ea612c9_49355132',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '277c329301d8d6c4907d2158ff0682d8036256bd' => 
    array (
      0 => '/home/u302265335/domains/rainbowcreation.net/public_html/custom/panel_templates/Default/core/template_settings.tpl',
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
function content_6477ec0ea612c9_49355132 (Smarty_Internal_Template $_smarty_tpl) {
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
                        <h1 class="h3 mb-0 text-gray-800"><?php echo $_smarty_tpl->tpl_vars['TEMPLATES']->value;?>
</h1>
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?php echo $_smarty_tpl->tpl_vars['PANEL_INDEX']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['DASHBOARD']->value;?>
</a></li>
                            <li class="breadcrumb-item active"><?php echo $_smarty_tpl->tpl_vars['LAYOUT']->value;?>
</li>
                            <li class="breadcrumb-item active"><?php echo $_smarty_tpl->tpl_vars['TEMPLATES']->value;?>
</li>
                        </ol>
                    </div>

                    <!-- Update Notification -->
                    <?php $_smarty_tpl->_subTemplateRender('file:includes/update.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                    <div class="card shadow mb-4">
                        <div class="card-body">

                            <div class="row" style="margin-bottom: 15px;">
                                <div class="col-md-9">
                                    <h5 style="margin-top: 7px; margin-bottom: 7px;"><?php echo $_smarty_tpl->tpl_vars['EDITING_TEMPLATE']->value;?>
</h5>
                                </div>
                                <div class="col-md-3">
                                    <span class="float-md-right">
                                        <?php if ($_smarty_tpl->tpl_vars['PERMISSIONS_LINK']->value) {?><a class="btn btn-info"
                                            href="<?php echo $_smarty_tpl->tpl_vars['PERMISSIONS_LINK']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['PERMISSIONS']->value;?>
</a><?php }?>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['BACK_LINK']->value;?>
" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['BACK']->value;?>
</a>
                                    </span>
                                </div>
                            </div>
                            <hr />

                            <!-- Success and Error Alerts -->
                            <?php $_smarty_tpl->_subTemplateRender('file:includes/alerts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                            <?php if ((isset($_smarty_tpl->tpl_vars['SETTINGS_TEMPLATE']->value))) {?>
                            <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['SETTINGS_TEMPLATE']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                            <?php }?>

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

</body>

</html><?php }
}
