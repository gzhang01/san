<?php

    /**
     * search.php
     * CS50 Final Project
     *
     * @author: George Zhang
     *
     */

    // configuration
    require("../includes/config.php"); 

    render("databaseform.php", ["title" => "Database Search", "css" => "form.css"]);

?>