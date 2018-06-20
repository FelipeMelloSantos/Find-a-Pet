<?php
session_start();

require 'init.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Find My Pet</title>
    <!-- Bootstrap -->
	<link href="css/bootstrap-4.0.0.css" rel="stylesheet">
	
  </head>
  <body style="padding-top: 70px; background-image: url(images/background.png)">
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark" style="background-color: #0A1C28"> <a class="navbar-brand" href="#">Find My Pet</a>
	    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
	    <div class="collapse navbar-collapse" id="navbarSupportedContent1">
	      <ul class="navbar-nav mr-auto">
	        <li class="nav-item active"> <a class="nav-link" href="Home.html">Home <span class="sr-only">(current)</span></a> </li>
	        <li class="nav-item"> <a class="nav-link" href="Sobre.html">Sobre</a> </li>
          </ul>
	      <form class="form-inline my-2 my-lg-0">
	        <div class="row" style="align-content: center">
	          <div class="col"><a class="btn btn-outline-success my-2 my-sm-0" href="Entrar.html" role="button">Entrar</a></div>
	          <div class="col"><a class="btn btn-outline-light my-2 my-sm-0" href="Cadastro.html" role="button">Cadastrar</a></div>
            </div>
	        
          </form>
      </div>
  </nav>
	  
	  

    <!-- body code goes here -->
	  
    <div class="container" style="max-width: 600px">

<div class="row">
    <div class="">
		<form role="form" action="codcad.php" method="post">
			<h3>Preencha o formulário para se cadastrar</h3>
			<hr class="colorgraph">
			
			<div class="form-group">
				<input type="text" name="name" id="name" class="form-control input-lg" placeholder="Nome" tabindex="1">
			</div>
			<div class="form-group">
				<input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email" tabindex="2">
			</div>
			<div class="form-group">
				<input type="password" name="password" id="password" class="form-control input-lg" placeholder="Senha" tabindex="3">
			</div>
		
			<div class="form-group">
				<input type="text" class="form-control" name="phone" id="phone" placeholder="Telefone" pattern="(?:^\([0]?[1-9]{2}\)|^[0]?[1-9]{2}[\.-\s]?)[9]?[1-9]\d{3}[\.-\s]?\d{4}$" tabindex="4" required>
			</div>
			
			<div class="form-group">
			<input type="file" class="form-control-file" id="exampleFormControlFile1">
			</div>
			
			
			<hr class="colorgraph">
			<div class="row">
				<div class="col-xs-6 col-md-6"><input type="submit" value="Cadastrar" class="btn btn-light btn-block btn-lg"></div>
				<div class="col-xs-6 col-md-6"><a href="form-login.php" class="btn btn-success btn-block btn-lg">Entrar</a></div>
			</div>
		</form>
	</div>
</div>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<script src="js/jquery-3.2.1.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/popper.min.js"></script> 
  <script src="js/bootstrap-4.0.0.js"></script>
  </body>
</html>