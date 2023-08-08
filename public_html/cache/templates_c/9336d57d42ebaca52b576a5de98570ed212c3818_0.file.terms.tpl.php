<?php
/* Smarty version 4.3.1, created on 2023-06-01 08:04:09
  from '/home/u302265335/domains/rainbowcreation.net/public_html/custom/templates/Cobalt/terms.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6477ee89b59db0_99262126',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9336d57d42ebaca52b576a5de98570ed212c3818' => 
    array (
      0 => '/home/u302265335/domains/rainbowcreation.net/public_html/custom/templates/Cobalt/terms.tpl',
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
function content_6477ee89b59db0_99262126 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php $_smarty_tpl->_subTemplateRender('file:navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
    <div class="card">
        <div class="card-header header-theme"><?php echo $_smarty_tpl->tpl_vars['TERMS']->value;?>
</div>
        <div class="card-body">
            <?php echo $_smarty_tpl->tpl_vars['SITE_TERMS']->value;?>

        </div>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
