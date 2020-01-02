
<div class="col-md-10">
    <p style="text-align: center;font-family: 'Lucida Fax';font-size: large"><span class="glyphicon glyphicon-bookmark"></span> Liste des encadrant </p>

    <p align="center"><br><a target="_blank" href="prof_register.php"><button  class="btn btn-info" style="width: auto">Ajouter un encadrant</button></a>
    </p>
<div align="center">

<table id="myTable" class="table table-responsive"  bordercolor='#6699FF' style="border-collapse: collapse; font-family: Arial; font-size: 15px" border="1"  bgcolor="#FFFFFF"   >
<tr align="center" class="bg-success" style="font-weight: bold" >
  
  <th  >N°</th>
  
  <th  >Encadrant</th>
  <th   >Email</th>

  <th   >Jury</th>
  <th   >Salle</th>

  <th  >G.INF</th>
  
  <th  >G.T.R</th>
  
  <th  >Total</th>
  
    <th  >&nbsp;</th>
  </tr>



    
  
<?php foreach($encadrant as $data): ?>
    <tr class="bg-info">
    <td style="height: 31px" > <?php echo $data->get_id(); ?></td>

  <td style="height: 31px">   <font color="#000000">  <?php  echo $data->get_nom() . ' ' . $data->get_prenom(); ?></font>  </td>
  
  
  <td style="height: 31px">   <font color="#000000"><?php  echo $data->get_email() . ', '; ?></font>  </td>
  <td style="height: 31px; text-align:center">   <font color="#000000"><?php echo $data->get_jury() ; ?></font>  </td>
  <td style="height: 31px;">   <font color="#000000"><?php // echo $salle ; ?></font>  </td>


  <td style="height: 31px; text-align:center">  <font color="#FF0000">
  <?php echo "2";   ?>
  </td>


  <td style="height: 31px; text-align:center">  <font color="#FF0000">
  <?php echo "3";    ?>
  </td>


  <td bgcolor="#FFFF99" style="height: 31px; text-align:center; font-size:small"><b>  <font color="#000000">
  
  
    <?php echo "3";  ?>
    </td>
  
     

  <td style="height: 31px">
<a target="_blank" href="prof_edit.php?nom=<?php // echo $nom; ?>"><button  class="btn btn-success" style="width: auto">Edit</button></a>
  </td>
    
  
  <td style="height: 31px">

<button class="btn btn-danger" style="width: auto" onclick="if (window.confirm('Etes vous sur de supprimer le prof: <?php // echo $nom; ?> ?'))
{location.href='prof_delete.php?nom=<?php // echo $nom; ?>';return true;} else {return false;}" >Del</button>
  </td>

  
  
   <?php endforeach ;  ?>

</tr>
		







</table>
</div>