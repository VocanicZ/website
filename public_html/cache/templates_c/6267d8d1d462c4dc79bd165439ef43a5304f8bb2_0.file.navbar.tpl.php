<?php
/* Smarty version 4.3.1, created on 2023-06-01 07:55:10
  from '/home/u302265335/domains/rainbowcreation.net/public_html/custom/templates/Cobalt/navbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6477ec6ee2f110_14578739',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6267d8d1d462c4dc79bd165439ef43a5304f8bb2' => 
    array (
      0 => '/home/u302265335/domains/rainbowcreation.net/public_html/custom/templates/Cobalt/navbar.tpl',
      1 => 1685580388,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:template_settings/widgets/store_widget.tpl' => 1,
  ),
),false)) {
function content_6477ec6ee2f110_14578739 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['THEME_NAVBAR']->value)) && $_smarty_tpl->tpl_vars['THEME_NAVBAR']->value == 'top') {?>
    <nav class="navbar navbar-expand-lg navbar-theme navbar-double navbar-top-new">
        <div class="container">
            <button class="navbar-toggler nav-link" type="button"><i class="fa-solid fa-bars"></i> <?php echo $_smarty_tpl->tpl_vars['MENU']->value;?>
</button>
            
            <?php if ((isset($_smarty_tpl->tpl_vars['THEME_DS_BOX']->value)) && preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['THEME_DS_BOX']->value, $tmp) > 2) {?>
            <div class="status-icon" onclick="copyToClipboard('#ip')">
                <svg class="creeper" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zM188.3 147.1c-7.6 4.2-12.3 12.3-12.3 20.9V344c0 8.7 4.7 16.7 12.3 20.9s16.8 4.1 24.3-.5l144-88c7.1-4.4 11.5-12.1 11.5-20.5s-4.4-16.1-11.5-20.5l-144-88c-7.4-4.5-16.7-4.7-24.3-.5z"/></svg>
            </div>
            
            <a href="http://<?php echo $_smarty_tpl->tpl_vars['THEME_DISCORD_SERVER']->value;?>
" target="_blank">
                <div class="discord-icon">
                            <svg class="discord" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 245 240">
                                <path class="st0"
                                    d="M104.4 103.9c-5.7 0-10.2 5-10.2 11.1s4.6 11.1 10.2 11.1c5.7 0 10.2-5 10.2-11.1.1-6.1-4.5-11.1-10.2-11.1zM140.9 103.9c-5.7 0-10.2 5-10.2 11.1s4.6 11.1 10.2 11.1c5.7 0 10.2-5 10.2-11.1s-4.5-11.1-10.2-11.1z">
                                </path>
                                <path class="st0"
                                    d="M189.5 20h-134C44.2 20 35 29.2 35 40.6v135.2c0 11.4 9.2 20.6 20.5 20.6h113.4l-5.3-18.5 12.8 11.9 12.1 11.2 21.5 19V40.6c0-11.4-9.2-20.6-20.5-20.6zm-38.6 130.6s-3.6-4.3-6.6-8.1c13.1-3.7 18.1-11.9 18.1-11.9-4.1 2.7-8 4.6-11.5 5.9-5 2.1-9.8 3.5-14.5 4.3-9.6 1.8-18.4 1.3-25.9-.1-5.7-1.1-10.6-2.7-14.7-4.3-2.3-.9-4.8-2-7.3-3.4-.3-.2-.6-.3-.9-.5-.2-.1-.3-.2-.4-.3-1.8-1-2.8-1.7-2.8-1.7s4.8 8 17.5 11.8c-3 3.8-6.7 8.3-6.7 8.3-22.1-.7-30.5-15.2-30.5-15.2 0-32.2 14.4-58.3 14.4-58.3 14.4-10.8 28.1-10.5 28.1-10.5l1 1.2c-18 5.2-26.3 13.1-26.3 13.1s2.2-1.2 5.9-2.9c10.7-4.7 19.2-6 22.7-6.3.6-.1 1.1-.2 1.7-.2 6.1-.8 13-1 20.2-.2 9.5 1.1 19.7 3.9 30.1 9.6 0 0-7.9-7.5-24.9-12.7l1.4-1.6s13.7-.3 28.1 10.5c0 0 14.4 26.1 14.4 58.3 0 0-8.5 14.5-30.6 15.2z">
                                </path>
                            </svg>
                </div>
            </a>
            <?php }?>

            <div class="collapse navbar-collapse" id="navbar">


            <?php if ((isset($_smarty_tpl->tpl_vars['THEME_LR_SIDEBAR']->value)) && ($_smarty_tpl->tpl_vars['THEME_LR_SIDEBAR']->value == 'yes')) {?>

                <ul class="navbar-nav <?php if ($_smarty_tpl->tpl_vars['THEME_NAVBAR_ALIGNMENT']->value == "center") {?>mx-auto<?php } else { ?>mr-auto<?php }?>">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['NAV_LINKS']->value, 'item', false, 'name');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                        <?php if ((isset($_smarty_tpl->tpl_vars['item']->value['items']))) {?>
                            <li class="nav-item dropdown more-dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                                    aria-haspopup="true" aria-expanded="false"><?php echo $_smarty_tpl->tpl_vars['item']->value['icon'];?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a>
                                <div class="dropdown-menu more-dropdown-menu">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['items'], 'dropdown');
$_smarty_tpl->tpl_vars['dropdown']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['dropdown']->value) {
$_smarty_tpl->tpl_vars['dropdown']->do_else = false;
?>
                                        <a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['dropdown']->value['link'];?>
"
                                            <?php if ((isset($_smarty_tpl->tpl_vars['dropdown']->value['target'])) && preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['dropdown']->value['target'], $tmp) > 2) {?>
                                            target="<?php echo $_smarty_tpl->tpl_vars['dropdown']->value['target'];?>
" <?php }?>><?php echo $_smarty_tpl->tpl_vars['dropdown']->value['icon'];?>
 <?php echo $_smarty_tpl->tpl_vars['dropdown']->value['title'];?>
</a>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </div>
                            </li>
                        <?php } else { ?>
                            <?php if ($_smarty_tpl->tpl_vars['THEME_NAVBAR_ALIGNMENT']->value == "left" && $_smarty_tpl->tpl_vars['THEME_STYLE_STORE_LINK']->value == "yes") {?>
                                <?php if (($_smarty_tpl->tpl_vars['item']->value['link'] !== $_smarty_tpl->tpl_vars['THEME_STORE_URL']->value)) {?>
                                    <li class="nav-item">
                                        <a class="nav-link<?php if ((isset($_smarty_tpl->tpl_vars['item']->value['active']))) {?> nav-link-active<?php }
if (($_smarty_tpl->tpl_vars['THEME_STYLE_STORE_LINK']->value == "yes") && ($_smarty_tpl->tpl_vars['item']->value['link'] == $_smarty_tpl->tpl_vars['THEME_STORE_URL']->value)) {?> store-link<?php }?>"
                                            href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
" <?php if ((isset($_smarty_tpl->tpl_vars['item']->value['target'])) && preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['item']->value['target'], $tmp) > 2) {?>
                                            target="<?php echo $_smarty_tpl->tpl_vars['item']->value['target'];?>
" <?php }?>><?php echo $_smarty_tpl->tpl_vars['item']->value['icon'];?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a>
                                    </li>
                                <?php }?>

                            <?php } else { ?>
                                <li class="nav-item">
                                    <a class="nav-link<?php if ((isset($_smarty_tpl->tpl_vars['item']->value['active']))) {?> nav-link-active<?php }
if (($_smarty_tpl->tpl_vars['THEME_STYLE_STORE_LINK']->value == "yes") && ($_smarty_tpl->tpl_vars['item']->value['link'] == $_smarty_tpl->tpl_vars['THEME_STORE_URL']->value)) {?> store-link<?php }?>"
                                        href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
" <?php if ((isset($_smarty_tpl->tpl_vars['item']->value['target'])) && preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['item']->value['target'], $tmp) > 2) {?>
                                        target="<?php echo $_smarty_tpl->tpl_vars['item']->value['target'];?>
" <?php }?>><?php echo $_smarty_tpl->tpl_vars['item']->value['icon'];?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a>
                                </li>
                            <?php }?>
                        <?php }?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>
                <?php if ($_smarty_tpl->tpl_vars['THEME_NAVBAR_ALIGNMENT']->value == "left") {?>
                    <ul class="navbar-nav ml-auto">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['NAV_LINKS']->value, 'item', false, 'name');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                            <?php if (!(isset($_smarty_tpl->tpl_vars['item']->value['items']))) {?>
                                <?php if (($_smarty_tpl->tpl_vars['THEME_STYLE_STORE_LINK']->value == "yes") && ($_smarty_tpl->tpl_vars['item']->value['link'] == $_smarty_tpl->tpl_vars['THEME_STORE_URL']->value)) {?>
                                    <li class="nav-item">
                                        <a class="nav-link<?php if ((isset($_smarty_tpl->tpl_vars['item']->value['active']))) {?> nav-link-active<?php }
if (($_smarty_tpl->tpl_vars['THEME_STYLE_STORE_LINK']->value == "yes") && ($_smarty_tpl->tpl_vars['item']->value['link'] == $_smarty_tpl->tpl_vars['THEME_STORE_URL']->value)) {?> store-link<?php }?>"
                                            href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
" <?php if ((isset($_smarty_tpl->tpl_vars['item']->value['target'])) && preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['item']->value['target'], $tmp) > 2) {?>
                                            target="<?php echo $_smarty_tpl->tpl_vars['item']->value['target'];?>
" <?php }?>><?php echo $_smarty_tpl->tpl_vars['item']->value['icon'];?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a>
                                    </li>
                                <?php }?>
                            <?php }?>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>
                <?php }?>

            <?php } else { ?>




            <ul class="navbar-nav mr-auto">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['NAV_LINKS']->value, 'item', false, 'name');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                    <?php if ((isset($_smarty_tpl->tpl_vars['item']->value['items']))) {?>
                        <li class="nav-item dropdown more-dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                                aria-haspopup="true" aria-expanded="false"><?php echo $_smarty_tpl->tpl_vars['item']->value['icon'];?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a>
                            <div class="dropdown-menu more-dropdown-menu">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['items'], 'dropdown');
$_smarty_tpl->tpl_vars['dropdown']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['dropdown']->value) {
$_smarty_tpl->tpl_vars['dropdown']->do_else = false;
?>
                                    <a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['dropdown']->value['link'];?>
"
                                        <?php if ((isset($_smarty_tpl->tpl_vars['dropdown']->value['target'])) && preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['dropdown']->value['target'], $tmp) > 2) {?>
                                        target="<?php echo $_smarty_tpl->tpl_vars['dropdown']->value['target'];?>
" <?php }?>><?php echo $_smarty_tpl->tpl_vars['dropdown']->value['icon'];?>
 <?php echo $_smarty_tpl->tpl_vars['dropdown']->value['title'];?>
</a>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </div>
                        </li>
                    <?php } else { ?>
                            <li class="nav-item">
                                <a class="nav-link<?php if ((isset($_smarty_tpl->tpl_vars['item']->value['active']))) {?> nav-link-active<?php }
if (($_smarty_tpl->tpl_vars['THEME_STYLE_STORE_LINK']->value == "yes") && ($_smarty_tpl->tpl_vars['item']->value['link'] == $_smarty_tpl->tpl_vars['THEME_STORE_URL']->value)) {?> store-link<?php }?>"
                                    href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
" <?php if ((isset($_smarty_tpl->tpl_vars['item']->value['target'])) && preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['item']->value['target'], $tmp) > 2) {?>
                                    target="<?php echo $_smarty_tpl->tpl_vars['item']->value['target'];?>
" <?php }?>><?php echo $_smarty_tpl->tpl_vars['item']->value['icon'];?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a>
                            </li>
                    <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
                <ul class="navbar-nav ml-auto lr-navbar">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['USER_SECTION']->value, 'item', false, 'name');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                    <?php if ((isset($_smarty_tpl->tpl_vars['item']->value['items']))) {?>
                    <li class="nav-item dropdown <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
-dropdown">
                    <?php if (($_smarty_tpl->tpl_vars['name']->value == "account")) {?>
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user-circle"></i></a>
                    <?php } else { ?>
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php if ($_smarty_tpl->tpl_vars['name']->value == "pms" || $_smarty_tpl->tpl_vars['name']->value == "alerts") {?>
                                <span class="msg-<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
">
                                    <?php echo $_smarty_tpl->tpl_vars['item']->value['icon'];?>

                                    <div id="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" class="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"></div>
                                </span>
                            <?php } else {
echo $_smarty_tpl->tpl_vars['item']->value['icon'];
}?>
                        </a>
                    <?php }?>
                    <div class="dropdown-menu <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
-dropdown-menu">
                        <div class="dropdown-item d-header<?php if (($_smarty_tpl->tpl_vars['name']->value == "account")) {?> d-header-flex<?php }?>"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
 <?php if (($_smarty_tpl->tpl_vars['name']->value == "account")) {?><img src="<?php echo $_smarty_tpl->tpl_vars['LOGGED_IN_USER']->value['avatar'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['LOGGED_IN_USER']->value['username'];?>
" class="avatar-img ml-4 mb-1" style="max-height:25px;max-width:25px;" /><?php }?></div>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['items'], 'dropdown');
$_smarty_tpl->tpl_vars['dropdown']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['dropdown']->value) {
$_smarty_tpl->tpl_vars['dropdown']->do_else = false;
?>
                            <?php if ((isset($_smarty_tpl->tpl_vars['dropdown']->value['separator']))) {?>
                            <div class="ui divider"></div>
                            <?php } else { ?>
                                <?php if ((isset($_smarty_tpl->tpl_vars['dropdown']->value['action']))) {?>
                                    <a class="dropdown-item <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
_dropdown" href="#/" data-link="<?php echo $_smarty_tpl->tpl_vars['dropdown']->value['link'];?>
" data-action="<?php echo $_smarty_tpl->tpl_vars['dropdown']->value['action'];?>
">
                                        <?php echo $_smarty_tpl->tpl_vars['dropdown']->value['icon'];?>
 <?php echo $_smarty_tpl->tpl_vars['dropdown']->value['title'];?>

                                    </a>
                                <?php } else { ?>
                                    <a class="dropdown-item <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
_dropdown" href="<?php echo $_smarty_tpl->tpl_vars['dropdown']->value['link'];?>
" target="<?php echo $_smarty_tpl->tpl_vars['dropdown']->value['target'];?>
">
                                        <?php echo $_smarty_tpl->tpl_vars['dropdown']->value['icon'];?>
 <?php echo $_smarty_tpl->tpl_vars['dropdown']->value['title'];?>

                                    </a>
                                <?php }?>
                            <?php }?>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <?php if (!empty($_smarty_tpl->tpl_vars['item']->value['meta'])) {?>
                                <a class="dropdown-item item-small" href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['meta'];?>
</a>
                            <?php }?>
                    </div>
                    </li>
                    <?php } else { ?>
                        <li class="nav-item">
                            <a class="nav-link bottom-nav" href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
">
                            <?php if (($_smarty_tpl->tpl_vars['name']->value == "panel")) {?>
                                <?php echo $_smarty_tpl->tpl_vars['item']->value['icon'];?>

                            <?php } elseif (($_smarty_tpl->tpl_vars['name']->value == "register")) {?>
                                <i class="fa-solid fa-user-plus"></i> <?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>

                            <?php } else { ?>
                                <i class="fa-solid fa-arrow-right-to-bracket"></i> <?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>

                            <?php }?>
                            </a>
                        </li>
                    <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>






            <?php }?>








            </div>
        </div>
    </nav>
<?php }?>

<div <?php if ($_smarty_tpl->tpl_vars['THEME_BLUR_HEADER_BG']->value !== "yes") {?>class="color-overlay" <?php }?>>
    <div class="header" id="header-pjs"
        <?php if ((isset($_smarty_tpl->tpl_vars['THEME_C_OVERLAY']->value)) && preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['THEME_C_OVERLAY']->value, $tmp) > 2) {?>style="opacity: <?php echo $_smarty_tpl->tpl_vars['THEME_C_OVERLAY_OPACITY']->value;?>
; z-index: 1"
        <?php } else { ?>style="opacity: 1; z-index: 4" 
        <?php }?>></div>
</div>

<div class="logo-ds-flex">

    <?php if ((isset($_smarty_tpl->tpl_vars['THEME_DS_BOX']->value)) && preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['THEME_DS_BOX']->value, $tmp) > 2) {?>
        <div class="status-box-container">
            <div class="status-text" onclick="copyToClipboard('#ip')">
                <div class="text">
                    <div class="top-text"><span class="server-status"><?php echo $_smarty_tpl->tpl_vars['LOADING']->value;?>
</span></div>
                    <div class="bottom-text">
                        <div class="reel-1"><span id="ip"><?php echo $_smarty_tpl->tpl_vars['THEME_MC_SERVER']->value;?>
</span></div>
                        <div class="reel-1"><?php echo $_smarty_tpl->tpl_vars['MC_SERVER_CLICK']->value;?>
</div>
                    </div>
                </div>
                <div class="icon">
                    <div class="icon-wrapper">
                        <svg class="creeper" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zM188.3 147.1c-7.6 4.2-12.3 12.3-12.3 20.9V344c0 8.7 4.7 16.7 12.3 20.9s16.8 4.1 24.3-.5l144-88c7.1-4.4 11.5-12.1 11.5-20.5s-4.4-16.1-11.5-20.5l-144-88c-7.4-4.5-16.7-4.7-24.3-.5z"/></svg>
                    </div>
                </div>
            </div>
        </div>
    <?php }?>

    <div class="logo-container">
        <a id="logo-link" href="/">
            <?php if ((isset($_smarty_tpl->tpl_vars['THEME_LOGO']->value))) {?>
            <picture>
                <source srcset="<?php echo $_smarty_tpl->tpl_vars['THEME_LOGO_WEBP']->value;?>
" type="image/webp">
                <source srcset="<?php echo $_smarty_tpl->tpl_vars['THEME_LOGO']->value;?>
">
                <img class="logo<?php if ((isset($_smarty_tpl->tpl_vars['THEME_AL']->value)) && preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['THEME_AL']->value, $tmp) > 2) {?> animated-logo<?php }?>" alt="logo"
                    src='<?php echo $_smarty_tpl->tpl_vars['THEME_LOGO']->value;?>
' />
            </picture>
            <?php }?>
        </a>
    </div>

    <?php if ((isset($_smarty_tpl->tpl_vars['THEME_DS_BOX']->value)) && preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['THEME_DS_BOX']->value, $tmp) > 2) {?>
        <div class="discord-box-container">
            <a href="http://<?php echo $_smarty_tpl->tpl_vars['THEME_DISCORD_SERVER']->value;?>
" target="_blank">
                <div class="discord-text">
                    <div class="icon">
                        <div class="icon-wrapper">
                            <svg class="discord" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 245 240">
                                <path class="st0"
                                    d="M104.4 103.9c-5.7 0-10.2 5-10.2 11.1s4.6 11.1 10.2 11.1c5.7 0 10.2-5 10.2-11.1.1-6.1-4.5-11.1-10.2-11.1zM140.9 103.9c-5.7 0-10.2 5-10.2 11.1s4.6 11.1 10.2 11.1c5.7 0 10.2-5 10.2-11.1s-4.5-11.1-10.2-11.1z">
                                </path>
                                <path class="st0"
                                    d="M189.5 20h-134C44.2 20 35 29.2 35 40.6v135.2c0 11.4 9.2 20.6 20.5 20.6h113.4l-5.3-18.5 12.8 11.9 12.1 11.2 21.5 19V40.6c0-11.4-9.2-20.6-20.5-20.6zm-38.6 130.6s-3.6-4.3-6.6-8.1c13.1-3.7 18.1-11.9 18.1-11.9-4.1 2.7-8 4.6-11.5 5.9-5 2.1-9.8 3.5-14.5 4.3-9.6 1.8-18.4 1.3-25.9-.1-5.7-1.1-10.6-2.7-14.7-4.3-2.3-.9-4.8-2-7.3-3.4-.3-.2-.6-.3-.9-.5-.2-.1-.3-.2-.4-.3-1.8-1-2.8-1.7-2.8-1.7s4.8 8 17.5 11.8c-3 3.8-6.7 8.3-6.7 8.3-22.1-.7-30.5-15.2-30.5-15.2 0-32.2 14.4-58.3 14.4-58.3 14.4-10.8 28.1-10.5 28.1-10.5l1 1.2c-18 5.2-26.3 13.1-26.3 13.1s2.2-1.2 5.9-2.9c10.7-4.7 19.2-6 22.7-6.3.6-.1 1.1-.2 1.7-.2 6.1-.8 13-1 20.2-.2 9.5 1.1 19.7 3.9 30.1 9.6 0 0-7.9-7.5-24.9-12.7l1.4-1.6s13.7-.3 28.1 10.5c0 0 14.4 26.1 14.4 58.3 0 0-8.5 14.5-30.6 15.2z">
                                </path>
                            </svg>
                        </div>
                    </div>
                    <div class="text">
                        <div class="top-text"><span class="discord-status"><?php echo $_smarty_tpl->tpl_vars['LOADING']->value;?>
</span></div>
                        <div class="bottom-text">
                            <div class="reel-1"><?php echo $_smarty_tpl->tpl_vars['THEME_DISCORD_SERVER']->value;?>
</div>
                            <div class="reel-1"><?php echo $_smarty_tpl->tpl_vars['DISCORD_SERVER_CLICK']->value;?>
</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    <?php }?>

</div>

<div class="coldfire-navbar-menu">
    <div class="nav-header">
        <div class="nav-header-text theme-text"><?php echo (defined('SITE_NAME') ? constant('SITE_NAME') : null);?>
</div>
        <div id="nav-header-close" class="nav-header-close btn btn-secondary ml-4"><i class="fa-solid fa-xmark"></i></div>
    </div>
    <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['NAV_LINKS']->value, 'item', false, 'name');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
            <?php if ((isset($_smarty_tpl->tpl_vars['item']->value['items']))) {?>
                <li class="nav-item dropdown more-dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                        aria-expanded="false"><?php echo $_smarty_tpl->tpl_vars['item']->value['icon'];?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a>
                    <div class="dropdown-menu more-dropdown-menu">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['items'], 'dropdown');
$_smarty_tpl->tpl_vars['dropdown']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['dropdown']->value) {
$_smarty_tpl->tpl_vars['dropdown']->do_else = false;
?>
                            <a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['dropdown']->value['link'];?>
"
                                <?php if ((isset($_smarty_tpl->tpl_vars['dropdown']->value['target'])) && preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['dropdown']->value['target'], $tmp) > 2) {?> target="<?php echo $_smarty_tpl->tpl_vars['dropdown']->value['target'];?>
"
                                <?php }?>><?php echo $_smarty_tpl->tpl_vars['dropdown']->value['icon'];?>
 <?php echo $_smarty_tpl->tpl_vars['dropdown']->value['title'];?>
</a>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                </li>
            <?php } else { ?>
                <li class="nav-item">
                    <a class="nav-link<?php if ((isset($_smarty_tpl->tpl_vars['item']->value['active']))) {?> nav-link-active<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
"
                        <?php if ((isset($_smarty_tpl->tpl_vars['item']->value['target'])) && preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['item']->value['target'], $tmp) > 2) {?> target="<?php echo $_smarty_tpl->tpl_vars['item']->value['target'];?>
" <?php }?>><?php echo $_smarty_tpl->tpl_vars['item']->value['icon'];?>

                        <?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a>
                </li>
            <?php }?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        <div class="divider"></div>

        <?php if ((isset($_smarty_tpl->tpl_vars['THEME_NAVBAR']->value)) && ($_smarty_tpl->tpl_vars['THEME_NAVBAR']->value == 'bottom' || $_smarty_tpl->tpl_vars['THEME_NAVBAR']->value == 'top')) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['USER_SECTION']->value, 'item', false, 'name');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                <?php if ((isset($_smarty_tpl->tpl_vars['item']->value['items']))) {?>
                <li class="nav-item dropdown <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
-dropdown">
                <?php if (($_smarty_tpl->tpl_vars['name']->value == "account")) {?>
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user-circle"></i> <?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a>
                <?php } else { ?>
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?php if ($_smarty_tpl->tpl_vars['name']->value == "pms" || $_smarty_tpl->tpl_vars['name']->value == "alerts") {?>
                            <span class="msg-<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
">
                                <?php echo $_smarty_tpl->tpl_vars['item']->value['icon'];?>

                                <div id="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" class="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"></div>
                            </span>
                        <?php } else {
echo $_smarty_tpl->tpl_vars['item']->value['icon'];
}?> <?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>

                    </a>
                <?php }?>
                <div class="dropdown-menu <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
-dropdown-menu">
                    <div class="dropdown-item d-header<?php if (($_smarty_tpl->tpl_vars['name']->value == "account")) {?> d-header-flex<?php }?>"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
 <?php if (($_smarty_tpl->tpl_vars['name']->value == "account")) {?><img src="<?php echo $_smarty_tpl->tpl_vars['LOGGED_IN_USER']->value['avatar'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['LOGGED_IN_USER']->value['username'];?>
" class="avatar-img ml-4 mb-1" style="max-height:25px;max-width:25px;" /><?php }?></div>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['items'], 'dropdown');
$_smarty_tpl->tpl_vars['dropdown']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['dropdown']->value) {
$_smarty_tpl->tpl_vars['dropdown']->do_else = false;
?>
                        <?php if ((isset($_smarty_tpl->tpl_vars['dropdown']->value['separator']))) {?>
                        <div class="ui divider"></div>
                        <?php } else { ?>
                            <?php if ((isset($_smarty_tpl->tpl_vars['dropdown']->value['action']))) {?>
                                <a class="dropdown-item <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
_dropdown" href="#/" data-link="<?php echo $_smarty_tpl->tpl_vars['dropdown']->value['link'];?>
" data-action="<?php echo $_smarty_tpl->tpl_vars['dropdown']->value['action'];?>
">
                                    <?php echo $_smarty_tpl->tpl_vars['dropdown']->value['icon'];?>
 <?php echo $_smarty_tpl->tpl_vars['dropdown']->value['title'];?>

                                </a>
                            <?php } else { ?>
                                <a class="dropdown-item <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
_dropdown" href="<?php echo $_smarty_tpl->tpl_vars['dropdown']->value['link'];?>
" target="<?php echo $_smarty_tpl->tpl_vars['dropdown']->value['target'];?>
">
                                    <?php echo $_smarty_tpl->tpl_vars['dropdown']->value['icon'];?>
 <?php echo $_smarty_tpl->tpl_vars['dropdown']->value['title'];?>

                                </a>
                            <?php }?>
                        <?php }?>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <?php if (!empty($_smarty_tpl->tpl_vars['item']->value['meta'])) {?>
                            <a class="dropdown-item item-small" href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['meta'];?>
</a>
                        <?php }?>
                </div>
                </li>
                <?php } else { ?>
                    <li class="nav-item">
                        <a class="nav-link bottom-nav" href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
">
                        <?php if (($_smarty_tpl->tpl_vars['name']->value == "panel")) {?>
                            <span data-toggle="tooltip" data-placement="right" data-offset="0 10px" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['icon'];?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</span>
                        <?php } elseif (($_smarty_tpl->tpl_vars['name']->value == "register")) {?>
                            <span data-toggle="tooltip" data-placement="right" data-offset="0 10px" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
"><i class="fa-solid fa-user-plus"></i></span> <?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>

                        <?php } else { ?>
                            <span data-toggle="tooltip" data-placement="right" data-offset="0 10px" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
"><i class="fa-solid fa-arrow-right-to-bracket"></i></span> <?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>

                        <?php }?>
                        </a>
                    </li>
                <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php }?>

        </ul>
    </div>

    <div class="overlay"></div>
    <?php if (((isset($_smarty_tpl->tpl_vars['LOGGED_IN_USER']->value))) || (preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['THEME_WB_T']->value, $tmp) < 2 && !(isset($_smarty_tpl->tpl_vars['LOGGED_IN_USER']->value)))) {?>

    <?php if ((isset($_smarty_tpl->tpl_vars['THEME_LR_SIDEBAR']->value)) && ($_smarty_tpl->tpl_vars['THEME_LR_SIDEBAR']->value == 'yes')) {?>
     <div class="user-box">
            <div class="header-btn-row">
                <nav class="navbar">
                    <ul class="navbar-nav">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['USER_SECTION']->value, 'item', false, 'name');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                                <?php if ((isset($_smarty_tpl->tpl_vars['item']->value['items']))) {?>
                                <li class="nav-item dropright <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
-dropdown">
                                <?php if (($_smarty_tpl->tpl_vars['name']->value == "account")) {?>
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user-circle"></i></a>
                                <?php } else { ?>
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <?php if ($_smarty_tpl->tpl_vars['name']->value == "pms" || $_smarty_tpl->tpl_vars['name']->value == "alerts") {?>
                                            <span class="msg-<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
">
                                                <?php echo $_smarty_tpl->tpl_vars['item']->value['icon'];?>

                                                <div id="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" class="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"></div>
                                            </span>
                                        <?php } else {
echo $_smarty_tpl->tpl_vars['item']->value['icon'];
}?>
                                    </a>
                                <?php }?>
                                <div class="dropdown-menu <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
-dropdown-menu">
                                    <div class="dropdown-item d-header<?php if (($_smarty_tpl->tpl_vars['name']->value == "account")) {?> d-header-flex<?php }?>"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
 <?php if (($_smarty_tpl->tpl_vars['name']->value == "account")) {?><img src="<?php echo $_smarty_tpl->tpl_vars['LOGGED_IN_USER']->value['avatar'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['LOGGED_IN_USER']->value['username'];?>
" class="avatar-img ml-4 mb-1" style="max-height:25px;max-width:25px;" /><?php }?></div>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['items'], 'dropdown');
$_smarty_tpl->tpl_vars['dropdown']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['dropdown']->value) {
$_smarty_tpl->tpl_vars['dropdown']->do_else = false;
?>
                                        <?php if ((isset($_smarty_tpl->tpl_vars['dropdown']->value['separator']))) {?>
                                        <div class="ui divider"></div>
                                        <?php } else { ?>
                                            <?php if ((isset($_smarty_tpl->tpl_vars['dropdown']->value['action']))) {?>
                                                <a class="dropdown-item <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
_dropdown" href="#/" data-link="<?php echo $_smarty_tpl->tpl_vars['dropdown']->value['link'];?>
" data-action="<?php echo $_smarty_tpl->tpl_vars['dropdown']->value['action'];?>
">
                                                    <?php echo $_smarty_tpl->tpl_vars['dropdown']->value['icon'];?>
 <?php echo $_smarty_tpl->tpl_vars['dropdown']->value['title'];?>

                                                </a>
                                            <?php } else { ?>
                                                <a class="dropdown-item <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
_dropdown" href="<?php echo $_smarty_tpl->tpl_vars['dropdown']->value['link'];?>
" target="<?php echo $_smarty_tpl->tpl_vars['dropdown']->value['target'];?>
">
                                                    <?php echo $_smarty_tpl->tpl_vars['dropdown']->value['icon'];?>
 <?php echo $_smarty_tpl->tpl_vars['dropdown']->value['title'];?>

                                                </a>
                                            <?php }?>
                                        <?php }?>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        <?php if (!empty($_smarty_tpl->tpl_vars['item']->value['meta'])) {?>
                                            <a class="dropdown-item item-small" href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['meta'];?>
</a>
                                        <?php }?>
                                </div>
                                </li>
                                <?php } else { ?>
                                    <li class="nav-item">
                                        <a class="nav-link bottom-nav" href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
">
                                        <?php if (($_smarty_tpl->tpl_vars['name']->value == "panel")) {?>
                                            <span data-toggle="tooltip" data-placement="right" data-offset="0 10px" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['icon'];?>
</span>
                                        <?php } elseif (($_smarty_tpl->tpl_vars['name']->value == "register")) {?>
                                            <span data-toggle="tooltip" data-placement="right" data-offset="0 10px" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
"><i class="fa-solid fa-user-plus"></i></span>
                                        <?php } else { ?>
                                            <span data-toggle="tooltip" data-placement="right" data-offset="0 10px" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
"><i class="fa-solid fa-arrow-right-to-bracket"></i></span>
                                        <?php }?>
                                        </a>
                                    </li>
                                <?php }?>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </ul>
                    </nav>
                </div>
            </div>
        <?php }?>
        <?php }?>


        <div class="container top-container">

            <?php if ((isset($_smarty_tpl->tpl_vars['THEME_NAVBAR']->value)) && $_smarty_tpl->tpl_vars['THEME_NAVBAR']->value == 'bottom') {?>
                <nav class="navbar navbar-expand-lg navbar-theme navbar-double navbar-bottom">
                    <button class="navbar-toggler nav-link" type="button"><i class="fa-solid fa-bars"></i> <?php echo $_smarty_tpl->tpl_vars['MENU']->value;?>
</button>

        <?php if ((isset($_smarty_tpl->tpl_vars['THEME_DS_BOX']->value)) && preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['THEME_DS_BOX']->value, $tmp) > 2) {?>
        <div class="status-icon" onclick="copyToClipboard('#ip')">
                    <svg class="creeper" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M4,2H20A2,2 0 0,1 22,4V20A2,2 0 0,1 20,22H4A2,2 0 0,1 2,20V4A2,2 0 0,1 4,2M6,6V10H10V12H8V18H10V16H14V18H16V12H14V10H18V6H14V10H10V6H6Z">
                        </path>
                    </svg>
        </div>
        
        <a href="http://<?php echo $_smarty_tpl->tpl_vars['THEME_DISCORD_SERVER']->value;?>
" target="_blank">
            <div class="discord-icon">
                        <svg class="discord" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 245 240">
                            <path class="st0"
                                d="M104.4 103.9c-5.7 0-10.2 5-10.2 11.1s4.6 11.1 10.2 11.1c5.7 0 10.2-5 10.2-11.1.1-6.1-4.5-11.1-10.2-11.1zM140.9 103.9c-5.7 0-10.2 5-10.2 11.1s4.6 11.1 10.2 11.1c5.7 0 10.2-5 10.2-11.1s-4.5-11.1-10.2-11.1z">
                            </path>
                            <path class="st0"
                                d="M189.5 20h-134C44.2 20 35 29.2 35 40.6v135.2c0 11.4 9.2 20.6 20.5 20.6h113.4l-5.3-18.5 12.8 11.9 12.1 11.2 21.5 19V40.6c0-11.4-9.2-20.6-20.5-20.6zm-38.6 130.6s-3.6-4.3-6.6-8.1c13.1-3.7 18.1-11.9 18.1-11.9-4.1 2.7-8 4.6-11.5 5.9-5 2.1-9.8 3.5-14.5 4.3-9.6 1.8-18.4 1.3-25.9-.1-5.7-1.1-10.6-2.7-14.7-4.3-2.3-.9-4.8-2-7.3-3.4-.3-.2-.6-.3-.9-.5-.2-.1-.3-.2-.4-.3-1.8-1-2.8-1.7-2.8-1.7s4.8 8 17.5 11.8c-3 3.8-6.7 8.3-6.7 8.3-22.1-.7-30.5-15.2-30.5-15.2 0-32.2 14.4-58.3 14.4-58.3 14.4-10.8 28.1-10.5 28.1-10.5l1 1.2c-18 5.2-26.3 13.1-26.3 13.1s2.2-1.2 5.9-2.9c10.7-4.7 19.2-6 22.7-6.3.6-.1 1.1-.2 1.7-.2 6.1-.8 13-1 20.2-.2 9.5 1.1 19.7 3.9 30.1 9.6 0 0-7.9-7.5-24.9-12.7l1.4-1.6s13.7-.3 28.1 10.5c0 0 14.4 26.1 14.4 58.3 0 0-8.5 14.5-30.6 15.2z">
                            </path>
                        </svg>
            </div>
        </a>
        <?php }?>

                    <div class="collapse navbar-collapse" id="navbar">
                        <ul class="navbar-nav mr-auto">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['NAV_LINKS']->value, 'item', false, 'name');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                                <?php if ((isset($_smarty_tpl->tpl_vars['item']->value['items']))) {?>
                                    <li class="nav-item dropdown more-dropdown">
                                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                                            aria-haspopup="true" aria-expanded="false"><?php echo $_smarty_tpl->tpl_vars['item']->value['icon'];?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a>
                                        <div class="dropdown-menu more-dropdown-menu">
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['items'], 'dropdown');
$_smarty_tpl->tpl_vars['dropdown']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['dropdown']->value) {
$_smarty_tpl->tpl_vars['dropdown']->do_else = false;
?>
                                                <a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['dropdown']->value['link'];?>
"
                                                    <?php if ((isset($_smarty_tpl->tpl_vars['dropdown']->value['target'])) && preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['dropdown']->value['target'], $tmp) > 2) {?>
                                                    target="<?php echo $_smarty_tpl->tpl_vars['dropdown']->value['target'];?>
" <?php }?>><?php echo $_smarty_tpl->tpl_vars['dropdown']->value['icon'];?>
 <?php echo $_smarty_tpl->tpl_vars['dropdown']->value['title'];?>
</a>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </div>
                                    </li>
                                <?php } else { ?>
                                    <?php if (((isset($_smarty_tpl->tpl_vars['THEME_LR_SIDEBAR']->value)) && ($_smarty_tpl->tpl_vars['THEME_LR_SIDEBAR']->value == 'yes')) || !$_smarty_tpl->tpl_vars['LOGGED_IN_USER']->value) {?>
                                    <?php if ($_smarty_tpl->tpl_vars['THEME_STYLE_STORE_LINK']->value == "yes") {?>
                                        <?php if (($_smarty_tpl->tpl_vars['item']->value['link'] !== $_smarty_tpl->tpl_vars['THEME_STORE_URL']->value)) {?>
                                            <li class="nav-item">
                                                <a class="nav-link <?php if ((isset($_smarty_tpl->tpl_vars['item']->value['active']))) {?>nav-link-active<?php }
if (($_smarty_tpl->tpl_vars['THEME_STYLE_STORE_LINK']->value == "yes") && ($_smarty_tpl->tpl_vars['item']->value['link'] == $_smarty_tpl->tpl_vars['THEME_STORE_URL']->value)) {?> store-link<?php }?>"
                                                    href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
" <?php if ((isset($_smarty_tpl->tpl_vars['item']->value['target'])) && preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['item']->value['target'], $tmp) > 2) {?>
                                                    target="<?php echo $_smarty_tpl->tpl_vars['item']->value['target'];?>
" <?php }?>><?php echo $_smarty_tpl->tpl_vars['item']->value['icon'];?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a>
                                            </li>
                                        <?php }?>

                                    <?php } else { ?>
                                        <li class="nav-item">
                                            <a class="nav-link <?php if ((isset($_smarty_tpl->tpl_vars['item']->value['active']))) {?>nav-link-active<?php }
if (($_smarty_tpl->tpl_vars['THEME_STYLE_STORE_LINK']->value == "yes") && ($_smarty_tpl->tpl_vars['item']->value['link'] == $_smarty_tpl->tpl_vars['THEME_STORE_URL']->value)) {?> store-link<?php }?>"
                                                href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
" <?php if ((isset($_smarty_tpl->tpl_vars['item']->value['target'])) && preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['item']->value['target'], $tmp) > 2) {?>
                                                target="<?php echo $_smarty_tpl->tpl_vars['item']->value['target'];?>
" <?php }?>><?php echo $_smarty_tpl->tpl_vars['item']->value['icon'];?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a>
                                        </li>
                                    <?php }?>
                                    <?php } else { ?>
                                        <li class="nav-item">
                                    <a class="nav-link <?php if ((isset($_smarty_tpl->tpl_vars['item']->value['active']))) {?>nav-link-active<?php }
if (($_smarty_tpl->tpl_vars['THEME_STYLE_STORE_LINK']->value == "yes") && ($_smarty_tpl->tpl_vars['item']->value['link'] == $_smarty_tpl->tpl_vars['THEME_STORE_URL']->value)) {?> store-link<?php }?>"
                                        href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
" <?php if ((isset($_smarty_tpl->tpl_vars['item']->value['target'])) && preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['item']->value['target'], $tmp) > 2) {?>
                                        target="<?php echo $_smarty_tpl->tpl_vars['item']->value['target'];?>
" <?php }?>><?php echo $_smarty_tpl->tpl_vars['item']->value['icon'];?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a>
                                </li>
                                    <?php }?>
                                <?php }?>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </ul>
                        <ul class="navbar-nav ml-auto<?php if ((isset($_smarty_tpl->tpl_vars['THEME_LR_SIDEBAR']->value)) && ($_smarty_tpl->tpl_vars['THEME_LR_SIDEBAR']->value == 'no')) {?> lr-navbar<?php }?>">
                        <?php if (((isset($_smarty_tpl->tpl_vars['THEME_LR_SIDEBAR']->value)) && ($_smarty_tpl->tpl_vars['THEME_LR_SIDEBAR']->value == 'yes')) || !$_smarty_tpl->tpl_vars['LOGGED_IN_USER']->value) {?>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['NAV_LINKS']->value, 'item', false, 'name');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                                <?php if (!(isset($_smarty_tpl->tpl_vars['item']->value['items']))) {?>
                                    <?php if (($_smarty_tpl->tpl_vars['THEME_STYLE_STORE_LINK']->value == "yes") && ($_smarty_tpl->tpl_vars['item']->value['link'] == $_smarty_tpl->tpl_vars['THEME_STORE_URL']->value)) {?>
                                        <li class="nav-item">
                                            <a class="nav-link <?php if ((isset($_smarty_tpl->tpl_vars['item']->value['active']))) {?>nav-link-active<?php }
if (($_smarty_tpl->tpl_vars['THEME_STYLE_STORE_LINK']->value == "yes") && ($_smarty_tpl->tpl_vars['item']->value['link'] == $_smarty_tpl->tpl_vars['THEME_STORE_URL']->value)) {?> store-link<?php }?>"
                                                href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
" <?php if ((isset($_smarty_tpl->tpl_vars['item']->value['target'])) && preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['item']->value['target'], $tmp) > 2) {?>
                                                target="<?php echo $_smarty_tpl->tpl_vars['item']->value['target'];?>
" <?php }?>><?php echo $_smarty_tpl->tpl_vars['item']->value['icon'];?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a>
                                        </li>
                                    <?php }?>
                                <?php }?>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <?php } else { ?>

                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['USER_SECTION']->value, 'item', false, 'name');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                                <?php if ((isset($_smarty_tpl->tpl_vars['item']->value['items']))) {?>
                                <li class="nav-item dropdown <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
-dropdown">
                                <?php if (($_smarty_tpl->tpl_vars['name']->value == "account")) {?>
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user-circle"></i></a>
                                <?php } else { ?>
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <?php if ($_smarty_tpl->tpl_vars['name']->value == "pms" || $_smarty_tpl->tpl_vars['name']->value == "alerts") {?>
                                            <span class="msg-<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
">
                                                <?php echo $_smarty_tpl->tpl_vars['item']->value['icon'];?>

                                                <div id="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" class="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"></div>
                                            </span>
                                        <?php } else {
echo $_smarty_tpl->tpl_vars['item']->value['icon'];
}?>
                                    </a>
                                <?php }?>
                                <div class="dropdown-menu <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
-dropdown-menu">
                                    <div class="dropdown-item d-header<?php if (($_smarty_tpl->tpl_vars['name']->value == "account")) {?> d-header-flex<?php }?>"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
 <?php if (($_smarty_tpl->tpl_vars['name']->value == "account")) {?><img src="<?php echo $_smarty_tpl->tpl_vars['LOGGED_IN_USER']->value['avatar'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['LOGGED_IN_USER']->value['username'];?>
" class="avatar-img ml-4 mb-1" style="max-height:25px;max-width:25px;" /><?php }?></div>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['items'], 'dropdown');
$_smarty_tpl->tpl_vars['dropdown']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['dropdown']->value) {
$_smarty_tpl->tpl_vars['dropdown']->do_else = false;
?>
                                        <?php if ((isset($_smarty_tpl->tpl_vars['dropdown']->value['separator']))) {?>
                                        <div class="ui divider"></div>
                                        <?php } else { ?>
                                            <?php if ((isset($_smarty_tpl->tpl_vars['dropdown']->value['action']))) {?>
                                                <a class="dropdown-item <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
_dropdown" href="#/" data-link="<?php echo $_smarty_tpl->tpl_vars['dropdown']->value['link'];?>
" data-action="<?php echo $_smarty_tpl->tpl_vars['dropdown']->value['action'];?>
">
                                                    <?php echo $_smarty_tpl->tpl_vars['dropdown']->value['icon'];?>
 <?php echo $_smarty_tpl->tpl_vars['dropdown']->value['title'];?>

                                                </a>
                                            <?php } else { ?>
                                                <a class="dropdown-item <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
_dropdown" href="<?php echo $_smarty_tpl->tpl_vars['dropdown']->value['link'];?>
" target="<?php echo $_smarty_tpl->tpl_vars['dropdown']->value['target'];?>
">
                                                    <?php echo $_smarty_tpl->tpl_vars['dropdown']->value['icon'];?>
 <?php echo $_smarty_tpl->tpl_vars['dropdown']->value['title'];?>

                                                </a>
                                            <?php }?>
                                        <?php }?>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        <?php if (!empty($_smarty_tpl->tpl_vars['item']->value['meta'])) {?>
                                            <a class="dropdown-item item-small" href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['meta'];?>
</a>
                                        <?php }?>
                                </div>
                                </li>
                                <?php } else { ?>
                                    <li class="nav-item">
                                        <a class="nav-link bottom-nav" href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
">
                                        <?php if (($_smarty_tpl->tpl_vars['name']->value == "panel")) {?>
                                            <?php echo $_smarty_tpl->tpl_vars['item']->value['icon'];?>

                                        <?php } elseif (($_smarty_tpl->tpl_vars['name']->value == "register")) {?>
                                            <i class="fa-solid fa-user-plus"></i> <?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>

                                        <?php } else { ?>
                                            <i class="fa-solid fa-arrow-right-to-bracket"></i> <?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>

                                        <?php }?>
                                        </a>
                                    </li>
                                <?php }?>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                        <?php }?>
                            
                        </ul>
                    </div>
                </nav>
            <?php }?>

            <?php if ((isset($_smarty_tpl->tpl_vars['MUST_VALIDATE_ACCOUNT']->value))) {?>
                <div class="alert alert-danger">
                    <?php echo $_smarty_tpl->tpl_vars['MUST_VALIDATE_ACCOUNT']->value;?>

                </div>
            <?php }?>
            <?php if (!$_smarty_tpl->tpl_vars['LOGGED_IN_USER']->value) {?>
                <?php if (preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['THEME_WB_T']->value, $tmp) > 0) {?>
                    <?php if ((isset($_smarty_tpl->tpl_vars['THEME_STORE_BOX_ENABLE']->value)) && preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['THEME_STORE_BOX_ENABLE']->value, $tmp) > 2) {?>
                        <div class="row">
                            <div class="col-lg-9">

                            <div class="card mb-2 welcome-card">
                            <div class="card-body">
                                <div class="welcome-card-flex">
                                    <div class="welcome-av-col">
                                        <picture>
                                            <source srcset="none" media="(max-width: 767px)">
                                            <source
                                                srcset="https://s.namemc.com/3d/skin/body.png?id=<?php echo $_smarty_tpl->tpl_vars['THEME_WB_SKIN_ID']->value;?>
&model=classic&theta=32&phi=19&time=90&width=150&height=200"
                                                media="(min-width: 768px)">
                                            <img src="https://s.namemc.com/3d/skin/body.png?id=<?php echo $_smarty_tpl->tpl_vars['THEME_WB_SKIN_ID']->value;?>
&model=classic&theta=32&phi=19&time=90&width=150&height=200"
                                                alt="Avatar" class="welcome-avatar" height="160px" width="auto" />
                                        </picture>
                                    </div>
                                    <div class="welcome-text-col">
                                        <span class="welcome-title"><?php echo $_smarty_tpl->tpl_vars['THEME_WB_T']->value;?>
</span><br />
                                        <span class="welcome-text"><?php echo $_smarty_tpl->tpl_vars['THEME_WB_D']->value;?>
</span><br />
                                    </div>
                                    <div class="welcome-lr-col">
    
                                        
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['USER_SECTION']->value, 'item', false, 'name');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                                            <?php if (!(isset($_smarty_tpl->tpl_vars['item']->value['items']))) {?>
                                                <?php if (($_smarty_tpl->tpl_vars['name']->value == "register")) {?>
                                                    <a class="btn btn-theme" href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
" target="<?php echo $_smarty_tpl->tpl_vars['item']->value['target'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a>
                                                <?php } else { ?>
                                                    <a class="btn btn-theme" href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
" target="<?php echo $_smarty_tpl->tpl_vars['item']->value['target'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a>
                                                <?php }?>
                                            <?php }?>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    
                                    </div>
                                </div>
                            </div>
                        </div>

                            </div>
                            <div class="col-lg-3">
                                                                <?php $_smarty_tpl->_subTemplateRender('file:template_settings/widgets/store_widget.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                            </div>
                        </div>
                    <?php } else { ?>
                    <div class="card mb-3 mt-3 welcome-card">
                        <div class="card-body">
                            <div class="welcome-card-flex">
                                <div class="welcome-av-col">
                                    <picture>
                                        <source srcset="none" media="(max-width: 767px)">
                                        <source
                                            srcset="https://s.namemc.com/3d/skin/body.png?id=<?php echo $_smarty_tpl->tpl_vars['THEME_WB_SKIN_ID']->value;?>
&model=classic&theta=32&phi=19&time=90&width=150&height=200"
                                            media="(min-width: 768px)">
                                        <img src="https://s.namemc.com/3d/skin/body.png?id=<?php echo $_smarty_tpl->tpl_vars['THEME_WB_SKIN_ID']->value;?>
&model=classic&theta=32&phi=19&time=90&width=150&height=200"
                                            alt="Avatar" class="welcome-avatar" />
                                    </picture>
                                </div>
                                <div class="welcome-text-col">
                                    <span class="welcome-title"><?php echo $_smarty_tpl->tpl_vars['THEME_WB_T']->value;?>
</span><br />
                                    <span class="welcome-text"><?php echo $_smarty_tpl->tpl_vars['THEME_WB_D']->value;?>
</span><br />
                                </div>
                                <div class="welcome-lr-col">

                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['USER_SECTION']->value, 'item', false, 'name');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                                    <?php if (!(isset($_smarty_tpl->tpl_vars['item']->value['items']))) {?>
                                        <?php if (($_smarty_tpl->tpl_vars['name']->value == "register")) {?>
                                            <a class="btn btn-theme" href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
" target="<?php echo $_smarty_tpl->tpl_vars['item']->value['target'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a>
                                        <?php } else { ?>
                                            <a class="btn btn-theme" href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
" target="<?php echo $_smarty_tpl->tpl_vars['item']->value['target'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a>
                                        <?php }?>
                                    <?php }?>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }?>
                <?php }?>
            <?php }?>

            <?php if (!empty($_smarty_tpl->tpl_vars['ANNOUNCEMENTS']->value)) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ANNOUNCEMENTS']->value, 'ANNOUNCEMENT');
$_smarty_tpl->tpl_vars['ANNOUNCEMENT']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ANNOUNCEMENT']->value) {
$_smarty_tpl->tpl_vars['ANNOUNCEMENT']->do_else = false;
?>
                    <div class="alert announcement-alert mt-3<?php if ($_smarty_tpl->tpl_vars['ANNOUNCEMENT']->value->closable) {?> alert-dismissible fade show<?php }?>"
                        id="announcement-<?php echo $_smarty_tpl->tpl_vars['ANNOUNCEMENT']->value->id;?>
"
                        style="background-color:<?php echo $_smarty_tpl->tpl_vars['ANNOUNCEMENT']->value->background_colour;?>
 !important; color:<?php echo $_smarty_tpl->tpl_vars['ANNOUNCEMENT']->value->text_colour;?>
 !important"
                        role="alert">
                        <?php if ((isset($_smarty_tpl->tpl_vars['ANNOUNCEMENT']->value->icon))) {?>
                            <i class="<?php echo $_smarty_tpl->tpl_vars['ANNOUNCEMENT']->value->icon;?>
 float-left mr-3" style="font-size: 2rem; margin-top: 0.5rem"></i>
                        <?php }?>
                        <b style="font-size: 17px"><?php echo $_smarty_tpl->tpl_vars['ANNOUNCEMENT']->value->header;?>
</b><br /><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['ANNOUNCEMENT']->value->message, ENT_QUOTES, 'UTF-8', true);?>

                        <?php if ($_smarty_tpl->tpl_vars['ANNOUNCEMENT']->value->closable) {?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        <?php }?>
                    </div>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>

            <div class="alert alert-danger" id="ie-message">
                <?php echo $_smarty_tpl->tpl_vars['INTERNET_EXPLORER_HEADER']->value;?>
: <?php echo $_smarty_tpl->tpl_vars['INTERNET_EXPLORER_INFO']->value;?>

            </div>

            <div class="chatbox mb-3" id="chatbox-top"></div>
        </div>

        <?php if (!(isset($_smarty_tpl->tpl_vars['LOGGED_IN_USER']->value))) {?>

            <div id="loginModal" class="modal fade login-modal-lg" tabindex="-1" role="dialog" aria-labelledby="loginModal"
                aria-hidden="true">
                <div class="modal-dialog <?php if ($_smarty_tpl->tpl_vars['THEME_LR_MODAL_IMAGE']->value == "yes") {?>modal-lg<?php } else { ?>modal-md<?php }?>">
                    <div class="modal-content">
                        <div class="login-menu"></div>
                    </div>
                </div>
            </div>


            <div id="registerModal" class="modal fade register-modal-lg" tabindex="-1" role="dialog" aria-labelledby="registerModal"
                aria-hidden="true">
                <div class="modal-dialog <?php if ($_smarty_tpl->tpl_vars['THEME_LR_MODAL_IMAGE']->value == "yes") {?>modal-lg<?php } else { ?>modal-md<?php }?>">
                    <div class="modal-content">
                        <div class="register-menu"></div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="loginRegisterError" tabindex="-1" role="dialog" aria-labelledby="loginRegisterErrorLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <span class="modal-title" id="loginRegisterErrorLabel"><?php echo $_smarty_tpl->tpl_vars['LR_ERROR']->value;?>
</span>
            </div>
            <div class="modal-body">
            <?php echo $_smarty_tpl->tpl_vars['LR_ERROR_1']->value;?>
<br />
            <?php echo $_smarty_tpl->tpl_vars['LR_ERROR_2']->value;?>
<br />
            <?php echo $_smarty_tpl->tpl_vars['LR_ERROR_3']->value;?>

            </div>
        </div>
    </div>
</div>

        <?php }?>
        <?php }
}
