<?php

    /**
     * config.php
     * CS50 Final Project
     *
     * @author: George Zhang
     * @author: Michael O'Brien
     * @author: Leia Wedlund
     *
     * Configures pages.
     */

    // display errors, warnings, and notices
    ini_set("display_errors", true);
    error_reporting(E_ALL);

    // requirements
    require("constants.php");
    require("functions.php");

    // enable sessions
    session_start();

    
    // require authentication for /update.php
    if (in_array($_SERVER["PHP_SELF"], ["/update.php"]))
    {
        if (empty($_SESSION["id"]))
        {
            redirect("login.php");
        }
    }
    

?>
