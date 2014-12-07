<h2>Working for SAN</h2>
<br />

<!-- <form action="MAILTO:studentactivistnetwork@gmail.com" method="post" enctype="multipart/form-data"> -->
<form action="emailapp.php" method="post" name="mainform" enctype="multipart/form-data">
    <div id="content">
        <fieldset>
            <legend>Applicant Information:</legend>
            <p class="instructions" style="color:red">* required</p>
            <label>
                <span>Your Name:</span><p class="required"> *</p>
                <input id="applicant_name" name="applicant_name" placeholder="100 character max" autocomplete="off" type="text"/>
            </label>
            <label>
                <span>Your e-mail:</span><p class="required"> *</p>
                <input id="FromEmail" name="FromEmail" placeholder="enter e-mail address" autocomplete="off" type="text"/>
            </label>
            <label>
                <span>Letter of Interest:</span><p class="required"> *</p>
                <textarea id="letter" name="letter" placeholder="10,000 character max"></textarea>
            </label>
            <label>
                <span>Attach Your Resume:</span><p class="required"> *</p>
                <input name="attachment" type="file">
            </label>
        </fieldset>
  
        <br />
        <fieldset>      
            <label>
                <button type="submit">Submit</button>
            </label>
        </fieldset>
    </div>
</form>