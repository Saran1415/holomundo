<!DOCTYPE html>
<title>Pares e Impares</title>
<head>
<meta charset="utf-8">
<!--Dado un número entero positivo determine si es par o impar-->
	<body>
		

		<?php
				
			$Num1 = 76;
			

			if ($Num1 > 0) {
			
			if ($Num1%2==0) {
					printf("El número $Num1 es par");
				} else {

					printf("El número $Num1 es impar");
				}
				
			} else  {
				printf("El número equivale a 0");
			}

			?>


	</body>


</head>