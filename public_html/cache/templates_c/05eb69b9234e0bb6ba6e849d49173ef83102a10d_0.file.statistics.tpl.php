<?php
/* Smarty version 4.3.1, created on 2023-06-01 07:55:10
  from '/home/u302265335/domains/rainbowcreation.net/public_html/custom/templates/Cobalt/widgets/statistics.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6477ec6ed38b37_02488836',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '05eb69b9234e0bb6ba6e849d49173ef83102a10d' => 
    array (
      0 => '/home/u302265335/domains/rainbowcreation.net/public_html/custom/templates/Cobalt/widgets/statistics.tpl',
      1 => 1685580388,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6477ec6ed38b37_02488836 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="card widget-card stats-card">
    <div class="card-header header-theme widget-header"><?php echo $_smarty_tpl->tpl_vars['STATISTICS']->value;?>
</div>
    <div class="card-body">
      <?php if ((isset($_smarty_tpl->tpl_vars['FORUM_STATISTICS']->value))) {?>
        <?php echo $_smarty_tpl->tpl_vars['TOTAL_THREADS']->value;?>
<b class="float-right"><?php echo $_smarty_tpl->tpl_vars['TOTAL_THREADS_VALUE']->value;?>
</b><br />
        <?php echo $_smarty_tpl->tpl_vars['TOTAL_POSTS']->value;?>
<b class="float-right"><?php echo $_smarty_tpl->tpl_vars['TOTAL_POSTS_VALUE']->value;?>
</b><br />
      <?php }?>
      <?php echo $_smarty_tpl->tpl_vars['USERS_REGISTERED']->value;?>
<b class="float-right"><?php echo $_smarty_tpl->tpl_vars['USERS_REGISTERED_VALUE']->value;?>
</b><br />
      <?php if ($_smarty_tpl->tpl_vars['USERS_ONLINE']->value) {
echo $_smarty_tpl->tpl_vars['USERS_ONLINE']->value;?>
<b class="float-right"><?php echo $_smarty_tpl->tpl_vars['USERS_ONLINE_VALUE']->value;?>
</b><br /><?php }?>
      <?php if ($_smarty_tpl->tpl_vars['GUESTS_ONLINE']->value) {
echo $_smarty_tpl->tpl_vars['GUESTS_ONLINE']->value;?>
<b class="float-right"><?php echo $_smarty_tpl->tpl_vars['GUESTS_ONLINE_VALUE']->value;?>
</b><br /><?php }?>
      <?php if ($_smarty_tpl->tpl_vars['TOTAL_ONLINE']->value) {
echo $_smarty_tpl->tpl_vars['TOTAL_ONLINE']->value;?>
<b class="float-right"><?php echo $_smarty_tpl->tpl_vars['TOTAL_ONLINE_VALUE']->value;?>
</b><br /><?php }?>
      <?php echo $_smarty_tpl->tpl_vars['LATEST_MEMBER']->value;?>
<br /><a class="white-link" style="<?php echo $_smarty_tpl->tpl_vars['LAST_MEMBER_VALUE']->value['style'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['LATEST_MEMBER_VALUE']->value['profile'];?>
" data-poload="<?php echo $_smarty_tpl->tpl_vars['USER_INFO_URL']->value;
echo $_smarty_tpl->tpl_vars['LATEST_MEMBER_VALUE']->value['id'];?>
" data-html="true" data-placement="top"><b><?php echo $_smarty_tpl->tpl_vars['LATEST_MEMBER_VALUE']->value['nickname'];?>
</b></a>
    </div>
</div><?php }
}
