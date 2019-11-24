<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
	table {
    border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
    border: 1px solid #ddd;
}

th, td {
    text-align: left;
    padding: 8px;
}
tr:nth-child(even){background-color: #f2f2f2}
	</style>
</head>
<body>
	<div class="container">
		<h2 align="center">Hasil Seleksi Calon Wartawan Koran Serui</h2>
			<table class="table" border="2">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>Nilai Akhir</th>
				<th>Status</th>
				
				

			</tr>
		</thead>
		<tbody>
							<?php $j=0; $hasil1=0; $no=1; foreach ($nilai as $tampil) {
								
								$j +=$tampil->Vs;
								//echo $j;
							 ?>
							<tr>
								<td><?=$no++?></td>
								<td><?=$tampil->nama_wartawan?></td>
								
								
								<td><?php $hasil1=$tampil->Vs / $hasil['jumlah']; echo $hasil1; ?></td>
								<td><?php if ($tampil->status==7) {
									echo "di Terima Sebagai Wartawan";
								}else if($tampil->status==8){

									echo "di Tolak Sebagai Wartawan";
								} ?> (<?php if ($tampil->notifikasi==1) {
									echo "Notifikasi Telah dikirim";
								} ?>)</td>
								
							</tr>
						<?php }?>
						</tbody>
	</table>
	<p align="right">TTD</p>
	<p align="right">Redaktur</p>
	</div>

</body>
</html>