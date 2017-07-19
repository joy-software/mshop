<?php /* Smarty version Smarty-3.1.19, created on 2017-01-23 08:52:27
         compiled from "C:\wamp64\www\mshop\admin5gi\themes\default\template\controllers\logs\employee_field.tpl" */ ?>
<?php /*%%SmartyHeaderCode:263405885b63b8498b8-93062187%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5822289e4066122033d3f09ae807bb02ca574ec2' => 
    array (
      0 => 'C:\\wamp64\\www\\mshop\\admin5gi\\themes\\default\\template\\controllers\\logs\\employee_field.tpl',
      1 => 1484223965,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '263405885b63b8498b8-93062187',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'employee_image' => 0,
    'employee_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5885b63b8d7517_75417463',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5885b63b8d7517_75417463')) {function content_5885b63b8d7517_75417463($_smarty_tpl) {?>
<span class="employee_avatar_small">
	<img class="imgm img-thumbnail" alt="" src="<?php echo $_smarty_tpl->tpl_vars['employee_image']->value;?>
" width="32" height="32" />
</span>
<?php echo $_smarty_tpl->tpl_vars['employee_name']->value;?>
<?php }} ?>
