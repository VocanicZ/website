<?php
/* Smarty version 4.3.1, created on 2023-06-01 07:53:34
  from '/home/u302265335/domains/rainbowcreation.net/public_html/custom/templates/Cobalt/template_settings/settings_pages/parts/range.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6477ec0eabdff2_26456385',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '034a633509c9a7d5d9dd1015541c6cb76c1d1819' => 
    array (
      0 => '/home/u302265335/domains/rainbowcreation.net/public_html/custom/templates/Cobalt/template_settings/settings_pages/parts/range.tpl',
      1 => 1685580388,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6477ec0eabdff2_26456385 (Smarty_Internal_Template $_smarty_tpl) {
?><label><?php echo $_smarty_tpl->tpl_vars[''.(mb_strtoupper((string) $_smarty_tpl->tpl_vars['name']->value ?? '', 'UTF-8'))]->value;?>
</label><?php if ($_smarty_tpl->tpl_vars['right']->value !== "no") {?><span class="float-right"><?php echo $_smarty_tpl->tpl_vars['right']->value;?>
</span><?php }?><br />
<input type="range" name='<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
' value="<?php echo $_smarty_tpl->tpl_vars[''.(mb_strtoupper((string) $_smarty_tpl->tpl_vars['name']->value ?? '', 'UTF-8')).'_VALUE']->value;?>
" min="0" max="1" step="0.05" oninput="this.nextElementSibling.value = this.value">
<output><?php echo $_smarty_tpl->tpl_vars[''.(mb_strtoupper((string) $_smarty_tpl->tpl_vars['name']->value ?? '', 'UTF-8')).'_VALUE']->value;?>
</output>
<?php if ($_smarty_tpl->tpl_vars['last']->value !== "yes") {?><br /><br /><?php }
}
}
