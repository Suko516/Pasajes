 <?php
session_start();
include('../../dist/includes/dbcon.php');
	//$branch=$_SESSION['branch'];

	$id_bus = $_POST['id_bus'];
	$num_asientos = $_POST['num_asientos'];
	$placa = $_POST['placa'];
	

		///finzalizo encriptacion


	mysqli_query($con,"update bus set num_asientos='$num_asientos',placa='$placa'  where id_bus='$id_bus'")or die(mysqli_error());

			

	echo "<script type='text/javascript'>alert(' actualizado correctamente!');</script>";
	echo "<script>document.location='bus.php'</script>";	

	




   







?>
