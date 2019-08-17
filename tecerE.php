<!DOCTYPE html>
<title>Calculadora</title>
<head>
<meta charset="utf-8">
<!--Programa que dados 2 números calcule la suma, resta, multiplicación y división-->
	<body>
		

		<?php
				

			$V1 = 14;
			$V2 = 7;
			$Suma = $V1 + $V2;
			$Resta = $V1 - $V2;
			$Multiplicación = $V1 * $V2;
			$Division = $V1 / $V2;


			printf("La suma de $V1 mas $V2 es: <br> $Suma <br><br>");
			printf("La resta de $V1 menos $V2 es: <br> $Resta <br><br>");
			printf("La multiplicación de $V1 por $V2 es: <br> $Multiplicación <br><br>");
			printf("La división de $V1 sobre $V2 es: <br> $Division <br><br>");

			//*printf("El modulo de $V1 y $V2 es %0.1f, $V1 % $V2" );*//
			

			?>


	</body>


</head>