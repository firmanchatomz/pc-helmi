	<div class="container my-3">
  <div class="row">
    <div class="col-md-12">
      <header class="mb-3">
        <a class="btn btn-primary" href="#" data-toggle="modal" data-target="#addrw">Tambah RW</a>
      </header>
      <div class="table-responsive">
        <table class="table table-hover bg-white table-bordered" id="data-table">
          <thead class="text-center">
            <tr>
              <th width="25">No</th>
              <th>Nama</th>
              <th>Alamat</th>
              <th>Keterangan</th>
            </tr>
          </thead>
          <tbody class="text-capitalize">
            <?php 
            $no = 1;
            if (isset($rw) AND !empty($rw)) {
              foreach ($rw as $row) { ?>
              <tr>
                <td class="text-center"><?php echo $no++; ?></td>
                <td><?php echo $row->nama ?></td>
                <td><?php echo $row->alamat ?></td>
                <td><?php echo $row->keterangan ?></td>
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


<div class="modal fade" id="addrw" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Tambah Data RW</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?= base_url('admin/simpanrw') ?>">
       <table width="100%">
         <tr>
           <td>
             <div class="form-group">
               <label for="">Username</label>
             </div>
           </td>
           <td>
             <div class="form-group">
               <input type="text" name="username" class="form-control">
             </div>
           </td>
         </tr>
                  <tr>
           <td>
             <div class="form-group">
               <label for="">Password</label>
             </div>
           </td>
           <td>
             <div class="form-group">
               <input type="password" name="password" class="form-control">
             </div>
           </td>
         </tr>
                  <tr>
           <td>
             <div class="form-group">
               <label for="">Nama</label>
             </div>
           </td>
           <td>
             <div class="form-group">
               <input type="text" name="nama" class="form-control">
             </div>
           </td>
         </tr>
                  <tr>
           <td>
             <div class="form-group">
               <label for="">Alamat</label>
             </div>
           </td>
           <td>
             <div class="form-group">
               <input type="text" name="alamat" class="form-control">
             </div>
           </td>
         </tr>
        <tr>
           <td>
             <div class="form-group">
               <label for="">Keterangan</label>
             </div>
           </td>
           <td>
             <div class="form-group">
               <input type="text" name="keterangan" class="form-control">
             </div>
           </td>
         </tr>
       </table>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
    </form>
    </div>
  </div>
</div>