<!DOCTYPE html>
<html>
	<head>
		<title>Ex Matematica</title>
		<meta charset="utf-8">
	</head>
	<body>

		<?php
		//declarando valores das variaveis
		$a = 4;
		$b = 2;
		?>

		<h2>Adicao</h2>
		<p>
			<?php
			echo $a + $b;
			?>
		</p>

		<h2>Subtracao</h2>
		<p>
			<?php
			echo $a - $b;
			?>
		</p>

		<h2>Multiplicacao</h2>
		<p>
			<?php
			echo $a * $b;
			?>
		</p>

		<h2>Divisao</h2>
		<p>
			<?php
			echo $a / $b;
			?>
		</p>

		<h2>Modulo(Resto de divisao)</h2>
		<p>
			<?php
			echo $a % $b;
			?>
		</p>

		<h2>Elevacao</h2>
		<p>
		<?php
		echo pow(4,2) ."<br>";
		echo pow(-4,2) ."<br>";
		?>
		</p>

		<h2>Raiz</h2>
		<?php
		echo sqrt(9) ."<br>";
		echo sqrt(16) ."<br>";
		?>

	</body>
</html>