<div class="container my-3">
	<div class="row">
		<div class="col-md-12">
			<header class="mb-2 text-center">
				<h3>KARTU KELUARGA</h3>
				<p>No . <?= $kk->no_kk ?></p><hr>
			</header>
		</div>
	</div>
	<div class="row mb-3">
		<div class="col-md-12 text-capitalize">
			<table width="100%">
				<tr>
					<th width="230">Nama Kepala Keluarga</th>
					<td width="10">:</td>
					<td><?= $kk->kepala_keluarga ?></td>
				</tr>
				<tr>
					<th>Alamat</th>
					<td width="10">:</td>
					<td><?= $kk->alamat ?></td>
				</tr>
				<tr>
					<th>RT/RW</th>
					<td width="10">:</td>
					<td><?= $kk->rt . '/' . $kk->rw ?></td>
				</tr>
				<tr>
					<th>Nama Dusun</th>
					<td width="10">:</td>
					<td><?= $kk->nama_dusun ?></td>
				</tr>
				<tr>
					<th>Pekerjaan</th>
					<td width="10">:</td>
					<td><?= $kk->pekerjaan ?></td>
				</tr>
				<tr>
					<th>Jabatan</th>
					<td width="10">:</td>
					<td><?= $kk->jabatan ?></td>
				</tr>
			</table>
		</div>
	</div>
	<hr>
	<!-- anggota keluarga -->
	<div class="row">
		<div class="col-md-12">
			<?php if (akses('rw')): ?>
				<header>
					<a href="<?= base_url('admin/tambahktp/'.$kk->no_kk) ?>" class="btn btn-primary small">Tambah Anggota Keluarga</a>
				</header>
			<?php endif ?>
			<div class="table-responsive my-3">
				<section class="my-3">
					<table class="table table-bordered bg-white" id="data-table">
						<thead>
							<tr class="text-center">
								<th>No</th>
								<th>NIK</th>
								<th>Nama Lengkap</th>
								<th>Jenis Kelamin</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php if (isset($ktp) AND !empty($ktp)): ?>
							<?php 
							$no = 1;
							foreach ($ktp as $row): ?>
								<tr class="text-capitalize">
									<td><?= $no++ ?></td>
									<td><?= $row['no_nik'] ?></td>
									<td><?= $row['nama'] ?></td>
									<td><?= $row['jk'] ?></td>
									<td class="text-center">
	                  <a class="btn btn-primary btn-sm" href="<?= base_url('admin/detailktp/'.$row['no_nik']) ?>">
	                    <i class="mdi mdi-account-settings-variant text-white icon-sm"></i>
	                  </a>
	                    <a class="btn btn-danger btn-sm small" onclick="return notif_delete()" href="<?= base_url('admin/hapusktp/'.$row['no_kk'].'/'.$row['no_nik']) ?>">
	                      <i class="mdi mdi-account-remove text-white icon-sm"></i>
	                    </a>
                	</td>
								</tr>
							<?php endforeach ?>
							<?php endif ?>
						</tbody>
					</table>
				</section>

			</div>
		</div>
	</div>
</div>