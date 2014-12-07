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
    
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // render page
        render("calendartp.php", ["title" => "Calendar", "cssarray" => ["form.css", "calendar.css"], "js" => "calendar.js"]);
    }

    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // error checking
        if (empty($_POST["name"]) || empty($_POST["event_title"]) || empty($_POST["date"]) || empty($_POST["time"]))
            apologize("Please enter all information about your event");

        // sending email
        $to = "gzhang@studentactivistnetwork.com";
        $subject = "Add Event Request";
        $headers = "From: gzhang01@college.harvard.edu";
        $message = $_POST["name"] . " has requested to add an event to the calendar!\n" . 
                    "Organization: " . $_POST["name"] . "\n" .
                    "Title of Event: " . $_POST["event_title"] . "\n" . 
                    "Date: " . $_POST["date"] . "\n" . 
                    "Time: " . $_POST["time"] . "\n";

        mail($to, $subject, $message, $headers);
        
        render("calendartp.php", ["title" => "Calendar", "cssarray" => ["form.css", "calendar.css"], "js" => "calendar.js", "message" => "Event Requested!"]);
    }
?>
