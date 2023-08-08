<?php
/* Smarty version 4.3.1, created on 2023-06-01 09:05:54
  from '/home/u302265335/domains/rainbowcreation.net/public_html/custom/templates/Cobalt/store/category.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6477fd02378ae8_13264100',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd8d36eb9abba4cb7d280fe8db095e18599592026' => 
    array (
      0 => '/home/u302265335/domains/rainbowcreation.net/public_html/custom/templates/Cobalt/store/category.tpl',
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
function content_6477fd02378ae8_13264100 (Smarty_Internal_Template $_smarty_tpl) {
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
                <div class="card-header header-theme"><?php echo $_smarty_tpl->tpl_vars['STORE']->value;?>
 &raquo; <?php echo $_smarty_tpl->tpl_vars['ACTIVE_CATEGORY']->value;?>
</div>
                <div class="card-body"><?php echo $_smarty_tpl->tpl_vars['CONTENT']->value;?>
</div>
            </div>
            <?php if ((isset($_smarty_tpl->tpl_vars['NO_PRODUCTS']->value))) {?>
                <div class="alert alert-danger">
                    <?php echo $_smarty_tpl->tpl_vars['NO_PRODUCTS']->value;?>

                </div>
            <?php } else { ?>
                <div class="row">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRODUCTS']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                        <div class="col-lg-6 col-xl-4">
                            <div class="card">
                                <div class="card-header header-theme"><?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
</div>
                                <div class="card-body">
                                    <?php if ($_smarty_tpl->tpl_vars['product']->value['image']) {?>
                                        <div class="text-center"><img class="rounded" style="max-width: 100%;"
                                            src="<?php echo $_smarty_tpl->tpl_vars['product']->value['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
"></div><br /> <?php }?>

                                    <span class="store-text-large">
                                        <?php if ($_smarty_tpl->tpl_vars['product']->value['sale_active']) {?>
                                        <span class="store-sale"><?php echo $_smarty_tpl->tpl_vars['product']->value['price_format'];?>
</span><?php }?>
                                        <?php echo $_smarty_tpl->tpl_vars['product']->value['real_price_format'];?>

                                    </span>
                                    <button role="button" class="btn btn-theme float-right" data-toggle="modal"
                                        data-target="#modal<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['BUY']->value;?>
</button>
                                </div>
                            </div>
                        </div>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
            <?php }?>
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
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRODUCTS']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
    <div class="modal fade" id="modal<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
" tabindex="-1" role="dialog" aria-labelledby="modal<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
Label"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <span class="modal-title" id="modal<?php echo $_smarty_tpl->tpl_vars['package']->value['id'];?>
Label"><?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
</span>
                </div>
                <div class="modal-body">
                    <?php if ($_smarty_tpl->tpl_vars['product']->value['image']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['product']->value['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
"><?php }?>
                    <div class="forum_post mb-3"><?php echo $_smarty_tpl->tpl_vars['product']->value['description'];?>
</div>
                    <span class="store-text-large"><?php if ($_smarty_tpl->tpl_vars['product']->value['sale_active']) {?><span style="color: #dc3545;text-decoration:line-through;"><?php echo $_smarty_tpl->tpl_vars['product']->value['price_format'];?>
</span><?php }?> <?php echo $_smarty_tpl->tpl_vars['product']->value['real_price_format'];?>
</span>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['product']->value['link'];?>
" class="btn btn-theme float-right"><?php echo $_smarty_tpl->tpl_vars['BUY']->value;?>
</a>
                    <button type="button" class="btn btn-secondary float-right mr-2" data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['CLOSE']->value;?>
</button>
                </div>
            </div>
        </div>
    </div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
