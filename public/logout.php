<?php
	/*
	 * logout.php
	 * studentactivistnetwork.com
	 *
	 * @author: George Zhang
	 *
	 * Logs the user out
	 */

	require("../includes/config.php");

	unset($_SESSION["id"]);

	redirect("/");


?>