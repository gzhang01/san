<?php

    // configuration
    require("../includes/config.php");

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        render("calendartp.php", ["title" => "Calendar"]);
    }

    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // if they did something wrong entering username/password
        if($_POST['event'] == false)
            apologize('please enter an event time, place, description, and hosting organization');
    
//NEED TO E-MAIL DAT SHIT
    
    }
    
   
?>
