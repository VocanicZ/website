<?php
/* Smarty version 4.3.1, created on 2023-06-01 07:40:43
  from '/home/u302265335/domains/rainbowcreation.net/public_html/custom/panel_templates/Default/collections/dashboard_stats/recent_posts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6477e90b7e6629_91357792',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6febb5625547c22da9dce6402ea2c8b7c7f68476' => 
    array (
      0 => '/home/u302265335/domains/rainbowcreation.net/public_html/custom/panel_templates/Default/collections/dashboard_stats/recent_posts.tpl',
      1 => 1685579651,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6477e90b7e6629_91357792 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card stats-card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"><?php echo $_smarty_tpl->tpl_vars['TITLE']->value;?>
</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $_smarty_tpl->tpl_vars['VALUE']->value;?>
</div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-comments fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>
<?php }
}