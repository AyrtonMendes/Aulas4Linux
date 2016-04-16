<? include "funcoes.php" ?>

<html>
	<body>
		<form method="POST">
			<input type="text" name="caminho" value="arquivos/arquivo.csv">
			<p><input type="submit" value="Enviar"><br></p>	

			<?php 
				if($_POST) {
					echo geraTabela($_POST["caminho"]);
				}
			?>
		</form>
	</body>
</html>