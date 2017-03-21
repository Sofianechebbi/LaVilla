
<?php
initPanier();
$action = $_REQUEST['action'];
switch($action)
{
	case 'seConnecter':
	{
		include("vues/v_connexion.php");
		break;
	}

	case 'connexion':
	{	
		$email=$_REQUEST['email']; $mdp=$_REQUEST['mdp'];
		$mail = $pdo->email($email);
		$mdp1 = $pdo->mdp($mdp);
		if ($mdp1 == true && $mail == true) 
		{
			$message= "Vous etes connecté";
			connecter($email);
			include("vues/v_message.php");
		}
		else
		{
							header("Location: index.php");
		}
		break;
	}	

	case 'deconnexion' :
	{
		deconnexion();
		break;	
	}

}
?>


