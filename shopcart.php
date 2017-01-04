<?php
    include 'header.php';
?>
		<section class="page-header page-header-xs" style="background-color: gold;">
				<div class="container">
					<!-- breadcrumbs -->
					<ol class="breadcrumb">
						<li><a href="#">Home</a></li>
						<li><a href="#">Shop</a></li>
					</ol><!-- /breadcrumbs -->

				</div>
			</section>
<section>			<!-- CART -->
			<section>
				<div class="container">
                    <?php  $carrito = new Carrito();
                           $carro = $carrito->get_content();
                           if(empty($carro)){
                    ?> 
					<!-- EMPTY CART -->
					<div class="panel panel-default">
						<div class="panel-body">
							<strong>Su carrito esta Vacío!</strong><br />
							Seleccione los productos que desea comprar.<br />
							Haga click <a href="index.php">AQUI</a> para continuar comprando. <br />
						</div>
					</div>
					<!-- /EMPTY CART -->

                    <?php }else{ ?> 

					<!-- CART -->
					<div class="row">

						<!-- LEFT -->
						<div class="col-lg-9 col-sm-9">

							<!-- CART -->
							<form class="cartContent clearfix" method="post" action="#">

								<!-- cart content -->
								<div id="cartContent">
									<!-- cart header -->
									<div class="item head clearfix">
										<span class="cart_img"></span>
										<span class="product_name size-13 bold">PRODUCTO</span>
										<span class="remove_item size-13 bold"></span>
                                        <span class="remove_item size-13 bold"></span>
										<span class="total_price size-13 bold">TOTAL</span>
										<span class="qty size-13 bold">CANTIDAD</span>
									</div>
									<!-- /cart header -->
                                    <?php  $carrito = new Carrito();
                                           $carro = $carrito->get_content();
                                            $totalCompra = 0;
                                           foreach($carro as $producto){  $totalProd = 0;?> 
									<!-- cart item -->
									<div class="item">
                                        <form action="editItemCart.php" method="GET">
                                            <div class="cart_img pull-left width-100 padding-10 text-left"><img src="Administrador/assets/uploads/files/<?php echo $producto['imagen'];?>" alt="" width="80" /></div>
                                                <span><?php echo $producto["nombre"]; ?></span>
                                            <a href="delItemCart.php?id=<?php echo $producto["unique_id"]; ?>" class="remove_item"><i class="fa fa-times"></i></a>
                                            <button class="remove_item" type="submit" style="margin-top: 10px"><i class="fa fa-refresh"></i></button>
                                            <div class="total_price">$<span><?php $totalProd = $producto["cantidad"]* $producto["precio"]; echo $totalProd; ?></span></div>
                                            <div class="qty"><input type="number" name="cantProd" value="<?php echo $producto["cantidad"]; ?>" name="qty" maxlength="3" max="999" min="1" /> &times; $<?php echo $producto["precio"]; ?></div>
                                            <input type="hidden" name="id" value="<?php echo $producto["id"]; ?>">
                                            <input type="hidden" name="uid" value="<?php echo $producto["unique_id"]; ?>"> 
										    <div class="clearfix"></div>
                                        </form>     
									</div>
                                    <?php $totalCompra = $totalCompra + $totalProd;} ?>
									<!-- /update cart -->

									<div class="clearfix"></div>
								</div>
								<!-- /cart content -->
							</form>
                            <a href="cleanCart.php"><button class="btn btn-danger margin-top-20 margin-right-10 pull-right"><i class="glyphicon glyphicon-remove"></i> LIMPIAR</button></a>
                        </div>
                        <div class="col-lg-3 col-sm-4">
							<div class="toggle-transparent toggle-bordered-full clearfix">
								<div class="toggle active">
									<div class="toggle-content" style="display: block;">
                                        <h5>Resumen</h5>
										<hr>
										<span class="clearfix">
											<span class="pull-right size-20">$ <?php  
                                             
                                            echo $totalCompra; 
                                            ?></span>
											<strong class="pull-left">TOTAL:</strong>
										</span>
										<hr>
										<a href="shopcheckout.php?total=<?php echo $totalCompra;?>" class="btn phpbtn-primary btn-lg btn-block size-15"><button class="btn btn-success margin-top-20 margin-right-10 pull-right"><i class="glyphicon glyphicon-ok"></i> REALIZAR LA COMPRA</button></a>
									</div>
								</div>
							</div>

						</div>
					</div>
                     <?php } ?> 
					<!-- /CART -->
					
				</div>
			</section>
<?php 
    include "footer.php";
?>