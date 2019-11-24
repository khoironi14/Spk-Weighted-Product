<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="container">
	<div class="col-md-6">
		<form action="<?php echo base_url('staf/Staff/ganti_fotoku') ?>" method="post" enctype="multipart/form-data">
	<label>Foto</label>
	<input type="file" name="foto" class="form-control" required="">
	<input type="hidden" name="id" value="<?=$this->session->userdata('id')?>">
	<button name="simpan" class="btn btn-warning">Simpan</button>
	</form>
</div>
</div>
</body>
</html>