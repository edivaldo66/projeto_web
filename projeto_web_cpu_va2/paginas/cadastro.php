<h2 class="text-center">Cadastro</h2>

<form action="processar.php" method="POST">

	<div class="row">
		<div class="col-md-3">
		</div>
		
		<div class="col-md-6">

				<label for="nomeNome">Nome</label>
				<input class="form-control" id="nomeNome" type="text" placeholder="Digite seu nome">
				<br>

			
				<form>
				  <div class="form-group">
				    <label for="exampleInputEmail1">Email</label>
				    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite seu email">
				    <small id="emailHelp" class="form-text text-muted">Não compartilharemos seu e-mail com ninguém.</small>
				  </div>

				  <div class="form-group">
				    <label for="exampleInputPassword1">Senha</label>
				    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Digite sua senha">
				  </div>
				  <div class="form-group form-check">
				    <input type="checkbox" class="form-check-input" id="exampleCheck1">
				    <label class="form-check-label" for="exampleCheck1">Lembre-me</label>
				  </div>

				  <div class="form-row">
				    <div class="form-group col-md-6">
				      <label for="inputCity">Cidade</label>
				      <input type="text" class="form-control" id="inputCity">
				    </div>
				    <div class="form-group col-md-4">
				      <label for="inputState">Estado</label>
				      <select id="inputState" class="form-control">
				        <option selected>Escolha...</option>
				        <option>MG</option>
				        <option>SP</option>
				        <option>RJ</option>
				        <option>ES</option>
				      </select>
				    </div>
				    <div class="form-group col-md-2">
				      <label for="inputZip">CEP</label>
				      <input type="text" class="form-control" id="inputZip">
				    </div>
				  </div>

				  <button type="submit" class="btn btn-primary">Enviar</button>
				</form>

			<br>

		</div>
	<div class="col-md-6">
	</div>

	</div>

	
</form>