<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="container">
	<div class="row">
	
<div class="col-md-12">
	 <div class="box">
            <div class="box-header">
            	<center><h3>Table Hasil Akhir Seleksi Wartawan</h3></center>
            	<div class="table table-responsive">


	<table class="table table-bordered" id="penilaian">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>Nilai Akhir</th>
				<th>Ranking</th>
				<th>Status</th>
				
				<th>Action </th>

			</tr>
		</thead>
		<tbody>
							<?php $j=0; $hasil1=0; $no=1; $rank=1; foreach ($nilai as $tampil) {
								
								$j +=$tampil->Vs;
								//echo $j;
							 ?>
							<tr>
								<td><?=$no++?></td>
								<td><?=$tampil->nama_wartawan?></td>
								
								
								<td><?php $hasil1=$tampil->Vs / $hasil['jumlah']; echo $hasil1; ?></td>
								<td><?=$rank++?></td>
								<td><?php if ($tampil->status==7) {
									echo "di Terima Sebagai Wartawan";
								}else if($tampil->status==8){

									echo "di Tolak Sebagai Wartawan";
								} ?> (<?php if ($tampil->notifikasi==1) {
									echo "Notifikasi Telah dikirim";
								} ?>)</td>
								<td><a href="<?php echo base_url('Penilaian/acc/'.$tampil->id_wartawan.'') ?>" class="btn btn-primary">Terima</a><a href="<?php echo base_url('Penilaian/tolak/'.$tampil->id_wartawan.'') ?>" class="btn btn-danger">Tolak</a>
									<?php if ($tampil->status==7 || $tampil->status==8 ) {
										echo "<a href='".base_url('Penilaian/notifikasi/'.$tampil->id_wartawan.'')."' class='btn btn-danger'>Notifikasi User</a>";
									} ?>

								</td>
							</tr>
						<?php }?>
						</tbody>
	</table>
	<a href="<?php echo base_url('Penilaian/view_pdf') ?>" class="btn btn-info">Download PDF</a>
	</div>
</div>	
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

    table = $('#penilaian').dataTable({
                rowsGroup: [
                    2    
                ],
                bProcessing: true,
                sAjaxSource: $('#wartawan').data('url')
            })
            });
        </script>