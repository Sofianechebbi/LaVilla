<?php
$action = $_REQUEST['action'];
switch($action)
{
	case 'administrateur':
	{
		$lesCategories = $pdo->liste_Categorie();
		include("vues/v_modifcategories.php");
		include("vues/v_ajouterproduit.php");
		break;
	}

	case 'AjouterCategorie'	:
	{	
		$libelle=$_REQUEST['libelle'];
		$pdo->AjouterCategorie( $libelle);
		$message = "Categorie enregistrée !";
		include("vues/v_message.php");
		break;
	}

	case 'AjouterProduit' :
	{
		$nom=$_REQUEST['nom'];$description=$_REQUEST['description'];$prix=$_REQUEST['prix'];$id=$_REQUEST['id']; 
		$pdo->AjouterProduit($nom,$description,$prix,$id);
		$message = "Categorie enregistrée !$id, $nom, $description, $prix";
		include ("vues/v_message.php");
		break;
	}

	case 'tableaudebord' :
	{
		include ("vues/v_tabeaudebord.php");
	}
}
?>