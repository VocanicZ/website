<?php
/* Smarty version 4.3.1, created on 2023-06-01 09:06:04
  from '/home/u302265335/domains/rainbowcreation.net/public_html/custom/templates/Cobalt/store/checkout_add.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6477fd0c87a835_68613623',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9283d9bd63017c284e63e5fbd80aaf08f30b6a68' => 
    array (
      0 => '/home/u302265335/domains/rainbowcreation.net/public_html/custom/templates/Cobalt/store/checkout_add.tpl',
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
function content_6477fd0c87a835_68613623 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php $_smarty_tpl->_subTemplateRender('file:navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
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
            <?php if ((isset($_smarty_tpl->tpl_vars['SUCCESS']->value))) {?>
                <div class="alert alert-success">
                    <?php echo $_smarty_tpl->tpl_vars['SUCCESS']->value;?>

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
            <div class="card">
                <div class="card-header header-theme"><?php echo $_smarty_tpl->tpl_vars['PRODUCT_NAME']->value;?>
</div>
                <div class="card-body">
                    <form action="" method="post" id="forms">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRODUCT_FIELDS']->value, 'field');
$_smarty_tpl->tpl_vars['field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->do_else = false;
?>
                            <div class="form-group">
                                <label for="<?php echo $_smarty_tpl->tpl_vars['field']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['field']->value['description'];?>
 <?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?> <span
                                        class="text-danger"><strong>*</strong></span><?php }?></label>

                                <?php if ($_smarty_tpl->tpl_vars['field']->value['type'] == "1") {?>
                                    <input class="form-control" type="text" name="<?php echo $_smarty_tpl->tpl_vars['field']->value['id'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['field']->value['id'];?>
"
                                        value="<?php echo $_smarty_tpl->tpl_vars['field']->value['value'];?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['field']->value['description'];?>
"
                                        <?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?>required<?php }?>>
                                <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] == "2") {?>
                                    <select class="form-control" name="<?php echo $_smarty_tpl->tpl_vars['field']->value['id'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['field']->value['id'];?>
"
                                        <?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?>required<?php }?>>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['field']->value['options'], 'option');
$_smarty_tpl->tpl_vars['option']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->do_else = false;
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['option']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['option']->value == $_smarty_tpl->tpl_vars['field']->value['value']) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['option']->value;?>
</option>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </select>
                                <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] == "3") {?>
                                    <textarea class="form-control" name="<?php echo $_smarty_tpl->tpl_vars['field']->value['id'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['field']->value['id'];?>
"
                                        <?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?>required<?php }?>><?php echo $_smarty_tpl->tpl_vars['field']->value['value'];?>
</textarea>
                                <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] == "4") {?>
                                    <input class="form-control" type="number" name="<?php echo $_smarty_tpl->tpl_vars['field']->value['id'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['field']->value['id'];?>
"
                                        value="<?php echo $_smarty_tpl->tpl_vars['field']->value['value'];?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['field']->value['description'];?>
"
                                        <?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?>required<?php }?>>
                                <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] == "5") {?>
                                    <input class="form-control" type="email" name="<?php echo $_smarty_tpl->tpl_vars['field']->value['id'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['field']->value['id'];?>
"
                                        value="<?php echo $_smarty_tpl->tpl_vars['field']->value['value'];?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['field']->value['description'];?>
"
                                        <?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?>required<?php }?>>
                                <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] == "6") {?>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['field']->value['options'], 'option');
$_smarty_tpl->tpl_vars['option']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->do_else = false;
?>
                                        <div class="mb-1 mt-1">
                                            <input class="form-control" type="radio" name="<?php echo $_smarty_tpl->tpl_vars['field']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['option']->value;?>
"
                                                <?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?>required<?php }?>>
                                            <label><?php echo $_smarty_tpl->tpl_vars['option']->value;?>
</label>
                                        </div>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] == "7") {?>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['field']->value['options'], 'option');
$_smarty_tpl->tpl_vars['option']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->do_else = false;
?>
                                        <div class="mb-1 mt-1">
                                            <input class="form-control" type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['field']->value['id'];?>
[]" value="<?php echo $_smarty_tpl->tpl_vars['option']->value;?>
">
                                            <label><?php echo $_smarty_tpl->tpl_vars['option']->value;?>
</label>
                                        </div>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                <?php }?>
                            </div>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <div class="form-group">
                            <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                            <button type="submit" class="btn btn-theme"><?php echo $_smarty_tpl->tpl_vars['CONTINUE']->value;?>
</button>
                        </div>
                    </form>
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
