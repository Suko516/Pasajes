<?php include '../layout/dbcon.php';?>

<?php 
 @session_start();





?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="../graficos/css/styles.css">

    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
            

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>NUEVO SALIDA </title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../graficos/public/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../graficos/public/css/font-awesome.css">
   
    <!-- Theme style -->
    <link rel="stylesheet" href="../graficos/public/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="../graficos/public/css/blue.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
      #myInput {
  background-image: url('../graficos/css/buscador.png'); /* Add a search icon to input */
  background-position: 10px 12px; /* Position the search icon */
  background-repeat: no-repeat; /* Do not repeat the icon image */
  width: 100%; /* Full-width */
  font-size: 16px; /* Increase font-size */
  padding: 12px 20px 12px 40px; /* Add some padding */
  border: 1px solid #ddd; /* Add a grey border */
  margin-bottom: 12px; /* Add some space below the input */
}

#myUL {
  /* Remove default list styling */
  list-style-type: none;
  padding: 0;
  margin: 0;
}

#myUL li a {
  border: 1px solid #ddd; /* Add a border to all links */
  margin-top: -1px; /* Prevent double borders */
  background-color: #f6f6f6; /* Grey background color */
  padding: 12px; /* Add some padding */
  text-decoration: none; /* Remove default text underline */
  font-size: 18px; /* Increase the font-size */
  color: black; /* Add a black text color */
  display: block; /* Make it into a block element to fill the whole list */
}

#myUL li a:hover:not(.header) {
  background-color: #eee; /* Add a hover effect to all links, except for headers */
}

    </style>
  </head>

  <body class="hold-transition login-page">
           <?php    
if(!isset($_SESSION["carrito"])) $_SESSION["carrito"] = [];
$granTotal = 0;
$impuTotal = 0;
?>
  <div class="col-xs-12">
    <h4>NUEVO TAREA</h4>



  <br>
  <section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-4">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
           
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" id="frmAcceder" name="frmAcceder">
                  <div class="box-body">
                  <div class="row">
                    <div class="col-xs-12">
                   <br><br>
              <?php



?>





     <h3><?php echo "<h2> $nombre</h2>"; ?></h3>



                    </div>
                  </div> 
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <a type="button" href="../layout/inicio.php" class="btn btn-danger">Salir </a>
                  </div>
                </form>
              </div><!-- /.box -->

              

              

              
            </div><!--/.col (left) -->
            <!-- right column -->
            <div class="col-md-8">
              <!-- Horizontal Form -->
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">REGISTRAR  NUEVA SALIDA</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                
                  <div class="box-body">
                  <div class="box">
                
                <div class="box-body no-padding">
        <div class="row">
        <div id="content" class="col-lg-12">
<form class="form-inline" method="post" action="#">

</form>
<div id="suggestions"></div>
        </div>
    </div>
   <br>   <br> 

   



                  <div class="row">
                        
                 <div class="box-body">
                     
                                                                        <a class = "btn btn-success btn-print" href = "consolidado_docentes.php"   onclick = "window.print()"><i class ="glyphicon glyphicon-print"></i> Imprimir</a>
          

                          <?php



  $cantidad_enero=(float) 0;
    $cantidad_febrero=(float) 0;
      $cantidad_marzo=(float) 0;
        $cantidad_abril=(float) 0;
          $cantidad_mayo=(float) 0;
            $cantidad_junio=(float) 0;
            $cantidad_julio = (float) 0;



              $cantidad_agosto=(float) 0;
                $cantidad_setiembre=(float) 0;
                  $cantidad_octubre=(float) 0;
                    $cantidad_noviembre=(float) 0;
                      $cantidad_diciembre=(float) 0;

  $year = date("Y");

  $enero_inicio=$year."-01-01";
    $enero_fin=$year."-01-31";
  $febrero_inicio=$year."-02-01";
    $febrero_fin=$year."-02-28";
  $marzo_inicio=$year."-03-01";
    $marzo_fin=$year."-03-31";
      $abril_inicio=$year."-04-01";
    $abril_fin=$year."-04-30";
          $mayo_inicio=$year."-05-01";
    $mayo_fin=$year."-05-31";
          $junio_inicio=$year."-06-01";
    $junio_fin=$year."-06-30";
              $julio_inicio=$year."-07-01";
    $juio_fin=$year."-07-31";
            $agosto_inicio=$year."-08-01";
    $agosto_fin=$year."-08-31";
                $setiembre_inicio=$year."-09-01";
    $setiembre_fin=$year."-09-30";
                    $octubre_inicio=$year."-10-01";
    $octubre_fin=$year."-10-31";
      $noviembre_inicio=$year."-11-01";
    $noviembre_fin=$year."-11-30";
      $diciembre_inicio=$year."-12-01";
    $diciembre_fin=$year."-12-31";




?>
  <?php

      $query=mysqli_query($con,"select * from venta_pasajes  where fecha_venta >='$enero_inicio' and fecha_venta <='$enero_fin' ")or die(mysqli_error());
      while($row=mysqli_fetch_array($query)){
      $cantidad_enero=$row['precio']+$cantidad_enero;
      }







$query=mysqli_query($con,"select * from venta_pasajes   where fecha_venta >='$febrero_inicio' and fecha_venta <='$febrero_fin'")or die(mysqli_error());
      while($row=mysqli_fetch_array($query)){
     $cantidad_febrero=$row['precio']+$cantidad_febrero;
      }

      $query=mysqli_query($con,"select * from venta_pasajes   where fecha_venta >='$marzo_inicio' and fecha_venta <='$marzo_fin'")or die(mysqli_error());
      while($row=mysqli_fetch_array($query)){
             $cantidad_marzo=$row['precio']+$cantidad_marzo;

      }

            $query=mysqli_query($con,"select * from venta_pasajes   where fecha_venta >='$abril_inicio' and fecha_venta <='$abril_fin'")or die(mysqli_error());
      while($row=mysqli_fetch_array($query)){
            $cantidad_abril=$row['precio']+$cantidad_abril;
      $cantidad_abril++;
      }
     
           $query=mysqli_query($con,"select * from venta_pasajes  where fecha_venta >='$mayo_inicio' and fecha_venta <='$mayo_fin'")or die(mysqli_error());
      while($row=mysqli_fetch_array($query)){
            $cantidad_mayo=$row['precio']+$cantidad_mayo;

      }

          $query=mysqli_query($con,"select * from venta_pasajes  where fecha_venta >='$junio_inicio' and fecha_venta <='$junio_fin'")or die(mysqli_error());
      while($row=mysqli_fetch_array($query)){
                 $cantidad_junio=$row['precio']+$cantidad_junio;

      }

         $query=mysqli_query($con,"select * from venta_pasajes  where fecha_venta >='$julio_inicio' and fecha_venta <='$juio_fin'")or die(mysqli_error());
      while($row=mysqli_fetch_array($query)){
//        $var = (float) $row['monto'];
       $cantidad_julio= number_format($row['precio']+$cantidad_julio,2);


      }

        $query=mysqli_query($con,"select * from venta_pasajes  where fecha_venta >='$agosto_inicio' and fecha_venta <='$agosto_fin'")or die(mysqli_error());
      while($row=mysqli_fetch_array($query)){
        $cantidad_agosto=$row['precio']+$cantidad_agosto;
 
      }
              $query=mysqli_query($con,"select * from venta_pasajes  where fecha_venta >='$setiembre_inicio' and fecha_venta <='$setiembre_fin'")or die(mysqli_error());
      while($row=mysqli_fetch_array($query)){
           $cantidad_setiembre=$row['precio']+$cantidad_setiembre;

      }

             $query=mysqli_query($con,"select * from venta_pasajes where fecha_venta >='$octubre_inicio' and fecha_venta <='$octubre_fin'")or die(mysqli_error());
      while($row=mysqli_fetch_array($query)){
            $cantidad_octubre=$row['precio']+$cantidad_octubre;
 
      }

            $query=mysqli_query($con,"select * from venta_pasajes   where fecha_venta >='$noviembre_inicio' and fecha_venta <='$noviembre_fin'")or die(mysqli_error());
      while($row=mysqli_fetch_array($query)){
         $cantidad_noviembre=$row['precio']+$cantidad_noviembre;

      }

           $query=mysqli_query($con,"select * from venta_pasajes where fecha_venta >='$diciembre_inicio' and fecha_venta <='$diciembre_fin'")or die(mysqli_error());
      while($row=mysqli_fetch_array($query)){
         $cantidad_diciembre=$row['precio']+$cantidad_diciembre;

      }
 
















        
  ?>



    <?php


  ?>   
                  <!-- Date range -->
                <CENTER>  <h1>GANANCIAS DEL AÑO</h1></CENTER>
        <div class="caja">

          <label>año: </label>
          <input type="text" value="<?php echo $year?>" onChange="mostrarResultados(<?php echo $year?>);" readonly><br>
   
        </div>
        <div class="resultados"><canvas id="grafico"></canvas></div>




          </div>
                    
                   
                        </div>
                      </div><!-- ./col -->








       

                   

                                        <?php
                      
                     
                      ?>

   


          








                  </div><!--row-->

                  <?php

 ?>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

                  
              </div><!-- /.box -->
              <!-- general form elements disabled -->
                          </div><!--/.col (right) -->
          </div>   <!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->




    <!-- jQuery 2.1.4 -->
    <script src="../graficos/public/js/jquery.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../graficos/public/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="../graficos/public/js/icheck.min.js"></script>
    
    <script>
            $(document).ready(mostrarResultados(2019));  
            var gastos = "<?php echo '';?>";

                function mostrarResultados(year){
                    $('.resultados').html('<canvas id="grafico"></canvas>');
                    $.ajax({
                        type: 'POST',
                        url: 'php/procesar.php',
                        data: 'year='+year,
                        dataType: 'JSON',
                        success:function(response){
                            var Datos = {
                                    labels : ['ENERO', 'FEBRERO', 'MARZO', 'ABRIL', 'MAYO', 'JUNIO', 'JULIO', 'AGOSTO', 'SEPTIEMBRE', 'OCTUBRE', 'NOVIEMBRE', 'DICIEMBRE'],
                                    datasets : [
                                        {
                                            fillColor : 'rgba(91,228,146,0.6)', //COLOR DE LAS BARRAS
                                            strokeColor : 'rgba(57,194,112,0.7)', //COLOR DEL BORDE DE LAS BARRAS
                                            highlightFill : 'rgba(73,206,180,0.6)', //COLOR "HOVER" DE LAS BARRAS
                                            highlightStroke : 'rgba(66,196,157,0.7)', //COLOR "HOVER" DEL BORDE DE LAS BARRAS
                                            data : ["<?php echo round($cantidad_enero);?>", "<?php echo round($cantidad_febrero);?>", "<?php echo round($cantidad_marzo);?>", "<?php echo round($cantidad_abril);?>", "<?php echo round($cantidad_mayo);?>", "<?php echo round($cantidad_junio);?>", "<?php echo round($cantidad_julio);?>", "<?php echo round($cantidad_agosto);?>", "<?php echo round($cantidad_setiembre);?>", "<?php echo round($cantidad_octubre);?>", "<?php echo round($cantidad_noviembre);?>", "<?php echo round($cantidad_diciembre);?>"]
                                        }
                                    ]
                                }
                            var contexto = document.getElementById('grafico').getContext('2d');
                            window.Barra = new Chart(contexto).Bar(Datos, { responsive : true });
                            Barra.clear();
                        }
                    });
                    return false;
                }
    </script>
  </body>
</html>
<?php


  
?>