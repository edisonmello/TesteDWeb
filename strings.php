<?php 
		include 'header.php';
		$aula_atual = 'strings';
	?>


	<body>

		<h2>STRINGS</h2>
		<hr>
		<small>Desenvolvimento Web II</small>

		<h3>Uma string é uma série de caracteres, onde um caractere é o mesmo que um byte</h3>
		
		
			<?php $str = "Eu sou um string"; ?>

			<h4>Valor da variável:</h4>
			<p><?php echo $str; ?></p>
			<br>

			<h4>Número de caracteres:</h4>
			<p><?php echo strlen($str); ?></p>
			<br>

			<h4>Primeiro caractere:</h4>
			<p><?php echo $str[0]; ?></p>
			<br>

			<h4>Último caractere:</h4>
			<p><?php echo $str[-1]; ?></p>
			<br>

			<h4>Como extrair parte de um string:</h4>
			<p><?php echo substr($str,0,2); ?></p>

		<h3>Exemplo de Chassi - Trabalhando com Strings</h3>

			<?php
				$chassi = "9BWZZZ377TT563899";
				
			?>

			<h4>Código do Chassi:</h4>
			<p><?php echo $chassi;?></p>
			<br>

			<h4>Código do País:</h4>
			<p><?php echo substr($chassi,0,3); ?></p>
			<br>

			<h4>Modelo do veículo:</h4>
			<p><?php echo substr($chassi,6,3); ?></p>
			<br>

			<h4>Nro. de Série:</h4>
			<p><?php echo substr($chassi,11); ?></p>
			<br>


		<h3>Como limpar strings</h3>

			<?php

				$email = "      edisonmello@gmail.com  ";
				$site = "http://www.sinodalprogresso.com.br"

			?>
			

			<h4>Email:</h4>
			<p><?php echo trim($email); ?></p>
			<br>

			<h4>Site:</h4>
			<a href="<?php echo $site ?>"><?php echo trim($site,"http://") ?> </a>
			<br>


		<h3>Agora é a sua vez</h3>

			<p>Use este espaço para testar novas funções com strings.</p>
			<br>







	<?php include 'functions/bottom_index.php'; ?>


	</body>

</html>