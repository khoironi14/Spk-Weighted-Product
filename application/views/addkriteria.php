<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="container">
	<div class="col-md-6">
		<form action="<?php echo base_url("Kriteria/add_kriteria") ?>" method="post">
			<label>Pendidikan</label>
			<input type="text" name="pendidikan" class="form-control" required="">
			<label>Umur</label>
			<input type="text" name="umur" class="form-control" required="">
			<label>Pengalaman Kerja</label>
			<input type="text" name="pengalaman" class="form-control" required="">
			
			<button name="simpan" class="btn btn-info">Simpan</button><button type="button" class="btn btn-danger" onclick="history.back(-1)">Batal</button>
		</form>
	</div>
</div>
</body>
</html>