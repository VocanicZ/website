<?php
/* Smarty version 4.3.1, created on 2023-06-01 08:54:34
  from '/home/u302265335/domains/rainbowcreation.net/public_html/custom/panel_templates/Default/core/user.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6477fa5a3781a3_42190210',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '522c6ea5e3f7f00656bcae1e6d57d9b9090c7572' => 
    array (
      0 => '/home/u302265335/domains/rainbowcreation.net/public_html/custom/panel_templates/Default/core/user.tpl',
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
function content_6477fa5a3781a3_42190210 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/u302265335/domains/rainbowcreation.net/public_html/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
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
                        <h1 class="h3 mb-0 text-gray-800"><?php echo $_smarty_tpl->tpl_vars['NICKNAME']->value;?>
</h1>
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?php echo $_smarty_tpl->tpl_vars['PANEL_INDEX']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['DASHBOARD']->value;?>
</a></li>
                            <li class="breadcrumb-item active"><?php echo $_smarty_tpl->tpl_vars['NICKNAME']->value;?>
</li>
                        </ol>
                    </div>

                    <!-- Update Notification -->
                    <?php $_smarty_tpl->_subTemplateRender('file:includes/update.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                    <!-- Success and Error Alerts -->
                    <?php $_smarty_tpl->_subTemplateRender('file:includes/alerts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                    <div class="row">
                        <div class="col-md-3">
                            <div class="card shadow mb-4">
                                <div class="card-body">
                                    <div class="text-center">
                                        <img class="profile-user-img rounded-circle" src="<?php echo $_smarty_tpl->tpl_vars['AVATAR']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['USERNAME']->value;?>
">
                                    </div>

                                    <h4 class="text-center" style="<?php echo $_smarty_tpl->tpl_vars['USER_STYLE']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['NICKNAME']->value;?>
</h4>

                                    <p class="text-muted text-center"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['USER_GROUPS']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
echo $_smarty_tpl->tpl_vars['item']->value;?>

                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></p>

                                    <ul class="list-group list-group-unbordered mb-3">
                                        <li class="list-group-item">
                                            <b><?php echo $_smarty_tpl->tpl_vars['REGISTERED']->value;?>
</b><br /><?php echo $_smarty_tpl->tpl_vars['REGISTERED_VALUE']->value;?>

                                        </li>
                                        <li class="list-group-item">
                                            <b><?php echo $_smarty_tpl->tpl_vars['LAST_SEEN']->value;?>
</b><br /><span data-toggle="tooltip"
                                                data-title="<?php echo $_smarty_tpl->tpl_vars['LAST_SEEN_FULL_VALUE']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['LAST_SEEN_SHORT_VALUE']->value;?>
</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="card shadow mb-4">
                                <div class="card-body">
                                    <ul class="nav nav-pills">
                                        <li class="nav-item">
                                            <a class="nav-link active"><?php echo $_smarty_tpl->tpl_vars['DETAILS']->value;?>
</a>
                                        </li>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LINKS']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                                        <li class="nav-item">
                                            <a class="nav-link"
                                                href="<?php echo smarty_modifier_replace((smarty_modifier_replace($_smarty_tpl->tpl_vars['item']->value['link'],'{id}',$_smarty_tpl->tpl_vars['USER_ID']->value)),'{username}',$_smarty_tpl->tpl_vars['USERNAME']->value);?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a>
                                        </li>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </ul>
                                    <hr />
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="username"><?php echo $_smarty_tpl->tpl_vars['USERNAME_LABEL']->value;?>
</label>
                                                <input id="username" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['USERNAME']->value;?>
" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="nickname"><?php echo $_smarty_tpl->tpl_vars['NICKNAME_LABEL']->value;?>
</label>
                                                <input id="nickname" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['NICKNAME']->value;?>
" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="title"><?php echo $_smarty_tpl->tpl_vars['USER_TITLE_LABEL']->value;?>
</label>
                                                <input id="title" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['USER_TITLE']->value;?>
" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="language"><?php echo $_smarty_tpl->tpl_vars['LANGUAGE_LABEL']->value;?>
</label>
                                                <input id="language" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['LANGUAGE']->value;?>
" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="timezone"><?php echo $_smarty_tpl->tpl_vars['TIMEZONE_LABEL']->value;?>
</label>
                                                <input id="timezone" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['TIMEZONE']->value;?>
" readonly>
                                            </div>
                                        </div>
                                        <?php if ((isset($_smarty_tpl->tpl_vars['EMAIL_ADDRESS']->value))) {?>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="email"><?php echo $_smarty_tpl->tpl_vars['EMAIL_ADDRESS_LABEL']->value;?>
</label>
                                                <input id="email" type="email" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['EMAIL_ADDRESS']->value;?>
" readonly>
                                            </div>
                                        </div>
                                        <?php }?>
                                        <?php if ((isset($_smarty_tpl->tpl_vars['LAST_IP']->value))) {?>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="last_ip"><?php echo $_smarty_tpl->tpl_vars['LAST_IP_LABEL']->value;?>
</label>
                                                <input id="last_ip" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['LAST_IP']->value;?>
"
                                                    readonly>
                                            </div>
                                        </div>
                                        <?php }?>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="template"><?php echo $_smarty_tpl->tpl_vars['TEMPLATE_LABEL']->value;?>
</label>
                                                <input id="template" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE']->value;?>
" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="card shadow mb-4">
                                <div class="card-body">
                                    <h5><?php echo $_smarty_tpl->tpl_vars['PROFILE_FIELDS_LABEL']->value;?>
</h5>
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th><?php echo $_smarty_tpl->tpl_vars['NAME']->value;?>
</th>
                                                    <th><?php echo $_smarty_tpl->tpl_vars['CONTENT']->value;?>
</th>
                                                    <th><?php echo $_smarty_tpl->tpl_vars['UPDATED']->value;?>
</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ALL_PROFILE_FIELDS']->value, 'field');
$_smarty_tpl->tpl_vars['field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->do_else = false;
?>
                                                <tr>
                                                    <td>
                                                        <?php echo $_smarty_tpl->tpl_vars['field']->value->name;?>

                                                    </td>
                                                    <td>
                                                        <?php if ($_smarty_tpl->tpl_vars['USER_PROFILE_FIELDS']->value[$_smarty_tpl->tpl_vars['field']->value->id]->value) {?>
                                                        <?php echo $_smarty_tpl->tpl_vars['USER_PROFILE_FIELDS']->value[$_smarty_tpl->tpl_vars['field']->value->id]->value;?>

                                                        <?php } else { ?>
                                                        <i><?php echo $_smarty_tpl->tpl_vars['NOT_SET']->value;?>
</i>
                                                        <?php }?>
                                                    </td>
                                                    <td>
                                                        <?php if ($_smarty_tpl->tpl_vars['USER_PROFILE_FIELDS']->value[$_smarty_tpl->tpl_vars['field']->value->id]->updated) {?>
                                                        <?php echo $_smarty_tpl->tpl_vars['USER_PROFILE_FIELDS']->value[$_smarty_tpl->tpl_vars['field']->value->id]->updated();?>

                                                        <?php } else { ?>
                                                        <i><?php echo $_smarty_tpl->tpl_vars['NOT_SET']->value;?>
</i>
                                                        <?php }?>
                                                    </td>
                                                </tr>
                                                <?php
}
if ($_smarty_tpl->tpl_vars['field']->do_else) {
?>
                                                <tr>
                                                    <td colspan="3" style="text-align:center;"><?php echo $_smarty_tpl->tpl_vars['NO_PROFILE_FIELDS']->value;?>
</td>
                                                </tr>
                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
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

</html>
<?php }
}
