<?php
/* Smarty version 4.3.1, created on 2023-06-01 08:56:35
  from '/home/u302265335/domains/rainbowcreation.net/public_html/custom/templates/Cobalt/forgot_password.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6477fad3786261_11635296',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f7c153743ee823d102b30d315eaddeba8b605c84' => 
    array (
      0 => '/home/u302265335/domains/rainbowcreation.net/public_html/custom/templates/Cobalt/forgot_password.tpl',
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
function content_6477fad3786261_11635296 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php $_smarty_tpl->_subTemplateRender('file:navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
    <?php if ((isset($_smarty_tpl->tpl_vars['ERROR']->value))) {?>
        <div class="alert alert-danger">
            <?php echo $_smarty_tpl->tpl_vars['ERROR']->value;?>

        </div>
    <?php } elseif ((isset($_smarty_tpl->tpl_vars['SUCCESS']->value))) {?>
        <div class="alert alert-success">
            <?php echo $_smarty_tpl->tpl_vars['SUCCESS']->value;?>

        </div>
    <?php }?>
    <div class="card">
        <div class="card-header header-theme"><?php echo $_smarty_tpl->tpl_vars['FORGOT_PASSWORD']->value;?>
</div>
        <div class="card-body">
            <form role="form" action="" method="post">
                <p><?php echo $_smarty_tpl->tpl_vars['FORGOT_PASSWORD_INSTRUCTIONS']->value;?>
</p>
                <div class="form-group">
                    <input type="email" id="inputEmail" name="email" placeholder="<?php echo $_smarty_tpl->tpl_vars['EMAIL_ADDRESS']->value;?>
" class="form-control">
                </div>
                <div class="form-group">
                    <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                    <button type="submit" class="btn btn-theme"><?php echo $_smarty_tpl->tpl_vars['SUBMIT']->value;?>
</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
