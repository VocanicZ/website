<?php
/* Smarty version 4.3.1, created on 2023-06-01 21:40:55
  from '/home/u302265335/domains/rainbowcreation.net/public_html/custom/templates/Cobalt/privacy.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6478adf799a894_46237374',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8d1eaf18845f97ceebff7178b8a1a146c446bfd2' => 
    array (
      0 => '/home/u302265335/domains/rainbowcreation.net/public_html/custom/templates/Cobalt/privacy.tpl',
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
function content_6478adf799a894_46237374 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
    <div class="card">
        <div class="card-header header-theme"><?php echo $_smarty_tpl->tpl_vars['PRIVACY_POLICY']->value;?>
</div>
        <div class="card-body">
            <?php echo $_smarty_tpl->tpl_vars['POLICY']->value;?>

        </div>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
