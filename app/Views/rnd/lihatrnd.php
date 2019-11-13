	<div class="container-fluid my-3">
  <div class="row">
    <div class="col-md-12">
      <?php if (akses('rw')): ?>
        <header class="mb-3">
          <a class="btn btn-primary" href="<?= base_url('admin/tambahrnd') ?>">Tambah rnd</a>
        </header>
      <?php endif ?>
      <div class="table-responsive">
        <table class="table table-hover bg-white table-bordered" id="data-table">
          <thead class="text-center">
            <tr>
              <th width="25">No</th>
              <th>Jenis</th>
              <th>No SKKI</th>
              <th>PRK</th>
              <th>No Nota</th>
              <th>Uraian</th>
              <th>Tanggal</th>
              <th>User</th>
              <th>Nilai RAB</th>
              <th>Saldo</th>
              <th></th>
            </tr>
          </thead>
          <tbody class="text-capitalize">
            <?php 
            $no = 1;
            if (isset($rnd) AND !empty($rnd)) {
              foreach ($rnd as $row) { ?>
              <tr>
                <td class="text-center"><?php echo $no++; ?></td>
                <td><?php echo $row['nama_jenis'] ?></td>
                <td><?php echo $row['no_skki'] ?></td>
                <td><?php echo $row['prk'] ?></td>
                <td><?php echo $row['no_nota'] ?></td>
                <td><?php echo $row['uraian'] ?></td>
                <td><?php echo $row['tgl_dibuat'] ?></td>
                <td><?php echo $row['nama_user'] ?></td>
                <td><?php echo $row['nilai_rab'] ?></td>
                <td><?php echo $row['saldo'] ?></td>
                <td>
                  <a href="<?= base_url('admin/editrnd/'.$row['id_rnd']) ?>" class="btn btn-success btn-sm">Edit</a>
                  <a href="<?= base_url('admin/hapusrnd/'.$row['id_rnd']) ?>" class="btn btn-danger btn-sm">Hapus</a>
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