<div class="container my-3">
	<form method="post" action="<?= base_url('admin/simpanktp/'.$no_kk) ?>">
	<input type="hidden" name="no_kk" value="<?= $no_kk ?>">
	<h4>Tambah Data Anggota Keluarga</h4><hr>
	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<label for="no_kk">Nomor Urut</label>
				<input type="text" name="no_urut" class="form-control" placeholder="masukkan nomor urut" required>
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
				<label for="no_kk">Nomor NIK</label>
				<input type="text" name="no_nik" class="form-control" maxlength="16" placeholder="masukkan nomor NIK" required>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<label for="nama">Nama Lengkap</label>
				<input type="text" name="nama" class="form-control" placeholder="masukkan nama lengkap" required>
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
				<label for="nama">Nomor Akte Kelahiran</label>
				<input type="text" name="no_akte" class="form-control" placeholder="masukkan nomor akte" required>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<label for="tempat_lahir">Tempat Lahir</label>
				<input type="text" name="tempat_lahir" class="form-control" placeholder="masukkan tempat tanggal lahir" required>
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
				<label for="tanggal_lahir">Tanggal Lahir</label>
				<input type="date" name="tanggal_lahir" class="form-control" required>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<label for="nama">Etnis/ Suku</label>
				<input type="text" name="suku" class="form-control" placeholder="masukkan nama lengkap" required>
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
				<label for="nama">Nama Ibu/Ayah</label>
				<input type="text" name="nama_orangtua" class="form-control" placeholder="masukkan nama ibu/ayah" required>
			</div>
		</div>
	</div>


	<div class="row">
		<div class="col-md-2">
			<div class="form-group">
				<label for="jk">Jenis Kelamin</label>
				<select name="jk" id="jk" class="form-control">
					<option value="laki-laki">Laki - Laki</option>
					<option value="perempuan">Perempuan</option>
				</select>
			</div>
		</div>
		<div class="col-md-2">
			<div class="form-group">
				<label for="golongan_darah">Golongan Darah</label>
						<select name="golongan_darah" id="" class="form-control">
								<?php foreach (datagoldar() as $row): ?>
									<option value="<?= $row ?>"><?= $row ?></option>
								<?php endforeach ?>
				</select>
			</div>
		</div>
		<div class="col-md-2">
			<div class="form-group">
				<label for="perkawinan">Status Perkawinan</label>
				<select name="perkawinan" id="perkawinan" class="form-control">
					<option value="belum kawin">Belum Kawin</option>
					<option value="sudah kawin">Sudah Kawin</option>
					<option value="janda/duda">Janda/Duda</option>
				</select>
			</div>
		</div>
		<div class="col-md-2">
			<div class="form-group">
				<label for="agama">Agama</label>
				<select name="agama" id="" class="form-control">
								<?php foreach (dataagama() as $row): ?>
									<option value="<?= $row ?>"><?= $row ?></option>
								<?php endforeach ?>
				</select>
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group">
				<label for="hubungan_keluarga">Status Hubungan Keluarga</label>
				<select name="hubungan_keluarga" id="" class="form-control">
								<?php foreach (dataHubunganKeluarga() as $row): ?>
									<option value="<?= $row ?>"><?= $row ?></option>
								<?php endforeach ?>
				</select>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-5">
			<table width="100%">
				<tr>
					<td width="100">
						<div class="form-group">
							<label for="rt">Akseptor Kb</label>
						</div>
					</td>
					<td>
						<div class="form-group">
							<select name="kb" id="" class="form-control">
								<?php foreach (datakb() as $row): ?>
									<option value="<?= $row ?>"><?= $row ?></option>
								<?php endforeach ?>
							</select>
						</div>
					</td>
				</tr>
				<tr>
					<td width="50">
						<div class="form-group">
							<label for="kewarganegaraan">Kewarganegaraan</label>
						</div>
					</td>
					<td>
						<div class="form-group">
							<select name="kewarganegaraan" id="" class="form-control">
								<?php foreach (datakewarganegaraan() as $row): ?>
									<option value="<?= $row ?>"><?= $row ?></option>
								<?php endforeach ?>
							</select>
						</div>
					</td>
				</tr>
				
			</table>
		</div>
		<div class="col-md-7">
			<table width="100%">
				<tr>
					<td width="50">
						<div class="form-group">
							<label for="pendidikan">Pendidikan Terakhir</label>
						</div>
					</td>
					<td>
						<div class="form-group">
							<select name="pendidikan" id="" class="form-control">
								<?php foreach (datapendidikan() as $row): ?>
									<option value="<?= $row ?>"><?= $row ?></option>
								<?php endforeach ?>
							</select>
						</div>
					</td>
				</tr>
				<tr>
					<td width="100">
						<div class="form-group">
							<label for="pekerjaan">Mata Pencaharian</label>
						</div>
					</td>
					<td>
						<div class="form-group">
							<select name="pekerjaan" id="" class="form-control">
								<?php foreach (datapencaharian() as $row): ?>
									<option value="<?= $row ?>"><?= $row ?></option>
								<?php endforeach ?>
							</select>
						</div>
					</td>
				</tr>
			</table>
		</div>
	</div>
	<hr>
	<div class="row">
		<div class="col-md-2">
			<div class="form-group">
				<label for="nama">Cacat Fisik</label>
			</div>
		</div>
		<div class="col-md-10">
			<div class="form-group small">
				<?php foreach (datacacatfisik() as $row): ?>
					<input type="checkbox" name="cacat_fisik[]" value="<?= $row ?>">&nbsp; <?= $row ?> &nbsp;&nbsp;&nbsp; 
				<?php endforeach ?>
			</div>
		</div>
	</div>
	<hr>
	<div class="row">
		<div class="col-md-2">
			<div class="form-group">
				<label for="nama">Cacat Mental</label>
			</div>
		</div>
		<div class="col-md-10">
			<div class="form-group small">
				<?php foreach (datacacatmental() as $row): ?>
					<input type="checkbox" name="cacat_mental[]" value="<?= $row ?>">&nbsp; <?= $row ?> &nbsp;&nbsp;&nbsp; 
				<?php endforeach ?>
			</div>
		</div>
	</div>
	<hr>
	<div class="row">
		<div class="col-md-2">
			<div class="form-group">
				<label for="nama">Wajib Pajak</label>
			</div>
		</div>
		<div class="col-md-10">
			<div class="row">
				<?php foreach (datawajibpajak() as $row): ?>
				<div class="col-md-4">
					<div class="form-group small">
						<input type="checkbox" name="wajib_pajak[]" value="<?= $row ?>">&nbsp; <?= $row ?> &nbsp;&nbsp;&nbsp; 
					</div>
				</div>
				<?php endforeach ?>
			</div>
		</div>
	</div>
	<hr>
	<div class="row">
		<div class="col-md-2">
			<div class="form-group">
				<label for="nama">Lembaga Pemerintahan yang diikut</label>
			</div>
		</div>
		<div class="col-md-10">
			<div class="row">
				<?php foreach (datalembagapemerintahan() as $row): ?>
				<div class="col-md-6">
					<div class="form-group small">
						<input type="checkbox" name="lembaga_pemerintahan[]" value="<?= $row ?>">&nbsp; <?= $row ?> &nbsp;&nbsp;&nbsp; 
					</div>
				</div>
				<?php endforeach ?>
			</div>
		</div>
	</div>
	<hr>
	<div class="row">
		<div class="col-md-2">
			<div class="form-group">
				<label for="nama">Lembaga Masyarakat yang diikut</label>
			</div>
		</div>
		<div class="col-md-10">
			<div class="row">
				<?php foreach (datalembagakemasyarakatan() as $row): ?>
				<div class="col-md-6">
					<div class="form-group small">
						<input type="checkbox" name="lembaga_masyarakat[]" value="<?= $row ?>">&nbsp; <?= $row ?> &nbsp;&nbsp;&nbsp; 
					</div>
				</div>
				<?php endforeach ?>
			</div>
		</div>
	</div>
	<hr>
	<div class="row">
		<div class="col-md-2">
			<div class="form-group">
				<label for="nama">Lembaga Ekonomi yang diikut</label>
			</div>
		</div>
		<div class="col-md-10">
			<div class="row">
				<?php foreach (datalembagaekonomi() as $row): ?>
				<div class="col-md-6">
					<div class="form-group small">
						<input type="checkbox" name="lembaga_ekonomi[]" value="<?= $row ?>">&nbsp; <?= $row ?> &nbsp;&nbsp;&nbsp; 
					</div>
				</div>
				<?php endforeach ?>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="form-group float-right">
				<input type="submit" class="btn btn-primary" value="simpan">
				<input type="reset" class="btn btn-success" value="batal">
			</div>
		</div>
	</div>
	</form>
</div>