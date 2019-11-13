<div class="container my-3">
		<form method="post" action="<?= base_url('admin/simpanrnd') ?>">
	<h4 class="text-capitalize">Tambah Data RAB dan Nota Dinas</h4><hr>
	<div class="row">
		<div class="col-md-4">
			<div class="form-group">
				<label for="no_kk">Jenis</label>
			</div>
		</div>
		<div class="col-md-8">
			<div class="form-group">
				<select name="id_jenis" class="form-control">
					<?php foreach ($jenis as $row): ?>
						<option value="<?= $row->id_jenis ?>"><?= $row->nama_jenis ?></option>
					<?php endforeach ?>
				</select>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<div class="form-group">
				<label for="no_kk">No SKKI</label>
			</div>
		</div>
		<div class="col-md-8">
			<div class="form-group">
				<input type="text" name="no_skki" class="form-control" placeholder="masukkan nomor skki" required>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<div class="form-group">
				<label for="no_kk">PRK</label>
			</div>
		</div>
		<div class="col-md-8">
			<div class="row">
				<?php foreach ($prk as $row): ?>
					<div class="col-md-6">
						<div class="form-group">
							<input type="checkbox" name="id_prk[]" value="<?= $row->id_prk ?>"> <?= $row->nama_prk ?>
						</div>
					</div>
				<?php endforeach ?>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<div class="form-group">
				<label for="no_kk">No Nota</label>
			</div>
		</div>
		<div class="col-md-8">
			<div class="form-group">
				<input type="text" name="no_nota" class="form-control" placeholder="masukkan nomor nota" required>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<div class="form-group">
				<label for="no_kk">Uraian</label>
			</div>
		</div>
		<div class="col-md-8">
			<div class="form-group">
				<input type="text" name="uraian" class="form-control" placeholder="masukkan uraian" required>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<div class="form-group">
				<label for="no_kk">Nilai RAB</label>
			</div>
		</div>
		<div class="col-md-8">
			<div class="form-group">
				<input type="text" name="nilai_rab" class="form-control" placeholder="masukkan nilai rab" required>
			</div>
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-12 ">
			<div class="form-group float-right">
				<input type="submit" name="" value="simpan" class="btn btn-primary btn-sm">
			</div>
		</div>
	</div>
	</form>
</div>