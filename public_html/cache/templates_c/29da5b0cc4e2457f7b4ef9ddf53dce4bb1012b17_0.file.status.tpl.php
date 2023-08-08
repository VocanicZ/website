<?php
/* Smarty version 4.3.1, created on 2023-06-01 08:32:04
  from '/home/u302265335/domains/rainbowcreation.net/public_html/custom/templates/Cobalt/status.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6477f5145b6264_88015954',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '29da5b0cc4e2457f7b4ef9ddf53dce4bb1012b17' => 
    array (
      0 => '/home/u302265335/domains/rainbowcreation.net/public_html/custom/templates/Cobalt/status.tpl',
      1 => 1685580388,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:navbar.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6477f5145b6264_88015954 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php $_smarty_tpl->_subTemplateRender('file:navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
    <div class="card">
        <div class="card-header header-theme"><?php echo $_smarty_tpl->tpl_vars['STATUS']->value;?>
</div>
        <div class="card-body">
            <?php if ((isset($_smarty_tpl->tpl_vars['CLICK_TO_COPY_TOOLTIP']->value))) {?>
                <span class="ip-text mb-3" onclick="copyToClipboard('#ip')" data-toggle="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['CLICK_TO_COPY_TOOLTIP']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['CONNECT_WITH']->value;?>
</span>
            <?php }?>
            <?php if (count($_smarty_tpl->tpl_vars['SERVERS']->value)) {?>
                <div class="row">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SERVERS']->value, 'server', false, NULL, 'serverArray', array (
));
$_smarty_tpl->tpl_vars['server']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['server']->value) {
$_smarty_tpl->tpl_vars['server']->do_else = false;
?>
                <div class="col-md-6">
                    <div class="d-flex server-card card" id="server<?php echo $_smarty_tpl->tpl_vars['server']->value->id;?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['server']->value->id;?>
" data-bungee="<?php echo $_smarty_tpl->tpl_vars['server']->value->bungee;?>
" data-bedrock="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['server']->value->bedrock, ENT_QUOTES, 'UTF-8', true);?>
" data-players="<?php echo $_smarty_tpl->tpl_vars['server']->value->player_list;?>
">
                        <div class="server-icon-box">
                            <i class="fas fa-server"></i>
                        </div>
                        <div class="flex-grow-1 ml-4 position-relative">
                            <div class="server-name"><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['server']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <span class="server-status-box" id="server-status<?php echo $_smarty_tpl->tpl_vars['server']->value->id;?>
"></span>
                            <div class="server-content" id="content<?php echo $_smarty_tpl->tpl_vars['server']->value->id;?>
">
                                <i class="fa fa-spinner fa-pulse" id="spinner<?php echo $_smarty_tpl->tpl_vars['server']->value->id;?>
"></i> <?php echo $_smarty_tpl->tpl_vars['LOADING']->value;?>

                            </div>
                            <?php if ($_smarty_tpl->tpl_vars['server']->value->show_ip) {?>
                                <span id="ip<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['server']->value->id, ENT_QUOTES, 'UTF-8', true);?>
" class="ip-text" onclick="copyToClipboard('#ip<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['server']->value->id, ENT_QUOTES, 'UTF-8', true);?>
')" data-toggle="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['CLICK_TO_COPY_TOOLTIP']->value;?>
"><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['server']->value->query_ip, ENT_QUOTES, 'UTF-8', true);
if ($_smarty_tpl->tpl_vars['server']->value->port && $_smarty_tpl->tpl_vars['server']->value->port != 25565) {?>:<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['server']->value->port, ENT_QUOTES, 'UTF-8', true);
}?></span>
                            <?php }?>
                        </div>
                    </div>
                </div>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
            <?php } else { ?>
                <div class="alert alert-warning"><?php echo $_smarty_tpl->tpl_vars['NO_SERVERS']->value;?>
</div>
            <?php }?>
        </div>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
