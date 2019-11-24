<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="container">
<div class="col-md-12">
	 <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Seleksi Wartawan</h3>
              <div class="col-md-3">
              <label>Periode</label>
              <select name="periode" id="periode" class="form-control">
              	<option>--Option--</option>
              	<?php foreach ($periode as $tampil) {
              		# code...
              	 ?>
              	<option value="<?=$tampil->periode?>"><?=$tampil->periode?></option>
              <?php }?>
              </select></div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            	<div class="table table-responsive">
	<table class="table table-bordered" id="wartawan">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Wartawan</th>
				<th>Alamat</th>
				<th>No Hp</th>
				<th>Pendidikan</th>
				<th>Tanggal Lahir</th>
				<th>Surat Kesehatan</th>
				<th>KTP</th>
				<th>Ijazah</th>
				<th>Foto</th>
				<th>Surat Lamaran</th>
				
				
				<!--<th>Action</th>-->
			</tr>
		</thead>
		<tbody id="wa">
			<?php $no=1; foreach ($wartawan as  $tampil) {
				
			 ?>
			<tr>
				<td><?=$no++?></td>
				<td><?=$tampil->nama_wartawan?></td>
				<td><?=$tampil->alamat?></td>
				<td><?=$tampil->nohp?></td>
				<td><?=$tampil->nama_pendidikan?></td>
				<td width="10%"><?=$tampil->tgl_lahir?></td>
				<td><a href="<?php echo base_url('dokumen/'.$tampil->file.'') ?>"><img width="25%" src="<?php echo base_url('dokumen/'.$tampil->file.'') ?>"></a></td>
				<td><a href="<?php echo base_url('dokumen/'.$tampil->ktp.'') ?>"><img width="20%" src="<?php echo base_url('dokumen/'.$tampil->ktp.'') ?>"></a></td>
				<td><a href="<?php echo base_url('dokumen/'.$tampil->ijazah.'') ?>"><img width="20%" src="<?php echo base_url('dokumen/'.$tampil->ijazah.'') ?>"></a></td>
				<td><a href="<?php echo base_url('dokumen/'.$tampil->foto.'') ?>"><img width="20%" src="<?php echo base_url('dokumen/'.$tampil->foto.'') ?>"></a></td>
				<td><a href="<?php echo base_url('dokumen/'.$tampil->surat_lamaran.'') ?>"><?=$tampil->surat_lamaran?></a></td>
				
				

			<!--	<td width="38%"><a href="<?php echo base_url('Wartawan/input_nilai/'.$tampil->id_wartawan.'') ?>" class="btn btn-primary">
                Input Nilai</a><a href="<?php echo base_url('Wartawan/edit_wartawan/'.$tampil->id_wartawan.'') ?>" class="btn btn-warning">
                Edit</a> <a href="<?php echo base_url('Wartawan/hapus_wartawan/'.$tampil->id_wartawan.'') ?>" class="btn btn-danger">
                Hapus</a></td>-->
			</tr>
		<?php }?>
		</tbody>
	</table>
	</div>
<!--<a href="<?php echo base_url('Wartawan/add_wartawan') ?>" class="btn btn-info">Tambah Wartawan</a>-->
</div>
</div>
</div>
</div>
</body>
</html>
<script src="<?php echo base_url('assets/bower_components/datatables.net/js/jquery.dataTables.min.js')?>"></script>
<script src="<?php echo base_url('assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')?>"></script>
<script type="text/javascript">
	$(document).ready(function(){
	var table ;

    table = $('#wartawan').dataTable({
                rowsGroup: [
                    2    
                ],
                bProcessing: true,
                sAjaxSource: $('#wartawan').data('url')
            }),
    $('#periode').change(function(){
var periode=$('#periode').val();
$.ajax({
type:"POST",
url:"<?php echo base_url('Wartawan/cek_periode') ?>",
data:"periode=" + periode,
success:function(data){
	//alert(data);
$('#wa').html(data);

}


});


    });
            }); 
</script>