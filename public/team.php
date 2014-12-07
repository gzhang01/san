<?php

	/**
	 * team.php
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
    render("teamtp.php", ["title" => "The Team", "css" => "team.css"]);

?>
