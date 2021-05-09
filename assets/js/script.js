// global variable to check for menubar state
var menuOpen = false;


// function to open the menu-bar
function openmenu() {

	// based on the menuOpen state, it displays the menu.

	if (!menuOpen) {
		document.getElementById("menu-id").style.display = "block";
		menuOpen = true;
	} else {
		document.getElementById("menu-id").style.display = "none";
		menuOpen = false;
	}
}

// function to close the menu-bar. Used in the responsive website.
function closemenu() {
	document.getElementById("menu-id").style.display = "none";
}


// function validates the user input from commentsForm.php

/*
	For example: if name is Anmol Jaising, it won't allow you to 
	submit, since there is a space between the firstname and lastname.

	In this way, the email id and comments are valiated.
*/

function formValidation() {

	const name = document.getElementById('name').value;
	const comments = document.getElementById('comments').value;
	const email = document.getElementById('email').value;


	if (!validateName(name)) {
		alert('No spaces in the name! Or name cannot be blank');
		name.focus();
	}

	if (!validateEmail(email)) {
		alert("You have entered an invalid email address!");
		email.focus();
	}

	if (!validateComments(comments)) {
		alert("Error: Input is empty!");
		comments.focus();
	}

	function validateName(name) {
		var letters = /^[A-Za-z]+$/;
		if (name.match(letters)) {
			return true;
		} else {
			return false;
		}
	}

	function validateEmail(email) {
		var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
		if (email.match(mailformat)) {
			return true;
		} else {
			return false;
		}
	}

	function commentsValidate(comments) {
		if (comments == "") {
			return false;
		} else {
			return true;
		}
	}
}



