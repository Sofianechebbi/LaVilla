<div class="message">
	<div class="jumbotron col-md-offset-2 col-md-8 col-md-offset-2">
		  <form method="post" action="index.php?uc=administrer&action=AjouterProduit" class="form-horizontal">
			<br/>
			 <fieldset>
			 <legend><h2>Ajouter un Produit</h2></legend>
					<div class="form-group">
						<label class="control-label col-sm-2">Categorie</label>
						<div class="col-sm-10">
							<select name="id" class=form-control id="id" >
							        <?php
							        foreach($lesCategories as $uneCategorie)
							        	{
							        	$Categorie = $uneCategorie['libellecategorie'];
							        	$id = $uneCategorie['id'];
										 echo('<option value="'.$id.'">'.$id.' - '.$Categorie .'</option>');
										
										} 
									?> 
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2">Nom du Produit</label>
						<div class="col-sm-10">
							<input id="nom" type="text" name="nom"  size="30" maxlength="60">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2">Description</label>
						<div class="col-sm-10">
							<input id="description" type="text" name="description"  size="30" maxlength="200">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2"> Prix </label>
						<div class="col-sm-10">
							<input id="prix" type="text" name="prix"   size="30" maxlength="45">
						</div>
					</div>
		  <input type="submit" name="Valider">
		  </form>
	</div>
</div>