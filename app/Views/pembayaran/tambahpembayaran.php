<div class="container-fluid my-3">
		<form method="post" action="<?= base_url('admin/simpanpembayaran') ?>">
	<h4 class="text-capitalize">Tambah Data Pembayaran</h4><hr>
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
				<label for="no_kk">Realisasi 100%</label>
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group">
				<input type="date" name="r_100" class="form-control">
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group">
				<input type="text" name="n_100" class="form-control" placeholder="masukkan nilai">
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<div class="form-group">
				<label for="no_kk">Realisasi 95%</label>
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group">
				<input type="date" name="r_95" class="form-control">
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group">
				<input type="text" name="n_95" class="form-control" placeholder="masukkan nilai">
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<div class="form-group">
				<label for="no_kk">Realisasi 5%</label>
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group">
				<input type="date" name="r_5" class="form-control">
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group">
				<input type="text" name="n_5" class="form-control" placeholder="masukkan nilai">
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<div class="form-group">
				<label for="no_kk">Status Pembayaran</label>
			</div>
		</div>
		<div class="col-md-8">
			<div class="form-group">
				<input type="text" name="status" class="form-control" placeholder="masukkan status pembayaran" >
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