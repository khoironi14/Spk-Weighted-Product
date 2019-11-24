<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="container">
	<div class="col-md-6">
		<form action="<?php echo base_url('Periode/add_periode') ?>" method="post">
			<label>Periode Awal</label>
			<input type="date" name="periode" class="form-control">
			<label>Periode Akhir</label>
			<input type="date" name="periode_akhir" class="form-control">
			
			<button class="btn btn-info" name="simpan">Simpan</button>
		</form>
	</div>
</div>
</body>
</html>