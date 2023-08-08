<?php
/* Smarty version 4.3.1, created on 2023-06-01 08:13:09
  from '/home/u302265335/domains/rainbowcreation.net/public_html/custom/templates/Cobalt/forum/profile_tab.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6477f0a54f6059_20843343',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '07f8a9600084d8c00ba47a53a0745b71e6a44171' => 
    array (
      0 => '/home/u302265335/domains/rainbowcreation.net/public_html/custom/templates/Cobalt/forum/profile_tab.tpl',
      1 => 1685580388,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6477f0a54f6059_20843343 (Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['PF_LATEST_POSTS_TITLE']->value;?>
:<br /><br />
<?php if ((isset($_smarty_tpl->tpl_vars['NO_POSTS']->value))) {?>
    <?php echo $_smarty_tpl->tpl_vars['NO_POSTS']->value;?>

<?php } else { ?> 

<div class="card-columns-profile">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PF_LATEST_POSTS']->value, 'post');
$_smarty_tpl->tpl_vars['post']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->do_else = false;
?>
        <div class="card">
            <div class="card-body">
                <?php echo $_smarty_tpl->tpl_vars['post']->value['content'];?>
<br /><hr />
                <a class="white-link" href="<?php echo $_smarty_tpl->tpl_vars['post']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>
</a>
	            <span class="float-right" rel="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['post']->value['date_full'];?>
"><?php echo $_smarty_tpl->tpl_vars['post']->value['date_friendly'];?>
</span>
            </div>
        </div>


<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>

<?php }
}
}
