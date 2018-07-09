<!DOCTYPE html>
<html>
<head>
	<title>My Blog</title>
	<link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap.min.css'?>">
</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand">Tufiq</a>
      </div>
      <ul class="nav navbar-nav">
        <li><a href="#">Home</a></li>
        <?php 
          if($this->session->userdata('level') == 1){
            echo '<li><a href="blogger/create/">Tambah Artikel</a></li>';
          }
        ?>
      </ul>
  </div>
</nav>