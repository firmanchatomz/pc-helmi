<div class="container-fluid my-3">
		<form method="post" action="<?= base_url('admin/simpankontrak') ?>">
	<h4 class="text-capitalize">Tambah Data Kontrak</h4><hr>
	<div class="row">
		<div class="col-md-4">
			<div class="form-group">
				<label for="no_kk">Data RAB dan Nota Dinas</label>
			</div>
		</div>
		<div class="col-md-8">
			<div class="form-group">
				<select name="id_rnd" class="form-control">
					<?php foreach ($rnd as $row): ?>
						<option value="<?= $row->id_rnd ?>"><?= $row->no_skki ?></option>
					<?php endforeach ?>
				</select>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<div class="form-group">
				<label for="no_kk">No Smartone</label>
			</div>
		</div>
		<div class="col-md-8">
			<div class="form-group">
				<input type="text" name="no_smartone" class="form-control" placeholder="masukkan nomor smartone" >
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<div class="form-group">
				<label for="no_kk">No Spk</label>
			</div>
		</div>
		<div class="col-md-8">
			<div class="form-group">
				<input type="text" name="no_spk" class="form-control" placeholder="masukkan nomor spk" >
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<div class="form-group">
				<label for="no_kk">Nama Vendor</label>
			</div>
		</div>
		<div class="col-md-8">
			<div class="form-group">
				<input type="text" name="nama_vendor" class="form-control" placeholder="masukkan nama vendor" >
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<div class="form-group">
				<label for="no_kk">Tanggal Akhir</label>
			</div>
		</div>
		<div class="col-md-8">
			<div class="form-group">
				<input type="date" name="tgl_akhir" class="form-control" required>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<div class="form-group">
				<label for="no_kk">Keterangan</label>
			</div>
		</div>
		<div class="col-md-8">
			<div class="form-group">
				<input type="text" name="keterangan" class="form-control" placeholder="masukkan uraian" >
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