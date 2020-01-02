<div class="col-md-10">
<p align="center" style="margin-top: 0; margin-bottom: 0">
&nbsp;</p>
<p align="center" style="margin-top: 0; margin-bottom: 0"><b>
<font face="Tahoma" size="4" color="#4476C1">Saisi des notes</font></b></p>
<br>

<p align="center"><font face="Arial" size="2"><strong>Remarque :</strong> Aprés l'attribution des Encadrants , Les
        encadrants teintés en vert ont introduit toutes leurs notes</font></p>


<div align="center" class="col-md-5 col-md-offset-4">
    <table id="myTable"   class="table table-borderedtable-responsive "  >
<tr align="center" class="bg-success" >
  <th  >N°</th>
  <th >Encadrant</th>
  </tr>
  
<form action="" method="post">
 <?php foreach($encadrant as $data): ?> 
<tr>
   
  <td ><?php echo $data->get_id() ?></td>
  <td >   <font color="#000000"><?php echo $data->get_nom() . ' ' . $data->get_prenom(); ?></font>  </td>
  <td >
<button style="width: auto" name="<?php echo $data->get_nom();?>" type="submit" class="btn btn-danger" > Notes </button></a>
</td>
</tr>
<?php endforeach; ?>	
</form>



	





</table>


