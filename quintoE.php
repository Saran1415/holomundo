<!DOCTYPE html>
<title>Mayor positivo</title>
<head>
<meta charset="utf-8">
<!--Obtener el mayor de dos números enteros positivos-->
	<body> 

		<center>
		

		<?php
			
			$Num1 = 205;
			$Num2 = 120;


			if ($Num1 > $Num2) {
				//printf("$Num1 es mayor que $Num2");
				$Mayor = $Num1;
			}else{
				//printf("$Num2 es mayo que $Num1");
				$Mayor = $Num2;
			}
			

		echo "El número mayor entre $Num1 y $Num2 es: <br> $Mayor";

		?>


		</center>	
	
	</body>


</head>