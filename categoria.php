<?php
    include 'header.php';
    if(isset($_GET['idc'])){
        $cat = $_GET['idc'];
        $sqlCat = "SELECT * FROM productos p JOIN categorias c ON (p.id_cate = c.id_cate) WHERE c.id_padre = '$cat'";
    }
     if(isset($_GET['ids'])){
        $cat = $_GET['ids'];
        $sqlCat = "SELECT * FROM productos p JOIN categorias c ON (p.id_cate = c.id_cate) WHERE p.id_cate = '$cat'";
     }
    $queryProd = mysql_query($sqlCat) or die(mysql_error());
?>
<!-- SLIDER -->
			<section class="padding-top-40">
				<div >

					<!-- OWL SLIDER -->
					<div class="owl-carousel buttons-autohide controlls-over nomargin" data-plugin-options='{"items": 1, "autoHeight": false, "navigation": true, "pagination": false, "transitionStyle":"fade", "progressBar":"true"}'>

						<div>
							<img class="img-responsive" src="assets/images/banner-1.png" alt="">
						</div>
                        <div>
							<img class="img-responsive" src="assets/images/banner-4.png" alt="">
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
				<div class="text-center margin-top-30 margin-bottom-30">
	<div class="owl-carousel nomargin" data-plugin-options='{"singleItem": false, "autoPlay": true}'>
		<div>
			<img class="img-responsive" src="assets/images/marcas/marcas-1.png" alt="">
		</div>
		<div>
			<img class="img-responsive" src="assets/images/marcas/marcas-2.png" alt="">
		</div>
		<div>
			<img class="img-responsive" src="assets/images/marcas/marcas-3.png" alt="">
		</div>
		<div>
			<img class="img-responsive" src="assets/images/marcas/marcas-4.png" alt="">
		</div>
		<div>
			<img class="img-responsive" src="assets/images/marcas/marcas-5.png" alt="">
		</div>
		<div>
			<img class="img-responsive" src="assets/images/marcas/marcas-6.png" alt="">
		</div>
		<div>
			<img class="img-responsive" src="assets/images/marcas/marcas-7.png" alt="">
		</div>
		<div>
			<img class="img-responsive" src="assets/images/marcas/marcas-8.png" alt="">
		</div>
	</div>
</div>

				</div>
			</section>
<!-- /SLIDER -->
<section class="nopadding-bottom">
				<div class="container">
					<div class="row">
						<div class="col-sm-9 col-sm-push-3">
							<h1 class="size-17 margin-bottom-20">PRODUCTOS</h1>
                            <ul class="shop-item-list row list-inline nomargin">
						<!-- ITEM -->
						<?php while($Prod = mysql_fetch_assoc($queryProd)){ ?>
                        <li class="col-lg-3 col-sm-4">
							<div class="shop-item" style="background-color:#eef0f2; height:450px;">
								<div class="thumbnail noborder nopadding">
									<!-- product image(s) -->
									<a class="shop-item-image" href="articulo.php?id_pro=<?php echo $Prod['id_pro']; ?>">
										<img src="Administrador/assets/uploads/files/<?php echo $Prod['imagen']; ?>" alt="" width="200px" height="200px">
									</a>
									<div class="shop-option-over">
										<a class="btn btn-default" href="#"><i class="fa fa-cart-plus size-18"></i></a>
									</div>
								</div>
								<div class="shop-item-summary text-center">
									<h2 class="size-14"><?php echo substr($Prod['nombreProducto'],0,35); ?></h2>
									<div>
										<?php echo $Prod['descripcionCorta']; ?>
									</div>
									<?php if($login == 1){ ?>
									<div class="shop-item-price">
										$ <?php if($tipoUser == 1){echo $Prod['precio_cliente'];}if($tipoUser == 2){echo $Prod['precio_gremio'];}  ?>
									</div>
                                    <?php } ?>
								</div>
							</div>
						</li>
                        <?php } ?>        
					</ul>
						</div>
						
						<div class="col-sm-3 col-sm-pull-9">
							<div class="side-nav margin-bottom-60">

								<div class="side-nav-head">
									<button class="fa fa-bars"></button>
									<h4>CATEGORIAS</h4>
								</div>
								<ul class="list-group list-group-bordered list-group-noicon uppercase">
                                    <?php
                                        mysql_data_seek($queryCate, 0);
                                        while($cate = mysql_fetch_assoc($queryCate)){ 
                                    ?>
									<li class="list-group-item">
										<a class="dropdown-toggle" href="categoria.php?idc=<?php echo $cate['id_cate']; ?>">
													<?php echo $cate['nombreCategoria']; ?>
												</a>
                                                <?php 
                                                    $cat =  $cate['id_cate'];
                                                    $sqlSCate = "SELECT * FROM categorias WHERE id_padre = '$cat'";
                                                    $querySCate = mysql_query($sqlSCate) or die(mysql_error());
                                                    $numscate = mysql_num_rows($querySCate);
                                                if($numscate <> 0){
                                                ?>
										<ul>
                                            <?php 
                                                while($scate = mysql_fetch_assoc($querySCate)){ 
                                            ?>
                                            <li><a href="categoria.php?ids=<?php echo $scate['id_cate']; ?>"><?php echo $scate['nombreCategoria']; ?></a></li>
                                            <?php 
                                                }
                                            ?>
								        </ul>
                                       <?php } ?>
									</li>
                                    <?php 
                                        }
                                    ?>
								</ul>

							</div>
							<!-- /CATEGORIES -->
							<!-- BANNER ROTATOR -->
							<div class="owl-carousel buttons-autohide controlls-over margin-bottom-60 text-center" data-plugin-options='{"singleItem": true, "autoPlay": 4000, "navigation": true, "pagination": false, "transitionStyle":"goDown"}'>
								<a href="#">
									<img class="img-responsive" src="assets/images/demo/shop/banners/off_1.png" width="270" height="350" alt="">
								</a>
								<a href="#">
									<img class="img-responsive" src="assets/images/demo/shop/banners/off_2.png" width="270" height="350" alt="">
								</a>
							</div>
							<!-- /BANNER ROTATOR -->


							<!-- FREE RETURNS -->
							<div class="margin-bottom-60">
								<h4>GARANTIAS Y DEVOLUCIONES</h4>
								<p class="nomargin">Nuestros productos cuentan con garantía de fabrica y las devoluciones o RMA son a cargo de la empresa.</p>
								<a href="#">Politica de Garantía &raquo;</a>
							</div>
							<!-- /FREE RETURNS -->

						</div>

					</div>

				</div>
			</section>
			<!-- /FEATURED -->
<section>
				<div class="container">
				<div class="text-center margin-top-30 margin-bottom-30">
	<div class="owl-carousel nomargin" data-plugin-options='{"singleItem": false, "autoPlay": true}'>
		<div>
			<img class="img-responsive" src="assets/images/marcas/marcas-1.png" alt="">
		</div>
		<div>
			<img class="img-responsive" src="assets/images/marcas/marcas-2.png" alt="">
		</div>
		<div>
			<img class="img-responsive" src="assets/images/marcas/marcas-3.png" alt="">
		</div>
		<div>
			<img class="img-responsive" src="assets/images/marcas/marcas-4.png" alt="">
		</div>
		<div>
			<img class="img-responsive" src="assets/images/marcas/marcas-5.png" alt="">
		</div>
		<div>
			<img class="img-responsive" src="assets/images/marcas/marcas-6.png" alt="">
		</div>
		<div>
			<img class="img-responsive" src="assets/images/marcas/marcas-7.png" alt="">
		</div>
		<div>
			<img class="img-responsive" src="assets/images/marcas/marcas-8.png" alt="">
		</div>
	</div>
</div>

				</div>
			</section>
<?php 
    include "footer.php";
?>