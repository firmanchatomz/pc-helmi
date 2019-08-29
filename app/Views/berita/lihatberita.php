	<div class="container my-3">
  <div class="row">
    <div class="col-md-12">
      <header class="mb-3">
        <a class="btn btn-primary" href="#" data-toggle="modal" data-target="#tambahberita">Tambah Berita</a>
      </header>
      <div class="table-responsive">
        <table class="table table-hover bg-white table-bordered" id="data-table">
          <thead class="text-center">
            <tr>
              <th width="25">No</th>
              <th>Judul Berita</th>
              <th>Tanggal Dibuat</th>
              <th width="140"></th>
            </tr>
          </thead>
          <tbody class="text-capitalize">
            <?php 
            $no = 1;
            if (isset($berita) AND !empty($berita)) {
              foreach ($berita as $row) { ?>
              <tr>
                <td class="text-center"><?php echo $no++; ?></td>
                <td><?php echo $row->judul_berita ?></td>
                <td><?php echo $row->tgl_dibuat ?></td>
                <td>
                  <a class="btn btn-primary btn-sm" href="<?= base_url('admin/detailberita/'.$row->id_berita) ?>">
                    <i class="mdi mdi-account-settings-variant text-white icon-sm"></i>
                  </a>
                  <a class="btn btn-success btn-sm" href=#>
                    <i class="mdi mdi-account-edit text-white icon-sm"></i>
                  </a>
                  <a class="btn btn-danger btn-sm small" onclick="return notif_logout()" href="#">
                    <i class="mdi mdi-account-remove text-white icon-sm"></i>
                  </a>
                </td>
              </tr>
               <?php
              }
            } else { ?>
               <tr>
                 <td colspan="5" class="text-center">Belum Ada Data</td>
               </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>	



<!-- modal tambah berita -->
<div class="modal fade bd-example-modal-lg" id="tambahberita" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <form method="post" action="<?= base_url('admin/simpanberita') ?>" enctype="multipart/form-data">
         <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Tambah Berita</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="container">
            <div class="form-group">
              <label for="">Judul Berita</label>
              <input type="text" name="judul_berita" class="form-control" required>
            </div>

            <div class="form-group">
              <label for="">Isi Berita</label>
              <textarea name="isi_berita" id="" cols="30" rows="10" class="form-control berita"></textarea>
            </div>
            <div class="form-group">
              <label for="">Kategori Berita</label>
              <select name="id_label" id="" class="form-control">
                <?php foreach ($label as $row): ?>
                  <option value="<?= $row->id_label ?>"><?= $row->nama_label ?></option>
                <?php endforeach ?>
              </select>
            </div>
            <div class="form-group">
              <label for="">Masukkan Gambar Berita</label><br>
              <input type="file" name="gambar" required>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      </form>
    </div>
  </div>
</div>