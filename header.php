<?php 
    error_reporting(E_ERROR);
    include "Carrito.php"; 
    include "connect.php";
    session_start();
    if($_SESSION['autenUsuario'] == "SI"){
        $login = 1;
        if($_SESSION['tipoUsuario'] == 1){
            $tipoUser = 1;
        }
        if($_SESSION['tipoUsuario'] == 2){
            $tipoUser = 2;
        }
    }
    else{
        $login = 0;
    }

    $sqlCate = "SELECT * FROM categorias WHERE id_padre = 0";
    $queryCate = mysql_query($sqlCate) or die(mysql_error());
    $cate = mysql_fetch_assoc($queryCate);

?>
<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->
	<head>
		<meta charset="utf-8" />
		<title>Torres Electronica</title>
		<meta name="keywords" content="HTML5,CSS3,Template" />
		<meta name="description" content="" />
		<meta name="Author" content="Dorin Grigoras [www.stepofweb.com]" />

		<!-- mobile settings -->
		<meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />
		<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

		<!-- WEB FONTS : use %7C instead of | (pipe) -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400%7CRaleway:300,400,500,600,700%7CLato:300,400,400italic,600,700" rel="stylesheet" type="text/css" />

		<!-- CORE CSS -->
		<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		
		<!-- THEME CSS -->
		<link href="assets/css/essentials.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/layout.css" rel="stylesheet" type="text/css" />

		<!-- PAGE LEVEL SCRIPTS -->
		<link href="assets/css/header-1.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/layout-shop.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/color_scheme/yellow.css" rel="stylesheet" type="text/css" id="color_scheme" />
        <script type="text/javascript" src="assets/plugins/jquery/jquery-2.2.3.min.js"></script>
        
	</head>
	<body class="smoothscroll enable-animation boxed pattern3">
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-89846637-1', 'auto');
          ga('send', 'pageview');

        </script>
		<!-- SLIDE TOP -->
		<div id="slidetop">

			<div class="container">
				
				<div class="row">

					<div class="col-md-4">
						<h6><i class="icon-heart"></i> Quienes Somos</h6>
						<p>Somos una empresa dedicada a la venta y comercializacion de productos electronicos. </p>
					</div>

					<div class="col-md-4">
						<h6><i class="icon-attachment"></i> Preguntas Frecuentes</h6>
						<ul class="list-unstyled">
							<li><a href="#"><i class="fa fa-angle-right"></i> Como comprar?</a></li>
							<li><a href="#"><i class="fa fa-angle-right"></i> Garantia de los productos? </a></li>
							<li><a href="#"><i class="fa fa-angle-right"></i> Reciben tarjetas  de crédito?</a></li>
							<li><a href="#"><i class="fa fa-angle-right"></i> Puedo cambiar el producto en cualquier sucursal?</a></li>
						</ul>
					</div>

					<div class="col-md-4">
						<h6><i class="icon-envelope"></i> CONTACTOS</h6>
						<ul class="list-unstyled">
							<li><b>Concepcion:</b> San Martin 1112, <br /> Centro, Concepción Tucumán</li>
							<li><b>Telefono:</b> 800-565-2390</li>
							<li><b>Email:</b> <a href="mailto:support@yourname.com">info@torreselectronica.com.ar</a></li>
						</ul>
					</div>

				</div>

			</div>

			<a class="slidetop-toggle" href="#"><!-- toggle button --></a>

		</div>
		<!-- /SLIDE TOP -->


		<!-- wrapper -->
		<div id="wrapper">

			<!-- Top Bar -->
			<div id="topBar" class="dark">
				<div class="container">

					<!-- right -->
					<ul class="top-links list-inline pull-right">
                        <?php if($login == 1){ ?>
						<li class="text-welcome hidden-xs">Bienvenido, <strong> <?php echo $_SESSION['nomUsuario']; ?></strong></li>
						<li>
							<a class="dropdown-toggle no-text-underline" data-toggle="dropdown" href="#"><i class="fa fa-user hidden-xs"></i> MI CUENTA</a>
							<ul class="dropdown-menu pull-right">
								<li><a tabindex="-1" href="#"><i class="fa fa-cog"></i> DATOS PERSONALES</a></li>
								<li class="divider"></li>
								<li><a tabindex="-1" href="logout.php"><i class="glyphicon glyphicon-off"></i> LOGOUT</a></li>
							</ul>
						</li>
                        <?php }if($login == 0){ ?>
						<li class="hidden-xs"><a href="registro.php">LOGIN/REGISTRO</a></li>
                        <?php } ?>
					</ul>
				</div>
			</div>
			<div id="header" class="sticky clearfix">
				<div class="search-box over-header">
					<a id="closeSearch" href="#" class="glyphicon glyphicon-remove"></a>
				</div>
				<header id="topNav">
					<div class="container">

						<!-- Mobile Menu Button -->
						<button class="btn btn-mobile" data-toggle="collapse" data-target=".nav-main-collapse">
							<i class="fa fa-bars"></i>
						</button>
						<ul class="pull-right nav nav-pills nav-second-main">
							<li class="quick-cart">
								<a href="#">
									<span class="badge badge-aqua btn-xs badge-corner"><?php  $carrito = new Carrito();
                                                $carro = $carrito->get_content();
                                            if(isset($carro)){
                                           echo $carrito->articulos_total(); } ?> </span>
									<i class="fa fa-shopping-cart"></i> 
								</a>
								<div class="quick-cart-box">
									<h4>Carro de Compras</h4>

									<div class="quick-cart-wrapper">
                                        <?php  $carrito = new Carrito();
                                                $carro = $carrito->get_content();
                                            if(isset($carro)){
                                           foreach($carro as $producto){?>    
                                            <a href="#"><!-- cart item -->
											 <img src="Administrador/assets/uploads/files/<?php echo $producto["imagen"];?>" width="45" height="45" alt="" />
											 <h6><span><?php echo $producto["cantidad"]; ?>x</span> <?php echo $producto["nombre"]; ?></h6>
										    </a>
                                        <?php }} ?> 
									</div>
									<div class="quick-cart-footer clearfix">
										<a href="shopcart.php" class="btn btn-primary btn-xs pull-right">Ver Carro</a>
									</div>
								</div>
							</li>
                            <li>
								<a href="panelLogin.php">
									<i class="fa fa-cogs"></i>
								</a>
							</li>
						</ul>
						<a class="logo pull-left" href="index.php">
							<img src="assets/images/logoTorres.png" alt="" />
						</a>
						<div class="navbar-collapse pull-right nav-main-collapse collapse">
							<nav class="nav-main">
								<ul id="topMain" class="nav nav-pills nav-main">
									<li class="dropdown active"><!-- HOME -->
										<a class="dropdown-toggle" href="#">
											PRODUCTOS
										</a>
										<ul class="dropdown-menu">
                                            <?php 
                                                do{ 
                                            ?>
											<li >
												<a href="categoria.php?idc=<?php echo $cate['id_cate']; ?>">
													<?php echo $cate['nombreCategoria']; ?>
												</a>
                                                <?php 
                                                    $cat =  $cate['id_cate'];
                                                    $sqlSCate = "SELECT * FROM categorias WHERE id_padre = '$cat'";
                                                    $querySCate = mysql_query($sqlSCate) or die(mysql_error());
                                                    $scate = mysql_fetch_assoc($querySCate);
                                                    $numscate = mysql_num_rows($querySCate);
                                                if($numscate <> 0){
                                                ?>
												<ul class="dropdown-menu">
													<?php 
                                                        do{ 
                                                    ?>
                                                        <li><a href="categoria.php?ids=<?php echo $scate['id_cate']; ?>"><?php echo $scate['nombreCategoria']; ?></a></li>
                                                    <?php 
                                                }while($scate = mysql_fetch_assoc($querySCate))
                                            ?>
												</ul>
                                                <?php } ?>
											</li>
                                            <li class="divider"></li>
                                            <?php 
                                                }while($cate = mysql_fetch_assoc($queryCate))
                                            ?>
										</ul>
									</li>
									<li class="dropdown"><!-- PAGES -->
										<a class="dropdown-toggle" href="nosotros.php">
											LA EMPRESA
										</a>
									</li>
                                    <li class="dropdown"><!-- PAGES -->
										<a class="dropdown-toggle" href="pagos.php">
											MEDIOS DE PAGO
										</a>
									</li>
                                    <li class="dropdown"><!-- PAGES -->
										<a class="dropdown-toggle" href="#">
											CONSULTANOS
										</a>
									</li>
								</ul>
							</nav>
						</div>
					</div>
				</header>
			</div>
		