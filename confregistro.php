<?php
    include 'header.php';
    $nombre = $_GET['nombre'];
?>
			<section class="page-header page-header-xs" style="background-color: gold;">
				<div class="container">
					<!-- breadcrumbs -->
					<ol class="breadcrumb">
						<li><a href="#">Home</a></li>
						<li class="active">Registro</li>
					</ol><!-- /breadcrumbs -->

				</div>
			</section>
			<!-- /PAGE HEADER -->

<section>
				<div class="container">
					
					<!-- CHECKOUT FINAL MESSAGE -->
					<div class="panel panel-default">
						<div class="panel-body">
							<h3>Gracias, <?php echo $nombre; ?>.</h3>

							<p>
								Te registraste correctamente en nuestro sitio. Podras realizar compras en nuestro sitio web.<br>
								Si queres comenzar ahora,  <a href="registro.php">inicia sesion</a>.
							</p>

							<hr>

							<p>
								Muchas gracias por confiar en nosotros,<br>
								<strong>Torres Electronica.</strong>
							</p>
						</div>
					</div>
					<!-- /CHECKOUT FINAL MESSAGE -->
					
				</div>
			</section>
<?php 
    include "footer.php";
?>