<?php
session_start();
include('../../dist/includes/dbcon.php');
	//$branch=$_SESSION['branch'


          if(isset($_REQUEST['id_bus_asiento']))
            {
              $id_bus_asiento=$_REQUEST['id_bus_asiento'];
            }
            else
            {
            $id_bus_asiento=$_POST['id_bus_asiento'];
          }

                   if(isset($_REQUEST['id_salida']))
            {
              $id_salida=$_REQUEST['id_salida'];
            }
            else
            {
            $id_salida=$_POST['id_salida'];
          }





    $query=mysqli_query($con,"select * from bus_asiento where id_bus_asiento='$id_bus_asiento' ")or die(mysqli_error());
    $i=1;
    while($row=mysqli_fetch_array($query)){
    $estado=$row['estado'];
}


if ($estado=='disponible') {



		echo "<script>document.location='registrar_asiento.php?id_salida=$id_salida&id_bus_asiento=$id_bus_asiento'</script>";	
}



if ($estado=='ocupado') {


      $query=mysqli_query($con,"select * from venta_pasajes where  id_bus_asiento='$id_bus_asiento' and codigo_salida='$id_salida' ")or die(mysqli_error());

    while($row=mysqli_fetch_array($query)){

        $codigo_pasaje=$row['codigo_pasaje'];

}


		echo "<script>document.location='../imprimir/generar_ticket_venta.php?codigo_pasaje=$codigo_pasaje'</script>";	
}



	











	
?>
