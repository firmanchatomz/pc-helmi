<div class="row">
	<div class="col-md-12">
		<nav aria-label="breadcrumb">
		  <ol class="breadcrumb">
		    <li class="breadcrumb-item"><a href="<?= base_url('admin/lihatberita') ?>">Berita</a></li>
		    <li class="breadcrumb-item active" aria-current="page"><?= $berita->judul_berita ?></li>
		  </ol>
		</nav>
		<hr>
		<h2 class="text-capitalize"><?= $berita->judul_berita ?></h2>
		<img src="<?= base_url('assets/img/berita/'.$berita->gambar) ?>" alt="" width="100%">
	</div>
</div>
<div class="row my-3">
	<div class="col-md-12">
		<header class="text-small mb-3">
			<i class="fa fa-calender"></i>Tanggal dibuat : <?= date_indo($berita->tgl_dibuat) ?>
		</header>
		<?= $berita->isi_berita ?>
	</div>
</div>