<html>

	<head>
	<title> Aulas 4Linux </title>
	<link href="style.css" rel="stylesheet" type="text/css">
	</head>

	<body>
	<div id="conteudo">

	   <h1>Aulas</h1>

	</div>
	<input type="file" name="arquivo" />
	<div id="menu">
	  <ul>
	  	<?php 
			$arquivos = scandir('view/');
			foreach ($arquivos as $arquivo) {
				if (pathinfo($arquivo, PATHINFO_EXTENSION) == "php") {
					$caminho = 'view/'.$arquivo;
					echo "<li><a href='$caminho'>$arquivo</a></li>";
				}
			}
		?>
	  </ul>
	</div>

	</body>
</html>