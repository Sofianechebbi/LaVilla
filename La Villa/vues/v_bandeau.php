<!-- NAVBAR
================================================== -->
  <body>
	<div class="navbar-wrapper">
      <div class="container">
        <nav class="navbar navbar-findcond navbar-fixed-top">
          <div class="container-fluid">
            <div class="navbar-header">
              <a class="navbar-brand"><span class="glyphicon glyphicon-grain"></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav navbar-left">
                <li class="active"><a href="index.php?uc=accueil">Menus</a></li>
                <li><a href="index.php?uc=voirProduits&action=voirCategories">La carte</a></li>
			  </ul>
			  <ul class="nav navbar-nav navbar-right">
          <?php
          ?>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>       
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
              </ul>                
          </li>
                <?php 
                if(!estConnecte()){
                ?>

                  <li><a href="index.php?uc=connexion&action=seConnecter"  >Connexion</a></li>
                <?php 
                } else {
                  ?>
                  <li><a href="index.php?uc=connexion&action=deconnexion"  >Déconnexion</a></li>
                  <?php
                }
                ?> 

                
                <li><a href="index.php?uc=gererPanier&action=voirPanier">Panier</a></li>
                <li><a href="index.php?uc=administrer&action=administrateur">Administrer</a></li>
                <li><a href="index.php?uc=administrer&action=tableaudebord">Commandes</a></li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>

  </br></br></br>
