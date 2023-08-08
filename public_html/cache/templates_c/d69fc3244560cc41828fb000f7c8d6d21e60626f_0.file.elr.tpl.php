<?php
/* Smarty version 4.3.1, created on 2023-06-01 07:53:34
  from '/home/u302265335/domains/rainbowcreation.net/public_html/custom/templates/Cobalt/template_settings/settings_pages/elr.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6477ec0eaec9c9_77776247',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd69fc3244560cc41828fb000f7c8d6d21e60626f' => 
    array (
      0 => '/home/u302265335/domains/rainbowcreation.net/public_html/custom/templates/Cobalt/template_settings/settings_pages/elr.tpl',
      1 => 1685580388,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./parts/image_uploader.tpl' => 2,
    'file:./parts/switch.tpl' => 3,
    'file:./parts/range.tpl' => 1,
  ),
),false)) {
function content_6477ec0eaec9c9_77776247 (Smarty_Internal_Template $_smarty_tpl) {
?><ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
    <li class="nav-item">
        <a class="nav-link active" id="pills-bgelr-tab" data-toggle="pill" href="#pills-bgelr" role="tab" aria-controls="pills-bgelr" aria-selected="true"><?php echo $_smarty_tpl->tpl_vars['BACKGROUNDS_TAB']->value;?>
</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="pills-wblr-tab" data-toggle="pill" href="#pills-wblr" role="tab" aria-controls="pills-wblr" aria-selected="false"><?php echo $_smarty_tpl->tpl_vars['WB']->value;?>
</a>
    </li>
</ul>
<div class="tab-content" id="pills-tabContent">
    <div class="tab-pane fade show active" id="pills-bgelr" role="tabpanel" aria-labelledby="pills-bgelr-tab">
        <?php $_smarty_tpl->_subTemplateRender("file:./parts/image_uploader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('name'=>'lbg'), 0, false);
?> <?php $_smarty_tpl->_subTemplateRender("file:./parts/image_uploader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('name'=>'rbg'), 0, true);
?> <?php $_smarty_tpl->_subTemplateRender("file:./parts/switch.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('name'=>'lr_modal_image','right'=>'no','last'=>'no'), 0, false);
?> <?php $_smarty_tpl->_subTemplateRender("file:./parts/switch.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('name'=>'lr_coverlay','right'=>$_smarty_tpl->tpl_vars['LR_COVERLAY_2']->value,'last'=>'no'), 0, true);
?>

        <?php $_smarty_tpl->_subTemplateRender("file:./parts/switch.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('name'=>'lr_sidebar','right'=>'no','last'=>'no'), 0, true);
?>

        <?php $_smarty_tpl->_subTemplateRender("file:./parts/range.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('name'=>'lr_coverlay_opacity','right'=>$_smarty_tpl->tpl_vars['COVERLAY_OPACITY_2']->value,'last'=>'yes'), 0, false);
?>
    </div>
    <div class="tab-pane fade" id="pills-wblr" role="tabpanel" aria-labelledby="pills-wblr-tab">
        <label><?php echo $_smarty_tpl->tpl_vars['WB_T']->value;?>
</label><span class="float-right"><?php echo $_smarty_tpl->tpl_vars['WB_T_1']->value;?>
</span> <input type="text" name="wb_t" value="<?php echo $_smarty_tpl->tpl_vars['WB_T_VALUE']->value;?>
" class="form-control" /><br />

        <label><?php echo $_smarty_tpl->tpl_vars['WB_D']->value;?>
</label>
        <input type="text" name="wb_d" value="<?php echo $_smarty_tpl->tpl_vars['WB_D_VALUE']->value;?>
" class="form-control" /><br />

        <label><?php echo $_smarty_tpl->tpl_vars['WB_SKIN_ID']->value;?>
</label>
        <input type="text" name="wb_skin_id" value="<?php echo $_smarty_tpl->tpl_vars['WB_SKIN_ID_VALUE']->value;?>
" class="form-control" />

        <div class="card img-card mt-3">
            <i class="fas fa-info-circle"></i> <b><?php echo $_smarty_tpl->tpl_vars['INFO']->value;?>
</b><br />
            <?php echo $_smarty_tpl->tpl_vars['WB_SKIN_ID_2']->value;?>
<br />
            <ol>
                <li><?php echo $_smarty_tpl->tpl_vars['WB_SKIN_ID_3']->value;?>
 <a href="https://namemc.com" target="_blank" rel="nofollow noopener"><?php echo $_smarty_tpl->tpl_vars['WB_SKIN_ID_4']->value;?>
</a></li>
                <li><?php echo $_smarty_tpl->tpl_vars['WB_SKIN_ID_5']->value;?>
</li>
                <li><?php echo $_smarty_tpl->tpl_vars['WB_SKIN_ID_6']->value;?>
</li>
                <li><?php echo $_smarty_tpl->tpl_vars['WB_SKIN_ID_7']->value;?>
</li>
            </ol>
            <?php echo $_smarty_tpl->tpl_vars['WB_SKIN_ID_8']->value;?>

        </div>
    </div>
</div><?php }
}
