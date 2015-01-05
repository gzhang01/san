<?php

    /**
     * database.php
     * CS50 Final Project
     *
     * @author: George Zhang
     * @author: Michael O'Brien
     * @author: Leia Wedlund
     *
     */

    // configuration
    require("../includes/config.php"); 

    // constructing query call
    $query = "SELECT * FROM `organizations` WHERE ";

    // adding search parameters
    if (!empty($_GET["cause"]))
    {
        $query = $query . "cause = '{$_GET['cause']}' AND ";
    }
    if (!empty($_GET["skills"]))
    {
        $query = $query . "(skill1 = '{$_GET['skills']}' OR 
                    skill2 = '{$_GET['skills']}' OR 
                    skill3 = '{$_GET['skills']}') AND ";
    }
    if (!empty($_GET["skills_wanted"]))
    {
        $query = $query . "(skill_wanted1 = '{$_GET['skills_wanted']}' OR 
                    skill_wanted2 = '{$_GET['skills_wanted']}') AND ";
    }

    // end pruning of query function
    if (substr($query, -4) == "AND ")
    {
        $query = substr($query, 0, -5);
    }
    else if(substr($query, -6) == "WHERE ")
    {
        $query = substr($query, 0, -7);
    }

    // find groups with same cause
    $results = query($query);
    if ($results === false)
        apologize("Something went wrong!");
    else
    {
        // info to pass to databaseresponse.php
        $data = [];

        foreach ($results as $result)
        {
            $skills = append_skills($result);
            $skills_wanted = append_skills_wanted($result);

            $data[] = [
                "id" => $result['id'],
                "organization_name" => $result['organization_name'],
                "email" => $result['email'],
                "description" => $result['description'],
                "cause" => $result['cause'],
                "skills" => $skills,
                "skills_wanted" => $skills_wanted,
            ];

        }

        // render page
        render("databaseresponse.php", ["title" => "Database", "data" => $data, "css" => "databaseresponse.css", "js" => "databaseresponse.js"]);
    }

?>