<?php
/* Smarty version 4.3.1, created on 2023-06-01 08:09:56
  from '/home/u302265335/domains/rainbowcreation.net/public_html/custom/panel_templates/Default/store/general_settings.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6477efe46af174_41038929',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2d994466c38da36016126f93a5e7ca918c8a53e8' => 
    array (
      0 => '/home/u302265335/domains/rainbowcreation.net/public_html/custom/panel_templates/Default/store/general_settings.tpl',
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
function content_6477efe46af174_41038929 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <h1 class="h3 mb-0 text-gray-800"><?php echo $_smarty_tpl->tpl_vars['STORE']->value;?>
</h1>
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo $_smarty_tpl->tpl_vars['PANEL_INDEX']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['DASHBOARD']->value;?>
</a></li>
                        <li class="breadcrumb-item active"><?php echo $_smarty_tpl->tpl_vars['STORE']->value;?>
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

                            <form action="" method="post">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group custom-control custom-switch">
                                            <input type="checkbox" name="allow_guests" id="inputAllowGuests" class="custom-control-input" <?php if ($_smarty_tpl->tpl_vars['ALLOW_GUESTS_VALUE']->value) {?> checked<?php }?> />
                                            <label class="custom-control-label" for="inputAllowGuests"><?php echo $_smarty_tpl->tpl_vars['ALLOW_GUESTS']->value;?>
</label>
                                        </div>

                                        <div class="form-group custom-control custom-switch">
                                            <input type="checkbox" name="player_login" id="inputPlayerLogin" class="custom-control-input" <?php if ($_smarty_tpl->tpl_vars['PLAYER_LOGIN_VALUE']->value) {?> checked<?php }?> />
                                            <label class="custom-control-label" for="inputPlayerLogin"><?php echo $_smarty_tpl->tpl_vars['PLAYER_LOGIN']->value;?>
</label>
                                        </div>

                                        <div class="form-group custom-control custom-switch">
                                            <input type="checkbox" name="show_credits_amount" id="inputShowCreditsAmount" class="custom-control-input" <?php if ($_smarty_tpl->tpl_vars['SHOW_CREDITS_AMOUNT_VALUE']->value) {?> checked<?php }?> />
                                            <label class="custom-control-label" for="inputShowCreditsAmount"><?php echo $_smarty_tpl->tpl_vars['SHOW_CREDITS_AMOUNT']->value;?>
</label>
                                        </div>
                                        
                                        <div class="form-group custom-control custom-switch">
                                            <input type="checkbox" name="user_send_credits" id="inputUserSendCredits" class="custom-control-input" <?php if ($_smarty_tpl->tpl_vars['ALLOW_USERS_TO_SEND_CREDITS_VALUE']->value) {?> checked<?php }?> />
                                            <label class="custom-control-label" for="inputUserSendCredits"><?php echo $_smarty_tpl->tpl_vars['ALLOW_USERS_TO_SEND_CREDITS']->value;?>
</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="inputStorePath"><?php echo $_smarty_tpl->tpl_vars['STORE_PATH']->value;?>
</label>
                                            <input type="text" class="form-control" id="inputStorePath" name="store_path" placeholder="<?php echo $_smarty_tpl->tpl_vars['STORE_PATH']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['STORE_PATH_VALUE']->value;?>
">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="link_location"><?php echo $_smarty_tpl->tpl_vars['LINK_LOCATION']->value;?>
</label>
                                            <select class="form-control" id="link_location" name="link_location">
                                                <option value="1"<?php if ($_smarty_tpl->tpl_vars['LINK_LOCATION_VALUE']->value == 1) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['LINK_NAVBAR']->value;?>
</option>
                                                <option value="2"<?php if ($_smarty_tpl->tpl_vars['LINK_LOCATION_VALUE']->value == 2) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['LINK_MORE']->value;?>
</option>
                                                <option value="3"<?php if ($_smarty_tpl->tpl_vars['LINK_LOCATION_VALUE']->value == 3) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['LINK_FOOTER']->value;?>
</option>
                                                <option value="4"<?php if ($_smarty_tpl->tpl_vars['LINK_LOCATION_VALUE']->value == 4) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['LINK_NONE']->value;?>
</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="link_location"><?php echo $_smarty_tpl->tpl_vars['CURRENCY']->value;?>
</label>
                                            <select class="form-control" id="currency" name="currency">
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CURRENCY_LIST']->value, 'currency');
$_smarty_tpl->tpl_vars['currency']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['currency']->value) {
$_smarty_tpl->tpl_vars['currency']->do_else = false;
?>
                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['currency']->value;?>
"<?php ob_start();
echo $_smarty_tpl->tpl_vars['currency']->value;
$_prefixVariable1 = ob_get_clean();
if ($_smarty_tpl->tpl_vars['CURRENCY_VALUE']->value == $_prefixVariable1) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['currency']->value;?>
</option>
                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="inputCurrencySymbol"><?php echo $_smarty_tpl->tpl_vars['CURRENCY_SYMBOL']->value;?>
</label>
                                            <input type="text" class="form-control" id="inputCurrencySymbol" name="currency_symbol" placeholder="$" value="<?php echo $_smarty_tpl->tpl_vars['CURRENCY_SYMBOL_VALUE']->value;?>
">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="inputCurrencyFormat"><?php echo $_smarty_tpl->tpl_vars['CURRENCY_FORMAT']->value;?>
</label>
                                            <span class="badge badge-info" data-html="true" data-toggle="popover" title="<?php echo $_smarty_tpl->tpl_vars['INFO']->value;?>
" data-content="<?php echo $_smarty_tpl->tpl_vars['CURRENCY_FORMAT_INFO']->value;?>
"><i class="fas fa-question-circle"></i></span>
                                            <input type="text" class="form-control" id="inputCurrencyFormat" name="currency_format" placeholder="<?php echo $_smarty_tpl->tpl_vars['CURRENCY_FORMAT']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['CURRENCY_FORMAT_VALUE']->value;?>
">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="inputValidationMethod">Minecraft Username Validation Method</label>
                                            <select class="form-control" id="inputValidationMethod" name="validation_method">
                                                <option value="nameless" <?php if ($_smarty_tpl->tpl_vars['VALIDATION_METHOD_VALUE']->value == 'nameless') {?>selected<?php }?>>Nameless (Use same setting as your site)</option>
                                                <option value="mojang" <?php if ($_smarty_tpl->tpl_vars['VALIDATION_METHOD_VALUE']->value == 'mojang') {?>selected<?php }?>>Mojang (Online Mode)</option>
                                                <option value="no_validation" <?php if ($_smarty_tpl->tpl_vars['VALIDATION_METHOD_VALUE']->value == 'no_validation') {?>selected<?php }?>>No Validation (Offline - UUID wont work)</option>
                                                <option value="mcstatistics" <?php if ($_smarty_tpl->tpl_vars['VALIDATION_METHOD_VALUE']->value == 'mcstatistics') {?>selected<?php }?> <?php if (!$_smarty_tpl->tpl_vars['MCSTATISTICS_ENABLED']->value) {?>disabled<?php }?>>MCStatistics</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="inputStoreContent"><?php echo $_smarty_tpl->tpl_vars['STORE_INDEX_CONTENT']->value;?>
</label>
                                            <textarea id="inputStoreContent" name="store_content"><?php echo $_smarty_tpl->tpl_vars['STORE_INDEX_CONTENT_VALUE']->value;?>
</textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="inputCheckoutCompleteContent"><?php echo $_smarty_tpl->tpl_vars['CHECKOUT_COMPLETE_CONTENT']->value;?>
</label>
                                            <textarea id="inputCheckoutCompleteContent" name="checkout_complete_content"><?php echo $_smarty_tpl->tpl_vars['CHECKOUT_COMPLETE_CONTENT_VALUE']->value;?>
</textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="inputDiscordMessage">Custom discord message for payment complete</label>
                                            <span class="badge badge-info" data-html="true" data-toggle="popover" title="<?php echo $_smarty_tpl->tpl_vars['INFO']->value;?>
" data-content="Variables available are {username}, {products}, {amount}, {currency} and {gateway}"><i class="fas fa-question-circle"></i></span>
                                            <textarea id="inputDiscordMessage" class="form-control" name="discord_message" rows="3"><?php echo $_smarty_tpl->tpl_vars['DISCORD_MESSAGE_VALUE']->value;?>
</textarea>
                                        </div>

                                        <div class="form-group">
                                            <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                                            <input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['SUBMIT']->value;?>
" class="btn btn-primary">
                                        </div>
                                    </div>
                                </div>
                            </form>

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

    <!-- End Wrapper -->
</div>

<?php $_smarty_tpl->_subTemplateRender('file:scripts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>
</html><?php }
}
