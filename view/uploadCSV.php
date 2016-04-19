<? include "../funcoes.php" ?>

<html>
	<body>
		<form method="POST">
			<!--<input type="text" name="caminho" value="../arquivos/arquivo.csv">-->
			<input type="file" name="arquivo" value="Upload" />
			<p><input type="submit" value="Enviar"><br></p>	

			<?php 
				if($_POST) {
					echo LeituraArquivoCSV('../arquivos/'.$_POST["arquivo"]);
				}
			?>
		</form>
	</body>
</html>