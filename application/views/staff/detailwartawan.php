<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-6">
			<table class="table table-konseded">
				<tr>
					<td>Nama</td><td><?=$detail['nama_wartawan']?></td>
				</tr>
				<tr>
					<td>Alamat</td><td><?=$detail['alamat']?></td>
				</tr>
				<tr>
					<td>KTP</td><td><a href="<?php echo base_url('dokumen/'.$detail['ktp'].'') ?>"><img src="<?php echo base_url('dokumen/'.$detail['ktp'].'') ?>" width="50%"></a></td>
				</tr>
				<tr>
					<td>Ijazah</td><td><a href="<?php echo base_url('dokumen/'.$detail['ijazah'].'') ?>"><img src="<?php echo base_url('dokumen/'.$detail['ijazah'].'') ?>" width="50%"></a></td>
				</tr>
				<tr>
					<td>Surat Keterangan Dokter</td><td><a href="<?php echo base_url('dokumen/'.$detail['file'].'') ?>"><img src="<?php echo base_url('dokumen/'.$detail['file'].'') ?>" width="50%"></a></td>
				</tr>
				<tr>
					<td>Foto</td><td><a href="<?php echo base_url('dokumen/'.$detail['foto'].'') ?>"><img src="<?php echo base_url('dokumen/'.$detail['foto'].'') ?>" width="50%"></a></td>
				</tr>
				<tr><td>Surat Lamaran</td><td><a href="<?php echo base_url('dokumen/'.$detail['surat_lamaran'].'') ?>"><?=$detail['surat_lamaran']?></a></td></tr>
				<tr>
					<?php if ($detail['status'] !=7 )  {
						# code...
					 ?>
					<td><a href="<?php echo base_url('staf/Staff/acc/'.$detail['id_wartawan'].'') ?>" class="btn btn-success">Kirim Ke Admin</a></td><td><a href="<?php echo base_url('staf/Staff/tolak/'.$detail['id_wartawan'].'') ?>" class="btn btn-danger">Tolak</a><button type="button" class="btn btn-danger" onclick="history.back(-1)">Batal</button></td> <?php }?>
				</tr>
			</table>
		</div>
	</div>
</div>
</body>
</html>