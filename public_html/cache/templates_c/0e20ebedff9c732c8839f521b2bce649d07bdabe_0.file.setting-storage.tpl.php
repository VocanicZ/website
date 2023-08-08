<?php
/* Smarty version 4.3.1, created on 2023-06-01 07:53:34
  from '/home/u302265335/domains/rainbowcreation.net/public_html/custom/templates/Cobalt/template_settings/settings_pages/setting-storage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6477ec0eb17418_39206412',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0e20ebedff9c732c8839f521b2bce649d07bdabe' => 
    array (
      0 => '/home/u302265335/domains/rainbowcreation.net/public_html/custom/templates/Cobalt/template_settings/settings_pages/setting-storage.tpl',
      1 => 1685580388,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6477ec0eb17418_39206412 (Smarty_Internal_Template $_smarty_tpl) {
?><a class="btn btn-primary mb-2" href="<?php echo $_smarty_tpl->tpl_vars['SETTINGS_DOWNLOAD_URL']->value;?>
" download><?php echo $_smarty_tpl->tpl_vars['DOWNLOAD_SETTINGS_FILE']->value;?>
</a><br />

<div class="d-flex flex-row align-items-center" style="margin-top: 5px;">
    <input type="file" name="cobalt-upload-settings" id="cobalt-upload-settings" class="position-absolute"
        style="margin-left: -500rem;" onchange="switchToSubmitUploadSettings()" />
    <label for="cobalt-upload-settings" class="btn btn-primary mb-0" style="min-width: 130px;"
        id="cobalt-upload-settings-label"><?php echo $_smarty_tpl->tpl_vars['UPLOAD_SETTINGS']->value;?>
</label>
    <button type="submit" class="btn btn-success d-none" id="cobalt-upload-settings-submit"><?php echo $_smarty_tpl->tpl_vars['IU_UPLOAD']->value;?>
</button>
    <span class="ml-3"><?php echo $_smarty_tpl->tpl_vars['UPLOAD_SETTINGS_2']->value;?>
</span>
</div>
<br />
<span class="d-inline-block mb-2"><?php echo $_smarty_tpl->tpl_vars['BACKUPS']->value;?>
</span>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['backups']->value, 'backup');
$_smarty_tpl->tpl_vars['backup']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['backup']->value) {
$_smarty_tpl->tpl_vars['backup']->do_else = false;
?>

    <div class="backup-card">
        <div class="backup-name"><?php echo $_smarty_tpl->tpl_vars['SETTINGS_BACKUP_'.($_smarty_tpl->tpl_vars['backup']->value)]->value;?>
</div>
        <?php if ($_smarty_tpl->tpl_vars['SETTINGS_BACKUP_'.($_smarty_tpl->tpl_vars['backup']->value).'_VALUE']->value !== '') {?>
            <div class="backup-timestamp">
                <?php echo $_smarty_tpl->tpl_vars['CREATED']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['BACKUP_'.($_smarty_tpl->tpl_vars['backup']->value).'_TIMESTAMP_VALUE']->value;?>

            </div>
        <?php }?>
        <div class="backup-buttons text-right">
            <?php if ($_smarty_tpl->tpl_vars['SETTINGS_BACKUP_'.($_smarty_tpl->tpl_vars['backup']->value).'_VALUE']->value == '') {?>
                <input class="btn btn-primary" name="backup<?php echo $_smarty_tpl->tpl_vars['backup']->value;?>
-create-btn" type="submit" value="<?php echo $_smarty_tpl->tpl_vars['CREATE_BACKUP']->value;?>
" />
            <?php } else { ?>
                <button class="btn btn-primary mr-2" data-toggle="modal" data-target="#restore<?php echo $_smarty_tpl->tpl_vars['backup']->value;?>
Modal"
                    type="button"><?php echo $_smarty_tpl->tpl_vars['RESTORE_BACKUP']->value;?>
</button>
                <button class="btn btn-danger" data-toggle="modal" data-target="#delete<?php echo $_smarty_tpl->tpl_vars['backup']->value;?>
Modal" type="button"><i
                        class="fas fa-trash"></i></button>
            <?php }?>
        </div>
    </div>

    <div class="modal fade" id="restore<?php echo $_smarty_tpl->tpl_vars['backup']->value;?>
Modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><?php echo $_smarty_tpl->tpl_vars['RESTORE_BACKUP']->value;?>
</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php echo $_smarty_tpl->tpl_vars['RESTORE_BACKUP_2']->value;?>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['CANCEL']->value;?>
</button>
                    <button class="btn btn-primary mr-2" name="backup<?php echo $_smarty_tpl->tpl_vars['backup']->value;?>
-restore-btn"
                        type="submit"><?php echo $_smarty_tpl->tpl_vars['RESTORE_BACKUP']->value;?>
</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="delete<?php echo $_smarty_tpl->tpl_vars['backup']->value;?>
Modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><?php echo $_smarty_tpl->tpl_vars['DELETE_BACKUP']->value;?>
</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php echo $_smarty_tpl->tpl_vars['DELETE_BACKUP_2']->value;?>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['CANCEL']->value;?>
</button>
                    <button class="btn btn-primary mr-2" name="backup<?php echo $_smarty_tpl->tpl_vars['backup']->value;?>
-delete-btn"
                        type="submit"><?php echo $_smarty_tpl->tpl_vars['DELETE_BACKUP']->value;?>
</button>
                </div>
            </div>
        </div>
    </div>

<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
