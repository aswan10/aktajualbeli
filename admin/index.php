<?php 
    
  include '../config.php';

// mengaktifkan session
    session_start();
    if($_SESSION['status']!="login"){
        header("location:../masuk.php?pesan=belum_login");
}
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
                    <!-- <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span> -->
                </button>
                <a class="navbar-brand" href="index.php?page=home">Akta Jual Beli</a> 
            </div>
  <div style="color: white; padding: 15px 50px 5px 50px; float: right; font-size: 16px;">  
    <a href="logout.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
					</li>
				
					
                    <li>
                        <a  href="?page=home"><i class="fa fa-home fa-3x"></i> Home</a>
                    </li>	
                    <li>
                        <a  href="?page=akta"><i class="fa fa-list fa-3x"></i> Akta</a>
                    </li>
                    <li>
                        <a  href="?page=proses"><i class="fa fa-print fa-3x"></i> Proses</a>
                    </li>
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">

                        <!-- notifikas -->                            
                            <div id="notif"></div>
                                
                            <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js";;></script>
                                
                            <script type="text/javascript">
                                
                            var last = 0;
                                
                            function check(){
                                
                                var url = 'cek.php?last='+last;
                                
                                $.get(url, {}, function(resp){
                                
                                    if(resp.result != false){
                                
                                        $("#notif").html(resp.result);
                                
                                        last = resp.last;
                                
                                    }
                                
                                    setTimeout("check()", 1000);
                                
                                }, 'json');
                                
                            }
                                
                            $(document).ready(function(){
                                
                                check();
                                
                            });
                                
                            </script>
                        <!-- end notifikasi -->
            

                     
                     <?php

                        $page = $_GET['page'];
                        $aksi = $_GET['aksi'];

                        if ($page == "home") {
                            if ($aksi == "") {
                                include "page/home/home.php";
                            }
                        }elseif ($page == "akta" ) {
                            if ($aksi == "") {
                                include "page/akta/akta.php";
                            }elseif ($aksi == "tambah") {
                                include "page/akta/tambah.php";
                            }elseif ($aksi == "ubah") {
                                include "page/akta/ubah.php";
                            }elseif ($aksi == "hapus") {
                                include "page/akta/hapus.php";
                            }
                        }elseif ($page == "proses") {
                            if ($aksi == "") {
                                include "page/proses/proses.php";
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
