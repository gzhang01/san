<?php
	
	require("../includes/config.php");

/*
	$result = query("SHOW COLUMNS FROM `organizations` WHERE Field='cause'");
	$type = $result[0]['Type'];
	preg_match("/^enum\(\'(.*)\'\)$/", $type, $matches);
	$enum = explode("','", $matches[1]);
*/

	$enum = ["Religion", "Environment", "Social Justice", "Education"];


	$sorted = alphabetize($enum);

	dump($sorted);

?>