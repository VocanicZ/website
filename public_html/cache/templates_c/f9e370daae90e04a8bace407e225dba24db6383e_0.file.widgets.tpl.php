<?php
/* Smarty version 4.3.1, created on 2023-06-01 08:21:20
  from '/home/u302265335/domains/rainbowcreation.net/public_html/custom/panel_templates/Default/core/widgets.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6477f2902d2169_68027211',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f9e370daae90e04a8bace407e225dba24db6383e' => 
    array (
      0 => '/home/u302265335/domains/rainbowcreation.net/public_html/custom/panel_templates/Default/core/widgets.tpl',
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
function content_6477f2902d2169_68027211 (Smarty_Internal_Template $_smarty_tpl) {
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
                        <h1 class="h3 mb-0 text-gray-800"><?php echo $_smarty_tpl->tpl_vars['WIDGETS']->value;?>
</h1>
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?php echo $_smarty_tpl->tpl_vars['PANEL_INDEX']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['DASHBOARD']->value;?>
</a></li>
                            <li class="breadcrumb-item active"><?php echo $_smarty_tpl->tpl_vars['LAYOUT']->value;?>
</li>
                            <li class="breadcrumb-item active"><?php echo $_smarty_tpl->tpl_vars['WIDGETS']->value;?>
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

                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['WIDGETS_LIST']->value, 'widget', false, NULL, 'widget_list', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['widget']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['widget']->value) {
$_smarty_tpl->tpl_vars['widget']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_widget_list']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_widget_list']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_widget_list']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_widget_list']->value['total'];
?>
                            <div class="row">
                                <div class="col-md-9">
                                    <strong><?php echo $_smarty_tpl->tpl_vars['widget']->value['name'];?>
</strong> <small><?php echo $_smarty_tpl->tpl_vars['widget']->value['module'];?>
</small>
                                    <br />
                                    <small><?php echo $_smarty_tpl->tpl_vars['widget']->value['description'];?>
</small>
                                </div>
                                <div class="col-md-3">
                                    <div class="float-md-right">
                                        <?php if ($_smarty_tpl->tpl_vars['widget']->value['enabled']) {?>
                                        <form action="<?php echo $_smarty_tpl->tpl_vars['widget']->value['disable_link'];?>
" method="post" style="display: inline">
                                            <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
" />
                                            <input type="submit" class="btn btn-danger" value="<?php echo $_smarty_tpl->tpl_vars['DISABLE']->value;?>
">
                                        </form>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['widget']->value['settings_link'];?>
" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['EDIT']->value;?>
</a>
                                        <?php } else { ?>
                                        <form action="<?php echo $_smarty_tpl->tpl_vars['widget']->value['enable_link'];?>
" method="post" style="display: inline">
                                            <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
" />
                                            <input type="submit" class="btn btn-success" value="<?php echo $_smarty_tpl->tpl_vars['ENABLE']->value;?>
">
                                        </form>
                                        <?php }?>
                                    </div>
                                </div>
                            </div>
                            <?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_widget_list']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_widget_list']->value['last'] : null)) {?>
                            <hr />
                            <?php }?>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

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
