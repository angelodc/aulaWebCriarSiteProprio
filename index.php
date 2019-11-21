<?php
	function __autoload($class_name){
		require_once 'classes/' . $class_name . '.php';
		
	}
?>
<!DOCTYPE html>
<html >
<head>
<title>Eu sou o Dougras!</title>
<meta charset=utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stYlesheet" type="text/css" href="style.css">
<link href='https://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>
</head>
<body>


<?php
	$qualquercoisa = 'oie';
    $usuario = new Usuarios();
    foreach($usuario->findAll() as $key => $value)
	var_dump($qualquercoisa);
   ?>


   <header>
  <h2><?php echo $value->nome ?> </h2>
  <h3>Aki vai ficar o carrossel </h3>
</header>
<section >
  <nav>
    <img src="burro.jpg" alt="perfil sem fundo">
    <ul>
      <li><a href="#">Portifólio</a></li>
      <li><a href="#">Cursos</a></li>
      <li><a href="#">Contato </a></li>
      <li><a href="formulario.html">Formulário competencias </a></li>
    </ul>
  </nav>
  
  <article>
    <h1>About Me</h1>
    <p><?php echo $value->sobre ?> </p>
    
    <hr>
    <H1>Experiencias</H1>
    <p> <strong>Força Aérea Brasileira</strong>  </strong> <br>
        <strong>Cargo:</strong> CB especializado em serviços administrativos <br>
        <strong>Período:</strong> Março 2011 / Março 2019</p>
        <p><strong>Escolas e faculdades QI</strong><br>
            <strong>Empresa</strong>: New Point Escolas Profissionalizantes <br>
            <strong>Cargo:</strong> Monitor nas aulas de Informática
Período: Março 2010 / Março 2011  
        </p>
        <hr><p><h1>Cursos</h1></p>
        <hr><p><h1>Cursos</h1></p>
        <hr><p><h1>Obetivos</h1></p>


  </article>
</section>

<footer>
  <p>Pé do Site !</p>
</footer>

</body>
</html>
