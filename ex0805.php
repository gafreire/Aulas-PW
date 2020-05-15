<!DOCTYPE html>
<html>
	<head>
		<title>Exercicios 08/05</title>
	</head>
	<body>

		<h2>1- Dado o valor  68º graus fahrenheit, usando a formula converter em graus celsius.</h2>
		<?php
		$a = 68;
		echo (68 - 32) / 1.8;
		?>

		<h2>2- Dado o valor Fulano para nome, R$ 1000,00 para valor e 10 para quantidade, calcule o valor total da venda.</h2>
		<?php
		$nome = "Fulano";
		$quantidade = 10;
		$valor = 1000;
		$conta = $quantidade * $valor;
		$frase = "O $nome tinha $quantidade produtos e vendeu todos por $valor reais. Arrecadando $conta reais";
		echo "$frase";
		?>

		<h2>3- Dado o valor 10 para comprimento, 20 para largura e R$ 36,00 para preço, calcular o custo para assentar o piso de  um cômodo.</h2>
		<?php
		$comprimento = 10;
		$largura = 20;
		$conta2 = $comprimento * $largura;
		$preco = 36;
		$preco2 = $preco * 2;

		$frase2 = "A cada $conta2 metros quadrados custa $preco. Entao 400 metros custa $preco2";
		echo "$frase2";
		?>

		<h2> 4- Dado o valor 10 em X e 20 em Y, calcule e apresente o resultado de (X*N)2.</h2>
		<?php
		$x = 10;
		$y = 20;
		$z = 10 * 20;
		echo pow($z,2)
		?>



	</body>
</html>