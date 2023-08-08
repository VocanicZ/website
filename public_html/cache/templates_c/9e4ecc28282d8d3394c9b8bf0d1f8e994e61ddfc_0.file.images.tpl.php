<?php
/* Smarty version 4.3.1, created on 2023-06-01 08:26:27
  from '/home/u302265335/domains/rainbowcreation.net/public_html/custom/panel_templates/Default/core/images.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6477f3c32271e8_95331497',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9e4ecc28282d8d3394c9b8bf0d1f8e994e61ddfc' => 
    array (
      0 => '/home/u302265335/domains/rainbowcreation.net/public_html/custom/panel_templates/Default/core/images.tpl',
      1 => 1685579651,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:sidebar.tpl' => 1,
    'file:navbar.tpl' => 1,
    'file:includes/update.tpl' => 1,
    'file:includes/alerts.tpl' => 1,
    'file:footer.tpl' => 1,
    'file:scripts.tpl' => 1,
  ),
),false)) {
function content_6477f3c32271e8_95331497 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body id="page-top">

    <!-- Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php $_smarty_tpl->_subTemplateRender('file:sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main content -->
            <div id="content">

                <!-- Topbar -->
                <?php $_smarty_tpl->_subTemplateRender('file:navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800"><?php echo $_smarty_tpl->tpl_vars['IMAGES']->value;?>
</h1>
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?php echo $_smarty_tpl->tpl_vars['PANEL_INDEX']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['DASHBOARD']->value;?>
</a></li>
                            <li class="breadcrumb-item active"><?php echo $_smarty_tpl->tpl_vars['LAYOUT']->value;?>
</li>
                            <li class="breadcrumb-item active"><?php echo $_smarty_tpl->tpl_vars['IMAGES']->value;?>
</li>
                        </ol>
                    </div>

                    <!-- Update Notification -->
                    <?php $_smarty_tpl->_subTemplateRender('file:includes/update.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                    <div class="card shadow mb-4">
                        <div class="card-body">

                            <!-- Success and Error Alerts -->
                            <?php $_smarty_tpl->_subTemplateRender('file:includes/alerts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                            <?php if ((isset($_smarty_tpl->tpl_vars['BACKGROUNDS_NOT_WRITABLE']->value)) || (isset($_smarty_tpl->tpl_vars['TEMPLATE_BANNERS_DIRECTORY_NOT_WRITABLE']->value)) || (isset($_smarty_tpl->tpl_vars['LOGOS_DIRECTORY_NOT_WRITABLE']->value)) || (isset($_smarty_tpl->tpl_vars['FAVICONS_DIRECTORY_NOT_WRITABLE']->value)) || (isset($_smarty_tpl->tpl_vars['OG_IMAGES_DIRECTORY_NOT_WRITABLE']->value))) {?>
                                <div class="alert alert-danger alert-dismissible">
                                    <h5><i class="icon fas fa-exclamation-triangle"></i> <?php echo $_smarty_tpl->tpl_vars['ERRORS_TITLE']->value;?>
</h5>
                                    <ul>
                                        <?php if ((isset($_smarty_tpl->tpl_vars['BACKGROUNDS_NOT_WRITABLE']->value))) {?>
                                            <li><?php echo $_smarty_tpl->tpl_vars['BACKGROUNDS_NOT_WRITABLE']->value;?>
</li>
                                        <?php }?>

                                        <?php if ((isset($_smarty_tpl->tpl_vars['TEMPLATE_BANNERS_DIRECTORY_NOT_WRITABLE']->value))) {?>
                                            <li><?php echo $_smarty_tpl->tpl_vars['TEMPLATE_BANNERS_DIRECTORY_NOT_WRITABLE']->value;?>
</li>
                                        <?php }?>

                                        <?php if ((isset($_smarty_tpl->tpl_vars['LOGOS_DIRECTORY_NOT_WRITABLE']->value))) {?>
                                            <li><?php echo $_smarty_tpl->tpl_vars['LOGOS_DIRECTORY_NOT_WRITABLE']->value;?>
</li>
                                        <?php }?>

                                        <?php if ((isset($_smarty_tpl->tpl_vars['FAVICONS_DIRECTORY_NOT_WRITABLE']->value))) {?>
                                            <li><?php echo $_smarty_tpl->tpl_vars['FAVICONS_DIRECTORY_NOT_WRITABLE']->value;?>
</li>
                                        <?php }?>

                                        <?php if ((isset($_smarty_tpl->tpl_vars['OG_IMAGES_DIRECTORY_NOT_WRITABLE']->value))) {?>
                                            <li><?php echo $_smarty_tpl->tpl_vars['OG_IMAGES_DIRECTORY_NOT_WRITABLE']->value;?>
</li>
                                        <?php }?>
                                    </ul>
                                </div>
                            <?php }?>

                            <p><?php echo $_smarty_tpl->tpl_vars['BANNER_IMAGE']->value;?>
</p>

                            <form action="" method="post" style="display:inline;">
                                <select name="banner" class="image-picker show-html">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['BANNER_IMAGES_ARRAY']->value, 'image');
$_smarty_tpl->tpl_vars['image']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->do_else = false;
?>
                                        <option data-img-src="<?php echo $_smarty_tpl->tpl_vars['image']->value['src'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['image']->value['value'];?>
" <?php if ($_smarty_tpl->tpl_vars['image']->value['selected']) {?>selected<?php }?>>
                                            <?php echo $_smarty_tpl->tpl_vars['image']->value['n'];?>

                                        </option>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </select>
                                <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                                <input type="submit" class="btn btn-primary" value="<?php echo $_smarty_tpl->tpl_vars['SUBMIT']->value;?>
">
                            </form>

                            <a href="<?php echo $_smarty_tpl->tpl_vars['RESET_BANNER_LINK']->value;?>
" class="btn btn-danger"><?php echo $_smarty_tpl->tpl_vars['RESET_BANNER']->value;?>
</a>
                            <button class="btn btn-info" data-toggle="modal" data-target="#uploadBannerModal"><?php echo $_smarty_tpl->tpl_vars['UPLOAD_NEW_IMAGE']->value;?>
</button>

                            <hr />

                            <p><?php echo $_smarty_tpl->tpl_vars['LOGO_IMAGE']->value;?>
</p>

                            <form action="" method="post" style="display:inline;">
                                <select name="logo" class="image-picker show-html">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LOGO_IMAGES_ARRAY']->value, 'image');
$_smarty_tpl->tpl_vars['image']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->do_else = false;
?>
                                        <option data-img-src="<?php echo $_smarty_tpl->tpl_vars['image']->value['src'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['image']->value['value'];?>
" <?php if ($_smarty_tpl->tpl_vars['image']->value['selected']) {?>selected<?php }?>>
                                            <?php echo $_smarty_tpl->tpl_vars['image']->value['n'];?>

                                        </option>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </select>
                                <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                                <input type="submit" class="btn btn-primary" value="<?php echo $_smarty_tpl->tpl_vars['SUBMIT']->value;?>
">
                            </form>

                            <a href="<?php echo $_smarty_tpl->tpl_vars['RESET_LOGO_LINK']->value;?>
" class="btn btn-danger"><?php echo $_smarty_tpl->tpl_vars['RESET_LOGO']->value;?>
</a>
                            <button class="btn btn-info" data-toggle="modal" data-target="#uploadLogoModal"><?php echo $_smarty_tpl->tpl_vars['UPLOAD_NEW_IMAGE']->value;?>
</button>

                            <hr />

                            <p><?php echo $_smarty_tpl->tpl_vars['FAVICON_IMAGE']->value;?>
</p>

                            <form action="" method="post" style="display:inline;">
                                <select name="favicon" class="image-picker show-html">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FAVICON_IMAGES_ARRAY']->value, 'image');
$_smarty_tpl->tpl_vars['image']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->do_else = false;
?>
                                        <option data-img-src="<?php echo $_smarty_tpl->tpl_vars['image']->value['src'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['image']->value['value'];?>
" <?php if ($_smarty_tpl->tpl_vars['image']->value['selected']) {?>selected<?php }?>>
                                            <?php echo $_smarty_tpl->tpl_vars['image']->value['n'];?>

                                        </option>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </select>
                                <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                                <input type="submit" class="btn btn-primary" value="<?php echo $_smarty_tpl->tpl_vars['SUBMIT']->value;?>
">
                            </form>

                            <a href="<?php echo $_smarty_tpl->tpl_vars['RESET_FAVICON_LINK']->value;?>
" class="btn btn-danger"><?php echo $_smarty_tpl->tpl_vars['RESET_FAVICON']->value;?>
</a>
                            <button class="btn btn-info" data-toggle="modal" data-target="#uploadFaviconModal"><?php echo $_smarty_tpl->tpl_vars['UPLOAD_NEW_IMAGE']->value;?>
</button>

                            <hr />

                            <p><?php echo $_smarty_tpl->tpl_vars['FALLBACK_OG_IMAGE']->value;?>
</p>

                            <form action="" method="post" style="display:inline;">
                                <select name="og_image" class="image-picker show-html">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['OG_IMAGES_ARRAY']->value, 'image');
$_smarty_tpl->tpl_vars['image']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->do_else = false;
?>
                                        <option data-img-src="<?php echo $_smarty_tpl->tpl_vars['image']->value['src'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['image']->value['value'];?>
" <?php if ($_smarty_tpl->tpl_vars['image']->value['selected']) {?>selected<?php }?>>
                                            <?php echo $_smarty_tpl->tpl_vars['image']->value['n'];?>

                                        </option>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </select>
                                <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                                <input type="submit" class="btn btn-primary" value="<?php echo $_smarty_tpl->tpl_vars['SUBMIT']->value;?>
">
                            </form>

                            <a href="<?php echo $_smarty_tpl->tpl_vars['RESET_OG_IMAGE_LINK']->value;?>
" class="btn btn-danger"><?php echo $_smarty_tpl->tpl_vars['RESET_OG_IMAGE']->value;?>
</a>
                            <button class="btn btn-info" data-toggle="modal" data-target="#uploadOgImageModal"><?php echo $_smarty_tpl->tpl_vars['UPLOAD_NEW_IMAGE']->value;?>
</button>

                        </div>
                    </div>

                    <!-- Spacing -->
                    <div style="height:1rem;"></div>

                    <!-- End Page Content -->
                </div>

                <!-- End Main Content -->
            </div>

            <?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <!-- End Content Wrapper -->
        </div>

        <div class="modal fade" id="uploadModal" tabindex="-1" role="dialog" aria-labelledby="uploadModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="uploadModalLabel"><?php echo $_smarty_tpl->tpl_vars['UPLOAD_NEW_IMAGE']->value;?>
</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="<?php echo $_smarty_tpl->tpl_vars['CLOSE']->value;?>
" onclick="location.reload();">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- Upload modal -->
                        <form action="<?php echo $_smarty_tpl->tpl_vars['UPLOAD_PATH']->value;?>
" class="dropzone" id="uploadBackgroundDropzone">
                            <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                            <input type="hidden" name="type" value="background">
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" onclick="location.reload();" data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['CLOSE']->value;?>
</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="uploadBannerModal" tabindex="-1" role="dialog" aria-labelledby="uploadBannerModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="uploadBannerModalLabel"><?php echo $_smarty_tpl->tpl_vars['UPLOAD_NEW_IMAGE']->value;?>
</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="<?php echo $_smarty_tpl->tpl_vars['CLOSE']->value;?>
" onclick="location.reload();">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- Upload modal -->
                        <form action="<?php echo $_smarty_tpl->tpl_vars['UPLOAD_PATH']->value;?>
" class="dropzone" id="uploadBannerDropzone">
                            <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                            <input type="hidden" name="type" value="template_banner">
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" onclick="location.reload();" data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['CLOSE']->value;?>
</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="uploadLogoModal" tabindex="-1" role="dialog" aria-labelledby="uploadLogoModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="uploadLogoModalLabel"><?php echo $_smarty_tpl->tpl_vars['UPLOAD_NEW_IMAGE']->value;?>
</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="<?php echo $_smarty_tpl->tpl_vars['CLOSE']->value;?>
" onclick="location.reload();">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- Upload modal -->
                        <form action="<?php echo $_smarty_tpl->tpl_vars['UPLOAD_PATH']->value;?>
" class="dropzone" id="uploadLogoDropzone">
                            <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                            <input type="hidden" name="type" value="logo">
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" onclick="location.reload();" data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['CLOSE']->value;?>
</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="uploadFaviconModal" tabindex="-1" role="dialog" aria-labelledby="uploadFaviconModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="uploadFaviconModalLabel"><?php echo $_smarty_tpl->tpl_vars['UPLOAD_NEW_IMAGE']->value;?>
</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="<?php echo $_smarty_tpl->tpl_vars['CLOSE']->value;?>
" onclick="location.reload();">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- Upload modal -->
                        <form action="<?php echo $_smarty_tpl->tpl_vars['UPLOAD_PATH']->value;?>
" class="dropzone" id="uploadFaviconDropzone">
                            <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                            <input type="hidden" name="type" value="favicon">
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" onclick="location.reload();" data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['CLOSE']->value;?>
</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="uploadOgImageModal" tabindex="-1" role="dialog" aria-labelledby="uploadOgImageModal" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="uploadOgImageModalLabel"><?php echo $_smarty_tpl->tpl_vars['UPLOAD_NEW_IMAGE']->value;?>
</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="<?php echo $_smarty_tpl->tpl_vars['CLOSE']->value;?>
" onclick="location.reload();">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- Upload modal -->
                        <form action="<?php echo $_smarty_tpl->tpl_vars['UPLOAD_PATH']->value;?>
" class="dropzone" id="uploadOgImageDropzone">
                            <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                            <input type="hidden" name="type" value="og_image">
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" onclick="location.reload();" data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['CLOSE']->value;?>
</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- End Wrapper -->
    </div>

    <?php $_smarty_tpl->_subTemplateRender('file:scripts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>

</html>
<?php }
}
