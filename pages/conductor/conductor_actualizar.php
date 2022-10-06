 <?php
session_start();
include('../../dist/includes/dbcon.php');
	//$branch=$_SESSION['branch'];

	$id_conductor = $_POST['id_conductor'];
	$nombre = $_POST['nombre'];
	$ruc = $_POST['ruc'];
		$dni = $_POST['dni'];
	$telefono = $_POST['telefono'];
	$direccion = $_POST['direccion'];


		///finzalizo encriptacion


	mysqli_query($con,"update conductor set nombre='$nombre',ruc='$ruc',telefono='$telefono',dni='$dni',direccion='$direccion'  where id_conductor='$id_conductor'")or die(mysqli_error());

			

	echo "<script type='text/javascript'>alert(' actualizado correctamente!');</script>";
	echo "<script>document.location='conductor.php?id_conductor=$id_conductor'</script>";	

	




   







?>
