<?php
/* Smarty version 4.3.1, created on 2023-06-01 08:30:08
  from '/home/u302265335/domains/rainbowcreation.net/public_html/custom/panel_templates/Default/members/member_lists.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6477f4a0a6fd25_09688371',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '75dd927198300f59639ade7940ea1f69447a67fa' => 
    array (
      0 => '/home/u302265335/domains/rainbowcreation.net/public_html/custom/panel_templates/Default/members/member_lists.tpl',
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
function content_6477f4a0a6fd25_09688371 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <h1 class="h3 mb-0 text-gray-800"><?php echo $_smarty_tpl->tpl_vars['MEMBER_LISTS']->value;?>
</h1>
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo $_smarty_tpl->tpl_vars['PANEL_INDEX']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['DASHBOARD']->value;?>
</a></li>
                        <li class="breadcrumb-item active"><?php echo $_smarty_tpl->tpl_vars['MEMBERS']->value;?>
</li>
                        <li class="breadcrumb-item active"><?php echo $_smarty_tpl->tpl_vars['MEMBER_LISTS']->value;?>
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
                                        <th><?php echo $_smarty_tpl->tpl_vars['NAME']->value;?>
</th>
                                        <th><?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
</th>
                                        <th><?php echo $_smarty_tpl->tpl_vars['ENABLED']->value;?>
</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MEMBER_LISTS_VALUES']->value, 'member_list');
$_smarty_tpl->tpl_vars['member_list']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['member_list']->value) {
$_smarty_tpl->tpl_vars['member_list']->do_else = false;
?>
                                    <tr>
                                        <td>
                                            <?php echo $_smarty_tpl->tpl_vars['member_list']->value->getFriendlyName();?>

                                        </td>
                                        <td>
                                            <?php echo $_smarty_tpl->tpl_vars['member_list']->value->getModule();?>

                                        </td>
                                        <td><?php if ($_smarty_tpl->tpl_vars['member_list']->value->isEnabled() == 1) {?><i
                                                    class="fa fa-check-circle text-success"></i><?php } else { ?><i
                                                    class="fa fa-times-circle text-danger"></i><?php }?></td>
                                        <td class="text-right">
                                            <form action="" method="post">
                                                <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                                                <input hidden name="list" value="<?php echo $_smarty_tpl->tpl_vars['member_list']->value->getName();?>
">
                                                <?php if ($_smarty_tpl->tpl_vars['member_list']->value->isEnabled() == 1) {?>
                                                    <button class="btn btn-sm btn-danger"><?php echo $_smarty_tpl->tpl_vars['DISABLE']->value;?>
</button>
                                                <?php } else { ?>
                                                    <button class="btn btn-sm btn-success"><?php echo $_smarty_tpl->tpl_vars['ENABLE']->value;?>
</button>
                                                <?php }?>
                                            </form>
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

</html>
<?php }
}
