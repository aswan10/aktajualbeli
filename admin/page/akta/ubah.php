<?php 
		
	$no_akta = $_GET['id'];

	$sql = $koneksi->query("SELECT * FROM akta WHERE no_akta='$no_akta'");

	$tampil = $sql->fetch_assoc();

	   $jk = $tampil['jk'];

 ?>

<div class="panel panel-primary">
<div class="panel-heading">
Ubah Data
</div>
<div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <form method="POST">

                                        <div class="form-group">
                                            <label>No Akta</label>
                                            <input class="form-control" name="no_akta" value="<?php echo $tampil['no_akta']; ?>" readonly />
                                        </div>
                                    
                                        <div class="form-group">
                                            <label>Nama Klien</label>
                                            <input class="form-control" name="nama_klien" value="<?php echo $tampil['nama_klien']; ?>" />                             
                                        </div>

                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <input class="form-control" name="alamat" value="<?php echo $tampil['alamat']; ?>" />
                                        </div>

                                        <div class="form-group">
                                            <label>No Telp</label>
                                            <input class="form-control" name="no_telp" value="<?php echo $tampil['no_telp']; ?>" />
                                        </div>

                                         <div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control" name="email" value="<?php echo $tampil['email']; ?>" />
                                        </div>

                                         <div class="form-group">
                                            <label>Tanggal Lahir</label>
                                            <input class="form-control" type="date" name="tgl_lahir" value="<?php echo $tampil['tgl_lahir']; ?>" />
                                        </div>

                                         <div class="form-group">
                                            <label>Jenis Kelamin</label><br>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" value="L" name="jk" <?php if ($jk=='L') {
                                                    echo "checked";
                                                } ?> /> Laki - Laki
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" value="P" name="jk" <?php if ($jk=='P') {
                                                    echo "checked";
                                                } ?> /> Perempuan
                                            </label>                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Kecamatan</label>
                                            <input class="form-control" name="kecamatan" value="<?php echo $tampil['kecamatan']; ?>" />
                                        </div>

                                        <div class="form-group">
                                            <label>Kelurahan</label>
                                            <input class="form-control" name="kelurahan" value="<?php echo $tampil['kelurahan']; ?>" />
                                        </div>

                                        <div class="form-group">
                                            <label>Kota</label>
                                            <input class="form-control" name="kota" value="<?php echo $tampil['kota']; ?>" />
                                        </div>

                                        <div class="form-group">
                                            <label>No KTP</label>
                                            <input class="form-control" name="no_ktp" value="<?php echo $tampil['no_ktp']; ?>" />
                                        </div>

                                        <div class="form-group">
                                            <label>No KK</label>
                                            <input class="form-control" name="kk" value="<?php echo $tampil['kk']; ?>" />
                                        </div>

                                        <div class="form-group">
                                            <label>No PBB</label>
                                            <input class="form-control" name="pbb" value="<?php echo $tampil['pbb']; ?>" />
                                        </div>

                                        <div class="form-group">
                                            <label>Nama Pembeli</label>
                                            <input class="form-control" name="nama_pembeli" value="<?php echo $tampil['nama_pembeli']; ?>" />
                                        </div>

                                        <div class="form-group">
                                            <label>No KTP Pembeli</label>
                                            <input class="form-control" name="ktp_pembeli" value="<?php echo $tampil['ktp_pembeli']; ?>" />
                                        </div>

                                         <div>

                                         	<input type="submit" name="simpan" value="Ubah" class="btn btn-primary">

                                         </div>
                  
                                </div>
                                </form>
                            </div>
</div>
</div>
</div>

<?php 
    
    $no_akta = $_POST ['no_akta'];
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
		$sql = $koneksi->query("UPDATE akta SET nama_klien='$nama_klien', alamat='$alamat', no_telp='$no_telp', email='$email', tgl_lahir='$tgl_lahir', jk='$jk', kecamatan='$kecamatan', kelurahan='$kelurahan', kota='$kota', no_ktp='$no_ktp', kk='$kk', pbb='$pbb', nama_pembeli='$nama_pembeli', ktp_pembeli='$ktp_pembeli' WHERE no_akta='$no_akta'");

		if ($sql) {
			?>
				<script type="text/javascript">
					alert("Ubah Data Berhasil");
					window.location.href="?page=akta";
				</script>

			<?php 
		}
	}


 ?>