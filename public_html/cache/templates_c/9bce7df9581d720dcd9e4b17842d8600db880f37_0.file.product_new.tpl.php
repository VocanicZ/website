<?php
/* Smarty version 4.3.1, created on 2023-06-01 09:02:16
  from '/home/u302265335/domains/rainbowcreation.net/public_html/custom/panel_templates/Default/store/product_new.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6477fc28c4ba47_99288910',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9bce7df9581d720dcd9e4b17842d8600db880f37' => 
    array (
      0 => '/home/u302265335/domains/rainbowcreation.net/public_html/custom/panel_templates/Default/store/product_new.tpl',
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
function content_6477fc28c4ba47_99288910 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <h1 class="h3 mb-0 text-gray-800"><?php echo $_smarty_tpl->tpl_vars['PRODUCTS']->value;?>
</h1>
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo $_smarty_tpl->tpl_vars['PANEL_INDEX']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['DASHBOARD']->value;?>
</a></li>
                        <li class="breadcrumb-item active"><?php echo $_smarty_tpl->tpl_vars['STORE']->value;?>
</li>
                        <li class="breadcrumb-item active"><?php echo $_smarty_tpl->tpl_vars['PRODUCTS']->value;?>
</li>
                    </ol>
                </div>

                <!-- Update Notification -->
                <?php $_smarty_tpl->_subTemplateRender('file:includes/update.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                <div class="card shadow mb-4">
                    <div class="card-body">
                        <h5 style="display:inline"><?php echo $_smarty_tpl->tpl_vars['PRODUCT_TITLE']->value;?>
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
                                <label for="InputName"><?php echo $_smarty_tpl->tpl_vars['PRODUCT_NAME']->value;?>
</label>
                                <input type="text" name="name" class="form-control" id="InputName" value="<?php echo $_smarty_tpl->tpl_vars['PRODUCT_NAME_VALUE']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['PRODUCT_NAME']->value;?>
" required>
                            </div>
                            <div class="form-group">
                                <label for="inputDescription"><?php echo $_smarty_tpl->tpl_vars['PRODUCT_DESCRIPTION']->value;?>
</label>
                                <textarea id="inputDescription" name="description"><?php echo $_smarty_tpl->tpl_vars['PRODUCT_DESCRIPTION_VALUE']->value;?>
</textarea>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="inputPrice"><?php echo $_smarty_tpl->tpl_vars['PRICE']->value;?>
</label>
                                        <div class="input-group">
                                            <input type="number" name="price" class="form-control" id="inputPrice" step="0.01" min="0.00" value="<?php echo $_smarty_tpl->tpl_vars['PRODUCT_PRICE_VALUE']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['PRICE']->value;?>
" required>
                                            <div class="input-group-append">
                                                <span class="input-group-text"><?php echo $_smarty_tpl->tpl_vars['CURRENCY']->value;?>
</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputCategory"><?php echo $_smarty_tpl->tpl_vars['CATEGORY']->value;?>
</label>
                                        <select name="category" class="form-control" id="inputCategory" required>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CATEGORY_LIST']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
" <?php ob_start();
echo $_smarty_tpl->tpl_vars['category']->value['id'];
$_prefixVariable1 = ob_get_clean();
if ($_smarty_tpl->tpl_vars['PRODUCT_CATEGORY_VALUE']->value == $_prefixVariable1) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
</option>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="inputConnections"><?php echo $_smarty_tpl->tpl_vars['CONNECTIONS']->value;?>
</label> <span
                                            class="badge badge-info"><i class="fas fa-question-circle"
                                                    data-container="body" data-toggle="popover"
                                                    data-placement="top" title="Info"
                                                    data-content="Each action will be executed on these connections unless the action override it"></i></span>
                                        <select name="connections[]" id="inputConnections" class="form-control" multiple>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CONNECTIONS_LIST']->value, 'connection');
$_smarty_tpl->tpl_vars['connection']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['connection']->value) {
$_smarty_tpl->tpl_vars['connection']->do_else = false;
?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['connection']->value['id'];?>
"<?php if ($_smarty_tpl->tpl_vars['connection']->value['selected']) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['connection']->value['name'];?>
</option>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputFields"><?php echo $_smarty_tpl->tpl_vars['FIELDS']->value;?>
</label> <span
                                            class="badge badge-info"><i class="fas fa-question-circle"
                                                    data-container="body" data-toggle="popover"
                                                    data-placement="top" title="Info"
                                                    data-content="Customer will be requested to fill in these fields on checkout, Those can be used as command placeholders"></i></span>
                                        <select name="fields[]" id="inputFields" class="form-control" multiple>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FIELDS_LIST']->value, 'field');
$_smarty_tpl->tpl_vars['field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->do_else = false;
?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['field']->value['id'];?>
"<?php if ($_smarty_tpl->tpl_vars['field']->value['selected']) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['field']->value['identifier'];?>
</option>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group custom-control custom-switch">
                                <input id="inputHidden" name="hidden" type="checkbox" class="custom-control-input"<?php if ($_smarty_tpl->tpl_vars['HIDE_PRODUCT_VALUE']->value == 1) {?> checked<?php }?> />
                                <label class="custom-control-label" for="inputHidden"><?php echo $_smarty_tpl->tpl_vars['HIDE_PRODUCT']->value;?>
</label>
                            </div>
                            <div class="form-group custom-control custom-switch">
                                <input id="inputDisabled" name="disabled" type="checkbox" class="custom-control-input"<?php if ($_smarty_tpl->tpl_vars['DISABLE_PRODUCT_VALUE']->value == 1) {?> checked<?php }?> />
                                <label class="custom-control-label" for="inputDisabled"><?php echo $_smarty_tpl->tpl_vars['DISABLE_PRODUCT']->value;?>
</label>
                            </div>
                            <div class="form-group">
                                <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                                <input type="hidden" name="type" value="settings">
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

<?php echo '<script'; ?>
 type="text/javascript">
    $(document).ready(() => {
        $('#inputConnections').select2({ placeholder: "No connections selected" });
    })
    
    $(document).ready(() => {
        $('#inputFields').select2({ placeholder: "No fields selected" });
    })
<?php echo '</script'; ?>
>

</body>
</html><?php }
}
