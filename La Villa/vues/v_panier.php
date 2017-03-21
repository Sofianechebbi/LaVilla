<div class="jumbotron col-md-offset-2 col-md-8 col-md-offset-2">
	<div class="container">
	<?php
	foreach( $lesProduitsDuPanier as $unProduit) 
	{
		$id = $unProduit['id'];
		$nom=$unProduit['nom'];
		$description = $unProduit['description'];
		$prix = $unProduit['prix'];
		
		?>
		<div class="container col-md-4">
			<div class="panel panel-primary">
				<div class="panel-heading"><center><h5><?php echo $nom ?></h5></center></div>
						<div class="panel-body"><center><?php echo $description ?></center></div>
						<div class="panel-footer"><center><?php echo $prix ?> <span class="glyphicon glyphicon-euro"></span>
					<a href="index.php?uc=gererPanier&produit=<?php echo $id ?>&action=supprimerUnProduit" onclick="return confirm('Voulez-vous vraiment retirer cet article frais?');"><br/><button class="btn btn-danger">Retirer du panier <span class="glyphicon glyphicon-open"></span></button></a></center>
				</div>
			</div>
		</div>
		<?php
	}
	?>
	<br>
	</div>
	<div class="container col-md-offset-5">
	<a href="index.php?uc=gererPanier&action=passerCommande"><button type="button" class="btn btn-primary btn-lg">Commander</button> </a>
	</div>
</div>