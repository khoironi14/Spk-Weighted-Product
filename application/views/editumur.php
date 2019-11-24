<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="container">
	<div class="col-md-6">
		<form action="<?php echo base_url('Umur/edit_umur') ?>" method="post">
			<input type="hidden" name="id_umur" value="<?=$edit['id_umur']?>">
			<label>Umur</label>
			<input type="text" name="umur" value="<?=$edit['umur']?>" class="form-control">
			<label>Bobot Nilai</label>
			<?php $array=array(1,2,3,4,5); ?>
			<select class="form-control" name="nilai">

				<?php foreach ($array as $value) {
					# code...
				 ?>
				<option value="<?=$value?>" <?php if ($edit['bobot']==$value) {
					echo "selected";
				} ?>><?=$value?></option>
			<?php }?>
			</select>
			<label>Keterangan</label>
			<input type="text" name="keterangan" class="form-control" value="<?=$edit['keterangan']?>">
			<button class="btn btn-success" name="simpan">Simpan</button><button type="button" class="btn btn-danger" onclick="history.back(-1)">Batal</button>
		</form>
	</div>
</div>
</body>
</html>