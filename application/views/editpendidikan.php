<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="container">
	<div class="col-md-4">
		<center><h3>Form Bobot Tingakt Pendidikan</h3></center>
		<form action="<?php echo base_url('Pendidikan/edit_pendidikan') ?>" method="post">
			<input type="hidden" name="id" value="<?=$edit['id_pendidikan']?>">
			<label>Tingkat Pendidikan</label>
			<input type="text" name="pendidikan" value="<?=$edit['nama_pendidikan']?>" class="form-control" required="">
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
			<input type="text" name="keterangan" class="form-control" >
			<button name="simpan" class="btn btn-success">
                <i class="fa fa-save" ></i>Simpan</button><button type="button" class="btn btn-danger" onclick="history.back(-1)">Batal</button>
		</form>
	</div>
</div>
</body>
</html>