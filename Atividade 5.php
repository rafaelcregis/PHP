<?php 

$idadeA=5;
$alturaA=1.70;
$sexoA="F";

$idadeB=32;
$alturaB=1.62;
$sexoB="F";

$idadeC=27;
$alturaC=1.78;
$sexoC="M";

$idadeD=40;
$alturaD=1.92;
$sexoD="M";

$idade=0;
$altura=0;
$sexo=0;

$cont=0;
$media=0;


while($cont <=5){
	if ($alturaA > $alturaB) {
		$altura = $alturaA;
		$alturaA = $alturaB;
		$alturaB = $altura;
	}elseif ($alturaB > $alturaC) {
		$idade = $alturaB;
		$alturaB = $alturaC;
		$alturaC = $altura;
	}elseif ($alturaC > $alturaD) {
		$altura = $alturaC;
		$alturaC = $alturaD;
		$alturaD = $altura;
	}
	$cont++;
}

	echo("A maior altura é $alturaD e a menor altura é $alturaA.<br/>");

while($sexo == "F"){
	
	}echo("A média de altura das mulheres é $sexo.<br/>");{

	$sexo=$alturaA+$alturaB+$alturaC+$alturaD; 
	$media= ($sexo / 2);
		

	}
	echo("A média de altura das mulheres é $media.<br/>");


 ?>