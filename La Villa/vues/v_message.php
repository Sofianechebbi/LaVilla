<div class="message">
	<div class="jumbotron col-md-offset-2 col-md-8 col-md-offset-2">
	<?php
	if($message == "Commande enregistrée !")
	{
		?>
		<div class="alert alert-success col-md-offset-3 col-md-6">
		  <strong><?php echo $message; ?></strong> Merci et à bientôt sur LaFleur.
		</div>
		<?php
	}
	else
	{
		?>
		<div class="alert alert-info col-md-offset-3 col-md-6">
		  <strong><?php echo $message; ?></strong> Veuillez sélectionner des produits.
		</div>
		<?php
	}
	?>
	</div>
</div>