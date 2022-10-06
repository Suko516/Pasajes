<?php
session_start();
include('../../dist/includes/dbcon.php');
	//$branch=$_SESSION['branch'];

	$nombre = $_POST['nombre'];
	$ruc = $_POST['ruc'];
	$telefono = $_POST['telefono'];
	$dni = $_POST['dni'];

$direccion = $_POST['direccion'];



		
	
	$query2=mysqli_query($con,"select * from conductor where dni='$dni'")or die(mysqli_error($con));
		$count=mysqli_num_rows($query2);

		if ($count>0)
		{
			echo "<script type='text/javascript'>alert('dni ya existe!');</script>";
			echo "<script>document.location='conductor.php'</script>";
		}
		else
		{




			mysqli_query($con,"INSERT INTO conductor(nombre,dni,ruc,direccion,telefono)
				VALUES('$nombre','$dni','$ruc','$direccion','$telefono')")or die(mysqli_error($con));

			
			echo "<script>document.location='conductor.php'</script>";


	
	




   



}





?>
