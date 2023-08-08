<?php
/* Smarty version 4.3.1, created on 2023-06-01 07:40:43
  from '/home/u302265335/domains/rainbowcreation.net/public_html/custom/panel_templates/Default/collections/dashboard_items/recent_reports.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6477e90b814fb5_03660221',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '833071ebb7116fd6028fe43e89f09ef800f2ec4a' => 
    array (
      0 => '/home/u302265335/domains/rainbowcreation.net/public_html/custom/panel_templates/Default/collections/dashboard_items/recent_reports.tpl',
      1 => 1685579651,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6477e90b814fb5_03660221 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="card shadow mb-4">
    <div class="card-header bg-primary py-3">
        <h6 class="m-0 font-weight-bold text-white"><i class="fas fa-exclamation-triangle fa-fw"></i> <?php echo $_smarty_tpl->tpl_vars['RECENT_REPORTS']->value;?>
</h6>
    </div>
    <div class="card-body">
        <?php if (count($_smarty_tpl->tpl_vars['REPORTS']->value)) {?>
            <div id="accordion">
                <?php $_smarty_tpl->_assignInScope('i', 1);?> <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['REPORTS']->value, 'report');
$_smarty_tpl->tpl_vars['report']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['report']->value) {
$_smarty_tpl->tpl_vars['report']->do_else = false;
?>
                    <div class="card" style="margin-bottom: 10px; border-radius: 10px">
                        <div class="card-header" style="border-radius: 10px" id="headingReport<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
">
                            <h5 class="mb-0">
                                <button class="btn btn-link btn-block btn-accordion" data-toggle="collapse" data-target="#collapseReport<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" aria-expanded="true" aria-controls="collapseReport<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
">
                                    <span style="<?php echo $_smarty_tpl->tpl_vars['report']->value['reported_style'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['report']->value['reported_avatar'];?>
" style="max-width:20px;max-height:20px;" class="rounded" alt="<?php echo $_smarty_tpl->tpl_vars['report']->value['reported_username'];?>
" /> <?php echo $_smarty_tpl->tpl_vars['report']->value['reported_nickname'];?>
</span>
                                    <?php if ($_smarty_tpl->tpl_vars['report']->value['type'] == 0) {?>
                                        <span class="badge badge-info"><?php echo $_smarty_tpl->tpl_vars['WEBSITE']->value;?>
</span>
                                    <?php } else { ?>
                                        <span class="badge badge-info"><?php echo $_smarty_tpl->tpl_vars['INGAME']->value;?>
</span>
                                    <?php }?>
                                </button>
                            </h5>
                            <div id="collapseReport<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" class="collapse text-center" aria-labelledby="collapseReport<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" data-parent="#accordion">
                                <?php echo $_smarty_tpl->tpl_vars['CREATED']->value;?>
 <span data-toggle="tooltip" data-title="<?php echo $_smarty_tpl->tpl_vars['report']->value['time_full'];?>
"><?php echo $_smarty_tpl->tpl_vars['report']->value['time'];?>
</span><br />
                                <?php echo $_smarty_tpl->tpl_vars['REPORTED_BY']->value;?>
 <span style="<?php echo $_smarty_tpl->tpl_vars['report']->value['reporter_style'];?>
"><?php echo $_smarty_tpl->tpl_vars['report']->value['reporter_nickname'];?>
  <img src="<?php echo $_smarty_tpl->tpl_vars['report']->value['reporter_avatar'];?>
" style="max-width:20px;max-height:20px;" class="rounded" alt="<?php echo $_smarty_tpl->tpl_vars['report']->value['reporter_username'];?>
" /></span><br />
                                <?php echo $_smarty_tpl->tpl_vars['REASON']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['report']->value['reason'];?>

                                <hr />
                                <a class="btn btn-primary btn-block text-white" href="<?php echo $_smarty_tpl->tpl_vars['report']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['VIEW']->value;?>
</a>
                            </div>
                        </div>
                    </div>
                <?php $_smarty_tpl->_assignInScope('i', ($_smarty_tpl->tpl_vars['i']->value+1));?> <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['NO_REPORTS']->value;?>
 
        <?php }?>
    </div>
</div><?php }
}
