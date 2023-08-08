<?php
/* Smarty version 4.3.1, created on 2023-06-01 08:05:45
  from '/home/u302265335/domains/rainbowcreation.net/public_html/custom/panel_templates/Default/core/emails.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6477eee95d0ac8_71909223',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '015f3e4643d89a9f2c66e3d38db9bdf6aefe2088' => 
    array (
      0 => '/home/u302265335/domains/rainbowcreation.net/public_html/custom/panel_templates/Default/core/emails.tpl',
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
function content_6477eee95d0ac8_71909223 (Smarty_Internal_Template $_smarty_tpl) {
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
                        <h1 class="h3 mb-0 text-gray-800"><?php echo $_smarty_tpl->tpl_vars['EMAILS']->value;?>
</h1>
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?php echo $_smarty_tpl->tpl_vars['PANEL_INDEX']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['DASHBOARD']->value;?>
</a></li>
                            <li class="breadcrumb-item active"><?php echo $_smarty_tpl->tpl_vars['CONFIGURATION']->value;?>
</li>
                            <li class="breadcrumb-item active"><?php echo $_smarty_tpl->tpl_vars['EMAILS']->value;?>
</li>
                        </ol>
                    </div>

                    <!-- Update Notification -->
                    <?php $_smarty_tpl->_subTemplateRender('file:includes/update.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <?php if ((isset($_smarty_tpl->tpl_vars['MASS_MESSAGE_LINK']->value))) {?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['MASS_MESSAGE_LINK']->value;?>
" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['MASS_MESSAGE']->value;?>
</a>
                            <?php }?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['EDIT_EMAIL_MESSAGES_LINK']->value;?>
" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['EDIT_EMAIL_MESSAGES']->value;?>
</a>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['EMAIL_ERRORS_LINK']->value;?>
" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['EMAIL_ERRORS']->value;?>
</a>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['SEND_TEST_EMAIL_LINK']->value;?>
" class="btn btn-info"><?php echo $_smarty_tpl->tpl_vars['SEND_TEST_EMAIL']->value;?>
</a>

                            <hr />

                            <!-- Success and Error Alerts -->
                            <?php $_smarty_tpl->_subTemplateRender('file:includes/alerts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="InputOutgoingEmail"><?php echo $_smarty_tpl->tpl_vars['OUTGOING_EMAIL']->value;?>
</label>
                                    <span class="badge badge-info"><i class="fa fa-question-circle"
                                            data-container="body" data-toggle="popover" title="<?php echo $_smarty_tpl->tpl_vars['INFO']->value;?>
"
                                            data-content="<?php echo $_smarty_tpl->tpl_vars['OUTGOING_EMAIL_INFO']->value;?>
"></i></span>
                                    <input type="text" id="InputOutgoingEmail" name="email"
                                        value="<?php echo $_smarty_tpl->tpl_vars['OUTGOING_EMAIL_VALUE']->value;?>
" class="form-control">
                                </div>
                                <div class="form-group custom-control custom-switch">
                                    <input type="hidden" name="enable_mailer" value="0">
                                    <input id="inputMailer" name="enable_mailer" type="checkbox"
                                        class="custom-control-input" value="1" <?php if ($_smarty_tpl->tpl_vars['ENABLE_MAILER_VALUE']->value == 1) {?>
                                        checked<?php }?> />
                                    <label class="custom-control-label" for="inputMailer"><?php echo $_smarty_tpl->tpl_vars['ENABLE_MAILER']->value;?>
</label>
                                    <span class="badge badge-info"><i class="fa fa-question-circle"
                                            data-container="body" data-toggle="popover" title="<?php echo $_smarty_tpl->tpl_vars['INFO']->value;?>
"
                                            data-content="<?php echo $_smarty_tpl->tpl_vars['ENABLE_MAILER_HELP']->value;?>
"></i></span>
                                </div>
                                <div id="smtp-fields">
                                    <div class="form-group">
                                        <label for="inputUsername"><?php echo $_smarty_tpl->tpl_vars['USERNAME']->value;?>
</label>
                                        <input class="form-control" type="text" name="username" value="<?php echo $_smarty_tpl->tpl_vars['USERNAME_VALUE']->value;?>
"
                                            id="inputUsername">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword"><?php echo $_smarty_tpl->tpl_vars['PASSWORD']->value;?>
</label>
                                        <span class="badge badge-info"><i class="fa fa-question-circle"
                                                data-container="body" data-toggle="popover" title="<?php echo $_smarty_tpl->tpl_vars['INFO']->value;?>
"
                                                data-content="<?php echo $_smarty_tpl->tpl_vars['PASSWORD_HIDDEN']->value;?>
"></i></span>
                                        <input class="form-control" type="password" name="password" id="inputPassword">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputName"><?php echo $_smarty_tpl->tpl_vars['NAME']->value;?>
</label>
                                        <input class="form-control" type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['NAME_VALUE']->value;?>
"
                                            id="inputName">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputHost"><?php echo $_smarty_tpl->tpl_vars['HOST']->value;?>
</label>
                                        <input class="form-control" type="text" name="host" value="<?php echo $_smarty_tpl->tpl_vars['HOST_VALUE']->value;?>
"
                                            id="inputHost">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPort"><?php echo $_smarty_tpl->tpl_vars['PORT']->value;?>
</label>
                                        <input class="form-control" type="text" name="port" value="<?php echo $_smarty_tpl->tpl_vars['PORT_VALUE']->value;?>
"
                                            id="inputPort">
                                    </div>
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

        <!-- End Wrapper -->
    </div>

    <?php $_smarty_tpl->_subTemplateRender('file:scripts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php echo '<script'; ?>
>
        document.getElementById('inputMailer').addEventListener('change', (e) => {
            toggleSmtpFields(e.target.checked);
        });

        const toggleSmtpFields = (enabled) => {
            const div = document.getElementById('smtp-fields');
            if (enabled) {
                div.style.display = 'block';
            } else {
                div.style.display = 'none';
            }
        }

        toggleSmtpFields(<?php echo $_smarty_tpl->tpl_vars['ENABLE_MAILER_VALUE']->value;?>
);
    <?php echo '</script'; ?>
>

</body>

</html>
<?php }
}
