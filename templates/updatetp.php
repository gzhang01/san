<h2>Update your Information</h2>

<form action="update.php" method="post">
	<div id="content">
		<fieldset>
			<legend>Organization Info</legend>
			<p class="instructions">Change any field you wish to update</p>
			<label>
				<span>Organization Name:</span>
				<input type="text" name="organization_name" value="<?php print(htmlspecialchars("{$org['organization_name']}")); ?>" />
			</label>
			<label>
				<span>Organization Description:</span>
				<textarea name="description"><?php print(htmlspecialchars("{$org['description']}")); ?></textarea>
			</label>
			<label>
				<span>Contact Email:</span>
				<input type="text" name="email" value="<?php print(htmlspecialchars("{$org['email']}")); ?>" />	
			</label>
			<label>
                <span>Cause:</span>
                <select id="cause" name="cause">
                    <option value="<?php print("{$org['cause']}"); ?>"><?php print("{$org['cause']}"); ?></option>
                    <option value=""></option>
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
                        $index = 'skill' . $i;
                        $skill = $org[$index];
                        print("<option value='{$skill}'>{$skill}</option>");
                        print("<option value='NULL'></option>");
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
                        $index = 'skill_wanted' . $i;
                        $skill = $org[$index];
                        print("<option value='{$skill}'>{$skill}</option>");
                        print("<option value='NULL'></option>");
                        include('skills.php');
                        print("</select><br />");
                    }
                ?>
            </label>
            <p class="center">Have more suggestions for skills? Email them to webmaster</p>
        </fieldset>
		
		<br />
        <fieldset>
        	<label><button type="submit">Update</button></label>
        </fieldset>
	</div>
</form>

<br />
<p style="text-align:center"><a href="logout.php">Log Out</a></p>
<!--<p style="text-align:center"><a href="deleteaccount.php">Delete Account</a></p>-->