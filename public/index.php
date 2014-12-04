<?php

	/**
	 * index.php
	 * CS50 Final Project
	 *
	 * @author: George Zhang
     * @author: Michael O'Brien
     * @author: Leia Wedlund
     *
	 */

    // configuration
    require("../includes/config.php"); 
    
    // render page
    render("home.php", ["title" => "Student Activist Network", "css" => "home.css"]);

?>
