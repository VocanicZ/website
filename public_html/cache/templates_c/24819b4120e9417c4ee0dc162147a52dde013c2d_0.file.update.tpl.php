<?php
/* Smarty version 4.3.1, created on 2023-06-01 07:40:43
  from '/home/u302265335/domains/rainbowcreation.net/public_html/custom/panel_templates/Default/includes/update.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6477e90b7d3e29_77127709',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '24819b4120e9417c4ee0dc162147a52dde013c2d' => 
    array (
      0 => '/home/u302265335/domains/rainbowcreation.net/public_html/custom/panel_templates/Default/includes/update.tpl',
      1 => 1685579651,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6477e90b7d3e29_77127709 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['NEW_UPDATE']->value))) {?>
    <?php if ($_smarty_tpl->tpl_vars['NEW_UPDATE_URGENT']->value == true) {?>
        <div class="alert bg-danger text-white">
    <?php } else { ?>
        <div class="alert bg-primary text-white alert-dismissible" id="updateAlert">
        <button type="button" class="close" id="closeUpdate" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    <?php }?>
    <?php echo $_smarty_tpl->tpl_vars['NEW_UPDATE']->value;?>
<br />
    <a href="<?php echo $_smarty_tpl->tpl_vars['NAMELESS_UPDATE_LINK']->value;?>
" class="btn btn-info"><?php echo $_smarty_tpl->tpl_vars['NAMELESS_UPDATE']->value;?>
</a>
    <hr style="border-color: rgba(0,0,0,.1)" /> <?php echo $_smarty_tpl->tpl_vars['CURRENT_VERSION']->value;?>

    <br /><?php echo $_smarty_tpl->tpl_vars['NEW_VERSION']->value;?>

    </div>
<?php }
}
}
