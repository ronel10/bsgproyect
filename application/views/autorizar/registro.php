
<!DOCTYPE html>
<html>
	<head>
		<title>Crear Usuarios</title>
		<meta charset="utf-8"/>
		<link rel="stylesheet" type="text/css" href="/extra/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="/extra/bootstrap/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="/extra/css/jquery.dataTables.min.css">

        <script src="/extra/js/jquery-1.11.3.min.js"></script>
        <script src="/extra/bootstrap/js/bootstrap.min.js"></script>
        <script src="/extra/js/validator.min.js"></script>
    
        <link rel="stylesheet" href="/assets/css/styles.css">


	</head>

	<body>
		<div class="bgBlob--1">
    <div class="container">
      <div class="row">
      <nav class="panel panel-primary">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">LOGO</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <?php if($this->session->userdata('rol')==='Admin'):?>
                  <li><a href="<?php echo base_url('index.php/page') ?>">Dashboard</a></li>
                  <li class="active"><a href="<?php echo base_url('index.php/page/registro'); ?>">Registro</a></li>
                  <li><a href="<?php echo base_url('index.php/page/all_user') ?>">Usuarios</a></li>
                  <li><a href="#">Ayuda</a></li>
                <?php elseif($this->session->userdata('rol')==='Usuario'):?>
                  <li><a href="<?php echo base_url('index.php/page/page_user') ?>">Dashboard</a></li>
                  <li><a href="<?php echo base_url('index.php/page/all_user') ?>">Usuarios</a></li>
                  <li><a href="#">Ayuda</a></li>
                <?php else:?>
                  <li class="active"><a href="#">Dashboard</a></li>
                  <li><a href="#">Visitas</a></li>
                <?php endif;?>
              </ul>
              
              <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo site_url('autorizar/logout');?>">Sign Out</a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li><a href=""><?php echo $this->session->userdata('rol');?></a></li>
              </ul>
            </div>
          </div>
        </nav>
        </div>
    </div>

        <div class="row">
          <div class="col-md-3 col-md-offset-4">
            <div class="panel panel-primary">
              <div class="panel-heading">
					       <legend class="text-center title-reg">Registro de Usuario</legend>
              </div>
              <div class="panel-body">      
                <form class="form-horizontal" action="<?php echo site_url('autorizar/post_register') ?>" method="POST">
                      <?php echo $this->session->flashdata('msg');?>
							  <fieldset>
								  <div id="legend">

										<div class="">
											<label class="control-label" for="nombre_usuario">Nombre:</label>
											<input id="nombre_usuario" value="" name="nombre_usuario" class="form-control" type="text" placeholder="Ejm: Juan" minlength="4" maxlength="15" required autofocus >
										</div>

										<div class="">
											<label class="control-label" for="apellidos">Apellidos:</label>
											<input id="apellidos" value="" name="apellidos" class="form-control" type="text" minlength="4" placeholder="Ejm: Perez" maxlength="15" required autofocus>
										</div>

										<div class="">
											<label class="control-label" for="email">Email:</label>
											<input id="email" value="" name="email" class="form-control" type="email" placeholder="jperez@usuario" required email autofocus >
										</div>										

										<div class="">
											<label class="control-label" for="telefono">Telefono:</label>
											<input id="telefono" value="" name="telefono" class="form-control bfh-phone" type="number"  required pattern="[0-9]" placeholder="09 Digitos" autofocus>
										</div>

										<div class="">
											<label class="control-label" for="cumpleanios">Cumpleaños:</label>
											<input id="cumpleanios" value="" name="cumpleanios" class="form-control" type="date" required  autofocus >
										</div>

										<div class="">
											<label class="control-label" for="password">Password:</label>
											<input id="password" value="" name="password" class="form-control" type="password" minlength="5" maxlength="15" placeholder="password" required autofocus>
										</div>
                    
										<div class="">
											<label class="control-label" for="rol">Seleccione</label>
											<select name="rol" class="form-control">
												<option value="Admin">Administrador</option>
												<option value="Usuario">Usuario</option>
											</select>
										</div> 
										<div class="">
											<p></p>
											<div class="controls">
											<button class="btn btn-lg btn-primary btn-block btn-signin" type="Submit">Registrar</button>
											<p></p>
											
											</div>
										</div>
									
								</div>

							  </fieldset>
						    </form>
              </div>
            </div>
          </div>
        </div> 
			</div>
	</body>
</html>