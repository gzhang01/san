<h2>Upcoming Endorser Events</h2>


<button id="addevent" onclick="toggleDiv()">Add Event</button>

<form id="form" method="post" enctype="text/plain"> 
    <fieldset>
        <legend>Submit an event to be added to the calendar</legend>
        <p class="instructions" style="color:red">* required</p>
        <label>
        <span>Name of Hosting Organization:</span>
            <input type="text" name="name"> 
        </label>
        <label>
        <span>Title of Event:</span>
            <input type="text" name="event_title">   
        </label>
        <label>
        <span>Date of Event:</span>
            <input type="text" name="date" placeholder="**/**/****">
        </label>
        <label>
        <span>Time of Event:</span>
            <input type="text" name="time" placeholder="hh:mm AM/PM">
        </label>

        <div class="space"></div>
        <input class="button" type="submit" value"Submit">
        <input class="button" type="reset" value="Reset">
    </fieldset>
</form>    

<div id="content">
    <iframe src="https://www.google.com/calendar/embed?src=studentactivistnetwork%40gmail.com&ctz=America/New_York" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
</div>


