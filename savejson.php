<?php
	$a["name"] = $_GET['name'];
	$a["parent"] = $_GET['parent'];

	$inp = file_get_contents('test.json');
	$tempArray = json_decode($inp);
	array_push($tempArray, $a);
	$jsonData = json_encode($tempArray);
	file_put_contents('test.json', $jsonData);
	echo json_encode('Successfully Saved data. Thanks for contributing.');