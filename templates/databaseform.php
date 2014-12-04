<h2>Database</h2>
<p1>Search groups in the Greater Boston Area by cause, their skills, and needed skills.</p1>
<br /><br />
<form action="database.php" method="post">
    <div class="form-group">
        <select name = "cause" id = "cause">
            <option value = "">--Cause--</option>
            <option value = "Environment">Environment</option>
            <option value = "Social Justice">Social Justice</option>
            <option value = "Religious">Religion</option>
            <option value = "Education">Education</option>
        </select>
    </div>

    <div class="form-group">
        <select name = "skills" id = "skills">
            <option value = "">--Skills You Want--</option>
            <option value = "community organizing">Community Organizing</option>
            <option value = "programming">Programming</option>
            <option value = "event organizing">Event Organizing</option>
            <option value = "networking">Networking</option>
        </select>
    </div>

    <div class="form-group">
        <select name = "skills_wanted" id = "skills_wanted">
            <option value = "">--Skills You Have--</option>
            <option value = "community organizing">Community Organizing</option>
            <option value = "programming">Programming</option>
            <option value = "event organizing">Event Organizing</option>
            <option value = "networking">Networking</option>
        </select>
    </div>

    <input type="submit" value="Submit">
</form>