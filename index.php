<?php 
    
  include 'config.php';

// mengaktifkan session
//   session_start();

  header("Location : /index.php?page=home");

?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Akta Jual Beli</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />

</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                </button>
                <a class="navbar-brand" href="index.php?page=home">Akta Jual Beli</a> 
            </div>
            <div style="color: white; padding: 15px 50px 5px 50px; float: right; font-size: 25px;">  
             <a href="masuk.php" class="btn btn-danger square-btn-adjust">Login</a> 
            </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/notarius.png" class="user-image img-responsive"/>
					</li>
				
					
                    <li>
                        <a  href="?page=home"><i class="fa fa-home fa-3x"></i> Home</a>
                    </li>	
                    <li>
                        <a  href="?page=daftar"><i class="fa fa-sign-in fa-3x"></i> Pendaftaran Baru</a>
                    </li>
                    <li>
                        <a  href="?page=tentang"><i class="fa fa-info fa-3x"></i> Tentang Kami</a>
                    </li>
                    <li>
                        <a  href="?page=hubungi"><i class="fa fa-phone fa-3x"></i> Hubungi</a>
                    </li>

                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     
                     <?php

                        $page = $_GET['page'];
                        $aksi = $_GET['aksi'];


                        if ($page == "home") {
                            if ($aksi == "") {
                                include "page/home/home.php";
                            }
                        }elseif ($page == "daftar" ) {
                            if ($aksi == "") {
                                include "page/daftar/daftar.php";
                            }
                        }elseif ($page == "tentang") {
                            if ($aksi == "") {
                                include "page/tentang/tentang.php";
                            }
                        }elseif ($page == "hubungi") {
                            if ($aksi == "") {
                                include "page/hubungi/hubungi.php";
                            }
                        }


                     ?>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    

    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      

     <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
