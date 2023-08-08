<?php
/* Smarty version 4.3.1, created on 2023-06-01 09:11:54
  from '/home/u302265335/domains/rainbowcreation.net/public_html/custom/templates/Cobalt/store/user/store.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6477fe6a139fa6_67058950',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b9c9e894763849d152f3b536089028689a1f1add' => 
    array (
      0 => '/home/u302265335/domains/rainbowcreation.net/public_html/custom/templates/Cobalt/store/user/store.tpl',
      1 => 1685580388,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:navbar.tpl' => 1,
    'file:user/navigation.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6477fe6a139fa6_67058950 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php $_smarty_tpl->_subTemplateRender('file:navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
    <div class="row">
        <div class="col-lg-3">
            <?php $_smarty_tpl->_subTemplateRender('file:user/navigation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
        <div class="col-lg-9">
            <div class="card">
                <div class="card-header header-theme"><?php echo $_smarty_tpl->tpl_vars['STORE']->value;?>
</div>
                <div class="card-body">
                    <?php echo $_smarty_tpl->tpl_vars['CREDITS']->value;?>
: <?php echo $_smarty_tpl->tpl_vars['CREDITS_FORMAT_VALUE']->value;?>

                </div>
            </div>
            <div class="card">
                <div class="card-header header-theme"><?php echo $_smarty_tpl->tpl_vars['MY_TRANSACTIONS']->value;?>
</div>
                <div class="card-body">
                    
                    <?php if (count($_smarty_tpl->tpl_vars['TRANSACTIONS_LIST']->value)) {?>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th><?php echo $_smarty_tpl->tpl_vars['TRANSACTION']->value;?>
</th>
                                        <th><?php echo $_smarty_tpl->tpl_vars['AMOUNT']->value;?>
</th>
                                        <th><?php echo $_smarty_tpl->tpl_vars['DATE']->value;?>
</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['TRANSACTIONS_LIST']->value, 'transaction');
$_smarty_tpl->tpl_vars['transaction']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['transaction']->value) {
$_smarty_tpl->tpl_vars['transaction']->do_else = false;
?>
                                        <tr>
                                            <td><?php echo $_smarty_tpl->tpl_vars['transaction']->value['transaction'];?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['transaction']->value['amount_format'];?>
</td>
                                            <td><span data-toggle="tooltip"
                                                    title="<?php echo $_smarty_tpl->tpl_vars['transaction']->value['date_full'];?>
"><?php echo $_smarty_tpl->tpl_vars['transaction']->value['date_friendly'];?>
</span></td>
                                        </tr>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </tbody>
                            </table>
                        </div>
                    <?php } else { ?>
                        <?php echo $_smarty_tpl->tpl_vars['NO_TRANSACTIONS']->value;?>

                    <?php }?>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
