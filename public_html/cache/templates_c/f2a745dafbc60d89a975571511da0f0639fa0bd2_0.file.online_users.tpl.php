<?php
/* Smarty version 4.3.1, created on 2023-06-01 07:38:09
  from '/home/u302265335/domains/rainbowcreation.net/public_html/custom/templates/DefaultRevamp/widgets/online_users.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6477e871c32c20_65326943',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f2a745dafbc60d89a975571511da0f0639fa0bd2' => 
    array (
      0 => '/home/u302265335/domains/rainbowcreation.net/public_html/custom/templates/DefaultRevamp/widgets/online_users.tpl',
      1 => 1685579651,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6477e871c32c20_65326943 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="ui fluid card" id="widget-online-users">
    <div class="content">
        <h4 class="ui header"><?php echo $_smarty_tpl->tpl_vars['ONLINE_USERS']->value;?>
</h4>
        <div class="description">
            <?php if ((isset($_smarty_tpl->tpl_vars['ONLINE_USERS_LIST']->value))) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ONLINE_USERS_LIST']->value, 'user', false, NULL, 'online_users_arr', array (
));
$_smarty_tpl->tpl_vars['user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->do_else = false;
?>
                <a class="ui image label" href="<?php echo $_smarty_tpl->tpl_vars['user']->value['profile'];?>
" data-poload="<?php echo $_smarty_tpl->tpl_vars['USER_INFO_URL']->value;
echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['user']->value['avatar'];?>
" alt="<?php if ($_smarty_tpl->tpl_vars['SHOW_NICKNAME_INSTEAD']->value) {
echo $_smarty_tpl->tpl_vars['user']->value['nickname'];
} else {
echo $_smarty_tpl->tpl_vars['user']->value['username'];
}?>"><?php if ($_smarty_tpl->tpl_vars['SHOW_NICKNAME_INSTEAD']->value) {
echo $_smarty_tpl->tpl_vars['user']->value['nickname'];
} else {
echo $_smarty_tpl->tpl_vars['user']->value['username'];
}?>
                </a>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php } else { ?>
                <?php echo $_smarty_tpl->tpl_vars['NO_USERS_ONLINE']->value;?>

            <?php }?>
        </div>
    </div>
    <div class="extra content">
        <?php echo $_smarty_tpl->tpl_vars['TOTAL_ONLINE_USERS']->value;?>

    </div>
</div>
<?php }
}
