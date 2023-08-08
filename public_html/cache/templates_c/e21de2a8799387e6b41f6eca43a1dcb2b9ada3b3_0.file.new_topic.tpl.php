<?php
/* Smarty version 4.3.1, created on 2023-06-04 12:43:22
  from '/home/u302265335/domains/rainbowcreation.net/public_html/custom/templates/Cobalt/forum/new_topic.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_647c247ada8ee2_31102720',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e21de2a8799387e6b41f6eca43a1dcb2b9ada3b3' => 
    array (
      0 => '/home/u302265335/domains/rainbowcreation.net/public_html/custom/templates/Cobalt/forum/new_topic.tpl',
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
function content_647c247ada8ee2_31102720 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php $_smarty_tpl->_subTemplateRender('file:navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
    <?php if ((isset($_smarty_tpl->tpl_vars['ERROR']->value))) {?>
        <div class="alert alert-danger">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ERROR']->value, 'item', false, NULL, 'arr', array (
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?> <?php echo $_smarty_tpl->tpl_vars['item']->value;?>

            <br /> <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    <?php }?>
    <div class="card">
        <div class="card-header header-theme"><?php echo $_smarty_tpl->tpl_vars['CREATING_TOPIC_IN']->value;?>
</div>
        <div class="card-body">
            <div class="container">
                <form action="" method="post" id="form-new-topic">
                    <div class="form-group">
                        <input type="text" class="form-control form-control-lg" name="title" placeholder="<?php echo $_smarty_tpl->tpl_vars['TOPIC_TITLE']->value;?>
" maxlength="64" value="<?php echo $_smarty_tpl->tpl_vars['TOPIC_VALUE']->value;?>
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
"<?php if ($_smarty_tpl->tpl_vars['label']->value['checked']) {?> checked<?php }?>> <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                    <?php }?>
                    <div class="form-group">
                        <textarea style="width:100%" name="content" id="reply" rows="20"></textarea>
                    </div>
                    <?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>

                    <button type="submit" class="btn btn-theme"><?php echo $_smarty_tpl->tpl_vars['SUBMIT']->value;?>
</button>
                    <a href="#" class="btn btn-secondary" data-toggle="modal" data-target="#cancelModal"><?php echo $_smarty_tpl->tpl_vars['CANCEL']->value;?>
</a>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Cancellation modal -->
<div class="modal fade" id="cancelModal" tabindex="-1" role="dialog" aria-labelledby="cancelModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <span class="modal-title" id="cancelModalLabel"><?php echo $_smarty_tpl->tpl_vars['CANCEL']->value;?>
</span>
            </div>
            <div class="modal-body">
                <p><?php echo $_smarty_tpl->tpl_vars['CONFIRM_CANCEL']->value;?>
</p>
                <a href="<?php echo $_smarty_tpl->tpl_vars['FORUM_LINK']->value;?>
" class="btn btn-theme"><?php echo $_smarty_tpl->tpl_vars['CANCEL']->value;?>
</a>
                <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['CLOSE']->value;?>
</button>
            </div>
        </div>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
