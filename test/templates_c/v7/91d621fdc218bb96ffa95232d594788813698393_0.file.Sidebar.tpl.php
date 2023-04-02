<?php
/* Smarty version 3.1.39, created on 2023-04-02 17:39:53
  from '/var/www/demo/layouts/v7/modules/Settings/Vtiger/Sidebar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6429bde92ea326_64981054',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '91d621fdc218bb96ffa95232d594788813698393' => 
    array (
      0 => '/var/www/demo/layouts/v7/modules/Settings/Vtiger/Sidebar.tpl',
      1 => 1680450284,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:modules/Users/UsersSidebar.tpl' => 1,
  ),
),false)) {
function content_6429bde92ea326_64981054 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['USER_MODEL']->value->isAdminUser()) {
$_smarty_tpl->_assignInScope('SETTINGS_MODULE_MODEL', Settings_Vtiger_Module_Model::getInstance());
$_smarty_tpl->_assignInScope('SETTINGS_MENUS', $_smarty_tpl->tpl_vars['SETTINGS_MODULE_MODEL']->value->getMenus());?><div class="settingsgroup"><div><input type="text" placeholder="<?php echo vtranslate('LBL_SEARCH_FOR_SETTINGS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" class="search-list col-lg-8" id='settingsMenuSearch'></div><br><br><div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SETTINGS_MENUS']->value, 'BLOCK_MENUS');
$_smarty_tpl->tpl_vars['BLOCK_MENUS']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['BLOCK_MENUS']->value) {
$_smarty_tpl->tpl_vars['BLOCK_MENUS']->do_else = false;
$_smarty_tpl->_assignInScope('BLOCK_NAME', $_smarty_tpl->tpl_vars['BLOCK_MENUS']->value->getLabel());
$_smarty_tpl->_assignInScope('BLOCK_MENU_ITEMS', $_smarty_tpl->tpl_vars['BLOCK_MENUS']->value->getMenuItems());
$_smarty_tpl->_assignInScope('NUM_OF_MENU_ITEMS', sizeof($_smarty_tpl->tpl_vars['BLOCK_MENU_ITEMS']->value));
if ($_smarty_tpl->tpl_vars['NUM_OF_MENU_ITEMS']->value > 0) {?><div class="settingsgroup-panel panel panel-default instaSearch"><div id="<?php echo $_smarty_tpl->tpl_vars['BLOCK_NAME']->value;?>
_accordion" class="app-nav" role="tab"><div class="app-settings-accordion"><div class="settingsgroup-accordion"><a data-toggle="collapse" data-parent="#accordion" class='collapsed' href="#<?php echo $_smarty_tpl->tpl_vars['BLOCK_NAME']->value;?>
"><i class="indicator fa<?php if ($_smarty_tpl->tpl_vars['ACTIVE_BLOCK']->value['block'] == $_smarty_tpl->tpl_vars['BLOCK_NAME']->value) {?> fa-chevron-down <?php } else { ?> fa-chevron-right <?php }?>"></i>&nbsp;<span><?php echo vtranslate($_smarty_tpl->tpl_vars['BLOCK_NAME']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></a></div></div></div><div id="<?php echo $_smarty_tpl->tpl_vars['BLOCK_NAME']->value;?>
" class="panel-collapse collapse ulBlock <?php if ($_smarty_tpl->tpl_vars['ACTIVE_BLOCK']->value['block'] == $_smarty_tpl->tpl_vars['BLOCK_NAME']->value) {?> in <?php }?>"><ul class="list-group widgetContainer"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['BLOCK_MENU_ITEMS']->value, 'MENUITEM');
$_smarty_tpl->tpl_vars['MENUITEM']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['MENUITEM']->value) {
$_smarty_tpl->tpl_vars['MENUITEM']->do_else = false;
$_smarty_tpl->_assignInScope('MENU', $_smarty_tpl->tpl_vars['MENUITEM']->value->get('name'));
$_smarty_tpl->_assignInScope('MENU_LABEL', $_smarty_tpl->tpl_vars['MENU']->value);
if ($_smarty_tpl->tpl_vars['MENU']->value == 'LBL_EDIT_FIELDS') {
$_smarty_tpl->_assignInScope('MENU_LABEL', 'LBL_MODULE_CUSTOMIZATION');
} elseif ($_smarty_tpl->tpl_vars['MENU']->value == 'LBL_TAX_SETTINGS') {
$_smarty_tpl->_assignInScope('MENU_LABEL', 'LBL_TAX_MANAGEMENT');
} elseif ($_smarty_tpl->tpl_vars['MENU']->value == 'INVENTORYTERMSANDCONDITIONS') {
$_smarty_tpl->_assignInScope('MENU_LABEL', 'LBL_TERMS_AND_CONDITIONS');
}
$_smarty_tpl->_assignInScope('MENU_URL', $_smarty_tpl->tpl_vars['MENUITEM']->value->getUrl());
$_smarty_tpl->_assignInScope('USER_MODEL', Users_Record_Model::getCurrentUserModel());
if ($_smarty_tpl->tpl_vars['MENU']->value == 'My Preferences') {
$_smarty_tpl->_assignInScope('MENU_URL', $_smarty_tpl->tpl_vars['USER_MODEL']->value->getPreferenceDetailViewUrl());
} elseif ($_smarty_tpl->tpl_vars['MENU']->value == 'Calendar Settings') {
$_smarty_tpl->_assignInScope('MENU_URL', $_smarty_tpl->tpl_vars['USER_MODEL']->value->getCalendarSettingsDetailViewUrl());
}?><li><a data-name="<?php echo $_smarty_tpl->tpl_vars['MENU']->value;?>
" href="<?php echo $_smarty_tpl->tpl_vars['MENU_URL']->value;?>
" class="menuItemLabel <?php if ($_smarty_tpl->tpl_vars['ACTIVE_BLOCK']->value['menu'] == $_smarty_tpl->tpl_vars['MENU']->value) {?> settingsgroup-menu-color <?php }?>"><?php echo vtranslate($_smarty_tpl->tpl_vars['MENU_LABEL']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<img id="<?php echo $_smarty_tpl->tpl_vars['MENUITEM']->value->getId();?>
_menuItem" data-id="<?php echo $_smarty_tpl->tpl_vars['MENUITEM']->value->getId();?>
" class="pinUnpinShortCut cursorPointer pull-right"data-actionurl="<?php echo $_smarty_tpl->tpl_vars['MENUITEM']->value->getPinUnpinActionUrl();?>
"data-pintitle="<?php echo vtranslate('LBL_PIN',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"data-unpintitle="<?php echo vtranslate('LBL_UNPIN',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"data-pinimageurl="<?php ob_start();
echo vimage_path('pin.png');
$_prefixVariable8 = ob_get_clean();
echo $_prefixVariable8;?>
"data-unpinimageurl="<?php ob_start();
echo vimage_path('unpin.png');
$_prefixVariable9 = ob_get_clean();
echo $_prefixVariable9;?>
"<?php if ($_smarty_tpl->tpl_vars['MENUITEM']->value->isPinned()) {?>title="<?php echo vtranslate('LBL_UNPIN',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" src="<?php echo vimage_path('unpin.png');?>
" data-action="unpin"<?php } else { ?>title="<?php echo vtranslate('LBL_PIN',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" src="<?php echo vimage_path('pin.png');?>
" data-action="pin"<?php }?> /></a></li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul></div></div><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div></div><?php } else {
$_smarty_tpl->_subTemplateRender('file:modules/Users/UsersSidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
}
