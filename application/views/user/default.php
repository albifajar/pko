<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <script src="<?=base_url()?>assets/jquery-3.4.1.min.js" ></script>
    <link rel="stylesheet" href="<?=base_url()?>assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/animate.css">

    <link rel="stylesheet" href="<?=base_url()?>assets/font-awesome/css/font-awesome.min.css">

    <link rel="stylesheet" href="<?=base_url()?>assets/sweetalert2/sweetalert2.min.css">
    <script src="<?=base_url()?>assets/sweetalert2/sweetalert2.all.min.js"></script> 
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
            <button class="btn btn-info btn-lg" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal<?=$row['id_calon']?>">Visi-Misi</button>
            <button id="pilih<?=$row['id_calon']?>" class="btn btn-info px-4 btn-lg">Pilih</button>
          </div>
        </div>
       </div>
      <script type="text/javascript">
        $("#pilih<?=$row['id_calon']?>").on('click', function(){
          Swal.fire({
          title: 'Apa anda yakin dengan pilihannya?',
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonText: 'Tidak',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yakin!', showClass: {popup: 'animated zoomIn faster'},hideClass: {popup: 'animated zoomOut faster'}
          }).then((result) => {
          if (result.value) {
            location.href = "<?=base_url('user/set_pemilih')?>?id=<?=$this->input->cookie('kode')?>&&status=1&&on=<?=$row['id_calon']?>";
          }
        })
      })
    </script>
    <?php endforeach;?>
    </div>
  </div>

    <?php foreach ($data as $row) :?>
          <!-- Modal -->

                    <div class="modal animated zoomIn faster" id="exampleModal<?=$row['id_calon']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered role="document">
              <div class="modal-content">
                <div class="modal-body px-5 py-3">
                  <h5>Visi</h5>
                  <p class="card-text"><?=$row['visi']?></p>
                  <h5>Misi</h5>
                  <p class="card-text"><?=$row['misi']?></p>
                  <div class="text-center"><button type="button" class="btn btn-lg" style="background-color: #d33; color: #fff; font-weight: 83px;" data-dismiss="modal">Tutup</button>
                  </div>
                </div>
              </div>
            </div>
          </div>

    <?php endforeach;?>

</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?=base_url()?>/assets/bootstrap/jquery-slim.min.js" ></script>
    <script src="<?=base_url()?>/assets/bootstrap/pooper.min.js"></script>
    <script src="<?=base_url()?>/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?=base_url()?>/assets/js/particles.min.js"></script>
    <script src="<?=base_url()?>/assets/js/app.js"></script>
    <script src="<?=base_url()?>/assets/js/script.js"></script>
    
    <script type="text/javascript">
      $(".textbox input").focus(function(){
        $(this).addClass("focus");
        $(".textbox input").css("border-bottom","1px solid white");
      });
    </script>

   
  </body>
</html>