<div class="container my-5">
	<div class="row ">
		<?php foreach ($data as $row) :?>
		<div class="col-md-6 mt-3">
			<div class="card" style="width: 100%;">
			  <div class="card-header text-center">
			  	<h5 class="font-weight-bold"><?=$row['nomor']?></h5>
			  </div>
			  <div class="card-body">
			  	<div class="row mb-3">
			  		<div class="col">
					  	<img class="card-img-top mb-4" src="<?=base_url('uploads/img/')?><?=$row['gambar'][0]?>" alt="Card image cap">
					  	<h6 class="font-weight-bold"><?=$row['nama'][0]?></h6>
					  	<h6><?=$row['kelas'][0]?></h6>
			    		</table>
			    	</div>
			  		<div class="col">
					  	<img class="card-img-top mb-4" src="<?=base_url('uploads/img/')?><?=$row['gambar'][1]?>" alt="Card image cap">
					  	<h6 class="font-weight-bold"><?=$row['nama'][1]?></h6>
					  	<h6><?=$row['kelas'][1]?></h6>
			    		</table>
			    	</div>
				</div>
				<h5>Visi</h5>
			    <p class="card-text"><?=$row['visi']?></p>
				<h5>Misi</h5>
			    <p class="card-text"><?=$row['misi']?></p>
			    <div class="text-center"><a href="<?=base_url('user/set_pemilih')?>?id=<?=$this->input->cookie('kode')?>&&status=1&&on=<?=$row['id_calon']?>" class="btn btn-primary px-4 btn-sm">Pilih</a></div>
			  </div>
			</div>
		</div>
		<?php endforeach;?>
	</div>
</div>