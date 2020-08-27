<?php
	require_once('livro.php');
	
	$opcao = readline("Deseja cadastrar um novo livro? [S/N]: ");
	while(strtolower($opcao) == 's'){
		$nome = readline("Nome do livro: ");
		$autor = readline("Autor do livro: ");
		$ano = readline("Ano do livro: ");
		$genero = readline("Genero do livro: ");
		$editora = readline("Editora do livro: ");
		
		$livro = new Livro($nome, $autor, $ano, $genero, $editora);
		
		echo 'O seguinte item foi cadastrado: ' . PHP_EOL;
		
		echo 'Nome: ' . $livro->getNome() . PHP_EOL;
		echo 'Autor: ' . $livro->getAutor() . PHP_EOL;
		echo 'Ano: ' . $livro->getAno() . PHP_EOL;
		echo 'Genero: ' . $livro->getGenero() . PHP_EOL;
		echo 'Editora: ' . $livro->getEditora() . PHP_EOL;
		
		$opcao = readline("Deseja cadastrar um novo livro? [S/N]: ");
	}
