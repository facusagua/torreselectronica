<?php
    include 'header.php';
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
					
					<div class="row">
                        <div class="col-md-3 col-sm-3"></div>
                        <div class="col-md-6 col-sm-6">
							<form class="sky-form boxed">
								<header>
									<i class="fa fa-refresh"></i> Ingreso a Panel de Control
									</header>
								<fieldset class="nomargin">
									<label class="input margin-bottom-10">
										<i class="ico-append fa fa-envelope"></i>
										<input id="emailo" required="" type="text" placeholder="Ingrese Usuario" value="">
									</label>
								
									<label class="input margin-bottom-10">
										<i class="ico-append fa fa-lock"></i>
										<input id="passo" required="" type="password" placeholder="Ingrese Password" value="">
									</label>
								</fieldset>
							</form>
                            <input id="login" type="submit" class="btn btn-primary noradius pull-right" value="INGRESAR">
							<!-- /login form -->

							<!-- ALERT -->
							<div id="alertlog" class="alert alert-mini alert-danger margin-bottom-30  margin-top-80" hidden="true">
								<strong>Algo fallo!</strong> Login Incorrecto!
							</div><!-- /ALERT -->

						</div>
                        <div class="col-md-3 col-sm-3"></div>
					</div>
				</div>
			</section>
<script type="text/javascript">
    $(document).ready(function() {
        debugger;
        $("#login").click(function(){
            var emailo = $("#emailo").val();
            var passo = $("#passo").val();
            var parametros = {
                "email" : emailo , 
                "pass" : passo
                };
            console.log(parametros);
            $.ajax({
                url : 'loginPanel.php',
                data : parametros,
                type : 'POST',
                success : function(data) {
                    if(data == 1){
                        window.location.href = "Administrador/index.php/Examples/ventas";
                    }
                    else{
                        $("#alertlog").removeAttr('hidden');
                    }    
                }
            });
            });
    });
</script>
<?php 
    include "footer.php";
?>