<div class="row">
  <div class="col-xl-6 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
    <div class="card card-statistics">
      <div class="card-body">
        <div class="clearfix">
          <div class="float-left">
            <i class="mdi mdi-account text-warning icon-lg"></i>
          </div>
          <div class="float-right">
            <p class="mb-0 text-right">Total Warga</p>
            <div class="fluid-container">
              <h3 class="font-weight-medium text-right mb-0"><?= $dashboardktp['jumktp'] ?></h3>
            </div>
          </div>
        </div>
        <p class="text-muted mt-3 mb-0 m-0">
          <i class="mdi mdi-gender-male mr-1" aria-hidden="true"></i>AK Laki - laki <span class="float-right"><?= $dashboardktp['jumlakilaki'] ?> </span>
        </p>
        <p class="text-muted mt-3 mb-0 m-0">
          <i class="mdi mdi-gender-female mr-1" aria-hidden="true"></i>AK Perempuan <span class="float-right"><?= $dashboardktp['jumperempuan'] ?> </span>
        </p>
      </div>
    </div>
  </div>
  <div class="col-xl-6 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
    <div class="card card-statistics">
      <div class="card-body">
        <div class="clearfix">
          <div class="float-left">
            <i class="mdi mdi-account-multiple text-danger icon-lg"></i>
          </div>
          <div class="float-right">
            <p class="mb-0 text-right">Total Kepala Keluarga</p>
            <div class="fluid-container">
              <h3 class="font-weight-medium text-right mb-0"><?= $dashboardkk ?></h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

 <!--  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
    <div class="card card-statistics">
      <div class="card-body">
        <div class="clearfix">
          <div class="float-left">
            <i class="mdi mdi-swap-vertical text-success icon-lg"></i>
          </div>
          <div class="float-right">
            <p class="mb-0 text-right">Total Admin</p>
            <div class="fluid-container">
              <h3 class="font-weight-medium text-right mb-0"> <?= $dashboardrw ?></h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> -->
  <!-- <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
    <div class="card card-statistics">
      <div class="card-body">
        <div class="clearfix">
          <div class="float-left">
            <i class="mdi mdi-flower text-info icon-lg"></i>
          </div>
          <div class="float-right">
            <p class="mb-0 text-right">Kematian</p>
            <div class="fluid-container">
              <h3 class="font-weight-medium text-right mb-0">none</h3>
            </div>
          </div>
        </div>
        <p class="text-muted mt-3 mb-0">
        </p>
      </div>
    </div>
  </div> -->
</div>


<!-- ----------------------------------------------------------------------- -->
<div class="row">
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-header bg-success text-white pb-0">
        <h5><strong>Grafik Jumlah KK per RW</strong></h5>
      </div>
      <div class="card-body">
        <?php $chart::bar('Data KK per RW',$datachart['labelrt'], $datachart['nilairt']) ?>
      </div>
    </div>
  </div>
  <div class="col-lg-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-header bg-success text-white pb-0">
        <h5><strong>Grafik Status Perkawinan</strong></h5>
      </div>
      <div class="card-body">
       <?php $chart::pie('Data Perkawinan',$datachart['labelkw'], $datachart['nilaikw']) ?>
      </div>
    </div>
  </div>
  <div class="col-lg-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-header bg-success text-white pb-0">
        <h5><strong>Grafik Jenis Kelamin</strong></h5>
      </div>
      <div class="card-body">
        <?php $chart::pie('Data Jenis Kelamin',$datachart['labeljk'], $datachart['nilaijk']) ?>
      </div>
    </div>
  </div>
</div>