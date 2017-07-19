<?php /* Smarty version Smarty-3.1.19, created on 2017-01-23 20:33:51
         compiled from "C:\wamp64\www\mshop\modules\evaluationarticle\views\templates\hook\evaluationarticle.tpl" */ ?>
<?php /*%%SmartyHeaderCode:281658865a9f7e54d1-88062486%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a0afc48acb497be73aa545d8453e48406ea43f2f' => 
    array (
      0 => 'C:\\wamp64\\www\\mshop\\modules\\evaluationarticle\\views\\templates\\hook\\evaluationarticle.tpl',
      1 => 1485183842,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '281658865a9f7e54d1-88062486',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'etoiles' => 0,
    'etoile' => 0,
    'etoile5' => 0,
    'etoile4' => 0,
    'etoile3' => 0,
    'etoile2' => 0,
    'etoile1' => 0,
    'voted' => 0,
    'logged' => 0,
    'link' => 0,
    'customer_vote' => 0,
    'link_vote' => 0,
    'product' => 0,
    'customer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58865a9f97d274_85797230',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58865a9f97d274_85797230')) {function content_58865a9f97d274_85797230($_smarty_tpl) {?><div class="vote">
	<div class="section vote-section">
		Avis des utilisateurs
	</div>

	<?php if ($_smarty_tpl->tpl_vars['etoiles']->value!=0) {?>
		<div>
			<span class="rating-total"></span>
			<span class="rating-nombre"><?php echo $_smarty_tpl->tpl_vars['etoiles']->value;?>
</span>
		</div>
		<div class="rating-value"><?php echo $_smarty_tpl->tpl_vars['etoile']->value;?>
 étoiles sur 5</div>
		<div class="details">
			<table>

				<tr>
					<td class="label-droite">5 étoiles</td>
					<td class="progress-cell">
						<div class="progress">
							<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="52" style="width:<?php echo round((($_smarty_tpl->tpl_vars['etoile5']->value/$_smarty_tpl->tpl_vars['etoiles']->value)*100));?>
%">
				    		</div>
						</div>
			    	</td>
					<td class="label-droite"><?php echo $_smarty_tpl->tpl_vars['etoile5']->value;?>
</td>
				</tr>

				<tr>
					<td class="label-droite">4 étoiles</td>
					<td class="progress-cell">
						<div class="progress">
							<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="52" style="width:<?php echo round((($_smarty_tpl->tpl_vars['etoile4']->value/$_smarty_tpl->tpl_vars['etoiles']->value)*100));?>
%">
				    		</div>
						</div>
			    	</td>
					<td class="label-droite"><?php echo $_smarty_tpl->tpl_vars['etoile4']->value;?>
</td>
				</tr>


				<tr>
					<td class="label-droite">3 étoiles</td>
					<td class="progress-cell">
						<div class="progress">
							<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="52" style="width:<?php echo round((($_smarty_tpl->tpl_vars['etoile3']->value/$_smarty_tpl->tpl_vars['etoiles']->value)*100));?>
%">
				    		</div>
						</div>
			    	</td>
					<td class="label-droite"><?php echo $_smarty_tpl->tpl_vars['etoile3']->value;?>
</td>
				</tr>

				<tr>
					<td class="label-droite">2 étoiles</td>
					<td class="progress-cell">
						<div class="progress">
							<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="52" style="width:<?php echo round((($_smarty_tpl->tpl_vars['etoile2']->value/$_smarty_tpl->tpl_vars['etoiles']->value)*100));?>
%">
				    		</div>
						</div>
			    	</td>
					<td class="label-droite"><?php echo $_smarty_tpl->tpl_vars['etoile2']->value;?>
</td>
				</tr>


				<tr>
					<td class="label-gauche">1 étoile</td>
					<td class="progress-cell">
						<div class="progress">
							<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="52" style="width:<?php echo round((($_smarty_tpl->tpl_vars['etoile1']->value/$_smarty_tpl->tpl_vars['etoiles']->value)*100));?>
%">
				    		</div>
						</div>
			    	</td>
					<td class="label-droite"><?php echo $_smarty_tpl->tpl_vars['etoile1']->value;?>
</td>
				</tr>
			</table>
		</div>
	<?php } else { ?>
		Cet article n'a pas encore reçu d'évaluation
	<?php }?>

	<div class="section user-rate-section">
		<?php if ($_smarty_tpl->tpl_vars['voted']->value) {?>
			Modifiez votre evaluation
		<?php } else { ?>
			Evaluez cet article
		<?php }?>
	</div>
	<?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
		<div class="rating-user"></div>
	<?php } else { ?>
		<div class="alert alert-info"> 
			<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('authentication',true), ENT_QUOTES, 'UTF-8', true);?>
&back=http://<?php echo rawurlencode($_SERVER['HTTP_HOST']);?>
<?php echo rawurlencode($_SERVER['REQUEST_URI']);?>
" style="color:white">Connectez vous pour évaluez cet article""</a>
		</div>
	<?php }?>
</div>



<script type="text/javascript">
	$(document).ready(function(){
		
		$(".rating-total").starRating({
		  totalStars: 5,
		  starSize: 25,
		  emptyColor: 'lightgray',
		  initialRating: <?php echo $_smarty_tpl->tpl_vars['etoile']->value;?>
,
		  strokeWidth: 0,
		  readOnly:true,
		  useGradient: true,
		});

		<?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
			var customer_vote = 0;
			<?php if ($_smarty_tpl->tpl_vars['voted']->value) {?>
				customer_vote = <?php echo $_smarty_tpl->tpl_vars['customer_vote']->value['vote'];?>
;
			<?php }?>
			$(".rating-user").starRating({
			  totalStars: 5,
			  starSize: 25,
			  useFullStars:true,
			  emptyColor: 'lightgray',

			  initialRating:customer_vote,
			  strokeWidth: 0,
			  readOnly:false,
			  useGradient: true,
			  disableAfterRate:false,
			  callback:function(currentRating , $el){
			  	$.ajax({
			  		url:'<?php echo $_smarty_tpl->tpl_vars['link_vote']->value;?>
&ajax',
			  		data:{
			  			'product':<?php echo $_smarty_tpl->tpl_vars['product']->value;?>
,
			  			'customer':<?php echo $_smarty_tpl->tpl_vars['customer']->value;?>
,
			  			'vote':currentRating,
			  			'action':'vote',
			  			'id':<?php if ($_smarty_tpl->tpl_vars['voted']->value) {?> <?php echo $_smarty_tpl->tpl_vars['customer_vote']->value['id_evaluation'];?>
 <?php } else { ?> 0 <?php }?>
			  		},
			  		dataType:'json',
			  		success:function(response){
			  			console.log(response);
			  			
			  		},
			  		error:function(a){
			  			
			  		}
			  	})
			  }
			});
		<?php }?>
	});
</script><?php }} ?>
