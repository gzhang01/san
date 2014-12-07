<h2>Search Results</h2>

<div id="content">
	<table>
		<tr>
			<td id="name">Organization Name</td>
			<td id="email">Email</td>
			<td id="cause">Cause</td>
			<td id="skills">Skills</td>
			<td id="wanted">Skills Wanted</td>
		</tr>

		<?php
			if ($data != [])
			{
				foreach ($data as $datum)
				{	
					$id = $datum['id'];
					print("<tr>");
					print("<td id='name'>{$datum['organization_name']}</td>");
					//<a href='profile.php?id={$id}'></a>
					print("<td id='email'>{$datum['email']}</td>");
					print("<td id='cause'>{$datum['cause']}</td>");
					print("<td id='skills'>{$datum['skills']}</td>");
					print("<td id='wanted'>{$datum['skills_wanted']}</td>");
					print("</tr>");
				}
			}
		?>
	</table>
	<?php
		if ($data == [])
		{
			print("<p class='noresults'>no results found</p>");
		}
	?>
</div>