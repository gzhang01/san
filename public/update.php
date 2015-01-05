<?php

	/**
     * profile.php
     * studentactivistnetwork.com
     *
     * @author: George Zhang
     *
     */

	// configuration
	require("../includes/config.php");

	// if user reaches page via GET
	if ($_SERVER["REQUEST_METHOD"] == "GET") {
		// gets info of logged in account
		$result = query("SELECT * FROM `organizations` WHERE id = ?", $_SESSION["id"]);
		if ($result === false) {
			apologize("Something went wrong!");
		}

		else {
			$org = $result[0];

			// renders page
			render("updatetp.php", ["title" => "Update Your Information", "org" => $org, "css" => "form.css"]);
		}
	}

	else if ($_SERVER["REQUEST_METHOD"] == "POST") {
	    $q = query("UPDATE `organizations` SET organization_name = ?, email = ?, description = ?, cause = ?, skill1 = ?, skill2 = ?, skill3 = ?, skill_wanted1 = ?, skill_wanted2 = ? WHERE id = ?", $_POST['organization_name'], $_POST['email'], $_POST['description'], $_POST['cause'], $_POST['skill1'], $_POST['skill2'], $_POST['skill3'], $_POST['skill_wanted1'], $_POST['skill_wanted2'], $_SESSION['id']);
        // if insert failed
        if($q === false) {
            apologize("Something went wrong!"); 
        }

        // else update was successful
        else {
        	render("updatesuccess.php", ["title" => "Update Successful!"]);
        }
	}

?>