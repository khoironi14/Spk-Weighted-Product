<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="container">
		<div class="col-md-6">
			<?php echo $this->session->flashdata('msg'); ?>
			<form action="<?php echo base_url('Welcome/ganti_pass') ?>" method="post">
				<label>Password Lama</label>
				<input type="password" name="password_lama" class="form-control" required="">
				<label>Password Baru</label>
				<input type="password" name="password_baru" class="form-control">
				<label>Konfirmasi</label>
				<input type="password" name="Konfirmasi" class="form-control" required="" >
				<button name="simpan" class="btn btn-info">Simpan</button><button type="button" class="btn btn-danger" onclick="history.back(-1)">Batal</button>
			</form>
		</div>
	</div>

</body>
</html>