<?php


$todo = [];

// ouvrir le fichier en lecture seule
// Utiliser fgetcsvf
// Fermer le fichier


$fichier = fopen("data.csv","r");

while(! feof($fichier))
  {
 	 //var_dump(fgetcsv($fichier));
  	$oneTask = fgetcsv($fichier);
  	if ($oneTask != false)
  	{
  		array_push($todo, $oneTask);
  	}
  }

fclose($fichier);



/*
echo $todo[0][1];
echo $todo[1][1];
echo $todo[2][1];
echo $todo[3][1];
echo $todo[4][1];
*/

include "page.phtml";



