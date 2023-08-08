<?php
/* Smarty version 4.3.1, created on 2023-06-01 07:40:38
  from '/home/u302265335/domains/rainbowcreation.net/public_html/custom/panel_templates/Default/scripts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6477e906994964_40884292',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '138e1e97c25bcddae354fe965c60e3ae102ad830' => 
    array (
      0 => '/home/u302265335/domains/rainbowcreation.net/public_html/custom/panel_templates/Default/scripts.tpl',
      1 => 1685579651,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6477e906994964_40884292 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['TEMPLATE_JS']->value, 'script');
$_smarty_tpl->tpl_vars['script']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['script']->value) {
$_smarty_tpl->tpl_vars['script']->do_else = false;
echo $_smarty_tpl->tpl_vars['script']->value;?>

<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php if ((isset($_smarty_tpl->tpl_vars['NEW_UPDATE']->value))) {
if ($_smarty_tpl->tpl_vars['NEW_UPDATE_URGENT']->value != true) {
echo '<script'; ?>
 type="text/javascript">
    $(document).ready(function () {
        $('#closeUpdate').click(function (event) {
            event.preventDefault();

            let expiry = new Date();
            let length = 3600000;
            expiry.setTime(expiry.getTime() + length);

            $.cookie('update-alert-closed', 'true', { path: '/', expires: expiry });
        });

        if ($.cookie('update-alert-closed') === 'true') {
            $('#updateAlert').hide();
        }
    });
<?php echo '</script'; ?>
>
<?php }
}?>

<?php if ((isset($_smarty_tpl->tpl_vars['DEBUGBAR_HTML']->value))) {
echo $_smarty_tpl->tpl_vars['DEBUGBAR_HTML']->value;?>

<?php }
}
}
