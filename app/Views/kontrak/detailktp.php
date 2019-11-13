<div class="container my-3">
	<div class="row">
		<div class="col-md-12">
			<header class="mb-2">
				<h3>DATA ANGGOTA KELUARGA<span class="float-right"><a href="<?= base_url('admin/detailkk/'.$ktp->no_kk) ?>" class="btn btn-primary">Kembali</a></span></h3>
			</header>
		</div>
	</div>
	<div class="row mb-3">
		<div class="col-md-12 text-capitalize">
			<table class="table table-striped">
				<tr>
					<th width="300">No. Urut</th>
					<td>: <?= $ktp->no_urut ?></td>
				</tr>
				<tr>
					<th>Nomor NIK</th>
					<td>: <?= $ktp->no_nik  ?></td>
				</tr>
				<tr>
					<th>Nama Lengkap</th>
					<td>: <?= $ktp->nama  ?></td>
				</tr>
				<tr>
					<th>Nomor Akte Kelahiran</th>
					<td>: <?= $ktp->no_akte  ?></td>
				</tr>
				<tr>
					<th>Jenis Kelamin</th>
					<td>: <?= $ktp->jk  ?></td>
				</tr>
				<tr>
					<th>Tempat Tanggal Lahir</th>
					<td>: <?= $ktp->tempat_lahir. ', '.$ktp->tanggal_lahir ?></td>
				</tr>
				<tr>
					<th>Hubungan Keluarga</th>
					<td>: <?= $ktp->hubungan_keluarga  ?></td>
				</tr>
				<tr>
					<th>Status Perkawinan</th>
					<td>: <?= $ktp->perkawinan  ?></td>
				</tr>
				<tr>
					<th>Agama</th>
					<td>: <?= $ktp->agama  ?></td>
				</tr>
				<tr>
					<th>Golongan Darah</th>
					<td>: <?= $ktp->golongan_darah  ?></td>
				</tr>
				<tr>
					<th>Kewarganegaraan</th>
					<td>: <?= $ktp->kewarganegaraan  ?></td>
				</tr>
				<tr>
					<th>Suku/Etnis</th>
					<td>: <?= $ktp->suku  ?></td>
				</tr>
				<tr>
					<th>Pendidikan Terakhir</th>
					<td>: <?= $ktp->pendidikan  ?></td>
				</tr>
				<tr>
					<th>Mata Pencaharian</th>
					<td>: <?= $ktp->pekerjaan  ?></td>
				</tr>
				<tr>
					<th>Nama Ibu/Bapak</th>
					<td>: <?= $ktp->nama_orangtua  ?></td>
				</tr>
				<tr>
					<th>Akseptor Kb</th>
					<td>: <?= $ktp->kb  ?></td>
				</tr>
				<tr>
					<th>Cacat Fisik</th>
					<td>: <?= $ktp->cacat_fisik  ?></td>
				</tr>
				<tr>
					<th>Cacat Mental</th>
					<td>: <?= $ktp->cacat_mental  ?></td>
				</tr>
				<tr>
					<th>Wajib Pajak</th>
					<td>: <?= $ktp->wajib_pajak  ?></td>
				</tr>
				<tr>
					<th>Lembaga Pemerintahan yang diikuti</th>
					<td>: <?= $ktp->lembaga_pemerintahan  ?></td>
				</tr>
				<tr>
					<th>Lembaga Masyarakat yang diikuti</th>
					<td>: <?= $ktp->lembaga_masyarakat  ?></td>
				</tr>
				<tr>
					<th>Lembaga Ekonomi yang diikuti</th>
					<td>: <?= $ktp->lembaga_ekonomi  ?></td>
				</tr>
			</table>
		</div>
	</div>
	<hr>
</div>