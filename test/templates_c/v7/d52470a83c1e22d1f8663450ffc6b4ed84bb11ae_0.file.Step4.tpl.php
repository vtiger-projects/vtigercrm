<?php
/* Smarty version 3.1.39, created on 2023-04-02 17:23:13
  from '/var/www/demo/layouts/v7/modules/Install/Step4.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6429abf172ab27_10511318',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd52470a83c1e22d1f8663450ffc6b4ed84bb11ae' => 
    array (
      0 => '/var/www/demo/layouts/v7/modules/Install/Step4.tpl',
      1 => 1680450284,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6429abf172ab27_10511318 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form class="form-horizontal" name="step4" method="post" action="index.php">
	<input type=hidden name="module" value="Install" />
	<input type=hidden name="view" value="Index" />
	<input type=hidden name="mode" value="Step5" />

	<div class="row main-container">
		<div class="inner-container">
			<div class="row">
				<div class="col-sm-10">
					<h4><?php echo vtranslate('LBL_SYSTEM_CONFIGURATION','Install');?>
 </h4>
				</div>
				<div class="col-sm-2">
					<a href="https://wiki.vtiger.com/vtiger6/" target="_blank" class="pull-right">
						<img src="<?php echo vimage_path('help.png');?>
" alt="Help-Icon"/>
					</a>
				</div>
			</div>
			<hr>
			<div class="row hide" id="errorMessage"></div>
			<div class="row">
				<div class="col-sm-6">
                                    <input type='hidden' name='pwd_regex' value= <?php echo ZEND_json::encode($_smarty_tpl->tpl_vars['PWD_REGEX']->value);?>
 />
					<table class="config-table input-table">
						<thead>
							<tr><th colspan="2"><?php echo vtranslate('LBL_DATABASE_INFORMATION','Install');?>
</th></tr>
						</thead>
						<tbody>
							<tr>
								<td><?php echo vtranslate('LBL_DATABASE_TYPE','Install');?>
<span class="no">*</span></td>
								<td>
									<?php echo vtranslate('MySQL','Install');?>

									<?php if (function_exists('mysqli_connect')) {?>
										<input type="hidden" value="mysqli" name="db_type">
									<?php } else { ?>
										<input type="hidden" value="mysql" name="db_type">
									<?php }?>
								</td>
							</tr>
							<tr>
								<td><?php echo vtranslate('LBL_HOST_NAME','Install');?>
<span class="no">*</span></td>
								<td><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['DB_HOSTNAME']->value;?>
" name="db_hostname"></td>
							</tr>
							<tr>
								<td><?php echo vtranslate('LBL_USERNAME','Install');?>
<span class="no">*</span></td>
								<td><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['DB_USERNAME']->value;?>
" name="db_username"></td>
							</tr>
							<tr>
								<td><?php echo vtranslate('LBL_PASSWORD','Install');?>
</td>
								<td><input type="password" value="<?php echo $_smarty_tpl->tpl_vars['DB_PASSWORD']->value;?>
" name="db_password"></td>
							</tr>
							<tr>
								<td><?php echo vtranslate('LBL_DB_NAME','Install');?>
<span class="no">*</span></td>
								<td><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['DB_NAME']->value;?>
" name="db_name"></td>
							</tr>
							<tr>
								<td colspan="2">
									<label>
										<input type="checkbox" name="create_db"/>
										<span><?php echo vtranslate('LBL_CREATE_NEW_DB','Install');?>
</span>
									</label>
								</td>
							</tr>
							<tr class="hide" id="root_user">
								<td><?php echo vtranslate('LBL_ROOT_USERNAME','Install');?>
<span class="no">*</span></td>
								<td><input type="text" value="" name="db_root_username"></td>
							</tr>
							<tr class="hide" id="root_password">
								<td><?php echo vtranslate('LBL_ROOT_PASSWORD','Install');?>
</td>
								<td><input type="password" value="" name="db_root_password"></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-sm-6">
					<table class="config-table input-table">
						<thead>
							<tr><th colspan="2"><?php echo vtranslate('LBL_SYSTEM_INFORMATION','Install');?>
</th></tr>
						</thead>
						<tbody>
							<tr>
								<td><?php echo vtranslate('LBL_CURRENCIES','Install');?>
<span class="no">*</span></td>
								<td>
									<select name="currency_name" class="select2" style="width:220px;">
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CURRENCIES']->value, 'CURRENCY_INFO', false, 'CURRENCY_NAME');
$_smarty_tpl->tpl_vars['CURRENCY_INFO']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['CURRENCY_NAME']->value => $_smarty_tpl->tpl_vars['CURRENCY_INFO']->value) {
$_smarty_tpl->tpl_vars['CURRENCY_INFO']->do_else = false;
?>
											<option value="<?php echo $_smarty_tpl->tpl_vars['CURRENCY_NAME']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['CURRENCY_NAME']->value == 'USA, Dollars') {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['CURRENCY_NAME']->value;?>
 (<?php echo $_smarty_tpl->tpl_vars['CURRENCY_INFO']->value[1];?>
)</option>
										<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									</select>
								</td>
							</tr>
						</tbody>
					</table>
					<table class="config-table input-table">
						<thead>
							<tr><th colspan="2"><?php echo vtranslate('LBL_ADMIN_INFORMATION','Install');?>
</th></tr>
						</thead>
						<tbody>
							<tr>
								<td><?php echo vtranslate('LBL_USERNAME','Install');?>
</td>
								<td>admin<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['ADMIN_NAME']->value;?>
" value="admin" /></td>
							</tr>
							<tr>
								<td><?php echo vtranslate('LBL_PASSWORD','Install');?>
<span class="no">*</span></td>
								<td><input type="password" value="<?php echo $_smarty_tpl->tpl_vars['ADMIN_PASSWORD']->value;?>
" name="password" /></td>
							</tr>
							<tr>
								<td><?php echo vtranslate('LBL_RETYPE_PASSWORD','Install');?>
 <span class="no">*</span></td>
								<td><input type="password" value="<?php echo $_smarty_tpl->tpl_vars['ADMIN_PASSWORD']->value;?>
" name="retype_password" />
									<span id="passwordError" class="no"></span></td>
							</tr>
							<tr>
								<td><?php echo vtranslate('First Name','Install');?>
</td>
								<td><input type="text" value="" name="firstname" /></td>
							</tr>
							<tr>
								<td><?php echo vtranslate('Last Name','Install');?>
 <span class="no">*</span></td>
								<td><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['ADMIN_LASTNAME']->value;?>
" name="lastname" /></td>
							</tr>
							<tr>
								<td><?php echo vtranslate('LBL_EMAIL','Install');?>
 <span class="no">*</span></td>
								<td><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['ADMIN_EMAIL']->value;?>
" name="admin_email"></td>
							</tr>
							<tr>
								<td><?php echo vtranslate('LBL_DATE_FORMAT','Install');?>
 <span class="no">*</span></td>
								<td>
									<select class="select2" style="width:220px;" name="dateformat">
										<option value="mm-dd-yyyy">mm-dd-yyyy</option>
										<option value="dd-mm-yyyy">dd-mm-yyyy</option>
										<option value="yyyy-mm-dd">yyyy-mm-dd</option>
									</select>
								</td>
							</tr>
							<tr>
								<td>
									<?php echo vtranslate('LBL_TIME_ZONE','Install');?>
 <span class="no">*</span>
								</td>
								<td>
									<select class="select2" name="timezone" style="width:300px;">
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['TIMEZONES']->value, 'TIMEZONE');
$_smarty_tpl->tpl_vars['TIMEZONE']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['TIMEZONE']->value) {
$_smarty_tpl->tpl_vars['TIMEZONE']->do_else = false;
?>
											<option value="<?php echo $_smarty_tpl->tpl_vars['TIMEZONE']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['TIMEZONE']->value == 'America/Los_Angeles') {?>selected<?php }?>><?php echo vtranslate($_smarty_tpl->tpl_vars['TIMEZONE']->value,'Users');?>
</option>
										<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									</select>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-12">
					<div class="button-container">
						<input type="button" class="btn btn-default" value="<?php echo vtranslate('LBL_BACK','Install');?>
" name="back"/>
						<input type="button" class="btn btn-large btn-primary" value="<?php echo vtranslate('LBL_NEXT','Install');?>
" name="step5"/>
					</div>
				</div>
			</div>
		</div>
	</div>
</form><?php }
}
