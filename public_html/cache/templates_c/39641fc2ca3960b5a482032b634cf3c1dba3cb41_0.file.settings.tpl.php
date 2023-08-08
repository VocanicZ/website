<?php
/* Smarty version 4.3.1, created on 2023-06-01 07:53:34
  from '/home/u302265335/domains/rainbowcreation.net/public_html/custom/templates/Cobalt/template_settings/settings.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6477ec0ea7cd40_24017708',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '39641fc2ca3960b5a482032b634cf3c1dba3cb41' => 
    array (
      0 => '/home/u302265335/domains/rainbowcreation.net/public_html/custom/templates/Cobalt/template_settings/settings.tpl',
      1 => 1685580388,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6477ec0ea7cd40_24017708 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="" method="post" enctype='multipart/form-data' id="option-form">
    <div class="row cobalt-row">
        <div class="col-md-3">
            <div class="card" style="border: 1px solid #e3e6f0">
                <div class="card-body">
                    <ul class="nav nav-pills mb-3 flex-column" id="pills-tab" role="tablist">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CATEGORIES']->value, 'cat', false, 'category', 'categories', array (
  'first' => true,
  'index' => true,
));
$_smarty_tpl->tpl_vars['cat']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value => $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_categories']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_categories']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_categories']->value['index'];
?>
                            <li class="nav-item">
                                <a class="nav-link<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_categories']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_categories']->value['first'] : null)) {?> active<?php }?>"
                                    id="pills-<?php echo $_smarty_tpl->tpl_vars['cat']->value['filtered_name'];?>
-tab" data-toggle="pill"
                                    href="#pills-<?php echo $_smarty_tpl->tpl_vars['cat']->value['filtered_name'];?>
" role="tab" aria-controls="pills-<?php echo $_smarty_tpl->tpl_vars['cat']->value['filtered_name'];?>
"
                                    aria-selected="<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_categories']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_categories']->value['first'] : null)) {?>true<?php } else { ?>false<?php }?>"><?php echo $_smarty_tpl->tpl_vars['cat']->value['icon'];?>

                                    <?php echo $_smarty_tpl->tpl_vars[''.($_smarty_tpl->tpl_vars['category']->value)]->value;?>
</a>
                            </li>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="card" style="border: 1px solid #e3e6f0">
                <div class="card-body">
                    <div class="tab-content" id="pills-tabContent">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CATEGORIES']->value, 'cat', false, 'category', 'categories', array (
  'first' => true,
  'index' => true,
));
$_smarty_tpl->tpl_vars['cat']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value => $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_categories']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_categories']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_categories']->value['index'];
?>
                            <div class="tab-pane fade<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_categories']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_categories']->value['first'] : null)) {?> show active<?php }?>"
                                id="pills-<?php echo $_smarty_tpl->tpl_vars['cat']->value['filtered_name'];?>
" role="tabpanel"
                                aria-labelledby="pills-<?php echo $_smarty_tpl->tpl_vars['cat']->value['filtered_name'];?>
-tab">
                                <h1><b><?php echo $_smarty_tpl->tpl_vars[''.($_smarty_tpl->tpl_vars['category']->value)]->value;?>
</b></h1>
                                <hr />
                                <?php $_smarty_tpl->_subTemplateRender((("./settings_pages/").($_smarty_tpl->tpl_vars['cat']->value['filtered_name'])).(".tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                                <?php if ($_smarty_tpl->tpl_vars['cat']->value['filtered_name'] !== "home" && $_smarty_tpl->tpl_vars['cat']->value['filtered_name'] !== "update") {?>
                                    <hr />
                                    <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                                    <input type='submit' class='btn btn-primary' value="<?php echo $_smarty_tpl->tpl_vars['SUBMIT']->value;?>
">
                                <?php }?>
                            </div>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form><?php }
}
