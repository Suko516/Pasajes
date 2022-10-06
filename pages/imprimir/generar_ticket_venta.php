<?php session_start();
if(empty($_SESSION['id'])):
header('Location:../index.php');
endif;
$codigo_pasaje=$_GET['codigo_pasaje'];
$impuesto=0;
$total=0;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />


  <link rel='stylesheet' type='text/css' href='../css/style.css' />
  <link rel='stylesheet' type='text/css' href='../css/print.css' media="print" />
  <script type='text/javascript' src='../js/jquery-1.3.2.min.js'></script>
  <script type='text/javascript' src='../js/example.js'></script>


<style>

.left{
    float: left;

}
.right{
    float: right;

}
.center{

   display:inline-block
}
@media print {
    .btn-print {
      display:none !important;
    size:30px;
    }

}
hr {
  height: 3px;
  width: 100%;
  background-color: black;
}
#abajo{
    height: 3px;
  width: 30%;
  background-color: black;
}
tr{
  font-family:'Helvetica','Verdana','Monaco',sans-serif;
  border:none; font-size: 15px;

}
#terminos{
    border:none; font-size: 8px;
}
</style>
</style>
</head>

<body>

  <?php
include('../../dist/includes/dbcon.php');


  ?>

  <?php
    $query31=mysqli_query($con,"select * from empresa ")or die(mysqli_error());
    
    while($row31=mysqli_fetch_array($query31)){
    $nombre_empresa=$row31['empresa'];
        $ruc_empresa=$row31['ruc'];
        $direccion_empresa=$row31['direccion'];
             $telefono_empresa=$row31['telefono'];
                  $correo_empresa=$row31['correo'];
                  $simbolo_moneda=$row31['simbolo_moneda'];
                         $impuesto_producto=$row31['impuesto_producto'];
   
    }

                        $fecha_ingreso='';
    $query6=mysqli_query($con,"select * from venta_pasajes AS v INNER JOIN clientes AS c
      ON v.id_cliente = c.id_cliente where codigo_pasaje='$codigo_pasaje' ")or die(mysqli_error());
    $i=1;
    while($row6=mysqli_fetch_array($query6)){
      $nombre_cliente=$row6['nombre'];
           $ruc_cliente=$row6['ruc'];
               $dni_cliente=$row6['dni'];

                       $fecha_venta=$row6['fecha_venta'];
        
              
                                       $precio=$row6['precio'];//hora incial
        

                           $destino=$row6['destino'];//hora incial
             

                            $codigo_salida=$row6['codigo_salida'];
                            $id_bus_asiento=$row6['id_bus_asiento'];

    }
                 $query7=mysqli_query($con,"select * from salidas where id_salida='$codigo_salida' ")or die(mysqli_error());

                      while($row7=mysqli_fetch_array($query7)){
   
     $lugar_salida=$row7['lugar_salida'];
         $fecha_salida=$row7['fecha_salida'];
    }

                 $query8=mysqli_query($con,"select * from bus_asiento where id_bus_asiento='$id_bus_asiento' ")or die(mysqli_error());

                      while($row8=mysqli_fetch_array($query8)){
   
     $numero_asiento=$row8['numero'];
    }





 //$dias_consumidos=number_format(date("d", $fecha_salida)-date("d", $fecha_ingreso));
  // $dia_inicio = date("d", $fecha_ingreso);
   //$dia_fin = date("d", $fecha_salida);

$session_id=$_SESSION['id'];
$user_query = mysqli_query($con,"select * from usuario where id = '$session_id'")or die(mysql_error());
$user_row = mysqli_fetch_array($user_query);
$user_username = $user_row['usuario'];


$impuesto=$impuesto_producto*$precio/100;
$total=$impuesto+$precio;
  ?>


  <div id="page-wrap">

    <div class="container">


<br>
<br>
   <a class = "btn btn-success btn-print" style="    text-decoration: none;
    padding: 10px;
    font-weight: 600;
    font-size: 20px;
    color: #ffffff;
    background-color: #1883ba;
    border-radius: 6px;
    border: 2px solid #0016b0; " href = "" onclick = "window.print()"><i class ="glyphicon glyphicon-print"></i> Impresion ticket</a>
    <br>
   <br>
      <br>



 <a class = "btn btn-success btn-print" style="    text-decoration: none;
    padding: 10px;
    font-weight: 600;
    font-size: 20px;
    color: #ffffff;
    background-color: #1883ba;
    border-radius: 6px;
    border: 2px solid #0016b0; " href="<?php  echo "../salida/salida_bus.php?id_salida=$codigo_salida";?>" ><i class ="glyphicon glyphicon-print"></i>Regresar</a>

      
                  <center>
                  <h3>TICKET VENTA</h3>
                  </center>
  

<center>            <table class="table table-bordered table-striped"  style="border:none;">
                    <thead>
                   <tr>


                        <th style="border:none;">

  <?php echo $nombre_empresa;?>  
  <br>
  Calle: <?php echo $direccion_empresa;?>
  <br>
  RUC: <?php echo $ruc_empresa;?>
  <br>
    <br>
  Telefono: <?php echo $telefono_empresa;?>
  <br>
      <br>
  Correo: <?php echo $correo_empresa;?>
  <br>
  
  ----------------------------
   <br>
   VENTA PASAJE
     <br>
  ----------------------------
   <br>
   Nombre cliente: <?php echo $nombre_cliente;?>
      <br>
         <br>
   Dni cliente: <?php echo $dni_cliente;?>
      <br>
         <br>
   Ruc cliente: <?php echo $ruc_cliente;?>
      <br>
  Fecha viaje: <?php echo $fecha_salida;?>
  
   <br>

    Origen: <?php echo $lugar_salida;?>
  <br>
  Destino: <?php echo $destino;?>
  <br>
    <br>
  Precio: <?php echo $precio;?>
  <br>
  impuesto: <?php echo $impuesto;?>
  <br>
  Total: <?php echo $total;?>
  <br>
  numero de asiento: <?php echo $numero_asiento;?>
  <br>

  Usuario :  <?php echo $user_username;?>
    <br>
  ----------------------------
    <br>
    Gracias por su preferencia
      <br>
    Regrese pronto
                        </th>

                        
                      
                      </tr>
                    </thead>
                    <tbody>
        
                   </tbody>

                  </table>    

</center>
                                         



  </div>




              
</body>

</html>
