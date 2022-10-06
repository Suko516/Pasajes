
<?php include '../layout/header.php';


?>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="../layout/plugins/datatables/dataTables.bootstrap.css">
    <link rel="stylesheet" href="../layout/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="../layout/plugins/select2/select2.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../layout/dist/css/skins/_all-skins.min.css">
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <?php include '../layout/main_sidebar.php';?>

        <!-- top navigation -->
       <?php include '../layout/top_nav.php';?>      <!-- /top navigation -->


    <style>
        .caja{
            margin: auto;
            max-width: 250px;
            padding: 20px;
            border: 1px solid #BDBDBD;
        }
        .caja select{
            width: 100%;
            font-size: 16px;
            padding: 5px;
        }
        .resultados{
            margin: auto;
            margin-top: 40px;
            width: 1000px;
        }
    </style>

        <!-- page content -->
        <div class="right_col" role="main">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class = "x-panel">

            </div>

        </div><!--end of modal-dialog-->
 </div>




 <div class="container">
        
       </div>

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
     
 <!--end of modal-->


                  <div class="box-header">

                </div><!-- /.box-header -->
                <div class="box-body">
                

                </div><!-- /.box-body -->

            </div><!-- /.col -->


          </div><!-- /.row -->




                </div><!-- /.box-body -->

            </div>
        </div>
      </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            APSYSTEM <a href="#"></a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>
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

              <?php 
// }
      # code...
    
?>
    <!-- /gauge.js -->
  </body>
</html>
