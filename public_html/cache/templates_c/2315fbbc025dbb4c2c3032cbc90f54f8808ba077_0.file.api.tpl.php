<?php
/* Smarty version 4.3.1, created on 2023-06-01 08:05:32
  from '/home/u302265335/domains/rainbowcreation.net/public_html/custom/panel_templates/Default/core/api.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6477eedc9dd866_80067437',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2315fbbc025dbb4c2c3032cbc90f54f8808ba077' => 
    array (
      0 => '/home/u302265335/domains/rainbowcreation.net/public_html/custom/panel_templates/Default/core/api.tpl',
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
function content_6477eedc9dd866_80067437 (Smarty_Internal_Template $_smarty_tpl) {
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
                        <h1 class="h3 mb-0 text-gray-800"><?php echo $_smarty_tpl->tpl_vars['API']->value;?>
</h1>
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?php echo $_smarty_tpl->tpl_vars['PANEL_INDEX']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['DASHBOARD']->value;?>
</a></li>
                            <li class="breadcrumb-item active"><?php echo $_smarty_tpl->tpl_vars['CONFIGURATION']->value;?>
</li>
                            <li class="breadcrumb-item active"><?php echo $_smarty_tpl->tpl_vars['API']->value;?>
</li>
                        </ol>
                    </div>

                    <!-- Update Notification -->
                    <?php $_smarty_tpl->_subTemplateRender('file:includes/update.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['API_ENDPOINTS_LINK']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['API_ENDPOINTS']->value;?>
</a>
                            <a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['GROUP_SYNC_LINK']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['GROUP_SYNC']->value;?>
</a>
                            <hr />

                            <!-- Success and Error Alerts -->
                            <?php $_smarty_tpl->_subTemplateRender('file:includes/alerts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                            <div class="card shadow border-left-primary">
                                <div class="card-body">
                                    <h5><i class="icon fa fa-info-circle"></i> <?php echo $_smarty_tpl->tpl_vars['INFO']->value;?>
</h5>
                                    <?php echo $_smarty_tpl->tpl_vars['API_INFO']->value;?>

                                </div>
                            </div>
                            <br />
                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="InputAPIURL"><?php echo $_smarty_tpl->tpl_vars['API_URL']->value;?>
</label>
                                    <div class="input-group">
                                        <input type="text" name="api_url" id="InputAPIURL" class="form-control" readonly value="<?php if ($_smarty_tpl->tpl_vars['API_ENABLED']->value) {
echo $_smarty_tpl->tpl_vars['API_URL_VALUE']->value;
} else {
echo $_smarty_tpl->tpl_vars['ENABLE_API_FOR_URL']->value;
}?>">
                                        <?php if ($_smarty_tpl->tpl_vars['API_ENABLED']->value) {?>
                                            <span class="input-group-append">
                                                <a onclick="copyURL();" class="btn btn-info text-white" id="copy-url-button">
                                                    <?php echo $_smarty_tpl->tpl_vars['COPY']->value;?>

                                                </a>
                                            </span>
                                        <?php }?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="InputAPIKey"><?php echo $_smarty_tpl->tpl_vars['API_KEY']->value;?>
</label>
                                    <div class="input-group">
                                        <input type="text" name="api_key" id="InputAPIKey" class="form-control" readonly
                                            value="<?php if ($_smarty_tpl->tpl_vars['API_ENABLED']->value) {
echo $_smarty_tpl->tpl_vars['API_KEY_VALUE']->value;
} else {
echo $_smarty_tpl->tpl_vars['ENABLE_API_FOR_URL']->value;
}?>">
                                        <?php if ($_smarty_tpl->tpl_vars['API_ENABLED']->value) {?>
                                        <span class="input-group-append"><a onclick="showRegenModal();"
                                                class="btn btn-info text-white"><?php echo $_smarty_tpl->tpl_vars['CHANGE']->value;?>
</a></span>
                                        <?php }?>
                                    </div>
                                </div>

                                <div class="form-group custom-control custom-switch">
                                    <input type="hidden" name="enable_api" value="0">
                                    <input type="checkbox" class="custom-control-input" id="enable_api"
                                        name="enable_api" value="1" <?php if ($_smarty_tpl->tpl_vars['API_ENABLED']->value == 1) {?> checked<?php }?>>
                                    <label class="custom-control-label" for="enable_api"><?php echo $_smarty_tpl->tpl_vars['ENABLE_API']->value;?>
</label>
                                </div>

                                <div class="form-group custom-control custom-switch">
                                    <input name="username_sync" id="username_sync" type="checkbox"
                                        class="custom-control-input" <?php if ($_smarty_tpl->tpl_vars['USERNAME_SYNC_VALUE']->value == 1) {?> checked<?php }?> />
                                    <label class="custom-control-label" for="username_sync"><?php echo $_smarty_tpl->tpl_vars['USERNAME_SYNC']->value;?>
</label>
                                    <span class="badge badge-info">
                                        <i class="fas fa-question-circle" data-container="body" data-toggle="popover"
                                            data-placement="top" title="<?php echo $_smarty_tpl->tpl_vars['INFO']->value;?>
"
                                            data-content="<?php echo $_smarty_tpl->tpl_vars['USERNAME_SYNC_INFO']->value;?>
"></i></span>
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

        <!-- Key regen modal -->
        <div class="modal fade" id="regenModal" tabindex="-1" role="dialog">
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
                        <?php echo $_smarty_tpl->tpl_vars['CONFIRM_API_REGEN']->value;?>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['NO']->value;?>
</button>
                        <button type="button" onclick="regenKey()" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['YES']->value;?>
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
        function showRegenModal() {
            $('#regenModal').modal().show();
        }

        function regenKey() {
            const regen = $.post("<?php echo $_smarty_tpl->tpl_vars['API_KEY_REGEN_URL']->value;?>
", { action: 'regen', token: "<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
" });
            regen.done(() => window.location.reload());
        }

        function copyURL() {
            const url = document.getElementById("InputAPIURL");

            if (window.isSecureContext) {
                navigator.clipboard.writeText(url.value);
            } else {
                url.select();
                document.execCommand("copy");
                url.setSelectionRange(0, 0);
                url.blur();
            }

            const copyUrlButton = document.getElementById('copy-url-button');
            copyUrlButton.innerText = '<?php echo $_smarty_tpl->tpl_vars['COPIED']->value;?>
';
            copyUrlButton.classList.add('disabled');
        }
    <?php echo '</script'; ?>
>

</body>

</html>
<?php }
}
