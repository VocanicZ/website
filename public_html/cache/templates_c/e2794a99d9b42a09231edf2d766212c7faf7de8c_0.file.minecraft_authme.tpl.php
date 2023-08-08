<?php
/* Smarty version 4.3.1, created on 2023-06-04 12:35:24
  from '/home/u302265335/domains/rainbowcreation.net/public_html/custom/panel_templates/Default/integrations/minecraft/minecraft_authme.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_647c229ceb8fd8_79906299',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e2794a99d9b42a09231edf2d766212c7faf7de8c' => 
    array (
      0 => '/home/u302265335/domains/rainbowcreation.net/public_html/custom/panel_templates/Default/integrations/minecraft/minecraft_authme.tpl',
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
function content_647c229ceb8fd8_79906299 (Smarty_Internal_Template $_smarty_tpl) {
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
                        <h1 class="h3 mb-0 text-gray-800"><?php echo $_smarty_tpl->tpl_vars['AUTHME']->value;?>
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
                            <li class="breadcrumb-item active"><?php echo $_smarty_tpl->tpl_vars['AUTHME']->value;?>
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
                                    <?php echo $_smarty_tpl->tpl_vars['AUTHME_INFO']->value;?>

                                </div>
                            </div>
                            <br />

                            <form id="enableAuthMe" action="" method="post">
                                <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                                <div class="form-group custom-control custom-switch">
                                    <input type="hidden" name="enable_authme" value="0">
                                    <input id="inputEnableAuthme" name="enable_authme" type="checkbox" class="custom-control-input js-check-change" value="1" <?php if ($_smarty_tpl->tpl_vars['ENABLE_AUTHME_VALUE']->value) {?> checked<?php }?> />
                                    <label for="inputEnableAuthme" class="custom-control-label">
                                        <?php echo $_smarty_tpl->tpl_vars['ENABLE_AUTHME']->value;?>

                                    </label>
                                </div>
                            </form>

                            <?php if ((isset($_smarty_tpl->tpl_vars['AUTHME_DB_DETAILS']->value))) {?>
                            <hr />
                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="inputHashingAlgorithm"><?php echo $_smarty_tpl->tpl_vars['AUTHME_HASH_ALGORITHM']->value;?>
</label>
                                    <select id="inputHashingAlgorithm" class="form-control" name="hashing_algorithm">
                                        <option value="bcrypt" <?php if ((isset($_smarty_tpl->tpl_vars['AUTHME_DB_DETAILS']->value['hash'])) && $_smarty_tpl->tpl_vars['AUTHME_DB_DETAILS']->value['hash'] == 'bcrypt') {?> selected<?php }?>>
                                            bcrypt
                                        </option>
                                        <option value="sha1" <?php if ((isset($_smarty_tpl->tpl_vars['AUTHME_DB_DETAILS']->value['hash'])) && $_smarty_tpl->tpl_vars['AUTHME_DB_DETAILS']->value['hash'] == 'sha1') {?> selected<?php }?>>
                                            SHA1
                                        </option>
                                        <option value="sha256" <?php if ((isset($_smarty_tpl->tpl_vars['AUTHME_DB_DETAILS']->value['hash'])) && $_smarty_tpl->tpl_vars['AUTHME_DB_DETAILS']->value['hash'] == 'sha256') {?> selected<?php }?>>
                                            SHA256
                                        </option>
                                        <option value="pbkdf2" <?php if ((isset($_smarty_tpl->tpl_vars['AUTHME_DB_DETAILS']->value['hash'])) && $_smarty_tpl->tpl_vars['AUTHME_DB_DETAILS']->value['hash'] == 'pbkdf2') {?> selected<?php }?>>
                                            PBKDF2
                                        </option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="inputDBAddress"><?php echo $_smarty_tpl->tpl_vars['AUTHME_DB_ADDRESS']->value;?>
</label>
                                    <input type="text" class="form-control" name="db_address" value="<?php if ((isset($_smarty_tpl->tpl_vars['AUTHME_DB_DETAILS']->value['address']))) {
echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['AUTHME_DB_DETAILS']->value['address'], ENT_QUOTES, 'UTF-8', true);
}?>">
                                </div>
                                <div class="form-group">
                                    <label for="inputDBPort"><?php echo $_smarty_tpl->tpl_vars['AUTHME_DB_PORT']->value;?>
</label>
                                    <input type="text" class="form-control" name="db_port" value="<?php if ((isset($_smarty_tpl->tpl_vars['AUTHME_DB_DETAILS']->value['port']))) {
echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['AUTHME_DB_DETAILS']->value['port'], ENT_QUOTES, 'UTF-8', true);
} else { ?>3306<?php }?>">
                                </div>
                                <div class="form-group">
                                    <label for="inputDBName"><?php echo $_smarty_tpl->tpl_vars['AUTHME_DB_NAME']->value;?>
</label>
                                    <input type="text" class="form-control" name="db_name" value="<?php if ((isset($_smarty_tpl->tpl_vars['AUTHME_DB_DETAILS']->value['db']))) {
echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['AUTHME_DB_DETAILS']->value['db'], ENT_QUOTES, 'UTF-8', true);
}?>">
                                </div>
                                <div class="form-group">
                                    <label for="inputDBUsername"><?php echo $_smarty_tpl->tpl_vars['AUTHME_DB_USER']->value;?>
</label>
                                    <input type="text" class="form-control" name="db_username" value="<?php if ((isset($_smarty_tpl->tpl_vars['AUTHME_DB_DETAILS']->value['user']))) {
echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['AUTHME_DB_DETAILS']->value['user'], ENT_QUOTES, 'UTF-8', true);
}?>">
                                </div>
                                <div class="form-group">
                                    <label for="inputDBPassword"><?php echo $_smarty_tpl->tpl_vars['AUTHME_DB_PASSWORD']->value;?>
</label> <span class="badge badge-info"><i class="fa fa-question-circle" data-container="body" data-toggle="popover" data-placement="top" title="<?php echo $_smarty_tpl->tpl_vars['INFO']->value;?>
" data-content="<?php echo $_smarty_tpl->tpl_vars['AUTHME_DB_PASSWORD_HIDDEN']->value;?>
"></i></span>
                                    <input type="password" class="form-control" name="db_password">
                                </div>
                                <div class="form-group">
                                    <label for="inputDBTable"><?php echo $_smarty_tpl->tpl_vars['AUTHME_DB_TABLE']->value;?>
</label>
                                    <input type="text" class="form-control" name="db_table" value="<?php if ((isset($_smarty_tpl->tpl_vars['AUTHME_DB_DETAILS']->value['table']))) {
echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['AUTHME_DB_DETAILS']->value['table'], ENT_QUOTES, 'UTF-8', true);
} else { ?>authme<?php }?>">
                                </div>
                                <div class="form-group">
                                    <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                                    <input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['SUBMIT']->value;?>
" class="btn btn-primary">
                                    <button class="btn btn-info" id="testConnection"><?php echo $_smarty_tpl->tpl_vars['TEST_CONNECTION']->value;?>
</button>
                                    <span id="connectionTestResult"></span>
                                </div>
                            </form>
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

    <?php echo '<script'; ?>
>
        document.getElementById('testConnection').addEventListener('click', (e) => {
            e.preventDefault();

            e.target.classList.add('disabled');

            $.post('<?php echo $_smarty_tpl->tpl_vars['AUTHME_DB_CONNECTION_TEST_URL']->value;?>
', {
                token: '<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
',
                db_address: $('input[name="db_address"]').val(),
                db_port: $('input[name="db_port"]').val(),
                db_name: $('input[name="db_name"]').val(),
                db_username: $('input[name="db_username"]').val(),
                db_password: $('input[name="db_password"]').val(),
                db_table: $('input[name="db_table"]').val(),
            }).done(function (resp) {
                const success = resp === 'OK';
                const colour = success ? 'success' : 'danger';
                const text = success ? '<?php echo $_smarty_tpl->tpl_vars['CONNECTION_SUCCESS']->value;?>
' : '<?php echo $_smarty_tpl->tpl_vars['CONNECTION_FAILED']->value;?>
';
                const icon = success ? 'check' : 'times';

                document.getElementById('connectionTestResult').innerHTML = '<span class="badge badge-' + colour + '" style="font-size: 0.9rem;">' + text + '&nbsp;<i class="fas fa-' + icon + '-circle"></i></span>';
            });

            e.target.classList.remove('disabled');
        });
    <?php echo '</script'; ?>
>

</body>

</html>
<?php }
}
