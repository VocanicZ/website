<?php
/* Smarty version 4.3.1, created on 2023-06-01 09:12:52
  from '/home/u302265335/domains/rainbowcreation.net/public_html/custom/templates/Cobalt/forum/following_topics.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6477fea482e244_96132861',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6228d5940579196c242cdef28bade204150bb501' => 
    array (
      0 => '/home/u302265335/domains/rainbowcreation.net/public_html/custom/templates/Cobalt/forum/following_topics.tpl',
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
function content_6477fea482e244_96132861 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <?php echo $_smarty_tpl->tpl_vars['FOLLOWING_TOPICS']->value;?>

                    <?php if (count($_smarty_tpl->tpl_vars['TOPICS_LIST']->value)) {?>
                        <a class="btn btn-secondary btn-sm float-right" href="#" data-toggle="modal"
                            data-target="#modal-delete"><?php echo $_smarty_tpl->tpl_vars['UNFOLLOW_ALL']->value;?>
</a>
                    <?php }?>
                </div>
                <div class="card-body">

                    
                    <?php if (count($_smarty_tpl->tpl_vars['TOPICS_LIST']->value)) {?>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <tbody>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['TOPICS_LIST']->value, 'topic');
$_smarty_tpl->tpl_vars['topic']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['topic']->value) {
$_smarty_tpl->tpl_vars['topic']->do_else = false;
?>
                                        <tr>
                                            <td>
                                                <div class="row" onclick="window.location.href = '<?php echo $_smarty_tpl->tpl_vars['topic']->value['last_post_link'];?>
'"
                                                    style="cursor: pointer">
                                                    <div class="col-md-4">
                                                        <?php if ($_smarty_tpl->tpl_vars['topic']->value['unread']) {?>
                                                            <i class="fa-solid fa-bell"></i> <strong><?php echo $_smarty_tpl->tpl_vars['topic']->value['topic_title'];?>
</strong>
                                                        <?php } else { ?>
                                                            <?php echo $_smarty_tpl->tpl_vars['topic']->value['topic_title'];?>

                                                        <?php }?>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <img class="avatar-img" style="height: 30px;"
                                                            src="<?php echo $_smarty_tpl->tpl_vars['topic']->value['reply_author_avatar'];?>
">
                                                        <a href="<?php echo $_smarty_tpl->tpl_vars['topic']->value['reply_author_link'];?>
" data-toggle="popup"
                                                            data-poload="<?php echo $_smarty_tpl->tpl_vars['USER_INFO_URL']->value;
echo $_smarty_tpl->tpl_vars['topic']->value['reply_author_id'];?>
"
                                                            style="<?php echo $_smarty_tpl->tpl_vars['topic']->value['reply_author_style'];?>
"><?php echo $_smarty_tpl->tpl_vars['topic']->value['reply_author_nickname'];?>
</a>
                                                        <div data-toggle="tooltip" data-content="<?php echo $_smarty_tpl->tpl_vars['topic']->value['reply_date_full'];?>
">
                                                            <?php echo $_smarty_tpl->tpl_vars['topic']->value['reply_date'];?>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <form class="inline-form" action="<?php echo $_smarty_tpl->tpl_vars['topic']->value['unfollow_link'];?>
" method="post">
                                                            <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
" name="token" />
                                                            <button class="btn btn-secondary"><?php echo $_smarty_tpl->tpl_vars['UNFOLLOW_TOPIC']->value;?>
</button>
                                                        </form>
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

                    <?php } else { ?>
                        <?php echo $_smarty_tpl->tpl_vars['NO_TOPICS']->value;?>

                    <?php }?>
                    

                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-delete" tabindex="-1" role="dialog" aria-labelledby="modal-deleteLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <span class="modal-title" id="modal-deleteLabel"><?php echo $_smarty_tpl->tpl_vars['UNFOLLOW_ALL']->value;?>
</span>
            </div>
            <div class="modal-body">
                <?php echo $_smarty_tpl->tpl_vars['CONFIRM_UNFOLLOW']->value;?>
<br /><br />
                <form class="form-control inline-form" action="" method="post" style="background-color: transparent; border: transparent; padding: 0 !important;">
                    <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                    <input type="hidden" name="action" value="purge">
                    <button type="submit" class="btn btn-theme"><?php echo $_smarty_tpl->tpl_vars['YES']->value;?>
</button>
                </form>
                <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['NO']->value;?>
</button>
            </div>
        </div>
    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
