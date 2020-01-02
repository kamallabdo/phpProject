

<div class="col-md-12" align="center">

<p align="center"><font style="font-family:Arial" size="3">Filière : </font><font style="font-family:Arial" size="3"><b><?php //echo $filiere_txt; ?></b></font></p>
<br>

<input class="btn btn-info" type="submit" value="Télécharger le Fichier Excel" onclick="location.href='<?php //echo $filiere; ?>.csv'" >

<br><br>
<table  id="myTable" class="table table-responsive table-bordered"  >
<tr align="center" class="bg-success"  >
  <th class="sortable-numeric" style="height: 15px" >N°</th>
  <th class="sortable-text" style="height: 15px" >Grp&nbsp;</th>
  <th  class="sortable-text" style="height: 15px">Nom</th>
  <th  class="sortable-text" style="height: 15px">Prénom</th>
  <th class="sortable-text" style="height: 15px">Encadrant</th>
  <th class="sortable-text" style="height: 15px">Sujet</th>
  <th class="sortable-text" style="height: 15px" >Note</th>
  
  </tr>





<tr >
  <td ><?php //echo $v+1; ?></td>
  <td >  <font color="#000000"><?php //echo $groupe_label[$v]; ?></font>  </td>
  <td  > <font color="#000000"> <?php //echo $nom[$v] ; ?> </font> </td>
  <td > <font color="#000000"> <?php //echo $prenom[$v] ; ?> </font> </td>

  <td>   <font color="#000000"><?php //echo $encadrant[$v]; ?></font>  </td>
  <td>   <font color="#000000"> <?php //echo $sujet[$v]; ?>  </font>    </td>
  
  <td  >   <font color="#000000"><b><?php //echo $note[$v]; ?></b>&nbsp;</font>  </td>
		
</tr>
	



</table>
<br>

<input class="btn btn-info" type="submit" value="Télécharger le Fichier Excel" onclick="location.href='F.csv'" >

</div>

