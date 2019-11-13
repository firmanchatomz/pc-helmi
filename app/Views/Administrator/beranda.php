<div class="row">
  <div class="col-xl-6 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
    <div class="card card-statistics">
      <div class="card-body">
        <div class="clearfix">
          <div class="float-left">
            <i class="mdi mdi-account text-warning icon-lg"></i>
          </div>
          <div class="float-right">
            <p class="mb-0 text-right">Total RAB dan Nota Dinas</p>
            <div class="fluid-container">
              <h3 class="font-weight-medium text-right mb-0"><?= $dashboardrnd['jumrnd'] ?></h3>
            </div>
          </div>
        </div>
        <p class="text-muted mt-3 mb-0 m-0">
          <i class="mdi mdi-gender-male mr-1" aria-hidden="true"></i>RND lengkap <span class="float-right"><?= $dashboardrnd['jumya'] ?> </span>
        </p>
        <p class="text-muted mt-3 mb-0 m-0">
          <i class="mdi mdi-gender-female mr-1" aria-hidden="true"></i>RND belum lengkap <span class="float-right"><?= $dashboardrnd['jumtidak'] ?> </span>
        </p>
      </div>
    </div>
  </div>
  <div class="col-xl-6 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
    <div class="card card-statistics">
      <div class="card-body">
        <div class="clearfix">
          <div class="float-left">
            <i class="mdi mdi-scale-balance text-danger icon-lg"></i>
          </div>
          <div class="float-right">
            <p class="mb-0 text-right">Total Saldo</p>
            <div class="fluid-container">
              <h3 class="font-weight-medium text-right mb-0"><?= $saldo ?></h3>
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