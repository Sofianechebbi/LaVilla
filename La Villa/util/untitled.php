			<?php
				if(isset($_SESSION['adresse_mail']))
				{
			?>
				<button class="btn btn-danger"><a href="connexion.php"><span class="glyphicon glyphicon-off"></span></a></button>
			<?php		
				}
				else
				{
					
				}
			?>
		</ul>
	    </div>
	    </div>
<?php
//Si lutilisateur est connecte, on le deconecte
if(isset($_SESSION['adresse_mail']))
{
	//On le deconecte en supprimant simplement les sessions username et userid
	unset($_SESSION['adresse_mail'], $_SESSION['mdp']);
?>
<div class="message">Vous avez bien été déconnecté.<br />
<a href="<?php echo $url_home; ?>">Accueil</a></div>
<?php
}
else
{
	$adresse_mail = '';
	$mdp = '';
	//On verifie si le formulaire a ete envoye
	if(isset($_POST['adresse_mail'], $_POST['mdp']))
	{
		//On prépare les variables pour pouvoir les mettre dans des requetes SQL
		
			$adresse_mail =  htmlspecialchars($_POST['adresse_mail']);
			$mdp = stripslashes($_POST['mdp']);
			
		//On recupere le mot de passe de lutilisateur
		$req = mysqli_query($mysqli,'select mdp,id from client where adresse_mail="'.$adresse_mail.'"');
		$dn = mysqli_fetch_array($req);
		
		//On le compare a celui quil a entre et on verifie si le membre existe
		if($dn['mdp']==$mdp and mysqli_num_rows($req)>0)
		{
			//Si le mot de passe es bon, on ne vas pas afficher le formulaire
			$form = false;
			//On enregistre son pseudo dans la session username et son identifiant dans la session userid
			$_SESSION['adresse_mail'] = $_POST['adresse_mail'];
			$_SESSION['mdp'] = $dn['mdp'];
?>
<div class="message">Vous avez bien été connecté. Vous pouvez accéder à votre espace membre.<br />
<a href="<?php echo $url_home; ?>">Accueil</a></div>
<?php
		}
		else
		{
			//Sinon, on indique que la combinaison nest pas bonne
			$form = true;
			$message = 'La combinaison que vous avez entré n\'est pas bonne.';
		}
	}
	else
	{
		$form = true;
	}
	if($form)
	{
		//On affiche un message sil y a lieu
	if(isset($message))
	{
		?>
			<div class="message"><?php echo $message; ?></br> </div> 
		<?php
	}
	//On affiche le formulaire
?>