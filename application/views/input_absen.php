<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="container">
	<div class="col-md-6">
		<form action="" method="post">
			<input type="hidden" name="nama" value="<?=$this->uri->segment(3)?>">
			<label>Tanggal Ujian</label>
			<input type="date" name="tanggal" class="form-control" required="">
			<button class="btn btn-info" name="simpan">Simpan</button>
		</form>
	</div>
</div>
</body>
</html>