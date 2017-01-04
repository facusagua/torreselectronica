<?php
    include 'header.php';
    $totalCompra = $_GET['total'];
    $idUsuario = $_SESSION['idUsuario'];

    $productos = "SELECT * FROM clientes WHERE id_cli = '$idUsuario'";
    $sqlProductos =  mysql_query($productos) or die(mysql_error());
    $row = mysql_fetch_array($sqlProductos);
?>
			<section class="page-header page-header-xs" style="background-color: gold;">
				<div class="container">
					<!-- breadcrumbs -->
					<ol class="breadcrumb">
						<li><a href="#">Home</a></li>
						<li><a href="#">Shop</a></li>
						<li class="active">Checkout</li>
					</ol><!-- /breadcrumbs -->

				</div>
			</section>
			<!-- /PAGE HEADER -->
			<!-- CART -->
			<section>
				<div class="container">
					<!-- CHECKOUT -->
					<form class="row clearfix">

						<div class="col-lg-7 col-sm-7">
							<div class="heading-title">
								<h4>Pago &amp; Envio</h4>
							</div>


							<!-- BILLING -->
							<fieldset class="margin-top-60">
								<div class="row">
									<div class="col-md-12 col-sm-12">
										<label for="billing_firstname">Nombres y Apellidos *</label>
										<input name="nomyap" type="text" class="form-control" value="<?php echo $row['nomyap']; ?>" disabled />
									</div>
								</div>

								<div class="row">
									<div class="col-md-12 col-sm-12">
										<label for="billing_email">Email *</label>
										<input name="email" type="text" class="form-control" value="<?php echo $row['email']; ?>" disabled />
									</div>
								</div>

								<div class="row">
									<div class="col-lg-12">
										<label for="billing_address1">Domicilio *</label>
										<input name="domicilio" type="text" class="form-control"  value="<?php echo $row['domicilio']; ?>" disabled />
									</div>
								</div>

								<div class="row">
									<div class="col-md-6 col-sm-6">
										<label for="billing_city">Ciudad *</label>
										<input name="ciudad" type="text" class="form-control" value="<?php echo $row['localidad']; ?>" disabled />
									</div>
									<div class="col-md-6 col-sm-6">
										<label for="billing_state">Provincia *</label>
										<input type="text" class="form-control" value="<?php echo $row['provincia']; ?>" disabled />
									</div>
								</div>

								<div class="row">
									<div class="col-md-6 col-sm-6">
										<label for="billing_zipcode">Codigo Postal *</label>
										<input name="cp" type="text" class="form-control" value="<?php echo $row['cp']; ?>" disabled />
									</div>
                                    <div class="col-md-6 col-sm-6">
										<label for="billing_phone">Telefono *</label>
										<input name="telefono" type="text" class="form-control" value="<?php echo $row['tel']; ?>" disabled />
									</div>
								</div>
								<hr />
							</fieldset>
							<!-- /BILLING -->
						</div>
                    </form>            

                    <form class="row clearfix" method="GET" action="vender.php">
						<div class="col-lg-5 col-sm-5">
							<div class="heading-title">
								<h4>Metodo de Pago</h4>
							</div>

							<!-- PAYMENT METHOD -->
							<fieldset class="margin-top-60">
								<div class="toggle-transparent toggle-bordered-full clearfix">
									<div class="toggle active">
										<div class="toggle-content">

											<div class="row nomargin-bottom">
												<div class="col-lg-12 nomargin clearfix">
													<label class="radio pull-left nomargin-top">
														<input name="metodoPago" type="radio" value="local" checked="checked" />
														<i></i> <span class="weight-300">Efectivo/Tarjeta en Local</span>
													</label>
												</div>
												<div class="col-lg-12 nomargin clearfix">
													<label class="radio pull-left">
														<input name="metodoPago" type="radio" value="mercadopago" />
														<i></i> <span class="weight-300">Mercado Pago</span>
													</label>
												</div>
											</div>
										<input name="totalCompra" type="hidden" value="<?php echo $totalCompra;?>" />
										</div>
									</div>
								</div>
							</fieldset>
							<!-- /PAYMENT METHOD -->

							<!-- TOTAL / PLACE ORDER -->
							<div class="toggle-transparent toggle-bordered-full clearfix">
								<div class="toggle active">
									<div class="toggle-content">
										<hr />

										<span class="clearfix">
											<span class="pull-right size-20">$<?php echo $totalCompra;?></span>
											<strong class="pull-left">TOTAL:</strong>
										</span>

										<hr />

										<button class="btn btn-primary btn-lg btn-block size-15"><i class="fa fa-mail-forward"></i> Pagar Ahora</button>
									</div>
								</div>
							</div>
							<!-- /TOTAL / PLACE ORDER -->
					</form>
					<!-- /CHECKOUT -->
					
				</div>
			</section>
			<!-- /CART -->
<?php 
    include "footer.php";
?>