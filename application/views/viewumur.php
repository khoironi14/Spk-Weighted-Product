<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="container">
	<div class="col-md-8">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>No</th>
					<th>Umur</th>
					<th>Bobot</th>
					<th>Keterangan</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php $no=1; foreach ($umur as $tampil) {
					# code...
				 ?>
				<tr>
					<td><?=$no++?></td>
					<td><?=$tampil->umur?></td>
					<td><?=$tampil->bobot?></td>
					<td><?=$tampil->keterangan?></td>
					<td><a href="<?php echo base_url('Umur/edit_umur/'.$tampil->id_umur.'') ?>" class="btn btn-info">Edit</a><a href="<?php echo base_url('Umur/hapus/'.$tampil->id_umur.'') ?>" class="btn btn-danger">Hapus</a></td>
				</tr>
			<?php }?>
			</tbody>
		</table>
		<a href="<?php echo base_url('Umur/add_umur') ?>" class="btn btn-primary">Tambah Umur</a>
	</div>
</div>
</body>
</html>