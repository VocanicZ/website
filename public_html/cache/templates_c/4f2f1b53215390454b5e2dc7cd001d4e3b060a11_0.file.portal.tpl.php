<?php
/* Smarty version 4.3.1, created on 2023-06-01 07:53:34
  from '/home/u302265335/domains/rainbowcreation.net/public_html/custom/templates/Cobalt/template_settings/settings_pages/portal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6477ec0eb0c673_56600685',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f2f1b53215390454b5e2dc7cd001d4e3b060a11' => 
    array (
      0 => '/home/u302265335/domains/rainbowcreation.net/public_html/custom/templates/Cobalt/template_settings/settings_pages/portal.tpl',
      1 => 1685580388,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./parts/image_uploader.tpl' => 2,
    'file:./parts/switch.tpl' => 6,
    'file:./parts/range.tpl' => 1,
  ),
),false)) {
function content_6477ec0eb0c673_56600685 (Smarty_Internal_Template $_smarty_tpl) {
?><ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
    <li class="nav-item">
        <a class="nav-link active" id="pills-gp-tab" data-toggle="pill" href="#pills-gp" role="tab" aria-controls="pills-gp" aria-selected="true"><?php echo $_smarty_tpl->tpl_vars['GENERAL']->value;?>
</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="pills-iconimage-tab" data-toggle="pill" href="#pills-iconimage" role="tab" aria-controls="pills-iconimage" aria-selected="false"><?php echo $_smarty_tpl->tpl_vars['ICONIMAGE_TAB']->value;?>
</a>
    </li>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['portal_icons']->value, 'icon');
$_smarty_tpl->tpl_vars['icon']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['icon']->value) {
$_smarty_tpl->tpl_vars['icon']->do_else = false;
?>
    <li class="nav-item">
        <a class="nav-link" id="pills-image<?php echo $_smarty_tpl->tpl_vars['icon']->value;?>
p-tab" data-toggle="pill" href="#pills-image<?php echo $_smarty_tpl->tpl_vars['icon']->value;?>
p" role="tab" aria-controls="pills-image<?php echo $_smarty_tpl->tpl_vars['icon']->value;?>
p" aria-selected="false"><?php echo $_smarty_tpl->tpl_vars['IMAGE'.($_smarty_tpl->tpl_vars['icon']->value).'_TAB']->value;?>
</a>
    </li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
<div class="tab-content" id="pills-tabContent">
    <div class="tab-pane fade show active" id="pills-gp" role="tabpanel" aria-labelledby="pills-gp-tab">
        <?php $_smarty_tpl->_subTemplateRender("file:./parts/image_uploader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('name'=>'portal_bg'), 0, false);
?>

        <label><?php echo $_smarty_tpl->tpl_vars['PORTAL_IM']->value;?>
</label>
        <input type="text" name="portal_im" value="<?php echo $_smarty_tpl->tpl_vars['PORTAL_IM_VALUE']->value;?>
" class="form-control" /><br />
        <label><?php echo $_smarty_tpl->tpl_vars['PORTAL_IMM']->value;?>
</label>
        <input type="text" name="portal_imm" value="<?php echo $_smarty_tpl->tpl_vars['PORTAL_IMM_VALUE']->value;?>
" class="form-control" /><br />

        <?php $_smarty_tpl->_subTemplateRender("file:./parts/switch.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('name'=>'portal_particles','right'=>'no','last'=>'no'), 0, false);
?> <?php $_smarty_tpl->_subTemplateRender("file:./parts/switch.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('name'=>'portal_color_overlay','right'=>'no','last'=>'no'), 0, true);
?>
        
        <?php $_smarty_tpl->_subTemplateRender("file:./parts/range.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('name'=>'portal_color_overlay_opacity','right'=>$_smarty_tpl->tpl_vars['COVERLAY_OPACITY_2']->value,'last'=>'no'), 0, false);
?>

        <?php $_smarty_tpl->_subTemplateRender("file:./parts/switch.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('name'=>'portal_ds_texts','right'=>'no','last'=>'yes'), 0, true);
?>
    </div>
    <div class="tab-pane fade" id="pills-iconimage" role="tabpanel" aria-labelledby="pills-iconimage-tab">
        <label><?php echo $_smarty_tpl->tpl_vars['PORTAL_ICON_WIDTH']->value;?>
</label>
        <input type="text" name="portal_icon_width" value="<?php echo $_smarty_tpl->tpl_vars['PORTAL_ICON_WIDTH_VALUE']->value;?>
" class="form-control" /><br />

        <label><?php echo $_smarty_tpl->tpl_vars['PORTAL_ICON_WIDTH_M']->value;?>
</label>
        <input type="text" name="portal_icon_width_m" value="<?php echo $_smarty_tpl->tpl_vars['PORTAL_ICON_WIDTH_M_VALUE']->value;?>
" class="form-control" /><br />

        <?php $_smarty_tpl->_subTemplateRender("file:./parts/switch.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('name'=>'portal_enable_fourth_icon','right'=>'no','last'=>'no'), 0, true);
?> <?php $_smarty_tpl->_subTemplateRender("file:./parts/switch.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('name'=>'portal_icon_names','right'=>'no','last'=>'no'), 0, true);
?> <?php $_smarty_tpl->_subTemplateRender("file:./parts/switch.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('name'=>'portal_fa_icons','right'=>'no','last'=>'yes'), 0, true);
?>
    </div>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['portal_icons']->value, 'icon');
$_smarty_tpl->tpl_vars['icon']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['icon']->value) {
$_smarty_tpl->tpl_vars['icon']->do_else = false;
?>

    <div class="tab-pane fade" id="pills-image<?php echo $_smarty_tpl->tpl_vars['icon']->value;?>
p" role="tabpanel" aria-labelledby="pills-image<?php echo $_smarty_tpl->tpl_vars['icon']->value;?>
p-tab">
        <label><?php echo $_smarty_tpl->tpl_vars['PORTAL'.($_smarty_tpl->tpl_vars['icon']->value).'_NAME']->value;?>
</label>
        <input type="text" name="portal<?php echo $_smarty_tpl->tpl_vars['icon']->value;?>
_name" value="<?php echo $_smarty_tpl->tpl_vars['PORTAL'.($_smarty_tpl->tpl_vars['icon']->value).'_NAME_VALUE']->value;?>
" class="form-control" /><br />

        <?php if ((isset($_smarty_tpl->tpl_vars['PORTAL_FA_ICONS_VALUE']->value)) && preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['PORTAL_FA_ICONS_VALUE']->value, $tmp) < 3) {?> <?php $_smarty_tpl->_subTemplateRender("file:./parts/image_uploader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('name'=>(("portal").($_smarty_tpl->tpl_vars['icon']->value)).("_icon")), 0, true);
?> <?php } else { ?>
        <label><?php echo $_smarty_tpl->tpl_vars['PORTAL'.($_smarty_tpl->tpl_vars['icon']->value).'_ICON']->value;?>
</label>
        <input type="text" name="portal<?php echo $_smarty_tpl->tpl_vars['icon']->value;?>
_fa_icon" value="<?php echo $_smarty_tpl->tpl_vars['PORTAL'.($_smarty_tpl->tpl_vars['icon']->value).'_FA_ICON_VALUE']->value;?>
" class="form-control" /><br />
        <?php }?>

        <label><?php echo $_smarty_tpl->tpl_vars['PORTAL'.($_smarty_tpl->tpl_vars['icon']->value).'_LINK']->value;?>
</label>
        <input type="text" name="portal<?php echo $_smarty_tpl->tpl_vars['icon']->value;?>
_link" value="<?php echo $_smarty_tpl->tpl_vars['PORTAL'.($_smarty_tpl->tpl_vars['icon']->value).'_LINK_VALUE']->value;?>
" class="form-control" />
    </div>

    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div><?php }
}
