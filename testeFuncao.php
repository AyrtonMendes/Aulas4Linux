<? include "funcoes.php" ?>

<html>
	<body>
		<form method="POST">
			<h1>Teste de bolo</h1>
			<table width="100%">
				<tr>
					<td width="40%">
						<p><textarea name="ingredientes" rows="10"></textarea></p>
					</td>
					<td width="60%">
						<font size="2" color="gray">
							<h3>Estes sao os ingredintes necessarios(um por linha):</h3>
							ovo<br>
							farinha<br>
							leite<br>
							manteiga<br>
							fermento<br><br>
						</font>
					</td>
				</tr>	
				<tr>
					<td>					
						<p><input type="submit" value="Enviar"><br></p>
					</td>
				</tr>
			</table>
			<?php 
				if($_POST) {
					$resultado = validarBolo($_POST);
					echo "<font color='FF0000'><h2> $resultado </h2></font>";
				}
			?>
		</form>
	</body>
</html>