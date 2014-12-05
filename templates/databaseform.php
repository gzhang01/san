<form action="database.php" method="post">
    <div id="content">
        <fieldset>
            <legend>Database Search</legend>
            <div class="instructions">
                <p>Search groups in the Greater Boston Area by their 
                cause, skills you need, and skills they need. All 
                fields are optional. Selecting options will refine 
                search.</p>
            </div>

            <label>
                <span>Their cause</span>
                <select id="cause" name="cause">
                    <option value="">--Cause--</option>
                    <?php include('cause.php'); ?>
                </select>
            </label>

            <label>
                <span>Skills you need</span>
                <select name="skills">
                    <option value="">--Skills You Need--</option>
                    <?php include('skills.php'); ?>
                </select>
            </label>

            <label>
                <span>Skills they need</span>
                <select name="skills_wanted">
                    <option value="">--Skills They Need--</option>
                    <?php include('skills.php'); ?>
                </select>
            </label>
            <p class="center">Have more suggestions for skills? Email them to webmaster</p>
        </fieldset>

        <br />
        <fieldset>
            <label>
                <button type="submit">Search</button>
            </label>
        </fieldset>
    </div>
</form>