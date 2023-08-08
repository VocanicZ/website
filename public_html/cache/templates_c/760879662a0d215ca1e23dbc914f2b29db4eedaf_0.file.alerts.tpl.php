<?php
/* Smarty version 4.3.1, created on 2023-06-01 09:10:58
  from '/home/u302265335/domains/rainbowcreation.net/public_html/custom/templates/Cobalt/user/alerts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6477fe320f16a4_66842368',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '760879662a0d215ca1e23dbc914f2b29db4eedaf' => 
    array (
      0 => '/home/u302265335/domains/rainbowcreation.net/public_html/custom/templates/Cobalt/user/alerts.tpl',
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
function content_6477fe320f16a4_66842368 (Smarty_Internal_Template $_smarty_tpl) {
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
            <?php if ((isset($_smarty_tpl->tpl_vars['ERROR']->value))) {?>
                <div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['ERROR']->value;?>
</div>
            <?php }?>
            <div class="card">
                <div class="card-header header-theme"><?php echo $_smarty_tpl->tpl_vars['ALERTS']->value;?>
</div>
                <div class="card-body">
                     <?php if (count($_smarty_tpl->tpl_vars['ALERTS_LIST']->value)) {?> <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ALERTS_LIST']->value, 'alert');
$_smarty_tpl->tpl_vars['alert']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['alert']->value) {
$_smarty_tpl->tpl_vars['alert']->do_else = false;
?>
                        <div class="card">
                            <div class="card-body p-3">
                                <?php echo $_smarty_tpl->tpl_vars['alert']->value->content;?>
<br />
                                <a class="white-link" href="<?php echo $_smarty_tpl->tpl_vars['alert']->value->view_link;?>
"><?php echo $_smarty_tpl->tpl_vars['CLICK_TO_VIEW']->value;?>
</a>
				                <span class="float-right" data-toggle="tooltip" data-trigger="hover" data-original-title="<?php echo $_smarty_tpl->tpl_vars['alert']->value->date;?>
"><?php echo $_smarty_tpl->tpl_vars['alert']->value->date_nice;?>
</span>
                            </div>
                        </div>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                      <form action="<?php echo $_smarty_tpl->tpl_vars['DELETE_ALL_LINK']->value;?>
" method="post" style="display:inline">
                        <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                        <button type="submit" class="btn btn-secondary mt-1"><?php echo $_smarty_tpl->tpl_vars['DELETE_ALL']->value;?>
</button>
                      </form>

                    <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['NO_ALERTS']->value;?>
 <?php }?> 
                </div>
            </div>
        </div>
    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
