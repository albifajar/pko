<!DOCTYPE html>
<html>
<head>
  <title>Home | Belajar itu indah</title>  
  <script src="<?= base_url('assets/')?>jquery-3.4.1.min.js"></script>
  <link rel="stylesheet" href="<?= base_url('assets/')?>bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?=base_url('assets/')?>font-awesome/css/font-awesome.min.css">  
  <link rel="stylesheet" href="<?=base_url('assets/')?>chart/chart.min.css">  
  <link rel="stylesheet" href="<?= base_url('assets/')?>datatables/css/jquery.dataTables.min.css">
  <style type="text/css">
  	.main{
  		width: 85%;
      margin: 0 2%;
  	}
  	.side-bar{
  		height: calc(113vh - 4rem);
      max-height: 100%;
  		min-width: 11%;
  		background-color: #121267;
  		position: sticky;
  		top: 0;
      z-index: 10;
  	}
    .side-bar .title, .side-bar .subtitle{
      background-color: #121267; 
      color: #fff
    }
    .side-bar .title:hover{
      background-color: #121287; 
      color: #fff
    }

    .side-bar a, .side-bar .title a{
      text-decoration: none; 
      color: #fff
    }
    .side-bar .subtitle .dropdown-item:hover{
      background-color: #121287;
    }
    .logout:hover{
      background-color: #871212;
    }
    .active{
      background-color: #121287;
    }
  </style>
</head>
<body>
<!-- <a href="<?= base_url('admin/pemilih')?>">pemilih</a>
<br>
<a href="<?= base_url('admin/tambah_calon')?>">calon</a>
<br>
<a href="<?= base_url('admin/statistik')?>">statistik</a> -->