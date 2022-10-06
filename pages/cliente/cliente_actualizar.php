 <?php
session_start();
include('../../dist/includes/dbcon.php');
	//$branch=$_SESSION['branch'];

	$id_conductor = $_POST['id_conductor'];
	$nombre = $_POST['nombre'];
	$ruc = $_POST['ruc'];
		$dni = $_POST['dni'];
	$telefono = $_POST['telefono'];



		///finzalizo encriptacion


	mysqli_query($con,"update clientes set nombre='$nombre',ruc='$ruc',telefono='$telefono',dni='$dni'  where id_cliente='$id_cliente'")or die(mysqli_error());

			

	echo "<script type='text/javascript'>alert(' actualizado correctamente!');</script>";
	echo "<script>document.location='cliente.php'</script>";	

	




   







?>
