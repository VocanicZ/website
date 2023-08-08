<?php
/* Smarty version 4.3.1, created on 2023-06-01 07:55:10
  from '/home/u302265335/domains/rainbowcreation.net/public_html/custom/templates/Cobalt/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6477ec6ed78d89_49828352',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0eeb2bcb379bef2ba64a78c46892563aabedc6f2' => 
    array (
      0 => '/home/u302265335/domains/rainbowcreation.net/public_html/custom/templates/Cobalt/header.tpl',
      1 => 1685580388,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header-top.tpl' => 1,
  ),
),false)) {
function content_6477ec6ed78d89_49828352 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header-top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </head>
	<body>
    <?php if (((isset($_smarty_tpl->tpl_vars['THEME_LOADING_ANIMATION']->value)) && preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['THEME_LOADING_ANIMATION']->value, $tmp) > 2)) {?>
        <div class="load-wrapper"><div class="loader"><div class="loader-inner line-scale"><div></div><div></div><div></div><div></div><div></div></div></div></div>
    <?php }
}
}
