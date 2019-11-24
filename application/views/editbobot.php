<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="container">
	<div class="col-md-6">
		<form action="<?php echo base_url('Bobot/edit_bobot') ?>" method="post">
			<label>Simbol</label>
			<input type="text" name="simbol" value="<?=$edit['simbol']?>" class="form-control" readonly>
			<label>Kriteria</label>
			<input type="text" name="kriteria" value="<?=$edit['kriteria']?>" class="form-control">
			<label>Bobot</label>
			<input type="text" name="bobot" value="<?=$edit['bobot']?>" class="form-control">
			
			<button class="btn btn-info" name="simpan">Simpan</button>
		</form>
	</div>
</div>
</body>
</html>