<?php
/* Smarty version 4.3.1, created on 2023-06-01 08:05:20
  from '/home/u302265335/domains/rainbowcreation.net/public_html/custom/panel_templates/Default/integrations/minecraft/minecraft.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6477eed0e2e666_37914193',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b09a3926cbd76a8d1917b9c74f60a23873401a72' => 
    array (
      0 => '/home/u302265335/domains/rainbowcreation.net/public_html/custom/panel_templates/Default/integrations/minecraft/minecraft.tpl',
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
function content_6477eed0e2e666_37914193 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <h1 class="h3 mb-0 text-gray-800"><?php echo $_smarty_tpl->tpl_vars['MINECRAFT']->value;?>
</h1>
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo $_smarty_tpl->tpl_vars['PANEL_INDEX']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['DASHBOARD']->value;?>
</a></li>
                        <li class="breadcrumb-item active"><?php echo $_smarty_tpl->tpl_vars['INTEGRATIONS']->value;?>
</li>
                        <li class="breadcrumb-item active"><?php echo $_smarty_tpl->tpl_vars['MINECRAFT']->value;?>
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

                        <form id="enableMinecraft" action="" method="post">
                        <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                            <div class="form-group custom-control custom-switch">
                                <input type="hidden" name="enable_minecraft" value="0">
                                <input id="inputEnableMinecraft" name="enable_minecraft" type="checkbox" class="custom-control-input js-check-change" value="1" <?php if ($_smarty_tpl->tpl_vars['MINECRAFT_ENABLED']->value == 1) {?> checked<?php }?> />
                                <label for="inputEnableMinecraft" class="custom-control-label">
                                    <?php echo $_smarty_tpl->tpl_vars['ENABLE_MINECRAFT_INTEGRATION']->value;?>

                                </label>
                            </div>
                        </form>

                        <?php if ($_smarty_tpl->tpl_vars['MINECRAFT_ENABLED']->value == 1) {?>
                            <hr />
                            <form id="enablePremium" action="" method="post">
                                <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                                <div class="form-group custom-control custom-switch">
                                    <input type="hidden" name="premium" value="1">
                                    <input id="inputPremiumAccounts" name="enable_premium_accounts" type="checkbox" class="custom-control-input js-check-change-verification" value="1" <?php if ($_smarty_tpl->tpl_vars['FORCE_PREMIUM_ACCOUNTS_VALUE']->value) {?> checked<?php }?>/>
                                    <label for="inputPremiumAccounts" class="custom-control-label">
                                        <?php echo $_smarty_tpl->tpl_vars['FORCE_PREMIUM_ACCOUNTS']->value;?>

                                    </label>
                                </div>
                            </form>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <?php if ((isset($_smarty_tpl->tpl_vars['AUTHME']->value))) {?>
                                        <tr>
                                            <td>
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['AUTHME_LINK']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['AUTHME']->value;?>
</a>
                                            </td>
                                        </tr>
                                    <?php }?>
                                    <?php if ((isset($_smarty_tpl->tpl_vars['SERVERS']->value))) {?>
                                        <tr>
                                            <td>
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['SERVERS_LINK']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['SERVERS']->value;?>
</a>
                                            </td>
                                        </tr>
                                    <?php }?>
                                    <?php if ((isset($_smarty_tpl->tpl_vars['QUERY_ERRORS']->value))) {?>
                                        <tr>
                                            <td>
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['QUERY_ERRORS_LINK']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['QUERY_ERRORS']->value;?>
</a>
                                            </td>
                                        </tr>
                                    <?php }?>
                                    <?php if ((isset($_smarty_tpl->tpl_vars['BANNERS']->value))) {?>
                                        <tr>
                                            <td>
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['BANNERS_LINK']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['BANNERS']->value;?>
</a>
                                            </td>
                                        </tr>
                                    <?php }?>
                                    <?php if ((isset($_smarty_tpl->tpl_vars['PLACEHOLDERS']->value))) {?>
                                        <tr>
                                            <td>
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['PLACEHOLDERS_LINK']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['PLACEHOLDERS']->value;?>
</a>
                                            </td>
                                        </tr>
                                    <?php }?>
                                </table>
                            </div>
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

    <!-- End Wrapper -->
</div>

<?php $_smarty_tpl->_subTemplateRender('file:scripts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>

</html>
<?php }
}
