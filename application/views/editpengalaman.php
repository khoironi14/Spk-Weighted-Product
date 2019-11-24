<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="container">
	<div class="col-md-7">
		<form action="<?php echo base_url('Pengalaman/edit_pengalaman') ?>" method="post">
			<input type="hidden" name="id_kerja" value="<?=$edit['id_kerja']?>">
			<label>Pengalaman Kerja</label>
			<input type="text" name="pengalaman" class="form-control" value="<?=$edit['lama_kerja']?>" required="">
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
			<input type="text" name="keterangan" value=<?=$edit['keterangan']?> class="form-control" >
			<button class="btn btn-info" name="simpan">Simpan</button><button type="button" class="btn btn-danger" onclick="history.back(-1)">Batal</button>
		</form>
	</div>
</div>
</body>
</html>