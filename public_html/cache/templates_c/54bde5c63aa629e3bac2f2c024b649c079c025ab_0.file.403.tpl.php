<?php
/* Smarty version 4.3.1, created on 2023-06-20 05:48:20
  from '/home/u302265335/domains/rainbowcreation.net/public_html/custom/templates/Cobalt/403.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6490db341e0d87_85656756',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '54bde5c63aa629e3bac2f2c024b649c079c025ab' => 
    array (
      0 => '/home/u302265335/domains/rainbowcreation.net/public_html/custom/templates/Cobalt/403.tpl',
      1 => 1685580388,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header-top.tpl' => 1,
    'file:scripts.tpl' => 1,
  ),
),false)) {
function content_6490db341e0d87_85656756 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header-top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<meta name="robots" content="noindex">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card error-card text-center">
                    <div class="card-body">
                        <span class="error-title">403</span>
                        <br />
                        <span><?php echo $_smarty_tpl->tpl_vars['403_TITLE']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['CONTENT']->value;?>
</span>
                        <br /><br />
                        <div class="row">
                            <div class="col-6">
                                <button class="btn btn-theme float-right"
                                    onclick="javascript:history.go(-1)"><?php echo $_smarty_tpl->tpl_vars['BACK']->value;?>
</button>
                            </div>
                            <div class="col-6">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['SITE_HOME']->value;?>
" class="btn btn-theme float-left"><?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
</a>
                            </div>
                        </div>
                        <br /><?php echo $_smarty_tpl->tpl_vars['ERROR']->value;?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php $_smarty_tpl->_subTemplateRender('file:scripts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
if (!(isset($_smarty_tpl->tpl_vars['EXCLUDE_END_BODY']->value))) {?>
  </body>
  </html>
<?php }
}
}
