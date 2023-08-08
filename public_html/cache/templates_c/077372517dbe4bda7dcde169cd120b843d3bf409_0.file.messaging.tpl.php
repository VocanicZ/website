<?php
/* Smarty version 4.3.1, created on 2023-06-01 09:11:56
  from '/home/u302265335/domains/rainbowcreation.net/public_html/custom/templates/Cobalt/user/messaging.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6477fe6c2ab608_77866448',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '077372517dbe4bda7dcde169cd120b843d3bf409' => 
    array (
      0 => '/home/u302265335/domains/rainbowcreation.net/public_html/custom/templates/Cobalt/user/messaging.tpl',
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
function content_6477fe6c2ab608_77866448 (Smarty_Internal_Template $_smarty_tpl) {
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
                <div class="card-header header-theme">
                    <?php echo $_smarty_tpl->tpl_vars['MESSAGING']->value;?>

                    <?php if ((isset($_smarty_tpl->tpl_vars['NEW_MESSAGE']->value))) {?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['NEW_MESSAGE_LINK']->value;?>
" class="btn btn-theme float-right"><?php echo $_smarty_tpl->tpl_vars['NEW_MESSAGE']->value;?>
</a>
                    <?php }?>
                </div>
                <div class="card-body">
                    <?php if (count($_smarty_tpl->tpl_vars['MESSAGES']->value)) {?>
                    <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th><?php echo $_smarty_tpl->tpl_vars['MESSAGE_TITLE']->value;?>
</th>
                                <th><?php echo $_smarty_tpl->tpl_vars['PARTICIPANTS']->value;?>
</th>
                                <th><?php echo $_smarty_tpl->tpl_vars['LAST_MESSAGE']->value;?>
</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MESSAGES']->value, 'message');
$_smarty_tpl->tpl_vars['message']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['message']->value) {
$_smarty_tpl->tpl_vars['message']->do_else = false;
?>
                            <tr>
                                <td><a class="grey-link" href="<?php echo $_smarty_tpl->tpl_vars['message']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['message']->value['title'];?>
</a></td>
                                <td><span class="message-people"><?php echo $_smarty_tpl->tpl_vars['message']->value['participants'];?>
</span></td>
                                <td>
                                    <div class="d-flex">
                                        <div>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['message']->value['last_message_user_profile'];?>
">
                                                <img class="avatar-img" style="max-height:30px; max-width:30px;" src="<?php echo $_smarty_tpl->tpl_vars['message']->value['last_message_user_avatar'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['message']->value['last_message_user'];?>
" />
                                            </a>
                                        </div>
                                        <div class="flex-grow-1 ml-3">
                                            <span data-toggle="tooltip" data-trigger="hover" data-original-title="<?php echo $_smarty_tpl->tpl_vars['message']->value['last_message_date_full'];?>
"><?php echo $_smarty_tpl->tpl_vars['message']->value['last_message_date'];?>
</span><br />
                                            <?php echo $_smarty_tpl->tpl_vars['BY']->value;?>
 <a class="msg-user username" style="<?php echo $_smarty_tpl->tpl_vars['message']->value['last_message_user_style'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['message']->value['last_message_user_profile'];?>
"><?php echo $_smarty_tpl->tpl_vars['message']->value['last_message_user'];?>
</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </tbody>
                    </table>
                    </div>
                    <?php echo $_smarty_tpl->tpl_vars['PAGINATION']->value;?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['NO_MESSAGES']->value;?>
 <?php }?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}