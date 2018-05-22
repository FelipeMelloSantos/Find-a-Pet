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
	        <li class="nav-item active"> <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a> </li>
	        <li class="nav-item"> <a class="nav-link" href="Sobre.html">Sobre</a> </li>
			<li class="nav-item"> <a class="nav-link" href="Meus animais.html">Meus Animais</a> </li>
			<li class="nav-item"> <a class="nav-link" href="Lista animais.html">Lista Animais</a> </li>
          </ul>
	      <form class="form-inline my-2 my-lg-0">
	        <div class="row" style="align-content: center">
	          <div class="col"><a class="btn btn-outline-light my-2 my-sm-0" href="Cadastro.html" role="button">Cadastrar</a></div>
            </div>
	        
          </form>
      </div>
  </nav>
	  
	  

    <!-- body code goes here -->

	  <div class="container" style="max-width: 500px; padding-top: 15%; vertical-align: middle">
	<form class="form-signin" style="text-align: center" action="login.php" method="post">
      
	  
		  <h1 class="h3 mb-3 font-weight-black">Entrar</h1>
		  <label for="email" class="sr-only" for="txUsuario">Usuário</label>
      <input type="text" name="email" id="email" maxlength="25" class="form-control" placeholder="Usuário" required autofocus>
		<div style="min-height: 5px"></div>
<label for="password" class="sr-only">Senha</label>
      <input type="password" name="password" for="password" id="password" class="form-control" placeholder="Senha" required>
		<div style="min-height: 10px"></div>
      <button class="btn btn-lg btn-success btn-block" type="submit">Entrar</button>
		<a href="Cadastro.html" target="_self">Cadastre-se</a>
      <p class="mt-5 mb-3 text-muted">&copy; 2018</p>
</form>
	  
	</div>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<script src="js/jquery-3.2.1.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/popper.min.js"></script> 
  <script src="js/bootstrap-4.0.0.js"></script>
  </body>
</html>


