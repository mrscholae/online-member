<?php
    function rupiah($angka){
        $hasil_rupiah = "Rp" . number_format($angka,0,',','.');
        return $hasil_rupiah;
    }

    function angka_arab($data){
        $data = str_replace("0", "٠", $data);
        $data = str_replace("1", "١", $data);
        $data = str_replace("2", "٢", $data);
        $data = str_replace("3", "٣", $data);
        $data = str_replace("4", "٤", $data);
        $data = str_replace("5", "٥", $data);
        $data = str_replace("6", "٦", $data);
        $data = str_replace("7", "٧", $data);
        $data = str_replace("8", "٨", $data);
        $data = str_replace("9", "٩", $data);

        return $data;
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    
    <!-- Custom fonts for this template-->
    <link href="<?= base_url()?>assets/css/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url()?>assets/bootstrap/css/bootstrap.min.css">
    
    <script src="<?= base_url()?>assets/jquery/jquery-3.5.1.min.js"></script>
    <script src="<?= base_url()?>assets/jquery/popper.min.js"></script>
    <script src="<?= base_url()?>assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?= base_url()?>assets/jquery/jquery.mCustomScrollbar.concat.min.js"></script>
    
    <link href="<?= base_url()?>assets/css/style.css" rel="stylesheet">
    <link href="<?= base_url()?>assets/css/style3.css" rel="stylesheet">
    
    <script src="<?= base_url()?>assets/jquery/sweetalert2@9.js"></script>
    
    <script src="<?= base_url()?>assets/js/script.js"></script>
    
    <link rel="icon" href="<?= base_url()?>assets/img/logo.png" type="image/icon type">
    <title><?= $title?></title>
</head>

<body style="background-color: #265D5A">

<div class="wrapper">
    <!-- Sidebar  -->

    <!-- Page Content  -->
    <div id="content">