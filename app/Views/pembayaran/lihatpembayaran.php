	<div class="container-fluid my-3">
  <div class="row">
    <div class="col-md-12">
      <?php if ($rnd): ?>
        <header class="mb-3">
          <a class="btn btn-primary" href="<?= base_url('admin/tambahpembayaran') ?>">Tambah Pembayaran</a>
        </header>
      <?php endif ?>
      <div class="table-responsive">
        <table class="table table-hover bg-white table-bordered" id="data-table">
          <thead class="text-center">
            <tr>
              <th width="25" rowspan="2">No</th>
              <th colspan="2">Realisasi 100%</th>
              <th colspan="2">Realisasi 95%</th>
              <th colspan="2">Realisasi 5%</th>
              <th rowspan="2">Total</th>
              <th rowspan="2">User</th>
              <th rowspan="2">Status</th>
            </tr>
            <tr>
              <th>Tanggal</th>
              <th>Nilai</th>
                 <th>Tanggal</th>
              <th>Nilai</th>
                 <th>Tanggal</th>
              <th>Nilai</th>
            </tr>
          </thead>
          <tbody class="text-capitalize">
            <?php 
            $no = 1;
            if (isset($pembayaran) AND !empty($pembayaran)) {
              foreach ($pembayaran as $row) { ?>
              <tr>
                <td class="text-center"><?php echo $no++; ?></td>
                <td><?php echo $row['r_100'] ?></td>
                <td><?php echo $row['n_100'] ?></td>
                <td><?php echo $row['r_95'] ?></td>
                <td><?php echo $row['n_95'] ?></td>
                <td><?php echo $row['r_5'] ?></td>
                <td><?php echo $row['n_5'] ?></td>
                <td><?php echo $row['nilai_rab'] ?></td>
                <td><?php echo $row['nama_user'] ?></td>
                <td><?php echo $row['status'] ?></td>
                 <td>
                  <a href="<?= base_url('admin/editpembayaran/'.$row['id_pembayaran']) ?>" class="btn btn-success btn-sm">Edit</a>
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