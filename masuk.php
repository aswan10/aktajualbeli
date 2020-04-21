    <?php 
    if(isset($_GET['pesan'])){
        if($_GET['pesan'] == "gagal"){
            echo "Login gagal! username dan password salah!";
        }else if($_GET['pesan'] == "logout"){
            echo "Anda telah berhasil logout";
        }else if($_GET['pesan'] == "belum_login"){
            echo "Anda harus login untuk mengakses halaman ini";
        }
    }
    ?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
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
    
		<nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse"></button>
                <a class="navbar-brand" href="index.php?page=home">Akta Jual Beli</a> 
            </div>  
        </nav>


<div>
    <div class="navbar-cls-top" class="panel-heading" align="center">
         <h4 style="color: white;">Login Page</h4>
    </div>
	<div class="panel-body">
		<div class="login">
		<br/>
			<form action="login.php" method="post" onSubmit="return validasi()">
				<div>
					<label>Username:</label>
					<input type="text" name="username" id="username" />
				</div>
				<div>
					<label>Password:</label>
					<input type="password" name="password" id="password" />
				</div>			
				<div>
					<input type="submit" value="Login" class="btn btn-primary">
				</div>
			</form>
		</div>
	</div>	
</div>

</body>

<script type="text/javascript">
	function validasi() {
		var username = document.getElementById("username").value;
		var password = document.getElementById("password").value;		
		if (username != "" && password!="") {
			return true;
		}else{
			alert('Username dan Password harus di isi !');
			return false;
		}
	}

</script>
</html>