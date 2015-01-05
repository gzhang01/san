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
					print("<tr onclick=nav('profile.php?id={$id}')>");
					print("<td id='name'>" . htmlspecialchars("{$datum['organization_name']}") . "</td>");
					print("<td id='email'>" . htmlspecialchars("{$datum['email']}") . "</td>");
					print("<td id='cause'>" . htmlspecialchars("{$datum['cause']}") . "</td>");
					print("<td id='skills'>" . htmlspecialchars("{$datum['skills']}") . "</td>");
					print("<td id='wanted'>" . htmlspecialchars("{$datum['skills_wanted']}") . "</td>");
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