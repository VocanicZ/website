<?php
/* Smarty version 4.3.1, created on 2023-06-01 07:40:43
  from '/home/u302265335/domains/rainbowcreation.net/public_html/custom/panel_templates/Default/collections/dashboard_items/recent_punishments.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6477e90b7f5815_73338500',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c91412f33b61cd816433344172111c550b4004c8' => 
    array (
      0 => '/home/u302265335/domains/rainbowcreation.net/public_html/custom/panel_templates/Default/collections/dashboard_items/recent_punishments.tpl',
      1 => 1685579651,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6477e90b7f5815_73338500 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="card shadow mb-4">
    <div class="card-header bg-primary py-3">
        <h6 class="m-0 font-weight-bold text-white"><i class="fas fa-gavel fa-fw"></i> <?php echo $_smarty_tpl->tpl_vars['RECENT_PUNISHMENTS']->value;?>
</h6>
    </div>
    <div class="card-body">
        <?php if (count($_smarty_tpl->tpl_vars['PUNISHMENTS']->value)) {?>
            <div id="accordion">
                <?php $_smarty_tpl->_assignInScope('i', 1);?> <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PUNISHMENTS']->value, 'punishment');
$_smarty_tpl->tpl_vars['punishment']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['punishment']->value) {
$_smarty_tpl->tpl_vars['punishment']->do_else = false;
?>
                    <div class="card" style="margin-bottom: 10px; border-radius: 10px">
                        <div class="card-header" style="border-radius: 10px" id="heading<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
}">
                            <h5 class="mb-0">
                                <button class="btn btn-link btn-block btn-accordion" data-toggle="collapse" data-target="#collapse<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" aria-expanded="true" aria-controls="collapse<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
">
                                    <span style="<?php echo $_smarty_tpl->tpl_vars['punishment']->value['punished_style'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['punishment']->value['punished_avatar'];?>
" style="max-width:20px;max-height:20px;" class="rounded" alt="<?php echo $_smarty_tpl->tpl_vars['punishment']->value['punished_username'];?>
" /> <?php echo $_smarty_tpl->tpl_vars['punishment']->value['punished_nickname'];?>
</span>
                                    <?php if ($_smarty_tpl->tpl_vars['punishment']->value['type'] == 1) {?>
                                        <span class="badge badge-danger"><?php echo $_smarty_tpl->tpl_vars['BAN']->value;?>
</span>
                                    <?php } elseif ($_smarty_tpl->tpl_vars['punishment']->value['type'] == 2) {?>
                                        <span class="badge badge-warning"><?php echo $_smarty_tpl->tpl_vars['WARNING']->value;?>
</span>
                                    <?php } elseif ($_smarty_tpl->tpl_vars['punishment']->value['type'] == 3) {?>
                                        <span class="badge badge-danger"><?php echo $_smarty_tpl->tpl_vars['IP_BAN']->value;?>
</span>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['punishment']->value['revoked'] == 1) {?>
                                        <span class="badge badge-success"><?php echo $_smarty_tpl->tpl_vars['REVOKED']->value;?>
</span>
                                    <?php }?>
                                </button>
                            </h5>
                            <div id="collapse<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" class="collapse text-center" aria-labelledby="heading<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" data-parent="#accordion">
                                <?php echo $_smarty_tpl->tpl_vars['CREATED']->value;?>
 <span data-toggle="tooltip" data-title="<?php echo $_smarty_tpl->tpl_vars['punishment']->value['time_full'];?>
"><?php echo $_smarty_tpl->tpl_vars['punishment']->value['time'];?>
</span><br />
                                <?php echo $_smarty_tpl->tpl_vars['STAFF']->value;?>
 <span style="<?php echo $_smarty_tpl->tpl_vars['punishment']->value['staff_style'];?>
"><?php echo $_smarty_tpl->tpl_vars['punishment']->value['staff_nickname'];?>
 <img src="<?php echo $_smarty_tpl->tpl_vars['punishment']->value['staff_avatar'];?>
" style="max-width:20px;max-height:20px;" class="rounded" alt="<?php echo $_smarty_tpl->tpl_vars['punishment']->value['staff_username'];?>
" /></span><br />
                                <?php echo $_smarty_tpl->tpl_vars['REASON']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['punishment']->value['reason'];?>

                                <hr />
                                <a class="btn btn-primary btn-block text-white" href="<?php echo $_smarty_tpl->tpl_vars['punishment']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['VIEW']->value;?>
</a>
                            </div>
                        </div>
                    </div>
                <?php $_smarty_tpl->_assignInScope('i', ($_smarty_tpl->tpl_vars['i']->value+1));?> <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['NO_PUNISHMENTS']->value;?>

        <?php }?>
    </div>
</div><?php }
}
