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

//var_dump($todo);
//var_dump($_POST);

$vide = []; //tache a conserver
 for ($i=0;$i<count($todo); $i++)
 	{
 		if (in_array($i, $_POST['supprimer']))
 		{

 		}
 		else
 		{
 			array_push($vide, $todo[$i]);	
 		}
 	}


 	//var_dump($vide);

 	// Ouvrir le fichier avec le mode permettant de supprimer tout le contenu
 $fichier = fopen("data.csv", "w"); 
 	for ($i=0;$i<count($vide);$i++)
 	{
 		fputcsv($fichier, $vide[$i]);
  	}
  	fclose($fichier);

header("Location:index.php");
die();
 	// Parcourir le tableau $vide
 		// Utiliser la fonction fputcsv
 	// Fermer le fichier
 	// Redirection