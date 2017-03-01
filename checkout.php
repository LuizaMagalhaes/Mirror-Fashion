<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Checkout Mirror Fashion</title>
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
	<div class="jumbotron">
		<div class="container">
			<h1>Otima escolha!</h1>
				<p>Obrigado por comprar na Mirror-Fashion!
					Preencha seus dados para efetivar a compra.</p>
		</div>	
	</div> <!--jumbo-->
	<div class="container">
	<div class="row">
	<div class="col-sm-4">
		<div class="panel panel-default">
			<div class="panel-heading">


				<h2 class="panel-title">Sua Compra</h2>
			</div> <!--panelhead-->
		

		<div class="panel-body">
			<img src="/img/produtos/foto2-<?= $_POST["cor"]?>.png"
				class="img-thumbnail img-responsive">

			<dl>
				<dt>Cor</dt>
				<dd><?= $_POST['cor']?></dd>

				<dt>Tamanho</dt>
				<dd><?= $_POST['Tamanho'] ?></dd>

				<dt>Produto</dt>
				<dd><?= $_POST['nome'] ?></dd>

				<dt>Preco</dt>
				<dd id="preco"><?= $_POST['preco'] ?></dd>
			</dl>
			<div class="form-group">
				<label for="qt">Quantidade</label>
				<input id="qt" class="form-control" type="number" min="0" max="99" value="1">
			</div>
			<div class="form-group">
				<label for="total">Total</label>
				<output for="qt preco" id="total" class="form-control">
					<?=$_POST["preco"]?>
				</output>	
			</div>
			
				
		</div> <!--panel body-->
		</div> <!--paneldef-->
		</div> <!--col4 -->
	
		<form class="col-sm-8">
		<div class="col-sm-6">
				<fieldset>
				<legend>Dados Pessoais</legend>
				<div class="form-group">
					<label for="nome">Nome Completo</label>
					<input type="text" class="form-control" id="nome"  name="nome">
				</div> <!--formgroup 1-->
				<div class="form-group">
					<label for="email">email</label>
					<input type="email" class="form-control" id="email"  name="email">
				</div><!--formgroup 2-->
				<div class="form-group">
					<label for="cpf">CPF</label>
					<input type="text" class="form-control" id="cpf"  name="cpf">
				</div><!--formgroup 3-->
				
				<div class="checkbox">
					<label>
						<input type="checkbox" value="sim" name="spam" checked>
							Quero receber novidades da Mirror Fashion
					</label>
				</div><!--check-->
				</fieldset>
				</div>	<!--col6-->	
			<div class="col-sm-6">
				<fieldset>
					<legend>Cartao de Credito</legend>

					<div class="form-group">
						<label for="numero-cartao">Numero - CVV</label>
						<input type="text" class="form-control"
								id="numero-cartao" name="numero-cartao">
					</div> <!--formgroup 4-->
					<div class="form-group">
						<label for="bandeira-cartao">Bandeira</label>
						<select name="bandeira-cartao" id="bandeira-cartao"
							class="form-control">
							<option value="master">MasterCard</option>
							<option value="visa">VISA</option>
							<option value="amex">American Express</option>
							<option value="banri">BanriCompras</option>
							<option value="elo">Elo</option>


						</select>
					</div><!--formgroup 5-->
					<div class="form-group">
						<label for="validade-cartao">Validade</label>
						<input type="month" class="form-control" id="validade-cartao" name="validade-cartao">
					</div> <!--formgroup 6-->
					
			    </fieldset>
				</div>	<!--col6 2-->
				<button type="submit" class="btn btn-primary">
					Confirmar Pedido
				</button>
				</div>	
			</form>

	
	</div>
	</div> <!--row-->
	<script src="js/total.js"></script>
</body>
</html>
