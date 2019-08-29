	<div class="container my-3">
  <div class="row">
    <div class="col-md-12">
      <?php if (akses('rw')): ?>
        <header class="mb-3">
          <a class="btn btn-primary" href="<?= base_url('admin/tambahkk') ?>">Tambah KK</a>
        </header>
      <?php endif ?>
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
                <td><?php echo $row['alamat'] ?></td>
                <td class="text-center">
                  <a class="btn btn-primary btn-sm" href="<?= base_url('admin/detailkk/'.$row['no_kk']) ?>">
                    <i class="mdi mdi-account-settings-variant text-white icon-sm"></i>
                  </a>
                 <!--    <a class="btn btn-success btn-sm" href=#>
                      <i class="mdi mdi-account-edit text-white icon-sm"></i>
                    </a> -->
                    <a class="btn btn-danger btn-sm small" onclick="return notif_delete()" href="<?= base_url('admin/hapuskk/'.$row['no_kk']) ?>">
                      <i class="mdi mdi-account-remove text-white icon-sm"></i>
                    </a>
                </td>
              </tr>
               <?php
              }
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>	