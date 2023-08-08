<?php
/* Smarty version 4.3.1, created on 2023-06-01 08:13:07
  from '/home/u302265335/domains/rainbowcreation.net/public_html/custom/templates/Cobalt/store/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6477f0a34e9d67_10144561',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c6fd055544781ea6153ee4070f597d7643cf73aa' => 
    array (
      0 => '/home/u302265335/domains/rainbowcreation.net/public_html/custom/templates/Cobalt/store/index.tpl',
      1 => 1685580388,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:navbar.tpl' => 1,
    'file:store/navbar.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6477f0a34e9d67_10144561 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php $_smarty_tpl->_subTemplateRender('file:navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">

    <?php if ((isset($_smarty_tpl->tpl_vars['SUCCESS']->value))) {?>
        <div class="alert alert-success"><?php echo $_smarty_tpl->tpl_vars['SUCCESS']->value;?>
</div>
    <?php }?>

    <?php if ((isset($_smarty_tpl->tpl_vars['ERRORS']->value))) {?>
        <div class="alert alert-danger">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ERRORS']->value, 'error');
$_smarty_tpl->tpl_vars['error']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->do_else = false;
?>
                <?php echo $_smarty_tpl->tpl_vars['error']->value;?>
<br />
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    <?php }?>

    <div class="row">
        <div class="col-lg-3">
            <?php $_smarty_tpl->_subTemplateRender('file:store/navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php if (count($_smarty_tpl->tpl_vars['WIDGETS_LEFT']->value)) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['WIDGETS_LEFT']->value, 'widget');
$_smarty_tpl->tpl_vars['widget']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['widget']->value) {
$_smarty_tpl->tpl_vars['widget']->do_else = false;
?>
                    <?php echo $_smarty_tpl->tpl_vars['widget']->value;?>

                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>
        </div>
        <div class="<?php if (count($_smarty_tpl->tpl_vars['WIDGETS_RIGHT']->value)) {?>col-lg-6<?php } else { ?>col-lg-9<?php }?>">
            <div class="card">
                <div class="card-header header-theme"><?php echo $_smarty_tpl->tpl_vars['STORE']->value;?>
</div>
                <div class="card-body"><?php echo $_smarty_tpl->tpl_vars['CONTENT']->value;?>
</div>
            </div>
        </div>

        <?php if (count($_smarty_tpl->tpl_vars['WIDGETS_RIGHT']->value)) {?>
            <div class="col-lg-3">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['WIDGETS_RIGHT']->value, 'widget');
$_smarty_tpl->tpl_vars['widget']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['widget']->value) {
$_smarty_tpl->tpl_vars['widget']->do_else = false;
?>
                    <?php echo $_smarty_tpl->tpl_vars['widget']->value;?>

                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        <?php }?>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
