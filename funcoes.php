<?php

function validarBolo($ingredientesPost){
	if (array_key_exists('ingredientes', $ingredientesPost)) {
			$ingredientes = explode("\n", $ingredientesPost['ingredientes']);
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
				return '<h2>Bolo Aceito</h2>';
			}
		}
}