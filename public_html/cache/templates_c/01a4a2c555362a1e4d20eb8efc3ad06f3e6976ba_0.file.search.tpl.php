<?php
/* Smarty version 4.3.1, created on 2023-07-01 23:00:15
  from '/home/u302265335/domains/rainbowcreation.net/public_html/custom/templates/Cobalt/forum/search.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64a04d8fde4166_77569588',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '01a4a2c555362a1e4d20eb8efc3ad06f3e6976ba' => 
    array (
      0 => '/home/u302265335/domains/rainbowcreation.net/public_html/custom/templates/Cobalt/forum/search.tpl',
      1 => 1685580388,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:navbar.tpl' => 1,
    'file:forum/search_box.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_64a04d8fde4166_77569588 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php $_smarty_tpl->_subTemplateRender('file:navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
    <?php if ((isset($_smarty_tpl->tpl_vars['ERROR']->value))) {?>
        <div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['ERROR']->value;?>
</div>
    <?php }?>
    <div class="card">
        <div class="card-header header-theme"><?php echo $_smarty_tpl->tpl_vars['FORUM_SEARCH']->value;?>
</div>
        <div class="card-body">
            <?php $_smarty_tpl->_subTemplateRender('file:forum/search_box.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('form_submit'=>$_smarty_tpl->tpl_vars['FORM_ACTION']->value), 0, false);
?>
        </div>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
