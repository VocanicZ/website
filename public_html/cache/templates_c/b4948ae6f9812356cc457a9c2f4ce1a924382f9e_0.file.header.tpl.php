<?php
/* Smarty version 4.3.1, created on 2023-06-01 07:53:34
  from '/home/u302265335/domains/rainbowcreation.net/public_html/custom/templates/Cobalt/template_settings/settings_pages/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6477ec0eab0b04_97868022',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b4948ae6f9812356cc457a9c2f4ce1a924382f9e' => 
    array (
      0 => '/home/u302265335/domains/rainbowcreation.net/public_html/custom/templates/Cobalt/template_settings/settings_pages/header.tpl',
      1 => 1685580388,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./parts/switch.tpl' => 8,
    'file:./parts/range.tpl' => 2,
    'file:./parts/image_uploader.tpl' => 1,
  ),
),false)) {
function content_6477ec0eab0b04_97868022 (Smarty_Internal_Template $_smarty_tpl) {
?>                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="pills-bgh-tab" data-toggle="pill" href="#pills-bgh"
                                        role="tab" aria-controls="pills-bgh" aria-selected="true"><?php echo $_smarty_tpl->tpl_vars['BG_TAB']->value;?>
</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-bgo-tab" data-toggle="pill" href="#pills-bgo"
                                        role="tab" aria-controls="pills-bgo" aria-selected="false"><?php echo $_smarty_tpl->tpl_vars['BGO_TAB']->value;?>
</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-logoh-tab" data-toggle="pill" href="#pills-logoh"
                                        role="tab" aria-controls="pills-logoh" aria-selected="false"><?php echo $_smarty_tpl->tpl_vars['LOGO_TAB']->value;?>
</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-navbarh-tab" data-toggle="pill" href="#pills-navbarh"
                                        role="tab" aria-controls="pills-navbarh" aria-selected="false"><?php echo $_smarty_tpl->tpl_vars['NAVBAR_TAB']->value;?>
</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-dsh-tab" data-toggle="pill" href="#pills-dsh"
                                        role="tab" aria-controls="pills-dsh" aria-selected="false"><?php echo $_smarty_tpl->tpl_vars['DS_TEXTS_TAB']->value;?>
</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-loader-tab" data-toggle="pill" href="#pills-loader"
                                        role="tab" aria-controls="pills-loader" aria-selected="false"><?php echo $_smarty_tpl->tpl_vars['LOADER_TAB']->value;?>
</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-bgh" role="tabpanel"
                                    aria-labelledby="pills-bgh-tab">

                                    <label><?php echo $_smarty_tpl->tpl_vars['HEADER_BG']->value;?>
</label>
                                    <?php if ($_smarty_tpl->tpl_vars['HEADER_BG_VALUE']->value !== '') {?>
                                        <span class="float-right"><?php echo $_smarty_tpl->tpl_vars['IU_UPLOAD_NEW']->value;?>
</span>
                                        <div class="card img-card">
                                            <img src="<?php echo $_smarty_tpl->tpl_vars['HEADER_BG_VALUE']->value;?>
" />
                                            <span><?php echo $_smarty_tpl->tpl_vars['HEADER_BG_VALUE']->value;?>
</span>
                                            <button class="btn btn-danger float-right" name="headerbg-delete-btn"
                                                type='submit'><i class="fas fa-trash"></i></button>
                                        </div>
                                    <?php } else { ?>
                                        <div class="d-flex flex-row align-items-center" style="margin-top: 5px;">
                                            <input type="file" name="cobalt-headerbg" id="cobalt-headerbg"
                                                class="position-absolute" style="margin-left:-500rem"
                                                onchange="switchToSubmitheaderbg()">
                                            <label for="cobalt-headerbg" class="btn btn-primary mb-0"
                                                style="min-width: 130px"
                                                id="cobalt-headerbg-label"><?php echo $_smarty_tpl->tpl_vars['IU_CHOOSE_IMAGE']->value;?>
</label>
                                            <button type="submit" class="btn btn-success d-none"
                                                id="cobalt-headerbg-submit"><?php echo $_smarty_tpl->tpl_vars['IU_UPLOAD']->value;?>
</button>
                                            <span class="ml-3"><?php echo $_smarty_tpl->tpl_vars['IU_CLICK_UPLOAD']->value;?>
</span>
                                        </div>
                                        <br />
                                    <?php }?>

                                    <?php $_smarty_tpl->_subTemplateRender("file:./parts/switch.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('name'=>'particles','right'=>'no','last'=>'no'), 0, false);
?>

                                    <label><?php echo $_smarty_tpl->tpl_vars['BG_HEIGHT']->value;?>
</label>
                                    <input type='text' name='bg_height' value='<?php echo $_smarty_tpl->tpl_vars['BG_HEIGHT_VALUE']->value;?>
' class='form-control'>
                                    <br />
                                    <label><?php echo $_smarty_tpl->tpl_vars['BG_HEIGHT_M']->value;?>
</label>
                                    <input type='text' name='bg_height_m' value='<?php echo $_smarty_tpl->tpl_vars['BG_HEIGHT_M_VALUE']->value;?>
'
                                        class='form-control'>

                                    <br />
                                    <label><?php echo $_smarty_tpl->tpl_vars['HEADER_BG_POSITION']->value;?>
</label>
                                    <select id="header_bg_position" class='form-control' name='header_bg_position'>
                                        <option value='top' <?php if ($_smarty_tpl->tpl_vars['HEADER_BG_POSITION_VALUE']->value == 'top') {?> selected<?php }?>>
                                            <?php echo $_smarty_tpl->tpl_vars['TOP']->value;?>
 </option>
                                        <option value='center' <?php if ($_smarty_tpl->tpl_vars['HEADER_BG_POSITION_VALUE']->value == 'center') {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['CENTER']->value;?>
 </option>
                                        <option value='bottom' <?php if ($_smarty_tpl->tpl_vars['HEADER_BG_POSITION_VALUE']->value == 'bottom') {?>
                                            selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['BOTTOM']->value;?>
 </option>
                                    </select>
                                </div>
                                <div class="tab-pane fade" id="pills-bgo" role="tabpanel"
                                    aria-labelledby="pills-bgo-tab">

                                    <?php $_smarty_tpl->_subTemplateRender("file:./parts/switch.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('name'=>'coverlay','right'=>$_smarty_tpl->tpl_vars['COVERLAY_2']->value,'last'=>'no'), 0, true);
?>
                                    
                                    <?php $_smarty_tpl->_subTemplateRender("file:./parts/range.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('name'=>'coverlay_opacity','right'=>$_smarty_tpl->tpl_vars['COVERLAY_OPACITY_2']->value,'last'=>'no'), 0, false);
?>
                                        
                                    <?php $_smarty_tpl->_subTemplateRender("file:./parts/range.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('name'=>'header_bg_shading','right'=>$_smarty_tpl->tpl_vars['HEADER_BG_SHADING_2']->value,'last'=>'no'), 0, true);
?>
                                    
                                    <?php $_smarty_tpl->_subTemplateRender("file:./parts/switch.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('name'=>'blur_header_bg','right'=>'no','last'=>'yes'), 0, true);
?>
                                    <br /><span><?php echo $_smarty_tpl->tpl_vars['BLUR_HEADER_BG_2']->value;?>
</span>

                                </div>
                                <div class="tab-pane fade" id="pills-logoh" role="tabpanel"
                                    aria-labelledby="pills-logoh-tab">
                                    
                                    <?php $_smarty_tpl->_subTemplateRender("file:./parts/image_uploader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('name'=>'logo'), 0, false);
?>

                                    <?php $_smarty_tpl->_subTemplateRender("file:./parts/switch.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('name'=>'al','right'=>'no','last'=>'no'), 0, true);
?>

                                    <label><?php echo $_smarty_tpl->tpl_vars['LOGO_SIZE']->value;?>
</label>
                                    <input type='text' name='logo_size' value='<?php echo $_smarty_tpl->tpl_vars['LOGO_SIZE_VALUE']->value;?>
' class='form-control'>
                                    <br />
                                    <label><?php echo $_smarty_tpl->tpl_vars['LOGO_SIZE_M']->value;?>
</label>
                                    <input type='text' name='logo_size_m' value='<?php echo $_smarty_tpl->tpl_vars['LOGO_SIZE_M_VALUE']->value;?>
'
                                        class='form-control'>
                                </div>
                                <div class="tab-pane fade" id="pills-navbarh" role="tabpanel"
                                    aria-labelledby="pills-navbarh-tab">
                                    <label><?php echo $_smarty_tpl->tpl_vars['NAVBAR']->value;?>
</label>
                                    <select id="navbar" class='form-control' name='navbar'>
                                        <option value='top' <?php if ($_smarty_tpl->tpl_vars['NAVBAR_VALUE']->value == 'top') {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['TOP']->value;?>
 </option>
                                        <option value='bottom' <?php if ($_smarty_tpl->tpl_vars['NAVBAR_VALUE']->value == 'bottom') {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['BOTTOM']->value;?>

                                        </option>
                                    </select> <br />
                                    <label><?php echo $_smarty_tpl->tpl_vars['NAVBAR_ALIGNMENT']->value;?>
</label><span
                                        class="float-right"><?php echo $_smarty_tpl->tpl_vars['NAVBAR_ALIGNMENT_2']->value;?>
</span>
                                    <select id="navbar_alignment" class='form-control' name='navbar_alignment'>
                                        <option value='left' <?php if ($_smarty_tpl->tpl_vars['NAVBAR_ALIGNMENT_VALUE']->value == 'left') {?> selected<?php }?>>
                                            <?php echo $_smarty_tpl->tpl_vars['LEFT']->value;?>
 </option>
                                        <option value='center' <?php if ($_smarty_tpl->tpl_vars['NAVBAR_ALIGNMENT_VALUE']->value == 'center') {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['CENTER']->value;?>
 </option>
                                    </select> <br />

                                    <label><?php echo $_smarty_tpl->tpl_vars['NAVBAR_OFFSET']->value;?>
</label><br />

                                    <div class="card img-card">
                                        <i class="fas fa-info-circle"></i> <b><?php echo $_smarty_tpl->tpl_vars['INFO']->value;?>
</b><br>
                                        <?php echo $_smarty_tpl->tpl_vars['NAVBAR_OFFSET_2']->value;?>
<br /><br />
                                        <b><?php echo $_smarty_tpl->tpl_vars['NOTE']->value;?>
</b> <?php echo $_smarty_tpl->tpl_vars['NAVBAR_OFFSET_3']->value;?>

                                    </div>

                                    <input type='text' name='navbar_offset' value='<?php echo $_smarty_tpl->tpl_vars['NAVBAR_OFFSET_VALUE']->value;?>
'
                                        class='form-control'>
                                    <br />
                                    <label><?php echo $_smarty_tpl->tpl_vars['STORE_URL']->value;?>
</label><span class="float-right"><?php echo $_smarty_tpl->tpl_vars['STORE_URL_2']->value;?>
</span>
                                    <input type='text' name='store_url' value='<?php echo $_smarty_tpl->tpl_vars['STORE_URL_VALUE']->value;?>
'
                                        class='form-control'><br />

                                    <?php $_smarty_tpl->_subTemplateRender("file:./parts/switch.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('name'=>'style_store_link','right'=>'no','last'=>'no'), 0, true);
?>
                                    
                                    <?php $_smarty_tpl->_subTemplateRender("file:./parts/switch.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('name'=>'nav_store_glow','right'=>'no','last'=>'yes'), 0, true);
?>

                                </div>
                                <div class="tab-pane fade" id="pills-dsh" role="tabpanel"
                                    aria-labelledby="pills-dsh-tab">
                                    <?php $_smarty_tpl->_subTemplateRender("file:./parts/switch.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('name'=>'ds_box','right'=>'no','last'=>'no'), 0, true);
?>
                                    
                                    <label><?php echo $_smarty_tpl->tpl_vars['DISCORD_SERVER']->value;?>
</label><span class="float-right"
                                        style="color: #dc3545"><b><?php echo $_smarty_tpl->tpl_vars['DISCORD_SERVER_1']->value;?>
</b></span>
                                    <input type='text' name='discord_server' value='<?php echo $_smarty_tpl->tpl_vars['DISCORD_SERVER_VALUE']->value;?>
'
                                        class='form-control'>
                                    <br />
                                    <label><?php echo $_smarty_tpl->tpl_vars['DISCORD_SERVER_ID']->value;?>
</label>
                                    <input type='text' name='discord_server_id' value='<?php echo $_smarty_tpl->tpl_vars['DISCORD_SERVER_ID_VALUE']->value;?>
'
                                        class='form-control'>
                                    <br />
                                    <label><?php echo $_smarty_tpl->tpl_vars['MC_SERVER']->value;?>
</label>
                                    <input type='text' name='mc_server' value='<?php echo $_smarty_tpl->tpl_vars['MC_SERVER_VALUE']->value;?>
' class='form-control'>
                                    <br />
                                    <label><?php echo $_smarty_tpl->tpl_vars['DS_BREAKPOINT']->value;?>
</label><span class="float-right"><?php echo $_smarty_tpl->tpl_vars['DS_BREAKPOINT_2']->value;?>
</span>
                                    <input type='text' name='ds_breakpoint' value='<?php echo $_smarty_tpl->tpl_vars['DS_BREAKPOINT_VALUE']->value;?>
'
                                        class='form-control'>
                                </div>
                                <div class="tab-pane fade" id="pills-loader" role="tabpanel"
                                    aria-labelledby="pills-loader-tab">
                                    <?php $_smarty_tpl->_subTemplateRender("file:./parts/switch.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('name'=>'loading_animation','right'=>'no','last'=>'no'), 0, true);
?>
                                    
                                    <label><?php echo $_smarty_tpl->tpl_vars['LOADER_COLOR']->value;?>
</label>
                                    <div class="input-group loader-color">
                                        <span class="input-group-prepend">
                                            <span class="input-group-text colorpicker-input-addon"><i></i></span>
                                        </span>
                                        <input type='text' name='loader_color' value='<?php echo $_smarty_tpl->tpl_vars['LOADER_COLOR_VALUE']->value;?>
'
                                            class='form-control'>
                                    </div>
                                </div>
                            </div><?php }
}
