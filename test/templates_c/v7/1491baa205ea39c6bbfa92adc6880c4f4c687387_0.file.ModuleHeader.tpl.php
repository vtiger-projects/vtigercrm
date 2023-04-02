<?php
/* Smarty version 3.1.39, created on 2023-04-02 17:39:53
  from '/var/www/demo/layouts/v7/modules/Settings/Vtiger/ModuleHeader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6429bde92c76b4_22547769',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1491baa205ea39c6bbfa92adc6880c4f4c687387' => 
    array (
      0 => '/var/www/demo/layouts/v7/modules/Settings/Vtiger/ModuleHeader.tpl',
      1 => 1680450284,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6429bde92c76b4_22547769 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="col-sm-12 col-xs-12 module-action-bar clearfix coloredBorderTop"><div class="module-action-content clearfix"><div class="col-lg-7 col-md-7"><?php if ($_smarty_tpl->tpl_vars['USER_MODEL']->value->isAdminUser()) {?><a title="<?php echo vtranslate('Home',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" href='index.php?module=Vtiger&parent=Settings&view=Index'><h4 class="module-title pull-left text-uppercase"><?php echo vtranslate('LBL_HOME',$_smarty_tpl->tpl_vars['MODULE']->value);?>
 </h4></a>&nbsp;<span class="fa fa-angle-right pull-left <?php if ($_smarty_tpl->tpl_vars['VIEW']->value == 'Index' && $_smarty_tpl->tpl_vars['MODULE']->value == 'Vtiger') {?> hide <?php }?>" aria-hidden="true" style="padding-top: 12px;padding-left: 5px; padding-right: 5px;"></span><?php }
if ($_smarty_tpl->tpl_vars['MODULE']->value != 'Vtiger' || $_REQUEST['view'] != 'Index') {
if ($_smarty_tpl->tpl_vars['ACTIVE_BLOCK']->value['block']) {?><span class="current-filter-name filter-name pull-left"><?php echo vtranslate($_smarty_tpl->tpl_vars['ACTIVE_BLOCK']->value['block'],$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
&nbsp;<span class="fa fa-angle-right" aria-hidden="true"></span>&nbsp;</span><?php }
if ($_smarty_tpl->tpl_vars['MODULE']->value != 'Vtiger') {
$_smarty_tpl->_assignInScope('ALLOWED_MODULES', explode(",",'Users,Profiles,Groups,Roles,Webforms,Workflows'));
if ($_smarty_tpl->tpl_vars['MODULE_MODEL']->value && in_array($_smarty_tpl->tpl_vars['MODULE']->value,$_smarty_tpl->tpl_vars['ALLOWED_MODULES']->value)) {
if ($_smarty_tpl->tpl_vars['MODULE']->value == 'Webforms') {
$_smarty_tpl->_assignInScope('URL', $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getListViewUrl());
} else {
$_smarty_tpl->_assignInScope('URL', $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getDefaultUrl());
}
if (strpos($_smarty_tpl->tpl_vars['URL']->value,'parent') == '') {
$_smarty_tpl->_assignInScope('URL', (($_smarty_tpl->tpl_vars['URL']->value).('&parent=')).($_REQUEST['parent']));
}
}?><span class="current-filter-name settingModuleName filter-name pull-left"><?php if ($_REQUEST['view'] == 'Calendar') {
if ($_REQUEST['mode'] == 'Edit') {?><a href="<?php echo ((((("index.php?module=").($_REQUEST['module'])).('&parent=')).($_REQUEST['parent'])).('&view=')).($_REQUEST['view']);?>
"><?php ob_start();
echo $_smarty_tpl->tpl_vars['PAGETITLE']->value;
$_prefixVariable1 = ob_get_clean();
echo vtranslate($_prefixVariable1,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</a>&nbsp;<a href=""><span class="fa fa-angle-right" aria-hidden="true"></span>&nbsp;<?php echo vtranslate('LBL_EDITING',$_smarty_tpl->tpl_vars['MODULE']->value);?>
 :&nbsp;<?php ob_start();
echo $_smarty_tpl->tpl_vars['PAGETITLE']->value;
$_prefixVariable2 = ob_get_clean();
echo vtranslate($_prefixVariable2,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
&nbsp;<?php echo vtranslate('LBL_OF',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['USER_MODEL']->value->getName();?>
</a><?php } else { ?><a href=""><?php ob_start();
echo $_smarty_tpl->tpl_vars['PAGETITLE']->value;
$_prefixVariable3 = ob_get_clean();
echo vtranslate($_prefixVariable3,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
&nbsp;<span class="fa fa-angle-right" aria-hidden="true"></span>&nbsp;<?php echo $_smarty_tpl->tpl_vars['USER_MODEL']->value->getName();?>
</a><?php }
} elseif ($_REQUEST['view'] != 'List' && $_REQUEST['module'] == 'Users') {
if ($_REQUEST['view'] == 'PreferenceEdit') {?><a href="<?php echo ((((("index.php?module=").($_REQUEST['module'])).('&parent=')).($_REQUEST['parent'])).('&view=PreferenceDetail&record=')).($_REQUEST['record']);?>
"><?php echo vtranslate($_smarty_tpl->tpl_vars['ACTIVE_BLOCK']->value['block'],$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
&nbsp;</a><a href=""><span class="fa fa-angle-right" aria-hidden="true"></span>&nbsp;<?php echo vtranslate('LBL_EDITING',$_smarty_tpl->tpl_vars['MODULE']->value);?>
 :&nbsp;<?php echo $_smarty_tpl->tpl_vars['USER_MODEL']->value->getName();?>
</a><?php } elseif ($_REQUEST['view'] == 'Edit' || $_REQUEST['view'] == 'Detail') {?><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
"><?php if ($_REQUEST['extensionModule']) {
echo $_REQUEST['extensionModule'];
} else {
ob_start();
echo $_smarty_tpl->tpl_vars['PAGETITLE']->value;
$_prefixVariable4 = ob_get_clean();
echo vtranslate($_prefixVariable4,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);
}?>&nbsp;</a><a href=""><span class="fa fa-angle-right" aria-hidden="true"></span>&nbsp;<?php if ($_REQUEST['view'] == 'Edit') {
if ($_smarty_tpl->tpl_vars['RECORD']->value) {
echo vtranslate('LBL_EDITING',$_smarty_tpl->tpl_vars['MODULE']->value);?>
 :&nbsp;<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getName();
} else {
echo vtranslate('LBL_ADDING_NEW',$_smarty_tpl->tpl_vars['MODULE']->value);
}
} else {
echo $_smarty_tpl->tpl_vars['RECORD']->value->getName();
}?></a><?php } else { ?><a href=""><?php echo $_smarty_tpl->tpl_vars['USER_MODEL']->value->getName();?>
</a><?php }
} elseif ($_smarty_tpl->tpl_vars['URL']->value && strpos($_smarty_tpl->tpl_vars['URL']->value,$_REQUEST['view']) == '') {?><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
"><?php if ($_REQUEST['extensionModule']) {
echo $_REQUEST['extensionModule'];
} else {
ob_start();
echo $_smarty_tpl->tpl_vars['PAGETITLE']->value;
$_prefixVariable5 = ob_get_clean();
echo vtranslate($_prefixVariable5,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);
}?></a>&nbsp;<a href=""><span class="fa fa-angle-right" aria-hidden="true"></span>&nbsp;<?php if ($_smarty_tpl->tpl_vars['RECORD']->value) {
if ($_REQUEST['view'] == 'Edit') {
echo vtranslate('LBL_EDITING',$_smarty_tpl->tpl_vars['MODULE']->value);?>
 :&nbsp;<?php }
echo $_smarty_tpl->tpl_vars['RECORD']->value->getName();
}?></a><?php } else { ?>&nbsp;<?php if ($_REQUEST['extensionModule']) {
echo $_REQUEST['extensionModule'];
} else {
ob_start();
echo $_smarty_tpl->tpl_vars['PAGETITLE']->value;
$_prefixVariable6 = ob_get_clean();
echo vtranslate($_prefixVariable6,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);
}
}?></span><?php } else {
if ($_REQUEST['view'] == 'TaxIndex') {
$_smarty_tpl->_assignInScope('SELECTED_MODULE', 'LBL_TAX_MANAGEMENT');
} elseif ($_REQUEST['view'] == 'TermsAndConditionsEdit') {
$_smarty_tpl->_assignInScope('SELECTED_MODULE', 'LBL_TERMS_AND_CONDITIONS');
} else {
$_smarty_tpl->_assignInScope('SELECTED_MODULE', $_smarty_tpl->tpl_vars['ACTIVE_BLOCK']->value['menu']);
}?><span class="current-filter-name filter-name pull-left" style='width:50%;'><span class="display-inline-block"><?php ob_start();
echo $_smarty_tpl->tpl_vars['PAGETITLE']->value;
$_prefixVariable7 = ob_get_clean();
echo vtranslate($_prefixVariable7,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></span><?php }
}?></div><div class="col-lg-5 col-md-5 pull-right"><div id="appnav" class="navbar-right"><ul class="nav navbar-nav"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MODULE_BASIC_ACTIONS']->value, 'BASIC_ACTION');
$_smarty_tpl->tpl_vars['BASIC_ACTION']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['BASIC_ACTION']->value) {
$_smarty_tpl->tpl_vars['BASIC_ACTION']->do_else = false;
?><li><?php if ($_smarty_tpl->tpl_vars['BASIC_ACTION']->value->getLabel() == 'LBL_IMPORT') {?><button id="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_basicAction_<?php echo Vtiger_Util_Helper::replaceSpaceWithUnderScores($_smarty_tpl->tpl_vars['BASIC_ACTION']->value->getLabel());?>
" type="button" class="btn addButton btn-default module-buttons"<?php if (stripos($_smarty_tpl->tpl_vars['BASIC_ACTION']->value->getUrl(),'javascript:') === 0) {?>onclick='<?php echo substr($_smarty_tpl->tpl_vars['BASIC_ACTION']->value->getUrl(),strlen("javascript:"));?>
;'<?php } else { ?>onclick="Vtiger_Import_Js.triggerImportAction('<?php echo $_smarty_tpl->tpl_vars['BASIC_ACTION']->value->getUrl();?>
')"<?php }?>><div class="fa <?php echo $_smarty_tpl->tpl_vars['BASIC_ACTION']->value->getIcon();?>
" aria-hidden="true"></div>&nbsp;&nbsp;<?php echo vtranslate($_smarty_tpl->tpl_vars['BASIC_ACTION']->value->getLabel(),$_smarty_tpl->tpl_vars['MODULE']->value);?>
</button><?php } else { ?><button type="button" class="btn addButton btn-default module-buttons" id="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_listView_basicAction_<?php echo Vtiger_Util_Helper::replaceSpaceWithUnderScores($_smarty_tpl->tpl_vars['BASIC_ACTION']->value->getLabel());?>
"<?php if (stripos($_smarty_tpl->tpl_vars['BASIC_ACTION']->value->getUrl(),'javascript:') === 0) {?>onclick='<?php echo substr($_smarty_tpl->tpl_vars['BASIC_ACTION']->value->getUrl(),strlen("javascript:"));?>
;'<?php } else { ?>onclick='window.location.href="<?php echo $_smarty_tpl->tpl_vars['BASIC_ACTION']->value->getUrl();?>
"'<?php }?>><div class="fa <?php echo $_smarty_tpl->tpl_vars['BASIC_ACTION']->value->getIcon();?>
" aria-hidden="true"></div>&nbsp;&nbsp;<?php echo vtranslate($_smarty_tpl->tpl_vars['BASIC_ACTION']->value->getLabel(),$_smarty_tpl->tpl_vars['MODULE']->value);?>
</button><?php }?></li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if (!empty($_smarty_tpl->tpl_vars['LISTVIEW_LINKS']->value['LISTVIEWSETTING']) && (count($_smarty_tpl->tpl_vars['LISTVIEW_LINKS']->value['LISTVIEWSETTING']) > 0)) {
if (empty($_smarty_tpl->tpl_vars['QUALIFIEDMODULE']->value)) {
$_smarty_tpl->_assignInScope('QUALIFIEDMODULE', $_smarty_tpl->tpl_vars['MODULE']->value);
}?><li><div class="settingsIcon"><button type="button" class="btn btn-default module-buttons dropdown-toggle" data-toggle="dropdown" aria-expanded="false" title="<?php echo vtranslate('LBL_SETTINGS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"><span class="fa fa-wrench" aria-hidden="true"></span>&nbsp; <span class="caret"></span></button><ul class="detailViewSetting dropdown-menu"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LISTVIEW_LINKS']->value['LISTVIEWSETTING'], 'SETTING');
$_smarty_tpl->tpl_vars['SETTING']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['SETTING']->value) {
$_smarty_tpl->tpl_vars['SETTING']->do_else = false;
?><li id="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_setings_lisview_advancedAction_<?php echo $_smarty_tpl->tpl_vars['SETTING']->value->getLabel();?>
"><a	<?php if (stripos($_smarty_tpl->tpl_vars['SETTING']->value->getUrl(),'javascript:') === 0) {?>onclick='<?php echo substr($_smarty_tpl->tpl_vars['SETTING']->value->getUrl(),strlen("javascript:"));?>
;'<?php } else { ?>href="<?php echo $_smarty_tpl->tpl_vars['SETTING']->value->getUrl();?>
"<?php }?>><?php echo vtranslate($_smarty_tpl->tpl_vars['SETTING']->value->getLabel(),$_smarty_tpl->tpl_vars['QUALIFIEDMODULE']->value);?>
</a></li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul></div></li><?php }
$_smarty_tpl->_assignInScope('RESTRICTED_MODULE_LIST', array('Users','EmailTemplates'));
if (!empty($_smarty_tpl->tpl_vars['LISTVIEW_LINKS']->value['LISTVIEWBASIC']) && (count($_smarty_tpl->tpl_vars['LISTVIEW_LINKS']->value['LISTVIEWBASIC']) > 0) && (!in_array($_smarty_tpl->tpl_vars['MODULE']->value,$_smarty_tpl->tpl_vars['RESTRICTED_MODULE_LIST']->value))) {
if (empty($_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value)) {
$_smarty_tpl->_assignInScope('QUALIFIED_MODULE', ('Settings:').($_smarty_tpl->tpl_vars['MODULE']->value));
}
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LISTVIEW_LINKS']->value['LISTVIEWBASIC'], 'LISTVIEW_BASICACTION');
$_smarty_tpl->tpl_vars['LISTVIEW_BASICACTION']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['LISTVIEW_BASICACTION']->value) {
$_smarty_tpl->tpl_vars['LISTVIEW_BASICACTION']->do_else = false;
if ($_smarty_tpl->tpl_vars['MODULE']->value == 'Users') {?> <?php $_smarty_tpl->_assignInScope('LANGMODULE', $_smarty_tpl->tpl_vars['MODULE']->value);?> <?php }?><li><button class="btn btn-default addButton module-buttons" id="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_listView_basicAction_<?php echo Vtiger_Util_Helper::replaceSpaceWithUnderScores($_smarty_tpl->tpl_vars['LISTVIEW_BASICACTION']->value->getLabel());?>
"<?php if ($_smarty_tpl->tpl_vars['MODULE']->value == 'Workflows') {?>onclick='Settings_Workflows_List_Js.triggerCreate("<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_BASICACTION']->value->getUrl();?>
&mode=V7Edit")'<?php } else {
if (stripos($_smarty_tpl->tpl_vars['LISTVIEW_BASICACTION']->value->getUrl(),'javascript:') === 0) {?>onclick='<?php echo substr($_smarty_tpl->tpl_vars['LISTVIEW_BASICACTION']->value->getUrl(),strlen("javascript:"));?>
;'<?php } else { ?>onclick='window.location.href = "<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_BASICACTION']->value->getUrl();?>
"'<?php }
}?>><?php if ($_smarty_tpl->tpl_vars['MODULE']->value == 'Tags') {?><i class="fa fa-plus"></i>&nbsp;&nbsp;<?php echo vtranslate('LBL_ADD_TAG',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);
} else {
if ($_smarty_tpl->tpl_vars['LISTVIEW_BASICACTION']->value->getIcon()) {?><i class="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_BASICACTION']->value->getIcon();?>
"></i>&nbsp;&nbsp;<?php }
echo vtranslate($_smarty_tpl->tpl_vars['LISTVIEW_BASICACTION']->value->getLabel(),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);
}?></button></li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?></ul></div></div></div><?php if ($_smarty_tpl->tpl_vars['FIELDS_INFO']->value != null) {
echo '<script'; ?>
 type="text/javascript">var uimeta = (function () {var fieldInfo = <?php echo $_smarty_tpl->tpl_vars['FIELDS_INFO']->value;?>
;return {field: {get: function (name, property) {if (name && property === undefined) {return fieldInfo[name];}if (name && property) {return fieldInfo[name][property]}},isMandatory: function (name) {if (fieldInfo[name]) {return fieldInfo[name].mandatory;}return false;},getType: function (name) {if (fieldInfo[name]) {return fieldInfo[name].type}return false;}},};})();<?php echo '</script'; ?>
><?php }?></div>
<?php }
}
