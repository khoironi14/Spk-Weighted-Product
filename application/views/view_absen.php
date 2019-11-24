<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="container">
	<div class="col-md-12">

		<center>View Absensi</center>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Nama Wartawan</th>
					<th>Status</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody id="absen">
				
				<?php $no=1; foreach ($absen as $tampil) {
					
				 ?>
				<tr>
					<td><?=$tampil->nama_wartawan?></td>
					<td><?php if ($tampil->absen==1) {
						echo "Sudah Ujian";	
					}if ($tampil->absen==2) { echo "Tidak Hadir"; } ?></td>
					<td> <?php if ($tampil->absen==0) {
						# code...
					 ?> <a href="<?php echo base_url('Absensi/input_absensi/'.$tampil->id_wartawan.'') ?>" class="btn btn-info" id="hadir">Hadir</a><a href="<?php echo base_url('Absensi/tidak_hadir/'.$tampil->id_wartawan.'') ?>" class="btn btn-danger">Tidak Hadir</a> <?php }?></td>
				</tr>
			<?php }?>
			
			</tbody>
		</table>
		<a href="<?php echo base_url('Absensi/input_absensi/') ?>" class="btn btn-success">Input Absen</a>
	</div>
</div>
</body>
</html>
<script type="text/javascript">
	$(document).ready(function(){



	});
</script>