<!DOCTYPE html>
<title>Salario</title>
<head>
<meta charset="utf-8">
<!--El siguiente programa calcula el salario de un trabajador con un impuesto-->
	<body>
		

		<?php
			$SueldoT = 11000;
			$Impuestos = 15; //porcentaje

			$SueldoR = $SueldoT - (($SueldoT / 100)*15);

			echo $SueldoR;


		?>


	</body>


</head>