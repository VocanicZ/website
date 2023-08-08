<?php
/* Smarty version 4.3.1, created on 2023-06-01 07:53:34
  from '/home/u302265335/domains/rainbowcreation.net/public_html/custom/templates/Cobalt/template_settings/settings_pages/news.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6477ec0eac99f4_09182656',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7a7edc21c4c578d256934eb4eb6e69eae1fe26be' => 
    array (
      0 => '/home/u302265335/domains/rainbowcreation.net/public_html/custom/templates/Cobalt/template_settings/settings_pages/news.tpl',
      1 => 1685580388,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./parts/switch.tpl' => 1,
  ),
),false)) {
function content_6477ec0eac99f4_09182656 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./parts/switch.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('name'=>'news_btn','right'=>'no','last'=>'no'), 0, false);
?>
<label><?php echo $_smarty_tpl->tpl_vars['NEWS_LINK']->value;?>
</label>
<input type='text' name='news_link' value='<?php echo $_smarty_tpl->tpl_vars['NEWS_LINK_VALUE']->value;?>
' class='form-control'><?php }
}
