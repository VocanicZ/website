<?php
/* Smarty version 4.3.1, created on 2023-06-01 07:53:34
  from '/home/u302265335/domains/rainbowcreation.net/public_html/custom/templates/Cobalt/template_settings/settings_pages/update.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6477ec0ea8ecf2_32611558',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bf06028c1337a6c1982c5b06b120c2633de324f7' => 
    array (
      0 => '/home/u302265335/domains/rainbowcreation.net/public_html/custom/templates/Cobalt/template_settings/settings_pages/update.tpl',
      1 => 1685580388,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./parts/switch.tpl' => 2,
  ),
),false)) {
function content_6477ec0ea8ecf2_32611558 (Smarty_Internal_Template $_smarty_tpl) {
?><ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
    <?php if ($_smarty_tpl->tpl_vars['EXT_UPDATE_VALUE']->value == 'yes') {?>
    <li class="nav-item">
        <a class="nav-link active" id="pills-updatecheck-tab" data-toggle="pill" href="#pills-updatecheck" role="tab" aria-controls="pills-updatecheck" aria-selected="true"><?php echo $_smarty_tpl->tpl_vars['UPDATE_CHECK_TAB']->value;?>
</a>
    </li>
    <?php }?>
    <li class="nav-item">
        <a class="nav-link<?php if ($_smarty_tpl->tpl_vars['EXT_UPDATE_VALUE']->value == 'no') {?> active<?php }?>" id="pills-updater-tab" data-toggle="pill" href="#pills-updater" role="tab" aria-controls="pills-updater" aria-selected="<?php if ($_smarty_tpl->tpl_vars['EXT_UPDATE_VALUE']->value == 'no') {?>true<?php } else { ?>false<?php }?>"><?php echo $_smarty_tpl->tpl_vars['EZ_UPDATE_1']->value;?>
</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="pills-updatesettings-tab" data-toggle="pill" href="#pills-updatesettings" role="tab" aria-controls="pills-updatesettings" aria-selected="false"><?php echo $_smarty_tpl->tpl_vars['UPDATE_SETTINGS_TAB']->value;?>
</a>
    </li>
</ul>

<div class="tab-content" id="pills-tabContent">
    <?php if ($_smarty_tpl->tpl_vars['EXT_UPDATE_VALUE']->value == 'yes') {?>
    <div class="tab-pane fade show active" id="pills-updatecheck" role="tabpanel" aria-labelledby="pills-updatecheck-tab">
        <?php if ($_smarty_tpl->tpl_vars['LOCAL_VERSION']->value == $_smarty_tpl->tpl_vars['COBALT_VERSION']->value) {?>
        <div class="alert bg-success text-white alert-dismissible mb-3">
            <h5><i class="icon fa fa-check"></i> <?php echo $_smarty_tpl->tpl_vars['UPDATE_CHECK_NO_UPDATE']->value;?>
</h5>
            <?php echo $_smarty_tpl->tpl_vars['UPDATE_CHECK_NO_UPDATE_2']->value;?>

        </div>
        <?php } else { ?>
        <div class="alert bg-danger text-white alert-dismissible">
            <h5><i class="icon fas fa-exclamation-triangle"></i> <?php echo $_smarty_tpl->tpl_vars['UPDATE_AVAILABLE']->value;?>
</h5>
            <span class="current"><?php echo $_smarty_tpl->tpl_vars['THEME_LOCAL_VERSION']->value;?>
</span> <i class="fas fa-long-arrow-alt-right"></i> <span class="new"><?php echo $_smarty_tpl->tpl_vars['COBALT_VERSION']->value;?>
</span>
        </div>
        <span><?php echo $_smarty_tpl->tpl_vars['UPDATE_AVAILABLE_2']->value;?>
</span>
        <?php }?>
        <button type="submit" class="btn btn-primary" name="cobalt-recheck-update" id="cobalt-recheck-update"><?php echo $_smarty_tpl->tpl_vars['UPDATE_RECHECK']->value;?>
</button>
    </div>
    <?php }?>

    <div class="tab-pane fade<?php if ($_smarty_tpl->tpl_vars['EXT_UPDATE_VALUE']->value == 'no') {?> show active<?php }?>" id="pills-updater" role="tabpanel" aria-labelledby="pills-updater-tab">
        <a class="btn btn-info mr-1" href="https://www.mc-market.org/resources/21683" target="_blank"><i class="fas fa-download"></i></a>
        <?php echo $_smarty_tpl->tpl_vars['EZ_UPDATE_2']->value;?>
<br />

        <div class="d-flex flex-row align-items-center" style="margin-top: 15px;">
            <input type="file" accept=".zip" name="cobalt-update" id="cobalt-update" class="position-absolute" style="margin-left: -500rem;" onchange="switchToSubmit()" />
            <label for="cobalt-update" class="btn btn-primary mb-0" style="min-width: 110px;" id="cobalt-update-label"><?php echo $_smarty_tpl->tpl_vars['EZ_UPDATE_5']->value;?>
</label>
            <button type="submit" class="btn btn-success d-none" id="cobalt-submit"><?php echo $_smarty_tpl->tpl_vars['UPDATE']->value;?>
</button>
            <span class="ml-3"><?php echo $_smarty_tpl->tpl_vars['EZ_UPDATE_3']->value;?>
</span>
        </div>
        <br />
        <span><b><?php echo $_smarty_tpl->tpl_vars['NOTE']->value;?>
</b> <?php echo $_smarty_tpl->tpl_vars['EZ_UPDATE_4']->value;?>
</span>
    </div>

    <div class="tab-pane fade" id="pills-updatesettings" role="tabpanel" aria-labelledby="pills-updatesettings-tab">
        <?php $_smarty_tpl->_subTemplateRender("file:./parts/switch.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('name'=>'ext_update','right'=>$_smarty_tpl->tpl_vars['EXT_UPDATE_INFO']->value,'last'=>'no'), 0, false);
?> <?php $_smarty_tpl->_subTemplateRender("file:./parts/switch.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('name'=>'update_notif','right'=>'no','last'=>'yes'), 0, true);
?>

        <input type="hidden" name="view" value="update" />
        <hr />
        <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
" />
        <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['SUBMIT']->value;?>
</button>
    </div>
</div><?php }
}
