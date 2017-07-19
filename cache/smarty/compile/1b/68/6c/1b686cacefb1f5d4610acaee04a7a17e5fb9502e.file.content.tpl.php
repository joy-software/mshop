<?php /* Smarty version Smarty-3.1.19, created on 2017-01-24 13:08:38
         compiled from "C:\wamp64\www\mshop\admin5gi\themes\default\template\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31123588743c67a4d56-00328962%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b686cacefb1f5d4610acaee04a7a17e5fb9502e' => 
    array (
      0 => 'C:\\wamp64\\www\\mshop\\admin5gi\\themes\\default\\template\\content.tpl',
      1 => 1484223963,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31123588743c67a4d56-00328962',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_588743c67d6ef5_91887797',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_588743c67d6ef5_91887797')) {function content_588743c67d6ef5_91887797($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
