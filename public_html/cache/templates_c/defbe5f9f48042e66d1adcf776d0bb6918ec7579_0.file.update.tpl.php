<?php
/* Smarty version 4.3.1, created on 2023-06-01 07:40:48
  from '/home/u302265335/domains/rainbowcreation.net/public_html/custom/panel_templates/Default/core/update.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6477e91039f6f6_13088896',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'defbe5f9f48042e66d1adcf776d0bb6918ec7579' => 
    array (
      0 => '/home/u302265335/domains/rainbowcreation.net/public_html/custom/panel_templates/Default/core/update.tpl',
      1 => 1685579651,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:sidebar.tpl' => 1,
    'file:navbar.tpl' => 1,
    'file:includes/alerts.tpl' => 1,
    'file:footer.tpl' => 1,
    'file:scripts.tpl' => 1,
  ),
),false)) {
function content_6477e91039f6f6_13088896 (Smarty_Internal_Template $_smarty_tpl) {
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
                        <h1 class="h3 mb-0 text-gray-800"><?php echo $_smarty_tpl->tpl_vars['UPDATE']->value;?>
</h1>
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?php echo $_smarty_tpl->tpl_vars['PANEL_INDEX']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['DASHBOARD']->value;?>
</a></li>
                            <li class="breadcrumb-item active"><?php echo $_smarty_tpl->tpl_vars['UPDATE']->value;?>
</li>
                        </ol>
                    </div>

                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <!-- Success and Error Alerts -->
                            <?php $_smarty_tpl->_subTemplateRender('file:includes/alerts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                            <?php if ((isset($_smarty_tpl->tpl_vars['PHP_WARNING']->value))) {?>
                                <div class="alert bg-danger text-white"><?php echo $_smarty_tpl->tpl_vars['PHP_WARNING']->value;?>
</div>
                            <?php }?>

                            <?php if (!(isset($_smarty_tpl->tpl_vars['PREVENT_UPGRADE']->value))) {?>
                                <?php if ((isset($_smarty_tpl->tpl_vars['NEW_UPDATE']->value))) {?>
                                    <div class="alert <?php if ($_smarty_tpl->tpl_vars['NEW_UPDATE_URGENT']->value == true) {?>bg-danger<?php } else { ?>bg-primary<?php }?> text-white">
                                        <?php echo $_smarty_tpl->tpl_vars['NEW_UPDATE']->value;?>

                                        <hr />
                                        <?php echo $_smarty_tpl->tpl_vars['CURRENT_VERSION']->value;?>

                                        <br />
                                        <?php echo $_smarty_tpl->tpl_vars['NEW_VERSION']->value;?>

                                    </div>
                                    <h4><?php echo $_smarty_tpl->tpl_vars['INSTRUCTIONS']->value;?>
</h4>
                                    <p><?php echo $_smarty_tpl->tpl_vars['INSTRUCTIONS_VALUE']->value;?>
</p>
                                    <hr />
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['DOWNLOAD_LINK']->value;?>
" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['DOWNLOAD']->value;?>
</a>
                                    <button class="btn btn-primary" type="button" onclick="showConfirmModal()"><?php echo $_smarty_tpl->tpl_vars['UPDATE']->value;?>
</button>
                                <?php } elseif ((isset($_smarty_tpl->tpl_vars['UPDATE_CHECK_ERROR']->value))) {?>
                                    <div class="alert bg-danger text-white">
                                        <span><i class="icon fa fa-x"></i>&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['UPDATE_CHECK_ERROR']->value;?>
</span>
                                    </div>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['CHECK_AGAIN_LINK']->value;?>
" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['CHECK_AGAIN']->value;?>
</a>
                                <?php } else { ?>
                                    <div class="alert bg-success text-white">
                                        <span><i class="icon fa fa-check"></i>&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['UP_TO_DATE']->value;?>
</span>
                                    </div>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['CHECK_AGAIN_LINK']->value;?>
" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['CHECK_AGAIN']->value;?>
</a>
                                <?php }?>
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

        <div class="modal fade" id="confirmModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title"><?php echo $_smarty_tpl->tpl_vars['WARNING']->value;?>
</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <?php echo $_smarty_tpl->tpl_vars['INSTALL_CONFIRM']->value;?>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['CANCEL']->value;?>
</button>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['UPGRADE_LINK']->value;?>
" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['UPDATE']->value;?>
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
        function showConfirmModal() {
            $('#confirmModal').modal().show();
        }
    <?php echo '</script'; ?>
>

</body>

</html>
<?php }
}
