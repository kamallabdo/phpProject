<div class="container">
<div class="row">
           <div class="col-md-2" >
               <div class="row" align="center" >
                
                   <p><br><b>  ✔ Groupe  : <?php // // echo $groupe_label;  ?></b></p>
                   <p> <?php // // echo  $nom1 . " " . $prenom1; ?><br>
                       <?php // // echo $nom2 . " " . $prenom2; ?><br>
                       <?php // // // echo $nom3 . " " . $prenom3; ?>
                   </p>
               </div>

               <div class="row nav" align="center">
               <form method="post" action="">
                   <p style="width:180px;text-align: center; " class="bg-success" >  Menu  </p>
                   <p><button id="nav_mod_pfe"   style="width:180px;text-align: left; " name="Modalités"  type="submit"  class="glyphicon glyphicon-list-alt btn btn-info"> Modalités des PFE </button></p>
                   <p><button id="nav_list_pfe"  style="width: 180px;text-align: left;"  name="ListePfe"  type="submit" class="glyphicon glyphicon-list-alt btn btn-info"> Liste des PFE </button></p>
                   <p><button id="nav_pfe_inf"   style="width: 180px;text-align: left; "  name="ListePfeInfo"  type="submit" class="glyphicon glyphicon-list-alt btn btn-danger"> Liste PFE G-Info </button></p>
                   <p><button id="nav_pfe_gtr"   style="width: 180px;text-align: left; "  name="ListePfeGtr"  type="submit" class="glyphicon glyphicon-list-alt btn btn-danger"> Liste PFE GTR </button></p>
                   <p><button id="nav_fiche_pfe" style="width: 180px;text-align: left;"  name="FichePfe"  type="submit" class="glyphicon glyphicon-list-alt btn btn-info"> Ma fiche PFE </button></p>
                   <p><button id="nav_form_pfe"  style="width: 180px;text-align: left;"  name="FormulairePfe"  type="submit" class="glyphicon glyphicon-list-alt btn btn-info"> Formulaire PFE </button></p>
                   <p><button id="nav_doc_util"  style="width: 180px;text-align: left;"  name="DocumentUtilis"  type="submit" class="glyphicon glyphicon-list-alt btn btn-info"> Documents Utiles </button></p>
                   <p><button id="nav_rap_pfe"   style="width: 180px;text-align: left;"  name="Rapport"  type="submit" class="glyphicon glyphicon-list-alt btn btn-info"> Rapport PFE </button></p>
                   <p><button id="nav_stn_pfe"   style="width: 180px;text-align: left;"  name="Soutenances"  type="submit" class="glyphicon glyphicon-list-alt btn btn-info"> Soutenances PFE </button></p>
                   <p><a href="logout.php"><button id="nav_off"       style="width: 180px;text-align: left;"  name="deco"  type="submit" class="glyphicon glyphicon-off btn btn-info"> Déconnexion </button></a></p>
                   </form>

               </div>

           </div>
           <div class="col-md-10">
                <?php
                if(isset($_POST["Modalités"])){
                  include "list/Modalite.php";
                }
                elseif (isset($_POST["ListePfe"])) {
                  include "list/ListPfe.php";
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
                elseif(isset($_POST["deco"])){
                  session_destroy();
                   header("Location: http://127.0.0.1:8888/edsa-pfe-mvc/ ");
               }
                else{
                  echo "calem";
                  include "list/calendrier.php" ;
                }

                ?>
               <?php // // // if(!$sujet){ ?> <p align="center" class="warning" > <button id="btn_update_data" class="btn btn-danger "><em id="DivClignotante" style="visibility:visible;" >Vous devez compléter votre formulaire PFE !! </em> </button></p><?php // // //} ?>
           </div>
           <div class="col-md-10" id="main_content"  >
               <?php //include "list/calendrier.php" ; ?>
           </div>
       </div><hr>
