<!doctype html>
<html class="no-js" lang="">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title></title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="manifest" href="site.webmanifest">
	<link rel="apple-touch-icon" href="icon.png">
	
	<style>
	 <?php
	 include("css/main.css"); 
	 include("css/content.css"); 
	 include("css/font-awesome.min.css"); 
	 ?>
 </style>
</head>
<body>
	<div class="template clear">
		<div class="header clear">
			<div class="icon">
				<?php 
				if(isset($_GET['url'])){
				   $url = $_GET['url'];
				   $url = rtrim($url,"/");
				   $url = explode('/', $url);
                   $result = $url['0'];
                   if($result == "admin"){ ?>
                     <a href="<?php echo BASE_URL;?>admin"><img src="https://avatars1.githubusercontent.com/u/25158?s=200&v=4" alt=""></a>
                <?php  }else{ ?>
                     <a href="<?php echo BASE_URL;?>"><img src="https://avatars1.githubusercontent.com/u/25158?s=200&v=4" alt=""></a>
                 <?php  } }else{ ?>
                  <a href="<?php echo BASE_URL;?>"><img src="https://avatars1.githubusercontent.com/u/25158?s=200&v=4" alt=""></a>
				<?php } ?>
			</div>
			<div class="right">
				<h2>Create my Dynamic MVC Framework with OOP php</h2>
			</div>
		</div>
		<div class="main-content clear">
 