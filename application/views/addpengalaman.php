<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="container">
	<div class="col-md-7">
		<form action="<?php echo base_url('Pengalaman/add_pengalaman') ?>" method="post">
			<label>Pengalaman Kerja</label>
			<input type="text" name="pengalaman" class="form-control" required="">
			<label>Bobot Nilai</label>
			<?php $array=array(1,2,3,4,5); ?>
			<select class="form-control" name="nilai">

				<?php foreach ($array as $value) {
					# code...
				 ?>
				<option value="<?=$value?>"><?=$value?></option>
			<?php }?>
			</select>
			
			<label>Keterangan</label>
			<input type="text" name="keterangan" class="form-control" >
			<button class="btn btn-info" name="simpan">Simpan</button><button type="button" class="btn btn-danger" onclick="history.back(-1)">Batal</button>
		</form>
	</div>
</div>
</body>
</html>