<!-- Page Content -->
<div class="container"><br>

    <!-- Portfolio Item Row -->
    <div class="row">
        <p style="text-align: center; font-size: large; border-bottom: double lightgray;">
            <img src="public/image/notice.png">
            Cette rubrique est déstinée à la gestion des PFE pour le Département Informatique, Réseaux et
            Télécommunications</p>
    </div>

    <form method="POST">
    <div class="row">
        <div class="button_nav">
            <button id="cal" type="submit" name="calendrier" class="glyphicon glyphicon-calendar name	 btn btn-info"> Calendrier</button>
            <button id="list_f" type="submit" name="info" class="glyphicon glyphicon-list-alt btn btn-info"> Liste des PFE G-Info
            </button>
            <button id="list_t" name = "gtr" class="glyphicon glyphicon-list-alt btn btn-info"> Liste des PFE GTR</button>
            <a href="planning_2017-2018.htm" target="_blank"><button id="planning" class="glyphicon glyphicon-calendar btn btn-info"> Planning des soutenances</button></a>
        </div>
        </form>

        <div class="col-md-8" >
            <p id="contenu">
                 <?php
                 if(isset($_POST["gtr"])){
                    include "list/ListGtr.php";
                 }
                 elseif(isset($_POST["info"])){
                     include "list/ListInfo.php";
                 }
                  else{
                    include "list/calendrier.php";
                  }
             ?>
            </p>
        </div>

        <div class="col-md-4" style="margin-top: 3%;">
            <div id="login" class="span3 well well-large offset4">
                <p><img src="public/image/eleve.png"></p>
                <h4 style="text-align:center"> S'identifier </h4>
                <p style="color: red"><?php //echo $dialog; ?></p>
                <form class="form" method="post" action="Login">
                    <label>Nom d'utilisateur : &nbsp; </label><input type="text" name="username" onkeyup="nospaces(this)" required/><br><br>
                    <label>Mot de passe : &nbsp; </label><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><input type="password" name="password" required/><br> <br/>
				<input class="btn btn-success" type="submit" name="login" value=" Connexion "/>
                    <input class="  btn btn-danger" type="reset" name="annuler" value=" &nbsp; Annuler &nbsp; "/><br>
                    <a  href="Password" target="_blank"><span class="glyphicon glyphicon-refresh"></span> Nom d'utilisateur ou Mot de passe oublié ?</a>
                    <br><br>
                    </form>
                    <form class="form" method="post" action="Register">
                        <button type="submit" name ="NouveauCompte" class="btn btn-lg">Créer un compte PFE</button>
                    </a>
                    </form>
            </div>
        </div>

    </div>

    <hr>
