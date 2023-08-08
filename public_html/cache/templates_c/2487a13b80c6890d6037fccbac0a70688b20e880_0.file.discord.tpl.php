<?php
/* Smarty version 4.3.1, created on 2023-06-01 08:04:42
  from '/home/u302265335/domains/rainbowcreation.net/public_html/custom/panel_templates/Default/integrations/discord/discord.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6477eeaa98c8a3_40155725',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2487a13b80c6890d6037fccbac0a70688b20e880' => 
    array (
      0 => '/home/u302265335/domains/rainbowcreation.net/public_html/custom/panel_templates/Default/integrations/discord/discord.tpl',
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
function content_6477eeaa98c8a3_40155725 (Smarty_Internal_Template $_smarty_tpl) {
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
                        <h1 class="h3 mb-0 text-gray-800"><?php echo $_smarty_tpl->tpl_vars['DISCORD']->value;?>
</h1>
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?php echo $_smarty_tpl->tpl_vars['PANEL_INDEX']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['DASHBOARD']->value;?>
</a></li>
                            <li class="breadcrumb-item active"><?php echo $_smarty_tpl->tpl_vars['INTEGRATIONS']->value;?>
</li>
                            <li class="breadcrumb-item active"><?php echo $_smarty_tpl->tpl_vars['DISCORD']->value;?>
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

                            <div class="card shadow border-left-primary">
                                <div class="card-body">
                                    <h5><i class="icon fa fa-info-circle"></i> <?php echo $_smarty_tpl->tpl_vars['INFO']->value;?>
</h5>
                                    <?php echo $_smarty_tpl->tpl_vars['INVITE_LINK']->value;?>

                                </div>
                            </div>
                            <br />

                            <h4><?php echo $_smarty_tpl->tpl_vars['REQUIREMENTS']->value;?>
</h4>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <tbody>
                                        <tr>
                                            <td><?php echo $_smarty_tpl->tpl_vars['BOT_SETUP']->value;?>
</td>
                                            <td class="text-right"><?php if ($_smarty_tpl->tpl_vars['BOT_URL_SET']->value && $_smarty_tpl->tpl_vars['GUILD_ID_SET']->value && $_smarty_tpl->tpl_vars['BOT_USERNAME_SET']->value) {?>
                                                <i class="fas fa-check-circle text-success"></i>
                                                <?php } else { ?>
                                                <i class="fas fa-times-circle text-danger"></i>
                                                <?php }?>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <hr>

                            <form id="settings" action="" method="post">
                                <div class="form-group custom-control custom-switch">
                                    <input id="inputEnableDiscord" name="enable_discord" type="checkbox"
                                        class="custom-control-input" value="1" <?php if ($_smarty_tpl->tpl_vars['DISCORD_ENABLED']->value == 1) {?>
                                        checked<?php }?> />
                                    <label for="inputEnableDiscord" class="custom-control-label">
                                        <?php echo $_smarty_tpl->tpl_vars['ENABLE_DISCORD_INTEGRATION']->value;?>

                                    </label>
                                </div>
                                <div class="form-group">
                                    <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                                    <input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['SUBMIT']->value;?>
" class="btn btn-primary" <?php if (!$_smarty_tpl->tpl_vars['BOT_URL_SET']->value || !$_smarty_tpl->tpl_vars['GUILD_ID_SET']->value) {?> disabled <?php }?>>
                                </div>
                            </form>

                            <hr>
                            <form action="" method="POST">
                                <div class="form-group">
                                    <label for="inputDiscordId"><?php echo $_smarty_tpl->tpl_vars['DISCORD_GUILD_ID']->value;?>
 <span class="badge badge-info"
                                            data-toggle="popover" data-title="<?php echo $_smarty_tpl->tpl_vars['INFO']->value;?>
"
                                            data-content="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['ID_INFO']->value, ENT_QUOTES, 'UTF-8', true);?>
"><i class="fa fa-question"></i></label>
                                    <input class="form-control" type="number" name="discord_guild_id"
                                        id="inputDiscordId" value="<?php echo $_smarty_tpl->tpl_vars['DISCORD_GUILD_ID_VALUE']->value;?>
">
                                </div>
                                <div type="form-group">
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

        <!-- End Wrapper -->
    </div>

    <?php $_smarty_tpl->_subTemplateRender('file:scripts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>

</html>
<?php }
}
