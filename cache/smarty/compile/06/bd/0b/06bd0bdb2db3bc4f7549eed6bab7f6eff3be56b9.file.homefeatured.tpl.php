<?php /* Smarty version Smarty-3.1.19, created on 2017-01-24 12:51:12
         compiled from "C:\wamp64\www\mshop\themes\default-bootstrap\modules\homefeatured\homefeatured.tpl" */ ?>
<?php /*%%SmartyHeaderCode:595458873fb08481a7-15381067%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '06bd0bdb2db3bc4f7549eed6bab7f6eff3be56b9' => 
    array (
      0 => 'C:\\wamp64\\www\\mshop\\themes\\default-bootstrap\\modules\\homefeatured\\homefeatured.tpl',
      1 => 1484224179,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '595458873fb08481a7-15381067',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58873fb08d89f0_72221036',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58873fb08d89f0_72221036')) {function content_58873fb08d89f0_72221036($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['products']->value)&&$_smarty_tpl->tpl_vars['products']->value) {?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('class'=>'homefeatured tab-pane','id'=>'homefeatured'), 0);?>

<?php } else { ?>
<ul id="homefeatured" class="homefeatured tab-pane">
	<li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No featured products at this time.','mod'=>'homefeatured'),$_smarty_tpl);?>
</li>
</ul>
<?php }?><?php }} ?>
