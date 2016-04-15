<? include "funcoes.php" ?>

<html>
	<body>
		<form method="POST">
			<h1>Teste de bolo</h1>
			<font size="2">
				<h3>Estes sao os ingredintes necessarios(um por linha):</h3>
				ovo<br>
				farinha<br>
				leite<br>
				manteiga<br>
				fermento<br><br>
				<textarea name="ingredientes" rows="10"></textarea>			
				<p><input type="submit" value="Enviar"><br></p>
			</font>
			<?php 
				$resultado = validarBolo($_POST);
				if($_POST) {
					echo "<font color='FF0000'> $resultado </font>";
				}
			?>
		</form>
	</body>
</html>