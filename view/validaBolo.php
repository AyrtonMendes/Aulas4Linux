<? include "../funcoes.php" ?>

<html>
	<body>
		<form method="POST">
			<h1>Teste de bolo</h1>
			<table width="100%">
				<tr><td width="40%">
<p><textarea name="ingredientes" rows="10">
ovo
farinha
leite
manteiga
fermento
</textarea></p>
				<tr>
					<td><p><input type="submit" value="Enviar"><br></p></td>
				</tr>
			</table>
			<?php 
				if($_POST) {
					echo "<font color='FF0000'><h2> ".validarBolo($_POST)." </h2></font>";
				}
			?>
		</form>
	</body>
</html>