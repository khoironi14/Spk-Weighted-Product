<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="col-md-6">
	<form action="<?php echo base_url('Wartawan/edit_wartawan') ?>" method="post">
		<input type="hidden" name="id" value="<?=$edit['id_wartawan']?>">
		<label>Nama Wartawan</label>
		<input type="text" name="wartawan" value="<?=$edit['nama_wartawan']?>" class="form-control" required="">
		<label>Tanggal Lahir</label>
		<input type="date" name="tanggal_lahir" class="form-control" value="<?=$edit['tgl_lahir']?>" required="">
		<label>No Hp</label>
		<input type="text" name="no_hp" value="<?=$edit['nohp']?>" class="form-control">
		<label>Alamat</label>
		<input type="text" name="alamat" value="<?=$edit['alamat']?>" class="form-control">
		<label>Pendidikan</label>
		<select name="pendidikan" class="form-control">
			<?php foreach ($pendidikan as $tampil) {
				# code...
			 ?>
			<option value="<?=$tampil->id_pendidikan?>" <?php if ($tampil->id_pendidikan==$edit['pendidikan']) { echo "selected";
				
			} ?>><?=$tampil->nama_pendidikan?></option>
		<?php }?>
		</select>
		
		<label>Umur</label>
		<select name="umur" class="form-control">
			<?php foreach ($umur as $tampil1) {
				
			 ?>
			<option value="<?=$tampil1->id_umur?>" <?php if ($tampil1->id_umur==$edit['umur']) {
				echo "selected";
			} ?>><?=$tampil1->umur?></option>
		<?php }?>
		</select>
		<button class="btn btn-info" name="simpan">Simpan</button><button type="button" class="btn btn-danger" onclick="history.back(-1)">Batal</button>
	</form>
</div>
</body>
</html>