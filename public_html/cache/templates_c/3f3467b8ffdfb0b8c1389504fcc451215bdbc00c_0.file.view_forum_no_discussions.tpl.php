<?php
/* Smarty version 4.3.1, created on 2023-06-01 08:14:42
  from '/home/u302265335/domains/rainbowcreation.net/public_html/custom/templates/Cobalt/forum/view_forum_no_discussions.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6477f1029144b2_43349932',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f3467b8ffdfb0b8c1389504fcc451215bdbc00c' => 
    array (
      0 => '/home/u302265335/domains/rainbowcreation.net/public_html/custom/templates/Cobalt/forum/view_forum_no_discussions.tpl',
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
function content_6477f1029144b2_43349932 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php $_smarty_tpl->_subTemplateRender('file:navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
    <div class="row">
        <div class="col-lg-9">
            <ol class="breadcrumb">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['BREADCRUMBS']->value, 'breadcrumb');
$_smarty_tpl->tpl_vars['breadcrumb']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['breadcrumb']->value) {
$_smarty_tpl->tpl_vars['breadcrumb']->do_else = false;
?>
                    <li <?php if ((isset($_smarty_tpl->tpl_vars['breadcrumb']->value['active']))) {?>class="active" <?php }?>><?php if (!(isset($_smarty_tpl->tpl_vars['breadcrumb']->value['active']))) {?><a
                            class="white-link"
                            href="<?php echo $_smarty_tpl->tpl_vars['breadcrumb']->value['link'];?>
"><?php }
echo $_smarty_tpl->tpl_vars['breadcrumb']->value['forum_title'];
if (!(isset($_smarty_tpl->tpl_vars['breadcrumb']->value['active']))) {?></a><?php }?>
                    </li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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

        <div
            class="<?php if (count($_smarty_tpl->tpl_vars['WIDGETS_LEFT']->value) && count($_smarty_tpl->tpl_vars['WIDGETS_RIGHT']->value)) {?>col-lg-6<?php } elseif (count($_smarty_tpl->tpl_vars['WIDGETS_LEFT']->value) || count($_smarty_tpl->tpl_vars['WIDGETS_RIGHT']->value)) {?>col-lg-9<?php } else { ?>col-lg-12<?php }?>">
            <?php if (!empty($_smarty_tpl->tpl_vars['SUBFORUMS']->value)) {?>
                <div class="card">
                    <div class="card-header header-theme"><?php echo $_smarty_tpl->tpl_vars['SUBFORUM_LANGUAGE']->value;?>
</div>
                    <div class="card-body">
                        <div class="card forum-index-card">
                            <div class="card-body">

                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SUBFORUMS']->value, 'subforum', false, NULL, 'subforums', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['subforum']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['subforum']->value) {
$_smarty_tpl->tpl_vars['subforum']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_subforums']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_subforums']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_subforums']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_subforums']->value['total'];
?>
                                    <div class="row">
                                        <div class="col-9 col-md-4">
                                            <a class="forum-link white-link" href="<?php echo $_smarty_tpl->tpl_vars['subforum']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['subforum']->value['title'];?>
</a>
                                        </div>
                                        <div class="col-3 col-md-2">
                                            <?php echo ucfirst($_smarty_tpl->tpl_vars['TOPICS']->value);?>
: <b><?php echo $_smarty_tpl->tpl_vars['subforum']->value['topics'];?>
</b>
                                        </div>
                                        <div class="col-8 col-md-6 col-inv">
                                            <?php if (count($_smarty_tpl->tpl_vars['subforum']->value['latest_post'])) {?>
                                                <a class="white-link"
                                                    href="<?php echo $_smarty_tpl->tpl_vars['subforum']->value['latest_post']['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['subforum']->value['latest_post']['title'];?>
</a>
                                                <br /><small><span data-toggle="tooltip" data-trigger="hover"
                                                        data-original-title="<?php echo $_smarty_tpl->tpl_vars['subforum']->value['latest_post']['time'];?>
"><?php echo $_smarty_tpl->tpl_vars['subforum']->value['latest_post']['timeago'];?>
</span>
                                                    <?php echo $_smarty_tpl->tpl_vars['BY']->value;?>
 <a style="<?php echo $_smarty_tpl->tpl_vars['subforum']->value['latest_post']['last_user_style'];?>
"
                                                        href="<?php echo $_smarty_tpl->tpl_vars['subforum']->value['latest_post']['last_user_link'];?>
"
                                                        data-poload="<?php echo $_smarty_tpl->tpl_vars['USER_INFO_URL']->value;
echo $_smarty_tpl->tpl_vars['subforum']->value['latest_post']['last_user_id'];?>
"
                                                        data-html="true"
                                                    data-placement="top"><?php echo $_smarty_tpl->tpl_vars['subforum']->value['latest_post']['last_user'];?>
</a></small> <?php } else { ?>
                                            <?php echo $_smarty_tpl->tpl_vars['NO_TOPICS']->value;?>
 <?php }?>
                                        </div>
                                    </div>
                                    <?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_subforums']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_subforums']->value['last'] : null)) {?>
                                    <hr /><?php }?>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php }?>
            <div class="card">
                <div class="card-header header-theme"><?php echo ucfirst($_smarty_tpl->tpl_vars['TOPICS']->value);
if ($_smarty_tpl->tpl_vars['NEW_TOPIC_BUTTON']->value) {?><span
                            class="float-right"><a href="<?php echo $_smarty_tpl->tpl_vars['NEW_TOPIC_BUTTON']->value;?>
"
                            class="btn btn-theme btn-sm"><?php echo $_smarty_tpl->tpl_vars['NEW_TOPIC']->value;?>
</a></span><?php }?></div>
                <div class="card-body">
                    <?php echo $_smarty_tpl->tpl_vars['NO_TOPICS']->value;?>

                </div>
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
<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
