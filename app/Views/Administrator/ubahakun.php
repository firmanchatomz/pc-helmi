<div class="row">
	<div class="col-md-12">
		 <div class="card">
      <div class="card-body">
        <?= show_alert() ?>
        <h4 class="card-title">Halaman Pengaturan Akun</h4>
        <p class="card-description">
          Form untuk merubah akun
        </p>
        <form method="post" action="<?= base_url('admin/prosesubahakun/'.$admin->id_admin) ?>" class="forms-sample" enctype="multipart/form-data">
          <input type="hidden" name="id_setting" value="<?= $setting->id_setting ?>">
          <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Nama Akun</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="nama" id="exampleInputUsername2" placeholder="masukkan nama lengkap" value="<?= $admin->nama ?>">
            </div>
          </div>
          <div class="form-group row">
            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Username</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="username" id="exampleInputEmail2" placeholder="masukkan username" value="<?= $admin->username ?>">
            </div>
          </div>
           <div class="form-group row">
            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Ubah Password</label>
            <div class="col-sm-9">
              <input type="checkbox" name="cek"> Ceklis bila ingin merubah password
            </div>
          </div>
          <div class="form-group row">
            <label for="exampleInputMobile" class="col-sm-3 col-form-label">Password</label>
            <div class="col-sm-4">
            	<input type="password" name="password1" class="form-control" placeholder="masukkan password baru">
            </div>
            <div class="col-sm-5">
              <input type="password" name="password2" class="form-control" placeholder="ulangi password baru">
            </div>
          </div>
          <button type="submit" class="btn btn-primary mr-2">Perbaharui</button>
          <button class="btn btn-light">Cancel</button>
        </form>
      </div>
    </div>
	</div>
</div>