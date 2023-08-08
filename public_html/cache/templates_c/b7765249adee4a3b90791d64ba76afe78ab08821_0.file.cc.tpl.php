<?php
/* Smarty version 4.3.1, created on 2023-06-01 07:53:34
  from '/home/u302265335/domains/rainbowcreation.net/public_html/custom/templates/Cobalt/template_settings/settings_pages/cc.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6477ec0eafc3d3_70912175',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b7765249adee4a3b90791d64ba76afe78ab08821' => 
    array (
      0 => '/home/u302265335/domains/rainbowcreation.net/public_html/custom/templates/Cobalt/template_settings/settings_pages/cc.tpl',
      1 => 1685580388,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6477ec0eafc3d3_70912175 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['custom_code_settings']->value, 'setting', false, NULL, 'custom_code', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['setting']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['setting']->value) {
$_smarty_tpl->tpl_vars['setting']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_custom_code']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_custom_code']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_custom_code']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_custom_code']->value['total'];
?>
<label><?php echo $_smarty_tpl->tpl_vars[''.(mb_strtoupper((string) $_smarty_tpl->tpl_vars['setting']->value ?? '', 'UTF-8'))]->value;?>
</label><span class="float-right"><?php echo $_smarty_tpl->tpl_vars['BLANK']->value;?>
</span>
<textarea name="<?php echo $_smarty_tpl->tpl_vars['setting']->value;?>
" rows="8" class="form-control"><?php echo $_smarty_tpl->tpl_vars[''.(mb_strtoupper((string) $_smarty_tpl->tpl_vars['setting']->value ?? '', 'UTF-8')).'_VALUE']->value;?>
</textarea>
<?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_custom_code']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_custom_code']->value['last'] : null)) {?><br /><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
