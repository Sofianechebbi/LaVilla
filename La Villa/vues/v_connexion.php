<div class="jumbotron col-xs-offset-5 col-md-2 col-xs-offset-5">
               <ul class="nav nav-tabs">
                    <li class="active"><a href="index.php?uc=connexion&action=seConnecter">Connexion</a></li>
                    <li class=""><a href="index.php?uc=connexion&action=seConnecter">Inscription</a></li>
                </ul>
      <form method="post" action="index.php?uc=connexion&action=connexion" class="form-horizontal">
        <div class="form-field text-field email">
            <label>
                <span>Email</span>
                <input class="email" placeholder="Email" name="email" type="email">
            </label>
                    </div>
        <div class="form-field text-field password">
            <label>
                <span>Mot de passe</span>
                <input type="password" name="mdp"  placeholder="Mot de passe">
            </label>
        </div>
        <a class="link forgotten-password" href="https://www.alloresto.fr/password/reset">Mot de passe oublié ?</a>
        <button name="do-login" type="submit" class="button submit">Se connecter</button>
    </form>
    <div class="register-suggest">
        <span>Pas encore de compte ?</span>
        <a class="link" href="https://www.alloresto.fr/inscription">Inscription</a>
    </div>
</div> 

