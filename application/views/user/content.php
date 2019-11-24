<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="container">
    <?php echo $this->session->flashdata('msg'); ?>
		<div class="row">
			<div class="col-md-6">
				<div class="panel panel-default">
  <div class="panel-heading">Selamat Datang Di Website Koran Surya</div>
  <div class="panel-body">
   <p>Silahkan Daftar Akun dulu Untuk Melakukan Pendaftaran</p>
  </div>
</div>

<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Tata Cara Melakukan Registrasi Calon Wartawan</h3>
  </div>
  <div class="panel-body">
    Lakukan Registrasi Akun terlebih Dahulu, Lalu Login menggunakan username dan password pada saat daftar. Dan Pastikan Anda sudah Punya surat Keterangan kesehatan dari dokter, kemudian scan lalu diupload pada saat input biodata.
  </div>
</div>
<?php if ($this->session->userdata('status') !='login') {
  # code...
 ?>
				<!--panel-->
			</div>
			<div class="col-md-6">
				<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Pendaftaran Akun</h3>
  </div>
   <?php $tgl=date('Y-m-d');  if ($tgl >= $periode['periode_akhir']) {
        echo '<div class="alert alert-danger" role="alert">Periode Pendaftaran Telah ditutup</div>';
       }else if($tgl <= $periode['periode']){

        echo '<div class="alert alert-danger" role="alert">Periode Pendaftaran Belum dibuka</div>';

       }else{ ?>
  <div class="panel-body">
   <form action="<?php echo base_url('user/User/registrasi_akun') ?>" method="post">
    <label>Periode</label>
    <input type="text" name="periode" class="form-control" value="<?=$periode['periode']?> Sampai <?=$periode['periode_akhir']?>" readonly>
   	<label>Nama Lengkap</label>
   	<input type="text" name="nama_lengkap" class="form-control">
   	<label>Email</label>
   	<input type="email" name="email" class="form-control" required="">
    <label>Username</label>
    <input type="text" name="username" class="form-control" required="">
   	<label>Password</label>
   	<input type="password" name="password" class="form-control">
   	<label>Konfirmasi Password</label>
   	<input type="password" name="konfirmasi" class="form-control">
   	<button class="btn btn-info">Simpan</button>
   </form>
  </div>
<?php }?>
</div>
			</div>
    <?php }?>
		</div>
	</div>

</body>
</html>