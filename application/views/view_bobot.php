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
					<th>Simbol</th>
					<th>Kriteria</th>
					<th>Bobot</th>
					<th>Perbaikan Bobot</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php $j=0; $h=0; $no=1; foreach ($bobot as $tampil) {
					$j +=$tampil->bobot;
				 ?>
				<tr>
					<td><?=$no++?></td>
					<td><?=$tampil->simbol?></td>
					<td><?=$tampil->kriteria?></td>
					<td><?=$tampil->bobot?></td>
					<td><?php $h=$tampil->bobot / $jumlah['jumlah']; echo $h; ?></td>
					<td><a href="<?php echo base_url('Bobot/edit_bobot/'.$tampil->simbol.'') ?>" class="btn btn-primary">Edit</a></td>
					
				</tr>
			<?php }?>
			</tbody>
		</table>
		
	</div>

</div>
</body>
</html>