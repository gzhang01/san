<?php

	/**
	 * calendar.php
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
    render("calendartp.php", ["title" => "Calendar", "cssarray" => ["form.css", "calendar.css"], "js" => "calendar.js"]);

?>
