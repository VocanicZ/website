<?php
/* Smarty version 4.3.1, created on 2023-06-01 08:02:27
  from '/home/u302265335/domains/rainbowcreation.net/public_html/custom/templates/Cobalt/forum/forum_index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6477ee23777ae0_54914160',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f603679d2b0a39c5de72efb74f8983dd9fd311c7' => 
    array (
      0 => '/home/u302265335/domains/rainbowcreation.net/public_html/custom/templates/Cobalt/forum/forum_index.tpl',
      1 => 1685580388,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:navbar.tpl' => 1,
    'file:forum/search_box.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6477ee23777ae0_54914160 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/u302265335/domains/rainbowcreation.net/public_html/vendor/smarty/smarty/libs/plugins/modifier.count.php','function'=>'smarty_modifier_count',),));
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php $_smarty_tpl->_subTemplateRender('file:navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
    <div class="row">
        <div class="col-lg-9">
            <ol class="breadcrumb">
                <li><a class="grey-link" href="<?php echo $_smarty_tpl->tpl_vars['BREADCRUMB_URL']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['BREADCRUMB_TEXT']->value;?>
</a></li>
            </ol>
        </div>
        <div class="col-lg-3">
            <?php $_smarty_tpl->_subTemplateRender('file:forum/search_box.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('form_submit'=>$_smarty_tpl->tpl_vars['SEARCH_URL']->value), 0, false);
?>
        </div>
    </div>

    <div class="row">
        <?php if (count($_smarty_tpl->tpl_vars['WIDGETS_LEFT']->value)) {?>
            <div class="col-lg-3">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['WIDGETS_LEFT']->value, 'widget');
$_smarty_tpl->tpl_vars['widget']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['widget']->value) {
$_smarty_tpl->tpl_vars['widget']->do_else = false;
?>
                    <?php echo $_smarty_tpl->tpl_vars['widget']->value;?>

                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        <?php }?>

        <div class="<?php if (count($_smarty_tpl->tpl_vars['WIDGETS_LEFT']->value) && count($_smarty_tpl->tpl_vars['WIDGETS_RIGHT']->value)) {?>col-lg-6<?php } elseif (count($_smarty_tpl->tpl_vars['WIDGETS_LEFT']->value) || count($_smarty_tpl->tpl_vars['WIDGETS_RIGHT']->value)) {?>col-lg-9<?php } else { ?>col-lg-12<?php }?>">

            <?php if ((isset($_smarty_tpl->tpl_vars['SPAM_INFO']->value))) {?>
                <div class="alert alert-info"><?php echo $_smarty_tpl->tpl_vars['SPAM_INFO']->value;?>
</div>
            <?php }?>
            <div class="card forum-index-card">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FORUMS']->value, 'forum', false, 'category');
$_smarty_tpl->tpl_vars['forum']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value => $_smarty_tpl->tpl_vars['forum']->value) {
$_smarty_tpl->tpl_vars['forum']->do_else = false;
?>
                <?php $_smarty_tpl->_assignInScope('counter', 1);?>
                    <?php if (!empty($_smarty_tpl->tpl_vars['forum']->value['subforums'])) {?>
                        <div class="card-header header-theme">
                            <?php ob_start();
echo $_smarty_tpl->tpl_vars['forum']->value['icon'];
$_prefixVariable1 = ob_get_clean();
if (empty($_prefixVariable1)) {?><i class="fa-solid fa-folder-open"></i><?php } else {
echo $_smarty_tpl->tpl_vars['forum']->value['icon'];
}?>
                            <a class="theme-text" href="<?php echo $_smarty_tpl->tpl_vars['forum']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['forum']->value['title'];?>
</a>
                        </div>
                        <div class="card-body">
                            <div class="card">
                                <div class="card-body">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['forum']->value['subforums'], 'subforum');
$_smarty_tpl->tpl_vars['subforum']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['subforum']->value) {
$_smarty_tpl->tpl_vars['subforum']->do_else = false;
?>
                                <div class="row">
                                    <div class="col-2 col-md-1 col-md-1_5 forum-icon-col">
                                        <?php if (empty($_smarty_tpl->tpl_vars['subforum']->value->icon)) {?><i class="fa-solid fa-comment"></i><?php } else {
echo $_smarty_tpl->tpl_vars['subforum']->value->icon;
}?>
                                    </div>
                                    <div class="col-10 col-md-5">
                                        <a class="forum-link white-link" href="<?php if (!(isset($_smarty_tpl->tpl_vars['subforum']->value->redirect_confirm))) {
echo $_smarty_tpl->tpl_vars['subforum']->value->link;?>

                                                                    <?php } else { ?>#" data-toggle="modal"
                                                data-target="#confirmRedirectModal<?php echo $_smarty_tpl->tpl_vars['subforum']->value->id;
}?>"><?php echo $_smarty_tpl->tpl_vars['subforum']->value->forum_title;?>
</a><br /><span
                                            class="subforum-description"><?php echo $_smarty_tpl->tpl_vars['subforum']->value->forum_description;?>
</span>
                                    </div>
                                    <?php if ($_smarty_tpl->tpl_vars['subforum']->value->redirect_forum != 1) {?>
                                        <div class="col-4 col-md-2 col-inv">
                                            <?php echo ucfirst($_smarty_tpl->tpl_vars['TOPICS']->value);?>
: <b><?php echo $_smarty_tpl->tpl_vars['subforum']->value->topics;?>
</b><br />
                                            <?php echo ucfirst($_smarty_tpl->tpl_vars['POSTS']->value);?>
: <b><?php echo $_smarty_tpl->tpl_vars['subforum']->value->posts;?>
</b>
                                        </div>
                                        <div class="col-8 col-md-4 col-md-4_5 col-inv">
                                            <?php if ((isset($_smarty_tpl->tpl_vars['subforum']->value->last_post))) {?>
                                                <div class="d-flex">
                                                    <div>
                                                        <a href="<?php echo $_smarty_tpl->tpl_vars['subforum']->value->last_post->profile;?>
"><img alt="<?php echo $_smarty_tpl->tpl_vars['subforum']->value->last_post->profile;?>
"
                                                    style="height:45px; width:45px;" class="avatar-img"
                                                    src="<?php echo $_smarty_tpl->tpl_vars['subforum']->value->last_post->avatar;?>
" /></a>
                                                    </div>
                                                    <div class="flex-grow-1 ml-2">
                                                        <a class="white-link" href="<?php echo $_smarty_tpl->tpl_vars['subforum']->value->last_post->link;?>
"><?php echo $_smarty_tpl->tpl_vars['subforum']->value->last_post->title;?>
</a><br />
                                                        <a style="<?php echo $_smarty_tpl->tpl_vars['subforum']->value->last_post->user_style;?>
" href="<?php echo $_smarty_tpl->tpl_vars['subforum']->value->last_post->profile;?>
"
                                                        data-poload="<?php echo $_smarty_tpl->tpl_vars['USER_INFO_URL']->value;
echo $_smarty_tpl->tpl_vars['subforum']->value->last_post->post_creator;?>
" data-html="true"
                                                        data-placement="top"><?php echo $_smarty_tpl->tpl_vars['subforum']->value->last_post->username;?>
</a> &bull; <span data-toggle="tooltip" data-trigger="hover"
                                                        data-original-title="<?php echo $_smarty_tpl->tpl_vars['subforum']->value->last_post->post_date;?>
"><?php echo $_smarty_tpl->tpl_vars['subforum']->value->last_post->date_friendly;?>
</span>
                                                    </div>
                                                </div>
                                            <?php } else { ?> 
                                                <?php echo $_smarty_tpl->tpl_vars['NO_TOPICS']->value;?>

                                            <?php }?>
                                        </div>
                                    <?php }?>
                                </div>
                                <?php if ((isset($_smarty_tpl->tpl_vars['subforum']->value->subforums))) {?>
                                    <br /> <?php $_smarty_tpl->_assignInScope('sf_counter', 1);?>
                                    <div class="row">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['subforum']->value->subforums, 'sub_subforum');
$_smarty_tpl->tpl_vars['sub_subforum']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sub_subforum']->value) {
$_smarty_tpl->tpl_vars['sub_subforum']->do_else = false;
?>
                                            <div class="col-md-6 col-lg-4">
                                                <div class="card mb-0" style="background-color: rgba(0,0,0,0.05);">
                                                    <div class="card-body pt-2 pb-2 pl-3 pr-3">
                                                        <?php if (empty($_smarty_tpl->tpl_vars['subforum']->value->icon)) {?><i class="fa-solid fa-folder-open"></i><?php } else {
echo $_smarty_tpl->tpl_vars['subforum']->value->icon;
}?>&nbsp;&nbsp;<a class="white-link"
                                                    href="<?php echo $_smarty_tpl->tpl_vars['sub_subforum']->value->link;?>
"><?php echo $_smarty_tpl->tpl_vars['sub_subforum']->value->title;?>
</a>
                                                    </div>
                                                </div>

                                                <?php $_smarty_tpl->_assignInScope('sf_counter', $_smarty_tpl->tpl_vars['sf_counter']->value+1);?>

                                            </div>
                                            <?php if ($_smarty_tpl->tpl_vars['sf_counter']->value == 4) {?>
                                            </div>
                                            <div class="row">
                                            <?php }?>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </div>
                                    <?php }?> <?php if ((smarty_modifier_count($_smarty_tpl->tpl_vars['forum']->value['subforums'])) != $_smarty_tpl->tpl_vars['counter']->value) {?>
                                <hr /> <?php }?>
                                <?php $_smarty_tpl->_assignInScope('counter', $_smarty_tpl->tpl_vars['counter']->value+1);?>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </div>
                            </div>
                        </div>
                    <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        </div>

        <?php if (count($_smarty_tpl->tpl_vars['WIDGETS_RIGHT']->value)) {?>
            <div class="col-lg-3">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['WIDGETS_RIGHT']->value, 'widget');
$_smarty_tpl->tpl_vars['widget']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['widget']->value) {
$_smarty_tpl->tpl_vars['widget']->do_else = false;
?>
                    <?php echo $_smarty_tpl->tpl_vars['widget']->value;?>

                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        <?php }?>

    </div>
</div>

<?php if ($_smarty_tpl->tpl_vars['subforum']->value->redirect_forum != 1) {
} else { ?>
    <div class="modal fade" id="confirmRedirectModal<?php echo $_smarty_tpl->tpl_vars['subforum']->value->id;?>
" tabindex="-1" role="dialog"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <?php echo $_smarty_tpl->tpl_vars['subforum']->value->redirect_confirm;?>

                    <button type="button" class="btn btn-secondary mt-4"
                        data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['NO']->value;?>
</button>
                    <a class="btn btn-theme mt-4" href="<?php echo $_smarty_tpl->tpl_vars['subforum']->value->redirect_url;?>
" target="_blank"
                        rel="noopener nofollow"><?php echo $_smarty_tpl->tpl_vars['YES']->value;?>
</a>
                </div>
            </div>
        </div>
    </div>
<?php }?>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
