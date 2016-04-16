<?php 
$caminhoArquivo = "arquivos/arquivo.csv";
if (pathinfo($caminhoArquivo, PATHINFO_EXTENSION) == "csv") {
	$arquivo = file_get_contents($caminhoArquivo);
	$linhas = explode("\n", $arquivo);
	$tabela = '<table border = "1"> <tr>';
	foreach ($linhas as $key => $dados) {
		if ($key == 0) {
			$colunas = explode(";", $dados);
			foreach ($colunas as  $coluna) {
				$tabela = $tabela . "<td><strong> $coluna </strong></td>";
			}
		} else {	
			$colunas = explode(";", $dados);
			foreach ($colunas as  $coluna) {
				$tabela = $tabela . "<td> $coluna </td>";
			}
		}
		$tabela = $tabela . "</tr> <tr>";
	}
	echo "$tabela </tr> </table>";
} else {
	echo "Arquivo Invalido";
}