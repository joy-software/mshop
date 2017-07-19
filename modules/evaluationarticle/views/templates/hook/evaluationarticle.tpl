<div class="vote">
	<div class="section vote-section">
		Avis des utilisateurs
	</div>

	{if $etoiles neq 0}
		<div>
			<span class="rating-total"></span>
			<span class="rating-nombre">{$etoiles}</span>
		</div>
		<div class="rating-value">{$etoile} étoiles sur 5</div>
		<div class="details">
			<table>

				<tr>
					<td class="label-droite">5 étoiles</td>
					<td class="progress-cell">
						<div class="progress">
							<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="52" style="width:{(($etoile5 / $etoiles)*100)|round}%">
				    		</div>
						</div>
			    	</td>
					<td class="label-droite">{$etoile5}</td>
				</tr>

				<tr>
					<td class="label-droite">4 étoiles</td>
					<td class="progress-cell">
						<div class="progress">
							<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="52" style="width:{(($etoile4 / $etoiles)*100)|round}%">
				    		</div>
						</div>
			    	</td>
					<td class="label-droite">{$etoile4}</td>
				</tr>


				<tr>
					<td class="label-droite">3 étoiles</td>
					<td class="progress-cell">
						<div class="progress">
							<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="52" style="width:{(($etoile3 / $etoiles)*100)|round}%">
				    		</div>
						</div>
			    	</td>
					<td class="label-droite">{$etoile3}</td>
				</tr>

				<tr>
					<td class="label-droite">2 étoiles</td>
					<td class="progress-cell">
						<div class="progress">
							<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="52" style="width:{(($etoile2 / $etoiles)*100)|round}%">
				    		</div>
						</div>
			    	</td>
					<td class="label-droite">{$etoile2}</td>
				</tr>


				<tr>
					<td class="label-gauche">1 étoile</td>
					<td class="progress-cell">
						<div class="progress">
							<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="52" style="width:{(($etoile1 / $etoiles)*100)|round}%">
				    		</div>
						</div>
			    	</td>
					<td class="label-droite">{$etoile1}</td>
				</tr>
			</table>
		</div>
	{else}
		Cet article n'a pas encore reçu d'évaluation
	{/if}

	<div class="section user-rate-section">
		{if $voted}
			Modifiez votre evaluation
		{else}
			Evaluez cet article
		{/if}
	</div>
	{if $logged}
		<div class="rating-user"></div>
	{else}
		<div class="alert alert-info"> 
			<a href="{$link->getPageLink('authentication', true)|escape:'html':'UTF-8'}&back=http://{$smarty.server.HTTP_HOST|escape:'url'}{$smarty.server.REQUEST_URI|escape:'url'}" style="color:white">Connectez vous pour évaluez cet article""</a>
		</div>
	{/if}
</div>



<script type="text/javascript">
	$(document).ready(function(){
		
		$(".rating-total").starRating({
		  totalStars: 5,
		  starSize: 25,
		  emptyColor: 'lightgray',
		  initialRating: {$etoile},
		  strokeWidth: 0,
		  readOnly:true,
		  useGradient: true,
		});

		{if $logged}
			var customer_vote = 0;
			{if $voted}
				customer_vote = {$customer_vote.vote};
			{/if}
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
			  		url:'{$link_vote}&ajax',
			  		data:{
			  			'product':{$product},
			  			'customer':{$customer},
			  			'vote':currentRating,
			  			'action':'vote',
			  			'id':{if $voted} {$customer_vote.id_evaluation} {else} 0 {/if}
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
		{/if}
	});
</script>