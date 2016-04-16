<?php
/*Aula 1 : Aprender sobre condicionamentos*/
function validarBolo($ingredientesPost){
	if (array_key_exists('ingredientes', $ingredientesPost)) {
			$ingredientes = explode("\n", $ingredientesPost['ingredientes']);
			$ingredientes = array_map('trim',$ingredientes);

			$ovo = $farinha = $leite = $manteiga = $fermento = false;

			foreach ($ingredientes as $key => $ingrediente) {
				switch ($ingrediente) {
					case 'ovo':
						$ovo = true;
						break;
					case 'farinha':
						$farinha = true;
						break;
					case 'leite':
						$leite = true;
						break;
					case 'manteiga':
						$manteiga = true;
						break;
					case 'fermento':
						$fermento = true;
						break;
				}
			}
			if ($ovo && $farinha && $leite && $manteiga && $fermento) {
				$resultado = 'Bolo Aceito.';
			} else {
				$resultado = 'Ingredientes incorreto.';
			}
			return $resultado;
		}
}

/*Aula 2 - Aprendendo sobre lacos repetitivos*/
function geraTabela($arquivoCSV){
	if (pathinfo($arquivoCSV, PATHINFO_EXTENSION) == "csv") {
		$arquivo = file_get_contents($arquivoCSV);
		$linhas = explode("\n", $arquivo);
		$tabela = '<table border = "1"> <tr>';
		foreach ($linhas as $key => $linha) {
			if ($key == 0) {
				$colunas = explode(";", $linha);
				foreach ($colunas as  $coluna) {
					$tabela = $tabela . "<td><strong> $coluna </strong></td>";
				}
			} else {	
				$colunas = explode(";", $linha);
				foreach ($colunas as  $coluna) {
					$tabela = $tabela . "<td> $coluna </td>";
				}
			}
			$tabela = $tabela . "</tr> <tr>";
		}
		return "$tabela </tr> </table>";
	} else {
		return "Arquivo Invalido";
	}	
}