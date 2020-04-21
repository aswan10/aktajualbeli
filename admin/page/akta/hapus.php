<?php 

	$no_akta = $_GET ['id'];

	$koneksi->query("DELETE FROM akta WHERE no_akta='$no_akta' "); 
	
 ?>

 <script type="text/javascript">
 	window.location.href="?page=akta";
 </script>