   	<a href="?page=akta&aksi=tambah" class="btn btn-primary" style="margin-bottom: 5px;">Tambah Data</a>

    <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                             Data Akta
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No Akta</th>
                                            <th>Nama Klien</th>
                                            <th>Alamat</th>
                                            <th>No Telp</th>
                                            <th>Email</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Kecamatan</th>
                                            <th>Kelurahan</th>
                                            <th>Kab/Kota</th>
                                            <th>No KTP</th>
                                            <th>No KK</th>
                                            <th>No PBB</th>
                                            <th>Nama Pembeli</th>
                                            <th>No KTP Pembeli</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
										
										<?php 

											$no = 1;

											$sql = $koneksi->query("SELECT * FROM akta");

											while ($data=$sql->fetch_assoc()) {

												$jk = ($data['jk']=='L')?"Laki-Laki":"Perempuan";
											

										 ?>

										<tr>
												
											<td> <?php echo $data['no_akta']; ?> </td>
											<td> <?php echo $data['nama_klien']; ?> </td>
											<td> <?php echo $data['alamat']; ?> </td>
											<td> <?php echo $data['no_telp']; ?> </td>
											<td> <?php echo $data['email']; ?> </td>
											<td> <?php echo $data['tgl_lahir']; ?> </td>
											<td> <?php echo $jk; ?> </td>
											<td> <?php echo $data['kecamatan']; ?> </td>
											<td> <?php echo $data['kelurahan']; ?> </td>
											<td> <?php echo $data['kota']; ?> </td>
											<td> <?php echo $data['no_ktp']; ?> </td>
											<td> <?php echo $data['kk']; ?> </td>
											<td> <?php echo $data['pbb']; ?> </td>
											<td> <?php echo $data['nama_pembeli']; ?> </td>
											<td> <?php echo $data['ktp_pembeli']; ?> </td>
											<td>
												<a href="?page=akta&aksi=ubah&id=<?php echo $data['no_akta']; ?>" class="btn btn-info">Ubah</a>
												<a onclick="return confirm('Anda yakin?')" href="?page=akta&aksi=hapus&id=<?php echo $data['no_akta']; ?>" class="btn btn-danger">Hapus</a>

											</td>
										</tr>
										
										<?php } ?>

                                    </tbody>

									</div>
						</div>
					</div>
				</div>
	</div>