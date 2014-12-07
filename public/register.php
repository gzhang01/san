<?php

    /**
     * register.php
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
        // render form
        render("registerform.php", ["title" => "Register", "css" => "form.css"]);
    }

    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // if they did something wrong entering username/password
        if(empty($_POST['username']))
            apologize('Please enter username');
        if(empty($_POST['password']) || empty($_POST['confirmation']))
            apologize('Please enter password');
        if($_POST['password'] != $_POST['confirmation'])
            apologize('Passwords must match!');
        if(empty($_POST['organization_name']))
            apologize('Please enter an organization name');
        if(empty($_POST['description']))
            apologize('Please enter a description of your group');
        if(empty($_POST['cause']))
            apologize('Please tell us what the cause of your organization is');

        // attempt to insert into database
        $q = query("INSERT INTO organizations (username, password, 
            organization_name, email, description, cause, skill1, skill2, skill3, 
            skill_wanted1, skill_wanted2) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)", 
            $_POST['username'], crypt($_POST['password']), $_POST['organization_name'], 
            $_POST['email'], $_POST['description'], $_POST['cause'], $_POST['skill1'], 
            $_POST['skill2'], $_POST['skill3'], $_POST['skill_wanted1'], 
            $_POST['skill_wanted2']);
        // if insert failed
        if($q === false)
            apologize("Something went wrong!"); 
        else
        {
            /*// log the new user in
            $rows = query("SELECT LAST_INSERT_ID() AS id");
            $id = $rows[0]["id"];
            $_SESSION["id"] = $id;
            redirect("/");*/
            render("registrationsuccess.php", ["title" => "Success!"]);
        }
    
    }

?>
