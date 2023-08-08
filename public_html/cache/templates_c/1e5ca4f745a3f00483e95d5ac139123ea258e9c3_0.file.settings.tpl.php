<?php
/* Smarty version 4.3.1, created on 2023-06-01 09:01:53
  from '/home/u302265335/domains/rainbowcreation.net/public_html/modules/Store/gateways/PayPal/gateway_settings/settings.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6477fc11190389_83882434',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1e5ca4f745a3f00483e95d5ac139123ea258e9c3' => 
    array (
      0 => '/home/u302265335/domains/rainbowcreation.net/public_html/modules/Store/gateways/PayPal/gateway_settings/settings.tpl',
      1 => 1685580583,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6477fc11190389_83882434 (Smarty_Internal_Template $_smarty_tpl) {
?>                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="inputPaypalId">PayPal Email</label>
                                    <input class="form-control" type="email" id="inputPayPalEmail" name="paypal_email" value="<?php echo $_smarty_tpl->tpl_vars['PAYPAL_EMAIL_VALUE']->value;?>
" placeholder="PayPal Email">
                                </div>
                                
                                <div class="form-group custom-control custom-switch">
                                    <input id="inputEnabled" name="enable" type="checkbox" class="custom-control-input"<?php if ($_smarty_tpl->tpl_vars['ENABLE_VALUE']->value == 1) {?> checked<?php }?> />
                                    <label class="custom-control-label" for="inputEnabled">Enable Payment Method</label>
                                </div>

                                <div class="form-group">
                                    <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                                    <input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['SUBMIT']->value;?>
" class="btn btn-primary">
                                </div>
                            </form><?php }
}
