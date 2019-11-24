<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="container">
	<div class="col-md-6">
		<form action="<?php echo base_url('Jadwal/add_jadwal')?>" method="post">
			<label>Tanggal Ujian</label>
			<input type="date" name="tanggal_ujian" class="form-control">
			<label>Keterangan</label>
			<input type="text" name="keterangan" class="form-control">
			<button class="btn btn-info" name="simpan">Simpan</button>
		</form>
	</div>
</div>
</body>
</html>