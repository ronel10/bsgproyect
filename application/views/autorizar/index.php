<!DOCTYPE html>
<html lang="en">
	<head>
    	<title>Log In</title>
    	<meta charset="utf-8">      <!-- Bootstrap -->
    	
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
          <div class="card card-container">     
            <h1 class="text-center register" >Online Store</h1>
                <img id="profile-img" class="profile-img-card" src="/assets/img/login.jpg" />
                  <form class="form-signin" action="<?php echo site_url('autorizar/login') ?>" method="post">
                    <?php echo $this->session->flashdata('msg');?>
                    <input type="text" name="email" class="form-control" placeholder="Email" required autofocus><p></p>
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                    <a href="<?php echo site_url('page/registronuevo') ?>" class="register">Create an account </a>             
                  </form>  
          </div>  
       </div>
      </div>
    
       <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
     
    </body>
 </html>
