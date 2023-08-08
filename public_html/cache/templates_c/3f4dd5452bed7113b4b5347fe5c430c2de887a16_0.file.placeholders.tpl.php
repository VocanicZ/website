<?php
/* Smarty version 4.3.1, created on 2023-06-04 14:23:09
  from '/home/u302265335/domains/rainbowcreation.net/public_html/custom/panel_templates/Default/integrations/minecraft/placeholders.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_647c3bdd6172d9_59871095',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f4dd5452bed7113b4b5347fe5c430c2de887a16' => 
    array (
      0 => '/home/u302265335/domains/rainbowcreation.net/public_html/custom/panel_templates/Default/integrations/minecraft/placeholders.tpl',
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
function content_647c3bdd6172d9_59871095 (Smarty_Internal_Template $_smarty_tpl) {
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
                        <h1 class="h3 mb-0 text-gray-800"><?php echo $_smarty_tpl->tpl_vars['PLACEHOLDERS']->value;?>
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
                            <li class="breadcrumb-item active"><?php echo $_smarty_tpl->tpl_vars['PLACEHOLDERS']->value;?>
</li>
                        </ol>
                    </div>

                    <!-- Update Notification -->
                    <?php $_smarty_tpl->_subTemplateRender('file:includes/update.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="card shadow border-left-primary">
                                <div class="card-body">
                                    <h5><i class="icon fa fa-info-circle"></i> <?php echo $_smarty_tpl->tpl_vars['INFO']->value;?>
</h5>
                                    <?php echo $_smarty_tpl->tpl_vars['PLACEHOLDERS_INFO']->value;?>

                                </div>
                            </div>
                            <hr />

                            <!-- Success and Error Alerts -->
                            <?php $_smarty_tpl->_subTemplateRender('file:includes/alerts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                            <?php if (count($_smarty_tpl->tpl_vars['ALL_PLACEHOLDERS']->value)) {?>
                            <form action="" method="POST">
                                <input type="hidden" name="action" value="settings">

                                <div class="form-group custom-control custom-switch">
                                    <input name="placeholders_enabled"
                                           id="InputEnablePlaceholders"
                                           type="checkbox"
                                           class="custom-control-input js-check-change"
                                           <?php if ($_smarty_tpl->tpl_vars['ENABLE_PLACEHOLDERS_VALUE']->value == 1) {?> checked<?php }?>>
                                    <label class="custom-control-label" for="InputEnablePlaceholders">
                                        <?php echo $_smarty_tpl->tpl_vars['ENABLE_PLACEHOLDERS']->value;?>

                                    </label>
                                </div>

                                <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                                <div class="table-responsive">
                                    <table class="table table-borderless table-striped">
                                        <thead>
                                            <tr>
                                                <th><?php echo $_smarty_tpl->tpl_vars['SERVER_ID']->value;?>
</th>
                                                <th><?php echo $_smarty_tpl->tpl_vars['NAME']->value;?>
</th>
                                                <th>
                                                    <?php echo $_smarty_tpl->tpl_vars['FRIENDLY_NAME']->value;?>

                                                    <span class="badge badge-info" style="margin-right:10px"><i
                                                            class="fas fa-question-circle" data-container="body"
                                                            data-toggle="popover" title="<?php echo $_smarty_tpl->tpl_vars['INFO']->value;?>
" data-placement="top"
                                                            data-content="<?php echo $_smarty_tpl->tpl_vars['FRIENDLY_NAME_INFO']->value;?>
"></i></span>
                                                </th>
                                                <th class="text-center">
                                                    <?php echo $_smarty_tpl->tpl_vars['SHOW_ON_PROFILE']->value;?>

                                                    <span class="badge badge-info" style="margin-right:10px"><i
                                                            class="fas fa-question-circle" data-container="body"
                                                            data-toggle="popover" title="<?php echo $_smarty_tpl->tpl_vars['INFO']->value;?>
" data-placement="top"
                                                            data-content="<?php echo $_smarty_tpl->tpl_vars['SHOW_ON_PROFILE_INFO']->value;?>
"></i></span>
                                                </th>
                                                <th class="text-center">
                                                    <?php echo $_smarty_tpl->tpl_vars['SHOW_ON_FORUM']->value;?>

                                                    <span class="badge badge-info" style="margin-right:10px"><i
                                                            class="fas fa-question-circle" data-container="body"
                                                            data-toggle="popover" title="<?php echo $_smarty_tpl->tpl_vars['INFO']->value;?>
" data-placement="top"
                                                            data-content="<?php echo $_smarty_tpl->tpl_vars['SHOW_ON_FORUM_INFO']->value;?>
"></i></span>
                                                </th>
                                                <th class="text-center"><?php echo $_smarty_tpl->tpl_vars['LEADERBOARD_ENABLED']->value;?>
</th>
                                                <th class="text-center"><?php echo $_smarty_tpl->tpl_vars['LEADERBOARD_SETTINGS']->value;?>
</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ALL_PLACEHOLDERS']->value, 'placeholder');
$_smarty_tpl->tpl_vars['placeholder']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['placeholder']->value) {
$_smarty_tpl->tpl_vars['placeholder']->do_else = false;
?>
                                                <tr>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['placeholder']->value->server_id;?>
</td>
                                                    <td><code><?php echo $_smarty_tpl->tpl_vars['placeholder']->value->name;?>
</code></td>
                                                    <td>
                                                        <input type="text" class="form-control" name="friendly_name-<?php echo $_smarty_tpl->tpl_vars['placeholder']->value->name;?>
-server-<?php echo $_smarty_tpl->tpl_vars['placeholder']->value->server_id;?>
" value="<?php echo $_smarty_tpl->tpl_vars['placeholder']->value->friendly_name;?>
">
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="form-group custom-control custom-switch">
                                                            <input type="checkbox"
                                                                    id="InputShowOnProfile-<?php echo $_smarty_tpl->tpl_vars['placeholder']->value->name;?>
-<?php echo $_smarty_tpl->tpl_vars['placeholder']->value->server_id;?>
"
                                                                    class="custom-control-input"
                                                                    name="show_on_profile-<?php echo $_smarty_tpl->tpl_vars['placeholder']->value->name;?>
-server-<?php echo $_smarty_tpl->tpl_vars['placeholder']->value->server_id;?>
"
                                                                    <?php if ($_smarty_tpl->tpl_vars['placeholder']->value->show_on_profile == 1) {?> checked <?php }?>>
                                                            <label class="custom-control-label" for="InputShowOnProfile-<?php echo $_smarty_tpl->tpl_vars['placeholder']->value->name;?>
-<?php echo $_smarty_tpl->tpl_vars['placeholder']->value->server_id;?>
"></label>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="form-group custom-control custom-switch">
                                                            <input type="checkbox"
                                                                    id="InputShowOnForum-<?php echo $_smarty_tpl->tpl_vars['placeholder']->value->name;?>
-<?php echo $_smarty_tpl->tpl_vars['placeholder']->value->server_id;?>
"
                                                                    class="custom-control-input"
                                                                    name="show_on_forum-<?php echo $_smarty_tpl->tpl_vars['placeholder']->value->name;?>
-server-<?php echo $_smarty_tpl->tpl_vars['placeholder']->value->server_id;?>
"
                                                                    <?php if ($_smarty_tpl->tpl_vars['placeholder']->value->show_on_forum == 1) {?> checked <?php }?>>
                                                            <label class="custom-control-label" for="InputShowOnForum-<?php echo $_smarty_tpl->tpl_vars['placeholder']->value->name;?>
-<?php echo $_smarty_tpl->tpl_vars['placeholder']->value->server_id;?>
"></label>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php if ($_smarty_tpl->tpl_vars['placeholder']->value->leaderboard == 1) {?>
                                                            <i class="fa fa-check-circle text-success"></i>
                                                        <?php } else { ?>
                                                            <i class="fa fa-times-circle text-danger"></i>
                                                        <?php }?>
                                                    </td>
                                                    <td class="text-center">
                                                        <a class="btn btn-secondary text-white" href="<?php echo $_smarty_tpl->tpl_vars['placeholder']->value->leaderboard_settings_url;?>
">
                                                            <i class="fas fa-cog"></i>
                                                        </a>
                                                    </td>
                                                    <td class="text-center">
                                                        <span class="btn btn-danger text-white" onclick="showDeleteModal('<?php echo $_smarty_tpl->tpl_vars['placeholder']->value->safe_name;?>
', <?php echo $_smarty_tpl->tpl_vars['placeholder']->value->server_id;?>
)">
                                                            <?php echo $_smarty_tpl->tpl_vars['DELETE']->value;?>

                                                        </span>
                                                    </td>
                                                </tr>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </tbody>
                                    </table>
                                </div>

                                <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['SUBMIT']->value;?>
</button>
                            </form>
                            <?php } else { ?>
                                <?php echo $_smarty_tpl->tpl_vars['NO_PLACEHOLDERS']->value;?>

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
                        <?php echo $_smarty_tpl->tpl_vars['CONFIRM_DELETE_PLACEHOLDER']->value;?>

                    </div>
                    <div class="modal-footer">
                        <input type="hidden" id="deleteSafeName" value="">
                        <input type="hidden" id="deleteServerId" value="">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['NO']->value;?>
</button>
                        <button type="button" onclick="deletePlaceholder()" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['YES']->value;?>
</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- End Wrapper -->
    </div>

    <?php echo '<script'; ?>
>
        const showDeleteModal = (placeholder_name, server_id) => {
            $('#deleteSafeName').attr('value', placeholder_name);
            $('#deleteServerId').attr('value', server_id);
            $('#deleteModal').modal().show();
        }

        const deletePlaceholder = () => {
            const placeholder_safe_name = $('#deleteSafeName').val();
            const server_id = $('#deleteServerId').val();
            const response = $.post("<?php echo $_smarty_tpl->tpl_vars['DELETE_LINK']->value;?>
", {
                placeholder_safe_name,
                server_id,
                action: 'delete',
                token: '<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
',
            });
            response.done((r) => {
                r === 'Ok'
                    ? window.location.reload()
                    : console.error(r);
            });
        }
    <?php echo '</script'; ?>
>
    <?php $_smarty_tpl->_subTemplateRender('file:scripts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>

</html>
<?php }
}
