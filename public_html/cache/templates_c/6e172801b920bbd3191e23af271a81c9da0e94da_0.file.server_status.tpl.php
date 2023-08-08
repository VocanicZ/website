<?php
/* Smarty version 4.3.1, created on 2023-06-01 08:23:50
  from '/home/u302265335/domains/rainbowcreation.net/public_html/custom/templates/Cobalt/widgets/server_status.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6477f326c818d2_76308320',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6e172801b920bbd3191e23af271a81c9da0e94da' => 
    array (
      0 => '/home/u302265335/domains/rainbowcreation.net/public_html/custom/templates/Cobalt/widgets/server_status.tpl',
      1 => 1685580388,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6477f326c818d2_76308320 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="card widget-card">
    <div class="card-header header-theme widget-header">
        <div class="widget-header-txt"><?php echo $_smarty_tpl->tpl_vars['SERVER_STATUS']->value;?>
</div>
        <div class="status-badge">
            <?php if ($_smarty_tpl->tpl_vars['SERVER']->value['status_value'] == 1) {?>
                <span class="badge badge-success"><?php echo $_smarty_tpl->tpl_vars['ONLINE']->value;?>
</span>
            <?php } else { ?>
                <span class="badge badge-danger"><?php echo $_smarty_tpl->tpl_vars['OFFLINE']->value;?>
</span>
            <?php }?>
        </div>
    </div>
    <div class="card-body">
        <?php if ((isset($_smarty_tpl->tpl_vars['SERVER']->value))) {?>
            <?php if ($_smarty_tpl->tpl_vars['SERVER']->value['status_value'] == 1) {?>
                <?php echo $_smarty_tpl->tpl_vars['ONLINE']->value;?>
: <strong><?php echo $_smarty_tpl->tpl_vars['SERVER']->value['player_count'];?>
 / <?php echo $_smarty_tpl->tpl_vars['SERVER']->value['player_count_max'];?>
</strong><br />
                <?php echo $_smarty_tpl->tpl_vars['IP']->value;?>
: <strong><?php echo $_smarty_tpl->tpl_vars['SERVER']->value['join_at'];?>
</strong><br />
                <?php if ((isset($_smarty_tpl->tpl_vars['VERSION']->value))) {
echo $_smarty_tpl->tpl_vars['VERSION']->value;?>
<br /><?php }?>
                <?php if ((isset($_smarty_tpl->tpl_vars['SERVER']->value['format_player_list'])) && count($_smarty_tpl->tpl_vars['SERVER']->value['format_player_list'])) {?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SERVER']->value['format_player_list'], 'player');
$_smarty_tpl->tpl_vars['player']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['player']->value) {
$_smarty_tpl->tpl_vars['player']->do_else = false;
?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['player']->value['profile'];?>
" data-toggle="tooltip" data-original-title="<?php echo $_smarty_tpl->tpl_vars['player']->value['username'];?>
"><img class="avatar-img" src="<?php echo $_smarty_tpl->tpl_vars['player']->value['avatar'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['player']->value['username'];?>
" style="width: 35px; margin-bottom: 5px" /></a>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php }?>
            <?php }?>
        <?php } else { ?>
            <?php echo $_smarty_tpl->tpl_vars['NO_SERVERS']->value;?>

        <?php }?>
    </div>
</div><?php }
}
