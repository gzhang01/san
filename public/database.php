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
        render("databaseform.php", ["title" => "Database Search"]);
    }

    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        
        // find groups with same cause
        query("SELECT * FROM `name` WHERE MATCH(cause, skills, skills_wanted) 
        AGAINST (?, ?, ?)", $_POST['cause'], $_POST['skills'], $_POST['skills_wanted']);
        
        
        // render page
        // render("databaseresponse.php", ["title" => "Database"]);
        // make databaseresponse.php
    
    }

?>