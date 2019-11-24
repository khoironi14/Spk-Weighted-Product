<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="container">
	<div class="col-md-9">
		<table class="table table-bordered" id="pengalaman">
			<thead>
				<tr>
					<th>No</th>
					<th>Pengalaman Kerja</th>
					<th>Bobot</th>
					<th>Keterangan</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php $no=1; foreach ($pengalaman as $tampil) {
					
				 ?>
				<tr>
					<td><?=$no++?></td>
					<td><?=$tampil->lama_kerja?></td>
					<td><?=$tampil->bobot?></td>
					<td><?=$tampil->keterangan?></td>
					<td><a href="<?php echo base_url('Pengalaman/edit_pengalaman/'.$tampil->id_kerja.'') ?>" class="btn btn-primary">Edit</a><a href="<?php echo base_url('Pengalaman/hapus_pengalaman/'.$tampil->id_kerja.'') ?>" class="btn btn-warning">Hapus</a></td>

				</tr>
			<?php }?>
			</tbody>
		</table>
		<a href="<?php echo base_url('Pengalaman/add_pengalaman') ?>" class="btn btn-success">Tambah Pengalaman</a>
	</div>
</div>
</body>
</html>
<script src="<?php echo base_url('assets/bower_components/datatables.net/js/jquery.dataTables.min.js')?>"></script>
<script src="<?php echo base_url('assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')?>"></script>
<script type="text/javascript">
	$(document).ready(function(){
	var table ;

    table = $('#pengalaman').dataTable({
                rowsGroup: [
                    2    
                ],
                bProcessing: true,
                sAjaxSource: $('#pengalaman').data('url')
            }); 
            }); 
</script>