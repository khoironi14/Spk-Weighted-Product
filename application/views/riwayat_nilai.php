<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-3">
			<label>Periode</label>
			<select name="periode" id="periode" class="form-control">
				<option>--pilih--</option>
				<?php foreach ($periode as $tampil) {
					# code...
				 ?>
				<option value="<?=$tampil->periode?>"><?=$tampil->periode?></option>
			<?php }?>
			</select>
		</div>
	<div class="col-md-12">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama Wartawan</th>
						<th>Bisa Kerja Dalam Tekanan</th>
						<th>Wawasan</th>
						<th>Kemampuan Menulis</th>
						<th>Kemampuan Berbicara</th>
						<th>Pengalaman Kerja</th>
				</tr>
			</thead>
			<tbody id="nilai">
				<?php $no=1; foreach ($nilai as $tampil) {
					
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
	</div>

	<div class="col-md-3">
			<label>Periode</label>
			<select name="periode" id="periode2" class="form-control">
				<option>--pilih--</option>
				<?php foreach ($periode as $tampil) {
					# code...
				 ?>
				<option value="<?=$tampil->periode?>"><?=$tampil->periode?></option>
			<?php }?>
			</select>
		</div>
	<div class="col-md-12">
			<center><h3>Data Kecocokan Setiap Alternatif Terhadap Kriteria</h3></center>
			<table class="table table-bordered">
				<thead><tr>
				<th>Nama Wartawan</th>
						<th>Bisa Kerja Dalam Tekanan</th>
						<th>Wawasan</th>
						<th>Kemampuan Menulis</th>
						<th>Kemampuan Berbicara</th>
						<th>Pengalaman Kerja</th>
						<th>Si</th>
						<th>Skor Akhir</th>
						<!--<th>Action</th>-->
						</tr></thead>
						<tbody id="alternatif">
							<?php $j=0; $hasil1=0; foreach ($kecocokan as $tampil) {
								
								$j +=$tampil->Vs;
								//echo $j;
							 ?>
							<tr>
								<td><?=$tampil->nama_wartawan?></td>
								<td><?=$tampil->c1?></td>
								<td><?=$tampil->c2?></td>
								<td><?=$tampil->c3?></td>
								<td><?=$tampil->c4?></td>
								<td><?=$tampil->c5?></td>
								<td><?php echo $aku=$tampil->Vs?></td>
								<td><?php $hasil1=$tampil->Vs / $hasil['jumlah']; echo $hasil1; ?></td>
							<!--	<td><a href="<?php echo base_url('Kriteria/input_bobot/'.$tampil->id_wartawan.'') ?>" class="btn btn-primary">Input</a></td>-->
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
$('#periode').change(function(){
var periode=$('#periode').val();
//alert(periode);
$.ajax({
url:"<?php echo base_url('Riwayat_nilai/cek_periode') ?>",
type:"POST",
data:"periode=" + periode,
success:function(data){

$('#nilai').html(data);
}



});

}),
$('#periode2').change(function(){
var periode=$('#periode2').val();
//alert(periode2);
$.ajax({
url:"<?php echo base_url('Riwayat_nilai/cek_periode2') ?>",
type:"POST",
data:"periode=" + periode,
success:function(data){

$('#alternatif').html(data);
}



});

});


	});
</script>