<?php

	/**
     * profile.php
     * CS50 Final Project
     *
     * @author: George Zhang
     * @author: Michael O'Brien
     * @author: Leia Wedlund
     *
     */

	require("../includes/config.php");

     // queries database for organization of clicked row
	$result = query("SELECT * FROM `organizations` WHERE id = '{$_GET['id']}'");
     $org = $result[0];

     $skills = append_skills($org);
     $skills_wanted = append_skills_wanted($org);

     $data = [
          "id" => $org['id'],
          "organization_name" => $org['organization_name'],
          "email" => $org['email'],
          "description" => $org['description'],
          "cause" => $org['cause'],
          "skills" => $skills,
          "skills_wanted" => $skills_wanted,
      ];

     // renders page
     render("profiletp.php", ["title" => $org['organization_name'], 'org' => $data])


?>