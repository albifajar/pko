<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?=base_url()?>/assets/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="<?=base_url()?>/assets/font-awesome/css/font-awesome.min.css"> 
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>/assets/css/style_index.css">
    <title>index </title>
  </head>
  <body>
  <div>
  <div id="particles-js" style="max-height: 100vh; overflow: hidden;">
   <div class="container">
     <div class="row justify-content-center">

    <?php foreach ($data as $row) :?>


       <div class="col-md-4">
         <div class="card mt-2 rounded">
          <img src="<?=base_url('uploads/img/')?><?=$row['gambar'][1]?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title text-center"><?=$row['nama'][0]?> & <br><?=$row['nama'][1]?></h5>
            <h5 class="card-title">Moto</h5>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua.</p>
<!--             <h5>Visi</h5>
            <p class="card-text"><?=$row['visi']?></p>
            <h5>Misi</h5>
            <p class="card-text"><?=$row['misi']?></p> -->
            <button class="btn btn-info px-4 btn-sm" id="modal">Visi-Misi</button>
            <a href="<?=base_url('user/set_pemilih')?>?id=<?=$this->input->cookie('kode')?>&&status=1&&on=<?=$row['id_calon']?>" class="btn btn-info px-4 btn-sm">Pilih</a>
          </div>
        </div>
       </div>
    <?php endforeach;?>
    </div>
  </div>
</div>