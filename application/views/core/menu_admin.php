<div class="side-bar float-left">
	<a href="<?= base_url('admin/')?>"><div class="text-light py-3 text-center title mt-5"><i style="font-size: 18pt" class="fa fa-tachometer"></i><br><b>Dashboard</b></div></a>
	<a href="<?= base_url('admin/pemilih')?>"><div class="text-light py-3 text-center title"><i style="font-size: 18pt" class="fa fa-list-alt"></i><br><b>Pemilih</b></div></a>
	<div class="dropright">
		<div class="text-light py-3 text-center title" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="cursor: pointer;"><i style="font-size: 18pt" class="fa fa-user"></i><br><b>Calon</b></div>
          <div class="dropdown-menu ml-2 subtitle">
          <a href="<?= base_url('admin/tampil_calon')?>"><div class="dropdown-item text-light"><i class="fa fa-users" aria-hidden="true" style="margin-right: 10px"></i><b>Tampil</b></div></a>
          <a href="<?= base_url('admin/tambah_calon')?>"><div class="dropdown-item text-light"><i class="fa fa-user-plus" aria-hidden="true" style="margin-right: 10px"></i><b>Tambah</b></div></a>
          </div>
	</div>
	<a href="<?= base_url('admin/statistik')?>"><div class="text-light py-3 text-center title active"><i style="font-size: 18pt" class="fa fa-bar-chart"></i><br><b>Statistik</b></div></a>
	<a href="<?= base_url('admin/keluar')?>"><div class="text-light py-3 text-center title logout"><i style="font-size: 18pt" class="fa fa-sign-out fa-flip-horizontal"></i><br><b>Keluar</b></div></a>
</div>