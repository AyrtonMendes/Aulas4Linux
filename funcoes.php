<?php

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