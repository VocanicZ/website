<?php
/* Smarty version 4.3.1, created on 2023-06-01 08:13:07
  from '/home/u302265335/domains/rainbowcreation.net/public_html/custom/templates/Cobalt/store/navbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6477f0a3500583_01211528',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '402701f40d292f3db39a4a6908665bec2d200f5e' => 
    array (
      0 => '/home/u302265335/domains/rainbowcreation.net/public_html/custom/templates/Cobalt/store/navbar.tpl',
      1 => 1685580388,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6477f0a3500583_01211528 (Smarty_Internal_Template $_smarty_tpl) {
?>    <?php if ((isset($_smarty_tpl->tpl_vars['STORE_PLAYER']->value))) {?>
        <div class="store-player">
            <div class="d-flex">
                <div class="img-container">
                    <img class="avatar-img" src="http://cravatar.eu/avatar/<?php echo $_smarty_tpl->tpl_vars['STORE_PLAYER']->value;?>
.png" alt="<?php echo $_smarty_tpl->tpl_vars['STORE_PLAYER']->value;?>
" />
                </div>
                <div class="player flex-grow-1 ml-3">
                    <div class="store-player-txt"><?php echo $_smarty_tpl->tpl_vars['STORE_PLAYER']->value;?>
</div>
                    <?php if ((isset($_smarty_tpl->tpl_vars['LOGGED_IN_USER']->value)) && (isset($_smarty_tpl->tpl_vars['SHOW_CREDITS_AMOUNT']->value))) {?>
                        <small><?php echo $_smarty_tpl->tpl_vars['CREDITS']->value;?>
: <b><?php echo $_smarty_tpl->tpl_vars['CREDITS_FORMAT_VALUE']->value;?>
</b></small>
                    <?php }?>
                </div>
                <div class="logout">
                    <form action="" method="post">
                        <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                        <input type="hidden" name="type" value="store_logout">
                        <button type="submit" class="btn btn-secondary pt-1 pb-1 pl-2 pr-2"><i
                                class='fas fa-sign-out-alt'></i></button>
                    </form>
                </div>
            </div>

        </div>
    <?php }?>

    <div class="user-nav">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CATEGORIES']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
            <?php if ((isset($_smarty_tpl->tpl_vars['category']->value['subcategories'])) && count($_smarty_tpl->tpl_vars['category']->value['subcategories'])) {?>
                <div class="dropdown">
                    <a class="user-nav-link dropdown-toggle" href="#" id="dropdownMenuButton" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <?php echo $_smarty_tpl->tpl_vars['category']->value['title'];?>

                    </a>
                    <div class="dropdown-menu ml-3" aria-labelledby="dropdownMenuButton">
                        <?php if (!$_smarty_tpl->tpl_vars['category']->value['only_subcategories']) {?>
                            <a class="<?php if ($_smarty_tpl->tpl_vars['category']->value['active']) {?>active <?php }?>dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['category']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value['title'];?>
</a>
                        <?php }?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['category']->value['subcategories'], 'subcategory');
$_smarty_tpl->tpl_vars['subcategory']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['subcategory']->value) {
$_smarty_tpl->tpl_vars['subcategory']->do_else = false;
?>
                            <a class="<?php if ($_smarty_tpl->tpl_vars['subcategory']->value['active']) {?>active <?php }?>dropdown-item"
                                href="<?php echo $_smarty_tpl->tpl_vars['subcategory']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['subcategory']->value['title'];?>
</a>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                </div>
            <?php } else { ?>
                <a class="<?php if ($_smarty_tpl->tpl_vars['category']->value['active']) {?>active <?php }?>user-nav-link" href="<?php echo $_smarty_tpl->tpl_vars['category']->value['url'];?>
">
                    <?php echo $_smarty_tpl->tpl_vars['category']->value['title'];?>

                </a>
            <?php }?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php if (count($_smarty_tpl->tpl_vars['SHOPPING_CART_PRODUCTS']->value)) {?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['CHECKOUT_LINK']->value;?>
" class="btn btn-theme d-block mt-3 ml-3 mr-3">
                <?php echo $_smarty_tpl->tpl_vars['X_ITEMS_FOR_Y']->value;?>

            </a>
        <?php } else { ?>
            <button class="btn btn-theme d-block mt-3 ml-3 mr-3 disabled">
                <?php echo $_smarty_tpl->tpl_vars['X_ITEMS_FOR_Y']->value;?>

            </button>
        <?php }?>
    </div><?php }
}
