<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-6">
			<h3>SPK</h3>
			<?php
			$pj=0;
			$pj=$spk['umur'] + $spk['pengalaman_kerja'] + $spk['kerja_dalam_tekanan'] + $spk['wawasan'] + $spk['kesehatan'] + $spk['kemampuan_menulis'];
			$p=0;
			$p=$spk['pendidikan'] / $pj ;
			$uj=0;
			$uj=$spk['pendidikan'] + $spk['pengalaman_kerja'] + $spk['kerja_dalam_tekanan'] + $spk['wawasan'] + $spk['kesehatan'] + $spk['kemampuan_menulis'];
			$u=0;
			$u= $spk['umur'] / $uj;
			$pkj=0;
			$pkj=$spk['pendidikan'] + $spk['umur'] + $spk['kerja_dalam_tekanan'] + $spk['wawasan'] + $spk['kesehatan'] + $spk['kemampuan_menulis'];
			$pk=0;
			$pk=$spk['pengalaman_kerja'] / $pkj;
			$ktj=0;
			$ktj=$spk['pendidikan'] + $spk['umur'] + $spk['pengalaman_kerja'] + $spk['wawasan'] + $spk['kesehatan'] + $spk['kemampuan_menulis'];
			$kt=0;
			$kt=$spk['kerja_dalam_tekanan'] / $ktj;
			$wj=0;
			$wj=$spk['kesehatan'] + $spk['kemampuan_menulis'] + $spk['pendidikan'] + $spk['umur'] + $spk['pengalaman_kerja'] + $spk['kerja_dalam_tekanan'];
			$w=0;
			$w=$spk['wawasan']/$wj;
			
			$kmj=0;
			$kmj=$spk['kesehatan'] + $spk['pendidikan'] + $spk['umur'] + $spk['pengalaman_kerja'] + $spk['kerja_dalam_tekanan'] + $spk['wawasan'];
			$km=0;
			$km=$spk['kemampuan_menulis'] / $kmj;
			$hasil=0;
			$hasil=$p + $u + $pk + $kt + $w  + $km;

			 ?>

			<table class="table table-konseded">
				<tr><td>W1</td><td><?=$spk['pendidikan']?> / <?=$spk['umur']?> +  <?=$spk['pengalaman_kerja']?>  +  <?=$spk['kerja_dalam_tekanan']?> +  <?=$spk['wawasan']?> +  <?=$spk['kesehatan']?> +  <?=$spk['kemampuan_menulis']?> = <?=$p?></td></tr>
				<tr>
					<td>W1</td><td><?=$spk['umur']?> / <?=$spk['pendidikan']?> +  <?=$spk['pengalaman_kerja']?>  +  <?=$spk['kerja_dalam_tekanan']?> +  <?=$spk['wawasan']?> +  <?=$spk['kesehatan']?> +  <?=$spk['kemampuan_menulis']?> = <?=$u?> </td>
				</tr>
				<tr>
					<td>W1</td><td><?=$spk['pengalaman_kerja']?> / <?=$spk['pendidikan']?> + <?=$spk['umur']?> +  <?=$spk['kerja_dalam_tekanan']?> +  <?=$spk['wawasan']?> +  <?=$spk['kesehatan']?> +  <?=$spk['kemampuan_menulis']?> = <?=$pk?></td>
				</tr>
				<tr><td>W1</td><td> <?=$spk['kerja_dalam_tekanan']?>/<?=$spk['pengalaman_kerja']?> + <?=$spk['pendidikan']?> + <?=$spk['umur']?> + <?=$spk['wawasan']?> +  <?=$spk['kesehatan']?> +  <?=$spk['kemampuan_menulis']?>  =<?=$kt?> </td></tr>
				<tr><td>W1</td><td><?=$spk['kerja_dalam_tekanan']?>/<?=$spk['pengalaman_kerja']?> + <?=$spk['pendidikan']?> + <?=$spk['umur']?> + <?=$spk['kesehatan']?> +  <?=$spk['kemampuan_menulis']?> + <?=$spk['kerja_dalam_tekanan']?>=<?=$w?></td></tr>
				
				<tr>
					<td>w1</td><td><?=$spk['kemampuan_menulis']?> / <?=$spk['pendidikan']?> + <?=$spk['umur']?> + <?=$spk['kesehatan']?> + <?=$spk['kerja_dalam_tekanan']?> + <?=$spk['wawasan']?> + <?=$spk['pengalaman_kerja']?> = <?=$km?></td>
				</tr>
			</table>
			Σw= <?=$p?> + <?=$u?> + <?=$pk?> + <?=$w?>  + <?=$km?> =<?=$hasil?>
		</div>
		<div class="col-md-6">
			 <h3>Perbaikan Bobot</h3>
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>Kriteria</th>
						<th>Bobot</th>
						<th>Perbaikan</th>
					</tr>
				</thead>
				<tbody>
					<tr><td>Pendidikan Terakhir</td>


						<td><?=$spk['pendidikan']?></td>
						<td><?=$p?></td>

					</tr>
					<tr>
						<td>Umur</td>
						<td><?=$spk['umur']?></td>
						<td><?=$u?></td>
					</tr>
					<tr>
						<td>Pengalaman Kerja</td>
						<td><?=$spk['pengalaman_kerja']?></td>
						<td><?=$pk?></td>
					</tr>
					<tr>
						<td>Bisa Kerja Dalam Tekanan</td>
						<td><?=$spk['kerja_dalam_tekanan']?></td>
						<td><?=$kt?></td>
					</tr>
					<tr>
						<td>Wawasan</td>
						<td><?=$spk['wawasan']?></td>
						<td><?=$w?></td>
					</tr>
				</tbody>
			</table>
			<!--<?php //echo pow(4,0.2) ?>-->
			S_i  =<?php $si=0; $si=pow($spk['pendidikan'],$p) + pow($spk['umur'],$u) + pow($spk['pengalaman_kerja'],$pk); echo $si; ?>
		</div>
	</div>
</div>
</body>
</html>