<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="container">
<div class="col-md-12">
	<?php echo $this->session->flashdata('msg'); ?>
	 <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Seleksi Wartawan</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
	<table class="table table-bordered" id="wartawan">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Wartawan</th>
				<th>Alamat</th>
				<th>No Hp</th>
				<th>Pendidikan</th>
				<th>Tanggal Lahir</th>
				
				<th>Jenis Kelamain</th>
				<th>Status</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php $no=1; foreach ($wartawan as  $tampil) {
				
			 ?>
			<tr>
				<td><?=$no++?></td>
				<td><?=$tampil->nama_wartawan?></td>
				<td><?=$tampil->alamat?></td>
				<td><?=$tampil->nohp?></td>
				<td><?=$tampil->pendidikan?></td>
				<td><?=$tampil->tgl_lahir?></td>
				<td><?=$tampil->jenis_kelamin?></td>
				<td><?php if ($tampil->status==0) {
					echo "Belum divalidasi Staff";
				}else if($tampil->status==1){

					echo "Data Telah dikirim ke Admin";
				}else if($tampil->status==7){

					echo "Wartawan Telah Lulus Seleksi";
				}else if($tampil->status==8){

					echo "Wartawan Gagal Seleksi";
				}else{

					echo "Data Ditolak";
				} ?></td>
				
				

				<td>

					<a href="<?php echo base_url('staf/Staff/detail_wartawan/'.$tampil->id_wartawan.'') ?>" class="btn btn-primary">Detail</a><?php if ($tampil->status !=7 )  {
						# code...
					 ?><a href="<?php echo base_url('staf/Staff/edit_wartawan/'.$tampil->id_wartawan.'') ?>" class="btn btn-warning">Edit</a> <a href="<?php echo base_url('staf/Staff/hapus_wartawan/'.$tampil->id_wartawan.'') ?>" class="btn btn-danger">Hapus</a><?php }?></td>
			</tr>
		<?php }?>
		</tbody>
	</table>
<!--<a href="<?php echo base_url('staf/Staff/add_wartawan') ?>" class="btn btn-info">Tambah Wartawan</a>-->
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
            }); 
            }); 
</script>