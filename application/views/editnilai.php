<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="container">
		<div class="col-md-6">
			<center><h3>Form Penilaian</h3></center>
			<form action="<?php echo base_url('Kriteria/edit_nilai') ?>" method="post">
				<input type="hidden" name="id_wartawan" value="<?=$edit['id_wartawan']?>">
				<label>Kerja Dalam Tekanan(C1)</label>
				<input type="text" name="kerja" id="kerja" value="<?=$edit['c1']?>" class="form-control">
		<input type="hidden" name="konversi_kerja" id="k">
				<label>Wawasan(C2)</label>
				<input type="text" name="wawasan" value="<?=$edit['c2']?>" id="wawasan" class="form-control" required="">
				<input type="hidden" name="konversi_wawasan" id="w">
				<label>Kemampuan Menulis(C3)</label>
				<input type="text" name="menulis" id="menulis" value="<?=$edit['c3']?>" class="form-control">
				<input type="hidden" name="konversi_menulis" id="m">
				<label>Kemampuan Berbicara(C4)</label>
				<input type="hidden" name="konversi_berbicara" id="b">
				<input type="text" name="berbicara" id="berbicara" value="<?=$edit['c4']?>" class="form-control">
				
				<input type="hidden" name="id" value="<?=$this->uri->segment(3)?>">
				
			<label>Pengalaman Kerja</label>
		<!--<input type="text" class="form-control" id="pengalaman_kerja" name="pengalaman_kerja">-->
		<?php $array=array(1,2,3,4,5) ?>
		<select name="konversi_pengalaman" id="pengalaman_kerja" class="form-control">
				<option>Pilih</option>
				<?php foreach ($array as  $value) {
					
				 ?>
				<option value="<?=$value?>" <?php if ($edit['c5']==$value) {
					echo "selected";
				} ?>><?=$value?></option>
			<?php }?>
			</select>
		<input type="hidden" name="konversi_pengalaman" id="pk">
		<input type="text" name="vs" id="vs">

				<button class="btn btn-success" name="simpan">Simpan</button><button type="button" class="btn btn-danger" onclick="history.back(-1)">Batal</button>
			</form>
		</div>
	</div>

</body>
</html>
<script type="text/javascript">
	$(document).ready(function(){


var wawasan=$('#wawasan').val();
if (wawasan<=30) {
	$('#w').val(1);
}else if(wawasan<=49){
$('#w').val(2);

}else if(wawasan<=69){
$('#w').val(3);

}else if(wawasan<=79){
$('#w').val(4);

}else if(wawasan>=80){
$('#w').val(5);

}



var menulis=$('#menulis').val();
if (menulis<=30) {
	$('#m').val(1);
}else if(menulis<=49){
$('#m').val(2);

}else if(menulis<=69){
$('#m').val(3);

}else if(menulis<=79){
$('#m').val(4);

}else if(menulis>=80){
$('#m').val(5);

}


var berbicara=$('#berbicara').val();
if (berbicara<=30) {
	$('#b').val(1);
}else if(berbicara<=49){
$('#b').val(2);

}else if(berbicara<=69){
$('#b').val(3);

}else if(berbicara<=79){
$('#b').val(4);

}else if(berbicara>=80){
$('#b').val(5);

}





var kerja=$('#kerja').val();
if (kerja<=30) {
	$('#k').val(1);
}else if(kerja<=49){
$('#k').val(2);

}else if(kerja<=69){
$('#k').val(3);

}else if(kerja<=79){
$('#k').val(4);

}else if(kerja>=80){
$('#k').val(5);

}




var pengalaman_kerja=$('#pengalaman_kerja').val();
$('#pk').val(pengalaman_kerja);
var hasil=0;
var wawasan=$('#w').val();
var menulis=$('#m').val();
var berbicara=$('#b').val();
var kerja=$('#k').val();
var pengalaman=$('#pk').val();
hasil=Math.pow(wawasan,0.15) * Math.pow(menulis,0.26) * Math.pow(berbicara,0.21) * Math.pow(kerja,0.26) * Math.pow(pengalaman,0.10);
//alert(hasil);
$('#vs').val(hasil);




	});
</script>
<script type="text/javascript">
	$(document).ready(function(){
$('#wawasan').keyup(function(){

var wawasan=$('#wawasan').val();
if (wawasan<=30) {
	$('#w').val(1);
}else if(wawasan<=49){
$('#w').val(2);

}else if(wawasan<=69){
$('#w').val(3);

}else if(wawasan<=79){
$('#w').val(4);

}else if(wawasan>=80){
$('#w').val(5);

}
var hasil=0;
var wawasan=$('#w').val();
var menulis=$('#m').val();
var berbicara=$('#b').val();
var kerja=$('#k').val();
var pengalaman=$('#pk').val();
hasil=Math.pow(wawasan,0.15) * Math.pow(menulis,0.26) * Math.pow(berbicara,0.21) * Math.pow(kerja,0.26) * Math.pow(pengalaman,0.10);
//alert(hasil);
$('#vs').val(hasil);
}),
$('#menulis').keyup(function(){
var menulis=$('#menulis').val();
if (menulis<=30) {
	$('#m').val(1);
}else if(menulis<=49){
$('#m').val(2);

}else if(menulis<=69){
$('#m').val(3);

}else if(menulis<=79){
$('#m').val(4);

}else if(menulis>=80){
$('#m').val(5);

}
var hasil=0;
var wawasan=$('#w').val();
var menulis=$('#m').val();
var berbicara=$('#b').val();
var kerja=$('#k').val();
var pengalaman=$('#pk').val();
hasil=Math.pow(wawasan,0.15) * Math.pow(menulis,0.26) * Math.pow(berbicara,0.21) * Math.pow(kerja,0.26) * Math.pow(pengalaman,0.10);
//alert(hasil);
$('#vs').val(hasil);
}),
$('#berbicara').keyup(function(){
var berbicara=$('#berbicara').val();
if (berbicara<=30) {
	$('#b').val(1);
}else if(berbicara<=49){
$('#b').val(2);

}else if(berbicara<=69){
$('#b').val(3);

}else if(berbicara<=79){
$('#b').val(4);

}else if(berbicara>=80){
$('#b').val(5);

}
var hasil=0;
var wawasan=$('#w').val();
var menulis=$('#m').val();
var berbicara=$('#b').val();
var kerja=$('#k').val();
var pengalaman=$('#pk').val();
hasil=Math.pow(wawasan,0.15) * Math.pow(menulis,0.26) * Math.pow(berbicara,0.21) * Math.pow(kerja,0.26) * Math.pow(pengalaman,0.10);
//alert(hasil);
$('#vs').val(hasil);

}),
$('#kerja').keyup(function(){

var kerja=$('#kerja').val();
if (kerja<=30) {
	$('#k').val(1);
}else if(kerja<=49){
$('#k').val(2);

}else if(kerja<=69){
$('#k').val(3);

}else if(kerja<=79){
$('#k').val(4);

}else if(kerja>=80){
$('#k').val(5);

}
var hasil=0;
var wawasan=$('#w').val();
var menulis=$('#m').val();
var berbicara=$('#b').val();
var kerja=$('#k').val();
var pengalaman=$('#pk').val();
hasil=Math.pow(wawasan,0.15) * Math.pow(menulis,0.26) * Math.pow(berbicara,0.21) * Math.pow(kerja,0.26) * Math.pow(pengalaman,0.10);
//alert(hasil);
$('#vs').val(hasil);
}),
$('#pengalaman_kerja').change(function(){

var pengalaman_kerja=$('#pengalaman_kerja').val();
$('#pk').val(pengalaman_kerja);
var hasil=0;
var wawasan=$('#w').val();
var menulis=$('#m').val();
var berbicara=$('#b').val();
var kerja=$('#k').val();
var pengalaman=$('#pk').val();
hasil=Math.pow(wawasan,0.15) * Math.pow(menulis,0.26) * Math.pow(berbicara,0.21) * Math.pow(kerja,0.26) * Math.pow(pengalaman,0.10);
//alert(hasil);
$('#vs').val(hasil);

});


	});
</script>