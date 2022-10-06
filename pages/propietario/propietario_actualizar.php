 <?php
session_start();
include('../../dist/includes/dbcon.php');
	//$branch=$_SESSION['branch'];

	$id_propietario = $_POST['id_propietario'];
	$nombre = $_POST['nombre'];
	$ruc = $_POST['ruc'];
		$dni = $_POST['dni'];
	$telefono = $_POST['telefono'];
	$direccion = $_POST['direccion'];


		///finzalizo encriptacion


	mysqli_query($con,"update propietario set nombre='$nombre',ruc='$ruc',telefono='$telefono',dni='$dni',direccion='$direccion'  where id_propietario='$id_propietario'")or die(mysqli_error());

			

	echo "<script type='text/javascript'>alert(' actualizado correctamente!');</script>";
	echo "<script>document.location='propietario.php?id_propietario=$id_propietario'</script>";	

	




   







?>
