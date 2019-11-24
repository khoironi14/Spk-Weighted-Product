<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="container">
<div class="col-md-12">
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Periode Awal</th>
				<th>Periode Akhir</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php $no=1; foreach ($periode as $tampil) {
				
			 ?>
			<tr>
				<td><?=$no++?></td>
				<td><?=$tampil->periode?></td>
				<td><?=$tampil->periode_akhir?></td>
				<td><a href="<?php echo base_url('Periode/edit_periode/'.$tampil->id_periode.'') ?>" class="btn btn-info">Edit</a> <a href="<?php echo base_url('Periode/hapus_periode/'.$tampil->id_periode.'') ?>" class="btn btn-danger">Hapus</a></td>
			</tr>
		<?php }?>
		</tbody>
	</table>
	<a href="<?php echo base_url('Periode/add_periode') ?>" class="btn btn-success">Tambah Periode</a>
</div>
</div>
</body>
</html>