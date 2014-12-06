/**
 * calendar.js
 * CS50 Final Project
 *
 * @author: George Zhang
 * @author: Michael O'Brien
 * @author: Leia Wedlund
 *
 * javascript for calendar page
 */

function toggleDiv() {
	var form = document.getElementById('form');
	if (!form.style.display || form.style.display == "none")
		form.style.display = "block";
	else
		form.style.display = "none";
}
