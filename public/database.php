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

     // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        render("databaseform.php", ["title" => "Database Search", "css" => "form.css"]);
    }

    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // constructing query call
        $query = "SELECT * FROM `organizations` WHERE ";

        // adding search parameters
        if (!empty($_POST["cause"]))
        {
            $query = $query . "cause = '{$_POST['cause']}' AND ";
        }
        if (!empty($_POST["skills"]))
        {
            $query = $query . "(skill1 = '{$_POST['skills']}' OR 
                        skill2 = '{$_POST['skills']}' OR 
                        skill3 = '{$_POST['skills']}') AND ";
        }
        if (!empty($_POST["skills_wanted"]))
        {
            $query = $query . "(skill_wanted1 = '{$_POST['skills_wanted']}' OR 
                        skill_wanted2 = '{$_POST['skills_wanted']}') AND ";
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
                $skills = "";
                for ($i = 1; $i <= MAXSKILLS; $i++)
                {
                    $index = 'skill' . $i;
                    if ($result[$index] == NULL)
                        break;
                    if ($i == 1)
                        $skills = $skills . $result[$index];
                    else
                        $skills = $skills . ", " . $result[$index];
                }
                if ($skills == "")
                    $skills = "None";

                $skills_wanted = "";
                for ($i = 1; $i <= MAXSKILLSWANTED; $i++)
                {
                    $index = 'skill_wanted' . $i;
                    if ($result[$index] == NULL)
                        break;
                    if ($i == 1)
                        $skills_wanted = $skills_wanted . $result[$index];
                    else
                        $skills_wanted = $skills_wanted . ", " . $result[$index];
                }
                if ($skills_wanted == "")
                    $skills_wanted = "None";

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
        
    
    }

?>