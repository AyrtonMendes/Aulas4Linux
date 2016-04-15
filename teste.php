<html>
	<body>
		<form method="POST">
			<h1>Teste de bolo</h1>
			<h3>Estes sao os ingredintes necessarios(um por linha):</h3>
			ovo<br>
			farinha<br>
			leite<br>
			manteiga<br>
			fermento<br><br>
			<textarea name="ingredientes" rows="10"></textarea>			
			<p><input type="submit" value="Enviar"><br></p>
		</form>
	</body>
</html>

<?php
	if($_POST) {
		if (array_key_exists('ingredientes', $_POST)) {

			$ingredientes = explode("\n", $_POST['ingredientes']);
			$ingredientes = array_map('trim',$ingredientes);

			$ovo = $farinha = $leite = $manteiga = $fermento = false;

			foreach ($ingredientes as $key => $ingrediente) {
				if($ingrediente == 'ovo'){
					$ovo = true;
				}
				if($ingrediente == 'farinha'){
					$farinha = true;
				}
				if($ingrediente == 'leite'){
					$leite = true;
				}
				if($ingrediente == 'manteiga'){
					$manteiga = true;
				}
				if($ingrediente == 'fermento'){
					$fermento = true;
				}
			}
			if ($ovo && $farinha && $leite && $manteiga && $fermento) {
				echo '<h2>Bolo Aceito</h2>';
			}
		}
	}