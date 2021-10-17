<?php
		error_reporting(0);
		session_start();
		if ($_COOKIE["auth"] != "admin_in") {header("location:"."./");}
			include("includes/connect.php");
			include("includes/data.php");
			?>
			<!DOCTYPE html>
			<html lang="en">
			<head>
				<meta charset="utf-8">
				<meta http-equiv="X-UA-Compatible" content="IE=edge">
				<meta name="viewport" content="width=device-width, initial-scale=1">
				<meta name="author" content="@housamz">

				<meta name="description" content="Mass Admin Panel">
				<title>Insecdb Admin Panel</title>
				<link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/cosmo/bootstrap.min.css" rel="stylesheet" integrity="sha384-h21C2fcDk/eFsW9sC9h0dhokq5pDinLNklTKoxIZRUn3+hvmgQSffLLQ4G4l2eEr" crossorigin="anonymous">

				<!-- Custom CSS -->
				<link rel="stylesheet" href="includes/style.css">
				<link href="//cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css" />

				<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
				<!-- WARNING: Respond.js doesnt work if you view the page via file:// -->
				<!--[if lt IE 9]>
					<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
					<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
				<![endif]-->
			</head>

			<body>

			<div class="wrapper">
				<!-- Sidebar Holder -->
				<nav id="sidebar" class="bg-primary">
					<div class="sidebar-header">
						<h3>
							Insecdb Admin Panel<br>
							<i id="sidebarCollapse" class="glyphicon glyphicon-circle-arrow-left"></i>
						</h3>
						<strong>
							Insecdb<br>
							<i id="sidebarExtend" class="glyphicon glyphicon-circle-arrow-right"></i>
						</strong>
					</div><!-- /sidebar-header -->

					<!-- start sidebar -->
					<ul class="list-unstyled components">
						<li>
							<a href="home.php" aria-expanded="false">
								<i class="glyphicon glyphicon-home"></i>
								Home
							</a>
						</li>
			<li><a href="agencias.php"> <i class="glyphicon glyphicon-paperclip"></i>Agencias <span class="pull-right"><?=counting("agencias", "id")?></span></a></li>
<li><a href="elementos.php"> <i class="glyphicon glyphicon-font"></i>Elementos <span class="pull-right"><?=counting("elementos", "id")?></span></a></li>
<li><a href="estadous.php"> <i class="glyphicon glyphicon-flag"></i>Estadous <span class="pull-right"><?=counting("estadous", "id")?></span></a></li>
<li><a href="metaelemento.php"> <i class="glyphicon glyphicon-zoom-out"></i>Metaelemento <span class="pull-right"><?=counting("metaelemento", "id")?></span></a></li>
<li><a href="ss_estado.php"> <i class="glyphicon glyphicon-zoom-out"></i>Ss_estado <span class="pull-right"><?=counting("ss_estado", "id")?></span></a></li>
<li><a href="ss_opsvestimenta.php"> <i class="glyphicon glyphicon-stats"></i>Ss_opsvestimenta <span class="pull-right"><?=counting("ss_opsvestimenta", "id")?></span></a></li>
<li><a href="ss_solicitud.php"> <i class="glyphicon glyphicon-circle-arrow-right"></i>Ss_solicitud <span class="pull-right"><?=counting("ss_solicitud", "id")?></span></a></li>
<li><a href="ss_tipocobertura.php"> <i class="glyphicon glyphicon-ruble"></i>Ss_tipocobertura <span class="pull-right"><?=counting("ss_tipocobertura", "id")?></span></a></li>
<li><a href="ss_tiposervicio.php"> <i class="glyphicon glyphicon-align-right"></i>Ss_tiposervicio <span class="pull-right"><?=counting("ss_tiposervicio", "id")?></span></a></li>
<li><a href="tipoelemento.php"> <i class="glyphicon glyphicon-cutlery"></i>Tipoelemento <span class="pull-right"><?=counting("tipoelemento", "id")?></span></a></li>
<li><a href="tipous.php"> <i class="glyphicon glyphicon-italic"></i>Tipous <span class="pull-right"><?=counting("tipous", "id")?></span></a></li>
<li><a href="usermeta.php"> <i class="glyphicon glyphicon-arrow-down"></i>Usermeta <span class="pull-right"><?=counting("usermeta", "id")?></span></a></li>
<li><a href="users.php"> <i class="glyphicon glyphicon-export"></i>Users <span class="pull-right"><?=counting("users", "id")?></span></a></li>
<li><a href="usuarios.php"> <i class="glyphicon glyphicon-phone"></i>Usuarios <span class="pull-right"><?=counting("usuarios", "id")?></span></a></li>
<li><a href="versolicutudes.php"> <i class="glyphicon glyphicon-ruble"></i>Versolicutudes <span class="pull-right"><?=counting("versolicutudes", "id")?></span></a></li>
<li><a href="logout.php"><i class="glyphicon glyphicon-log-out"></i> Logout</a></li>
				</ul>

				<div class="visit">
					<p class="text-center">Created using MAGE &hearts;</p>
					<a href="https://github.com/housamz/php-mysql-admin-panel-generator" target="_blank" >Visit Project</a>
				</div>
			</nav><!-- /end sidebar -->

			<!-- Page Content Holder -->
			<div id="content">