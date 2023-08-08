<?php
/* Smarty version 4.3.1, created on 2023-06-01 07:40:48
  from '/home/u302265335/domains/rainbowcreation.net/public_html/custom/panel_templates/Default/includes/alerts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6477e9103ac4b2_29779898',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fbdbc4bdd2acdd6e3ef6dc65726e487d74e382b2' => 
    array (
      0 => '/home/u302265335/domains/rainbowcreation.net/public_html/custom/panel_templates/Default/includes/alerts.tpl',
      1 => 1685579651,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6477e9103ac4b2_29779898 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['SUCCESS']->value))) {?>
    <div class="alert bg-success text-white alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <h5><i class="icon fa fa-check"></i> <?php echo $_smarty_tpl->tpl_vars['SUCCESS_TITLE']->value;?>
</h5>
        <?php echo $_smarty_tpl->tpl_vars['SUCCESS']->value;?>

    </div>
<?php }
if ((isset($_smarty_tpl->tpl_vars['ERRORS']->value)) && count($_smarty_tpl->tpl_vars['ERRORS']->value)) {?>
    <div class="alert bg-danger text-white alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <h5><i class="icon fas fa-exclamation-triangle"></i> <?php echo $_smarty_tpl->tpl_vars['ERRORS_TITLE']->value;?>
</h5>
        <ul>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ERRORS']->value, 'error');
$_smarty_tpl->tpl_vars['error']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->do_else = false;
?>
                <li><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
    </div>
<?php }
}
}
