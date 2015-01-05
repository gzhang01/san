<?php
	/**
	 * cause.php
	 * studentactivistnetwork.com
	 *
	 * @author: George Zhang
	 *
	 * list of causes from database
	 */

	//configuration
	require("../includes/config.php");

	// gets enum options from database
	$result = query("SHOW COLUMNS FROM `organizations` WHERE Field='cause'");
	$type = $result[0]['Type'];
	preg_match("/^enum\(\'(.*)\'\)$/", $type, $matches);
	$enum = explode("','", $matches[1]);

	// alphabetizes $enum
	$sorted = alphabetize($enum);

	// prints out options for dropdown list
	foreach($sorted as $element) {
		print("<option value='{$element}'>{$element}</option>");
	}

?>