<html>
<body>
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			&nbsp;
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<h2>Cadastro do Cliente</h2>
		</div>
	</div>
	
	<div class="row">
		<div class="col-sm-12">
			<form action="controllerNoticia.php" method="post">
			<div class="row">
				<div class="col-sm-6">
					<div class="form-group">
					    <label for="id">ID:</label>
					    <input type="text" class="form-control" id="id" name="id">
			  		</div>
				</div>
				    <div class="col-sm-6">
					<div class="form-group">
					    <label for="nome">Nome:</label>
					    <input type="text" class="form-control" id="nome" name="nome">
			  		</div>
				   </div>
				<div class="col-sm-6">
					<div class="form-group">
			  		  <label for="telefone">Telefone:</label>
			 		   <input type="text" class="form-control" id="telefone" name="telefone">
				  </div>
				</div>
			</div>
				
				
			<div class="row">
				<div class="col-sm-6">
				  <div class="form-group">
				    <label for="email">E-mail:</label>
				    <input type="text" class="form-control" id="email" name="email">
				  </div>
				</div>
				
			</div>
			<div class="row">
				<div class="col-sm-6">
				  <div class="form-group">
				    <label for="endereco">Endereço:</label>
				    <input type="text" class="form-control" id="email" name="email">
				  </div>
				</div>
				<div class="col-sm-6">
					<div class="form-group">
			  		  <label for="numero">Número:</label>
			 		   <input type="text" class="form-control" id="numero" name="numero">
				  </div>
				</div>
			</div>
			<div class="row">
				  <div class="col-sm-6">
					<div class="form-group">
			  		  <label for="complemento">Complemento:</label>
			 		   <input type="text" class="form-control" id="complemento" name="complemento">
				  </div>
				</div>
				<div class="col-sm-6">
					<div class="form-group">
			  		  <label for="dataPublicacao">Bairro:</label>
			 		   <input type="text" class="form-control" id="bairro" name="bairro">
				  </div>
				</div>
				<div class="col-sm-6">
					<div class="form-group">
			  		  <label for="dataPublicacao">Cidade:</label>
			 		   <input type="text" class="form-control" id="cidade" name="cidade">
				  </div>
				</div>
					<div class="col-sm-6">
					<div class="form-group">
			  		  <label for="dataPublicacao">CEP:</label>
			 		   <input type="text" class="form-control" id="cep" name="cep">
				  </div>
				</div>
			</div>
			  <button type="submit" class="btn btn-primary">CADASTRAR</button>
			</form> 	
		</div><!--fecha coluna principal-->
	</div><!--fecha linha principal-->
</div><!--fecha container-->
</body>
</html>