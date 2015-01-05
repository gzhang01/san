<?php

	/*
	 * login.php
	 * studentactivistnetwork.com
	 *
	 * @author: George Zhang
	 *
	 * Requires user to log in to access update.php
	 * 
	 */

	// configuration
	require("../includes/config.php");

	// if user arrives via GET, render form
	if ($_SERVER["REQUEST_METHOD"] == "GET") {
		render("loginform.php", ["title" => "Log In", "css" => "form.css"]);
	}

	else if ($_SERVER["REQUEST_METHOD"] == "POST") {
		// error checking username/password
		if (empty($_POST["username"])) {
			apologize("Please enter a username");
		}
		else if (empty($_POST["password"])) {
			apologize("Please enter a password");
		}

		// attempt to find user in database
		$result = query("SELECT * FROM `organizations` WHERE username = ?", $_POST["username"]);

		// if found
		if (count($result) == 1) {
			$org = $result[0];

			// if passwords match
			if (crypt($_POST["password"], $org["password"]) == $org["password"]) {
				// set session id
				$_SESSION["id"] = $org["id"];

				// redirect to update.php
				redirect("/update.php");
			}

			// if passwords don't match
			else {
				apologize("Invalid password!");
			}
		}

		// if not found
		else {
			apologize("Username not found!");
		}
	}


?>