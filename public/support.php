<?php

	/**
	 * support.php
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
    render("supporttp.php", ["title" => "Show Your Support", "css" =>"support.css", "js" => "support.js"]);

?>
