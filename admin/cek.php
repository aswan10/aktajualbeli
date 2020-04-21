<?php include "../config.php"; ?>
  <script type="text/javascript" src="assets/js/jquery-1.10.2.js"></script>
  <script type="text/javascript">
   function ambilKomentar(){
   $.ajax({
      type: "POST",
      url: "aksi.php?aksi=select",
      dataType:'json',
      success: function(response){
       $("#jumlah").text(""+response+"");
       timer = setTimeout("ambilKomentar()",5000);
      }
     });  
  }
  $(document).ready(function(){
   ambilKomentar();
  });
  </script>
  <div class="menu">
  <ul>
  <li><a href="#">Komentar<span class="bubble" id="jumlah">0</span></a></li>
  </ul>
  </div>