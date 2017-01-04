<!-- FOOTER -->
			<footer id="footer">
				<div class="container">

					<div class="row margin-top-60 margin-bottom-40 size-13">

						<!-- col #1 -->
						<div class="col-md-4 col-sm-4">

							<!-- Footer Logo -->
							<img class="footer-logo" src="assets/images/logoTorresPie.png" alt="" />

							<p>
								Los mejores precios del mercado. Somos Mercado Líderes con 98% de calificaciones positivas.-
							</p>

							

							<!-- Social Icons -->
							
							<!-- /Social Icons -->

						</div>
						<!-- /col #1 -->

						<!-- col #2 -->
						<div class="col-md-8 col-sm-8">

							<div class="row">
								<div class="col-md-6 hidden-sm hidden-xs">
                                    <h4 class="letter-spacing-1">LOCALES:</h4>
									<p>25 de Mayo 282- Concepcion Tel: 03865-425296</p>
									<p>Chango Mas Local 3- Concepcion Tel: 03865-423510</p>
                                    <p>Av Campero y San Martin J.B Alberdi Tel: 03865-472660</p>
								</div>
								<div class="col-md-6">
									<h4 class="letter-spacing-1">PAGOS SEGUROS</h4>
									<p>Trabajamos con todas las tarjetas de crédito. Mercado Pago y Todo Pago.-</p>
									<p>	<!-- see assets/images/cc/ for more icons -->
										<img src="assets/images/cc/Visa.png" alt="" />
										<img src="assets/images/cc/Mastercard.png" alt="" />
										<img src="assets/images/cc/Maestro.png" alt="" />
									</p>
								</div>

							</div>

						</div>
						<!-- /col #2 -->

					</div>

				</div>

				<div class="copyright">
					<div class="container">
						<ul class="pull-right nomargin list-inline mobile-block">
							Desarrolló : <li><a href="#">Widú Software Web</a></li>
						</ul>

						&copy; Derechos Reservados, Torres Electrónica.-
					</div>
				</div>

			</footer>
			<!-- /FOOTER -->



			<!-- 
				HOME SHOP - MODAL ON LOAD 
				
				data-autoload="true" 			- load modal on page load
				data-autoload-delay="2000"		- load after 2000 ms (1000ms = 1s)
			-->
			<div id="shopLoadModal" class="modal fade" data-autoload="true" data-autoload-delay="2000">
				<div class="modal-dialog modal-full">
					<div class="modal-content">

						<!-- header modal -->
						<div class="modal-header noborder">
							<button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
						</div>

						<!-- body modal -->
						<div class="modal-body">

							<div class="block-content">

								<img src="assets/images/logoTorres.png" alt="" />
								<p class="size-13 margin-bottom-20 margin-top-30">Dejanos tu email y te mandaremos nuestras novedades y productos.</p>

								<!-- newsletter -->
								<div class="inline-search clearfix margin-bottom-20">
									<form action="php/newsletter.php" method="post" class="validate nomargin" data-success="Subscribed! Thank you!" data-toastr-position="bottom-right" novalidate="novalidate">

										<input type="search" placeholder="Email" id="shop_email" name="shop_email" class="serch-input required">
										<button type="submit">
											<i class="fa fa-check"></i>
										</button>
									</form>
								</div>
								<!-- /newsletter -->

								<!-- Don't show this popup again -->
								<div class="size-11 text-left">
									<label class="checkbox pull-left">
										<input class="loadModalHide" type="checkbox" />
										<i></i> <span class="weight-300">No mostrar eeste cartel nuevamente</span>
									</label>

								</div>
								<!-- /Don't show this popup again -->

							</div>

						</div>

					</div>
				</div>
			</div>
			<!-- /HOME SHOP - MODAL ON LOAD -->



		</div>
		<!-- /wrapper -->

		<!-- SCROLL TO TOP -->
		<a href="#" id="toTop"></a>


		<!-- PRELOADER -->
		<div id="preloader">
			<div class="inner">
				<span class="loader"></span>
			</div>
		</div><!-- /PRELOADER -->


		<!-- JAVASCRIPT FILES -->
		<script type="text/javascript">var plugin_path = 'assets/plugins/';</script>
		<script type="text/javascript" src="assets/js/scripts.js"></script>
		<!-- PAGE LEVEL SCRIPTS -->
		<script type="text/javascript" src="assets/js/view/demo.shop.js"></script>
	</body>
</html>