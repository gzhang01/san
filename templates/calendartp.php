<h2>Upcoming Endorser Events</h2>


<button id="addevent" onclick="toggleDiv();">Add Event</button>

<form id="form" action="calendar.php" method="post"> 
    <fieldset>
        <legend>Submit an event to be added to the calendar</legend>
        <p class="instructions" style="color:red">* required</p>
        <label>
        <span>Name of Hosting Organization:</span><p class="required"> *</p>
            <input type="text" name="name" autocomplete="off"> 
        </label>
        <label>
        <span>Title of Event:</span><p class="required"> *</p>
            <input type="text" name="event_title" autocomplete="off">   
        </label>
        <label>
        <span>Date of Event:</span><p class="required"> *</p>
            <input type="text" name="date" placeholder="**/**/****" autocomplete="off">
        </label>
        <label>
        <span>Time of Event:</span><p class="required"> *</p>
            <input type="text" name="time" placeholder="hh:mm AM/PM" autocomplete="off">
        </label>
        <p class="center">Note: Submission subject to review before being added to calendar</p>

        <div class="space"></div>
        <input class="button" type="submit" value"Submit">
        <input class="button" type="reset" value="Reset">
    </fieldset>
</form>    

<?php if (isset($message)): ?>
    <h3>Event Requested!</h3>
<?php endif ?>

<div id="content">
    <iframe src="https://www.google.com/calendar/embed?title=Student%20Activist%20Network%20Calendar%20&amp;showPrint=0&amp;height=600&amp;wkst=1&amp;bgcolor=%23ffffff&amp;ctz=America%2FNew_York" style=" border-width:0 " width="800" height="600" frameborder="0" scrolling="no"></iframe>
</div>


