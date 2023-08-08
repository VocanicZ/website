<?php
/* Smarty version 4.3.1, created on 2023-06-01 08:02:27
  from '/home/u302265335/domains/rainbowcreation.net/public_html/custom/templates/Cobalt/forum/search_box.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6477ee23781083_21235905',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f012ad8060b23ad258f18df6cd08cad3cd30243b' => 
    array (
      0 => '/home/u302265335/domains/rainbowcreation.net/public_html/custom/templates/Cobalt/forum/search_box.tpl',
      1 => 1685580388,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6477ee23781083_21235905 (Smarty_Internal_Template $_smarty_tpl) {
?><form class="form-horizontal" role="form" method="post" action="<?php echo $_smarty_tpl->tpl_vars['form_submit']->value;?>
">
    <div class="input-group">
        <input type="text" class="form-control input-sm" name="forum_search" placeholder="<?php echo $_smarty_tpl->tpl_vars['SEARCH']->value;?>
" minlength="3"
            maxlength="128">
        <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
        <span class="input-group-btn">
            <button type="submit" class="btn btn-theme">
                <i class="fa-solid fa-magnifying-glass"></i>
            </button>
        </span>
    </div>
</form><?php }
}
