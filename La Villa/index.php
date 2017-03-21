<?php
session_start();
require_once("util/fonctions.inc.php");
require_once("util/class.PdoLafleur.inc.php");
include("vues/v_entete.php") ;
include("vues/v_bandeau.php") ;



if(!isset($_REQUEST['uc']))
    $uc = 'accueil';
else
    $uc = $_REQUEST['uc'];

$pdo = PdoLaVilla::getPdoLaVilla();	 
switch($uc)
{
	case 'accueil':
		{include("vues/v_accueil.php");break;}
	case 'voirProduits' :
		{include("controleurs/c_voirProduits.php");break;}
	case 'gererPanier' :
		{ include("controleurs/c_gestionPanier.php");break; }
	case 'administrer' :
	  { include("controleurs/c_gestionProduits.php");break;  }
	case 'connexion' :
	  { include("controleurs/c_connexion.php");break;  }
}
include("vues/v_pied.php") ;

?>