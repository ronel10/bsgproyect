<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Welcome</title>
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
                  <li class="active"><a href="<?php echo base_url('index.php/page') ?>">Dashboard</a></li>
                  <li><a href="<?php echo base_url('index.php/page/registro'); ?>">Registro</a></li>
                  <li><a href="<?php echo base_url('index.php/page/all_user') ?>">Usuarios</a></li>
                  <li><a href="#">Ayuda</a></li>
                <?php elseif($this->session->userdata('rol')==='Usuario'):?>
                  <li class="active"><a href="<?php echo base_url('index.php/page/page_user') ?>">Dashboard</a></li>
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

        <div class="jumbotron">
          <h1 align="center">¡Welcome <?php echo $this->session->userdata('nombre');?>!</h1>
        </div>

      </div>
    </div>
    </div>

    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
  </body>
</html>	

