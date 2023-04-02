<?php
/* Smarty version 3.1.39, created on 2023-04-02 17:54:30
  from '/var/www/demo/layouts/v7/modules/Vtiger/AddTagUI.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6429c156f0fca7_05749088',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '905e00e218c5fb402ec95fc5423479b465582c5e' => 
    array (
      0 => '/var/www/demo/layouts/v7/modules/Vtiger/AddTagUI.tpl',
      1 => 1680450284,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6429c156f0fca7_05749088 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="showAllTagContainer hide"><div class="modal-dialog modal-lg"><div class="modal-content"><form class="detailShowAllModal"><?php ob_start();
echo vtranslate('LBL_ADD_OR_SELECT_TAG',$_smarty_tpl->tpl_vars['MODULE']->value,$_smarty_tpl->tpl_vars['RECORD_NAME']->value);
$_prefixVariable2=ob_get_clean();
$_smarty_tpl->_assignInScope('TITLE', $_prefixVariable2);
$_smarty_tpl->_subTemplateRender(vtemplate_path("ModalHeader.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?><div class="modal-body"><div class="row"><div class="col-lg-6 selectTagContainer"><div class="form-group"><label class="control-label"><?php echo vtranslate('LBL_CURRENT_TAGS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label><div class="currentTagScroll"><div class="currentTag multiLevelTagList form-control"><span class="noTagsPlaceHolder" style="padding:3px;display:none;border:1px solid transparent;color:#999"><?php echo vtranslate('LBL_NO_TAG_EXISTS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</span><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['TAGS_LIST']->value, 'TAG_MODEL');
$_smarty_tpl->tpl_vars['TAG_MODEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['TAG_MODEL']->value) {
$_smarty_tpl->tpl_vars['TAG_MODEL']->do_else = false;
$_smarty_tpl->_subTemplateRender(vtemplate_path("Tag.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div></div></div><div class="form-group"><label class="control-label"><?php echo vtranslate('LBL_SELECT_FROM_AVAIL_TAG',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label><div class="dropdown"><input class="form-control currentTagSelector dropdown-toggle" data-toggle="dropdown" placeholder="<?php echo vtranslate('LBL_SELECT_EXISTING_TAG',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" /><div class="dropdown-menu currentTagMenu"><div class="scrollable" style="max-height:300px"><ul style="padding-left:0px;"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ALL_USER_TAGS']->value, 'TAG_MODEL');
$_smarty_tpl->tpl_vars['TAG_MODEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['TAG_MODEL']->value) {
$_smarty_tpl->tpl_vars['TAG_MODEL']->do_else = false;
if (array_key_exists($_smarty_tpl->tpl_vars['TAG_MODEL']->value->getId(),$_smarty_tpl->tpl_vars['TAGS_LIST']->value)) {
continue 1;
}?><li class="tag-item list-group-item"><a style="margin-left:0px;"><?php $_smarty_tpl->_subTemplateRender(vtemplate_path("Tag.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('NO_DELETE'=>true,'NO_EDIT'=>true), 0, true);
?></a></li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?><li class="dummyExistingTagElement tag-item list-group-item hide"><a style="margin-left:0px;"><?php $_smarty_tpl->_assignInScope('TAG_MODEL', Vtiger_Tag_Model::getCleanInstance());
$_smarty_tpl->_subTemplateRender(vtemplate_path("Tag.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('NO_DELETE'=>true,'NO_EDIT'=>true), 0, true);
?></a></li><li class="tag-item list-group-item"><span class="noTagExistsPlaceHolder" style="padding:3px;color:#999"><?php echo vtranslate('LBL_NO_TAG_EXISTS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</span></li></ul></div></div></div></div></div><div class=" col-lg-6 selectTagContainerborder"><div class="form-group"><label class="control-label"><?php echo vtranslate('LBL_CREATE_NEW_TAG',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label><div><input name="createNewTag" value="" class="form-control" placeholder="<?php echo vtranslate('LBL_ENTER_TAG_NAME',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"/></div></div><div class="form-group"><div><div class="checkbox"><label><input type="hidden" name="visibility" value="<?php echo Vtiger_Tag_Model::PRIVATE_TYPE;?>
"/><input type="checkbox" name="visibility" value="<?php echo Vtiger_Tag_Model::PUBLIC_TYPE;?>
" />&nbsp; <?php echo vtranslate('LBL_SHARE_TAGS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label></div><div class="pull-right"></div></div></div><div class="form-group"><div class=" vt-default-callout vt-info-callout tagInfoblock"><h5 class="vt-callout-header"><span class="fa fa-info-circle"></span>&nbsp; Info </h5><div><?php echo vtranslate('LBL_TAG_SEPARATOR_DESC',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</div><br><div><?php echo vtranslate('LBL_SHARED_TAGS_ACCESS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><br><div><?php echo vtranslate('LBL_GOTO_TAGS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</div></div></div></div></div></div><?php $_smarty_tpl->_subTemplateRender(vtemplate_path("ModalFooter.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></form></div></div></div><?php }
}
