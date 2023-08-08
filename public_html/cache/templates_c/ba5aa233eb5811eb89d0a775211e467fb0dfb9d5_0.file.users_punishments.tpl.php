<?php
/* Smarty version 4.3.1, created on 2023-06-01 09:00:49
  from '/home/u302265335/domains/rainbowcreation.net/public_html/custom/panel_templates/Default/core/users_punishments.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6477fbd1610541_50029851',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ba5aa233eb5811eb89d0a775211e467fb0dfb9d5' => 
    array (
      0 => '/home/u302265335/domains/rainbowcreation.net/public_html/custom/panel_templates/Default/core/users_punishments.tpl',
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
function content_6477fbd1610541_50029851 (Smarty_Internal_Template $_smarty_tpl) {
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
                        <h1 class="h3 mb-0 text-gray-800"><?php echo $_smarty_tpl->tpl_vars['PUNISHMENTS']->value;?>
</h1>
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?php echo $_smarty_tpl->tpl_vars['PANEL_INDEX']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['DASHBOARD']->value;?>
</a></li>
                            <li class="breadcrumb-item active"><?php echo $_smarty_tpl->tpl_vars['USER_MANAGEMENT']->value;?>
</li>
                            <li class="breadcrumb-item active"><?php echo $_smarty_tpl->tpl_vars['PUNISHMENTS']->value;?>
</li>
                        </ol>
                    </div>

                    <!-- Update Notification -->
                    <?php $_smarty_tpl->_subTemplateRender('file:includes/update.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                    <div class="card shadow mb-4">
                        <div class="card-body">

                            <button onclick="showSearchModal()" class="btn btn-primary"><i class="fa fa-search"></i>
                                <?php echo $_smarty_tpl->tpl_vars['SEARCH']->value;?>
</button>
                            <hr />

                            <!-- Success and Error Alerts -->
                            <?php $_smarty_tpl->_subTemplateRender('file:includes/alerts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                            <?php if ((isset($_smarty_tpl->tpl_vars['RESULTS']->value))) {?>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <colgroup>
                                        <col span="1" style="width: 20%;">
                                        <col span="1" style="width: 20%;">
                                        <col span="1" style="width: 20%;">
                                        <col span="1" style="width: 20%;">
                                        <col span="1" style="width: 20%;">
                                    </colgroup>
                                    <thead>
                                        <tr>
                                            <th><?php echo $_smarty_tpl->tpl_vars['USERNAME']->value;?>
</th>
                                            <th><?php echo $_smarty_tpl->tpl_vars['STAFF']->value;?>
</th>
                                            <th><?php echo $_smarty_tpl->tpl_vars['TYPE']->value;?>
</th>
                                            <th><?php echo $_smarty_tpl->tpl_vars['WHEN']->value;?>
</th>
                                            <th><?php echo $_smarty_tpl->tpl_vars['ACTIONS']->value;?>
</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RESULTS']->value, 'result');
$_smarty_tpl->tpl_vars['result']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['result']->value) {
$_smarty_tpl->tpl_vars['result']->do_else = false;
?>
                                        <tr>
                                            <td><a href="<?php echo $_smarty_tpl->tpl_vars['result']->value['profile'];?>
" style="<?php echo $_smarty_tpl->tpl_vars['result']->value['style'];?>
"><img
                                                        src="<?php echo $_smarty_tpl->tpl_vars['result']->value['avatar'];?>
" class="rounded"
                                                        style="max-width:25px;max-height:25px;"> <?php echo $_smarty_tpl->tpl_vars['result']->value['nickname'];?>

                                                </a></td>
                                            <td><a href="<?php echo $_smarty_tpl->tpl_vars['result']->value['staff_profile'];?>
" style="<?php echo $_smarty_tpl->tpl_vars['result']->value['staff_style'];?>
"><img
                                                        src="<?php echo $_smarty_tpl->tpl_vars['result']->value['staff_avatar'];?>
" class="rounded"
                                                        style="max-width:25px;max-height:25px;">
                                                    <?php echo $_smarty_tpl->tpl_vars['result']->value['staff_nickname'];?>

                                                </a></td>
                                            <td>
                                                <?php if ($_smarty_tpl->tpl_vars['result']->value['type_numeric'] == 1) {?>
                                                <span class="badge badge-danger"><?php echo $_smarty_tpl->tpl_vars['result']->value['type'];?>
</span>
                                                <?php } elseif ($_smarty_tpl->tpl_vars['result']->value['type_numeric'] == 2) {?>
                                                <span class="badge badge-warning"><?php echo $_smarty_tpl->tpl_vars['result']->value['type'];?>
</span>
                                                <?php } elseif ($_smarty_tpl->tpl_vars['result']->value['type_numeric'] == 3) {?>
                                                <span class="badge badge-danger"><?php echo $_smarty_tpl->tpl_vars['result']->value['type'];?>
</span>
                                                <?php }?>
                                                <?php if ($_smarty_tpl->tpl_vars['result']->value['revoked'] == 1) {?>
                                                <span class="badge badge-info"><?php echo $_smarty_tpl->tpl_vars['REVOKED']->value;?>
</span>
                                                <?php }?>
                                                <?php if ($_smarty_tpl->tpl_vars['result']->value['type_numeric'] == 2 && $_smarty_tpl->tpl_vars['result']->value['acknowledged'] == 1) {?>
                                                <span class="badge badge-success"><?php echo $_smarty_tpl->tpl_vars['ACKNOWLEDGED']->value;?>
</span>
                                                <?php }?>
                                            </td>
                                            <td><span data-toggle="tooltip"
                                                    data-original-title="<?php echo $_smarty_tpl->tpl_vars['result']->value['time_full'];?>
"><?php echo $_smarty_tpl->tpl_vars['result']->value['time'];?>
</span>
                                            </td>
                                            <td><a href="<?php echo $_smarty_tpl->tpl_vars['result']->value['link'];?>
" class="btn btn-info"><?php echo $_smarty_tpl->tpl_vars['VIEW_USER']->value;?>
</a></td>
                                        </tr>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </tbody>
                                </table>
                            </div>
                            <br />
                            <?php echo $_smarty_tpl->tpl_vars['PAGINATION']->value;?>

                            <?php } else { ?>
                            <?php echo $_smarty_tpl->tpl_vars['NO_PUNISHMENTS']->value;?>

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

        <div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="searchModalLabel"><?php echo $_smarty_tpl->tpl_vars['SEARCH']->value;?>
</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="" method="post">
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="InputUsername"><?php echo $_smarty_tpl->tpl_vars['USERNAME']->value;?>
</label>
                                <input type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['USERNAME']->value;?>
" class="form-control" id="InputUsername"
                                    name="username">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-warning" data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['CANCEL']->value;?>
</button>
                            <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                            <input type="submit" class="btn btn-primary" value="<?php echo $_smarty_tpl->tpl_vars['SUBMIT']->value;?>
">
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- End Wrapper -->
    </div>

    <?php $_smarty_tpl->_subTemplateRender('file:scripts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php echo '<script'; ?>
 type="text/javascript">
        function showSearchModal() {
            $('#searchModal').modal().show();
        }
    <?php echo '</script'; ?>
>

</body>

</html>
<?php }
}
