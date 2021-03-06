<?php	

	class Cliente{
	public $id, $nome, $telefone, $celular, $email, $endereco, $numero, $complemento, $bairro, $cidade, $cep;
	/********************************************************/
	public function setId($id){
		$this->id = $id;
	}
	public function setNome($nome){
		$this->nome = $nome;
	}
	public function setTelefone($telefone){
		$this->telefone = $telefone;
	}
	public function setCelular($celular){
		$this->celular = $celular;
	}
	public function setEmail($email){
		$this->email = $email;
	}
	public function setEndereco($endereco){
		$this->endereco = $endereco;	
	}
	public function setNumero($numero){
		$this->numero = $numero;	
	}
	public function setComplemento($complemento){
		$this->complemento = $complemento;	
	}
	public function setBairro($bairro){
		$this->bairro = $bairro;	
	}
	public function setCidade($cidade){
		$this->cidade = $cidade;	
	}
	public function setCep($cep){
		$this->cep = $cep;	
	}
	/********************************************************/
	public function getId(){
		return $this->id;
	}
	public function getNome(){
		return $this->nome;
	}
	public function getTelefone(){
		return $this->telefone;
	}
	public function getCelular(){
		return $this->dataCelular;
	}
	public function getEmail(){
		return $this->email;
	}
	public function getEndereco(){
		return $this->endereco;
	}
	public function getNumero(){
		return $this->numero;
	}
	public function getComplemento(){
		return $this->complemetno;
	}
	public function getBairro(){
		return $this->bairro;
	}
	public function getCidade(){
		return $this->cidade;
	}
	public function getCep(){
		return $this->cep;
	}
	/********************************************************/
	public function cadastrar($dados){
		//$dados=array($titulo, $descricao, $autor, $dataPublicacao, $curso)
		list($id, $nome, $telefone, $celular, $email, $endereco, $numero, $complemento, $bairro, $cidade, $cep) = $dados;
		
		$this->setId($id);
		$this->setNome($nome);
		$this->setTelefone($telefone);
		$this->setCelular($celular);
		$this->setEmail($endereco);
		$this->setNumero($numero);
		$this->setComplemento($complemento);
		$this->setBairro($bairro);
		$this->setCidade($cidade);
		$this->setCep($cep);
		
		$conectar = new mysqli("localhost","root","","vendaslisboa");
		$sql = "insert into cliente 
					(id, nome, telefone, celular, endereco, numero, complemento, bairro, cidade, cep)
					values (
					'{$this->getId()}', 
					'{$this->getNome()}',
					'{$this->getTelefone()}', 
					'{$this->getCelular()}',
					'{$this->getEndereco()}'
					'{$this->getNumero()}'
					'{$this->getComplemento()}'
					'{$this->getBairro()}'
					'{$this->getCidade()}'
					'{$this->getCep()}'
					)		
		";		
		$gravar = $conectar->query($sql);
		#verificar quantos registros foram afetados com o $sql
		$num = $conectar->affected_rows;
		if($num==1) {
			echo "<fieldset>";
			echo "<h2>Os dados abaixo foram armazenados na classe com sucesso!!!</h2>";
			echo "<br>ID: ". $this->getId();
			echo "<br>Nome: ". $this->getNome();
			echo "<br>Telefone: ". $this->getTelefone();	
			echo "<br>Celular: ". $this->getCelular();
			echo "<br>Endereço: ". $this->getEndereco();
			echo "<br>Número: ". $this->getNumero();
			echo "<br>Complemento: ". $this->getComplemento();
			echo "<br>Bairro: ". $this->getBairro();
			echo "<br>Cidade: ". $this->getCidade();
			echo "<br>Cep: ". $this->getCep();
			echo "</fieldset>";
		}else {
			echo "<fieldset>";
			echo "Erro ao gravar os dados";	
			echo "</fieldset>";
		}
	}
	public function alterar($dados){}
	
	public function ativarInativar($id,$situacao){
		$this->setId($id);
		$this->setSituacao($situacao);
		
		$sql = "update cliente set
					ativo=" . $this->getSituacao() . " where id= " . $this->getId();		
		//exit;
		$conectar = new mysqli("localhost","root","","vendaslisboa");
		$executar = $conectar->query($sql);
		$num= $conectar->affected_rows;
		if($num==1){
			return 1;
		}else{
			return 0;
		}
	}
	public function buscarUm($id){}//fecha método buscarUm
	public function buscarTodos(){
		$sql = "select * from cliente ORDER by nome desc ";
		$conectar = new mysqli("localhost","root","","vendaslisboa");
		$listar = $conectar->query($sql);
		$noticias = array();
		while($linha = $listar->fetch_array()) {
			$noticias[] = $linha;
		}
		return $noticias;
	}//fecha método buscarTodos
}//fecha classe
?>
