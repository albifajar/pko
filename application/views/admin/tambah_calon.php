<div class="main float-right">
<?= form_open_multipart();?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark row justify-content-end fixed-top" style="z-index: 2">
	<div class="col-6 text-right"><button class="btn btn-light my-sm-0" type="submit">Simpan</button></div>
</nav>
<div style=" padding: 30px 0 50px; margin-top: 50px">
<div class="container mt-2">
<h3 class="mb-5 font-weight-bold">Tambah Data<br><small>Calon Ketua dan Wakil Ketua</small></h3>
	<div class="card">
	  <div class="card-body">
	  	<label for="nomor">Nomor Urut</label>
		<input type="number" id="nomor" name="nomor" min="1" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
	  	<label for="gambar" class="mt-3">Gambar</label>
		<div class="custom-file">
		<input type="file" name="gambar_k" class="custom-file-input" id="gambar" aria-describedby="Gambar_kFile">
			<label class="custom-file-label" for="gambar_k">Choose file</label>
		</div>
	  </div>
	</div>
	<div class="row my-4">
		<div class="col-md-6 my-2">
			<div class="card" style="width: 100%;">  
			  <div class="card-header">
			    <h5 class="card-title"> Calon Ketua Osis</h5>
			  </div>
			  <div class="card-body">
				<div class="input-group mb-3">
				  <div class="input-group-prepend">
				    <span class="input-group-text" id="nama_k">Nama</span>
				  </div>
				  <input type="text" class="form-control" name="nama_k" aria-label="Sizing example input" aria-describedby="nama_k">
				</div>
			  </div>
			</div>
		</div>
		<div class="col-md-6 my-2">
			<div class="card" style="width: 100%;">  
			  <div class="card-header">
			    <h5 class="card-title">Calon Wakil Ketua Osis</h5>
			  </div>
			  <div class="card-body">
				<div class="input-group mb-3">
				  <div class="input-group-prepend">
				    <span class="input-group-text" id="nama_wk">Nama</span>
				  </div>
				  <input type="text" class="form-control" name="nama_wk" aria-label="Sizing example input" aria-describedby="nama_wk">
				</div>
			  </div>
			 </div>
		</div>
	</div>
	<div class="card mt-1">
	  <div class="card-body">
	    <div class="form-group">
		    <label for="visi"><h5 class="card-title">Visi</h5></label>
		    <textarea id="visi" class="form-control" rows="5" name="visi"></textarea>
  		</div> 
	    <div class="form-group">
		    <label for="misi"><h5 class="card-title">Misi</h5></label>
		    <textarea id="misi" class="form-control" rows="5" name="misi"></textarea>
  		</div>
	  </div>
	</div>
</div>
</div>
<?=form_close();?>
</div>