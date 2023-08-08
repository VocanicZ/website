<?php
/* Smarty version 4.3.1, created on 2023-06-01 08:54:38
  from '/home/u302265335/domains/rainbowcreation.net/public_html/custom/panel_templates/Default/core/users_oauth.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6477fa5e308fc8_63164794',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7425fe030c1617d49df8e4af35573d0ee1555afb' => 
    array (
      0 => '/home/u302265335/domains/rainbowcreation.net/public_html/custom/panel_templates/Default/core/users_oauth.tpl',
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
function content_6477fa5e308fc8_63164794 (Smarty_Internal_Template $_smarty_tpl) {
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

                            <div class="table-responsive">
                                <table class="table table-borderless table-striped">
                                    <thead>
                                        <tr>
                                            <th><?php echo $_smarty_tpl->tpl_vars['NAME']->value;?>
</th>
                                            <th><?php echo $_smarty_tpl->tpl_vars['IDENTIFIER']->value;?>
</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['OAUTH_PROVIDERS']->value, 'provider_data', false, 'provider_name');
$_smarty_tpl->tpl_vars['provider_data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['provider_name']->value => $_smarty_tpl->tpl_vars['provider_data']->value) {
$_smarty_tpl->tpl_vars['provider_data']->do_else = false;
?>
                                        <tr>
                                            <td>
                                                <?php if ($_smarty_tpl->tpl_vars['provider_data']->value['icon']) {?>
                                                <i class="<?php echo $_smarty_tpl->tpl_vars['provider_data']->value['icon'];?>
 fa-2x align-middle">&nbsp;</i>
                                                <?php }?>
                                                <?php echo ucfirst($_smarty_tpl->tpl_vars['provider_name']->value);?>

                                            </td>

                                            <td>
                                                <?php if ((isset($_smarty_tpl->tpl_vars['USER_OAUTH_PROVIDERS']->value[$_smarty_tpl->tpl_vars['provider_name']->value]))) {?>
                                                <code><?php echo $_smarty_tpl->tpl_vars['USER_OAUTH_PROVIDERS']->value[$_smarty_tpl->tpl_vars['provider_name']->value]->provider_id;?>
</code>
                                                <?php } else { ?>
                                                <i><?php echo $_smarty_tpl->tpl_vars['NOT_LINKED']->value;?>
</i>
                                                <?php }?>
                                            </td>

                                            <td class="text-right">
                                                <?php if ((isset($_smarty_tpl->tpl_vars['USER_OAUTH_PROVIDERS']->value[$_smarty_tpl->tpl_vars['provider_name']->value]))) {?>
                                                <button class="btn btn-danger"
                                                    onclick="showDeleteModal('<?php echo $_smarty_tpl->tpl_vars['provider_name']->value;?>
')"><?php echo $_smarty_tpl->tpl_vars['UNLINK']->value;?>
</button>
                                                <?php } else { ?>
                                                <button class="btn btn-danger disabled" disabled><?php echo $_smarty_tpl->tpl_vars['UNLINK']->value;?>
</button>
                                                <?php }?>
                                            </td>
                                        </tr>
                                        <?php
}
if ($_smarty_tpl->tpl_vars['provider_data']->do_else) {
?>
                                        <tr>
                                            <td colspan="3" class="text-center"><?php echo $_smarty_tpl->tpl_vars['NO_OAUTH_PROVIDERS']->value;?>
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

            <!-- Unlink Modal -->
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
                            <?php echo $_smarty_tpl->tpl_vars['ARE_YOU_SURE_MESSAGE']->value;?>

                        </div>
                        <div class="modal-footer">
                            <input type="hidden" id="deleteId" value="">
                            <button type="button" class="btn btn-danger" data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['NO']->value;?>
</button>
                            <button type="button" onclick="unlinkProvider()" class="btn btn-success"><?php echo $_smarty_tpl->tpl_vars['YES']->value;?>
</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- End Content Wrapper -->
        </div>

        <!-- End Wrapper -->
    </div>

    <?php $_smarty_tpl->_subTemplateRender('file:scripts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php echo '<script'; ?>
 type="text/javascript">
        function showDeleteModal(id) {
            $('#deleteId').attr('value', id);
            $('#deleteModal').modal().show();
        }

        function unlinkProvider() {
            const id = $('#deleteId').attr('value');
            if (id) {
                const response = $.post("<?php echo $_smarty_tpl->tpl_vars['DELETE_LINK']->value;?>
", { user_id: "<?php echo $_smarty_tpl->tpl_vars['USER_ID']->value;?>
", provider_name: id, action: 'delete', token: "<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
" });
                response.done(function () { window.location.reload(); });
            }
        }
    <?php echo '</script'; ?>
>

</body>

</html>
<?php }
}
