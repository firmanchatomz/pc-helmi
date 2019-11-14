<!DOCTYPE html>
<html>
<head>
	<title>Laporan Monitoring</title>
</head>
<body>
	<style type="text/css">
	body{
		font-family: sans-serif;
	}
	table{
		margin: 20px auto;
		border-collapse: collapse;
	}
	table th,
	table td{
		border: 1px solid #3c3c3c;
		padding: 3px 8px;

	}
	a{
		background: blue;
		color: #fff;
		padding: 8px 10px;
		text-decoration: none;
		border-radius: 2px;
	}
	.text-center{
		text-align: center;
	}
	</style>

	<?php
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Data Pegawai.xls");
	?>

	<center>
		<h1>Laporan Monitoring</h1>
	</center>

	<table border="1" class="text-center">
		<tr>
			<th colspan="13">RAB DAN NOTA DINAS PENGADAAN</th>
			<th rowspan="3">SALDO SKKI (PAGU VS RAB)</th>
			<th colspan="4">KONTRAK / SPK</th>
			<th colspan="2">MASA KONTRAK</th>
			<th rowspan="3">NILAI KONTRAK (RP)</th>
			<th rowspan="3">USER</th>
			<th rowspan="3">SALDO SKKI (PAGU VS SPK)</th>
			<th rowspan="3">KETERANGAN PROGRESS PEKERJAAN</th>
			<th colspan="7">PEMBAYARAN</th>
			<th rowspan="3">USER</th>
			<th rowspan="3">STATUS</th>
		</tr>
		<tr>
			<th rowspan="2">NO</th>
			<th rowspan="2">JENIS</th>
			<th rowspan="2">NO SKKI / SKKO</th>
			<th rowspan="2">PRK 1</th>
			<th rowspan="2">PRK 2</th>
			<th rowspan="2">PRK 3</th>
			<th rowspan="2">PRK 4</th>
			<th rowspan="2">PRK 5</th>
			<th rowspan="2">NO NOTA DINAS</th>
			<th rowspan="2">URAIAN / JENIS PEKERJAAN</th>
			<th rowspan="2">TANGGAL</th>	
			<th rowspan="2">USER / DIREKSI</th>	
			<th rowspan="2">NILAI RAB</th>	
			<th rowspan="2">NO SMARTONE</th>	
			<th rowspan="2">NOMOR SPK</th>	
			<th rowspan="2">NAMA VENDOR</th>	
			<th rowspan="2">URAIAN / JENIS PEKERJAAN</th>
			<th></th>
			<th></th>
			<th colspan="2">REALISASI 100%</th>
			<th colspan="2">REALISASI 95%</th>
			<th colspan="2">REALISASI 5%</th>
			<th rowspan="2">TOTAL</th>
		</tr>
		<tr>
			
			<th>TGL AWAL</th>
			<th>TGL AKHIR</th>
			<th>TANGGAL</th>
			<th>NILAI</th>
			<th>TANGGAL</th>
			<th>NILAI</th>
			<th>TANGGAL</th>
			<th>NILAI</th>
		</tr>

		<?php 
			$no = 1;
		 ?>
		<?php foreach ($rnd as $r): ?>
			<tr>
				<td><?= $no++ ?></td>
				<td><?= $r['id_jenis']?></td>
				<td><?= $r['no_skki']?></td>
				<?php foreach ($r['prk'] as $key): ?>
					<td><?= $key ?></td>
				<?php endforeach ?>
				<?php 
				$sisa = 5 - count($r['prk']);
				for ($i=0; $i < $sisa; $i++) { 
					?>
					<td>-</td>
					<?php
				}
				 ?>
				<td><?= $r['no_nota']?></td>
				<td><?= $r['uraian']?></td>
				<td><?= $r['tgl_dibuat']?></td>
				<td><?= $admin->nama_user?></td>
				<td><?= rupiah($r['nilai_rab'])?></td>
				<td><?= rupiah($r['saldo'])?></td>
				<td><?= $r['no_smartone']?></td>
				<td><?= $r['no_spk']?></td>
				<td><?= $r['nama_vendor']?></td>
				<td><?= $r['uraian']?></td>
				<td><?= $r['tgl_dibuat']?></td>
				<td><?= $r['tgl_akhir_kontrak']?></td>
				<td><?= rupiah($r['nilai_rab'])?></td>
				<td><?= $admin->nama_user?></td>
				<td><?= rupiah($r['saldo'])?></td>
				<td><?= $r['keterangan']?></td>
				<td><?= $r['r_100']?></td>
				<td><?= rupiah($r['n_100'])?></td>
				<td><?= $r['r_95']?></td>
				<td><?= rupiah($r['n_95'])?></td>
				<td><?= $r['r_5']?></td>
				<td><?= rupiah($r['n_5'])?></td>
				<td><?= rupiah($r['total'])?></td>
				<td><?= $admin->nama_user?></td>
				<td><?= $r['status']?></td>
			</tr>
		<?php endforeach ?>
	</table>
</body>
</html>