<div class="container">

    <div class="row">
        <div class="col-md-2" >
            <div class="row nav" align="center"><br>
                <p align="center"><img src="public/image/icone_prof.png"></p>
             <form method="post" action="">
                <p><button id="nav_accueil"   style="width:180px;text-align: left; " name="home"   type="submit" class="glyphicon glyphicon-list-alt btn btn-info"> Accueil </button></p>
                <p><button id="nav_cal_pfe"  style="width: 180px;text-align: left;"  name="calendrier"   type="submit" class="glyphicon glyphicon-list-alt btn btn-info"> Calendrier PFE </button></p>
                <p><button id="nav_list_pfe"   style="width: 180px;text-align: left;"  name="ListePfe" class="glyphicon glyphicon-list-alt btn btn-info"> Liste des PFE  </button></p>
                <p><button id="nav_mod_pfe" style="width: 180px;text-align: left;"   name="Modalite" class="glyphicon glyphicon-list-alt btn btn-info"> Modalités PFE </button></p>
                <p><button id="nav_list_prof"  style="width: 180px;text-align: left;"  name="ListEncadrant"  type="submit" class="glyphicon glyphicon-list-alt btn btn-info"> Liste Encadrants </button></p>
                <p><button id="nav_edit_note"  style="width: 180px;text-align: left;"   name="Notes" type="submit" class="glyphicon glyphicon-list-alt btn btn-danger"> Saisi des notes </button></p>
            
                
                <p><button id="nav_list_note_inf"   style="width: 180px;text-align: left; "  name="ListNoteInfo"  type="submit" class="glyphicon glyphicon-list-alt btn btn-info"> Liste Notes G-Info </button></p>
                <p><button id="nav_list_note_inf_gtr"   style="width: 180px;text-align: left; " name="ListNoteGtr"   type="submit" class="glyphicon glyphicon-list-alt btn btn-info"> Liste  Notes GTR </button></p>
                
                <p><button id="nav_list_email"   style="width: 180px;text-align: left;"  name="Mailing"  type="submit" class="glyphicon glyphicon-list-alt btn btn-info"> Mailing List </button></p>

            
                    <p><button id="nav_prof_attrib"   style="width: 180px;text-align: left; "  name="AttribuerEncadrant" type="submit" class="glyphicon glyphicon-list-alt btn btn-danger"> Attribuer Encadrants </button></p>
           
                <p><button id="nav_stn_pfe"   style="width: 180px;text-align: left;"  name="SalleJury"  type="submit" class="glyphicon glyphicon-list-alt btn btn-danger"> Salle et Jury </button></p>
            
                <p><button id="nav_send_messages"   style="width: 180px;text-align: left;"  name="EnvoyerMessage"  type="submit" class="glyphicon glyphicon-envelope btn btn-danger"> Envoyer Messages </button></p>
            
                <p><button id="nav_Jury"   style="width:180px;text-align: left; "  name="Jury"  type="submit" class="glyphicon glyphicon-list-alt btn btn-info">Jury </button></p>

                <p><a href="logout.php"><button id="nav_off"       style="width: 180px;text-align: left;" name="deco"   type="submit" class="glyphicon glyphicon-off btn btn-info"> Déconnexion </button></a></p>
            </form>
        </div>
            </div>
            <div class="col-md-10 ">
                <p class="bg-info"  style="font-family: 'Lucida Fax';text-align: center; font-size: large; ">

                    <hr class="new_hr">
                </p>
            </div>
            <div class="col-md-10"  id="main_content">
                <?php 
                
                    if(isset($_POST["home"])){
                        include "list/home.php";
                    }
                    elseif (isset($_POST["calendrier"])) {
                        include "list/calendrier.php";
                    }
                    elseif (isset($_POST["Modalite"])) {
                        include "list/Modalite.php";
                    }
                    elseif (isset($_POST["ListePfe"])) {
                        include "list/ListPfe.php";
                    }
                   
                    elseif (isset($_POST["calendrier"])) {
                        include "list/calendrier.php";
                    }
                    elseif (isset($_POST["ListePfeInfo"])) {
                        include "list/ListInfo.php";
                    }
                    elseif (isset($_POST["ListePfeGtr"])) {
                        include "list/ListGtr.php";
                    }
                    elseif (isset($_POST["FichePfe"])) {
                        include "list/FichePfe.php";
                    }
                    elseif (isset($_POST["FormulairePfe"])) {
                        include "list/FormulairePfe.php";
                    }
                    elseif (isset($_POST["DocumentUtilis"])) {
                        include "list/DocumentUtilis.php";
                    }
                    elseif (isset($_POST["DocumentUtilis"])) {
                        include "list/DocumentUtilis.php";
                    }
                    elseif (isset($_POST["Rapport"])) {
                        include "list/Rapport.php";
                    }
                    elseif (isset($_POST["Soutenances"])) {
                        include "list/Soutenances.php";
                    }
                    elseif (isset($_POST["deco"])) {
                        session_destroy();
                        header("Location: http://127.0.0.1:8888/edsa-pfe-mvc/ ");
                    }
                    elseif (isset($_POST["ListEncadrant"])) {
                        include "list/listAdmin/ListEncadrant.php";
                    }
                     elseif (isset($_POST["Notes"])) {
                        include "list/listAdmin/SaisiNote.php";
                    }
                    elseif (isset($_POST["ListNoteInfo"])) {
                        include "list/listAdmin/ListNoteInfo.php";
                    }
                    else{
                        include "list/home.php";
                    }
                   
                
                ?>
            </div>
    