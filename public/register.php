<?php

    // configuration
    require("../includes/config.php");

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // render form
        render("newaccounttp.php", ["title" => "Register"]);
    }

    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // if they did something wrong entering username/password
        if($_POST['username'] == false)
            apologize('please enter username');
        if($_POST['name'] == false)
            apologize('please enter an organization name');
        if($_POST['password'] == false)
            apologize('please enter password');
        if($_POST['password'] != $_POST['confirmation'])
            apologize('passwords must match!');
        if($_POST['description'] == false)
            apologize('please enter a description of your group');
        if($_POST['skills'] == "")
            apologize('please enter at least one skill your group has');
        if($_POST['skills_wanted'] == "")
            apologize('please enter at least one skill your group is looking for');
            
    // if the insert failed 
    $q = query("INSERT INTO groups (username, hash, name, cause, skills, skills_wanted) VALUES(?, ?, ?, ?, ?, ?)", $_POST['username'], crypt($_POST['password']), $_POST['name'], $_POST['skills'],  $_POST['skills_wanted']);
    if($q === false)
        apologize("that username is taken!  Please choose another"); 
    else
    {
        // log the new user in
        $rows = query("SELECT LAST_INSERT_ID() AS id");
        $id = $rows[0]["id"];
        $_SESSION["id"] = $id;
        redirect("/");
    }
    
    }
 
    
    
    
    
    
    
    
    
    
    /*<?php

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
    /*require("../includes/config.php"); 

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        render("deposit_form.php", ["title" => "Log In"]);
    }

    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        
        // find groups with same cause
        query("SELECT * FROM `name` WHERE MATCH(cause, skills, skills_wanted) 
        AGAINST (?, ?, ?)", $_POST['cause'], $_POST['skills'], $_POST['skills_wanted']);
        
        
    
    
    }
    // render page
    render("databasetp.php", ["title" => "Database"]);

?>*/



?>
