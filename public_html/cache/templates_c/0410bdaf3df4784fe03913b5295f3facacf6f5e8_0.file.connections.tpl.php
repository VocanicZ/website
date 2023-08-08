<?php
/* Smarty version 4.3.1, created on 2023-06-01 09:02:10
  from '/home/u302265335/domains/rainbowcreation.net/public_html/custom/panel_templates/Default/store/connections.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6477fc221847d5_33727456',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0410bdaf3df4784fe03913b5295f3facacf6f5e8' => 
    array (
      0 => '/home/u302265335/domains/rainbowcreation.net/public_html/custom/panel_templates/Default/store/connections.tpl',
      1 => 1685580583,
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
function content_6477fc221847d5_33727456 (Smarty_Internal_Template $_smarty_tpl) {
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
                        <h1 class="h3 mb-0 text-gray-800"><?php echo $_smarty_tpl->tpl_vars['SERVICE_CONNECTIONS']->value;?>
</h1>
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?php echo $_smarty_tpl->tpl_vars['PANEL_INDEX']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['DASHBOARD']->value;?>
</a></li>
                            <li class="breadcrumb-item active"><?php echo $_smarty_tpl->tpl_vars['STORE']->value;?>
</li>
                            <li class="breadcrumb-item active"><?php echo $_smarty_tpl->tpl_vars['SERVICE_CONNECTIONS']->value;?>
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
                                    <p style="margin-top: 7px; margin-bottom: 7px;"><?php echo $_smarty_tpl->tpl_vars['CONNECTIONS_INFO']->value;?>
</p>
                                </div>
                                <div class="col-md-3">
                                    <span class="float-md-right"><a href="<?php echo $_smarty_tpl->tpl_vars['NEW_CONNECTION_LINK']->value;?>
" class="btn btn-primary"><i class="fas fa-plus-circle"></i> <?php echo $_smarty_tpl->tpl_vars['NEW_CONNECTION']->value;?>
</a></span>
                                </div>
                            </div>
                            
                            <hr>
                            
                            <!-- Success and Error Alerts -->
                            <?php $_smarty_tpl->_subTemplateRender('file:includes/alerts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                            <?php if ((isset($_smarty_tpl->tpl_vars['CONNECTIONS_LIST']->value))) {?>
                            <div class="table-responsive">
                                <table class="table table-borderless table-striped">
                                    <thead>
                                        <tr>
                                            <th><?php echo $_smarty_tpl->tpl_vars['CONNECTION_ID']->value;?>
</th>
                                            <th><?php echo $_smarty_tpl->tpl_vars['NAME']->value;?>
</th>
                                            <th>Service Name</th>
                                            <th class="float-md-right"><?php echo $_smarty_tpl->tpl_vars['ACTIONS']->value;?>
</th>
                                        </tr>
                                    </thead>
                                    <tbody id="sortable">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CONNECTIONS_LIST']->value, 'connection');
$_smarty_tpl->tpl_vars['connection']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['connection']->value) {
$_smarty_tpl->tpl_vars['connection']->do_else = false;
?>
                                        <tr data-id="<?php echo $_smarty_tpl->tpl_vars['announcement']->value[0]->id;?>
">
                                            <td><?php echo $_smarty_tpl->tpl_vars['connection']->value['id'];
if ($_smarty_tpl->tpl_vars['connection']->value['error']) {?>
                                            &nbsp;
                                            <button role="button" class="btn btn-sm btn-warning" data-toggle="popover"
                                                data-title="<?php echo $_smarty_tpl->tpl_vars['WARNING']->value;?>
" data-content="<?php echo $_smarty_tpl->tpl_vars['connection']->value['error'];?>
"><i
                                                    class="fa fa-exclamation-triangle"></i></button>
                                            <?php }?></td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['connection']->value['name'];?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['connection']->value['service'];?>
</td>
                                            <td class="float-md-right">
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['connection']->value['edit_link'];?>
" class="btn btn-warning btn-sm"><i class="fa fa-fw fa-edit"></i></a>
                                                <a href="#" onclick="showDeleteModal(<?php echo $_smarty_tpl->tpl_vars['connection']->value['id'];?>
)" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </tbody>
                                </table>
                            </div>
                            <?php } else { ?>
                                <?php echo $_smarty_tpl->tpl_vars['NO_CONNECTIONS']->value;?>

                            <?php }?>
                        </div>
                    </div>
                    
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <p style="margin-top: 7px; margin-bottom: 7px;">Downloads</p>
                            <hr>
                            
                            Minecraft Plugin - <a href="https://www.spigotmc.org/resources/nameless-plugin-for-v2.59032/" target="_blank" class="btn btn-primary btn-sm">Go to Spigot</a>

                            <center>
                                <p>Store Module by <a href="https://partydragen.com/" target="_blank">Partydragen</a></br>
                                    <a class="ml-1" href="https://partydragen.com/suggestions/" target="_blank" data-toggle="tooltip"
                                       data-placement="top" title="You can submit suggestions here"><i class="fa-solid fa-thumbs-up text-warning"></i></a>
                                    <a class="ml-1" href="https://discord.gg/TtH6tpp" target="_blank" data-toggle="tooltip"
                                       data-placement="top" title="Discord"><i class="fab fa-discord fa-fw text-discord"></i></a>
                                    <a class="ml-1" href="https://partydragen.com/" target="_blank" data-toggle="tooltip"
                                       data-placement="top" title="Website"><i class="fas fa-globe fa-fw text-primary"></i></a>
                                    <a class="ml-1" href="https://www.patreon.com/partydragen" target="_blank" data-toggle="tooltip"
                                       data-placement="top" title="Support the development on Patreon"><i class="fas fa-heart fa-fw text-danger"></i></a>
                                </p>
                            </center>
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
                        <?php echo $_smarty_tpl->tpl_vars['CONFIRM_DELETE_CONNECTION']->value;?>

                    </div>
                    <div class="modal-footer">
                        <input type="hidden" id="deleteId" value="">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['NO']->value;?>
</button>
                        <button type="button" onclick="deleteConnection()" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['YES']->value;?>
</button>
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
        function showDeleteModal(id) {
            $('#deleteId').attr('value', id);
            $('#deleteModal').modal().show();
        }
        
        function deleteConnection() {
          const id = $('#deleteId').attr('value');
          if (id) {
            const response = $.post("<?php echo $_smarty_tpl->tpl_vars['DELETE_LINK']->value;?>
", { id, action: 'delete', token: "<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
" });
            response.done(function() { window.location.reload(); });
          }
        }
    <?php echo '</script'; ?>
>

</body>
</html><?php }
}
