<?php
/* Smarty version 4.3.1, created on 2023-06-01 08:24:13
  from '/home/u302265335/domains/rainbowcreation.net/public_html/custom/panel_templates/Default/integrations/minecraft/minecraft_servers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6477f33d9c4dd1_82044088',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'edae4992ef704a05984e53ad2023bb4408df0df9' => 
    array (
      0 => '/home/u302265335/domains/rainbowcreation.net/public_html/custom/panel_templates/Default/integrations/minecraft/minecraft_servers.tpl',
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
function content_6477f33d9c4dd1_82044088 (Smarty_Internal_Template $_smarty_tpl) {
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
                        <h1 class="h3 mb-0 text-gray-800"><?php echo $_smarty_tpl->tpl_vars['MINECRAFT_SERVERS']->value;?>
</h1>
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?php echo $_smarty_tpl->tpl_vars['PANEL_INDEX']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['DASHBOARD']->value;?>
</a></li>
                            <li class="breadcrumb-item active"><?php echo $_smarty_tpl->tpl_vars['INTEGRATIONS']->value;?>
</li>
                            <li class="breadcrumb-item"><a href="<?php echo $_smarty_tpl->tpl_vars['MINECRAFT_LINK']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['MINECRAFT']->value;?>
</a></li>
                            <li class="breadcrumb-item active"><?php echo $_smarty_tpl->tpl_vars['MINECRAFT_SERVERS']->value;?>
</li>
                        </ol>
                    </div>

                    <!-- Update Notification -->
                    <?php $_smarty_tpl->_subTemplateRender('file:includes/update.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                    <!-- Success and Error Alerts -->
                    <?php $_smarty_tpl->_subTemplateRender('file:includes/alerts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                    <div class="card shadow mb-4">
                        <div class="card-body">

                            <a href="<?php echo $_smarty_tpl->tpl_vars['NEW_SERVER_LINK']->value;?>
" class="btn btn-primary" <?php if (!(isset($_smarty_tpl->tpl_vars['NO_SERVERS']->value))) {?>style="margin-bottom: 15px" <?php }?>}><?php echo $_smarty_tpl->tpl_vars['NEW_SERVER']->value;?>
</a>

                            <?php if ((isset($_smarty_tpl->tpl_vars['NO_SERVERS']->value))) {?>
                            <hr />
                            <p><?php echo $_smarty_tpl->tpl_vars['NO_SERVERS']->value;?>
</p>
                            <?php } else { ?>
                            <div class="table table-responsive">
                                <table class="table table-striped">
                                    <tbody id="sortable">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SERVERS']->value, 'server');
$_smarty_tpl->tpl_vars['server']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['server']->value) {
$_smarty_tpl->tpl_vars['server']->do_else = false;
?>
                                        <tr data-id="<?php echo $_smarty_tpl->tpl_vars['server']->value['id'];?>
">
                                            <td><strong><?php echo $_smarty_tpl->tpl_vars['server']->value['name'];?>
</strong> (<?php echo $_smarty_tpl->tpl_vars['server']->value['server_id'];?>
)</td>
                                            <td>
                                                <div class="float-md-right">
                                                    <div class="btn btn-secondary"><i class="fas fa-arrows-alt"></i></div>
                                                    <a href="<?php echo $_smarty_tpl->tpl_vars['server']->value['edit_link'];?>
" class="btn btn-info"><?php echo $_smarty_tpl->tpl_vars['EDIT']->value;?>
</a>
                                                    <button onclick="showDeleteModal('<?php echo $_smarty_tpl->tpl_vars['server']->value['delete_link'];?>
')" class="btn btn-danger"><?php echo $_smarty_tpl->tpl_vars['DELETE']->value;?>
</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </tbody>
                                </table>
                            </div>
                            <?php }?>

                        </div>
                    </div>
                    <div class="card shadow mb-4">
                        <div class="card-body">

                            <h5><?php echo $_smarty_tpl->tpl_vars['QUERY_SETTINGS']->value;?>
</h5>
                            <hr />
                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="inputDefaultServer"><?php echo $_smarty_tpl->tpl_vars['DEFAULT_SERVER']->value;?>
</label>
                                    <select id="inputDefaultServer" class="form-control" name="default_server">
                                        <?php if ((isset($_smarty_tpl->tpl_vars['SERVERS']->value)) && count($_smarty_tpl->tpl_vars['SERVERS']->value)) {?>
                                            <option value="none" <?php if ($_smarty_tpl->tpl_vars['DEFAULT_SERVER_VALUE']->value == 0) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['NO_DEFAULT_SERVER']->value;?>
</option>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SERVERS']->value, 'server');
$_smarty_tpl->tpl_vars['server']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['server']->value) {
$_smarty_tpl->tpl_vars['server']->do_else = false;
?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['server']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['server']->value['is_default'] == 1) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['server']->value['name'];?>
</option>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        <?php } else { ?>
                                            <option value="none" selected><?php echo $_smarty_tpl->tpl_vars['NO_SERVERS']->value;?>
</option>
                                        <?php }?>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="inputGroupSyncServer"><?php echo $_smarty_tpl->tpl_vars['GROUP_SYNC_SERVER']->value;?>
</label>
                                    <select id="inputGroupSyncServer" class="form-control" name="group_sync_server">
                                        <?php if ((isset($_smarty_tpl->tpl_vars['SERVERS']->value)) && count($_smarty_tpl->tpl_vars['SERVERS']->value)) {?>
                                            <option value="none" <?php if ($_smarty_tpl->tpl_vars['GROUP_SYNC_SERVER_VALUE']->value == 0) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['NO_GROUP_SYNC_SERVER']->value;?>
</option>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SERVERS']->value, 'server');
$_smarty_tpl->tpl_vars['server']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['server']->value) {
$_smarty_tpl->tpl_vars['server']->do_else = false;
?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['server']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['GROUP_SYNC_SERVER_VALUE']->value == $_smarty_tpl->tpl_vars['server']->value['id']) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['server']->value['name'];?>
</option>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        <?php } else { ?>
                                            <option value="none" selected><?php echo $_smarty_tpl->tpl_vars['NO_SERVERS']->value;?>
</option>
                                        <?php }?>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="inputQueryInterval"><?php echo $_smarty_tpl->tpl_vars['QUERY_INTERVAL']->value;?>
</label>
                                    <input id="inputQueryInterval" name="interval" type="number" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['QUERY_INTERVAL_VALUE']->value;?>
" min="5" max="60" />
                                </div>

                                <div class="form-group">
                                    <label for="inputQueryType"><?php echo $_smarty_tpl->tpl_vars['QUERY_TYPE']->value;?>
 <span class="badge badge-info"><i class="fa fa-question-circle" data-container="body" data-toggle="popover" data-placement="top" title="<?php echo $_smarty_tpl->tpl_vars['INFO']->value;?>
" data-content="<?php echo $_smarty_tpl->tpl_vars['QUERY_TYPE_INFO']->value;?>
"></i></span></label>
                                    <select id="inputQueryType" class="form-control" name="query_type">
                                        <option value="internal" name="<?php echo $_smarty_tpl->tpl_vars['INTERNAL']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['QUERY_TYPE_VALUE']->value == 'internal') {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['INTERNAL']->value;?>
</option>
                                        <option value="external" name="<?php echo $_smarty_tpl->tpl_vars['EXTERNAL']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['QUERY_TYPE_VALUE']->value == 'external') {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['EXTERNAL']->value;?>
</option>
                                        <option value="plugin" name="<?php echo $_smarty_tpl->tpl_vars['PLUGIN']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['QUERY_TYPE_VALUE']->value == 'plugin') {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['PLUGIN']->value;?>
</option>
                                    </select>
                                </div>

                                <?php if ($_smarty_tpl->tpl_vars['QUERY_TYPE_VALUE']->value == 'plugin') {?>
                                    <div class="form-group">
                                        <label for="inputPlayerLimit"><?php echo $_smarty_tpl->tpl_vars['PLAYER_LIST_LIMIT']->value;?>
</label>
                                        <input id="inputPlayerLimit" name="player_list_limit" type="number" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['PLAYER_LIST_LIMIT_VALUE']->value;?>
" min="0" />
                                    </div>
                                <?php }?>

                                <div class="form-group custom-control custom-switch">
                                    <input type="hidden" name="status_page" value="0">
                                    <input id="inputStatusPage" name="status_page" type="checkbox" class="custom-control-input js-check-change" value="1" <?php if ($_smarty_tpl->tpl_vars['STATUS_PAGE_VALUE']->value) {?> checked<?php }?> />
                                    <label for="inputStatusPage" class="custom-control-label">
                                        <?php echo $_smarty_tpl->tpl_vars['STATUS_PAGE']->value;?>

                                    </label>
                                </div>

                                <div class="form-group">
                                    <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                                    <input type="submit" class="btn btn-primary" value="<?php echo $_smarty_tpl->tpl_vars['SUBMIT']->value;?>
">
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
                        <?php echo $_smarty_tpl->tpl_vars['CONFIRM_DELETE_SERVER']->value;?>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['NO']->value;?>
</button>
                        <form action="" method="post" id="deleteLink" style="display: inline">
                            <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
" />
                            <input type="submit" class="btn btn-primary" value="<?php echo $_smarty_tpl->tpl_vars['YES']->value;?>
" />
                        </form>
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
        function showDeleteModal(link) {
            $('#deleteLink').attr('action', link);
            $('#deleteModal').modal().show();
        }
    <?php echo '</script'; ?>
>


    <?php echo '<script'; ?>
 type="text/javascript">
        $(document).ready(function() {
                    $("#sortable").sortable({
                            start: function(event, ui) {
                                let start_pos = ui.item.index();
                                ui.item.data('startPos', start_pos);
                            },
                            update: function(event, ui) {
                                let servers = $("#sortable").children();
                                let toSubmit = [];
                                servers.each(function() {
                                    toSubmit.push($(this).data().id);
                                });

                                $.ajax({
                                        url: "<?php echo $_smarty_tpl->tpl_vars['REORDER_DRAG_URL']->value;?>
",
                                        type: "POST",
                                        data: {
                                            token: "<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
",
                                            
                                            servers: JSON.stringify({
                                                "servers": toSubmit
                                            })
                                            
                                            },
                                            success: function(response) {
                                                // Success
                                            },
                                            error: function(xhr) {
                                                // Error
                                                console.log(xhr);
                                            }
                                        });
                                }
                            });
                    });
    <?php echo '</script'; ?>
>

</body>

</html>
<?php }
}
