<?php
session_start();
include('../../dist/includes/dbcon.php');
$id_usuario=$_SESSION['id'];

	$placa = $_POST['placa'];
  $num_asientos = $_POST['num_asientos'];
  $id_propietario = $_POST['id_propietario'];

 $id_conductor = $_POST['cliente'];

//		$update=mysqli_query($con,"update usuario set caja=caja+'$monto' where id='$id_usuario' ");

		mysqli_query($con,"INSERT INTO bus(num_asientos,id_propietario,id_conductor,placa)
				VALUES('$num_asientos','$id_propietario','$id_conductor','$placa')")or die(mysqli_error($con));

			

	echo "<script>document.location='../bus/bus.php'</script>";	

?>
