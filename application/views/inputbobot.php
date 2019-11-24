<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="container">
		<div class="col-md-6">
			<form action="<?php echo base_url('Kriteria/input_bobot') ?>" method="post">
					<label>Wawasan</label>
				<?php $array=array(1,2,3,4,5); ?>
			<select class="form-control" name="wawasan" id="wawasan">
				<?php foreach ($array as $value) {
					# code...
				 ?>
				<option value="<?=$value?>"><?=$value?></option>
			<?php }?>
			</select>
				<label>Kemampuan Menulis</label>
				<?php $array=array(1,2,3,4,5); ?>
			<select class="form-control" name="menulis" id="menulis">
				<?php foreach ($array as $value) {
					# code...
				 ?>
				<option value="<?=$value?>"><?=$value?></option>
			<?php }?>
			</select>
				<label>Kemampuan Berbicara</label>
				<?php $array=array(1,2,3,4,5); ?>
			<select class="form-control" name="berbicara" id="berbicara">
				<?php foreach ($array as $value) {
					# code...
				 ?>
				<option value="<?=$value?>"><?=$value?></option>
			<?php }?>
			</select>
				<input type="hidden" name="id" value="<?=$this->uri->segment(3)?>">
				<label>Kerja Dalam Tekanan</label>
				<?php $array=array(1,2,3,4,5); ?>
			<select class="form-control" name="kerja" id="kerja">
				<?php foreach ($array as $value) {
					
				 ?>
				<option value="<?=$value?>"><?=$value?></option>
			<?php }?>
			</select>
			<label>Pengalaman Kerja</label>
			<label>Pengalaman Kerja</label>
		<select class="form-control" name="pengalaman_kerja" id="pengalaman">

			<?php foreach ($array as $value) {
					
				 ?>
				<option value="<?=$value?>"><?=$value?></option>
			<?php }?>
		</select>
		<input type="hidden" name="vs" id="vs">
		<button class="btn btn-info" name="simpan_bobot">Simpan</button>
			</form>
		</div>
	</div>

</body>
</html>
<script type="text/javascript">
	$(document).ready(function(){
$('#pengalaman').change(function(){
var hasil=0;
var wawasan=$('#wawasan').val();
var menulis=$('#menulis').val();
var berbicara=$('#berbicara').val();
var kerja=$('#kerja').val();
var pengalaman=$('#pengalaman').val();
hasil=Math.pow(wawasan,0.15) * Math.pow(menulis,0.26) * Math.pow(berbicara,0.21) * Math.pow(kerja,0.26) * Math.pow(pengalaman,0.10);
//alert(hasil);
$('#vs').val(hasil);

});


	});
</script>
