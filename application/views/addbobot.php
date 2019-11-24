<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="container">
	<div class="col-md-6">
		<form action="<?php echo base_url('Bobot/add_bobot') ?>" method="post">
			<label>Kriteria</label>
			<input type="text" name="kriteria" class="form-control" required="">
			<label>Bobot</label>
			<input type="text" name="bobot" class="form-control" required="">
			<label>Keterangan</label>
			<input type="text" name="keterangan" class="form-control">
			<button class="btn btn-info" name="simpan"> Simpan</button><button type="button" class="btn btn-danger" onclick="history.back(-1)">Batal</button>
		</form>
	</div>
</div>
</body>
</html>