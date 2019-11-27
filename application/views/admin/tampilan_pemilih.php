<div class="container">
<a href="<?=base_url('admin/')?>tambah_kode" class="btn btn-success my-3">Tambah</a>
<table class="table" id="data">
<div class="my-3 text-center">
<button type="button" class="btn btn-success mr-3 btn-sm">
  Terpakai <span class="badge badge-light"><?=$data['terpakai']?></span>
</button>

<button type="button" class="btn btn-danger btn-sm">
  Belum Terpakai <span class="badge badge-light"><?=$data['belum_terpakai']?></span>
</button>
</div>
	<tr>
		<th>Kode</th>
		<th>Status</th>
	</tr>
	<?php foreach ($data as $row): ?>
		<tr>
			<td><?=$row['kode_unik']?></td>
			<td><?=$row['status_kode']?></td>
		</tr>
	<?php endforeach ?>
</table>
</div>
<script type="text/javascript" src="<?= base_url('assets/')?>bootstrap/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
  $(document).ready( function () {
    $('#data').DataTable();
} );
</script>