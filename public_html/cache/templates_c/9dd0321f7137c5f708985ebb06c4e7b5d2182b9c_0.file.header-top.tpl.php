<?php
/* Smarty version 4.3.1, created on 2023-06-01 07:55:10
  from '/home/u302265335/domains/rainbowcreation.net/public_html/custom/templates/Cobalt/header-top.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6477ec6ed954e9_30281710',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9dd0321f7137c5f708985ebb06c4e7b5d2182b9c' => 
    array (
      0 => '/home/u302265335/domains/rainbowcreation.net/public_html/custom/templates/Cobalt/header-top.tpl',
      1 => 1685580388,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6477ec6ed954e9_30281710 (Smarty_Internal_Template $_smarty_tpl) {
if (defined("HTML_CLASS")) {
$_smarty_tpl->_assignInScope('HTMLCLASS', " ".((string)(defined('HTML_CLASS') ? constant('HTML_CLASS') : null)));
}
if (defined("HTML_CLASS")) {
$_smarty_tpl->_assignInScope('HTMLCLASS', " ".((string)(defined('HTML_CLASS') ? constant('HTML_CLASS') : null)));
} else {
$_smarty_tpl->_assignInScope('HTMLCLASS', '');
}
if (defined("HTML_LANG")) {
$_smarty_tpl->_assignInScope('HTMLLANG', " lang='".((string)(defined('HTML_LANG') ? constant('HTML_LANG') : null))."'");
} else {
$_smarty_tpl->_assignInScope('HTMLLANG', " lang='en'");
}
if (defined("HTML_RTL") && (defined('HTML_RTL') ? constant('HTML_RTL') : null) == true) {
$_smarty_tpl->_assignInScope('HTMLRTL', " dir='rtl'");
}
if (defined("HTML_RTL") && (defined('HTML_RTL') ? constant('HTML_RTL') : null) == true) {
$_smarty_tpl->_assignInScope('HTMLRTL', " dir='rtl'");
} else {
$_smarty_tpl->_assignInScope('HTMLRTL', " dir='ltr'");
}
if (defined("LANG_CHARSET")) {
$_smarty_tpl->_assignInScope('METACHARSET', ((string)(defined('LANG_CHARSET') ? constant('LANG_CHARSET') : null)));
} else {
$_smarty_tpl->_assignInScope('METACHARSET', "utf-8");
}
if ((isset($_smarty_tpl->tpl_vars['PAGE_DESCRIPTION']->value)) && preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['PAGE_DESCRIPTION']->value, $tmp) > 0) {
$_smarty_tpl->_assignInScope('PAGEDESCRIPTION', ((string)$_smarty_tpl->tpl_vars['PAGE_DESCRIPTION']->value));
} else {
$_smarty_tpl->_assignInScope('PAGEDESCRIPTION', " ");
}
if ((isset($_smarty_tpl->tpl_vars['PAGE_KEYWORDS']->value)) && preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['PAGE_KEYWORDS']->value, $tmp) > 0) {
$_smarty_tpl->_assignInScope('PAGEKEYWORDS', ((string)$_smarty_tpl->tpl_vars['PAGE_KEYWORDS']->value));
} else {
$_smarty_tpl->_assignInScope('PAGEKEYWORDS', " ");
}?>

<!DOCTYPE html>
<html<?php echo $_smarty_tpl->tpl_vars['HTMLCLASS']->value;
echo $_smarty_tpl->tpl_vars['HTMLLANG']->value;
echo $_smarty_tpl->tpl_vars['HTMLRTL']->value;?>
 class="dark" id="html">
	<head>
	  
		<!-- Optimization -->
		<link rel="preload" href="<?php echo $_smarty_tpl->tpl_vars['THEME_MOD_PATH']->value;?>
" as="script">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<?php if ($_smarty_tpl->tpl_vars['THEME_SERVE_LIB_CDN']->value == "yes") {?>
		<link rel="preload" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous" as="style">
		<?php }?>

		<!-- Early loading scripts -->
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['THEME_MOD_PATH']->value;?>
"><?php echo '</script'; ?>
>

		<title><?php echo $_smarty_tpl->tpl_vars['TITLE']->value;?>
 &bull; <?php echo (defined('SITE_NAME') ? constant('SITE_NAME') : null);?>
</title>
		<meta name="title" content="<?php echo $_smarty_tpl->tpl_vars['TITLE']->value;?>
 &bull; <?php echo (defined('SITE_NAME') ? constant('SITE_NAME') : null);?>
">
        <meta charset="<?php if (defined("LANG_CHARSET")) {
echo (defined('LANG_CHARSET') ? constant('LANG_CHARSET') : null);
} else { ?>utf-8<?php }?>"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<meta name="theme-color" content="#1d1d1d">
		<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['PAGEKEYWORDS']->value;?>
"/>
		<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['PAGEDESCRIPTION']->value;?>
"/>
		<?php if ((isset($_smarty_tpl->tpl_vars['FAVICON']->value))) {?>
			<link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['FAVICON']->value;?>
" type="image/x-icon"/>
		<?php }?>

		<!-- Opengraph / Facebook -->
		<meta property="og:type" content="website" />
        <meta property="og:url" content="<?php echo $_smarty_tpl->tpl_vars['OG_URL']->value;?>
"/>
		<meta property="og:site_name" content="<?php echo (defined('SITE_NAME') ? constant('SITE_NAME') : null);?>
"/>
		<?php if ((isset($_smarty_tpl->tpl_vars['post_name']->value))) {?>
			<meta property="og:title" content="<?php echo $_smarty_tpl->tpl_vars['post_name']->value;?>
"/>
			<meta property="og:description" content="<?php echo $_smarty_tpl->tpl_vars['post_content_filtered']->value;?>
"/>
			<meta property="og:image" content="<?php echo $_smarty_tpl->tpl_vars['post_image']->value;?>
"/>
		<?php } else { ?>
			<meta property="og:title" content="<?php echo $_smarty_tpl->tpl_vars['TITLE']->value;?>
 &bull; <?php echo (defined('SITE_NAME') ? constant('SITE_NAME') : null);?>
"/>
			<meta property="og:description" content="<?php echo $_smarty_tpl->tpl_vars['PAGEDESCRIPTION']->value;?>
"/>
			<?php if ((isset($_smarty_tpl->tpl_vars['FAVICON']->value))) {?>
				<meta property="og:image" content="<?php echo $_smarty_tpl->tpl_vars['FAVICON']->value;?>
"/>
			<?php }?>
		<?php }?>

		<!-- Twitter -->
		<meta property="twitter:url" content="<?php echo $_smarty_tpl->tpl_vars['OG_URL']->value;?>
">
		<?php if ((isset($_smarty_tpl->tpl_vars['post_name']->value))) {?>
			<meta property="twitter:title" content="<?php echo $_smarty_tpl->tpl_vars['post_name']->value;?>
">
			<meta property="twitter:card" content="summary_large_image"/>
			<meta property="twitter:description" content="<?php echo $_smarty_tpl->tpl_vars['post_content_filtered']->value;?>
" />
			<meta property="twitter:image" content="<?php echo $_smarty_tpl->tpl_vars['post_image']->value;?>
" />
		<?php } else { ?>
			<meta property="twitter:title" content="<?php echo $_smarty_tpl->tpl_vars['TITLE']->value;?>
 &bull; <?php echo (defined('SITE_NAME') ? constant('SITE_NAME') : null);?>
">
			<meta property="twitter:description" content="<?php echo $_smarty_tpl->tpl_vars['PAGEDESCRIPTION']->value;?>
"/>
			<?php if ((isset($_smarty_tpl->tpl_vars['FAVICON']->value))) {?>
				<meta property="twitter:image" content="<?php echo $_smarty_tpl->tpl_vars['FAVICON']->value;?>
"/>
			<?php }?>
		<?php }?>

		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['TEMPLATE_CSS']->value, 'css');
$_smarty_tpl->tpl_vars['css']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['css']->value) {
$_smarty_tpl->tpl_vars['css']->do_else = false;
?>
			<?php echo $_smarty_tpl->tpl_vars['css']->value;?>

		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		<?php if ((isset($_smarty_tpl->tpl_vars['THEME_CUSTOM_CSS_STYLES']->value)) && preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['THEME_CUSTOM_CSS_STYLES']->value, $tmp) > 0) {?>
			<?php echo $_smarty_tpl->tpl_vars['THEME_CUSTOM_CSS_STYLES']->value;?>

		<?php }?>
		<?php if ((isset($_smarty_tpl->tpl_vars['ANALYTICS_ID']->value))) {?>
			
			  <?php echo '<script'; ?>
 async src="https://www.googletagmanager.com/gtag/js?id=<?php echo $_smarty_tpl->tpl_vars['ANALYTICS_ID']->value;?>
"><?php echo '</script'; ?>
>
			  <?php echo '<script'; ?>
>
				window.dataLayer = window.dataLayer || [];
				function gtag(){dataLayer.push(arguments);}
				gtag('js', new Date());
	  
				gtag('config', '<?php echo $_smarty_tpl->tpl_vars['ANALYTICS_ID']->value;?>
');
			  <?php echo '</script'; ?>
>
			
		<?php }?>

		<?php if ((isset($_smarty_tpl->tpl_vars['DEBUGBAR_JS']->value))) {?>
			<?php echo $_smarty_tpl->tpl_vars['DEBUGBAR_JS']->value;?>

		<?php }
}
}
