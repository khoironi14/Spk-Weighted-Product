<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="conatiner">
		<div class="col-md-6">
			<button class="btn btn-block btn btn-success" id="btnnilai">Data Nilai</button>
			<table class="table table-bordered" id="nilai" style="display:none;">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama Pelamar</th>
						<th>C1</th>
						<th>C2</th>
						<th>C3</th>
						<th>C4</th>
						<th>C5</th>
					</tr>
				</thead>
				<tbody>
					<?php $no=1; foreach ($nilai as $tampil) {
						# code...
					 ?>
					<tr>
						<td><?=$no++?></td>
						<td><?=$tampil->nama_wartawan?></td>
						<td><?=$tampil->c1?></td>
						<td><?=$tampil->c2?></td>
						<td><?=$tampil->c3?></td>
						<td><?=$tampil->c4?></td>
						<td><?=$tampil->c5?></td>
					</tr>
				<?php }?>
				</tbody>
			</table>
			<button class="btn btn-block btn btn-primary" id="btnbobot">Data Bobot</button>
			<div id="bobot" style="display:none;">
				<center><h3>Data Bobot</h3></center>
			<table class="table table-borderedd" >
				<thead>
					<tr>
						<th>Simbol</th>
						<th>Kriteria</th>
						<th>Bobot</th>
						<!--<th>Perbaikan Bobot</th>-->
						
					</tr>
				</thead>
				<tbody>
					<?php $j=0; $h=0; $no=1; foreach ($bobot as $tampil) {
					$j +=$tampil->bobot;
				 ?>
				 <tr>
				 	<td><?=$tampil->simbol?></td>
					<td><?=$tampil->kriteria?></td>
					<td><?=$tampil->bobot?></td>
					<!--	<td><?php $h=$tampil->bobot / $jumlah['jumlah']; echo $h; ?></td>-->

					
						</tr>
				<?php }?>
				</tbody>
			</table>

			</div>
			<button class="btn btn-block btn btn-danger" id="si">Vecktor S</button>
			<div id="vector" style="display:none;">
				<table class="table table-bordered">
					<thead>
						<tr>
					<th>Nama Wartawan</th>
					<th>V(si)</th>
					</tr>
					</thead>
					<tbody>
						<?php  $j=0;  $hasil1=0; foreach ($si as  $tampil) {
							$j +=$tampil->Vs;
						 ?>
						<tr>
							<td><?=$tampil->nama_wartawan?></td>
							<td><?=$tampil->Vs?></td>
						</tr>
					<?php }?>
					</tbody>
				</table>
			</div>
		<button class="btn btn-info btn-block" id="akhir">Vi</button>
		<div id="nilaiakhir" style="display:none;">
			
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>Nama Wartawan</th>
						<th>Vi</th>
						<th>Rank</th>
					</tr>
				</thead>
				<tbody>
					<?php  $j=0; $rank=1;  $hasil1=0; foreach ($si as  $tampil) {
							$j +=$tampil->Vs;
						 ?>
					<tr>
						<td><?=$tampil->nama_wartawan?></td>
						<td><?php $hasil1=$tampil->Vs / $hasil['jumlah']; echo $hasil1; ?></td>
						<td><?=$rank++?></td>
					</tr>
				<?php }?>
				</tbody>
			</table>

		</div>
		<button class="btn btn-warning btn-block" id="hasilakhir">Hasil Akhir</button>
		<div id="hasilseleksi" style="display:none;">
			
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>Nama Wartawan</th>
						<th>Vi</th>
						<th>Rank</th>
						<th>Status</th>
					</tr>
				</thead>
				<tbody>
					<?php  $j=0; $rank=1;  $hasil1=0; foreach ($si as  $tampil) {
							$j +=$tampil->Vs;
						 ?>
					<tr>
						<td><?=$tampil->nama_wartawan?></td>
						<td><?php $hasil1=$tampil->Vs / $hasil['jumlah']; echo $hasil1; ?></td>
						<td><?=$rank++?></td>
						<td><?php if ($tampil->status==7) {
							echo "di Terima Sebagai Wartawan";
						}else if ($tampil->status==8) {
							echo "di Tolak Sebagai Wartawan";

						} ?></td>
					</tr>
				<?php }?>
				</tbody>
			</table>

		</div>
		</div>
	</div>

</body>
</html>
<script type="text/javascript">
	
	$(document).ready(function(){
$('#btnnilai').click(function(){

$('#nilai').toggle();

}),
$('#btnbobot').click(function(){

$('#bobot').toggle();

}),
$('#si').click(function(){

$('#vector').toggle();

}),
$('#akhir').click(function(){

$('#nilaiakhir').toggle();

}),
$('#hasilakhir').click(function(){

$('#hasilseleksi').toggle();

});

	});
</script>