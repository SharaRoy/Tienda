<html>
	  <head>
				<title>Tienda</title>
				<meta charset="UTF-8">
				<meta name="viewport" content="width=device-width, initial-scale=1">
				<meta http-equiv="Content-Style-Type" content="text/css">

				<style media="screen">
						body#LoginForm{
								background-image:url("https://hdwallsource.com/img/2014/9/blur-26347-27038-hd-wallpapers.jpg");
								background-repeat:no-repeat;
								background-position:center;
								background-size:cover;
								padding:10px;
						}

						.form-heading {
								color:#fff;
								font-size:23px;
						 }
						.panel h2{
								color:#444444;
								font-size:18px;
								margin:0 0 8px 0;
						 }
						.panel p {
								color:#777777;
								font-size:14px;
								margin-bottom:30px;
								line-height:24px;
						 }
						.login-form .form-control {
								background: #f7f7f7 none repeat scroll 0 0;
								border: 1px solid #d4d4d4;
								border-radius: 4px;
								font-size: 14px;
								height: 50px;
								line-height: 50px;
						}
						.main-div {
								background: #ffffff none repeat scroll 0 0;
								border-radius: 2px;
								margin: 10px auto 30px;
								max-width: 38%;
								padding: 50px 70px 70px 71px;
						}
						.login-form .form-group {
								margin-bottom:10px;
						}
						.login-form{
								text-align:center;
						}
						.forgot a {
								color: #777777;
								font-size: 14px;
								text-decoration: underline;
						}
						.login-form  .btn.btn-primary {
								background: #f0ad4e none repeat scroll 0 0;
								border-color: #f0ad4e;
								color: #ffffff;
								font-size: 14px;
								width: 100%;
								height: 50px;
								line-height: 50px;
								padding: 0;
						}
						.forgot {
								text-align: left;
								margin-bottom:30px;
						}
						.botto-text {
								color: #ffffff;
								font-size: 14px;
								margin: auto;
						}
						.login-form .btn.btn-primary.reset {
								background: #ff9900 none repeat scroll 0 0;
						}
						.back {
								text-align: left;
								margin-top:10px;
						}
						.back a {
								color: #444444;
								font-size: 13px;
								text-decoration: none;
						}

						/* Remarcar errores y alinearlos */
						.error{
								color: #ff0000;
								font-weight: 500;
								padding-left: 2px;
						}
				</style>
				<!-- <link rel="stylesheet" type="text/css" media="screen" src="<?php echo base_url(); ?>assets/css/login.css"> -->
				<!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
				<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

				<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
				<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	  </head>
		<body id="LoginForm">
				<div class="container">
						<br>
						<h1 class="form-heading" align="center">Mi tienda</h1>
						<br>
						<div class="login-form">
								<div class="main-div">
								    <div class="panel">
											  <h2>Inicio de sesión</h2>
								    </div>
								    <form name="form_login" method="post" action="validateForm" id="Login">
								        <div class="form-group" style="margin-top:10px;" align="left">
						            		<input type="text" class="form-control" id="inputUsuario" name="inputUsuario" placeholder="Usuario" value="<?= set_value('inputUsuario');?>" >
                						<?php echo form_error('inputUsuario', '<span class="error">', '</span>'); ?>
								        </div>
								        <div class="form-group" style="margin-top:10px;" align="left">
								            <input type="password" class="form-control" id="inputPassword" name="inputPassword" placeholder="Contraseña">
														<?php echo form_error('inputPassword', '<span class="error">', '</span>'); ?>
								        </div>
								        <!-- <div class="forgot">
								        		<a href="reset.html">Recuperar contraseña</a>
												</div> -->
												<?php if (isset($mensaje)): ?>
													 <div class="row">
							                <p class="titulo text-danger" align="center">
							                    <span class="icono glyphicon glyphicon-remove" style="font-size:15px;"></span>&nbsp;&nbsp;
																	<strong>Usuario o Contraseña Incorrecta</strong>
							                </p>
													 </div>
												<?php endif; ?>
												<input type="submit" name="ingreso" class="btn btn-primary" value="Iniciar sesión">
								    </form>
						    </div>
						</div>
				</div>
		</body>
</html>
