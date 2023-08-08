<?php
/* Smarty version 4.3.1, created on 2023-06-01 09:04:42
  from '/home/u302265335/domains/rainbowcreation.net/public_html/custom/panel_templates/Default/store/categories_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6477fcbabe39e0_99933799',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '146e3dd812f171480e91f4e1037c30a7d4aeb57e' => 
    array (
      0 => '/home/u302265335/domains/rainbowcreation.net/public_html/custom/panel_templates/Default/store/categories_form.tpl',
      1 => 1685580583,
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
function content_6477fcbabe39e0_99933799 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <h1 class="h3 mb-0 text-gray-800"><?php echo $_smarty_tpl->tpl_vars['CATEGORIES']->value;?>
</h1>
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo $_smarty_tpl->tpl_vars['PANEL_INDEX']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['DASHBOARD']->value;?>
</a></li>
                        <li class="breadcrumb-item active"><?php echo $_smarty_tpl->tpl_vars['STORE']->value;?>
</li>
                        <li class="breadcrumb-item active"><?php echo $_smarty_tpl->tpl_vars['CATEGORIES']->value;?>
</li>
                    </ol>
                </div>

                <!-- Update Notification -->
                <?php $_smarty_tpl->_subTemplateRender('file:includes/update.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                <div class="card shadow mb-4">
                    <div class="card-body">

                        <h5 style="display:inline"><?php echo $_smarty_tpl->tpl_vars['CATEGORY_TITLE']->value;?>
</h5>
                        <div class="float-md-right">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['BACK_LINK']->value;?>
" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['BACK']->value;?>
</a>
                        </div>
                        <hr />

                        <!-- Success and Error Alerts -->
                        <?php $_smarty_tpl->_subTemplateRender('file:includes/alerts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                        <form action="" method="post">
                            <div class="form-group">
                                <label for="InputName"><?php echo $_smarty_tpl->tpl_vars['CATEGORY_NAME']->value;?>
</label>
                                <input type="text" name="name" class="form-control" id="InputName" value="<?php echo $_smarty_tpl->tpl_vars['CATEGORY_NAME_VALUE']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['CATEGORY_NAME']->value;?>
" required>
                            </div>
                            <div class="form-group">
                                <label for="inputDescription"><?php echo $_smarty_tpl->tpl_vars['CATEGORY_DESCRIPTION']->value;?>
</label>
                                <textarea id="inputDescription" name="description"><?php echo $_smarty_tpl->tpl_vars['CATEGORY_DESCRIPTION_VALUE']->value;?>
</textarea>
                            </div>
                            <div class="form-group">
                                <label for="inputParentCategory"><?php echo $_smarty_tpl->tpl_vars['PARENT_CATEGORY']->value;?>
</label>
                                <select name="parent_category" class="form-control" id="inputParentCategory" required>
                                    <option value="0" <?php if ($_smarty_tpl->tpl_vars['PARENT_CATEGORY_VALUE']->value == 0) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['NO_PARENT']->value;?>
</option>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PARENT_CATEGORY_LIST']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
" <?php ob_start();
echo $_smarty_tpl->tpl_vars['category']->value['id'];
$_prefixVariable1 = ob_get_clean();
if ($_smarty_tpl->tpl_vars['PARENT_CATEGORY_VALUE']->value == $_prefixVariable1) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
</option>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </select>
                            </div>
                            <div class="form-group custom-control custom-switch">
                                <input id="inputOnlySubCategories" name="only_subcategories" type="checkbox" class="custom-control-input"<?php if ($_smarty_tpl->tpl_vars['ONLY_SUBCATEGORIES_VALUE']->value == 1) {?> checked<?php }?> />
                                <label class="custom-control-label" for="inputOnlySubCategories"><?php echo $_smarty_tpl->tpl_vars['ONLY_SUBCATEGORIES']->value;?>
</label>
                            </div>
                            <div class="form-group custom-control custom-switch">
                                <input id="inputHidden" name="hidden" type="checkbox" class="custom-control-input"<?php if ($_smarty_tpl->tpl_vars['HIDE_CATEGORY_VALUE']->value == 1) {?> checked<?php }?> />
                                <label class="custom-control-label" for="inputHidden"><?php echo $_smarty_tpl->tpl_vars['HIDE_CATEGORY']->value;?>
</label>
                            </div>
                            <div class="form-group custom-control custom-switch">
                                <input id="inputDisabled" name="disabled" type="checkbox" class="custom-control-input"<?php if ($_smarty_tpl->tpl_vars['DISABLE_CATEGORY_VALUE']->value == 1) {?> checked<?php }?> />
                                <label class="custom-control-label" for="inputDisabled"><?php echo $_smarty_tpl->tpl_vars['DISABLE_CATEGORY']->value;?>
</label>
                            </div>
                            <div class="form-group">
                                <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                                <input type="submit" class="btn btn-primary" value="<?php echo $_smarty_tpl->tpl_vars['SUBMIT']->value;?>
">
                            </div>
                        </form>

                        <center>
                            <p>Store Module by <a href="https://partydragen.com/" target="_blank">Partydragen</a></br>
                                <a class="ml-1" href="https://partydragen.com/suggestions/" target="_blank" data-toggle="tooltip"
                                   data-placement="top" title="You can submit suggestions here"><i class="fa-solid fa-thumbs-up text-warning"></i></a>
                                <a class="ml-1" href="https://discord.gg/TtH6tpp" target="_blank" data-toggle="tooltip"
                                   data-placement="top" title="Discord"><i class="fab fa-discord fa-fw text-discord"></i></a>
                                <a class="ml-1" href="https://partydragen.com/" target="_blank" data-toggle="tooltip"
                                   data-placement="top" title="Website"><i class="fas fa-globe fa-fw text-primary"></i></a>
                                <a class="ml-1" href="https://www.patreon.com/partydragen" target="_blank" data-toggle="tooltip"
                                   data-placement="top" title="Support the development on Patreon"><i class="fas fa-heart fa-fw text-danger"></i></a>
                            </p>
                        </center>
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

    <!-- End Wrapper -->
</div>

<?php $_smarty_tpl->_subTemplateRender('file:scripts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>
</html><?php }
}
