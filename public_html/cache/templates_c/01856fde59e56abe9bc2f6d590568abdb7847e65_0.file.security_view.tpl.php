<?php
/* Smarty version 4.3.1, created on 2023-06-01 08:11:40
  from '/home/u302265335/domains/rainbowcreation.net/public_html/custom/panel_templates/Default/core/security_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6477f04c9430b8_63605397',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '01856fde59e56abe9bc2f6d590568abdb7847e65' => 
    array (
      0 => '/home/u302265335/domains/rainbowcreation.net/public_html/custom/panel_templates/Default/core/security_view.tpl',
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
function content_6477f04c9430b8_63605397 (Smarty_Internal_Template $_smarty_tpl) {
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
                        <h1 class="h3 mb-0 text-gray-800"><?php echo $_smarty_tpl->tpl_vars['SECURITY']->value;?>
</h1>
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?php echo $_smarty_tpl->tpl_vars['PANEL_INDEX']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['DASHBOARD']->value;?>
</a></li>
                            <li class="breadcrumb-item active"><?php echo $_smarty_tpl->tpl_vars['SECURITY']->value;?>
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
                                    <h5 style="margin-top: 7px; margin-bottom: 7px;"><?php echo $_smarty_tpl->tpl_vars['LOG_TITLE']->value;?>
</h5>
                                </div>
                                <div class="col-md-3">
                                    <span class="float-md-right"><a href="<?php echo $_smarty_tpl->tpl_vars['BACK_LINK']->value;?>
"
                                            class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['BACK']->value;?>
</a></span>
                                </div>
                            </div>
                            <hr />

                            <!-- Success and Error Alerts -->
                            <?php $_smarty_tpl->_subTemplateRender('file:includes/alerts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                            <table class="table table-bordered table-hover dataTable">
                                <thead>
                                    <tr>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['COL_TITLES']->value, 'col_title');
$_smarty_tpl->tpl_vars['col_title']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['col_title']->value) {
$_smarty_tpl->tpl_vars['col_title']->do_else = false;
?>
                                        <td><?php echo $_smarty_tpl->tpl_vars['col_title']->value;?>
</td>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ROWS']->value, 'row');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
                                    <tr>
                                        <?php $_smarty_tpl->_assignInScope('i', 0);?>
                                        <?php
 while ($_smarty_tpl->tpl_vars['i']->value < count($_smarty_tpl->tpl_vars['row']->value)) {?> <td<?php if ((isset($_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['i']->value]['order']))) {?>
                                            data-order="<?php echo $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['i']->value]['order'];?>
" <?php }?>>
                                            <?php echo $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['i']->value]['content'];?>

                                            </td>
                                            <?php $_smarty_tpl->_assignInScope('i', $_smarty_tpl->tpl_vars['i']->value+1);?>
                                            <?php }?>

                                    </tr>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </tbody>
                            </table>
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
