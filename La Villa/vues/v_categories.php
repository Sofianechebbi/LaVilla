
<ul id="categories">
	<div class="container col-md-offset-3 col-md-6 col-md-offset-3">
		<div class="row">
			<div class="btn-group btn-group-justified">
				<?php
				foreach( $lesCategories as $uneCategorie) 
				{
					$idCategorie = $uneCategorie['id'];
					$libCategorie = $uneCategorie['libelle'];
					?>
					<a href="index.php?uc=voirProduits&categorie=<?php echo $idCategorie ?>&action=voirProduits" class="btn btn-default"><?php echo $libCategorie ?></a>
					<?php
				}
				?>
			</div>
		</div>
	</div>
</ul>