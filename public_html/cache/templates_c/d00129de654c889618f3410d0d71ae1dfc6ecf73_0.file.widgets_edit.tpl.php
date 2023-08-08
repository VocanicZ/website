<?php
/* Smarty version 4.3.1, created on 2023-06-01 08:21:37
  from '/home/u302265335/domains/rainbowcreation.net/public_html/custom/panel_templates/Default/core/widgets_edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6477f2a1d95711_17954476',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd00129de654c889618f3410d0d71ae1dfc6ecf73' => 
    array (
      0 => '/home/u302265335/domains/rainbowcreation.net/public_html/custom/panel_templates/Default/core/widgets_edit.tpl',
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
function content_6477f2a1d95711_17954476 (Smarty_Internal_Template $_smarty_tpl) {
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
                        <h1 class="h3 mb-0 text-gray-800"><?php echo $_smarty_tpl->tpl_vars['WIDGETS']->value;?>
</h1>
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?php echo $_smarty_tpl->tpl_vars['PANEL_INDEX']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['DASHBOARD']->value;?>
</a></li>
                            <li class="breadcrumb-item active"><?php echo $_smarty_tpl->tpl_vars['LAYOUT']->value;?>
</li>
                            <li class="breadcrumb-item active"><?php echo $_smarty_tpl->tpl_vars['WIDGETS']->value;?>
</li>
                        </ol>
                    </div>

                    <!-- Update Notification -->
                    <?php $_smarty_tpl->_subTemplateRender('file:includes/update.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                    <div class="card shadow mb-4">
                        <div class="card-body">

                            <div class="row">
                                <div class="col-md-9">
                                    <h5 style="margin-top: 7px; margin-bottom: 7px;"><?php echo $_smarty_tpl->tpl_vars['EDITING_WIDGET']->value;?>
</h5>
                                </div>
                                <div class="col-md-3">
                                    <span class="float-md-right">
                                        <?php if ((isset($_smarty_tpl->tpl_vars['SETTINGS']->value))) {?><a href="<?php echo $_smarty_tpl->tpl_vars['SETTINGS_LINK']->value;?>
"
                                            class="btn btn-success"><?php echo $_smarty_tpl->tpl_vars['SETTINGS']->value;?>
</a><?php }?>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['BACK_LINK']->value;?>
" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['BACK']->value;?>
</a>
                                    </span>
                                </div>
                            </div>
                            <hr />

                            <!-- Success and Error Alerts -->
                            <?php $_smarty_tpl->_subTemplateRender('file:includes/alerts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                            <form action="" method="post">

                                <div class="form-group">
                                    <label for="inputOrder"><?php echo $_smarty_tpl->tpl_vars['WIDGET_ORDER']->value;?>
</label>
                                    <input id="inputOrder" name="order" type="number" class="form-control"
                                        value="<?php echo $_smarty_tpl->tpl_vars['ORDER']->value;?>
">
                                </div>

                                <div class="form-group">
                                    <label for="inputLocation"><?php echo $_smarty_tpl->tpl_vars['WIDGET_LOCATION']->value;?>
</label>
                                    <select name="location" class="form-control" id="inputLocation">
                                        <option value="right" <?php if ($_smarty_tpl->tpl_vars['LOCATION']->value == 'right') {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['RIGHT']->value;?>
</option>
                                        <option value="left" <?php if ($_smarty_tpl->tpl_vars['LOCATION']->value == 'left') {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['LEFT']->value;?>
</option>
                                    </select>
                                </div>

                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['POSSIBLE_PAGES']->value, 'module_pages', false, 'module');
$_smarty_tpl->tpl_vars['module_pages']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['module']->value => $_smarty_tpl->tpl_vars['module_pages']->value) {
$_smarty_tpl->tpl_vars['module_pages']->do_else = false;
?>
                                <?php if (count($_smarty_tpl->tpl_vars['module_pages']->value)) {?>
                                <div class="table table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th><?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['MODULE_SEPERATOR']->value;?>
 <?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['module']->value, ENT_QUOTES, 'UTF-8', true);?>
</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['module_pages']->value, 'value', false, 'page');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['page']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                                            <tr>
                                                <td>
                                                    <label for="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['page']->value, ENT_QUOTES, 'UTF-8', true);?>
"
                                                        style="font-weight: normal;"><?php echo ucfirst((htmlspecialchars((string)$_smarty_tpl->tpl_vars['page']->value, ENT_QUOTES, 'UTF-8', true)));?>
</label>
                                                    <div class="float-md-right">
                                                        <div class="form-group custom-control custom-switch">
                                                            <input id="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['page']->value, ENT_QUOTES, 'UTF-8', true);?>
" type="checkbox" name="pages[]"
                                                                class="custom-control-input" value="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['page']->value, ENT_QUOTES, 'UTF-8', true);?>
" <?php if (in_array($_smarty_tpl->tpl_vars['page']->value,$_smarty_tpl->tpl_vars['ACTIVE_PAGES']->value)) {?> checked<?php }?>>
                                                            <label for="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['page']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="custom-control-label">
                                                                <?php echo $_smarty_tpl->tpl_vars['TWITTER_STYLE']->value;?>

                                                            </label>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </tbody>
                                    </table>
                                </div>
                                <?php }?>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                                <div class="form-group">
                                    <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                                    <input type="submit" class="btn btn-primary" value="<?php echo $_smarty_tpl->tpl_vars['SUBMIT']->value;?>
">
                                </div>
                            </form>

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
