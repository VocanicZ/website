<?php
/* Smarty version 4.3.1, created on 2023-06-04 12:45:04
  from '/home/u302265335/domains/rainbowcreation.net/public_html/custom/templates/Cobalt/forum/forum_edit_post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_647c24e0b8dd09_98153697',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5277b781f0a147a956cff396d8cb3621e5b6fa5f' => 
    array (
      0 => '/home/u302265335/domains/rainbowcreation.net/public_html/custom/templates/Cobalt/forum/forum_edit_post.tpl',
      1 => 1685580388,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:navbar.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_647c24e0b8dd09_98153697 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php $_smarty_tpl->_subTemplateRender('file:navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
    <div class="card" id="post-edit">
        <div class="card-header header-theme"><?php echo $_smarty_tpl->tpl_vars['EDITING_POST']->value;?>
</div>
        <div class="card-body">
            <div class="container">
                <?php if ((isset($_smarty_tpl->tpl_vars['ERRORS']->value))) {?>
                <div class="alert alert-danger">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ERRORS']->value, 'error');
$_smarty_tpl->tpl_vars['error']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->do_else = false;
?> <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

                    <br /> <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
                <?php }?>
                <form action="" method="post" id="form-post-edit">
                    <?php if ((isset($_smarty_tpl->tpl_vars['EDITING_TOPIC']->value))) {?>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-lg" name="title" id="title" value="<?php echo $_smarty_tpl->tpl_vars['TOPIC_TITLE_VALUE']->value;?>
">
                    </div>
                    <?php if (count($_smarty_tpl->tpl_vars['LABELS']->value)) {?>
                    <div class="form-group">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LABELS']->value, 'label');
$_smarty_tpl->tpl_vars['label']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['label']->value) {
$_smarty_tpl->tpl_vars['label']->do_else = false;
?>
                        <label for="<?php echo $_smarty_tpl->tpl_vars['label']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['label']->value['html'];?>
</label>
                        <input type="checkbox" name="topic_label[]" id="<?php echo $_smarty_tpl->tpl_vars['label']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['label']->value['id'];?>
"<?php if ($_smarty_tpl->tpl_vars['label']->value['active']) {?> checked="checked"<?php }?>> <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                    <?php }?> <?php }?>
                    <div class="form-group">
                        <textarea name="content" id="editor" rows="20"></textarea>
                    </div>
                    <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                    <button type="submit" class="btn btn-theme"><?php echo $_smarty_tpl->tpl_vars['SUBMIT']->value;?>
</button>
                    <a class="btn btn-secondary" href="<?php echo $_smarty_tpl->tpl_vars['CANCEL_LINK']->value;?>
" onclick="return confirm('<?php echo $_smarty_tpl->tpl_vars['CONFIRM_CANCEL']->value;?>
')"><?php echo $_smarty_tpl->tpl_vars['CANCEL']->value;?>
</a>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
