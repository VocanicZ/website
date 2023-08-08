<?php
/* Smarty version 4.3.1, created on 2023-06-01 08:15:42
  from '/home/u302265335/domains/rainbowcreation.net/public_html/custom/templates/Cobalt/forum/view_topic.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6477f13e90b0f3_00774614',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '17104d97be28fe9454f2bbf5633189f726916f04' => 
    array (
      0 => '/home/u302265335/domains/rainbowcreation.net/public_html/custom/templates/Cobalt/forum/view_topic.tpl',
      1 => 1685580388,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:navbar.tpl' => 1,
    'file:badges/forum_bdg.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6477f13e90b0f3_00774614 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php $_smarty_tpl->_subTemplateRender('file:navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
    <ol class="breadcrumb">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['BREADCRUMBS']->value, 'breadcrumb');
$_smarty_tpl->tpl_vars['breadcrumb']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['breadcrumb']->value) {
$_smarty_tpl->tpl_vars['breadcrumb']->do_else = false;
?>
        <li<?php if ((isset($_smarty_tpl->tpl_vars['breadcrumb']->value['active']))) {?> class="active"<?php }?>><?php if (!(isset($_smarty_tpl->tpl_vars['breadcrumb']->value['active']))) {?><a class="white-link" href="<?php echo $_smarty_tpl->tpl_vars['breadcrumb']->value['link'];?>
"><?php }
echo $_smarty_tpl->tpl_vars['breadcrumb']->value['forum_title'];
if (!(isset($_smarty_tpl->tpl_vars['breadcrumb']->value['active']))) {?></a><?php }?>
            </li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ol>
    <div class="mb-3">
        <div class="theme-text d-inline-block forum-topic-title mt-1">
            <?php if (count($_smarty_tpl->tpl_vars['TOPIC_LABELS']->value)) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['TOPIC_LABELS']->value, 'label');
$_smarty_tpl->tpl_vars['label']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['label']->value) {
$_smarty_tpl->tpl_vars['label']->do_else = false;
echo $_smarty_tpl->tpl_vars['label']->value;?>
 <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>
            <?php echo $_smarty_tpl->tpl_vars['TOPIC_TITLE']->value;?>

        </div>
        <span class="float-lg-right d-inline-block post-btns">
            <?php if ((isset($_smarty_tpl->tpl_vars['CAN_REPLY']->value))) {?>
            <a <?php if ((isset($_smarty_tpl->tpl_vars['LOCKED']->value)) && !(isset($_smarty_tpl->tpl_vars['CAN_MODERATE']->value))) {?> disabled="disabled" <?php } else { ?> href="#reply_section" <?php }?>
            class="btn btn-theme<?php if ((isset($_smarty_tpl->tpl_vars['LOCKED']->value)) && !(isset($_smarty_tpl->tpl_vars['CAN_MODERATE']->value))) {?> disabled<?php }?>" ><?php if ((isset($_smarty_tpl->tpl_vars['LOCKED']->value)) && !(isset($_smarty_tpl->tpl_vars['CAN_MODERATE']->value))) {?><i class="fa-solid fa-lock"></i>
            <?php }
echo $_smarty_tpl->tpl_vars['NEW_REPLY']->value;?>
</a>
            <?php }?>
            <?php if ((isset($_smarty_tpl->tpl_vars['UNFOLLOW']->value))) {?>
                <form action="<?php echo $_smarty_tpl->tpl_vars['UNFOLLOW_URL']->value;?>
" method="post" style="display: inline">
                    <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
" name="token" />
                    <button class="btn btn-secondary"><?php echo $_smarty_tpl->tpl_vars['UNFOLLOW']->value;?>
</button>
                </form>
              <?php } elseif ((isset($_smarty_tpl->tpl_vars['FOLLOW']->value))) {?>
                <form action="<?php echo $_smarty_tpl->tpl_vars['FOLLOW_URL']->value;?>
" method="post" style="display: inline">
                    <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
" name="token" />
                    <button class="btn btn-theme"><?php echo $_smarty_tpl->tpl_vars['FOLLOW']->value;?>
</button>
                </form>
            <?php }?>
            <div class="btn-group">
            	<button type="button" class="btn dropdown-toggle btn-theme" data-toggle="dropdown" style="vertical-align:baseline;"><?php echo $_smarty_tpl->tpl_vars['SHARE']->value;?>
 <span class="caret"></span></button>
            	    <ul class="dropdown-menu dropdown-menu-right" role="menu">
                    <li><a target="_blank" class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['SHARE_TWITTER_URL']->value;?>
"><i class="fa-brands fa-twitter"></i> <?php echo $_smarty_tpl->tpl_vars['SHARE_TWITTER']->value;?>
</a></li>
                    <li><a target="_blank" class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['SHARE_FACEBOOK_URL']->value;?>
"><i class="fa-brands fa-facebook"></i> <?php echo $_smarty_tpl->tpl_vars['SHARE_FACEBOOK']->value;?>
</a></li>
            	</ul>
            </div>
            <?php if ((isset($_smarty_tpl->tpl_vars['CAN_MODERATE']->value))) {?>
            <form action="<?php echo $_smarty_tpl->tpl_vars['LOCK_URL']->value;?>
" method="post" id="lockTopic" style="display: none">
                <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
" name="token" />
            </form>
            <form action="<?php echo $_smarty_tpl->tpl_vars['STICK_URL']->value;?>
" method="post" id="stickTopic" style="display: none">
                <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
" name="token" />
            </form>
            <div class="btn-group">
                <button type="button" class="btn dropdown-toggle btn-theme" data-toggle="dropdown"><?php echo $_smarty_tpl->tpl_vars['MOD_ACTIONS']->value;?>
 <span class="caret"></span></button>
            	<ul class="dropdown-menu" role="menu">
                	<li><a class="dropdown-item" type="submit" onclick="document.getElementById('lockTopic').submit()"><i class="fa-solid fa-lock"></i> <?php echo $_smarty_tpl->tpl_vars['LOCK']->value;?>
</a></li>
                	<li><a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['MERGE_URL']->value;?>
"><i class="fa-solid fa-down-left-and-up-right-to-center"></i> <?php echo $_smarty_tpl->tpl_vars['MERGE']->value;?>
</a></li>
                	<li><a class="dropdown-item" href="#" data-toggle="modal" data-target="#deleteModal"><i class="fa-solid fa-trash"></i> <?php echo $_smarty_tpl->tpl_vars['DELETE']->value;?>
</a></li>
                	<li><a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['MOVE_URL']->value;?>
"><i class="fa-solid fa-arrow-right"></i> <?php echo $_smarty_tpl->tpl_vars['MOVE']->value;?>
</a></li>
                	<li><a class="dropdown-item" type="submit" onclick="document.getElementById('stickTopic').submit()"><i class="fa-solid fa-thumbtack"></i> <?php echo $_smarty_tpl->tpl_vars['STICK']->value;?>
</a></li>
            	</ul>
            </div>
            <?php }?>
        </span>
    </div>
    <?php if ((isset($_smarty_tpl->tpl_vars['SESSION_SUCCESS_POST']->value))) {?>
        <div class="alert alert-success">
            <?php echo $_smarty_tpl->tpl_vars['SESSION_SUCCESS_POST']->value;?>

        </div>
    <?php }?> <?php if ((isset($_smarty_tpl->tpl_vars['SESSION_FAILURE_POST']->value))) {?>
        <div class="alert alert-danger">
            <?php echo $_smarty_tpl->tpl_vars['SESSION_FAILURE_POST']->value;?>

        </div>
    <?php }?>
      
      <?php if ((isset($_smarty_tpl->tpl_vars['ERRORS']->value))) {?>
        <div class="alert alert-danger">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ERRORS']->value, 'error');
$_smarty_tpl->tpl_vars['error']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->do_else = false;
?>
                <?php echo $_smarty_tpl->tpl_vars['error']->value;?>
<br />
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
      <?php }?>
      <?php if ((isset($_smarty_tpl->tpl_vars['TOPIC_LOCKED_NOTICE']->value))) {?>
        <div class="alert alert-danger">
            <?php echo $_smarty_tpl->tpl_vars['TOPIC_LOCKED_NOTICE']->value;?>

        </div>
        <?php } elseif ((isset($_smarty_tpl->tpl_vars['TOPIC_LOCKED']->value))) {?>
        <div class="alert alert-danger">
            <?php echo $_smarty_tpl->tpl_vars['TOPIC_LOCKED']->value;?>

        </div>
    <?php }?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['REPLIES']->value, 'reply', false, NULL, 'arr', array (
));
$_smarty_tpl->tpl_vars['reply']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['reply']->value) {
$_smarty_tpl->tpl_vars['reply']->do_else = false;
?>
    <div class="card" id="post-<?php echo $_smarty_tpl->tpl_vars['reply']->value['id'];?>
">
        <div class="row no-gutters">
            <div class="col-lg-3 forum-author-col">
                <div class="forum-left-col text-center">
                    <img class="avatar-img d-block ml-auto mr-auto" style="width:85px; height:85px;" src="<?php echo $_smarty_tpl->tpl_vars['reply']->value['avatar'];?>
" />
                    <a class="username d-block mt-2 mb-2" style="font-size: 1.2rem; <?php echo $_smarty_tpl->tpl_vars['reply']->value['user_style'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['reply']->value['profile'];?>
" data-poload="<?php echo $_smarty_tpl->tpl_vars['USER_INFO_URL']->value;
echo $_smarty_tpl->tpl_vars['reply']->value['user_id'];?>
" data-html="true" data-placement="top"><?php echo $_smarty_tpl->tpl_vars['reply']->value['username'];?>
</a>
                    <?php if ($_smarty_tpl->tpl_vars['reply']->value['user_title']) {?>
                        <small><?php echo $_smarty_tpl->tpl_vars['reply']->value['user_title'];?>
</small><br/>
                    <?php }?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['reply']->value['user_groups'], 'group');
$_smarty_tpl->tpl_vars['group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->do_else = false;
echo $_smarty_tpl->tpl_vars['group']->value;?>
 <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <div class="card mt-4 text-left">
                        <div class="card-body">
                            <?php echo $_smarty_tpl->tpl_vars['reply']->value['user_posts_count'];?>
<br/> <?php echo $_smarty_tpl->tpl_vars['reply']->value['user_topics_count'];?>
<br />
                            <?php if (count($_smarty_tpl->tpl_vars['reply']->value['fields'])) {?> <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['reply']->value['fields'], 'field');
$_smarty_tpl->tpl_vars['field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->do_else = false;
?> <?php if (!empty($_smarty_tpl->tpl_vars['field']->value->value)) {?> <?php echo $_smarty_tpl->tpl_vars['field']->value->name;?>
: <?php echo $_smarty_tpl->tpl_vars['field']->value->value;?>
<br/> <?php }?> <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> <?php }?>

														<?php if ((isset($_smarty_tpl->tpl_vars['USER_BADGES_LIST']->value))) {?>
								<?php $_smarty_tpl->_subTemplateRender('file:badges/forum_bdg.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
							<?php }?>
							                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="forum-right-col d-flex flex-column align-items-start h-100">
                    <div class="forum-right-top w-100">
                        <span data-toggle="tooltip" data-trigger="hover" data-original-title="<?php echo $_smarty_tpl->tpl_vars['reply']->value['post_date'];?>
"><?php echo $_smarty_tpl->tpl_vars['reply']->value['post_date_rough'];?>
</span>
                        <span class="float-right sm-btns">
                        <?php if ((isset($_smarty_tpl->tpl_vars['reply']->value['buttons']['edit']))) {?>
                            <a class="btn btn-secondary" data-toggle="tooltip" data-trigger="hover" data-original-title="<?php echo $_smarty_tpl->tpl_vars['reply']->value['buttons']['edit']['TEXT'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['reply']->value['buttons']['edit']['URL'];?>
"><i class="fa-solid fa-pen fa-fw"></i></a>
                        <?php }?>
                        <?php if ((isset($_smarty_tpl->tpl_vars['reply']->value['buttons']['quote']))) {?>
                            <button class="btn btn-secondary" data-toggle="tooltip" data-trigger="hover" data-original-title="<?php echo $_smarty_tpl->tpl_vars['reply']->value['buttons']['quote']['TEXT'];?>
" onclick="quote(<?php echo $_smarty_tpl->tpl_vars['reply']->value['id'];?>
);"><i class="fa-solid fa-quote-left fa-fw"></i></button>
                        <?php }?>
                        <?php if ((isset($_smarty_tpl->tpl_vars['reply']->value['buttons']['report']))) {?>
                            <button class="btn btn-secondary" rel="tooltip" data-trigger="hover" data-original-title="<?php echo $_smarty_tpl->tpl_vars['reply']->value['buttons']['report']['TEXT'];?>
" data-toggle="modal" data-target="#report<?php echo $_smarty_tpl->tpl_vars['reply']->value['id'];?>
Modal"><i class="fa-solid fa-triangle-exclamation fa-fw"></i></button>
                        <?php }?>
                        <?php if ((isset($_smarty_tpl->tpl_vars['reply']->value['buttons']['spam']))) {?>
                            <button class="btn btn-secondary" rel="tooltip" data-trigger="hover" data-original-title="<?php echo $_smarty_tpl->tpl_vars['reply']->value['buttons']['spam']['TEXT'];?>
" data-toggle="modal" data-target="#spam<?php echo $_smarty_tpl->tpl_vars['reply']->value['id'];?>
Modal"><i class="fa-solid fa-flag fa-fw"></i></button>
                        <?php }?>
                        <?php if ((isset($_smarty_tpl->tpl_vars['reply']->value['buttons']['delete']))) {?>
                        <button class="btn btn-secondary" rel="tooltip" data-trigger="hover" data-original-title="<?php echo $_smarty_tpl->tpl_vars['reply']->value['buttons']['delete']['TEXT'];?>
" data-toggle="modal" data-target="#delete<?php echo $_smarty_tpl->tpl_vars['reply']->value['id'];?>
Modal"><i class="fa-solid fa-trash fa-fw"></i></button>
                        <?php }?>
                        </span>
                    </div>
                    <div class="forum-post-content forum_post mb-auto w-100">
                        <?php echo $_smarty_tpl->tpl_vars['reply']->value['content'];?>
<br /><br />
                        <?php if ($_smarty_tpl->tpl_vars['reply']->value['edited'] !== null) {?>
                            <small><span rel="tooltip" data-toggle="hover" data-original-title="<?php echo $_smarty_tpl->tpl_vars['reply']->value['edited_full'];?>
"><?php echo $_smarty_tpl->tpl_vars['reply']->value['edited'];?>
</span></small>
                        <?php }?>
                        <?php if (count($_smarty_tpl->tpl_vars['reply']->value['post_reactions'])) {?>
                            <span class="float-right" data-toggle="modal" data-target="#reactions<?php echo $_smarty_tpl->tpl_vars['reply']->value['id'];?>
Modal">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['reply']->value['post_reactions'], 'reaction', false, NULL, 'reactions', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['reaction']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['reaction']->value) {
$_smarty_tpl->tpl_vars['reaction']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_reactions']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_reactions']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_reactions']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_reactions']->value['total'];
?>
                                    <?php echo $_smarty_tpl->tpl_vars['reaction']->value['html'];?>
 x <?php echo $_smarty_tpl->tpl_vars['reaction']->value['count'];?>

                                    <?php if (!((isset($_smarty_tpl->tpl_vars['__smarty_foreach_reactions']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_reactions']->value['last'] : null))) {?> | <?php }?>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </span>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['reply']->value['user_id'] !== $_smarty_tpl->tpl_vars['USER_ID']->value) {?> <?php if ((isset($_smarty_tpl->tpl_vars['REACTIONS']->value)) && count($_smarty_tpl->tpl_vars['REACTIONS']->value)) {?>
                            <br/>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['REACTIONS']->value, 'reaction');
$_smarty_tpl->tpl_vars['reaction']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['reaction']->value) {
$_smarty_tpl->tpl_vars['reaction']->do_else = false;
?>
                            <form class="d-inline" action="<?php echo $_smarty_tpl->tpl_vars['REACTIONS_URL']->value;?>
" method="post">
                                <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                                <input type="hidden" name="reaction" value="<?php echo $_smarty_tpl->tpl_vars['reaction']->value->id;?>
">
                                <input type="hidden" name="post" value="<?php echo $_smarty_tpl->tpl_vars['reply']->value['id'];?>
">
                                <a href="#" onclick="$(this).closest('form').submit();" style="padding:10px;" rel="tooltip" data-toggle="hover" data-original-title="<?php echo $_smarty_tpl->tpl_vars['reaction']->value->name;?>
"><?php echo $_smarty_tpl->tpl_vars['reaction']->value->html;?>
</a>
                            </form>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <?php }
}?>
                    </div>
                    <div class="signature w-100 mb-2" style="max-height: 500px;">
                        <?php echo $_smarty_tpl->tpl_vars['reply']->value['signature'];?>

                    </div>
                    <div class="post-author-mobile w-100">
                        <img class="avatar-img d-block" style="width:60px; height:60px;" src="<?php echo $_smarty_tpl->tpl_vars['reply']->value['avatar'];?>
" />
                        <div class="ml-3 flex-grow-1">
                            <a class="username d-block mt-1 mb-1" style="font-size: 1.2rem; <?php echo $_smarty_tpl->tpl_vars['reply']->value['user_style'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['reply']->value['profile'];?>
" data-poload="<?php echo $_smarty_tpl->tpl_vars['USER_INFO_URL']->value;
echo $_smarty_tpl->tpl_vars['reply']->value['user_id'];?>
" data-html="true" data-placement="top"><?php echo $_smarty_tpl->tpl_vars['reply']->value['username'];?>
</a>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['reply']->value['user_groups'], 'group');
$_smarty_tpl->tpl_vars['group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->do_else = false;
echo $_smarty_tpl->tpl_vars['group']->value;?>
 <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> <?php echo $_smarty_tpl->tpl_vars['PAGINATION']->value;?>
 <?php if ((isset($_smarty_tpl->tpl_vars['TOPIC_LOCKED_NOTICE']->value))) {?>
<div class="alert alert-info"><?php echo $_smarty_tpl->tpl_vars['TOPIC_LOCKED_NOTICE']->value;?>
</div>
<?php }?> <?php if ((isset($_smarty_tpl->tpl_vars['CAN_REPLY']->value))) {?>
<div class="card">
    <div class="card-header header-theme"><?php echo $_smarty_tpl->tpl_vars['NEW_REPLY']->value;?>
</div>
    <div class="card-body">
        <div id="reply_section">
            <form action="" method="post">

                <div class="form-group">
                    <textarea class="form-control" name="content" id="quickreply"></textarea>
                </div>

                <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                <button type="submit" class="btn btn-theme"><?php echo $_smarty_tpl->tpl_vars['SUBMIT']->value;?>
</button>
            </form>
        </div>
    </div>
</div>
<?php }?>
</div>
</div>
</div>
</div>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['REPLIES']->value, 'reply', false, NULL, 'arr', array (
));
$_smarty_tpl->tpl_vars['reply']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['reply']->value) {
$_smarty_tpl->tpl_vars['reply']->do_else = false;
?>
    
<?php if (count($_smarty_tpl->tpl_vars['reply']->value['post_reactions'])) {?>
<div class="modal fade" id="reactions<?php echo $_smarty_tpl->tpl_vars['reply']->value['id'];?>
Modal" tabindex="-1" role="dialog" aria-labelledby="reactions<?php echo $_smarty_tpl->tpl_vars['reply']->value['id'];?>
ModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <span class="modal-title" id="reactions<?php echo $_smarty_tpl->tpl_vars['reply']->value['id'];?>
ModalLabel"><?php echo $_smarty_tpl->tpl_vars['REACTIONS_TEXT']->value;?>
</span>
            </div>
            <div class="modal-body">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['reply']->value['post_reactions'], 'reaction', false, NULL, 'reactions', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['reaction']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['reaction']->value) {
$_smarty_tpl->tpl_vars['reaction']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_reactions']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_reactions']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_reactions']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_reactions']->value['total'];
?>
                <strong><?php echo $_smarty_tpl->tpl_vars['reaction']->value['html'];?>
 x <?php echo $_smarty_tpl->tpl_vars['reaction']->value['count'];?>
:</strong>
                <br /><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['reaction']->value['users'], 'user');
$_smarty_tpl->tpl_vars['user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->do_else = false;
?>
                <a style="<?php echo $_smarty_tpl->tpl_vars['user']->value['style'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['user']->value['profile'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['user']->value['avatar'];?>
" class="avatar-img" style="height:20px;width:20px;" alt="<?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
"/> <?php echo $_smarty_tpl->tpl_vars['user']->value['nickname'];?>
</a>
                <br/> <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> <?php if (!((isset($_smarty_tpl->tpl_vars['__smarty_foreach_reactions']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_reactions']->value['last'] : null))) {?>
                <hr/> <?php }?> <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        </div>
    </div>
</div>
<?php }?> <?php if ((isset($_smarty_tpl->tpl_vars['reply']->value['buttons']['report']))) {?>
<div class="modal fade" id="report<?php echo $_smarty_tpl->tpl_vars['reply']->value['id'];?>
Modal" tabindex="-1" role="dialog" aria-labelledby="report<?php echo $_smarty_tpl->tpl_vars['reply']->value['id'];?>
ModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <span class="modal-title" id="report<?php echo $_smarty_tpl->tpl_vars['reply']->value['id'];?>
ModalLabel"><?php echo $_smarty_tpl->tpl_vars['reply']->value['buttons']['report']['TEXT'];?>
</span>
            </div>
            <form action="<?php echo $_smarty_tpl->tpl_vars['reply']->value['buttons']['report']['URL'];?>
" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="InputReason"><?php echo $_smarty_tpl->tpl_vars['reply']->value['buttons']['report']['REPORT_TEXT'];?>
 </label>
                        <textarea class="form-control" id="InputReason" name="reason"></textarea>
                    </div>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['CANCEL']->value;?>
</button>
                    <input type="hidden" name="post" value="<?php echo $_smarty_tpl->tpl_vars['reply']->value['id'];?>
">
                    <input type="hidden" name="topic" value="<?php echo $_smarty_tpl->tpl_vars['TOPIC_ID']->value;?>
">
                    <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                    <button type="submit" class="btn btn-theme"><?php echo $_smarty_tpl->tpl_vars['reply']->value['buttons']['report']['TEXT'];?>
</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php }?> <?php if ((isset($_smarty_tpl->tpl_vars['CAN_MODERATE']->value))) {?>
<div class="modal fade" id="spam<?php echo $_smarty_tpl->tpl_vars['reply']->value['id'];?>
Modal" tabindex="-1" role="dialog" aria-labelledby="spam<?php echo $_smarty_tpl->tpl_vars['reply']->value['id'];?>
ModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <span class="modal-title" id="spam<?php echo $_smarty_tpl->tpl_vars['reply']->value['id'];?>
ModalLabel"><?php echo $_smarty_tpl->tpl_vars['MARK_AS_SPAM']->value;?>
</span>
            </div>
            <div class="modal-body">
                <?php echo $_smarty_tpl->tpl_vars['CONFIRM_SPAM_POST']->value;?>

                <form action="<?php echo $_smarty_tpl->tpl_vars['reply']->value['buttons']['spam']['URL'];?>
" method="post">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['CANCEL']->value;?>
</button>
                    <input type="hidden" name="post" value="<?php echo $_smarty_tpl->tpl_vars['reply']->value['id'];?>
">
                    <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                    <button type="submit" class="btn btn-theme"><?php echo $_smarty_tpl->tpl_vars['MARK_AS_SPAM']->value;?>
</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="delete<?php echo $_smarty_tpl->tpl_vars['reply']->value['id'];?>
Modal" tabindex="-1" role="dialog" aria-labelledby="delete<?php echo $_smarty_tpl->tpl_vars['reply']->value['id'];?>
ModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <span class="modal-title" id="delete<?php echo $_smarty_tpl->tpl_vars['reply']->value['id'];?>
ModalLabel"><?php echo $_smarty_tpl->tpl_vars['CONFIRM_DELETE_SHORT']->value;?>
</span>
            </div>
            <div class="modal-body">
                <?php echo $_smarty_tpl->tpl_vars['CONFIRM_DELETE_POST']->value;?>
<br /><br />
                <form action="<?php echo $_smarty_tpl->tpl_vars['reply']->value['buttons']['delete']['URL'];?>
" method="post">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['CANCEL']->value;?>
</button>
                    <input type="hidden" name="tid" value="<?php echo $_smarty_tpl->tpl_vars['TOPIC_ID']->value;?>
">
                    <input type="hidden" name="number" value="<?php echo $_smarty_tpl->tpl_vars['reply']->value['buttons']['delete']['NUMBER'];?>
">
                    <input type="hidden" name="pid" value="<?php echo $_smarty_tpl->tpl_vars['reply']->value['id'];?>
">
                    <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                    <button type="submit" class="btn btn-theme"><?php echo $_smarty_tpl->tpl_vars['reply']->value['buttons']['delete']['TEXT'];?>
</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php }?> <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php if ((isset($_smarty_tpl->tpl_vars['CAN_MODERATE']->value))) {?>
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <span class="modal-title" id="deleteModalLabel"><?php echo $_smarty_tpl->tpl_vars['CONFIRM_DELETE_SHORT']->value;?>
</span>
            </div>
            <div class="modal-body">
                <?php echo $_smarty_tpl->tpl_vars['CONFIRM_DELETE']->value;?>
<br /><br />
                <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['CANCEL']->value;?>
</button>
                <form action="<?php echo $_smarty_tpl->tpl_vars['DELETE_URL']->value;?>
" method="post" id="deleteTopic" style="display: none">
                    <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
" name="token" />
                </form>
                <a type="submit" class="btn btn-theme" onclick="document.getElementById('deleteTopic').submit()"><?php echo $_smarty_tpl->tpl_vars['DELETE']->value;?>
</a>
            </div>
        </div>
    </div>
</div>
<?php }?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['REPLIES']->value, 'reply', false, NULL, 'arr', array (
));
$_smarty_tpl->tpl_vars['reply']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['reply']->value) {
$_smarty_tpl->tpl_vars['reply']->do_else = false;
if ((isset($_smarty_tpl->tpl_vars['USER_BADGES_LIST']->value))) {?>
<div class="modal fade" id="badges<?php echo $_smarty_tpl->tpl_vars['reply']->value['user_id'];?>
Modal" tabindex="-1" role="dialog" aria-labelledby="badges<?php echo $_smarty_tpl->tpl_vars['reply']->value['user_id'];?>
ModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <span class="modal-title" id="badges<?php echo $_smarty_tpl->tpl_vars['reply']->value['user_id'];?>
ModalLabel"><?php echo $_smarty_tpl->tpl_vars['BDG_TITLE']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['reply']->value['username'];?>
</span>
            </div>
            <div class="modal-body">
                <div>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['USER_BADGES_LIST']->value, 'badges');
$_smarty_tpl->tpl_vars['badges']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['badges']->value) {
$_smarty_tpl->tpl_vars['badges']->do_else = false;
?>
				<?php if ($_smarty_tpl->tpl_vars['badges']->value['user_id'] == $_smarty_tpl->tpl_vars['reply']->value['user_id']) {?>
					<div class="bdg text-center"
						style="background: linear-gradient(to bottom right, <?php echo $_smarty_tpl->tpl_vars['badges']->value['bdg_color'];?>
 0%, <?php echo $_smarty_tpl->tpl_vars['badges']->value['bdg_color'];?>
 100%); color: <?php echo $_smarty_tpl->tpl_vars['badges']->value['bdg_color'];?>
;">
						>
						<div class="circle"> <?php echo $_smarty_tpl->tpl_vars['badges']->value['bdg_icon'];?>
</div>
						<div class="ribbon"><?php echo $_smarty_tpl->tpl_vars['badges']->value['bdg_ribbon'];?>
</div>
					</div>
				<?php }?>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</div>
			<button type="button" class="btn btn-secondary mt-2" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
