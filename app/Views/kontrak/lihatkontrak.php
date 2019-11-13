	<div class="container-fluid my-3">
  <div class="row">
    <div class="col-md-12">
      <?php if ($rnd): ?>
        <header class="mb-3">
          <a class="btn btn-primary" href="<?= base_url('admin/tambahkontrak') ?>">Tambah kontrak</a>
        </header>
      <?php endif ?>
      <div class="table-responsive">
        <table class="table table-hover bg-white table-bordered" id="data-table">
          <thead class="text-center">
            <tr>
              <th width="25" rowspan="2">No</th>
              <th rowspan="2">No Smartone</th>
              <th rowspan="2">No Spk</th>
              <th rowspan="2">Nama Vendor</th>
              <th rowspan="2">Uraian</th>
              <th colspan="2">Masa Kontrak</th>
              <th rowspan="2">Nilai Kontrak</th>
              <th rowspan="2">User</th>
              <th rowspan="2">Saldo</th>
              <th rowspan="2"></th>
            </tr>
            <tr>
              <th>Tanggal Awal</th>
              <th>Tanggal Akhir</th>
            </tr>
          </thead>
          <tbody class="text-capitalize">
            <?php 
            $no = 1;
            if (isset($kontrak) AND !empty($kontrak)) {
              foreach ($kontrak as $row) { ?>
              <tr>
                <td class="text-center"><?php echo $no++; ?></td>
                <td><?php echo $row['no_smartone'] ?></td>
                <td><?php echo $row['no_spk'] ?></td>
                <td><?php echo $row['nama_vendor'] ?></td>
                <td><?php echo $row['uraian'] ?></td>
                <td><?php echo $row['tgl_dibuat'] ?></td>
                <td><?php echo $row['tgl_akhir'] ?></td>
                <td><?php echo $row['nilai_rab'] ?></td>
                <td><?php echo $row['nama_user'] ?></td>
                <td><?php echo $row['saldo'] ?></td>
                 <td>
                  <a href="<?= base_url('admin/editkontrak/'.$row['id_kontrak']) ?>" class="btn btn-success btn-sm">Edit</a>
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