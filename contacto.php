<?php
    include 'header.php';
    $sqlMarcas = "SELECT garantia FROM config";
    $queryMarcas = mysql_query($sqlMarcas) or die(mysql_error());
    $Marcas = mysql_fetch_assoc($queryMarcas);

     $sqlSlider = "SELECT * FROM slider";
    $querySlider = mysql_query($sqlSlider) or die(mysql_error());
    $Slider = mysql_fetch_assoc($querySlider);
?>
		<!-- SLIDER -->
					<section class="padding-top-40">
				<div >

					<!-- OWL SLIDER -->
					<div class="owl-carousel buttons-autohide controlls-over nomargin" data-plugin-options='{"items": 1, "autoHeight": false, "navigation": true, "pagination": false, "transitionStyle":"fade", "progressBar":"true"}'>
                        <?php do{?>    
						<div>
							<img class="img-responsive" src="Administrador/assets/uploads/slider/<?php echo $Slider['imagen']; ?>" alt="">
						</div>
                       <?php }while($Slider = mysql_fetch_assoc($querySlider)) ?>
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
					
					<div class="row">
                        <div class="col-md-2 col-sm-2"></div>    
						<!-- FORM -->
						<div class="col-md-8 col-sm-8">

							<h3><strong>Contáctanos</strong></h3>

							<div id="alert_success" class="alert alert-success margin-bottom-30">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
								<strong>Thank You!</strong> Your message successfully sent!
							</div><!-- /Alert Success -->


							<!-- Alert Failed -->
							<div id="alert_failed" class="alert alert-danger margin-bottom-30">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
								<strong>[SMTP] Error!</strong> Internal server error!
							</div><!-- /Alert Failed -->


							<!-- Alert Mandatory -->
							<div id="alert_mandatory" class="alert alert-danger margin-bottom-30">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
								<strong>Sorry!</strong> You need to complete all mandatory (*) fields!
							</div><!-- /Alert Mandatory -->


							<form action="php/contact.php" method="post" enctype="multipart/form-data">
								<fieldset>
									<input type="hidden" name="action" value="contact_send">

									<div class="row">
										<div class="form-group">
											<div class="col-md-4">
												<label for="contact:name">Nombre y Apellido *</label>
												<input required="" type="text" value="" class="form-control" name="contact[name][required]" id="contact:name">
											</div>
											<div class="col-md-4">
												<label for="contact:email">E-mail Address *</label>
												<input required="" type="email" value="" class="form-control" name="contact[email][required]" id="contact:email">
											</div>
											<div class="col-md-4">
												<label for="contact:phone">Telefono</label>
												<input type="text" value="" class="form-control" name="contact[phone]" id="contact:phone">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="form-group">
											<div class="col-md-12">
												<label for="contact:message">Mensaje *</label>
												<textarea required="" maxlength="10000" rows="8" class="form-control" name="contact[message]" id="contact:message"></textarea>
											</div>
										</div>
									</div>
								</fieldset>

								<div class="row">
									<div class="col-md-12">
										<button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Enviar</button>
									</div>
								</div>
							</form>

						</div>
						<!-- /FORM -->


						<!-- INFO -->
						<div class="col-md-2 col-sm-2"></div>
						<!-- /INFO -->

					</div>

				</div>
			</section>
<?php 
    include "footer.php";
?>