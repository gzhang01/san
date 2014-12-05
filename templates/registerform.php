<h2>Register your Organization</h2>
<br />

<form action="register.php" method="post">
    <div id="content">
        <fieldset>
            <legend>Account Information:</legend>
            <p class="instructions" style="color:red">* required field</p>
            <label>
                <span>Username:</span><p class="required"> *</p>
                <input id="username" name="username" placeholder="100 character max" autocomplete="off" type="text"/>
            </label>
            <label>
                <span>Password:</span><p class="required"> *</p>
                <input id="password" name="password" placeholder="100 character max" type="password"/>
            </label>
            <label>
                <span>Confirm Password:</span><p class="required"> *</p>
                <input id="confirmation" name="confirmation" placeholder="100 character max" type="password"/>
            </label>
        </fieldset>

        <br />
        <fieldset>
            <legend>Organization Information:</legend>
            <p class="instructions" style="color:red">* required field</p>
            <label>
                <span>Organization Name:</span><p class="required"> *</p>
                <input id="organization_name" name="organization_name" placeholder="100 character max" autocomplete="off" type="text"/>
            </label>
            <label>
                <span>Organization Description:</span><p class="required"> *</p>
                <textarea id="description" name="description" placeholder="1000 character max"></textarea>
            </label>
            <label>
                <span>Cause:</span><p class="required"> *</p>
                <select id="cause" name="cause">
                    <option value="">---Cause---</option>
                    <?php include('cause.php'); ?>
                </select>
            </label>
            <label>
                <span>Choose up to three skills you have:</span><br />
                <?php 
                    for ($i = 1; $i <= MAXSKILLS; $i++) 
                    {
                        print("<span class='number'>{$i}. </span>");
                        print("<select id='skill' name='skill{$i}'>");
                        print("<option value='NULL'>---Your Skills---</option>");
                        include('skills.php');
                        print("</select><br />");
                    }
                ?>
            </label>
            <label>
                <span>Choose up to two skills you are looking for:</span><br />
                <?php 
                    for ($i = 1; $i <= MAXSKILLSWANTED; $i++) 
                    {
                        print("<span class='number'>{$i}. </span>");
                        print("<select id='skill' name='skill_wanted{$i}'>");
                        print("<option value='NULL'>---Wanted Skills---</option>");
                        include('skills.php');
                        print("</select><br />");
                    }
                ?>
            </label>
            <p class="center">Have more suggestions for skills? Email them to webmaster</p>
        </fieldset>


        <br />
        <fieldset>      
            <label>
                <button type="submit">Register</button>
            </label>
        </fieldset>
    </div>
</form>        