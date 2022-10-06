<?php
session_start();
include('../../dist/includes/dbcon.php');
$id_usuario=$_SESSION['id'];

	$fecha_salida = $_POST['fecha_salida'];
  $hora_salida = $_POST['hora_salida'];
  $lugar_salida = $_POST['lugar_salida'];

 $bus = $_POST['cliente'];

//		$update=mysqli_query($con,"update usuario set caja=caja+'$monto' where id='$id_usuario' ");

		mysqli_query($con,"INSERT INTO salidas(fecha_salida,hora_salida,bus,lugar_salida)
				VALUES('$fecha_salida','$hora_salida','$bus','$lugar_salida')")or die(mysqli_error($con));

			



            $query7=mysqli_query($con,"select * from bus  where id_bus='$bus' ")or die(mysqli_error());

                      while($row7=mysqli_fetch_array($query7)){

         $num_asientos=$row7['num_asientos'];

    }
            $query2=mysqli_query($con,"select * from salidas  ")or die(mysqli_error());

                      while($row2=mysqli_fetch_array($query2)){

         $id_salida=$row2['id_salida'];

    }

for ($i=1; $i <= $num_asientos; $i++) { 
mysqli_query($con,"INSERT INTO bus_asiento(numero,codigo,estado,img,codigo_salida)
VALUES('$i','$bus','disponible','disponible.jpg','$id_salida')")or die(mysqli_error($con));
 
}


	echo "<script>document.location='../salida/salidas.php'</script>";	

?>
