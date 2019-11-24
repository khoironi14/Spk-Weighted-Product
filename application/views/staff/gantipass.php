<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="container">
	<?php echo $this->session->flashdata('msg'); ?>
	<div class="col-md-6">
		<form action="<?php echo base_url('staf/Staff/ganti_pass') ?>" method="post">
			<label>Password Lama</label>
			<input type="password" name="password_lama" class="form-control">
			<label>Password Baru</label>
			<input type="password" name="password_baru" class="form-control">
			<button name="simpan" class="btn btn-info">Simpan</button><button type="button" class="btn btn-danger" onclick="history.back(-1)">Batal</button>
		</form>
	</div>
</div>
</body>
</html>