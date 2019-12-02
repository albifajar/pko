<!DOCTYPE html>
<html>
<head>
  <title>Home | Belajar itu indah</title>  
  <script src="<?= base_url('assets/')?>jquery-3.4.1.min.js"></script>
  <link rel="stylesheet" href="<?= base_url('assets/')?>bootstrap/css/bootstrap.min.css"> 
  <link rel="stylesheet" href="<?= base_url('assets/')?>datatables/css/jquery.dataTables.min.css">
  <style>
  	.login{
  		box-shadow: 2px 2px 5px #333;
  		padding: 0 40px;
  		border-radius: 10px;
  	}
  	.line{
  		height: 4px;
  		width: 100%;
  		display: block;	
  		background-color: #333d;
  		margin: 20px 0px 15px;
  		animation: alfa 6s infinite;
  	}
@keyframes alfa {
    0% {background-color: #121267;}
    10% {background-color: #121277;}
    20% {background-color: #121287;}
    30% {background-color: #121297;}
    40% {background-color: #1212a7;}
    50% {background-color: #1212b7;}
    60% {background-color: #1212c7;}
    70% {background-color: #1212b7;}
    80% {background-color: #1212a7;}
    90% {background-color: #121297;}
    100% {background-color: #121287;}
}
.my-bg{
  		background-color: #121267;
  		color: #fff;
  		font-weight: bolder;
}
.my-bg:hover{
  		background-color: #121277;
  		color: #fff;
}
  </style>
}
</head>
<body>
	<div class="row justify-content-center">
		<div class="col-4 login pb-5 pt-3 my-5">
			<?= form_open('')?>
				<h2 class="font-weight-bolder">Login</h2>
				<span class="line"></span>
				<label for="username">Username</label>
				<input type="text" name="username" class="form-control" id="username">
				<label for="pass">Password</label>
				<input type="password" name="password" class="form-control" id="pass">
				<div class="text-center"><button type="submit" name="masuk" class="btn my-bg px-3 mt-4">Masuk</button></div>
			<?=form_close();?>
		</div>
	</div>
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="<?= base_url('assets/')?>bootstrap/js/bootstrap.min.js"></script>

</body>
</html>