<div class="panel panel-primary">
<div class="panel-heading" style="background-color: #EE6D6D">
Pendaftaran Akta Jual Beli
</div>
<div class="panel-body" >
                            <div class="row">
                                <div class="col-sm-6">
                                    
                                    <form method="POST">
                                        <div class="form-group">
                                            <label>Nama Klien</label>
                                            <input class="form-control" name="nama_klien" />                             
                                        </div>

                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <input class="form-control" name="alamat" />
                                        </div>

                                        <div class="form-group">
                                            <label>No Telp</label>
                                            <input class="form-control" name="no_telp" />
                                        </div>

                                       <div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control" name="email" />
                                        </div>

                                         <div class="form-group">
                                            <label>Tanggal Lahir</label>
                                            <input class="form-control" type="date" name="tgl_lahir" />
                                        </div>

                                        <div class="form-group">
                                            <label>Jenis Kelamin</label><br>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" value="L" name="jk" /> Laki - Laki
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" value="P" name="jk" /> Perempuan
                                            </label>
                                        </div>

                                        <div class="form-group">
                                            <label>Kecamatan</label>
                                            <input class="form-control" name="kecamatan" />
                                        </div>

                                        <div class="form-group">
                                            <label>Kelurahan</label>
                                            <input class="form-control" name="kelurahan" />
                                        </div>

                                        <div class="form-group">
                                            <label>Kota</label>
                                            <input class="form-control" name="kota" />
                                        </div>

                                        <div class="form-group">
                                            <label>No KTP</label>
                                            <input class="form-control" name="no_ktp" />
                                        </div>

                                        <div class="form-group">
                                            <label>No KK</label>
                                            <input class="form-control" name="kk" />
                                        </div>

                                        <div class="form-group">
                                            <label>No PBB</label>
                                            <input class="form-control" name="pbb" />
                                        </div>

                                        <div class="form-group">
                                            <label>Nama Pembeli</label>
                                            <input class="form-control" name="nama_pembeli" />
                                        </div>

                                        <div class="form-group">
                                            <label>No KTP Pembeli</label>
                                            <input class="form-control" name="ktp_pembeli" />
                                        </div>

                                         <div>
                                         	<input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
                                         </div>
                  
                                </div>
                                </form>
                            </div>
</div>
</div>
</div>

<?php 

	$nama_klien = $_POST ['nama_klien'];
	$alamat = $_POST ['alamat'];
	$no_telp = $_POST ['no_telp'];
	$email = $_POST ['email'];
	$tgl_lahir = $_POST ['tgl_lahir'];
	$jk = $_POST ['jk'];
	$kecamatan = $_POST ['kecamatan'];
    $kelurahan = $_POST ['kelurahan'];
    $kota = $_POST ['kota'];
    $no_ktp = $_POST ['no_ktp'];
    $kk = $_POST ['kk'];
    $pbb = $_POST ['pbb'];
    $nama_pembeli = $_POST ['nama_pembeli'];
	$ktp_pembeli = $_POST ['ktp_pembeli'];

	$simpan = $_POST ['simpan'];

	if ($simpan) {
		$sql = $koneksi->query("INSERT INTO akta (nama_klien, alamat, no_telp, email, tgl_lahir, jk, kecamatan, kelurahan, kota, no_ktp, kk, pbb, nama_pembeli, ktp_pembeli )VALUES('$nama_klien', '$alamat', '$no_telp', '$email', '$tgl_lahir', '$jk', '$kecamatan', '$kelurahan', '$kota', '$no_ktp', '$kk', '$pbb', '$nama_pembeli', '$ktp_pembeli')");

		if ($sql) {
			?>
				<script type="text/javascript">
					alert("Pendaftaran Berhasil, Data Sedang Diproses oleh staff");
					window.location.href="index.php?page=home";
				</script>

			<?php 
		}
	}


 ?>

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