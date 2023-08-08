<?php
/* Smarty version 4.3.1, created on 2023-06-01 07:53:34
  from '/home/u302265335/domains/rainbowcreation.net/public_html/custom/templates/Cobalt/template_settings/settings_pages/parts/switch.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6477ec0ea97e56_87437570',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '370b6464340b287247a20b253f648599a65adaf8' => 
    array (
      0 => '/home/u302265335/domains/rainbowcreation.net/public_html/custom/templates/Cobalt/template_settings/settings_pages/parts/switch.tpl',
      1 => 1685580388,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6477ec0ea97e56_87437570 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="form-group custom-control custom-switch">
    <input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" value="no">
    <input id="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" type="checkbox" class="custom-control-input" value="yes" <?php if ($_smarty_tpl->tpl_vars[''.(mb_strtoupper((string) $_smarty_tpl->tpl_vars['name']->value ?? '', 'UTF-8')).'_VALUE']->value == 'yes') {?>checked<?php }?>>
    <label class="custom-control-label" for="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"><?php echo $_smarty_tpl->tpl_vars[''.(mb_strtoupper((string) $_smarty_tpl->tpl_vars['name']->value ?? '', 'UTF-8'))]->value;?>
</label>

    <?php if ($_smarty_tpl->tpl_vars['right']->value !== "no") {?><span class="float-right"><?php echo $_smarty_tpl->tpl_vars['right']->value;?>
</span><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['last']->value !== "yes") {?><br /><?php }?>
</div><?php }
}
