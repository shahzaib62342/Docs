<!DOCTYPE html>
<html lang="en">
<head>
	<title>Venuehook Documentation</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="shortcut icon" href="favicon.ico">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
	<!-- FontAwesome JS -->
	<script defer src="https://use.fontawesome.com/releases/v5.8.2/js/all.js"></script>
	<!-- Global CSS -->
	<link rel="stylesheet" href="<?= base_url('Assets/plugins/bootstrap/css/bootstrap.min.css') ?>">
	<!-- Plugins CSS -->
	<link rel="stylesheet" href="<?= base_url('Assets/plugins/prism/prism.css') ?>">
	<link rel="stylesheet" href="<?= base_url('Assets/plugins/elegant_font/css/style.css') ?>">

	<!-- Theme CSS -->
	<link id="theme-style" rel="stylesheet" href="<?= base_url('Assets/css/styles.css') ?>">

</head>
<body class="body-green">
	<div class="page-wrapper">
	<!-- ******Header****** -->
	<header id="header" class="header">
		<div class="container">
			<div class="branding">
				<h1 class="logo">
					<a href="<?= site_url("Documentation/")?>">
						<span aria-hidden="true" class="icon_documents_alt icon"></span>
						<span class="text-highlight">Venuehook</span><span class="text-bold"> Docs </span>
					</a>
				</h1>

			</div><!--//branding-->

			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="<?= site_url("Documentation/")?>">Home</a></li>
				<li class="breadcrumb-item active"></li>
			</ol>

			<div class="top-search-box">

				<form class="form-inline search-form justify-content-center" action="<?php echo site_url('Documentation/index');?>" method="get">
					
					<input type="text" placeholder="Search..." name="keyword" class="form-control search-input">
					<input type="submit" class="btn search-btn " value="Search">

				</form>
			</div>

		</div>
	</header>