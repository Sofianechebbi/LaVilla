<div id="produits">
	</br></br></br>
	<div class="jumbotron col-md-offset-2 col-md-8 col-md-offset-2">
		<?php
		if(isset($categorie))
		{
			$categorie = $_REQUEST['categorie'];
		
			switch($categorie)
			{
				case "1":
				{
					$couleur = "info";
					break;
				}
				case "2":
				{
					$couleur = "warning";
					break;
				}
				case "3":
				{
					$couleur = "success";
					break;
				}

			}
			
			foreach( $lesProduits as $unProduit) 
			{
				$id = $unProduit['id'];
				$nom=$unProduit['nom'];
				$description = $unProduit['description'];
				$prix=$unProduit['prix'];
				?>	
				<div class="container col-md-4">
					<div class="panel panel-<?php echo $couleur; ?>">
					<div class="panel-heading"><center><h5><?php echo $nom ?></h5></center></div>
						<div class="panel-body"><center><?php echo $description ?></center></div>
						<div class="panel-footer"><center><?php echo $prix ?> <span class="glyphicon glyphicon-euro"></span>
							<a href="index.php?uc=voirProduits&categorie=<?php echo $categorie ?>&produit=<?php echo $id ?>&action=ajouterAuPanier"><br/><button class="btn btn-success">Ajouter au panier <span class="glyphicon glyphicon-save"></span></button></a></center>
						</div>
					</div>
				</div>
				<?php	
			}
		}
		else
		{
			?>
			<div class="alert alert-info col-md-offset-3 col-md-6">
				<strong>Veuillez choisir une catégorie.</strong>
			</div>
			<?php
		}
		?>
		
	</div>
</div>