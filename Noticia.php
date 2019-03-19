<?php	
//github.com/rafaelflorindo/InformaticaIntegrado/
	
class Noticia{
	public $id, $titulo, $descricao, $autor;
	public $dataPublicacao, $curso;
	/********************************************************/
	public function setTitulo($titulo){
		$this->titulo = $titulo;
	}
	public function setDescricao($descricao){
		$this->descricao = $descricao;
	}
	public function setAutor($autor){
		$this->autor = $autor;
	}
	public function setDataPublicacao($dataPublicacao){
		$this->dataPublicacao = $dataPublicacao;
	}
	public function setCurso($curso){
		$this->curso = $curso;
	}
	/********************************************************/
	public function getTitulo(){
		return $this->titulo;
	}
	public function getDescricao(){
		return $this->descricao;
	}
	public function getAutor(){
		return $this->autor;
	}
	public function getDataPublicacao(){
		return $this->dataPublicacao;
	}
	public function getCurso(){
		return $this->curso;
	}
	/********************************************************/
	public function cadastrar($dados){
		//$dados=array($titulo, $descricao, $autor, $dataPublicacao, $curso)
		list($titulo, $descricao, $autor, $dataPublicacao, $curso) = $dados;
		
		$this->setTitulo($titulo);
		$this->setDescricao($descricao);
		$this->setAutor($autor);
		$this->setDataPublicacao($dataPublicacao);
		$this->setCurso($curso);
		
		echo "<fieldset>";
		echo "<h2>Os dados abaixo foram armazenados na classe com sucesso!!!</h2>";
		echo "<br>Título: ". $this->getTitulo();
		echo "<br>Descrição: ". $this->getDescricao();
		echo "<br>Autor: ". $this->getAutor();	
		echo "<br>Publicado em: ". $this->getDataPublicacao();
		echo "<br>Curso: ". $this->getCurso();
		echo "</fieldset>";
	}
	public function alterar($dados){}
	public function excluir($id){}
	public function buscarUm($id){}
	public function buscarTodos(){}
}
?>