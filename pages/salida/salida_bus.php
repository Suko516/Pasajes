
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
label{

color: black;
}
li {
  color: white;
}
ul {
  color: white;
}
#buscar{
  text-align: right;
}
       </style>

         <?php
     if(isset($_REQUEST['id_salida']))
            {
              $id_salida=$_REQUEST['id_salida'];
            }
            else
            {
            $id_salida=$_POST['id_salida'];
          }

?>

        <!-- page content -->
        <div class="right_col" role="main">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class = "x-panel">

            </div>

        </div><!--end of modal-dialog-->
 </div>
 <!--end of modal-->

 
                        <div class="box-body">
                  <!-- Date range -->

          </div>

                  <div class="box-header">
                  <h3 class="box-title"> MENU</h3>
                </div><!-- /.box-header -->
                <div class="box-body">











                <div class="box-header with-border">
                  <h3 class="box-title"></h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="row">
                        
                                        <?php
                  //    if ($control_gavetas=="si") {
                    
                      ?>
                      <div class="col-lg-4 col-xs-6">
                        <!-- small box -->
                         <center><h3>ASIENTO CONDUCTOR </h3></center>
                          <center><h3>ESTADO OCUPADO </h3></center>
                        <div class="small-box bg-white">
                          <div class="inner">


<a title="Garage" ><IMG src="img/usuario.png" width="100px" height="100px"/></a>
                         
                          </div>
                          <div class="icon" style="margin-top:10px">
                            <i class="glyphicon glyphicon-user"></i>
                          </div>
                   
                        </div>
                      </div><!-- ./col -->

<?php

    $query=mysqli_query($con,"select * from bus_asiento where codigo_salida='$id_salida'")or die(mysqli_error());
    $i=1;
    while($row=mysqli_fetch_array($query)){
    $id_bus_asiento=$row['id_bus_asiento'];
  
 
?>




                      <div class="col-lg-4 col-xs-6">
                        <!-- small box -->
                         <center><h3>ASIENTO <?php echo $row['numero'];?> </h3></center>
                          <center><h3>ESTADO <?php echo $row['estado'];?> </h3></center>
                        <div class="small-box bg-white">
                          <div class="inner">


<a title="Garage" href="<?php  echo "asiento_bus_espacio.php?id_salida=$id_salida&id_bus_asiento=$id_bus_asiento";?>"><IMG src="img/<?php  echo $row['img'];?>" width="100px" height="100px"/></a>
                         
                          </div>
                          <div class="icon" style="margin-top:10px">
                            <i class="glyphicon glyphicon-user"></i>
                          </div>
                   
                        </div>
                      </div><!-- ./col -->








       

                   

                                        <?php
                      
                     }
                      ?>

   


          








                  </div><!--row-->
                  
      
  
   
            </div><!-- /.col (right) -->
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
                             <a href="https://ventadecodigofuente.com/">bus pasajes tusulutionweb Sys</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

  <?php include '../layout/datatable_script.php';?>



        <script>
        $(document).ready( function() {
                $('#example2').dataTable( {
                 "language": {
                   "paginate": {
                      "previous": "anterior",
                      "next": "posterior"
                    },
                    "search": "Buscar:",


                  },

                  "info": false,
                  "lengthChange": false,
                  "searching": false,


  "searching": true,
                }

              );
              } );
    </script>

      <?php
           //           }
                      ?>
    <!-- /gauge.js -->
  </body>
</html>
