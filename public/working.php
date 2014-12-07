<?php

	/**
	 * working.php
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
    render("workingtp.php", ["title" => "Work for SAN", "css" => "form.css"]); 

?>
