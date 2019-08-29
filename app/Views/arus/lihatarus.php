	<div class="container my-3">
  <div class="row">
    <div class="col-md-12">
      <header class="mb-3">
        <?php if ($status_arus == 'keluar'): ?>
        <a class="btn btn-primary" data-target="#tambahkkkeluar" data-toggle="modal" href="#">Tambah KK <?= $status_arus ?></a>
          <?php else: ?>
        <a class="btn btn-primary" href="<?= base_url('admin/tambahkk/masuk') ?>">Tambah KK <?= $status_arus ?></a>
        <?php endif ?>
      </header>
      <div class="table-responsive">
        <table class="table table-hover bg-white table-bordered" id="data-table">
          <thead class="text-center">
            <tr>
              <th width="25">No</th>
              <th>No KK</th>
              <th>Kepala Keluarga</th>
              <th>Alamat</th>
              <th width="140"></th>
            </tr>
          </thead>
          <tbody class="text-capitalize">
            <?php 
            $no = 1;
            if (isset($kk) AND !empty($kk)) {
              foreach ($kk as $row) { ?>
              <tr>
                <td class="text-center"><?php echo $no++; ?></td>
                <td><?php echo $row['no_kk'] ?></td>
                <td><?php echo $row['kepala_keluarga'] ?></td>
                <td><?php echo date_indo($row['tgl_arus']) ?></td>
                <td>
                  <a class="btn btn-primary btn-sm" href="<?= base_url('admin/detailkk/'.$row['no_kk']) ?>">
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

<!-- data modal tambah kematian -->
<div class="modal fade" id="tambahkkkeluar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form method="post" action="<?= base_url('admin/updatekkkeluar') ?>">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Rincian Data KK Keluar</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label for="skills">Nomor NIK</label>
            <input type="text" name="no_kk" id="skills" class="form-control" placeholder="masukkan nomor nik">
          </div>
          <div class="form-group">
            <label for="">Tanggal Keluar</label>
            <input type="date" name="tgl_arus" class="form-control">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>