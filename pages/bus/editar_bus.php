
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

        <!-- page content -->
        <div class="right_col" role="main">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class = "x-panel">

            </div>

        </div><!--end of modal-dialog-->

 </div>
  <?php
     if(isset($_REQUEST['id_bus']))
            {
              $id_bus=$_REQUEST['id_bus'];
            }
            else
            {
            $id_bus=$_POST['id_bus'];
          }


?>

                           <?php
                         
             //         if ($guardar=="si") {
                    
                      ?>

                  <?php
               //       }
                      ?>

                  <!-- Date range -->
               

      
 <!--end of modal-->











                  <div class="box-header">
                  <h3 class="box-title"> MODIFICAR BUS</h3>
                </div><!-- /.box-header -->
              
              <a class="btn btn-warning btn-print" href="bus.php"    style="height:25%; width:15%; font-size: 12px " role="button">Regresar</a>

             
                

<?php
   // $branch=$_SESSION['branch'];
    $query=mysqli_query($con,"select * from bus where id_bus='$id_bus'  ")or die(mysqli_error());
    $i=1;
    while($row=mysqli_fetch_array($query)){
 

?>
      
        <form class="form-horizontal" method="post" action="bus_actualizar.php" enctype='multipart/form-data'>
            <input type="hidden" class="form-control" id="id_bus" name="id_bus" value="<?php echo $id_bus;?>" required>
    





                




<div class="row">
                    <div class="col-md-3 btn-print">
                      <div class="form-group">
                                    
                 
                      </div><!-- /.form group -->
                    </div>
                                        <div class="col-md-3 btn-print">
                      <div class="form-group">
                                                  <label >Numero de asientos</label>
                 
                      </div><!-- /.form group -->
                    </div>
                       <div class="col-md-4 btn-print">
                      <div class="form-group">
                    <input type="text" class="form-control" id="num_asientos" name="num_asientos" value="<?php echo $row['num_asientos'];?>" >
                      </div>
                    </div>
                           <div class="col-md-4 btn-print">
                
                    </div>
                    </div>



<div class="row">
                    <div class="col-md-3 btn-print">
                      <div class="form-group">
                                    
                 
                      </div><!-- /.form group -->
                    </div>
                                        <div class="col-md-3 btn-print">
                      <div class="form-group">
                                                  <label >Placa</label>
                 
                      </div><!-- /.form group -->
                    </div>
                       <div class="col-md-4 btn-print">
                      <div class="form-group">
                    <input type="text" class="form-control" id="placa" name="placa" value="<?php echo $row['placa'];?>" >
                      </div>
                    </div>
                           <div class="col-md-4 btn-print">
                
                    </div>
                    </div>



  


     
                
          
    <button type="submit" class="btn btn-primary">GUARDAR</button>          
  
                   
            <br><br><br><hr>
              <div class="modal-footer">


              </div>
        </form>
            
 <!--end of modal-->

<?php }?>

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
 // }    
?>



    <!-- /gauge.js -->
  </body>
</html>
