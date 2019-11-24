<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="container">
	<div class="col-md-6">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>No</th>
					<th>Tanggal Ujian</th>
					<th>Keterangan</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php $no=1; foreach ($jadwal as  $tampil) {
					
				 ?>
				<tr>
					<td><?=$no++?></td>
					<td><?=$tampil->tanggal_ujian?></td>
					<td><?=$tampil->keterangan?></td>
					<td><a href="<?php echo base_url('Jadwal/edit_jadwal/'.$tampil->id_jadwal.'') ?>" class="btn btn-info">Edit</a> <a href="<?php echo base_url('Jadwal/hapus_jadwal/'.$tampil->id_jadwal.'') ?>" class="btn btn-danger">Hapus</a></td>

				</tr>
			<?php }?>
			</tbody>
		</table>
		<a class="btn btn-primary" href="<?php echo base_url('Jadwal/add_jadwal') ?>">Tambah Jadwal</a>
	</div>
</div>
</body>
</html>