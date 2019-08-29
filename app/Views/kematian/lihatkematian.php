	<div class="container my-3">
  <div class="row">
    <div class="col-md-12">
      <header class="mb-3">
        <a class="btn btn-primary" href="3" data-toggle="modal" data-target="#tambahkematian">Tambah Data Kematian</a>
      </header>
      <div class="table-responsive">
        <table class="table table-hover bg-white table-bordered" id="data-table">
          <thead class="text-center">
            <tr>
              <th width="25">No</th>
              <th>No NIK</th>
              <th>Nama Lengkap</th>
              <th>Tanggal Kematian</th>
              <th width="140"></th>
            </tr>
          </thead>
          <tbody class="text-capitalize">
            <?php 
            $no = 1;
            if (isset($kematian) AND !empty($kematian)) {
              foreach ($kematian as $row) { ?>
              <tr>
                <td class="text-center"><?php echo $no++; ?></td>
                <td><?php echo $row['no_kk'] ?></td>
                <td><?php echo $row['nama'] ?></td>
                <td><?php echo $row['alamat'] ?></td>
                <td>
                  <a class="btn btn-primary btn-sm" href="<?= base_url('admin/detailkk/'.$row['no_kk']) ?>">
                    <i class="mdi mdi-account-settings-variant text-white icon-sm"></i>
                  </a>
              <!--     <a class="btn btn-success btn-sm" href=#>
                    <i class="mdi mdi-account-edit text-white icon-sm"></i>
                  </a> -->
                  <a class="btn btn-danger btn-sm small" onclick="return notif_delete()" href="<?= base_url('admin/hapuskematian/'.$row['id_kematian']) ?>">
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
<div class="modal fade" id="tambahkematian" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form method="post" action="<?= base_url('admin/simpankematian') ?>">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Rincian Data Kematian</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label for="">Nomor NIK</label>
            <select class="form-control" name="no_nik" id="">
              <?php foreach ($ktp as $row): ?>
                <option value="<?= $row['no_nik'] ?>"><?= $row['nama'] .' | ' . $row['no_nik'] ?></option>
              <?php endforeach ?>
            </select>
          </div>
          <div class="form-group">
            <label for="">Tanggal Kematian</label>
            <input type="date" name="tgl_kematian" class="form-control">
          </div>
          <div class="form-group">
            <label for="">Waktu Kematian</label>
            <input type="time" name="waktu_kematian" class="form-control">
          </div>
          <div class="form-group">
            <label for="">Dimakamkan di</label>
            <input type="text" name="tempat_pemakaman" class="form-control">
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