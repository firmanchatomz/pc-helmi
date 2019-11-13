<div class="container-fluid my-3">
		<form method="post" action="<?= base_url('admin/updatekontrak/'.$kontrak->id_kontrak) ?>">
	<h4 class="text-capitalize">Edit Data Kontrak</h4><hr>
	<div class="row">
		<div class="col-md-4">
			<div class="form-group">
				<label for="no_kk">No Smartone</label>
			</div>
		</div>
		<div class="col-md-8">
			<div class="form-group">
				<input type="text" name="no_smartone" class="form-control" placeholder="masukkan nomor smartone"  value="<?= $kontrak->no_smartone  ?>" >
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
				<input type="text" name="no_spk" class="form-control" placeholder="masukkan nomor spk"  value="<?= $kontrak->no_spk  ?>" >
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
				<input type="text" name="nama_vendor" class="form-control" placeholder="masukkan nama vendor"  value="<?= $kontrak->nama_vendor  ?>" >
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
				<input type="date" name="tgl_akhir" class="form-control" required value="<?= $kontrak->tgl_akhir  ?>" >
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
				<input type="text" name="keterangan" class="form-control" placeholder="masukkan uraian"  value="<?= $kontrak->keterangan  ?>" >
			</div>
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-12 ">
			<div class="form-group float-right">
				<input type="submit" name="" value="ubah" class="btn btn-primary btn-sm">
			</div>
		</div>
	</div>
	</form>
</div>