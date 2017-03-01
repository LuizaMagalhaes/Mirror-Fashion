
<?php include ("cabecalho.php");
?>
<body> 
<div class="container">
<div class="produto">
	<h1 >Camiseta Caveira Gotica Fofa</h1>
		<p>Por Apenas R$ 39,90</p>
	<form action="checkout.php" method="POST">
		<fieldset class="cores">
			<legend>Escolha a cor</legend>

			<input type="radio" name="cor" id="verde" checked value="verde"> 
			<label for="verde"> <img src="/img/produtos/foto2-verde.png"></label>

			<input type="radio" name="cor" id="rosa" value="rosa"> 
			<label for="rosa"> <img src="/img/produtos/foto2-rosa.png"></label>

			<input type="radio" name="cor" id="azul" value="azul"> 
			<label for="azul"> <img src="/img/produtos/foto2-azul.png"></label>
		</fieldset>	
	<input type="hidden" name="nome" value="Camiseta caveira">
	<input type="hidden" name="preco" value="39,90">
<fieldset class="cores" >
<div class="tamanhos">
	<legend>Escolha seu Tamanho </legend>
	<input type="range" min="36" max="46" value="46" step="2" name="Tamanho" id="tam">
	<output for="tam"></output>
	</div>
</fieldset>
	<input type="submit" class="comprar" value="comprar" >
</form>

</div>
<div class="detalhes">
	<h2>Detalhes do produto</h2>
	<p>Essa é a melhor blusinha que voce ja viu. Serigrafia emborrachada. Compre já e receba hoje mesmo pela nossa entrega a jato!!</p>
<table>
<thead>
	<tr>
		<th>Característica</th>
		<th>Detalhes</th>
	</tr>
</thead>
<tbody>
	<tr>
		<td>Modelo</td>
		<td>Camiseta</td>
	</tr>	
	<tr>
		<td>Material</td>
		<td> Algodão e poliester</td>	
	</tr>
	<tr>
		<td>Cores</td>
		<td> Azul, Rosa e Verde</td>	
	</tr>
	<tr>
		<td>Lavagem</td>
		<td> Lavar a mão</td>	
	</tr>
</tbody>
</table>

</div>
</div>

<?php include ("rodape.php");
?>


<script>

document.querySelector("#tam").oninput= outputTamanho
function outputTamanho(){
	var tamanho=document.querySelector("#tam").value
	document.querySelector("output").textContent= tamanho
}
</script>
</body>
</html>