<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="container">
	<div class="col-md-6">
		<table class="table table-konseded">
			<tr>
				<td>Foto</td><td><img width="50%" src="<?php echo base_url('profil/'.$profil['foto'].'') ?>"><td><form action="<?php echo base_url('user/User/ganti_foto') ?>" method="post" enctype="multipart/form-data"><label>Ganti Foto</label><input type="file" name="foto"><input type="hidden" name="id" value="<?=$this->session->userdata('id')?>"><button class="btn btn-danger">Simpan</button></form></td></td>
			</tr>
			<tr>
				<td>Nama Lengkap</td><td><?=$profil['nama_lengkap']?></td>

			</tr>
			<tr>
				<td>Email</td><td><?=$profil['email']?></td>
			</tr>
			<tr>
				<td>Username</td><td><?=$profil['username']?></td>
			</tr>
		</table>
		<button class="btn btn-danger" id="ganti">Ganti Password</button>
	</div>
	<div class="col-md-6">
		<?php echo $this->session->flashdata('msg'); ?>
		<form action="<?php echo base_url('user/User/ganti_pass') ?>" method="post" id="form" style="display:none;">
			<label>Password Lama</label>
				<input type="password" name="password_lama" class="form-control" required="">
				<label>Password Baru</label>
				<input type="password" name="password_baru" class="form-control">
				<label>Konfirmasi</label>
				<input type="password" name="Konfirmasi" class="form-control" required="" >
				<button name="simpan" class="btn btn-info">Simpan</button>
		</form>
	</div>
</div>
</body>
</html>
<script type="text/javascript">
	$(document).ready(function(){
$('#ganti').click(function(){

$('#form').show();

});


	});
</script>