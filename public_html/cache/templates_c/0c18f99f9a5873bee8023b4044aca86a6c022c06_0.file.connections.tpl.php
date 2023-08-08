<?php
/* Smarty version 4.3.1, created on 2023-06-01 09:11:56
  from '/home/u302265335/domains/rainbowcreation.net/public_html/custom/templates/Cobalt/user/connections.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6477fe6ca1dac7_80840183',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0c18f99f9a5873bee8023b4044aca86a6c022c06' => 
    array (
      0 => '/home/u302265335/domains/rainbowcreation.net/public_html/custom/templates/Cobalt/user/connections.tpl',
      1 => 1685580388,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:navbar.tpl' => 1,
    'file:user/navigation.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6477fe6ca1dac7_80840183 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php $_smarty_tpl->_subTemplateRender('file:navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
    <div class="row">
        <div class="col-lg-3">
            <?php $_smarty_tpl->_subTemplateRender('file:user/navigation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
        <div class="col-lg-9">

        <?php if ((isset($_smarty_tpl->tpl_vars['SUCCESS']->value))) {?>
            <div class="alert alert-success"><?php echo $_smarty_tpl->tpl_vars['SUCCESS']->value;?>
</div>
          <?php }?>
          
          <?php if ((isset($_smarty_tpl->tpl_vars['ERRORS']->value))) {?>
          <div class="alert alert-danger">
              <ul>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ERRORS']->value, 'error');
$_smarty_tpl->tpl_vars['error']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->do_else = false;
?>
                <li><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              </ul>
          </div>
          <?php }?>

            <div class="card">
                <div class="card-header header-theme"><?php echo $_smarty_tpl->tpl_vars['CONNECTIONS']->value;?>
</div>
                <div class="card-body">
                    

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['INTEGRATIONS']->value, 'integration');
$_smarty_tpl->tpl_vars['integration']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['integration']->value) {
$_smarty_tpl->tpl_vars['integration']->do_else = false;
?>
                    <div class="card">
                      <div class="card-body">
                      <div class="row">
                        <div class="col-md-1">
                          <svg class="connection-status-icon" width="30" height="30" viewBox="0 0 14 14" fill="<?php if ($_smarty_tpl->tpl_vars['integration']->value['connected']) {
if ($_smarty_tpl->tpl_vars['integration']->value['verified']) {?>green<?php } else { ?>orange<?php }
} else { ?>red<?php }?>" xmlns="http://www.w3.org/2000/svg">
                              <path d="M3 7C3 4.79086 4.79086 3 7 3V3C9.20914 3 11 4.79086 11 7V7C11 9.20914 9.20914 11 7 11V11C4.79086 11 3 9.20914 3 7V7Z"/>
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M7 14C3.13401 14 0 10.866 0 7C0 3.13401 3.13401 0 7 0C10.866 0 14 3.13401 14 7C14 10.866 10.866 14 7 14ZM7 3C4.79086 3 3 4.79086 3 7C3 9.20914 4.79086 11 7 11C9.20914 11 11 9.20914 11 7C11 4.79086 9.20914 3 7 3Z" fill-opacity="0.27"/>
                          </svg>
                        </div>
                        <div class="col-md-8">
                          <strong><?php echo $_smarty_tpl->tpl_vars['integration']->value['name'];?>
</strong> 
                          <?php if ($_smarty_tpl->tpl_vars['integration']->value['connected'] && !$_smarty_tpl->tpl_vars['integration']->value['verified']) {?>
                            <div class="label label-warning"><?php echo $_smarty_tpl->tpl_vars['PENDING_VERIFICATION']->value;?>
</div> <?php if ($_smarty_tpl->tpl_vars['integration']->value['required']) {?><div class="ui red tiny label"><?php echo $_smarty_tpl->tpl_vars['REQUIRED']->value;?>
</div><?php }?>
                          <?php } elseif (!$_smarty_tpl->tpl_vars['integration']->value['connected'] && $_smarty_tpl->tpl_vars['integration']->value['required']) {?>
                            <div class="label label-danger"><?php echo $_smarty_tpl->tpl_vars['REQUIRED']->value;?>
</div>
                          <?php }?>
                          <br />
                          <?php if ($_smarty_tpl->tpl_vars['integration']->value['connected']) {?>
                            <?php echo $_smarty_tpl->tpl_vars['integration']->value['username'];?>

                          <?php } else { ?>
                            <?php echo $_smarty_tpl->tpl_vars['NOT_CONNECTED']->value;?>

                          <?php }?>
                        </div>
                        <div class="col-md-3">
                          <?php if ($_smarty_tpl->tpl_vars['integration']->value['connected']) {?>
                            <?php if ($_smarty_tpl->tpl_vars['integration']->value['connected'] && !$_smarty_tpl->tpl_vars['integration']->value['verified']) {?>
                              <form class="inline-form" action="" method="post">
                                <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                                <input type="hidden" name="action" value="verify">
                                <input type="hidden" name="integration" value="<?php echo $_smarty_tpl->tpl_vars['integration']->value['name'];?>
">
                                <input type="submit" class="btn btn-theme" value="<?php echo $_smarty_tpl->tpl_vars['VERIFY']->value;?>
">
                              </form>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['integration']->value['can_unlink']) {?>
                            <form class="inline-form" action="" method="post">
                              <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                              <input type="hidden" name="action" value="unlink">
                              <input type="hidden" name="integration" value="<?php echo $_smarty_tpl->tpl_vars['integration']->value['name'];?>
">
                              <input type="submit" class="btn btn-secondary" value="<?php echo $_smarty_tpl->tpl_vars['UNLINK']->value;?>
">
                            </form>
                            <?php }?>
                          <?php } else { ?>
                            <form class="inline-form" action="" method="post">
                              <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                              <input type="hidden" name="action" value="link">
                              <input type="hidden" name="integration" value="<?php echo $_smarty_tpl->tpl_vars['integration']->value['name'];?>
">
                              <input type="submit" class="btn btn-theme" value="<?php echo $_smarty_tpl->tpl_vars['CONNECT']->value;?>
">
                            </form>
                          <?php }?>
                        </div>
                      </div>
                    </div>
                    </div>
                  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


                </div>
            </div>
        </div>
    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
