<?php
/* Smarty version 4.3.1, created on 2023-06-01 09:02:14
  from '/home/u302265335/domains/rainbowcreation.net/public_html/custom/panel_templates/Default/store/products.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6477fc26763ad4_20510682',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '17a78f599c060258320dc526e4e101f8d292d2f2' => 
    array (
      0 => '/home/u302265335/domains/rainbowcreation.net/public_html/custom/panel_templates/Default/store/products.tpl',
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
function content_6477fc26763ad4_20510682 (Smarty_Internal_Template $_smarty_tpl) {
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

                        <span class="float-md-right">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['NEW_CATEGORY_LINK']->value;?>
" class="btn btn-primary"><i class="fa fa-plus-circle"></i> <?php echo $_smarty_tpl->tpl_vars['NEW_CATEGORY']->value;?>
</a>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['NEW_PRODUCT_LINK']->value;?>
" class="btn btn-primary"><i class="fa fa-plus-circle"></i> <?php echo $_smarty_tpl->tpl_vars['NEW_PRODUCT']->value;?>
</a>
                        </span>

                        </br>
                        </br>

                        <!-- Success and Error Alerts -->
                        <?php $_smarty_tpl->_subTemplateRender('file:includes/alerts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                        <?php if ((isset($_smarty_tpl->tpl_vars['NO_PRODUCTS']->value))) {?>
                            <p><?php echo $_smarty_tpl->tpl_vars['NO_PRODUCTS']->value;?>
</p>
                        <?php } else { ?>
                            <div class="sortableCategories">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ALL_CATEGORIES']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
                                <div class="card card-default" data-id="<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
">
                                    <div class="card-header">
                                        <strong><?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
</strong>
                                        <div class="float-md-right">
                                            <div class="btn btn-secondary btn-sm"><i class="fas fa-arrows-alt"></i></div>
                                            <a class="btn btn-warning btn-sm" href="<?php echo $_smarty_tpl->tpl_vars['category']->value['edit_link'];?>
"><i class="fas fa-pencil-alt"></i></a>
                                            <button class="btn btn-danger btn-sm" type="button" onclick="showDeleteCategoryModal('<?php echo $_smarty_tpl->tpl_vars['category']->value['delete_link'];?>
')"><i class="fas fa-trash fa-fw"></i></button>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <tbody class="sortableProducts" data-id="<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
">
                                            <?php if (count($_smarty_tpl->tpl_vars['category']->value['products'])) {?>
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['category']->value['products'], 'product', false, NULL, 'product_loop', array (
));
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                                                    <tr data-id="<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
">
                                                        <td width="45%" style="padding-left: 35px"><?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
 <small><?php echo $_smarty_tpl->tpl_vars['product']->value['id_x'];?>
</small></td>
                                                        <td width="15%"><center><?php echo $_smarty_tpl->tpl_vars['product']->value['price_format'];?>
</center></td>
                                                        <td width="40%" style="padding-right: 1.25rem">
                                                            <?php if ((isset($_smarty_tpl->tpl_vars['product']->value['edit_link']))) {?>
                                                                <div class="float-md-right">
                                                                    <div class="btn btn-secondary btn-sm"><i class="fas fa-arrows-alt"></i></div>
                                                                    <a class="btn btn-warning btn-sm" href="<?php echo $_smarty_tpl->tpl_vars['product']->value['edit_link'];?>
"><i class="fas fa-pencil-alt"></i></a>
                                                                    <button class="btn btn-danger btn-sm" type="button" onclick="showDeleteProductModal('<?php echo $_smarty_tpl->tpl_vars['product']->value['delete_link'];?>
')"><i class="fas fa-trash fa-fw"></i></button>
                                                                </div>
                                                            <?php }?>
                                                        </td>
                                                    </tr>
                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            <?php }?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </div>
                        <?php }?>

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

<div class="modal fade" id="deleteCategoryModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><?php echo $_smarty_tpl->tpl_vars['ARE_YOU_SURE']->value;?>
</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php echo $_smarty_tpl->tpl_vars['CONFIRM_DELETE_CATEGORY']->value;?>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['NO']->value;?>
</button>
                <a href="#" id="deleteCategoryLink" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['YES']->value;?>
</a>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="deleteProductModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><?php echo $_smarty_tpl->tpl_vars['ARE_YOU_SURE']->value;?>
</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php echo $_smarty_tpl->tpl_vars['CONFIRM_DELETE_PRODUCT']->value;?>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['NO']->value;?>
</button>
                <a href="#" id="deleteProductLink" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['YES']->value;?>
</a>
            </div>
        </div>
    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:scripts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
 type="text/javascript">
    function showDeleteCategoryModal(id){
        $('#deleteCategoryLink').attr('href', id);
        $('#deleteCategoryModal').modal().show();
    }
    function showDeleteProductModal(id){
        $('#deleteProductLink').attr('href', id);
        $('#deleteProductModal').modal().show();
    }

    // Draggable functionality
    $(document).ready(function () {
        $('.sortableCategories').each(function() {
            $(this).sortable({
                start: function(event, ui) {
                    const start_pos = ui.item.index();
                    ui.item.data('startPos', start_pos);
                },
                update: function(event, ui) {
                    const categories = $(event.target).children();
                    const toSubmit = [];
                    categories.each(function() {
                        toSubmit.push($(this).data().id);
                    });

                    const data = new URLSearchParams();
                    data.append("token", "<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
");
                    data.append("categories", JSON.stringify(toSubmit));

                    fetch("<?php echo $_smarty_tpl->tpl_vars['REORDER_CATEGORY_URL']->value;?>
", {
                        method: 'POST',
                        body: data
                    }).catch((err) => console.log(err));
                }
            })
        })

        $('.sortableProducts').each(function() {
            $(this).sortable({
                start: function(event, ui) {
                    const start_pos = ui.item.index();
                    ui.item.data('startPos', start_pos);
                },
                update: function(event, ui) {
                    const products = $(event.target).children();
                    const toSubmit = [];
                    products.each(function() {
                        toSubmit.push($(this).data().id);
                    });

                    const data = new URLSearchParams();
                    data.append("token", "<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
");
                    data.append("products", JSON.stringify(toSubmit));

                    fetch('<?php echo $_smarty_tpl->tpl_vars['REORDER_PRODUCTS_URL']->value;?>
', {
                        method: 'POST',
                        body: data
                    }).catch((err) => console.log(err));
                }
            })
        })
    })
<?php echo '</script'; ?>
>

</body>
</html>
<?php }
}
