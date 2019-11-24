<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="container">
	<div class="col-md-6">
		<form action="<?php echo base_url('Jadwal/edit_jadwal')?>" method="post">
			<input type="hidden" name="id" value="<?=$edit['id_jadwal']?>">
			<label>Tanggal Ujian</label>
			<input type="date" name="tanggal_ujian" value="<?=$edit['tanggal_ujian']?>" class="form-control">
			<label>Keterangan</label>
			<input type="text" name="keterangan" value="<?=$edit['keterangan']?>" class="form-control">
			<button class="btn btn-info" name="simpan">Simpan</button>
		</form>
	</div>
</div>
</body>
</html>