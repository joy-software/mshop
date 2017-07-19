<div>
	<h2> Veuillez entrer les informations sur vous et votre activité </h2>
</div>


{foreach from=$errors item=error}
 <div class="alert alert-danger">{$error}</div>
{/foreach}
<br>

<form action="{$link_save_fournisseur}" method="post" id="" class="box">
	
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
