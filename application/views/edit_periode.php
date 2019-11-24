<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="container">
	<div class="col-md-6">
		<form action="<?php echo base_url('Periode/edit_periode') ?>" method="post">
			<input type="hidden" name="id" value="<?=$edit['id_periode']?>" >
			<label>Periode Awal</label>
			<input type="date" name="periode" value="<?=$edit['periode']?>" class="form-control">
			<label>Periode Akhir</label>

			<input type="date" name="periode_akhir" value="<?=$edit['periode_akhir']?>" class="form-control">
			<button class="btn btn-info" name="simpan">Simpan</button>
		</form>
	</div>
</div>
</body>
</html>