<?php

	/**
	 * endorsers.php
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
    render("endorserstp.php", ["title" => "Endorsers", "css" => "endorsers.css"]);

?>
