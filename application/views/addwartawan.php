<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="container">
<div class="col-md-6">
	<h3>Form Pendaftaran Wartawan</h3>
	<form action="<?php echo base_url('Wartawan/add_wartawan') ?>" method="post">
		<label>Nama Wartawan</label>
		<input type="text" name="wartawan" class="form-control" required="">
		<label>Tanggal Lahir</label>
		<input type="date" name="tanggal_lahir" class="form-control" required="">
		<label>No Hp</label>
		<input type="text" name="no_hp" class="form-control">
		<label>Alamat</label>
		<input type="text" name="alamat" class="form-control">
		<label>Pendidikan</label>
		<select name="pendidikan" class="form-control">
			<?php foreach ($pendidikan as $tampil) {
				# code...
			 ?>
			<option value="<?=$tampil->id_pendidikan?>"><?=$tampil->nama_pendidikan?></option>
		<?php }?>
		</select>
		
			<label>Umur</label>
		<select name="umur" class="form-control">
			<?php foreach ($umur as $tampil1) {
				# code...
			 ?>
			<option value="<?=$tampil1->id_umur?>"><?=$tampil1->umur?></option>
		<?php }?>
		</select>
		<label>Kesehatan</label>
		<?php $array=array(1,2,3,4,5); ?>
			<select class="form-control" name="kesehatan">
				<?php foreach ($array as $value) {
					# code...
				 ?>
				<option value="<?=$value?>"><?=$value?></option>
			<?php }?>
			</select>
		<button class="btn btn-info" name="simpan">Simpan</button><button type="button" class="btn btn-danger" onclick="history.back(-1)">Batal</button>
	</form>
</div>
</div>
</body>
</html>