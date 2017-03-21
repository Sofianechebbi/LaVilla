<?php
/** 
 * Classe d'accès aux données. 
 
 * Utilise les services de la classe PDO
 * pour l'application lafleur
 * Les attributs sont tous statiques,
 * les 4 premiers pour la connexion
 */

class PdoLaVilla
{   		
      	private static $serveur='mysql:host=localhost';
      	private static $bdd='dbname=lavilla';   		
      	private static $user='root' ;    		
      	private static $mdp='root' ;	
		private static $monPdo;
		private static $monPdoLaVilla = null;
/**
 * Constructeur privé, crée l'instance de PDO qui sera sollicitée
 * pour toutes les méthodes de la classe
 */				
	private function __construct()
	{
    		PdoLaVilla::$monPdo = new PDO(PdoLaVilla::$serveur.';'.PdoLaVilla::$bdd, PdoLaVilla::$user, PdoLaVilla::$mdp); 
			PdoLaVilla::$monPdo->query("SET CHARACTER SET utf8");
	}
	public function _destruct(){
		PdoLaVilla::$monPdo = null;
	}
/**
 * Fonction statique qui crée l'unique instance de la classe
 *
 * Appel : $instancePdolafleur =PdoLaVilla::getPdoLafleur();
 * @return l'unique objet de la classe PdoLaVilla
 */
	public  static function getPdoLaVilla()
	{
		if(PdoLaVilla::$monPdoLaVilla == null)
		{
			PdoLaVilla::$monPdoLaVilla= new PdoLaVilla();
		}
		return PdoLaVilla::$monPdoLaVilla;  
	}
/**
 * Retourne toutes les catégories sous forme d'un tableau associatif
 *
 * @return le tableau associatif des catégories 
*/
	public function getLesCategories()
	{
		$req = "select * from categorie";
		$res = PdoLaVilla::$monPdo->query($req);
		$lesLignes = $res->fetchAll();
		return $lesLignes;
	}

/**
 * Retourne sous forme d'un tableau associatif tous les produits de la
 * catégorie passée en argument
 * 
 * @param $idCategorie 
 * @return un tableau associatif  
*/

	public function getLesProduitsDeCategorie($categorie)
	{
	    $req="select * from produit where idCategorie = '$categorie'";
		$res = PdoLaVilla::$monPdo->query($req);
		$lesLignes = $res->fetchAll();
		return $lesLignes; 
	}
/**
 * Retourne les produits concernés par le tableau des idProduits passée en argument
 *
 * @param $desIdProduit tableau d'idProduits
 * @return un tableau associatif 
*/
	public function getLesProduitsDuTableau($desIdProduit)
	{
		$nbProduits = count($desIdProduit);
		$lesProduits=array();
		if($nbProduits != 0)
		{
			foreach($desIdProduit as $unIdProduit)
			{
				$req = "select * from produit where id = '$unIdProduit'";
				$res = PdoLaVilla::$monPdo->query($req);
				$unProduit = $res->fetch();
				$lesProduits[] = $unProduit;
			}
		}
		return $lesProduits;
	}
/**
 * Crée une commande 
 *
 * Crée une commande à partir des arguments validés passés en paramètre, l'identifiant est
 * construit à partir du maximum existant ; crée les lignes de commandes dans la table contenir à partir du
 * tableau d'idProduit passé en paramètre
 * @param $nom 
 * @param $rue
 * @param $cp
 * @param $ville
 * @param $mail
 * @param $lesIdProduit
 
*/
	public function creerCommande($nom,$rue,$cp,$ville,$mail, $lesIdProduit )
	{
		$req = "select max(id) as maxi from commande";
		echo $req."<br>";
		$res = PdoLaVilla::$monPdo->query($req);
		$laLigne = $res->fetch();
		$maxi = $laLigne['maxi'] ;
		$maxi++;
		$idCommande = $maxi;
		echo $idCommande."<br>";
		echo $maxi."<br>";
		$date = date('Y/m/d');
		$req = "insert into commande values ('$idCommande','$date','$nom','$rue','$cp','$ville','$mail')";
		echo $req."<br>";
		$res = PdoLaVilla::$monPdo->exec($req);
		foreach($lesIdProduit as $unIdProduit)
		{
			$req = "insert into contenir values ('$idCommande','$unIdProduit')";
			echo $req."<br>";
			$res = PdoLaVilla::$monPdo->exec($req);
		}
		
	
	}

		public Function AjouterProduit($nom,$description,$prix,$id)
	{	
		$req = "select max(id) as maxi from produit";
		$res = PdoLaVilla::$monPdo->query($req);
		$laLigne = $res->fetch();
		$maxi = $laLigne['maxi'] ;
		$maxi++;
		$idproduit = $maxi;
		$req = "insert into produit (id, nom, description, prix, idCategorie ) values ('$idproduit','$nom','$description','$prix','$id')";
		$res = PdoLaVilla::$monPdo->exec($req);
	}


	public Function AjouterCategorie($libelle)
	{	
		$req = "select max(id) as maxi from categorie";
		$res = PdoLaVilla::$monPdo->query($req);
		$laLigne = $res->fetch();
		$maxi = $laLigne['maxi'] ;
		$maxi++;
		$id = $maxi;
		$req = "insert into categorie values ('$id','$libelle')";
		$res = PdoLaVilla::$monPdo->exec($req);
	}

	public function liste_Categorie()
	{
		$req = 'SELECT id,libelle FROM categorie ';
		$res = PdoLaVilla::$monPdo->query($req);
		$lesLignes = $res->fetchAll();
		return $lesLignes;
		
	}

	public function email($email)
	{
		$req = " SELECT email FROM client ";
		$res = PdoLaVilla::$monPdo->query($req);
		$email1 = $res->fetch();
		$email1 = $email1['email'] ;
		$ok=true;
		if ($email == $email1) 
		{
			$ok = true;
			return $ok;
		}
		else
		{
			$ok = false;
			return $ok;
		}

	}

	public function mdp($mdp)
	{	
		$req = " SELECT mdp FROM client ";
		$res = PdoLaVilla::$monPdo->query($req);
		$mdp1 = $res->fetch();
		$mdp1 = $mdp1['mdp'] ;
		$ok=true;
		if ($mdp == $mdp1) 
		{
			$ok = true;
			return $ok;
		}
		else
		{
			$ok = false;
			return $ok;
		}

	}
	

}
?>