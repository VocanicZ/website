<?php
/* Smarty version 4.3.1, created on 2023-06-26 00:41:43
  from '/home/u302265335/domains/rainbowcreation.net/public_html/custom/templates/Cobalt/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64987c570faf39_90097276',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4dde3eed24f19cb5d9780e8680401ae0617935aa' => 
    array (
      0 => '/home/u302265335/domains/rainbowcreation.net/public_html/custom/templates/Cobalt/index.tpl',
      1 => 1687714900,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:navbar.tpl' => 1,
    'file:ghost/index.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_64987c570faf39_90097276 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php $_smarty_tpl->_subTemplateRender('file:navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
    <?php if ((isset($_smarty_tpl->tpl_vars['THEME_ENABLE_SLIDER']->value)) && preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['THEME_ENABLE_SLIDER']->value, $tmp) > 2) {?>
        <div class="carousel slide cobalt-carousel" id="carousel" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                <?php if ((isset($_smarty_tpl->tpl_vars['THEME_ENABLE_SLIDER2']->value)) && preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['THEME_ENABLE_SLIDER2']->value, $tmp) > 2) {?>
                    <li data-target="#carousel" data-slide-to="1"></li>
                <?php }?> <?php if ((isset($_smarty_tpl->tpl_vars['THEME_ENABLE_SLIDER3']->value)) && preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['THEME_ENABLE_SLIDER3']->value, $tmp) > 2) {?>
                    <li data-target="#carousel" data-slide-to="2"></li>
                <?php }?> <?php if ((isset($_smarty_tpl->tpl_vars['THEME_ENABLE_SLIDER4']->value)) && preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['THEME_ENABLE_SLIDER4']->value, $tmp) > 2) {?>
                    <li data-target="#carousel" data-slide-to="3"></li>
                <?php }?> <?php if ((isset($_smarty_tpl->tpl_vars['THEME_ENABLE_SLIDER5']->value)) && preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['THEME_ENABLE_SLIDER5']->value, $tmp) > 2) {?>
                    <li data-target="#carousel" data-slide-to="4"></li>
                <?php }?>
            </ol>
            <div class="carousel-inner">
                
                    <div class="carousel-item active">
                        <?php if ((isset($_smarty_tpl->tpl_vars['THEME_SLIDER1_LINK']->value)) && preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['THEME_SLIDER1_LINK']->value, $tmp) > 0) {?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['THEME_SLIDER1_LINK']->value;?>
" <?php if ((isset($_smarty_tpl->tpl_vars['THEME_SLIDER1_LINK_OPEN']->value)) && $_smarty_tpl->tpl_vars['THEME_SLIDER1_LINK_OPEN']->value == 'yes') {?>target="_blank"<?php }?>>
                            <?php }?>
                            <picture>
                                <?php if ((isset($_smarty_tpl->tpl_vars['THEME_SLIDER1_IMAGE_WEBP']->value)) && preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['THEME_SLIDER1_IMAGE_WEBP']->value, $tmp) > 4) {?>
                                <source srcset="<?php echo $_smarty_tpl->tpl_vars['THEME_SLIDER1_IMAGE_WEBP']->value;?>
" type="image/webp"><?php }?>
                                <source srcset="<?php echo $_smarty_tpl->tpl_vars['THEME_SLIDER1_IMAGE']->value;?>
">
                                <img class="d-block w-100" alt="Slide #1" src='<?php echo $_smarty_tpl->tpl_vars['THEME_SLIDER1_IMAGE']->value;?>
'>
                            </picture>
                            <div class="carousel-caption d-none d-md-block">
                                <?php if ((isset($_smarty_tpl->tpl_vars['THEME_SLIDER1_TITLE']->value)) && preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['THEME_SLIDER1_TITLE']->value, $tmp) > 0) {?>
                                <h1 class="slider-title"><?php echo $_smarty_tpl->tpl_vars['THEME_SLIDER1_TITLE']->value;?>
</h1>
                                <?php }?>
                                <?php if ((isset($_smarty_tpl->tpl_vars['THEME_SLIDER1_DESCRIPTION']->value)) && preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['THEME_SLIDER1_DESCRIPTION']->value, $tmp) > 0) {?>
                                    <p class="col-inv slider-desc"><?php echo $_smarty_tpl->tpl_vars['THEME_SLIDER1_DESCRIPTION']->value;?>
</p>
                                <?php }?>
                            </div>
                            <?php if ((isset($_smarty_tpl->tpl_vars['THEME_SLIDER1_LINK']->value)) && preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['THEME_SLIDER1_LINK']->value, $tmp) > 0) {?>
                        </a> <?php }?>
                    </div>
                    <?php if ((isset($_smarty_tpl->tpl_vars['THEME_ENABLE_SLIDER2']->value)) && preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['THEME_ENABLE_SLIDER2']->value, $tmp) > 2) {?>
                    <div class="carousel-item">
                        <?php if ((isset($_smarty_tpl->tpl_vars['THEME_SLIDER2_LINK']->value)) && preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['THEME_SLIDER2_LINK']->value, $tmp) > 0) {?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['THEME_SLIDER2_LINK']->value;?>
" <?php if ((isset($_smarty_tpl->tpl_vars['THEME_SLIDER2_LINK_OPEN']->value)) && $_smarty_tpl->tpl_vars['THEME_SLIDER2_LINK_OPEN']->value == 'yes') {?>target="_blank"<?php }?>>
                            <?php }?>
                            <picture>
                                <?php if ((isset($_smarty_tpl->tpl_vars['THEME_SLIDER2_IMAGE_WEBP']->value)) && preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['THEME_SLIDER2_IMAGE_WEBP']->value, $tmp) > 4) {?>
                                <source srcset="<?php echo $_smarty_tpl->tpl_vars['THEME_SLIDER2_IMAGE_WEBP']->value;?>
" type="image/webp"><?php }?>
                                <source srcset="<?php echo $_smarty_tpl->tpl_vars['THEME_SLIDER2_IMAGE']->value;?>
">
                                <img class="d-block w-100" alt="Slide #2" src='<?php echo $_smarty_tpl->tpl_vars['THEME_SLIDER2_IMAGE']->value;?>
'>
                            </picture>
                            <div class="carousel-caption d-none d-md-block">
                                <?php if ((isset($_smarty_tpl->tpl_vars['THEME_SLIDER2_TITLE']->value)) && preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['THEME_SLIDER2_TITLE']->value, $tmp) > 0) {?>
                                <h1 class="slider-title"><?php echo $_smarty_tpl->tpl_vars['THEME_SLIDER2_TITLE']->value;?>
</h1>
                                <?php }?>
                                <?php if ((isset($_smarty_tpl->tpl_vars['THEME_SLIDER2_DESCRIPTION']->value)) && preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['THEME_SLIDER2_DESCRIPTION']->value, $tmp) > 0) {?>
                                    <p class="col-inv slider-desc"><?php echo $_smarty_tpl->tpl_vars['THEME_SLIDER2_DESCRIPTION']->value;?>
</p>
                                <?php }?>
                            </div>
                            <?php if ((isset($_smarty_tpl->tpl_vars['THEME_SLIDER2_LINK']->value)) && preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['THEME_SLIDER2_LINK']->value, $tmp) > 0) {?>
                        </a> <?php }?>
                    </div>
                    <?php }?> <?php if ((isset($_smarty_tpl->tpl_vars['THEME_ENABLE_SLIDER3']->value)) && preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['THEME_ENABLE_SLIDER3']->value, $tmp) > 2) {?>
                    <div class="carousel-item">
                        <?php if ((isset($_smarty_tpl->tpl_vars['THEME_SLIDER3_LINK']->value)) && preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['THEME_SLIDER3_LINK']->value, $tmp) > 0) {?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['THEME_SLIDER3_LINK']->value;?>
" <?php if ((isset($_smarty_tpl->tpl_vars['THEME_SLIDER3_LINK_OPEN']->value)) && $_smarty_tpl->tpl_vars['THEME_SLIDER3_LINK_OPEN']->value == 'yes') {?>target="_blank"<?php }?>>
                            <?php }?>
                            <picture>
                                <?php if ((isset($_smarty_tpl->tpl_vars['THEME_SLIDER3_IMAGE_WEBP']->value)) && preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['THEME_SLIDER3_IMAGE_WEBP']->value, $tmp) > 4) {?>
                                <source srcset="<?php echo $_smarty_tpl->tpl_vars['THEME_SLIDER3_IMAGE_WEBP']->value;?>
" type="image/webp"><?php }?>
                                <source srcset="<?php echo $_smarty_tpl->tpl_vars['THEME_SLIDER3_IMAGE']->value;?>
">
                                <img class="d-block w-100" alt="Slide #3" src='<?php echo $_smarty_tpl->tpl_vars['THEME_SLIDER3_IMAGE']->value;?>
'>
                            </picture>
                            <div class="carousel-caption d-none d-md-block">
                                <?php if ((isset($_smarty_tpl->tpl_vars['THEME_SLIDER3_TITLE']->value)) && preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['THEME_SLIDER3_TITLE']->value, $tmp) > 0) {?>
                                <h1 class="slider-title"><?php echo $_smarty_tpl->tpl_vars['THEME_SLIDER3_TITLE']->value;?>
</h1>
                                <?php }?>
                                <?php if ((isset($_smarty_tpl->tpl_vars['THEME_SLIDER3_DESCRIPTION']->value)) && preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['THEME_SLIDER3_DESCRIPTION']->value, $tmp) > 0) {?>
                                    <p class="col-inv slider-desc"><?php echo $_smarty_tpl->tpl_vars['THEME_SLIDER3_DESCRIPTION']->value;?>
</p>
                                <?php }?>
                            </div>
                            <?php if ((isset($_smarty_tpl->tpl_vars['THEME_SLIDER3_LINK']->value)) && preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['THEME_SLIDER3_LINK']->value, $tmp) > 0) {?>
                        </a> <?php }?>
                    </div>
                    <?php }?> <?php if ((isset($_smarty_tpl->tpl_vars['THEME_ENABLE_SLIDER4']->value)) && preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['THEME_ENABLE_SLIDER4']->value, $tmp) > 2) {?>
                    <div class="carousel-item">
                        <?php if ((isset($_smarty_tpl->tpl_vars['THEME_SLIDER4_LINK']->value)) && preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['THEME_SLIDER4_LINK']->value, $tmp) > 0) {?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['THEME_SLIDER4_LINK']->value;?>
" <?php if ((isset($_smarty_tpl->tpl_vars['THEME_SLIDER4_LINK_OPEN']->value)) && $_smarty_tpl->tpl_vars['THEME_SLIDER4_LINK_OPEN']->value == 'yes') {?>target="_blank"<?php }?>>
                            <?php }?>
                            <picture>
                                <?php if ((isset($_smarty_tpl->tpl_vars['THEME_SLIDER4_IMAGE_WEBP']->value)) && preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['THEME_SLIDER4_IMAGE_WEBP']->value, $tmp) > 4) {?>
                                <source srcset="<?php echo $_smarty_tpl->tpl_vars['THEME_SLIDER4_IMAGE_WEBP']->value;?>
" type="image/webp"><?php }?>
                                <source srcset="<?php echo $_smarty_tpl->tpl_vars['THEME_SLIDER4_IMAGE']->value;?>
">
                                <img class="d-block w-100" alt="Slide #4" src='<?php echo $_smarty_tpl->tpl_vars['THEME_SLIDER4_IMAGE']->value;?>
'>
                            </picture>
                            <div class="carousel-caption d-none d-md-block">
                                <?php if ((isset($_smarty_tpl->tpl_vars['THEME_SLIDER4_TITLE']->value)) && preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['THEME_SLIDER4_TITLE']->value, $tmp) > 0) {?>
                                <h1 class="slider-title"><?php echo $_smarty_tpl->tpl_vars['THEME_SLIDER4_TITLE']->value;?>
</h1>
                                <?php }?>
                                <?php if ((isset($_smarty_tpl->tpl_vars['THEME_SLIDER4_DESCRIPTION']->value)) && preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['THEME_SLIDER4_DESCRIPTION']->value, $tmp) > 0) {?>
                                    <p class="col-inv slider-desc"><?php echo $_smarty_tpl->tpl_vars['THEME_SLIDER4_DESCRIPTION']->value;?>
</p>
                                <?php }?>
                            </div>
                            <?php if ((isset($_smarty_tpl->tpl_vars['THEME_SLIDER4_LINK']->value)) && preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['THEME_SLIDER4_LINK']->value, $tmp) > 0) {?>
                        </a> <?php }?>
                    </div>
                    <?php }?> <?php if ((isset($_smarty_tpl->tpl_vars['THEME_ENABLE_SLIDER5']->value)) && preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['THEME_ENABLE_SLIDER5']->value, $tmp) > 2) {?>
                    <div class="carousel-item">
                        <?php if ((isset($_smarty_tpl->tpl_vars['THEME_SLIDER5_LINK']->value)) && preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['THEME_SLIDER5_LINK']->value, $tmp) > 0) {?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['THEME_SLIDER5_LINK']->value;?>
" <?php if ((isset($_smarty_tpl->tpl_vars['THEME_SLIDER5_LINK_OPEN']->value)) && $_smarty_tpl->tpl_vars['THEME_SLIDER5_LINK_OPEN']->value == 'yes') {?>target="_blank"<?php }?>>
                            <?php }?>
                            <picture>
                                <?php if ((isset($_smarty_tpl->tpl_vars['THEME_SLIDER5_IMAGE_WEBP']->value)) && preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['THEME_SLIDER5_IMAGE_WEBP']->value, $tmp) > 4) {?>
                                <source srcset="<?php echo $_smarty_tpl->tpl_vars['THEME_SLIDER5_IMAGE_WEBP']->value;?>
" type="image/webp"><?php }?>
                                <source srcset="<?php echo $_smarty_tpl->tpl_vars['THEME_SLIDER5_IMAGE']->value;?>
">
                                <img class="d-block w-100" alt="Slide #5" src='<?php echo $_smarty_tpl->tpl_vars['THEME_SLIDER5_IMAGE']->value;?>
'>
                            </picture>
                            <div class="carousel-caption d-none d-md-block">
                                <?php if ((isset($_smarty_tpl->tpl_vars['THEME_SLIDER5_TITLE']->value)) && preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['THEME_SLIDER5_TITLE']->value, $tmp) > 0) {?>
                                <h1 class="slider-title"><?php echo $_smarty_tpl->tpl_vars['THEME_SLIDER5_TITLE']->value;?>
</h1>
                                <?php }?>
                                <?php if ((isset($_smarty_tpl->tpl_vars['THEME_SLIDER5_DESCRIPTION']->value)) && preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['THEME_SLIDER5_DESCRIPTION']->value, $tmp) > 0) {?>
                                    <p class="col-inv slider-desc"><?php echo $_smarty_tpl->tpl_vars['THEME_SLIDER5_DESCRIPTION']->value;?>
</p>
                                <?php }?>
                            </div>
                            <?php if ((isset($_smarty_tpl->tpl_vars['THEME_SLIDER5_LINK']->value)) && preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['THEME_SLIDER5_LINK']->value, $tmp) > 0) {?>
                        </a> <?php }?>
                    </div>
                <?php }?>
            </div>
        </div>
    <?php }?>

    <?php if ((isset($_smarty_tpl->tpl_vars['HOME_SESSION_FLASH']->value))) {?>
        <div class="alert alert-info">
            <?php echo $_smarty_tpl->tpl_vars['HOME_SESSION_FLASH']->value;?>

        </div>
        <?php }?> <?php if ((isset($_smarty_tpl->tpl_vars['HOME_SESSION_ERROR_FLASH']->value))) {?>
        <div class="alert alert-danger">
            <?php echo $_smarty_tpl->tpl_vars['HOME_SESSION_ERROR_FLASH']->value;?>

        </div>
    <?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['GHOST']->value))) {?>
        <?php $_smarty_tpl->_subTemplateRender('file:ghost/index.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } else { ?>
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

            <?php if ($_smarty_tpl->tpl_vars['HOME_TYPE']->value === 'news') {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['NEWS']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
">
                    <div class="card">
                        <div class="card-header news-header">
                            <div class="news-flex">
                                <?php if ($_smarty_tpl->tpl_vars['item']->value['label']) {?>
                                <div class="news-badge-col">
                                    <div class="news-badge"><?php echo $_smarty_tpl->tpl_vars['item']->value['label'];?>
</div>
                                </div>
                                <?php }?>
                                <div class="news-text">
                                    <a class="news-title" href="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a>
                                </div>
                                <div class="info<?php if ($_smarty_tpl->tpl_vars['THEME_FULL_BODY_AVATARS']->value == "no") {?> pt-1<?php }?>">
                                    <div class="news-info">
                                        <div class="author">
                                            <a class="username" data-poload="<?php echo $_smarty_tpl->tpl_vars['USER_INFO_URL']->value;
echo $_smarty_tpl->tpl_vars['item']->value['author_id'];?>
" data-html="true" data-placement="top" href="<?php echo $_smarty_tpl->tpl_vars['item']->value['author_url'];?>
" style="<?php echo $_smarty_tpl->tpl_vars['item']->value['author_style'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['author_name'];?>
</a>
                                        </div>
                                        <div class="time">
                                            <span data-toggle="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['date'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['time_ago'];?>
</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="avatar">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['author_url'];?>
" data-poload="<?php echo $_smarty_tpl->tpl_vars['USER_INFO_URL']->value;
echo $_smarty_tpl->tpl_vars['item']->value['author_id'];?>
"
                                        data-html="true" data-placement="top">
                                        <?php if ($_smarty_tpl->tpl_vars['THEME_FULL_BODY_AVATARS']->value == "yes") {?>
                                            <img class="full-body" src="https://mc-heads.net/body/<?php echo $_smarty_tpl->tpl_vars['item']->value['author_name'];?>
/left" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['author_name'];?>
" />
                                        <?php } else { ?>
                                            <img class="avatar-img" style="height: 50px" src="<?php echo $_smarty_tpl->tpl_vars['item']->value['author_avatar'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['author_name'];?>
">
                                        <?php }?>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body forum_post">
                            <?php echo $_smarty_tpl->tpl_vars['item']->value['content'];?>

                            <div class="views-box"><i class="fa-solid fa-eye"></i> <?php echo $_smarty_tpl->tpl_vars['item']->value['views'];?>
</div>
                            <div class="replies-box"><i class="fa-solid fa-comments"></i> <?php echo $_smarty_tpl->tpl_vars['item']->value['replies'];?>
</div>
                            <a class="btn btn-secondary btn-read-more-news float-right" href="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['READ_FULL_POST']->value;?>
 <i class="fa-solid fa-share"></i></a>
                        </div>
                    </div>
                    </a>

                <?php
}
if ($_smarty_tpl->tpl_vars['item']->do_else) {
?>
                    <div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['NO_NEWS']->value;?>
</div>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                <?php if ((isset($_smarty_tpl->tpl_vars['THEME_NEWS_BTN']->value)) && preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['THEME_NEWS_BTN']->value, $tmp) > 2) {?>
                    <div class="text-center">
                        <a class="btn btn-theme btn-read-more-news mb-4" href="<?php echo $_smarty_tpl->tpl_vars['THEME_NEWS_LINK']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['NEWS_BUTTON']->value;?>
</a>
                    </div>
                <?php }?>

            <?php } elseif ($_smarty_tpl->tpl_vars['HOME_TYPE']->value === 'custom') {?>
                <iframe id="map"
                	title="map"
                    width="1030"
                    height="500"
                    src="https://map.rainbowcreation.net">
                </iframe>
                <!--<?php echo $_smarty_tpl->tpl_vars['CUSTOM_HOME_CONTENT']->value;?>
-->
            <?php }?>
            
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
    <?php }?>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
