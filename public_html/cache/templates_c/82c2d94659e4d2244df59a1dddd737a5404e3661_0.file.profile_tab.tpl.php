<?php
/* Smarty version 4.3.1, created on 2023-06-01 08:13:09
  from '/home/u302265335/domains/rainbowcreation.net/public_html/custom/templates/Cobalt/friends/profile_tab.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6477f0a5503f38_48841757',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '82c2d94659e4d2244df59a1dddd737a5404e3661' => 
    array (
      0 => '/home/u302265335/domains/rainbowcreation.net/public_html/custom/templates/Cobalt/friends/profile_tab.tpl',
      1 => 1685580388,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6477f0a5503f38_48841757 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['FRIENDS']->value))) {?>
    <?php if ((isset($_smarty_tpl->tpl_vars['FRIENDS']->value['button']))) {?>
        <?php if (($_smarty_tpl->tpl_vars['FRIENDS']->value['button']['action'] == 'add_friend')) {?>
            <?php $_smarty_tpl->_assignInScope('FRIENDS_BUTTON_CLASS', 'btn btn-sm btn-theme');?>
            <?php $_smarty_tpl->_assignInScope('FRIENDS_BUTTON_ICON', '<i class="fa-solid fa-user-plus mr-1"></i>');?>
        <?php } elseif (($_smarty_tpl->tpl_vars['FRIENDS']->value['button']['action'] == 'remove_friend')) {?>
            <?php $_smarty_tpl->_assignInScope('FRIENDS_BUTTON_CLASS', 'btn btn-sm btn-secondary');?>
            <?php $_smarty_tpl->_assignInScope('FRIENDS_BUTTON_ICON', '<i class="fa-solid fa-user-xmark mr-1"></i>');?>
        <?php } elseif (($_smarty_tpl->tpl_vars['FRIENDS']->value['button']['action'] == 'accept_request')) {?>
            <?php $_smarty_tpl->_assignInScope('FRIENDS_BUTTON_CLASS', 'btn btn-sm btn-theme');?>
            <?php $_smarty_tpl->_assignInScope('FRIENDS_BUTTON_ICON', '<i class="fa-solid fa-user-check mr-1"></i>');?>
        <?php } elseif (($_smarty_tpl->tpl_vars['FRIENDS']->value['button']['action'] == 'cancel_request')) {?>
            <?php $_smarty_tpl->_assignInScope('FRIENDS_BUTTON_CLASS', 'btn btn-sm btn-secondary');?>
            <?php $_smarty_tpl->_assignInScope('FRIENDS_BUTTON_ICON', '<i class="fa-solid fa-user-minus mr-1"></i>');?>
        <?php }?>
    <?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['FRIENDS']->value['button']))) {?>
        <form action="" method="post" class="text-right d-block" id="form-friend">
            <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
            <input type="hidden" name="action" value="<?php echo $_smarty_tpl->tpl_vars['FRIENDS']->value['button']['action'];?>
">
            <button type="submit" class="<?php echo $_smarty_tpl->tpl_vars['FRIENDS_BUTTON_CLASS']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['FRIENDS_BUTTON_ICON']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['FRIENDS']->value['button']['text'];?>
</button>
        </form>
    <?php }?>

    <?php if (!empty($_smarty_tpl->tpl_vars['FRIENDS']->value['list'])) {?>
        <div class="row mt-1">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FRIENDS']->value['list'], 'friend');
$_smarty_tpl->tpl_vars['friend']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['friend']->value) {
$_smarty_tpl->tpl_vars['friend']->do_else = false;
?>
                <div class="col-md-3 mb-3">
                    <div class="friend">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['friend']->value['avatar'];?>
" class="avatar-img friend-img">
                        <a class="username" style="<?php echo $_smarty_tpl->tpl_vars['friend']->value['style'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['friend']->value['profile'];?>
"><?php echo $_smarty_tpl->tpl_vars['friend']->value['nickname'];?>
</a>
                    </div>
                </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    <?php } else { ?>
        <?php echo $_smarty_tpl->tpl_vars['FRIENDS']->value['no_friends'];?>

    <?php }
}
}
}
