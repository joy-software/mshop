<?php /* Smarty version Smarty-3.1.19, created on 2017-01-23 13:53:24
         compiled from "C:\wamp64\www\mshop\admin5gi\themes\default\template\helpers\list\list_action_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:240325885fcc494d067-63489141%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d877f06da40075ee0f8e368bfee0d04c7c9d3c1' => 
    array (
      0 => 'C:\\wamp64\\www\\mshop\\admin5gi\\themes\\default\\template\\helpers\\list\\list_action_view.tpl',
      1 => 1484223970,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '240325885fcc494d067-63489141',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5885fcc49ce073_19858677',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5885fcc49ce073_19858677')) {function content_5885fcc49ce073_19858677($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" >
	<i class="icon-search-plus"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
