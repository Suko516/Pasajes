<?php session_start();
if(empty($_SESSION['id'])):
header('Location:../index.php');
endif;

include('../../dist/includes/dbcon.php');






    mysqli_query($con,"delete from caja	 ")or die(mysqli_error());
    mysqli_query($con,"delete from bus  ")or die(mysqli_error());
       mysqli_query($con,"delete from bus_asiento  ")or die(mysqli_error());
       mysqli_query($con,"delete from clientes   ")or die(mysqli_error());
              mysqli_query($con,"delete conductor   ")or die(mysqli_error());
  
                  mysqli_query($con,"delete propietario 	  ")or die(mysqli_error());        
    mysqli_query($con,"delete salidas 	")or die(mysqli_error());  
    mysqli_query($con,"delete venta_pasajes ")or die(mysqli_error());  
 
       
 
  echo "<script>document.location='../layout/inicio.php'</script>";  
  
  
?>