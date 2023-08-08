<?php
/* Smarty version 4.3.1, created on 2023-06-01 08:04:40
  from '/home/u302265335/domains/rainbowcreation.net/public_html/custom/panel_templates/Default/core/integrations.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6477eea8d2e627_75747422',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ae33ce04b22f9095f02ca92344bb975e3fe4a023' => 
    array (
      0 => '/home/u302265335/domains/rainbowcreation.net/public_html/custom/panel_templates/Default/core/integrations.tpl',
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
function content_6477eea8d2e627_75747422 (Smarty_Internal_Template $_smarty_tpl) {
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
                            <!-- Success and Error Alerts -->
                            <?php $_smarty_tpl->_subTemplateRender('file:includes/alerts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                            <div class="table-responsive">
                                <table class="table table-borderless table-striped">
                                    <thead>
                                        <tr>
                                            <th><?php echo $_smarty_tpl->tpl_vars['INTEGRATION']->value;?>
</th>
                                            <th><?php echo $_smarty_tpl->tpl_vars['ENABLED']->value;?>
</th>
                                            <th><?php echo $_smarty_tpl->tpl_vars['CAN_UNLINK']->value;?>
</th>
                                            <th><?php echo $_smarty_tpl->tpl_vars['REQUIRED']->value;?>
</th>
                                            <th></th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['INTEGRATIONS_LIST']->value, 'integration', false, 'integration_name');
$_smarty_tpl->tpl_vars['integration']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['integration_name']->value => $_smarty_tpl->tpl_vars['integration']->value) {
$_smarty_tpl->tpl_vars['integration']->do_else = false;
?>
                                        <tr>
                                            <td>
                                                <?php if ($_smarty_tpl->tpl_vars['integration']->value['icon']) {?>
                                                <i class="<?php echo $_smarty_tpl->tpl_vars['integration']->value['icon'];?>
 fa-lg align-middle">&nbsp;</i>
                                                <?php }?>
                                                <?php echo $_smarty_tpl->tpl_vars['integration']->value['name'];?>

                                            </td>
                                            <td><?php if ($_smarty_tpl->tpl_vars['integration']->value['enabled'] == 1) {?><i
                                                    class="fa fa-check-circle text-success"></i><?php } else { ?><i
                                                    class="fa fa-times-circle text-danger"></i><?php }?></td>
                                            <td><?php if ($_smarty_tpl->tpl_vars['integration']->value['can_unlink'] == 1) {?><i
                                                    class="fa fa-check-circle text-success"></i><?php } else { ?><i
                                                    class="fa fa-times-circle text-danger"></i><?php }?></td>
                                            <td><?php if ($_smarty_tpl->tpl_vars['integration']->value['required'] == 1) {?><i
                                                    class="fa fa-check-circle text-success"></i><?php } else { ?><i
                                                    class="fa fa-times-circle text-danger"></i><?php }?></td>
                                            <td class="text-right">
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['integration']->value['edit_link'];?>
"
                                                    class="btn btn-warning btn-sm"><?php echo $_smarty_tpl->tpl_vars['EDIT']->value;?>
</a>
                                            </td>
                                        </tr>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </tbody>
                                </table>
                            </div>

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
