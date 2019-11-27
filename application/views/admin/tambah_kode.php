<div class="container">
<?= form_open('admin/tambah_kode');?>
<input type="hidden" name="codes" value="<?=$allkode?>">
<button type="submit" class="btn btn-light my-3">Simpan</button>
<?= form_close();?>

<?= form_open('', array('method' => 'get'));?>
<input type="number" min="1" class="form-control" value="<?=$this->input->get('jmlh')?>" name="jmlh">
<button type="submit" class="btn btn-primary my-3">Buat</button>
<?= form_close();?>
<table class="table" id="data">
	<tr>
		<th>Kode</th>
	</tr>
	<?php for ($i=0; $i < count($kode); $i++) :?>
		<tr>
			<td><?=$kode[$i]?></td>
		</tr>
	<?php endfor ?>
</table>
</div>
<script type="text/javascript" src="<?= base_url('assets/')?>bootstrap/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
  $(document).ready( function () {
    $('#data').DataTable();
} );
</script>