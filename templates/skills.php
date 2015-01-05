<?php
		/**
	 * skills.php
	 * studentactivistnetwork.com
	 *
	 * @author: George Zhang
	 *
	 * list of skills from database
	 */

	// configuration
	require("../includes/config.php");

	// gets skills from database
	$result = query("SHOW COLUMNS FROM `organizations` WHERE Field='skill1'");
	$type = $result[0]['Type'];
	preg_match("/^enum\(\'(.*)\'\)$/", $type, $matches);
	$enum = explode("','", $matches[1]);

	// alphabetize the list
	$sorted = alphabetize($enum);

	// prints out all options
	foreach($sorted as $element) {
		print("<option value='{$element}'>{$element}</option>");
	}

?>