<?php
    include 'header.php';
    $id = $_GET['id_pro'];
    $sqlArt = "SELECT * FROM productos WHERE id_pro = '$id'";
    $queryArt = mysql_query($sqlArt) or die(mysql_error());
    $Art = mysql_fetch_assoc($queryArt);
?>
	<section class="page-header page-header-xs" style="background-color: gold;">
				<div class="container">

					<h1><?php echo $Art['nombreProducto']; ?></h1>
				</div>
			</section>
<section>
				<div class="container">
					
					<div class="row">
					
						<!-- IMAGE -->
						<div class="col-lg-4 col-sm-4">
							<div class="thumbnail relative margin-bottom-3">
								<figure id="zoom-primary" class="zoom" data-mode="mouseover" style="position: relative; overflow: hidden;">
									<a class="lightbox bottom-right" href="Administrador/assets/uploads/files/<?php echo $Art['imagen'];?>" data-plugin-options="{&quot;type&quot;:&quot;image&quot;}"><i class="glyphicon glyphicon-search"></i></a>
									<img class="img-responsive" src="Administrador/assets/uploads/files/<?php echo $Art['imagen'];?>" width="360" height="360" alt="This is the product title">
								    <img src="Administrador/assets/uploads/files/<?php echo $Art['imagen'];?>" class="zoomImg" style="position: absolute; top: -109.571px; left: -377.929px; opacity: 0; width: 1000px; height: 1500px; border: none; max-width: none; max-height: none;"><img src="Administrador/assets/uploads/files/<?php echo $Art['imagen'];?>" class="zoomImg" style="position: absolute; top: -245.143px; left: -238.643px; opacity: 0; width: 1000px; height: 1500px; border: none; max-width: none; max-height: none;"></figure>
							</div>
						</div>
						<!-- /IMAGE -->
						<!-- ITEM DESC -->
						<div class="col-lg-5 col-sm-8">
							<div class="shop-item-price pull-right">
								$ <?php if($tipoUser == 1){echo $Art['precio_cliente'];}if($tipoUser == 2){echo $Art['precio_gremio'];}  ?>
							</div>
							<hr>
							<div class="clearfix margin-bottom-30">
								<span class="pull-right text-success"><i class="fa fa-check"></i> Con Stock</span>
								<strong><?php echo $Art['nombreProducto']; ?> - Cod. </strong> <?php echo $Art['codigo']; ?>
							</div>
							<?php echo $Art['descripcion']; ?>
							<hr>
                            <?php if($login == 1){ ?>
							<form class="clearfix form-inline nomargin pull-right" method="get" action="addCart.php">
								<input type="hidden" name="id_pro" value="<?php echo $Art['id_pro']; ?>">
                                <input type="number" name="cantProd" class="form-control pull-left" style="margin-right:15px;" value="1">
								<button class="btn btn-primary pull-left product-add-cart noradius">AGREGAR</button>
							</form>
                            <?php } ?>
							<div class="pull-left">
								<a href="#" class="social-icon social-icon-sm social-icon-transparent social-facebook pull-left" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook">
									<i class="icon-facebook"></i>
									<i class="icon-facebook"></i>
								</a>

								<a href="#" class="social-icon social-icon-sm social-icon-transparent social-twitter pull-left" data-toggle="tooltip" data-placement="top" title="" data-original-title="Twitter">
									<i class="icon-twitter"></i>
									<i class="icon-twitter"></i>
								</a>
							</div>
						</div>
						<div class="col-sm-4 col-md-3">

							<h4 class="size-18">
								<i class="fa fa-paper-plane-o"></i> 
								ENVIOS A TODO EL PAIS
							</h4>
							<p>Enviamos tu compra al destino que elijas.</p>

							<h4 class="size-18">
								<i class="fa fa-clock-o"></i>
								GARANTIA DE CALIDAD
							</h4>
							<p>Nuestros productos poseen garantía de fabricante.</p>

							<h4 class="size-18">
								<i class="fa fa-users"></i> 
								SOPORTE AL CLIENTE
							</h4>
							<p>Por cualquier duda comunicáte con nosotros.Un asesor te guiara en tu compra.-</p>

							<hr>

							<p class="size-11">
								Gracias por confiar en TORRES ELECTRONICA para su compra. 
							</p>
						</div>
					</div>
				</div>
			</section>
<?php 
    include "footer.php";
?>