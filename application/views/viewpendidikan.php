<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="container">
	<div class="col-md-9">
		<table class="table table-bordered" id="pendidikan">
			<thead>
				<tr>
					<th>No</th>
					<th>Tingkat Pendidikan</th>
					<th>Bobot</th>
					<th>Keterangan</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php $no=1; foreach ($pendidikan as $tampil) {
					# code...
				 ?>
				<tr>
					<td><?=$no++?></td>
					<td><?=$tampil->nama_pendidikan?></td>
					<td><?=$tampil->bobot?></td>
					<td><?=$tampil->keterangan?></td>
					<td> <a href="<?php echo base_url('Pendidikan/edit_pendidikan/'.$tampil->id_pendidikan.'') ?>" class="btn btn-app">
                <i class="fa fa-edit"></i> Edit
              </a><a href="<?php echo base_url('Pendidikan/hapus/'.$tampil->id_pendidikan.'') ?>" class="btn btn-app">
                <i class="fa fa-remove"></i>Hapus
              </a></td>
				</tr>
			<?php }?>
			</tbody>
		</table>
		<a href="<?php echo base_url('Pendidikan/add_pendidikan') ?>" class="btn btn-app">
                <i class="fa fa-save"></i>Tambah Pendidikan</a>
	</div>
</div>
</body>
</html>

<script src="<?php echo base_url('assets/bower_components/datatables.net/js/jquery.dataTables.min.js')?>"></script>
<script src="<?php echo base_url('assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')?>"></script>
<script type="text/javascript">
	$(document).ready(function(){
	var table ;

    table = $('#pendidikan').dataTable({
                rowsGroup: [
                    2    
                ],
                bProcessing: true,
                sAjaxSource: $('#pendidikan').data('url')
            }); 
            }); 
</script>