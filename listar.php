<?php
	include ("conexaoCliente.php");
	$listarNoticia = new Noticia();
	$valor = $listarNoticia->buscarTodos();
?>	
<table border="1">
	<th>Id</th>
	<th>Nome</th>
	<th>Telefone</th>		
	<th>Celular</th>
	<th>Email</th>
	<th>Endereço</th>
	<th>Numero</th>
	<th>Complemento</th>
	<th>Bairro</th>
	<th>Cidade</th>
	<th>Cep</th>
	<?php
		foreach($valor as $linha){
	?>
	<tr>
		<td><?php echo $linha["id"]; ?></td>
		<td><?php echo $linha["nome"]; ?></td>
		<td><?php echo $linha["telefone"]; ?></td>
		<td><?php echo $linha["celular"]; ?></td>
		<td><?php echo $linha["email"]; ?></td>
		<td><?php echo $linha["endereco"]; ?></td>
		<td><?php echo $linha["numero"]; ?></td>
		<td><?php echo $linha["complemento"]; ?></td>
		<td><?php echo $linha["bairro"]; ?></td>
		<td><?php echo $linha["cidade"]; ?></td>
		<td><?php echo $linha["cep"]; ?></td>
		<td>
			<a href=controllerAlterar.php<?=$linha["id"]?>>[ ALTERAR ]</a>
			<a href=controllerAtivarInativar.php?id=<?=$linha["id"]?>&situacao=0>[ INATIVAR ]</a>
			<a href=controllerAtivarInativar.php?id=<?=$linha["id"]?>&situacao=1>[ ATIVAR ]</a>
		</td>
	</tr>
	<?php
	}		
	?>
</table>