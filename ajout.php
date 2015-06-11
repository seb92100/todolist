<?php

var_dump($_POST);

//<form action="page.phtml" method="POST">

var_dump ($_POST ['title']);


$date = $_POST['date'] ."-". $_POST['months'] ."-". $_POST['year'];


$task= [
			$_POST['title'],
			$_POST['content'],
			$date,
			//$_POST['$date'],
			//$_POST(['date'],['months'],['year']),
			$_POST['priority'],
		];



var_dump($task);
var_dump($date);

$fichier = fopen("data.csv", "a"); // permet de retirer les informations sous base Excel
fputcsv($fichier, $task);
fclose($fichier);
header("Location:index.php");
die();


	for ($i=0;$i<count($toutesLesTaches);$i++)
	{
		$toutesLesTaches=($fichier[$i]);
	}


//$ToutesLesTaches =[feof($fichier),"fopen","fgetscv"];
var_dump ($toutesLesTaches);

	//,'content','date','months', 'year', 'priority']);


