<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="container">
	<div class="col-md-6">
		<form action="<?php echo base_url('Umur/add_umur') ?>" method="post">
			<label>Umur</label>
			<input type="text" name="umur" class="form-control">
			<label>Bobot Nilai</label>
			<?php $array=array(1,2,3,4,5); ?>
			<select class="form-control" name="nilai">

				<?php foreach ($array as $value) {
					# code...
				 ?>
				<option value="<?=$value?>" ><?=$value?></option>
			<?php }?>
			</select>
			<label>Keterangan</label>
			<input type="text" name="keterangan" class="form-control" >
			<button class="btn btn-success" name="simpan">Simpan</button><button type="button" class="btn btn-danger" onclick="history.back(-1)">Batal</button>
		</form>
	</div>
</div>
</body>
</html>