<?php
/* Smarty version 3.1.39, created on 2023-04-02 17:40:04
  from '/var/www/demo/layouts/v7/modules/Settings/Webforms/FieldsEditView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6429bdf4f30562_34946956',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f8a1c59766a53046d2d600a12fd70c0a0b5be69' => 
    array (
      0 => '/var/www/demo/layouts/v7/modules/Settings/Webforms/FieldsEditView.tpl',
      1 => 1680454787,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6429bdf4f30562_34946956 (Smarty_Internal_Template $_smarty_tpl) {
?><input type="hidden" name="selectedFieldsData" val=""/><input type="hidden" name="mode" value="<?php echo $_smarty_tpl->tpl_vars['MODE']->value;?>
"/><input type="hidden" name="targetModule" value="<?php echo $_smarty_tpl->tpl_vars['SOURCE_MODULE']->value;?>
"/><div class="fieldBlockContainer-webform" style="margin-bottom: 0;"><div class="fieldBlockHeader"><h4><?php echo vtranslate($_smarty_tpl->tpl_vars['SOURCE_MODULE']->value,$_smarty_tpl->tpl_vars['SOURCE_MODULE']->value);?>
 <?php echo vtranslate('LBL_FIELD_INFORMATION',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</h4></div><hr><table class="table table-bordered" width="100%" name="targetModuleFields"><colgroup><col style="width:5%;"><col style="width:5%;"><col style="width:25%;"><col style="width:40%;"><col style="width:25%;"></colgroup><tr><td colspan="5"><div class="row"><div class="col-sm-2 col-lg-2"><div class="textAlignCenter" style="margin-top:8px;"><b><?php echo vtranslate('LBL_ADD_FIELDS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</b></div></div><div class="col-sm-8 col-lg-8"><select id="fieldsList" multiple="multiple" data-placeholder="<?php echo vtranslate('LBL_SELECT_FIELDS_OF_TARGET_MODULE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" class="select2" style="width:100%"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ALL_FIELD_MODELS_LIST']->value, 'BLOCK_FIELDS', false, 'BLOCK_LABEL', 'EditViewBlockLevelLoop', array (
));
$_smarty_tpl->tpl_vars['BLOCK_FIELDS']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['BLOCK_LABEL']->value => $_smarty_tpl->tpl_vars['BLOCK_FIELDS']->value) {
$_smarty_tpl->tpl_vars['BLOCK_FIELDS']->do_else = false;
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['BLOCK_FIELDS']->value, 'FIELD_MODEL', false, 'FIELD_NAME', 'blockfields', array (
));
$_smarty_tpl->tpl_vars['FIELD_MODEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_NAME']->value => $_smarty_tpl->tpl_vars['FIELD_MODEL']->value) {
$_smarty_tpl->tpl_vars['FIELD_MODEL']->do_else = false;
$_smarty_tpl->_assignInScope('FIELD_INFO', Vtiger_Functions::jsonEncode($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo()));?><option value="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('name');?>
" data-field-info='<?php echo $_smarty_tpl->tpl_vars['FIELD_INFO']->value;?>
' data-mandatory="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory(true) == 1 ? "true" : "false";?>
"<?php if ((array_key_exists($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('name'),$_smarty_tpl->tpl_vars['SELECTED_FIELD_MODELS_LIST']->value)) || ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory(true))) {?>selected<?php }?>><?php echo vtranslate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('label'),$_smarty_tpl->tpl_vars['SOURCE_MODULE']->value);
if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory(true)) {?><span class="redColor">*</span><?php }?></option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div><div class="col-sm-2 col-lg-2" style="margin-top: 2px"><button type="button" id="saveFieldsOrder" class="btn btn-success" disabled="disabled"><?php echo vtranslate('LBL_SAVE_FIELDS_ORDER',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</button></div></div></td></tr><tr name="fieldHeaders"><td class="textAlignCenter"><b><?php echo vtranslate('LBL_MANDATORY',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</b></td><td class="textAlignCenter"><b><?php echo vtranslate('LBL_HIDDEN',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</b></td><td><b><?php echo vtranslate('LBL_FIELD_NAME',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</b></td><td class="textAlignCenter"><b><?php echo vtranslate('LBL_OVERRIDE_VALUE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</b></td><td><b><?php echo vtranslate('LBL_WEBFORM_REFERENCE_FIELD',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</b></td></tr><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ALL_FIELD_MODELS_LIST']->value, 'BLOCK_FIELDS', false, 'BLOCK_LABEL', 'EditViewBlockLevelLoop', array (
));
$_smarty_tpl->tpl_vars['BLOCK_FIELDS']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['BLOCK_LABEL']->value => $_smarty_tpl->tpl_vars['BLOCK_FIELDS']->value) {
$_smarty_tpl->tpl_vars['BLOCK_FIELDS']->do_else = false;
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['BLOCK_FIELDS']->value, 'FIELD_MODEL', false, 'FIELD_NAME', 'blockfields', array (
));
$_smarty_tpl->tpl_vars['FIELD_MODEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_NAME']->value => $_smarty_tpl->tpl_vars['FIELD_MODEL']->value) {
$_smarty_tpl->tpl_vars['FIELD_MODEL']->do_else = false;
if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory(true) || array_key_exists($_smarty_tpl->tpl_vars['FIELD_NAME']->value,$_smarty_tpl->tpl_vars['SELECTED_FIELD_MODELS_LIST']->value)) {
if (array_key_exists($_smarty_tpl->tpl_vars['FIELD_NAME']->value,$_smarty_tpl->tpl_vars['SELECTED_FIELD_MODELS_LIST']->value)) {
$_smarty_tpl->_assignInScope('SELECETED_FIELD_MODEL', $_smarty_tpl->tpl_vars['SELECTED_FIELD_MODELS_LIST']->value[$_smarty_tpl->tpl_vars['FIELD_NAME']->value]);
$_smarty_tpl->_assignInScope('FIELD_MODEL', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->set('fieldvalue',$_smarty_tpl->tpl_vars['SELECETED_FIELD_MODEL']->value->get('fieldvalue')));
}?><tr data-name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName();?>
" class="listViewEntries" data-type="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldDataType();?>
" data-mandatory-field=<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory(true) == 1 ? "true" : "false";?>
><td class="textAlignCenter" style="vertical-align: inherit"><?php if (!empty($_smarty_tpl->tpl_vars['SELECETED_FIELD_MODEL']->value)) {?><input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['SELECETED_FIELD_MODEL']->value->get('sequence');?>
" class="sequenceNumber" name='selectedFieldsData[<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
][sequence]'/><?php } else { ?><input type="hidden" value="" class="sequenceNumber" name='selectedFieldsData[<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
][sequence]'/><?php }?><input type="hidden" value="0" name='selectedFieldsData[<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
][required]'/><input type="checkbox" <?php if (($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory(true) == 1) || ($_smarty_tpl->tpl_vars['SELECETED_FIELD_MODEL']->value->get('required') == 1)) {?>checked="checked"<?php }
if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory(true) == 1) {?> onclick="return false;" onkeydown="return false;"<?php }?>name='selectedFieldsData[<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
][required]' class="markRequired mandatoryField" value="1" style="margin-top: -3px;"/></td><td class="textAlignCenter verticalAlignMiddle" style="vertical-align: inherit"><input type="hidden" value="0" name='selectedFieldsData[<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
][hidden]'/><input type="checkbox" <?php if ((!empty($_smarty_tpl->tpl_vars['SELECETED_FIELD_MODEL']->value)) && ($_smarty_tpl->tpl_vars['SELECETED_FIELD_MODEL']->value->get('hidden') == 1)) {?> checked="checked"<?php }?>name="selectedFieldsData[<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
][hidden]" class="markRequired hiddenField" value="1"/></td><td class="fieldLabel" style="vertical-align: inherit" data-label="<?php echo vtranslate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('label'),$_smarty_tpl->tpl_vars['SOURCE_MODULE']->value);
if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory(true)) {?>*<?php }?>"><?php echo vtranslate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('label'),$_smarty_tpl->tpl_vars['SOURCE_MODULE']->value);
if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory(true)) {?><span class="redColor">*</span><?php }?></td><?php $_smarty_tpl->_assignInScope('DATATYPEMARGINLEFT', array("date","currency","percentage","reference","multicurrency"));
$_smarty_tpl->_assignInScope('IS_PARENT_EXISTS', strpos($_smarty_tpl->tpl_vars['MODULE']->value,":"));
if ($_smarty_tpl->tpl_vars['IS_PARENT_EXISTS']->value) {
$_smarty_tpl->_assignInScope('SPLITTED_MODULE', explode(":",$_smarty_tpl->tpl_vars['MODULE']->value));
$_smarty_tpl->_assignInScope('MODULE', ((string)$_smarty_tpl->tpl_vars['SPLITTED_MODULE']->value[1]));
}?><td class="fieldValue" data-name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName();?>
" <?php if (in_array($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldDataType(),$_smarty_tpl->tpl_vars['DATATYPEMARGINLEFT']->value)) {?> <?php }?>><?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldDataType() == 'boolean') {
$_smarty_tpl->_assignInScope('FIELD_NAME', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName());
$_smarty_tpl->_assignInScope('FIELD_INFO', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo());
$_smarty_tpl->_assignInScope('PICKLIST_VALUES', $_smarty_tpl->tpl_vars['FIELD_INFO']->value['picklistvalues']);?><select class="select2 col-sm-6 inputElement" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory() == true) {?> data-rule-required="true" <?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value)) {?>data-specific-rules='<?php echo ZEND_JSON::encode($_smarty_tpl->tpl_vars['FIELD_INFO']->value["validator"]);?>
'<?php }?> data-selected-value='<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue');?>
'><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PICKLIST_VALUES']->value, 'PICKLIST_VALUE', false, 'PICKLIST_NAME');
$_smarty_tpl->tpl_vars['PICKLIST_VALUE']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['PICKLIST_NAME']->value => $_smarty_tpl->tpl_vars['PICKLIST_VALUE']->value) {
$_smarty_tpl->tpl_vars['PICKLIST_VALUE']->do_else = false;
?><option value="<?php echo Vtiger_Util_Helper::toSafeHTML($_smarty_tpl->tpl_vars['PICKLIST_NAME']->value);?>
" <?php if ((trim(decode_html($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'))) == trim($_smarty_tpl->tpl_vars['PICKLIST_NAME']->value)) || ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue') == "1" && ($_smarty_tpl->tpl_vars['PICKLIST_NAME']->value == 'on')) || ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue') == "0" && ($_smarty_tpl->tpl_vars['PICKLIST_NAME']->value == 'off'))) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['PICKLIST_VALUE']->value;?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select><?php } elseif ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldDataType() != 'image') {
$_smarty_tpl->_subTemplateRender(vtemplate_path($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUITypeModel()->getTemplateName(),$_smarty_tpl->tpl_vars['SOURCE_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('BLOCK_FIELDS'=>$_smarty_tpl->tpl_vars['BLOCK_FIELDS']->value,'MODULE_NAME'=>$_smarty_tpl->tpl_vars['MODULE']->value,'FIELD_NAME'=>$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName(),'MODE'=>'webform'), 0, true);
}?></td><td style="vertical-align: inherit"><?php if (Settings_Webforms_Record_Model::isCustomField($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('name'))) {
echo vtranslate('LBL_LABEL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
 : <?php echo vtranslate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('label'),$_smarty_tpl->tpl_vars['SOURCE_MODULE']->value);
} else {
ob_start();
echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('name');
$_prefixVariable5 = ob_get_clean();
echo vtranslate($_prefixVariable5,$_smarty_tpl->tpl_vars['SOURCE_MODULE']->value);
}
if (!$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory(true)) {?><div class="pull-right actions"><span class="actionImages"><a class="removeTargetModuleField" href="javascript:void(0);"><i class="icon-remove-sign"></i></a></span></div><?php }?></td></tr><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></tbody></table></div><?php if (Vtiger_Functions::isDocumentsRelated($_smarty_tpl->tpl_vars['SOURCE_MODULE']->value)) {?><div class="fieldBlockContainer"><div class="fieldBlockHeader"><h4><?php echo vtranslate('LBL_UPLOAD_DOCUMENTS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h4></div><hr><div><div><button class="btn btn-default" id="addFileFieldBtn"><span class="fa fa-plus"></span>&nbsp;&nbsp;<?php echo vtranslate('LBL_ADD_FILE_FIELD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button></div></div><div class="row" style="margin-top: 10px;"><div class="col-lg-7"><table class="table table-bordered" id='fileFieldsTable'><tbody><tr><td><b><?php echo vtranslate('LBL_FIELD_LABEL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</b></td><td class="textAlignCenter"><b><?php echo vtranslate('LBL_MANDATORY',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</b></td><td class="textAlignCenter"><b><?php echo vtranslate('LBL_ACTIONS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</b></td></tr><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['DOCUMENT_FILE_FIELDS']->value, 'DOCUMENT_FILE_FIELD', false, 'FILE_INDEX');
$_smarty_tpl->tpl_vars['DOCUMENT_FILE_FIELD']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['FILE_INDEX']->value => $_smarty_tpl->tpl_vars['DOCUMENT_FILE_FIELD']->value) {
$_smarty_tpl->tpl_vars['DOCUMENT_FILE_FIELD']->do_else = false;
?><tr><td style="vertical-align: middle;"><input type="text" class="inputElement nameField" name="file_field[<?php echo $_smarty_tpl->tpl_vars['FILE_INDEX']->value;?>
][fieldlabel]" value="<?php echo $_smarty_tpl->tpl_vars['DOCUMENT_FILE_FIELD']->value['fieldlabel'];?>
" data-rule-required="true"></td><td class="textAlignCenter" style="vertical-align: middle;"><input type="checkbox" name="file_field[<?php echo $_smarty_tpl->tpl_vars['FILE_INDEX']->value;?>
][required]" <?php if ($_smarty_tpl->tpl_vars['DOCUMENT_FILE_FIELD']->value['required']) {?>checked='checked'<?php }?> value='1'></td><td class="textAlignCenter" style="vertical-align: middle;"><a class="removeFileField" style="color: black;"><i class="fa fa-trash icon-trash"></i></a></td></tr><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?><tr class="noFileField <?php if (php7_count($_smarty_tpl->tpl_vars['DOCUMENT_FILE_FIELDS']->value) > 0) {?>hide<?php }?>"><td colspan="3" style="height: 100px; vertical-align: middle;"><center><?php echo vtranslate('LBL_NO_FILE_FIELD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</center></td></tr></tbody></table></div><div class="col-lg-5"><div class="vt-default-callout vt-info-callout" style="margin: 0;"><h4 class="vt-callout-header"><span class="fa fa-info-circle"></span>&nbsp; <?php echo vtranslate('LBL_INFO');?>
</h4><div><?php echo vtranslate('LBL_FILE_FIELD_INFO',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value,vtranslate("SINGLE_".((string)$_smarty_tpl->tpl_vars['SOURCE_MODULE']->value),$_smarty_tpl->tpl_vars['SOURCE_MODULE']->value));?>
</div></div></div></div><input type="hidden" id='fileFieldNextIndex' value='<?php echo php7_count($_smarty_tpl->tpl_vars['DOCUMENT_FILE_FIELDS']->value)+1;?>
'><input type="hidden" id="fileFieldsCount" value="<?php echo php7_count($_smarty_tpl->tpl_vars['DOCUMENT_FILE_FIELDS']->value);?>
"></div><?php }
}
}
