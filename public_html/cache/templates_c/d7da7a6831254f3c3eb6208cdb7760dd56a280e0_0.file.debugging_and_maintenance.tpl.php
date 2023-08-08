<?php
/* Smarty version 4.3.1, created on 2023-06-01 08:05:44
  from '/home/u302265335/domains/rainbowcreation.net/public_html/custom/panel_templates/Default/core/debugging_and_maintenance.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6477eee8784320_02092441',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd7da7a6831254f3c3eb6208cdb7760dd56a280e0' => 
    array (
      0 => '/home/u302265335/domains/rainbowcreation.net/public_html/custom/panel_templates/Default/core/debugging_and_maintenance.tpl',
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
function content_6477eee8784320_02092441 (Smarty_Internal_Template $_smarty_tpl) {
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
                        <h1 class="h3 mb-0 text-gray-800"><?php echo $_smarty_tpl->tpl_vars['DEBUGGING_AND_MAINTENANCE']->value;?>
</h1>
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?php echo $_smarty_tpl->tpl_vars['PANEL_INDEX']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['DASHBOARD']->value;?>
</a></li>
                            <li class="breadcrumb-item active"><?php echo $_smarty_tpl->tpl_vars['CONFIGURATION']->value;?>
</li>
                            <li class="breadcrumb-item active"><?php echo $_smarty_tpl->tpl_vars['DEBUGGING_AND_MAINTENANCE']->value;?>
</li>
                        </ol>
                    </div>

                    <!-- Update Notification -->
                    <?php $_smarty_tpl->_subTemplateRender('file:includes/update.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <?php if ((isset($_smarty_tpl->tpl_vars['ERROR_LOGS']->value))) {?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['ERROR_LOGS_LINK']->value;?>
" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['ERROR_LOGS']->value;?>
</a>
                            <?php }?>

                            <button class="float-right btn btn-info d-flex align-items-center" id="show_debug_modal" onclick="showDebugModal()">
                                <span id="debug_link_text"><?php echo $_smarty_tpl->tpl_vars['DEBUG_LINK']->value;?>
</span>
                            </button>

                            <hr />

                            <!-- Success and Error Alerts -->
                            <?php $_smarty_tpl->_subTemplateRender('file:includes/alerts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                            <form action="" method="post">
                                <div class="form-group custom-control custom-switch">
                                    <input id="InputDebug" name="enable_debugging" type="checkbox"
                                        class="custom-control-input" value="1" <?php if ($_smarty_tpl->tpl_vars['ENABLE_DEBUG_MODE_VALUE']->value == 1) {?>
                                        checked<?php }?> />
                                    <label class="custom-control-label" for="InputDebug"><?php echo $_smarty_tpl->tpl_vars['ENABLE_DEBUG_MODE']->value;?>
</label>
                                </div>
                                <div class="form-group custom-control custom-switch">
                                    <input id="InputMaintenance" name="enable_maintenance" type="checkbox"
                                        class="custom-control-input" value="1" <?php if ($_smarty_tpl->tpl_vars['ENABLE_MAINTENANCE_MODE_VALUE']->value == 1) {?>
                                        checked<?php }?> />
                                    <label class="custom-control-label"
                                        for="InputMaintenance"><?php echo $_smarty_tpl->tpl_vars['ENABLE_MAINTENANCE_MODE']->value;?>
</label>
                                </div>
                                <div class="form-group custom-control custom-switch">
                                    <input id="InputPageLoad" name="enable_page_load_timer" type="checkbox"
                                        class="custom-control-input" value="1" <?php if ($_smarty_tpl->tpl_vars['ENABLE_PAGE_LOAD_TIMER_VALUE']->value == 1) {?>
                                        checked<?php }?> />
                                    <label class="custom-control-label"
                                        for="InputPageLoad"><?php echo $_smarty_tpl->tpl_vars['ENABLE_PAGE_LOAD_TIMER']->value;?>
</label>
                                </div>
                                <div class="form-group">
                                    <label for="inputMaintenanceMessage"><?php echo $_smarty_tpl->tpl_vars['MAINTENANCE_MODE_MESSAGE']->value;?>
</label>
                                    <textarea style="width:100%" rows="10" name="message"
                                        id="InputMaintenanceMessage"><?php echo $_smarty_tpl->tpl_vars['MAINTENANCE_MODE_MESSAGE_VALUE']->value;?>
</textarea>
                                </div>
                                <div class="form-group">
                                    <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                                    <input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['SUBMIT']->value;?>
" class="btn btn-primary">
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

        <!-- Debug link modal -->
        <div class="modal fade" id="debug_link_modal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <?php echo $_smarty_tpl->tpl_vars['DEBUG_LINK_INFO']->value;?>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['CANCEL']->value;?>
</button>
                        <button class="btn btn-primary" id="generateUrl" onclick="generateUrl()">
                            <span class="spinner-border spinner-border-sm mr-2"
                                  id="debug_link_loading" style="display: none;"></span>
                            <?php echo $_smarty_tpl->tpl_vars['DEBUG_LINK']->value;?>

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
>
        let link_created = false;

        function showDebugModal() {
            $('#debug_link_modal').modal('show');
        }

        const generateUrl = () => {
            $('#generateUrl').prop('disabled', true);
            $('#show_debug_modal').prop('disabled', true);

            if (link_created) {
                return;
            }

            $('#debug_link_loading').show(100);
            $.get('<?php echo $_smarty_tpl->tpl_vars['DEBUG_LINK_URL']->value;?>
')
                .done((url) => {
                    link_created = true;

                    if (navigator.clipboard !== undefined) {
                        navigator.clipboard.writeText(url);

                        $('#debug_link_text').text('<?php echo $_smarty_tpl->tpl_vars['COPIED']->value;?>
');
                    } else {
                        alert(url);
                    }

                    $('#debug_link_loading').hide(100);
                    $('#debug_link_modal').modal('hide');
                });
        };
    <?php echo '</script'; ?>
>

</body>

</html>
<?php }
}
