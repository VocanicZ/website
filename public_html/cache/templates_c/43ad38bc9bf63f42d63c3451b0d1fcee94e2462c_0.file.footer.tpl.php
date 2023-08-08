<?php
/* Smarty version 4.3.1, created on 2023-06-04 13:17:56
  from '/home/u302265335/domains/rainbowcreation.net/public_html/custom/templates/Cobalt/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_647c2c943f2628_38977789',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '43ad38bc9bf63f42d63c3451b0d1fcee94e2462c' => 
    array (
      0 => '/home/u302265335/domains/rainbowcreation.net/public_html/custom/templates/Cobalt/footer.tpl',
      1 => 1685859472,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_647c2c943f2628_38977789 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/u302265335/domains/rainbowcreation.net/public_html/vendor/smarty/smarty/libs/plugins/modifier.count.php','function'=>'smarty_modifier_count',),));
if (((isset($_smarty_tpl->tpl_vars['COBALT_VERSION']->value)) && preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['COBALT_VERSION']->value, $tmp) > 0) && ($_smarty_tpl->tpl_vars['COBALT_VERSION']->value != $_smarty_tpl->tpl_vars['THEME_LOCAL_VERSION']->value) && ($_smarty_tpl->tpl_vars['THEME_EXT_UPDATE']->value == "yes") && ($_smarty_tpl->tpl_vars['STAFF_USER']->value == "yes") && (isset($_smarty_tpl->tpl_vars['LOGGED_IN_USER']->value)) && (isset($_smarty_tpl->tpl_vars['THEME_UPDATE_NOTIF']->value)) && ($_smarty_tpl->tpl_vars['THEME_UPDATE_NOTIF']->value == "yes") && ($_smarty_tpl->tpl_vars['COBALT_VERSION']->value != "error")) {?>
    <div class="cobalt-update-box">
        <div class="update-icon">
            <i class="fa-solid fa-triangle-exclamation"></i>
        </div>
        <div class="update-text">
            <div class="top-row">
                Cobalt <?php echo $_smarty_tpl->tpl_vars['UPDATE_AVAILABLE']->value;?>

            </div>
            <div class="bottom-row">
                <span class="current"><?php echo $_smarty_tpl->tpl_vars['THEME_LOCAL_VERSION']->value;?>
</span> <i class="fa-solid fa-arrow-right-long"></i> <span class="new"><?php echo $_smarty_tpl->tpl_vars['COBALT_VERSION']->value;?>
</span>
            </div>
        </div>
    </div>
<?php }
if ((isset($_smarty_tpl->tpl_vars['MAINTENANCE_ENABLED']->value))) {?>
    <div class="maintenance-icon" data-toggle="tooltip" data-placement="top" title="<?php echo $_smarty_tpl->tpl_vars['MAINTENANCE_ENABLED']->value;?>
">
        <i class="fa-solid fa-triangle-exclamation"></i>
    </div>
<?php }?> 
<div class="container">
    <div class="chatbox" id="chatbox-bottom"></div>
</div>
<?php if ((isset($_smarty_tpl->tpl_vars['GLOBAL_WARNING_TITLE']->value))) {?>
<div class="modal fade show-punishment" data-keyboard="false" data-backdrop="static" id="acknowledgeModal" tabindex="-1"
    role="dialog" aria-labelledby="acknowledgeModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="acknowledgeModalLabel"><?php echo $_smarty_tpl->tpl_vars['GLOBAL_WARNING_TITLE']->value;?>
</h4>
            </div>
            <div class="modal-body">
                <?php echo $_smarty_tpl->tpl_vars['GLOBAL_WARNING_REASON']->value;?>

            </div>
            <div class="modal-footer">
                <a href="<?php echo $_smarty_tpl->tpl_vars['GLOBAL_WARNING_ACKNOWLEDGE_LINK']->value;?>
" class="btn btn-theme"><?php echo $_smarty_tpl->tpl_vars['GLOBAL_WARNING_ACKNOWLEDGE']->value;?>
</a>
            </div>
        </div>
    </div>
</div>
<?php }?>
<div class="footer-spacer"></div>
<?php if ((isset($_smarty_tpl->tpl_vars['THEME_FOOTER_SIZE']->value)) && $_smarty_tpl->tpl_vars['THEME_FOOTER_SIZE']->value == 'large') {?>
<div class="footer large-footer">
    <div class="top-section">

        <div class="container">
            <div class="row">
                <div class="col-lg-4 footer-col footer-about">
                    <div class="footer-text-header"><?php echo $_smarty_tpl->tpl_vars['THEME_PLAY_T']->value;?>
</div>
                    <p><?php echo $_smarty_tpl->tpl_vars['THEME_PLAY_D']->value;?>
</p>
                    <?php if ((isset($_smarty_tpl->tpl_vars['THEME_PLAY_B']->value)) && $_smarty_tpl->tpl_vars['THEME_PLAY_B']->value == 'yes') {?>
                        <button class="btn btn-play" onclick="copyToClipboard('#play-ip')" data-toggle="tooltip"
                            title="<?php echo $_smarty_tpl->tpl_vars['COPY']->value;?>
"><span id="play-ip"><?php echo $_smarty_tpl->tpl_vars['THEME_MC_SERVER']->value;?>
</span> <i class="fa-solid fa-angles-right"></i></button>
                    <?php }?>
                </div>
                <div class="col-lg-4 footer-col">
                    <div class="footer-text-header"><?php echo $_smarty_tpl->tpl_vars['FOOTER_LINKS']->value;?>
</div>
                    <a class="footer-link terms-link" href="<?php echo $_smarty_tpl->tpl_vars['TERMS_LINK']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['TERMS_TEXT']->value;?>
</a>
                    <a class="footer-link privacy-policy-link" href="<?php echo $_smarty_tpl->tpl_vars['PRIVACY_LINK']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['PRIVACY_TEXT']->value;?>
</a>
                    <?php if (!$_smarty_tpl->tpl_vars['LOGGED_IN_USER']->value) {?>
                        <a class="footer-link" href="javascript:" onclick="toggleAutoLanguage()" id="auto-language"></a>
                    <?php }?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FOOTER_NAVIGATION']->value, 'item', false, 'name');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?> <?php if ((isset($_smarty_tpl->tpl_vars['item']->value['items']))) {?>
                    <a class="dropdown-toggle footer-link" data-toggle="dropdown" href="#" role="button"
                        aria-haspopup="true" aria-expanded="false"><?php echo $_smarty_tpl->tpl_vars['item']->value['icon'];?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a>
                    <div class="dropdown-menu">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['items'], 'dropdown');
$_smarty_tpl->tpl_vars['dropdown']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['dropdown']->value) {
$_smarty_tpl->tpl_vars['dropdown']->do_else = false;
?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['dropdown']->value['link'];?>
" target="<?php echo $_smarty_tpl->tpl_vars['dropdown']->value['target'];?>
"><?php echo $_smarty_tpl->tpl_vars['dropdown']->value['icon'];?>
 <?php echo $_smarty_tpl->tpl_vars['dropdown']->value['title'];?>
</a>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                    <?php } else { ?>
                    <a class="footer-link" href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
" target="<?php echo $_smarty_tpl->tpl_vars['item']->value['target'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['icon'];?>

                        <?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a> <?php }?> <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
                <div class="col-lg-4 footer-col">
                    <div class="footer-text-header"><?php echo $_smarty_tpl->tpl_vars['THEME_OTHER_T']->value;?>
</div>
                    <p><?php echo $_smarty_tpl->tpl_vars['THEME_OTHER_D']->value;?>
</p>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['THEME_OTHER_BL']->value;?>
" class="btn btn-theme other-btn"><?php echo $_smarty_tpl->tpl_vars['THEME_OTHER_BT']->value;
if ((isset($_smarty_tpl->tpl_vars['THEME_OTHER_BI']->value)) && preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['THEME_OTHER_BI']->value, $tmp) > 0) {?> <?php echo $_smarty_tpl->tpl_vars['THEME_OTHER_BI']->value;
}?></a>
                </div>
            </div>
        </div>
    </div>

    <div class="bottom-bar">
        <div class="container">
            <div class="footer-copyright">
                <span class="copyright-txt"><i class="fa-solid fa-copyright"></i> <?php echo date('Y');?>
 <span class="site"><?php echo $_smarty_tpl->tpl_vars['SITE_NAME']->value;?>
</span></span>
                <?php if ((smarty_modifier_count($_smarty_tpl->tpl_vars['SOCIAL_MEDIA_ICONS']->value) > 0) || $_smarty_tpl->tpl_vars['PAGE_LOAD_TIME']->value) {?>
                <div class="icon-box">
                    <?php if ($_smarty_tpl->tpl_vars['PAGE_LOAD_TIME']->value) {?>
                    <a class="icon" href="#" onClick="return false;" data-toggle="tooltip" id="page_load_tooltip"
                        title="Page loading.."><i class="fa-solid fa-gauge-high"></i></a>
                    <?php }?>
                    <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['SOCIAL_MEDIA_ICONS']->value) > 0) {?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SOCIAL_MEDIA_ICONS']->value, 'icon');
$_smarty_tpl->tpl_vars['icon']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['icon']->value) {
$_smarty_tpl->tpl_vars['icon']->do_else = false;
?>
                    <a class="icon" href="<?php echo $_smarty_tpl->tpl_vars['icon']->value['link'];?>
" target="_blank"><i id="social-<?php echo $_smarty_tpl->tpl_vars['icon']->value['short'];?>
" class="fa-brands fa-<?php echo $_smarty_tpl->tpl_vars['icon']->value['long'];?>
"></i></a>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php }?>
                </div>
                <?php }?>
            </div>
            
        </div>
    </div>

</div>

<?php } else { ?>

<div class="footer small-footer">
    <div class="small-section">
        <div class="container d-flex">
            <div class="footer-copyright flex-grow-1">
                <span class="copyright-txt"><i class="fa-solid fa-copyright"></i> <?php echo date('Y');?>
 <?php echo $_smarty_tpl->tpl_vars['SITE_NAME']->value;?>
</span>
                <?php if ((smarty_modifier_count($_smarty_tpl->tpl_vars['SOCIAL_MEDIA_ICONS']->value) > 0) || $_smarty_tpl->tpl_vars['PAGE_LOAD_TIME']->value) {?>
                <div class="icon-box">
                    <?php if ($_smarty_tpl->tpl_vars['PAGE_LOAD_TIME']->value) {?>
                    <a class="icon" href="#" onClick="return false;" data-toggle="tooltip" id="page_load_tooltip"
                        title="Page loading.."><i class="fa-solid fa-gauge-high"></i></a>
                    <?php }?>
                    <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['SOCIAL_MEDIA_ICONS']->value) > 0) {?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SOCIAL_MEDIA_ICONS']->value, 'icon');
$_smarty_tpl->tpl_vars['icon']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['icon']->value) {
$_smarty_tpl->tpl_vars['icon']->do_else = false;
?>
                    <a class="icon" href="<?php echo $_smarty_tpl->tpl_vars['icon']->value['link'];?>
" target="_blank"><i id="social-<?php echo $_smarty_tpl->tpl_vars['icon']->value['short'];?>
" class="fa-brands fa-<?php echo $_smarty_tpl->tpl_vars['icon']->value['long'];?>
"></i></a>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php }?>
                </div>
                <?php }?>
            </div>
            <div class="right">
                <a class="footer-link terms-link" href="<?php echo $_smarty_tpl->tpl_vars['TERMS_LINK']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['TERMS_TEXT']->value;?>
</a>
                <a class="footer-link privacy-policy-link" href="<?php echo $_smarty_tpl->tpl_vars['PRIVACY_LINK']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['PRIVACY_TEXT']->value;?>
</a>
                <?php if (!$_smarty_tpl->tpl_vars['LOGGED_IN_USER']->value) {?>
                    <a class="footer-link" href="javascript:" onclick="toggleAutoLanguage()" id="auto-language"></a>
                <?php }?>
                
            </div>
        </div>
    </div>
</div>

<?php }?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['TEMPLATE_JS']->value, 'script');
$_smarty_tpl->tpl_vars['script']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['script']->value) {
$_smarty_tpl->tpl_vars['script']->do_else = false;
echo $_smarty_tpl->tpl_vars['script']->value;?>

<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if ((isset($_smarty_tpl->tpl_vars['THEME_CUSTOM_JS_SCRIPTS']->value)) && preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['THEME_CUSTOM_JS_SCRIPTS']->value, $tmp) > 0) {
echo $_smarty_tpl->tpl_vars['THEME_CUSTOM_JS_SCRIPTS']->value;?>

<?php }
if ((isset($_smarty_tpl->tpl_vars['THEME_CUSTOM_JS']->value)) && preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['THEME_CUSTOM_JS']->value, $tmp) > 0) {
echo '<script'; ?>
>
    <?php echo $_smarty_tpl->tpl_vars['THEME_CUSTOM_JS']->value;?>

<?php echo '</script'; ?>
>
<?php }
if ((isset($_smarty_tpl->tpl_vars['NEW_UPDATE']->value))) {
if ($_smarty_tpl->tpl_vars['NEW_UPDATE_URGENT']->value != true) {
echo '<script'; ?>
>
    $(document).ready(function () {
        $('#closeUpdate').click(function (event) {
            event.preventDefault();
            let expiry = new Date();
            let length = 3600000;
            expiry.setTime(expiry.getTime() + length);
            $.cookie('update-alert-closed', 'true', {
                path: '/',
                expires: expiry
            });
        });
        if ($.cookie('update-alert-closed') === 'true') {
            $('#updateAlert').hide();
        }
    });
<?php echo '</script'; ?>
>
<?php }
}?>

<?php if (!$_smarty_tpl->tpl_vars['LOGGED_IN_USER']->value) {
echo '<script'; ?>
>
const autoLanguage = document.getElementById('auto-language');
const autoLanguageValue = $.cookie('auto_language') ?? 'true';
autoLanguage.innerText = '<?php echo $_smarty_tpl->tpl_vars['AUTO_LANGUAGE_TEXT']->value;?>
 (' + (autoLanguageValue === 'true' ? '<?php echo $_smarty_tpl->tpl_vars['ENABLED']->value;?>
' : '<?php echo $_smarty_tpl->tpl_vars['DISABLED']->value;?>
') + ')';
function toggleAutoLanguage() {
  $.cookie(
          'auto_language',
          autoLanguageValue === 'true' ? 'false' : 'true',
          { path: '/' }
  );
  window.location.reload();
}
<?php echo '</script'; ?>
>
<?php }?>

<?php echo $_smarty_tpl->tpl_vars['INSTANT_PAGE_SCRIPT']->value;?>


<?php if ((isset($_smarty_tpl->tpl_vars['DEBUGBAR_HTML']->value))) {?>
    <?php echo $_smarty_tpl->tpl_vars['DEBUGBAR_HTML']->value;?>

<?php }?>

<?php if (!(isset($_smarty_tpl->tpl_vars['EXCLUDE_END_BODY']->value))) {?>
  </body>
  </html>
<?php }
}
}
