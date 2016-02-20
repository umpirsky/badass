<! DOCTYPE html>
<html>
<head>
</head>
<body style="background-color:#2B3336;">
<PRE>
<?php
//Pedale project
$couleurpedale = array("#FF85BC","#CCFF00","#FFCE36","#01FFCC","#FFEB88","#FF8584"); //6
$art=file_get_contents('./asciiart.txt');
$artline = explode("\n", $art);	
for ($i = 0; $i < count($artline); $i++) {
	$chr=str_split($artline[$i]);
	$k=0;
	for ($j = 0; $j < count($chr); $j++) {
		$k++;
		echo '<font color="'.$couleurpedale[$k].'">'.$chr[$j].'</font>';
		if ($k ==count($couleurpedale)-1){
			$k=0;
		}
	}
}
?>
</PRE>
</body>