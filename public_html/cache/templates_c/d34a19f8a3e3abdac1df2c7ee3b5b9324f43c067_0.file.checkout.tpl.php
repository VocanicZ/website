<?php
/* Smarty version 4.3.1, created on 2023-06-01 09:06:06
  from '/home/u302265335/domains/rainbowcreation.net/public_html/custom/templates/Cobalt/store/checkout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6477fd0e283a34_04469943',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd34a19f8a3e3abdac1df2c7ee3b5b9324f43c067' => 
    array (
      0 => '/home/u302265335/domains/rainbowcreation.net/public_html/custom/templates/Cobalt/store/checkout.tpl',
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
function content_6477fd0e283a34_04469943 (Smarty_Internal_Template $_smarty_tpl) {
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
                <div class="card-header header-theme"><?php echo $_smarty_tpl->tpl_vars['STORE']->value;?>
 &raquo; <?php echo $_smarty_tpl->tpl_vars['CHECKOUT']->value;?>
</div>
                <div class="card-body">
                        <span style="display: inline-block; font-size: 1.1rem; font-weight: 500; margin-bottom: 0.5rem"><?php echo $_smarty_tpl->tpl_vars['SHOPPING_CART']->value;?>
</span>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th><?php echo $_smarty_tpl->tpl_vars['NAME']->value;?>
</th>
                                        <th><?php echo $_smarty_tpl->tpl_vars['OPTIONS']->value;?>
</th>
                                        <th><?php echo $_smarty_tpl->tpl_vars['QUANTITY']->value;?>
</th>
                                        <th><?php echo $_smarty_tpl->tpl_vars['PRICE']->value;?>
</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SHOPPING_CART_LIST']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                                        <tr>
                                            <td><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</td>
                                            <td><?php if (count($_smarty_tpl->tpl_vars['item']->value['fields'])) {?> <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['fields'], 'field', false, NULL, 'fields', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_fields']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_fields']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_fields']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_fields']->value['total'];
?><strong><?php echo $_smarty_tpl->tpl_vars['field']->value['description'];?>
</strong>: <?php echo $_smarty_tpl->tpl_vars['field']->value['value'];
if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_fields']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_fields']->value['last'] : null)) {?></br><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> <?php }?></td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['quantity'];?>
</td>
                                                    <td><?php if ($_smarty_tpl->tpl_vars['item']->value['sale_active']) {?><span style="color: #dc3545;text-decoration:line-through;"><?php echo $_smarty_tpl->tpl_vars['item']->value['price_format'];?>
</span><?php }?> <?php echo $_smarty_tpl->tpl_vars['item']->value['real_price_format'];?>
</td>
                                                    <td><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['remove_link'];?>
"
                                                            class="btn btn-secondary"><i class="fas fa-trash"></i></a></td>
                                            </tr>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </tbody>
                            </table>
                        </div>



                                <table class="table table-striped">
                                <tbody>
                                  <?php if ($_smarty_tpl->tpl_vars['TOTAL_DISCOUNT_VALUE']->value > 0) {?>
                                  <tr>
                                    <td><?php echo $_smarty_tpl->tpl_vars['TOTAL_PRICE']->value;?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['TOTAL_PRICE_FORMAT_VALUE']->value;?>
</td>
                                  </tr>
                                  <tr>
                                    <td><?php echo $_smarty_tpl->tpl_vars['TOTAL_DISCOUNT']->value;?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['TOTAL_DISCOUNT_FORMAT_VALUE']->value;?>
</td>
                                  </tr>
                                  <?php }?>
                                  <tr>
                                    <td><?php echo $_smarty_tpl->tpl_vars['PRICE_TO_PAY']->value;?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['TOTAL_REAL_PRICE_FORMAT_VALUE']->value;?>
</td>
                                  </tr>
                                </tbody>
                              </table>
                      
                              <form class="ui form" action="<?php echo $_smarty_tpl->tpl_vars['REDEEM_COUPON_URL']->value;?>
" method="post" id="coupon">

                              <span style="display: inline-block; font-size: 1.1rem; font-weight: 500; margin-bottom: 0.5rem"><?php echo $_smarty_tpl->tpl_vars['REDEEM_COUPON']->value;?>
</span>


                              <input class="form-control" type="text" name="coupon" id="coupon" value="<?php echo $_smarty_tpl->tpl_vars['REDEEM_COUPON_VALUE']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['REDEEM_COUPON_HERE']->value;?>
"/>
                              <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                              <button class="btn btn-theme mt-3 mb-4"><?php echo $_smarty_tpl->tpl_vars['REDEEM']->value;?>
 &raquo;</button>

                              </form>

                              <span style="display: inline-block; font-size: 1.1rem; font-weight: 500; margin-bottom: 0.5rem"><?php echo $_smarty_tpl->tpl_vars['PAYMENT_METHOD']->value;?>
</span>




                                <form action="" method="post" id="forms">


                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PAYMENT_METHODS']->value, 'gateway');
$_smarty_tpl->tpl_vars['gateway']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['gateway']->value) {
$_smarty_tpl->tpl_vars['gateway']->do_else = false;
?>
                                            <div class="mt-1 mb-2">
                                                <input type="radio" name="payment_method" value="<?php echo $_smarty_tpl->tpl_vars['gateway']->value['name'];?>
" required>
                                                <label><?php echo $_smarty_tpl->tpl_vars['gateway']->value['displayname'];?>
</label>
                                            </div>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                <div class="ui checkbox" style="display:inline;">
                                    <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                                    <input type="checkbox" name="t_and_c" value="1" required>
                                    <label><?php echo $_smarty_tpl->tpl_vars['AGREE_T_AND_C_PURCHASE']->value;?>
</label><br />
                                    <button type="submit" class="btn btn-theme"><?php echo $_smarty_tpl->tpl_vars['PURCHASE']->value;?>
 &raquo;</button>
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
?> <?php }
}
