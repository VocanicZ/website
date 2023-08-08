<?php
/* Smarty version 4.3.1, created on 2023-06-01 07:53:34
  from '/home/u302265335/domains/rainbowcreation.net/public_html/custom/templates/Cobalt/template_settings/settings_pages/slider.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6477ec0eae2021_36649303',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dd3a8ae3817bccb95323e74118799a22b1cb645e' => 
    array (
      0 => '/home/u302265335/domains/rainbowcreation.net/public_html/custom/templates/Cobalt/template_settings/settings_pages/slider.tpl',
      1 => 1685580388,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./parts/switch.tpl' => 2,
    'file:./parts/image_uploader.tpl' => 1,
  ),
),false)) {
function content_6477ec0eae2021_36649303 (Smarty_Internal_Template $_smarty_tpl) {
?><ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
    <li class="nav-item">
        <a class="nav-link active" id="pills-sliderg-tab" data-toggle="pill" href="#pills-sliderg" role="tab" aria-controls="pills-sliderg" aria-selected="true"><?php echo $_smarty_tpl->tpl_vars['GENERAL']->value;?>
</a>
    </li>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sliders']->value, 'slider');
$_smarty_tpl->tpl_vars['slider']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['slider']->value) {
$_smarty_tpl->tpl_vars['slider']->do_else = false;
?>
    <li class="nav-item">
        <a class="nav-link" id="pills-slider<?php echo $_smarty_tpl->tpl_vars['slider']->value;?>
-tab" data-toggle="pill" href="#pills-slider<?php echo $_smarty_tpl->tpl_vars['slider']->value;?>
" role="tab" aria-controls="pills-slider<?php echo $_smarty_tpl->tpl_vars['slider']->value;?>
" aria-selected="false"><?php echo $_smarty_tpl->tpl_vars['SLIDER'.($_smarty_tpl->tpl_vars['slider']->value)]->value;?>
</a>
    </li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
<div class="tab-content" id="pills-tabContent">
    <div class="tab-pane fade show active" id="pills-sliderg" role="tabpanel" aria-labelledby="pills-sliderg-tab">
        <?php $_smarty_tpl->_subTemplateRender("file:./parts/switch.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('name'=>'enable_slider','right'=>'no','last'=>'no'), 0, false);
?>
        <label><?php echo $_smarty_tpl->tpl_vars['SLIDER_HEIGHT']->value;?>
</label><span class="float-right"><?php echo $_smarty_tpl->tpl_vars['BLANK']->value;?>
</span>
        <input type="text" name="slider_height" value="<?php echo $_smarty_tpl->tpl_vars['SLIDER_HEIGHT_VALUE']->value;?>
" class="form-control" /><br />
        <label><?php echo $_smarty_tpl->tpl_vars['SLIDER_HEIGHT_M']->value;?>
</label><span class="float-right"><?php echo $_smarty_tpl->tpl_vars['BLANK']->value;?>
</span>
        <input type="text" name="slider_height_m" value="<?php echo $_smarty_tpl->tpl_vars['SLIDER_HEIGHT_M_VALUE']->value;?>
" class="form-control" />
    </div>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sliders']->value, 'slider', false, NULL, 'sliders', array (
  'first' => true,
  'index' => true,
));
$_smarty_tpl->tpl_vars['slider']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['slider']->value) {
$_smarty_tpl->tpl_vars['slider']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_sliders']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_sliders']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_sliders']->value['index'];
?>

    <div class="tab-pane fade" id="pills-slider<?php echo $_smarty_tpl->tpl_vars['slider']->value;?>
" role="tabpanel" aria-labelledby="pills-slider<?php echo $_smarty_tpl->tpl_vars['slider']->value;?>
-tab">
        <?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_sliders']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_sliders']->value['first'] : null)) {?> <?php $_smarty_tpl->_subTemplateRender("file:./parts/switch.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('name'=>(("enable_slider").($_smarty_tpl->tpl_vars['slider']->value)).(''),'right'=>'no','last'=>'no'), 0, true);
?> <?php }?>

        <label><?php echo $_smarty_tpl->tpl_vars['SLIDER'.($_smarty_tpl->tpl_vars['slider']->value).'_TITLE']->value;?>
</label><span class="float-right"><?php echo $_smarty_tpl->tpl_vars['BLANK']->value;?>
</span>
        <input type="text" name="slider<?php echo $_smarty_tpl->tpl_vars['slider']->value;?>
_title" value="<?php echo $_smarty_tpl->tpl_vars['SLIDER'.($_smarty_tpl->tpl_vars['slider']->value).'_TITLE_VALUE']->value;?>
" class="form-control" />
        <br />
        <label><?php echo $_smarty_tpl->tpl_vars['SLIDER'.($_smarty_tpl->tpl_vars['slider']->value).'_DESC']->value;?>
</label><span class="float-right"><?php echo $_smarty_tpl->tpl_vars['BLANK']->value;?>
</span>
        <input type="text" name="slider<?php echo $_smarty_tpl->tpl_vars['slider']->value;?>
_desc" value="<?php echo $_smarty_tpl->tpl_vars['SLIDER'.($_smarty_tpl->tpl_vars['slider']->value).'_DESC_VALUE']->value;?>
" class="form-control" />
        <br />

        <?php $_smarty_tpl->_subTemplateRender("file:./parts/image_uploader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('name'=>(("slider").($_smarty_tpl->tpl_vars['slider']->value)).("_image")), 0, true);
?>

        <label><?php echo $_smarty_tpl->tpl_vars['SLIDER'.($_smarty_tpl->tpl_vars['slider']->value).'_LINK']->value;?>
</label><span class="float-right"><?php echo $_smarty_tpl->tpl_vars['BLANK']->value;?>
</span>
        <input type="text" name="slider<?php echo $_smarty_tpl->tpl_vars['slider']->value;?>
_link" value="<?php echo $_smarty_tpl->tpl_vars['SLIDER'.($_smarty_tpl->tpl_vars['slider']->value).'_LINK_VALUE']->value;?>
" class="form-control" />
        <br />
        <input type="hidden" name="slider<?php echo $_smarty_tpl->tpl_vars['slider']->value;?>
_link_open" value="no" />
        <input type="checkbox" name="slider<?php echo $_smarty_tpl->tpl_vars['slider']->value;?>
_link_open" class="js-switch js-check-change" value="yes" <?php if ($_smarty_tpl->tpl_vars['SLIDER'.($_smarty_tpl->tpl_vars['slider']->value).'_LINK_OPEN_VALUE']->value == 'yes') {?>checked<?php }?>> <label><?php echo $_smarty_tpl->tpl_vars['SLIDER_LINK_OPEN']->value;?>
</label>
    </div>

    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div><?php }
}
