<?php
/* Smarty version 3.1.39, created on 2023-04-02 20:02:21
  from '/Applications/MAMP/htdocs/demo/layouts/v7/modules/Vtiger/Header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6429df4d1bfe37_60166817',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0dbe334c7b53eee744e5289d63ae845b3e71accb' => 
    array (
      0 => '/Applications/MAMP/htdocs/demo/layouts/v7/modules/Vtiger/Header.tpl',
      1 => 1680450284,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6429df4d1bfe37_60166817 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html><html><head><title><?php echo vtranslate($_smarty_tpl->tpl_vars['PAGETITLE']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</title><link rel="SHORTCUT ICON" href="layouts/v7/skins/images/favicon.ico"><meta name="viewport" content="width=device-width, initial-scale=1.0" /><meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /><link type='text/css' rel='stylesheet' href='<?php echo vresource_url("layouts/v7/lib/todc/css/bootstrap.min.css");?>
'><link type='text/css' rel='stylesheet' href='<?php echo vresource_url("layouts/v7/lib/todc/css/docs.min.css");?>
'><link type='text/css' rel='stylesheet' href='<?php echo vresource_url("layouts/v7/lib/todc/css/todc-bootstrap.min.css");?>
'><link type='text/css' rel='stylesheet' href='<?php echo vresource_url("layouts/v7/lib/font-awesome/css/font-awesome.min.css");?>
'><link type='text/css' rel='stylesheet' href='<?php echo vresource_url("layouts/v7/lib/jquery/select2/select2.css");?>
'><link type='text/css' rel='stylesheet' href='<?php echo vresource_url("layouts/v7/lib/select2-bootstrap/select2-bootstrap.css");?>
'><link type='text/css' rel='stylesheet' href='<?php echo vresource_url("libraries/bootstrap/js/eternicode-bootstrap-datepicker/css/datepicker3.css");?>
'><link type='text/css' rel='stylesheet' href='<?php echo vresource_url("layouts/v7/lib/jquery/jquery-ui-1.12.0.custom/jquery-ui.css");?>
'><link type='text/css' rel='stylesheet' href='<?php echo vresource_url("layouts/v7/lib/vt-icons/style.css");?>
'><link type='text/css' rel='stylesheet' href='<?php echo vresource_url("layouts/v7/lib/animate/animate.min.css");?>
'><link type='text/css' rel='stylesheet' href='<?php echo vresource_url("layouts/v7/lib/jquery/malihu-custom-scrollbar/jquery.mCustomScrollbar.css");?>
'><link type='text/css' rel='stylesheet' href='<?php echo vresource_url("layouts/v7/lib/jquery/jquery.qtip.custom/jquery.qtip.css");?>
'><link type='text/css' rel='stylesheet' href='<?php echo vresource_url("layouts/v7/lib/jquery/daterangepicker/daterangepicker.css");?>
'><input type="hidden" id="inventoryModules" value=<?php echo ZEND_JSON::encode($_smarty_tpl->tpl_vars['INVENTORY_MODULES']->value);?>
><?php $_smarty_tpl->_assignInScope('V7_THEME_PATH', Vtiger_Theme::getv7AppStylePath($_smarty_tpl->tpl_vars['SELECTED_MENU_CATEGORY']->value));
if (strpos($_smarty_tpl->tpl_vars['V7_THEME_PATH']->value,".less") !== false) {?><link type="text/css" rel="stylesheet/less" href="<?php echo vresource_url($_smarty_tpl->tpl_vars['V7_THEME_PATH']->value);?>
" media="screen" /><?php } else { ?><link type="text/css" rel="stylesheet" href="<?php echo vresource_url($_smarty_tpl->tpl_vars['V7_THEME_PATH']->value);?>
" media="screen" /><?php }
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['STYLES']->value, 'cssModel', false, 'index');
$_smarty_tpl->tpl_vars['cssModel']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['cssModel']->value) {
$_smarty_tpl->tpl_vars['cssModel']->do_else = false;
?><link type="text/css" rel="<?php echo $_smarty_tpl->tpl_vars['cssModel']->value->getRel();?>
" href="<?php echo vresource_url($_smarty_tpl->tpl_vars['cssModel']->value->getHref());?>
" media="<?php echo $_smarty_tpl->tpl_vars['cssModel']->value->getMedia();?>
" /><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?><style type="text/css">@media print {.noprint { display:none; }}</style><?php echo '<script'; ?>
 type="text/javascript">var __pageCreationTime = (new Date()).getTime();<?php echo '</script'; ?>
><?php echo '<script'; ?>
 src="<?php echo vresource_url('layouts/v7/lib/jquery/jquery.min.js');?>
"><?php echo '</script'; ?>
><?php echo '<script'; ?>
 src="<?php echo vresource_url('layouts/v7/lib/jquery/jquery-migrate-1.4.1.js');?>
"><?php echo '</script'; ?>
><?php echo '<script'; ?>
 type="text/javascript">var _META = { 'module': "<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
", view: "<?php echo $_smarty_tpl->tpl_vars['VIEW']->value;?>
", 'parent': "<?php echo $_smarty_tpl->tpl_vars['PARENT_MODULE']->value;?>
", 'notifier':"<?php echo $_smarty_tpl->tpl_vars['NOTIFIER_URL']->value;?>
", 'app':"<?php echo $_smarty_tpl->tpl_vars['SELECTED_MENU_CATEGORY']->value;?>
" };<?php if ($_smarty_tpl->tpl_vars['EXTENSION_MODULE']->value) {?>var _EXTENSIONMETA = { 'module': "<?php echo $_smarty_tpl->tpl_vars['EXTENSION_MODULE']->value;?>
", view: "<?php echo $_smarty_tpl->tpl_vars['EXTENSION_VIEW']->value;?>
"};<?php }?>var _USERMETA;<?php if ($_smarty_tpl->tpl_vars['CURRENT_USER_MODEL']->value) {?>_USERMETA =  { 'id' : "<?php echo $_smarty_tpl->tpl_vars['CURRENT_USER_MODEL']->value->get('id');?>
", 'menustatus' : "<?php echo $_smarty_tpl->tpl_vars['CURRENT_USER_MODEL']->value->get('leftpanelhide');?>
",'currency' : "<?php echo decode_html($_smarty_tpl->tpl_vars['USER_CURRENCY_SYMBOL']->value);?>
", 'currencySymbolPlacement' : "<?php echo $_smarty_tpl->tpl_vars['CURRENT_USER_MODEL']->value->get('currency_symbol_placement');?>
",'currencyGroupingPattern' : "<?php echo $_smarty_tpl->tpl_vars['CURRENT_USER_MODEL']->value->get('currency_grouping_pattern');?>
", 'truncateTrailingZeros' : "<?php echo $_smarty_tpl->tpl_vars['CURRENT_USER_MODEL']->value->get('truncate_trailing_zeros');?>
",'userlabel':"<?php echo decode_html($_smarty_tpl->tpl_vars['CURRENT_USER_MODEL']->value->get('userlabel'));?>
",};<?php }
echo '</script'; ?>
></head><?php $_smarty_tpl->_assignInScope('CURRENT_USER_MODEL', Users_Record_Model::getCurrentUserModel());?><body data-skinpath="<?php echo Vtiger_Theme::getBaseThemePath();?>
" data-language="<?php echo $_smarty_tpl->tpl_vars['LANGUAGE']->value;?>
" data-user-decimalseparator="<?php echo $_smarty_tpl->tpl_vars['CURRENT_USER_MODEL']->value->get('currency_decimal_separator');?>
" data-user-dateformat="<?php echo $_smarty_tpl->tpl_vars['CURRENT_USER_MODEL']->value->get('date_format');?>
"data-user-groupingseparator="<?php echo $_smarty_tpl->tpl_vars['CURRENT_USER_MODEL']->value->get('currency_grouping_separator');?>
" data-user-numberofdecimals="<?php echo $_smarty_tpl->tpl_vars['CURRENT_USER_MODEL']->value->get('no_of_currency_decimals');?>
" data-user-hourformat="<?php echo $_smarty_tpl->tpl_vars['CURRENT_USER_MODEL']->value->get('hour_format');?>
"data-user-calendar-reminder-interval="<?php echo $_smarty_tpl->tpl_vars['CURRENT_USER_MODEL']->value->getCurrentUserActivityReminderInSeconds();?>
"><input type="hidden" id="start_day" value="<?php echo $_smarty_tpl->tpl_vars['CURRENT_USER_MODEL']->value->get('dayoftheweek');?>
" /><div id="page"><div id="pjaxContainer" class="hide noprint"></div><div id="messageBar" class="hide"></div><?php }
}
