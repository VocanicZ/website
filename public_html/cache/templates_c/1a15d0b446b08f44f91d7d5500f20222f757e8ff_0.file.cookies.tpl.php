<?php
/* Smarty version 4.3.1, created on 2023-06-01 08:13:02
  from '/home/u302265335/domains/rainbowcreation.net/public_html/custom/templates/Cobalt/cookies.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6477f09e583240_88777943',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1a15d0b446b08f44f91d7d5500f20222f757e8ff' => 
    array (
      0 => '/home/u302265335/domains/rainbowcreation.net/public_html/custom/templates/Cobalt/cookies.tpl',
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
function content_6477f09e583240_88777943 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php $_smarty_tpl->_subTemplateRender('file:navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
    <div class="card">
        <div class="card-header header-theme"><?php echo $_smarty_tpl->tpl_vars['COOKIE_NOTICE_HEADER']->value;?>
</div>
        <div class="card-body">
            <?php echo $_smarty_tpl->tpl_vars['COOKIE_NOTICE']->value;?>
<br />
            <button class="btn btn-theme mt-4 d-inline-block" onclick="configureCookies()"><?php echo $_smarty_tpl->tpl_vars['UPDATE_SETTINGS']->value;?>
</button>
        </div>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
