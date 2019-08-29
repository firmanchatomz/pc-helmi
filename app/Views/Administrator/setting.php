<div class="row">
	<div class="col-md-12">
		 <div class="card">
      <div class="card-body">
        <?= show_alert() ?>
        <h4 class="card-title">Halaman Pengaturan Website</h4>
        <p class="card-description">
          Atur Website sesuai dengan kriteria perumahan
        </p>
        <form method="post" action="<?= base_url('admin/ubahsetting/'.$setting->id_setting) ?>" class="forms-sample" enctype="multipart/form-data">
          <input type="hidden" name="id_setting" value="<?= $setting->id_setting ?>">
          <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Nama Aplikasi</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="nama_aplikasi" id="exampleInputUsername2" placeholder="masukkan nama aplikasi" value="<?= $setting->nama_aplikasi ?>">
            </div>
          </div>
          <div class="form-group row">
            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Nama Perumahan</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="nama_perumahan" id="exampleInputEmail2" placeholder="masukkan nama perumahan" value="<?= $setting->nama_perumahan ?>">
            </div>
          </div>
          <div class="form-group row">
            <label for="exampleInputMobile" class="col-sm-3 col-form-label">Judul Footer</label>
            <div class="col-sm-9">
            	<input type="text" name="judul_footer" class="form-control" value="<?= $setting->judul_footer ?>" placeholder="masukkan judul footer">
            </div>
          </div>
          <div class="form-group row">
            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Logo Perumahan</label>
            <div class="col-sm-2">
              <img src="<?= base_url('assets/img/'.$setting->logo) ?>" alt="logo" width="100%">
            </div>
            <div class="col-sm-7">
              <input type="checkbox" name="ubahgambar"> <small>Ceklis bila ingin merubah gambar</small>
              <input type="file" class="form-control-file" name="logo">
              <input type="hidden" name="gambar" value="<?= $setting->logo ?>">
            </div>
          </div>
          <button type="submit" class="btn btn-primary mr-2">Perbaharui</button>
          <button class="btn btn-light">Cancel</button>
        </form>
      </div>
    </div>
	</div>
</div>