<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <script src="<?=base_url()?>assets/jquery-3.4.1.min.js" ></script>
    <link rel="stylesheet" href="<?=base_url()?>assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>/assets/animate.css">

    <link rel="stylesheet" href="<?=base_url()?>assets/font-awesome/css/font-awesome.min.css">

    <link rel="stylesheet" href="<?=base_url()?>assets/sweetalert2/sweetalert2.min.css">
    <script src="<?=base_url()?>assets/sweetalert2/sweetalert2.all.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>/assets/css/style.css">
    <style type="text/css">
#particles-js::after{
  content: '';
  display: block;
  position: absolute;
  width: 100%;
  height: 100%;
  bottom: 0;
  background-image: linear-gradient(120deg,rgba(0,0,0,0.2),rgba(0,0,0,0.9));
  z-index: -1;
}


.login-box{
  background-color: #dddd;
  border-radius: 7px;
  padding: 7px;
  width: 300px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  border: 2px solid #e0ebeb;
}

.login-box .logo{
  width: 100px;
  height: 100px;
  border-radius: 50%;
  left: calc(50% - 50px);

}

.textbox{
  width: 100%;
  font-size: 20px;
  overflow: hidden;
  padding: 8px 0;
  margin: 8px 0;
  margin-top: 20px;
  padding-bottom: 10px;
  position: relative;
  z-index: 3;
}

.textbox input{
  width: 100%;
  outline: none;
  border:none;
  border-bottom: 1px solid  #adadad;
  z-index: -1;
}


.textbox span{
  background-color: ;
}
.textbox span::after{
  content: '';
  color: #adadad;
  position: absolute;
  width: 0%;
  height: 1px;
  background:#17a2b8;
  margin-top: 8px ;
  top: 65.5%;
  left:0px;
  z-index: 1;
  transition: .5s;
}

.focus + span::after{
  width: 100%;
}



.btn1{
  margin-top: 10px;
  width: 100%;
}

.sign{
  text-align: center;
  padding-top: 10px;
}
@media (max-width:767px) {

/*  .login-box{
    width: 30%;
    border: 2px solid #e0ebeb;
  }*/

  }
    </style>
    <title>pemilihan Log-in </title>
  </head>
  <body>
    <?=$alert?>
    <?= form_open()?>
    <div id="particles-js">
      <div class="login-box shadow p-4 mb-5 bg-white rounded text-center">
        <img src="<?=base_url()?>/assets/img/ifsu.png" class="logo">

       <div class="textbox">
         <div class="form-group">
           <label for="token" style="font-size: 12pt">Masukan Kode Dibawah</label>
           <input type="text" name="kode" autocomplete="off" maxlength="8" required>
           <span><!-- tong di hapus --></span>
         </div>
       </div>
      
       <button type="submit" class="btn btn-info btn1" name="masuk">Masuk</button>
     </div>
    </div>
    <?= form_close()?>
        <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
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