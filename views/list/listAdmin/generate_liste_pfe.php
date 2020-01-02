<div class="col-md-12" align="center">
    <table class="table table-bordered table-responsive"  >
        <tr class="bg-info" style="font-family: 'Times New Roman'">
            <th>Matr</th><th>Membres et Emails</th><th>Encadrant</th><th>Ville</th><th>Inscription</th><th>Consultation</th>
        </tr>
    <?php foreach($tousEtudiant as $donnees) {
             $username=$donnees->username();
        ?>
        <tr>
            <td><?php echo $donnees->filiere()."-".$donnees->groupe(); ?></td>
            <td>
                <?php if($donnees->nom1()){ echo $donnees->nom1() . "&nbsp;" . $donnees->prenom1() . "&nbsp;" ;  }?>
                <?php if($donnees->email1()){ echo "<br><em style='color:#2e6da4'>".$donnees->email1()."</em>" ;}?>
                <?php if($donnees->nom2()){ echo $donnees->nom2() . "&nbsp;" . $donnees->prenom2() . "&nbsp;" ;  }?>
                <?php if($donnees->email2()){ echo "<br><em style='color:#2e6da4'>".$donnees->email2()."</em>" ;}?>
                <?php if($donnees->nom3()){ echo $donnees->nom3() . "&nbsp;" . $donnees->prenom3() . "&nbsp;" ;  }?>
                <?php if($donnees->email3()){ echo "<br><em style='color:#2e6da4'>".$donnees->email3()."</em>" ;}?>
             </td>
             <td><?php echo $donnees->encadrant(); ?></td>


             <td><?php echo $donnees->ville(); ?></td>


            <td><?php echo $donnees->date(); ?></td>
            
            <td><?php 
            echo $donnees->dateconsult(); ?></td>
        </tr>


    <?php } ?>
    </table>
</div>