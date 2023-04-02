<?php
/* Smarty version 3.1.39, created on 2023-04-02 20:02:35
  from '/Applications/MAMP/htdocs/demo/layouts/v7/modules/Vtiger/dashboards/DashBoardContents.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6429df5ba59de7_99604749',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '93631c5685d2fe1c319899ff3d89e80c210bbbc6' => 
    array (
      0 => '/Applications/MAMP/htdocs/demo/layouts/v7/modules/Vtiger/dashboards/DashBoardContents.tpl',
      1 => 1680450284,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6429df5ba59de7_99604749 (Smarty_Internal_Template $_smarty_tpl) {
?>    
<div class="dashBoardContainer clearfix"><div class="tabContainer"><ul class="nav nav-tabs tabs sortable container-fluid"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['DASHBOARD_TABS']->value, 'TAB_DATA', false, 'index');
$_smarty_tpl->tpl_vars['TAB_DATA']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['TAB_DATA']->value) {
$_smarty_tpl->tpl_vars['TAB_DATA']->do_else = false;
?><li class="<?php if ($_smarty_tpl->tpl_vars['TAB_DATA']->value["id"] == $_smarty_tpl->tpl_vars['SELECTED_TAB']->value) {?>active<?php }?> dashboardTab" data-tabid="<?php echo $_smarty_tpl->tpl_vars['TAB_DATA']->value["id"];?>
" data-tabname="<?php echo $_smarty_tpl->tpl_vars['TAB_DATA']->value["tabname"];?>
"><a data-toggle="tab" href="#tab_<?php echo $_smarty_tpl->tpl_vars['TAB_DATA']->value["id"];?>
"><div><span class="name textOverflowEllipsis" value="<?php echo $_smarty_tpl->tpl_vars['TAB_DATA']->value["tabname"];?>
" style="width:10%"><strong><?php echo $_smarty_tpl->tpl_vars['TAB_DATA']->value["tabname"];?>
</strong></span><span class="editTabName hide"><input type="text" name="tabName"/></span><?php if ($_smarty_tpl->tpl_vars['TAB_DATA']->value["isdefault"] == 0) {?><i class="fa fa-close deleteTab"></i><?php }?><i class="fa fa-bars moveTab hide"></i></div></a></li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?><div class="moreSettings pull-right"><div class="dropdown dashBoardDropDown"><button class="btn btn-default reArrangeTabs dropdown-toggle" type="button" data-toggle="dropdown"><?php echo vtranslate('LBL_MORE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
&nbsp;&nbsp;<span class="caret"></span></button><ul class="dropdown-menu dropdown-menu-right moreDashBoards"><li id="newDashBoardLi"<?php if (php7_count($_smarty_tpl->tpl_vars['DASHBOARD_TABS']->value) == $_smarty_tpl->tpl_vars['DASHBOARD_TABS_LIMIT']->value) {?>class="disabled"<?php }?>><a class = "addNewDashBoard" href="#"><?php echo vtranslate('LBL_ADD_NEW_DASHBOARD',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></li><li><a class = "reArrangeTabs" href="#"><?php echo vtranslate('LBL_REARRANGE_DASHBOARD_TABS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></li></ul></div><button class="btn-success updateSequence pull-right hide"><?php echo vtranslate('LBL_SAVE_ORDER',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</button></div></ul><div class="tab-content"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['DASHBOARD_TABS']->value, 'TAB_DATA', false, 'index');
$_smarty_tpl->tpl_vars['TAB_DATA']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['TAB_DATA']->value) {
$_smarty_tpl->tpl_vars['TAB_DATA']->do_else = false;
?><div id="tab_<?php echo $_smarty_tpl->tpl_vars['TAB_DATA']->value["id"];?>
" data-tabid="<?php echo $_smarty_tpl->tpl_vars['TAB_DATA']->value["id"];?>
" data-tabname="<?php echo $_smarty_tpl->tpl_vars['TAB_DATA']->value["tabname"];?>
" class="tab-pane fade <?php if ($_smarty_tpl->tpl_vars['TAB_DATA']->value["id"] == $_smarty_tpl->tpl_vars['SELECTED_TAB']->value) {?>in active<?php }?>"><?php if ($_smarty_tpl->tpl_vars['TAB_DATA']->value["id"] == $_smarty_tpl->tpl_vars['SELECTED_TAB']->value) {
$_smarty_tpl->_subTemplateRender(vtemplate_path("dashboards/DashBoardTabContents.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('TABID'=>$_smarty_tpl->tpl_vars['TABID']->value), 0, true);
}?></div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div></div></div><?php }
}
