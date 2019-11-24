<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="container">
		<div class="col-md-6">
			<?php echo $this->session->flashdata('msg'); ?>
			<?php if ($this->session->userdata('status')=='login') {
				# code...
			 ?>
			 <?php $tgl=date('Y-m-d');  if ($tgl >= $periode['periode_akhir']) {
			 	echo '<div class="alert alert-danger" role="alert">Periode Pendaftaran Telah ditutup</div>';
			 }else if($tgl <= $periode['periode']){

			 	echo '<div class="alert alert-danger" role="alert">Periode Pendaftaran Belum dibuka</div>';

			 }else{ ?>
			<h3>Silahkan Masukkan Biodata dengan benar</h3>
			<form action="<?php echo base_url('user/User/input_biodata') ?>" method="post" enctype="multipart/form-data">
				<label>Periode</label>
		<input type="text" name="periode" class="form-control" value="<?=$periode['periode']?> Sampai <?=$periode['periode_akhir']?>" readonly>
				<label>Nama</label>
				<input type="text" name="nama" class="form-control" required="">
				<label>Alamat</label>
				<textarea name="alamat" class="form-control" required=""></textarea>
				<label>No Hp</label>
				<input type="text" name="no_hp" class="form-control">
				<label>Tanggal Lahir</label>
				<input type="date" name="tanggal_lahir" class="form-control" required="">
				<label>Jenis Kelamin</label>
				<select name="jenis_kelamin" class="form-control">
					<option value="L">Laki-Laki</option>
					<option value="P">Perempuan</option>
				</select>
				<label>Pendidikan</label>
				<select name="pendidikan" class="form-control">
					<?php foreach ($pendidikan as $tampil) {
						# code...
					 ?>
					<option value="<?=$tampil->id_pendidikan?>"><?=$tampil->nama_pendidikan?></option>
				<?php }?>
				</select>
				<label>Surat Lamaran</label>
				<input type="file" name="lamaran" class="form-control" required="">
				<label>KTP</label>
				<input type="file" name="ktp" class="form-control" required="">
				<label>Ijazah</label>
				<input type="file" name="ijazah" class="form-control">
				<label>Surat Dari dokter</label>
				<input type="file" name="surat" class="form-control" required="">
				<label>Foto 3x4</label>
				<input type="file" name="foto" class="form-control" required="">
				
				<input type="hidden" name="id_user" value="<?=$this->session->userdata('id_user')?>">
				<p>Semua Field harus berbentuk Jpg/Png, kecuali Surat Kesehatan/Surat Lamaran bisa PDF/Jpg</p>
				<button class="btn btn-info" name="simpan">Simpan</button><button type="button" class="btn btn-danger" onclick="history.back(-1)">Batal</button>
			</form>
		<?php }?>
		<?php }else{

			echo "<center><h2>Silahkan Melakukan Login Terlebih Dahulu</h2></center>";
		}?>
		</div>
	</div>

</body>
</html>