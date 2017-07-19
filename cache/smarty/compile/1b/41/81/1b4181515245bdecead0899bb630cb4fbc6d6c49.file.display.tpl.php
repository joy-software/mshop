<?php /* Smarty version Smarty-3.1.19, created on 2017-01-23 09:09:50
         compiled from "C:\wamp64\www\mshop\modules\gestionfournisseur\views\templates\front\display.tpl" */ ?>
<?php /*%%SmartyHeaderCode:63805885ba4edc50e4-89505889%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b4181515245bdecead0899bb630cb4fbc6d6c49' => 
    array (
      0 => 'C:\\wamp64\\www\\mshop\\modules\\gestionfournisseur\\views\\templates\\front\\display.tpl',
      1 => 1484224150,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '63805885ba4edc50e4-89505889',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'errors' => 0,
    'error' => 0,
    'link_save_fournisseur' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5885ba4ede4bf8_74538002',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5885ba4ede4bf8_74538002')) {function content_5885ba4ede4bf8_74538002($_smarty_tpl) {?><div>
	<h2> Veuillez entrer les informations sur vous et votre activité </h2>
</div>


<?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>
 <div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div>
<?php } ?>
<br>

<form action="<?php echo $_smarty_tpl->tpl_vars['link_save_fournisseur']->value;?>
" method="post" id="" class="box">
	
	<div class="form_content clearfix">
		<div class="form-group">
			<label for="email">Nom</label>
			<input class="is_required validate account_input form-control" data-validate="isName" type="text" id="name" name="firstname" value="">
		</div>
		<div class="form-group">
			<label for="email">Prenom</label>
			<input class="is_required validate account_input form-control" data-validate="isName" type="text" id="name" name="lastname" value="">
		</div>

		<div class="form-group">
			<label for="email">Email address</label>
			<input class="is_required validate account_input form-control" data-validate="isEmail" type="email" id="email" name="email" value="">
		</div>

		<div class="form-group">
			<label for="password">Password</label>
			<input class="is_required validate account_input form-control" type="password" data-validate="isPasswd" id="passwd" name="password" value="">
		</div>

		<div class="form-group">
			<label for="description">Description</label>
			<textarea class="is_required validate account_textarea form-control" id="description" name="description" value="" placeholder="Entrer la description de votre service"></textarea>
		</div>

		<p class="submit ">
			<input type="hidden" class="hidden" name="back" value="my-account">						<button type="submit" id="SubmitLogin" name="SubmitLogin" class="button btn btn-default button-medium pull-rigth">
				<span>
					<i class="icon-lock left"></i>
					Soumettre
				</span>
			</button>
		</p>
	</div>
</form>
<?php }} ?>
