<?php 
		include 'header.php';
		$aula_atual = 'arrays';
	?>


	<body>

		<h2>ARRAYS</h2>
		<hr>
		<small>Desenvolvimento Web II</small>

		
		<!-- <h3>Meus Cursos</h3>

			 <?php //$cursos = array("Excel","HTML-CSS","Pynton"); ?>

			<h4>Conteúdo do Array: </h4>
			<p><?php //	echo $cursos[0] . ', ' . $cursos[1] . ', ' .  $cursos[2]; 
		//	print_r($cursos) ?></p>
			<br> 

				<h4>Conteúdo do Array: </h4>
			<p><?php //echo $cursos[0] . ', ' . $cursos[1] . ', ' .  $cursos[2];  ?></p>
			<br> -->

			<?php $cursos = array("Curso 1" => "Excel",
								  "Curso 2" => "HTML-CSS",
								  "Curso 3" => "Pynton"); ?>
			
		

			<h4>Conteúdo do Array: </h4>
			<p><?php // echo $cursos['Curso 1'] ?></p>
			<br>

				<?php $cursos = array(
										"Excel" => array(
													"n_alunos" => 400,
													"titulo" => "Básico",
													"url" => "http://sinodalprogresso.com.br",
													"aval" => 200
										),
										"HTML-CSS" => array(
													"n_alunos" => 400,
													"titulo" => "Básico",
													"url" => "http://sinodalprogresso.com.br",
													"aval" => 200
													),
								  		"Pynton" => array(
													"n_alunos" => 400,
													"titulo" => "Básico",
													"url" => "http://sinodalprogresso.com.br",
													"aval" => 200
													)
										  ); ?>
			
		

			 <h4>Conteúdo do Array: </h4>
			<p><?php //echo $cursos['Curso 1'] ?></p>
			<br>


		<h3>Informação do Curso</h3>

			<h4>Título: </h4>
			<p><?php  echo $cursos["Excel"]["titulo"]?></p>
			<br>

			<h4>Número de Alunos: </h4>
			<p><?php  echo $cursos["Excel"]["n_alunos"]?></p>
			<br>

			<h4>Número de Avaliações:: </h4>
			<p><?php  echo $cursos["Excel"]["aval"]?></p>
			<br>

			<h4>URL da foto: </h4>
			<p><?php  echo $cursos["Excel"]["url"]?></p>
			<br>
		

		<h3>Agora é a sua vez</h3>

			<p>Crie um Array e solte as suas informações em sequência. Pesquise também funções que podem ser aplicadas neste tipo de dados.</p>
			<br>






		<?php include 'functions/bottom_index.php'; ?>


	</body>

</html>