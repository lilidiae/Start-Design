<?php
session_start();
$logado = $_SESSION['email'];
#print_r($_SESSION);
?>




<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Home</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/carousel/">

    

    <!-- Bootstrap core CSS -->
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
  </head>




<body style="background-color: #C6DBDA;">
    
	<header style="height: 8px;">
	  
		<nav class="navbar col-12 m-auto position-fixed navbar-expand-lg bg-secundary " style="z-index:999; background-color: #cbaacb  ; opacity: 1,0; top: 0%;">
		  
		<div class="container-fluid col-11 m-auto">
		  <a class="navbar-brand text-white" href="">Start Design</a>
		  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav me-auto mb-2 mb-lg-0">
			  <li class="nav-item">
				<a class="nav-link active text-white" aria-current="page" href="login/index.php">Login</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link text-white" href="usuarios/index.php">Cadastre-se</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link text-white" href="">Dicas</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link text-white" href="postar/index.php">Postar</a>
			  </li>
			  <?php
			if (isset($_SESSION['email']) || $_SESSION['email'] == "") {
				print "<div class= 'nav-item'> <a class='nav-link text-white me-auto mb-2 mb-lg-0 ' >$logado</a></div>";
				print "<div class= 'nav-item'> <a class='nav-link text-danger me-auto mb-2 mb-lg-0' href='auth/logout.php'>Sair</a></div>";
			    print"<div class='nav-item'> <a class='nav-link text-danger me-auto mb-2 mb-lg-0' href='usuarios/deletar.php?y=d'>Excluir conta</a> </div>";
			 } else {
		
			 }
               ?>
		  
		</div>
	  </nav>
	  <br> 
	  <br>
	</header>
	
	
	<main>
	
	  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
		<div class="carousel-indicators">
		  <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
		  <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
		  <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
		</div>
		<div class="carousel-inner">
		  <div class="carousel-item active">
			<img src="img/carrosel.svg" class="bd-placeholder-img" width="100%" height="100%"  aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></img>
	
			<div class="container">
			  <div class="carousel-caption text-start">
			   
			  </div>
			</div>
		  </div>
		  <div class="carousel-item">
			<img src="img/3.svg" class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
	
			<div class="container">
			  <div class="carousel-caption">
			
			  </div>
			</div>
		  </div>
		  <div class="carousel-item">
			<img src="img/4.svg" class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
	
			<div class="container">
			  <div class="carousel-caption text-end">
				
			  </div>
			</div>
		  </div>
		</div>
		<button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
		  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		  <span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
		  <span class="carousel-control-next-icon" aria-hidden="true"></span>
		  <span class="visually-hidden">Next</span>
		</button>
	  </div>
	
	
	
	  <div class="row featurette" style="justify-content: center;">
		<div class="col-md-5">
		  <h2 class="featurette-heading fw-normal lh-1">J?? Passou por uma experi??ncia de fazer uma apresenta????o e o slide n??o ser t??o legal? </h2>
		  <p class="lead">O Design Start mudar?? essa situa????o. No nosso site voc?? ter?? milhares de modelos gratuitos para deixar sua apresenta????o muito mais interesante!</p>
		</div>
		<div class="col-md-5">
		  <img src="img/undraw_pitching_re_fpgk.svg" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="650" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em"></text></img>
	
		</div>
	  </div>
	
	  <hr class="featurette-divider" >
	
	  <div class="row featurette"  style= "justify-content:center;">
		<div class="col-md-5 order-md-2">
		  <h2 class="featurette-heading fw-normal lh-1">Cadastre-se <span class="text-muted">E publique seus pr??pios slides!</span></h2>
		  <p class="lead">Clique em Cadastre-se,  responda todos os espa??os requeridos e pronto! Poder?? colocar seus slides ao ar! </p>
		</div>
		<div class="col-md-5 order-md-1">
		  <img src="img/post.svg" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="650" height="500"  role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em"></text></img>
	
		</div>
	  </div>
	
	  <hr class="featurette-divider">
	
	  <div class="row featurette" style=" justify-content: center;">
		<div class="col-md-5">
		  <h2 class="featurette-heading fw-normal lh-1">N??o sabe como publicar seus slides? <span class="text-muted">N??s vamos ensinar!</span></h2>
		  <p class="lead">Primeiro se voc?? n??o ?? cadastrado, clique em "Cadastre-se" e responda todos os espa??os. Depois clique em "Postar", escolha seu slide, a foto que vai ficar vis??vel, uma descri????o e um t??tulo e clique em "Postar". Pronto!</p>
		</div>
		<div class="col-md-5">
		  <img src="img/undraw_posting_photo_re_plk8.svg" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="650" height="500"  role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em"></text></img>
	
		</div>
	  </div>
	
	
	
	
	
	
	
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>   
	
	<?php
	
	
	
	
	?>
	<div class="container marketing">
	
	
	  <div class="row">
		<div class="col-lg-4">
		  <img src="<?php
		  
		  ?>" class="bd-placeholder-img " width="250" height="140"  role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em"></text></img>
	
		  <h2 class="fw-normal">Biologia - DNA</h2>
		  <p>Est?? cansado dos seus alunos dormirem na sua aula de biologia? Experimente usar nossos slides, al??m de modernos s??o visualmente apraz??veis!</p>
		  <p><a class="btn btn-secondary" href="#">Visualizar &raquo;</a></p>
		  <p><a class="btn btn-secondary" href="#">Baixar &raquo;</a></p>
		</div><!-- /.col-lg-4 -->
		<div class="col-lg-4">
		  <img src="img/5.png" class="bd-placeholder-img " width="250" height="140"  role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em"></text></img>
	
		  <h2 class="fw-normal">Minimalista</h2>
		  <p> Est?? cansado de slides extravagantes? Opte por modelos minimalista. Eles al??m de simples deixam sua apresenta????o mais profissional!</p>
		  <p><a class="btn btn-secondary" href="#">Visualizar &raquo;</a></p>
		  <p><a class="btn btn-secondary" href="#">Baixar &raquo;</a></p>
		</div><!-- /.col-lg-4 -->
		<div class="col-lg-4">
		  <img src="img/6.png" class="bd-placeholder-img" width="250" height="140" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em"></text></img>
	
		  <h2 class="fw-normal">Marketing</h2>
		  <p>Para avan??ar o Marketing da sua empresa voc?? precisa tamb??m d?? um show em sua apresenta????o para os funcion??rios, experimente nosso slide!</p>
		  <p><a class="btn btn-secondary" href="#">Visualizar &raquo;</a></p>
		  <p><a class="btn btn-secondary" href="#">Baixar &raquo;</a></p>
		</div><!-- /.col-lg-4 -->
	  </div><!-- /.row -->
	
	  <hr class="featurette-divider">
	  <!-- /END THE FEATURETTES -->
	
	</div><!-- /.container -->
	
	

	<!-- FOOTER -->
	<footer class="container">
	  <p class="float-end"><a href="#">Ir Para o topo</a></p>
	  
	</footer>
	</main>
	
	
	
	
	
	
	
	  <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
	
		
	</body>
	</html>