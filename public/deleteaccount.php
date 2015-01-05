<?php
	/**
	 * deleteaccount.php
	 * studentactivistnetwork.com
	 *
	 * @author: George Zhang
	 *
	 * allows user to delete account from database
	 */

	// configuration
	require("../includes/config.php");

	if ($_SERVER["REQUEST_METHOD"] == "GET") {
		render("deleteconfirmation.php", ["title" => "Delete Account?", "css" => "form.css"]);
	}

	

?>