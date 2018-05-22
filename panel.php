<?php
session_start();
 
require_once 'init.php';
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
<h1>Painel do Usuário</h1>
 
        <p>Bem-vindo ao seu painel, <?php echo $_SESSION['user_name']; ?> | <a href="logout.php">Sair</a></p>
	  
	  
	  <div class="container">
		<h2>Seus Animais</h2>
		<div class="row">
			<?php
			$PDO = db_connect();

			$sql = "SELECT * FROM  animal INNER JOIN images ON animal.idanimal=images.animal_idanimal where user_iduser=:iduser";
			

			$stmt = $PDO->prepare( $sql );
			$stmt->bindParam(':iduser', $_SESSION['user_id']);
			$stmt->execute();

			$users = $stmt->fetchAll( PDO::FETCH_ASSOC );

			if ( count( $users ) <= 0 ) {
				echo "Email ou senha incorretos";
				exit;
			}
			
			
			
			foreach ( $users as $user ) {
				
				echo $user['name'];
				echo '<div class="col-xl-4"><img src="data:image/jpeg;base64,' . base64_encode( $user[ 'image' ] ) . '" class="img-thumbnail img-fluid" alt="Placeholder image"></div>';
			}

			
			?>
		</div>
	</div>
	  
	  
	  

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<script src="js/jquery-3.2.1.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/popper.min.js"></script> 
  <script src="js/bootstrap-4.0.0.js"></script>
  </body>
</html>