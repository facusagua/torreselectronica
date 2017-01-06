<?php
    include 'header.php';
    $sqlMarcas = "SELECT garantia FROM config";
    $queryMarcas = mysql_query($sqlMarcas) or die(mysql_error());
    $Marcas = mysql_fetch_assoc($queryMarcas);
?>
		<!-- SLIDER -->
			<section class="padding-top-40">
				<div class="container">

					<!-- OWL SLIDER -->
					<div class="owl-carousel buttons-autohide controlls-over nomargin" data-plugin-options='{"items": 1, "autoHeight": false, "navigation": true, "pagination": false, "transitionStyle":"fade", "progressBar":"true"}'>

						<div>
							<img class="img-responsive" src="assets/images/banner-1.jpg" alt="">
						</div>
						<a href="#">
							<img class="img-responsive" src="assets/images/banner-2.jpg" alt="">
						</a>
					</div>
					<!-- /OWL SLIDER -->


					<!-- INFO BAR -->
					<div class="info-bar info-bar-clean info-bar-bordered nomargin-bottom" style="background-color: gold;">
						<div class="container">

							<div class="row">

								<div class="col-sm-4">
									<i class="glyphicon glyphicon-globe"></i>
									<h3>EVIOS A DOMICILIO</h3>
									<p>A todo el país</p>
								</div>

								<div class="col-sm-4">
									<i class="glyphicon glyphicon-usd"></i>
									<h3>MEDIOS DE PAGOS SEGUROS</h3>
									<p>Mercado Pago y Todo Pago</p>
								</div>

								<div class="col-sm-4">
									<i class="glyphicon glyphicon-flag"></i>
									<h3>GARANTIA DE COMPRA</h3>
									<p>Devolvemos tu dinero para compras con garantía</p>
								</div>

							</div>

						</div>
					</div>
				</div>
</section>
			<section>
				<div class="container">
					<?php do{ 
                            echo $Marcas['garantia'];
                            }WHILE($Marcas = mysql_fetch_assoc($queryMarcas))
                    ?>        
                <hr>
				</div>
			</section>
<?php 
    include "footer.php";
?>