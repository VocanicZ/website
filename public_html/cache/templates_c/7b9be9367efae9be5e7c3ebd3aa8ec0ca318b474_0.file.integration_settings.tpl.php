<?php
/* Smarty version 4.3.1, created on 2023-06-01 08:25:43
  from '/home/u302265335/domains/rainbowcreation.net/public_html/custom/panel_templates/Default/integrations/discord/integration_settings.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6477f3974b32c6_25526646',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7b9be9367efae9be5e7c3ebd3aa8ec0ca318b474' => 
    array (
      0 => '/home/u302265335/domains/rainbowcreation.net/public_html/custom/panel_templates/Default/integrations/discord/integration_settings.tpl',
      1 => 1685579651,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6477f3974b32c6_25526646 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="" method="post">
    <div class="form-group">
        <label for="inputLinkMethod"><?php echo $_smarty_tpl->tpl_vars['LINK_METHOD']->value;?>
</label>
        <select name="link_method" class="form-control" id="inputLinkMethod">
            <option value="bot" <?php if ($_smarty_tpl->tpl_vars['LINK_METHOD_VALUE']->value == "bot") {?>
                selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['DISCORD_BOT']->value;?>
</option>
            <option value="oauth" <?php if ($_smarty_tpl->tpl_vars['LINK_METHOD_VALUE']->value == "oauth") {?>
                selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['OAUTH']->value;?>
</option>
        </select>
    </div>
    <div class="form-group">
        <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
        <input type="hidden" name="action" value="integration_settings">
        <input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['SUBMIT']->value;?>
" class="btn btn-primary">
    </div>
</form><?php }
}
