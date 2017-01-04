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
                        <div class="col-md-6 col-sm-6">
							<form class="sky-form boxed">
								<header>
									<i class="fa fa-refresh"></i> Ya estoy registrado. Entrar!
									</header>
								<fieldset class="nomargin">
									<label class="input margin-bottom-10">
										<i class="ico-append fa fa-envelope"></i>
										<input id="emailo" required="" type="email" placeholder="Ingrese su Email" value="">
										<b class="tooltip tooltip-bottom-right">Es necesario ingresar el Email con el que se registro</b>
									</label>
								
									<label class="input margin-bottom-10">
										<i class="ico-append fa fa-lock"></i>
										<input id="passo" required="" type="password" placeholder="Ingrese su Password" value="">
										<b class="tooltip tooltip-bottom-right">Letras, caracteres y numeros</b>
									</label>
									<div class="clearfix note margin-bottom-30">
										<a class="pull-right" href="#">Olvidaste tu Password?</a>
									</div>
								</fieldset>
							</form>
                            <input id="login" type="submit" class="btn btn-primary noradius pull-right" value="INGRESAR">
							<!-- /login form -->

							<!-- ALERT -->
							<div id="alertlog" class="alert alert-mini alert-danger margin-bottom-30  margin-top-80" hidden="true">
								<strong>Algo fallo!</strong> Login Incorrecto!
							</div><!-- /ALERT -->

						</div>
						<!-- LOGIN -->
						<div class="col-md-6 col-sm-6">

							<!-- ALERT -->
							<!--
							<div class="alert alert-mini alert-danger margin-bottom-30">
								<strong>Oh snap!</strong> Login Incorrect!
							</div>
							-->
							<!-- /ALERT -->

							<!-- register form -->
							<form id="formReg" class="nomargin sky-form boxed" action="registrar.php" method="get">
								<header>
									<i class="fa fa-users"></i> Es mi primera compra. Me quiero registar!
									</header>

								<fieldset class="nomargin">		
                                    <label class="input margin-bottom-10">
										<i class="ico-append fa fa-user"></i>
										<input name="nombre" type="text" placeholder="Nombre y Apellido" required>
									</label>
                                    
                                    <label class="input margin-bottom-10">
										<i class="ico-append fa fa-user"></i>
										<input name="domicilio" type="text" placeholder="Domicilio"  required>
									</label>
                                    
                                    <div class="row margin-bottom-10">
										<div class="col-md-6">
											<label class="input">
												<input name="ciudad" type="text" placeholder="Ciudad"  required>
											</label>
										</div>
										<div class="col col-md-6">
											<label class="select margin-bottom-10">
										      <select name="provincia"  required>
                                                <option value="0" selected="" disabled="">Provincia</option>
                                                <option value="Tucuman">Tucuman</option>
                                                <option value="Buenos Aires">Buenos Aires</option>
                                                <option value="Salta">Salta</option>
                                                <option value="Jujuy">Jujuy</option>
                                                <option value="Catamarca">Catamarca</option>  
										      </select>
										<i></i>
									</label>
										</div>
									</div>
                                    
                                    <div class="row margin-bottom-10">
										<div class="col-md-6">
											<label class="input">
												<input name="cp" type="text" placeholder="Codigo Postal"  required>
											</label>
										</div>
										<div class="col col-md-6">
											<label class="input">
												<input name="tel" type="text" placeholder="Telefono"  required>
											</label>
										</div>
									</div>
                                    
									<label class="input margin-bottom-10">
										<i class="ico-append fa fa-envelope"></i>
										<input name="email" type="text" placeholder="Email address" required>
										<b class="tooltip tooltip-bottom-right">Sera requerida para iniciar sesion</b>
									</label>
								
									<label class="input margin-bottom-10">
										<i class="ico-append fa fa-lock"></i>
										<input name="pass" type="password" placeholder="Password" required>
										<b class="tooltip tooltip-bottom-right">Letras, caracteres y numeros</b>
									</label>

									<label  class="select margin-bottom-10 margin-top-20">
										<select name="tipo" id="tipo" required>
											<option value="0" selected="" disabled="">Tipo de Cliente</option>
											<option value="1">Cliente Final</option>
											<option value="2">Instalador Profesional</option>
										</select>
										<i></i>
									</label>
									
                                    <label id="cuit" class="input margin-bottom-10">
										<i class="ico-append fa fa-user"></i>
										<div id="cui"></div>
                                        <b class="tooltip tooltip-bottom-right">Este dato es requerido y verificado para Instaladores Profesionales</b>
									</label>
                                    
								</fieldset>

								<div class="row margin-bottom-20">
									<div class="col-md-12">
										<input id="btnGuardaRegistro" type="submit" class="btn btn-primary">
									</div>
								</div>

							</form>
							<!-- /register form -->

						</div>
						<!-- /LOGIN -->

						
					</div>
				</div>
			</section>
<script type="text/javascript">
    $(document).ready(function() {
        debugger;
        $("#cuit").hide();
        
        $("#tipo").change(function(){
            debugger;
            var p = $("#tipo").val();
            console.log(p);
            if(p == 2){
                $("#cuit").show();
                $("#cui").html( '<input name="cuit" type="text" placeholder="Cuit" required>' );
            }
            else{
                $("#cuit").hide();
                $("#cui").html( '' );
            }
            });
        
        $("#login").click(function(){
            var emailo = $("#emailo").val();
            var passo = $("#passo").val();
            console.log(emailo);
            console.log(passo);
            var parametros = {
                "email" : emailo , 
                "pass" : passo
                };
            console.log(parametros);
            $.ajax({
                url : 'login.php',
                data : parametros,
                type : 'POST',
                success : function(data) {
                    if(data == 1){
                        alert("Uds. se logueo correctamente");
                        window.location.href = "index.php";
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