<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>
<div class="container">
	<div class="col-md-12">
		<center><h2>Selamat Datang diweb Pendaftaran Calon Wartawan</h2>
			<p>Silahkan Isi Biodata Anda Dengan Lengkap dan valid</p>
			<?php echo $this->session->flashdata('msg'); ?>

		</center>
		<div class="col-md-12">
			<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Status Seleksi Pendaftaran</h3>
  </div>
  
  <div class="panel-body">
    <?php  if ($status['status']==1) { ?>
      <center><h3>Jadwal Ujian</h3></center>
    	<table class="table table-bordered">
       <thead>
         <tr>
           <th>Tanggal Ujian</th>
            <th>Keterangan</th>
         </tr>
       </thead> 
       <tbody>
        <?php foreach ($jadwal as $tampil) {
          # code...
        ?>
         <tr>
           <td><?=$tampil->tanggal_ujian?></td>
            <td><?=$tampil->keterangan?></td>
         </tr>
       <?php } ?>
       </tbody>
      </table>
 <?php  }else if ($status['status']==0) {
    	echo "Masih dalam Tahap Validasi oleh Staff";
    }else if($status['status']==7 && $status['notifikasi']==1){
      echo "<h3>Selamat!!!</h3><p>Anda dinyatakan Diterima Sebagai Wartawan</p>";

    }else if($status['status']==8 && $status['notifikasi']==1){
      echo "<h3>Mohon Maff</h3><p>Anda dinyatakan tidak diterima Sebagai Wartawan</p>";

    } else if($status['status']==""){
    	echo "silahkan isi Biodata Dg lengkap";

    } ?>
  </div>
</div>
		</div>
	</div>
</div>
</body>
</html>