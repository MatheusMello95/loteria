<?php 
	function geraNumeros(){
		$x = array();
		for ($i=0; $i < 6; $i++) {
				$a = rand(1,60);	
				if(in_array($a, $x)){
					$a = rand(1,60);
					$x[$i] = $a;
				}else {
					$x[$i] = $a;
				}
		}
		asort($x);
		return $x;
	}

	
		
	//	var_dump($numeros);
	for ($i=0; $i < 3; $i++) { 

	$numeros = geraNumeros();
	$n = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60);
	for ($x=0; $x < count($numeros); $x++) {
		for ($a=0; $a < count($n); $a++) { 
			if (in_array($numeros[$x], $n)) {
				$cor = 'background-color:blue';
			}else{
				$cor = 'background-color:white';
			}
		}
	}
	 echo "<div class='container'>
	 <br><br><br>
	 <div class='row'>
	 		<table border='1' class='table table-responsive table-striped' id='tabela'>
	 			<tr>
	 				<td class=$cor><center><b>".$n[0]."</b></center></td>
	 				<td class=$cor><center><b>".$n[1]."</b></center></td>
	 				<td class=$cor><center><b>".$n[2]."</b></center></td>
	 				<td class=$cor><center><b>".$n[3]."</b></center></td>
	 				<td class=$cor><center><b>".$n[4]."</b></center></td>
	 				<td class=$cor><center><b>".$n[5]."</b></center></td>
	 				<td class=$cor><center><b>".$n[6]."</b></center></td>
	 				<td class=$cor><center><b>".$n[7]."</b></center></td>
	 				<td class=$cor><center><b>".$n[8]."</b></center></td>
	 				<td class=$cor><center><b>".$n[9]."</b></center></td>
	 			</tr>
				<tr>
	 				<td class=$cor><center><b>".$n[10]."</b></center></td>
	 				<td class=$cor><center><b>".$n[11]."</b></center></td>
	 				<td class=$cor><center><b>".$n[12]."</b></center></td>
	 				<td class=$cor><center><b>".$n[13]."</b></center></td>
	 				<td class=$cor><center><b>".$n[14]."</b></center></td>
	 				<td class=$cor><center><b>".$n[15]."</b></center></td>
	 				<td class=$cor><center><b>".$n[16]."</b></center></td>
	 				<td class=$cor><center><b>".$n[17]."</b></center></td>
	 				<td class=$cor><center><b>".$n[18]."</b></center></td>
	 				<td class=$cor><center><b>".$n[19]."</b></center></td>
	 			</tr>
				<tr>
	 				<td class=$cor><center><b>".$n[20]."</b></center></td>
	 				<td class=$cor><center><b>".$n[21]."</b></center></td>
	 				<td class=$cor><center><b>".$n[22]."</b></center></td>
	 				<td class=$cor><center><b>".$n[23]."</b></center></td>
	 				<td class=$cor><center><b>".$n[24]."</b></center></td>
	 				<td class=$cor><center><b>".$n[25]."</b></center></td>
	 				<td class=$cor><center><b>".$n[26]."</b></center></td>
	 				<td class=$cor><center><b>".$n[27]."</b></center></td>
	 				<td class=$cor><center><b>".$n[28]."</b></center></td>
	 				<td class=$cor><center><b>".$n[29]."</b></center></td>
	 			</tr>
				<tr>
	 				<td class=$cor><center><b>".$n[30]."</b></center></td>
	 				<td class=$cor><center><b>".$n[31]."</b></center></td>
	 				<td class=$cor><center><b>".$n[32]."</b></center></td>
	 				<td class=$cor><center><b>".$n[33]."</b></center></td>
	 				<td class=$cor><center><b>".$n[34]."</b></center></td>
	 				<td class=$cor><center><b>".$n[35]."</b></center></td>
	 				<td class=$cor><center><b>".$n[36]."</b></center></td>
	 				<td class=$cor><center><b>".$n[37]."</b></center></td>
	 				<td class=$cor><center><b>".$n[38]."</b></center></td>
	 				<td class=$cor><center><b>".$n[39]."</b></center></td>
	 			</tr>
				<tr>
	 				<td class=$cor><center><b>".$n[40]."</b></center></td>
	 				<td class=$cor><center><b>".$n[41]."</b></center></td>
	 				<td class=$cor><center><b>".$n[42]."</b></center></td>
	 				<td class=$cor><center><b>".$n[43]."</b></center></td>
	 				<td class=$cor><center><b>".$n[44]."</b></center></td>
	 				<td class=$cor><center><b>".$n[45]."</b></center></td>
	 				<td class=$cor><center><b>".$n[46]."</b></center></td>
	 				<td class=$cor><center><b>".$n[47]."</b></center></td>
	 				<td class=$cor><center><b>".$n[48]."</b></center></td>
	 				<td class=$cor><center><b>".$n[49]."</b></center></td>
	 			</tr>
				<tr>
	 				<td class=$cor><center><b>".$n[50]."</b></center></td>
	 				<td class=$cor><center><b>".$n[51]."</b></center></td>
	 				<td class=$cor><center><b>".$n[52]."</b></center></td>
	 				<td class=$cor><center><b>".$n[53]."</b></center></td>
	 				<td class=$cor><center><b>".$n[54]."</b></center></td>
	 				<td class=$cor><center><b>".$n[55]."</b></center></td>
	 				<td class=$cor><center><b>".$n[56]."</b></center></td>
	 				<td class=$cor><center><b>".$n[57]."</b></center></td>
	 				<td class=$cor><center><b>".$n[58]."</b></center></td>
	 				<td class=$cor><center><b>".$n[59]."</b></center></td>
	 			</tr>
	 		</table>
	 		<br>
	 	</div>
	 	</div>";
	 }
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	 	<link rel="stylesheet" type="text/css" href="style.css">
 	
	<link rel="stylesheet" href="css/bootstrap.min.css" >
	<link rel="stylesheet" href="css/bootstrap-theme.min.css" >
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript"></script>		
	
 </head>
 <body>
 
 </body>
 </html>
