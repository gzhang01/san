<h2>Create a New Account to Connect with Others</h2>

<form action="register.php" method="post">
    <fieldset>
        <div class="form-group">
            <input autofocus class="form-control" name="username" placeholder="Username" type="text"/>
        </div>
         <div class="form-group">
            <input autofocus class="form-control" name="name" placeholder="Organization Name" type="text"/>
        </div>
        <div class="form-group">
            <input class="form-control" name="password" placeholder="Password" type="password"/>
        </div>
        <div class="form-group">
            <input class="form-control" name="confirmation" placeholder="Password" type="password"/>
        </div>
        <div class="form-group">
            <input class="form-control" name="description" placeholder="Please write a description of your organization for your profile" type="text"/>
        </div>

    </fieldset>




<fieldset>
        <div class="form-group">
            <select name = "cause" id = "Cause">Cause
                <option value = "">--Cause--</option>
                <option value = "Environment">Environment</option>
                <option value = "Social Justice">Social Justice</option>
                <option value = "Religious">Religion</option>
                <option value = "Education">Education</option>
            </select>
        </div>
    </fieldset>
    <fieldset>
        <div class="form-group">
            <select name = "skills" id = "Skills">
                <option value = "">--Your Skills--</option>
                <option value = "community organizing">Community Organizing</option>
                <option value = "programming">Programming</option>
                <option value = "event organizing">Event Organizing</option>
                <option value = "networking">Networking</option>
            </select>
        </div>
    </fieldset>
    <fieldset>
        <div class="form-group">
            <select name = "skills_wanted" id = "Skills">
                <option value = "">--Skills You Need-</option>
                <option value = "community organizing">Community Organizing</option>
                <option value = "programming">Programming</option>
                <option value = "event organizing">Event Organizing</option>
                <option value = "networking">Networking</option>
            </select>
        </div>
    </fieldset>
    <fieldset>      
            <div class="form-group">
                <button type="submit" class="btn btn-default">Register</button>
            </div>
    </fieldset>
</form>        
