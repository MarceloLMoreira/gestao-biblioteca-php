<?php
	class Livro{
		private $nome;
		private $autor;
		private $ano;
		private $genero;
		private $editora;
		
		function Livro($nome, $autor, $ano, $genero, $editora){
			$this->nome = $nome;
			$this->autor = $autor;
			$this->ano = $ano;
			$this->genero = $genero;
			$this->editora = $editora;
		}
		
		public function setNome($nome){
			$this->nome = $nome;
		}
		
		public function getNome(){
			return $this->nome;
		}
		
		public function setAutor($autor){
			$this->autor = $autor;
		}
		
		public function getAutor(){
			return $this->autor;
		}
		
		public function setAno($ano){
			$this->ano = $ano;
		}
		
		public function getAno(){
			return $this->ano;
		}
		
		public function setGenero($genero){
			$this->genero = $genero;
		}
		
		public function getGenero(){
			return $this->genero;
		}
		
		public function setEditora($editora){
			$this->editora = $editora;
		}
		
		public function getEditora(){
			return $this->editora;
		}
	}
