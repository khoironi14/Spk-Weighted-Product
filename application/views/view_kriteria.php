<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	
	<div class="container">
		<div class="row">
		<div class="col-md-12">
			<center><h3>Data Calon Wartawan</h3></center>
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama Wartawan</th>
						<th>Bisa Kerja Dalam Tekanan</th>
						<th>Wawasan</th>
						<th>Kemampuan Menulis</th>
						<th>Kemampuan Berbicara</th>
						<th>Pengalaman Kerja</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php $no=1; foreach ($kriteria as $tampil) {
						
					?>
					<tr>
						<td><?=$no++?></td>
						<td><?=$tampil->nama_wartawan?></td>
						<td><?=$tampil->c1?></td>
						<td><?=$tampil->c2?></td>
						<td><?=$tampil->c3?></td>
						<td><?=$tampil->c4?></td>
						<td><?=$tampil->c5?></td>
						<td><a href="<?php echo base_url('Kriteria/input_nilai/'.$tampil->id_wartawan.'') ?>" class="btn btn-primary">
                Input Nilai</a><a href="<?php echo base_url('Kriteria/edit_nilai/'.$tampil->id_wartawan.'') ?>" class="btn btn-danger">Edit</a></td>
					</tr>
				<?php } ?>
				</tbody>
			</table>
		</div>
		<div class="col-md-12">
			<center><h3>Data Kecocokan Setiap Alternatif Terhadap Kriteria</h3></center>
			<table class="table table-bordered">
				<thead><tr>
				<th>Nama Wartawan</th>
						<th>Bisa Kerja Dalam Tekanan</th>
						<th>Wawasan</th>
						<th>Kemampuan Menulis</th>
						<th>Kemampuan Berbicara</th>
						<th>Pengalaman Kerja</th>
						<th>Si</th>
						<th>Skor Akhir</th>
						<!--<th>Action</th>-->
						</tr></thead>
						<tbody>
							<?php $j=0; $hasil1=0; foreach ($kecocokan as $tampil) {
								
								$j +=$tampil->Vs;
								//echo $j;
							 ?>
							<tr>
								<td><?=$tampil->nama_wartawan?></td>
								<td><?=$tampil->c1?></td>
								<td><?=$tampil->c2?></td>
								<td><?=$tampil->c3?></td>
								<td><?=$tampil->c4?></td>
								<td><?=$tampil->c5?></td>
								<td><?php echo $aku=$tampil->Vs?></td>
								<td><?php $hasil1=$tampil->Vs / $hasil['jumlah']; echo $hasil1; ?></td>
							<!--	<td><a href="<?php echo base_url('Kriteria/input_bobot/'.$tampil->id_wartawan.'') ?>" class="btn btn-primary">Input</a></td>-->
							</tr>
						<?php }?>
						</tbody>
			</table>
		</div>
		</div>
	</div>

</body>
</html>