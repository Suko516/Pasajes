 <?php
session_start();
include('../../dist/includes/dbcon.php');
	//$branch=$_SESSION['branch'];

	 $id_bus_asiento = $_POST['id_bus_asiento'];
 
   $codigo_pasaje = $_POST['codigo_pasaje'];
      $id_salida = $_POST['id_salida'];
  $destino = $_POST['destino'];
      $fecha_venta = $_POST['fecha_venta']; 
           $precio = $_POST['precio']; 


           $id_cliente = $_POST['cliente']; 




  






  $monto=0;
  $caja_anterior=0;
          $query3=mysqli_query($con,"select * from caja   where estado='abierto'  ")or die(mysqli_error());
      while($row3=mysqli_fetch_array($query3)){
      $caja_anterior=$row3['monto'];
      }

$monto=$caja_anterior+$precio;
    mysqli_query($con,"update caja set monto='$monto'  where estado='abierto'")or die(mysqli_error());




    mysqli_query($con,"INSERT INTO venta_pasajes(fecha_venta,id_cliente,precio,destino,codigo_salida,id_bus_asiento,codigo_pasaje)
        VALUES('$fecha_venta','$id_cliente','$precio','$destino','$id_salida','$id_bus_asiento','$codigo_pasaje')")or die(mysqli_error($con));



  mysqli_query($con,"update bus_asiento set estado='ocupado',img='ocupado.jpg'  where id_bus_asiento='$id_bus_asiento'")or die(mysqli_error());


 
    echo "<script>document.location='../imprimir/generar_ticket_venta.php?codigo_pasaje=$codigo_pasaje'</script>"; 







?>
