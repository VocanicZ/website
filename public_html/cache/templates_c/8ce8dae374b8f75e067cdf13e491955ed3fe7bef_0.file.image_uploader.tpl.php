<?php
/* Smarty version 4.3.1, created on 2023-06-01 07:53:34
  from '/home/u302265335/domains/rainbowcreation.net/public_html/custom/templates/Cobalt/template_settings/settings_pages/parts/image_uploader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6477ec0eac4f37_75579529',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8ce8dae374b8f75e067cdf13e491955ed3fe7bef' => 
    array (
      0 => '/home/u302265335/domains/rainbowcreation.net/public_html/custom/templates/Cobalt/template_settings/settings_pages/parts/image_uploader.tpl',
      1 => 1685580388,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6477ec0eac4f37_75579529 (Smarty_Internal_Template $_smarty_tpl) {
?><label><?php echo $_smarty_tpl->tpl_vars[''.(mb_strtoupper((string) $_smarty_tpl->tpl_vars['name']->value ?? '', 'UTF-8'))]->value;?>
</label>
<?php if ($_smarty_tpl->tpl_vars[''.(mb_strtoupper((string) $_smarty_tpl->tpl_vars['name']->value ?? '', 'UTF-8')).'_VALUE']->value !== '') {?>
    <span class="float-right"><?php echo $_smarty_tpl->tpl_vars['IU_UPLOAD_NEW']->value;?>
</span>
    <div class="card img-card">
        <img src="<?php echo $_smarty_tpl->tpl_vars[''.(mb_strtoupper((string) $_smarty_tpl->tpl_vars['name']->value ?? '', 'UTF-8')).'_VALUE']->value;?>
" />
        <span><?php echo $_smarty_tpl->tpl_vars[''.(mb_strtoupper((string) $_smarty_tpl->tpl_vars['name']->value ?? '', 'UTF-8')).'_VALUE']->value;?>
</span>
        <button class="btn btn-danger float-right" name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
-delete-btn" type='submit'><i class="fas fa-trash"></i></button>
    </div>
<?php } else { ?>
    <div class="d-flex flex-row align-items-center mt-2">
        <input type="file" name="cobalt-<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" id="cobalt-<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" class="position-absolute" style="margin-left:-500rem" onchange="switchToSubmit<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
()">
        <label for="cobalt-<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" class="btn btn-primary mb-0" style="min-width: 130px" id="cobalt-<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
-label"><?php echo $_smarty_tpl->tpl_vars['IU_CHOOSE_IMAGE']->value;?>
</label>
        <button type="submit" class="btn btn-success d-none" id="cobalt-<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
-submit"><?php echo $_smarty_tpl->tpl_vars['IU_UPLOAD']->value;?>
</button>
        <span class="ml-3"><?php echo $_smarty_tpl->tpl_vars['IU_CLICK_UPLOAD']->value;?>
</span>
    </div>
    <br />
<?php }
}
}
