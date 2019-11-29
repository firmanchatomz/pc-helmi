<div class="row">
	<div class="col-md-12">
		 <div class="card">
      <div class="card-body">
        <?= show_alert() ?>
        <h4 class="card-title">Halaman Tambah Akun</h4>
        <p class="card-description">
          Form untuk menambah akun baru
        </p>
        <form method="post" action="<?= base_url('admin/simpanakun') ?>" class="forms-sample">
          <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Nama Akun</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="nama" id="exampleInputUsername2" placeholder="masukkan nama lengkap">
            </div>
          </div>
          <div class="form-group row">
            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Jenis User</label>
            <div class="col-sm-9">
              <select class="form-control" name="id_user">
                <?php foreach ($user as $r): ?>
                  <option value="<?= $r['id_user'] ?>"><?= $r['nama_user'] ?></option>
                <?php endforeach ?>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label for="exampleInputMobile" class="col-sm-3 col-form-label">Username</label>
            <div class="col-sm-9">
              <input type="text" name="username" class="form-control" placeholder="masukkan username">
            </div>
          </div>
          <div class="form-group row">
            <label for="exampleInputMobile" class="col-sm-3 col-form-label">Password</label>
            <div class="col-sm-9">
            	<input type="password" name="password" class="form-control" placeholder="masukkan password">
            </div>
          </div>
          <button type="submit" class="btn btn-primary mr-2">Buat Akun</button>
          <button type="reset" class="btn btn-light">Cancel</button>
        </form>
      </div>
    </div>
	</div>
</div>