const form = document.getElementById('form');
const username = document.getElementById('username');
const email = document.getElementById('email');
const password = document.getElementById('password');
const password2 = document.getElementById('confirm-password');

form.addEventListener('submit', e => {

	const usernameValue = username.value.trim();
	const emailValue = email.value.trim();
	const passwordValue = password.value.trim();
	const password2Value = password2.value.trim();
	
	if(usernameValue === '') {
		setErrorFor(username, 'Username cannot be blank.	');
		e.preventDefault();
		
	} else if(usernameValue.length < 5){
		setErrorFor(username, 'Username should contain at least 5');
		e.preventDefault();
	}else{
		setSuccessFor(username);
	}
	
	if(emailValue === '') {
		setErrorFor(email, 'Email cannot be blank.');
		e.preventDefault();
	} else if (!isEmail(emailValue)) {
		setErrorFor(email, 'Not a valid email.');
		e.preventDefault();
	} else {
		setSuccessFor(email);
	}
	
	if(passwordValue === '') {
		setErrorFor(password, 'Password cannot be blank.');
		e.preventDefault();
	} else if(passwordValue.length < 8){
		setErrorFor(password, `Password should contain at least 8 characters.`);
		e.preventDefault();
	}else if(/[^0-9a-zA-Z]/.test(passwordValue)){
		setErrorFor(password, `Password should not contain any symbols.`);
		e.preventDefault();
	}else {
		setSuccessFor(password);
	}
	
	if(password2Value === '') {
		setErrorFor(password2, 'Password2 cannot be blank');
		e.preventDefault();
	} else if(passwordValue !== password2Value) {
		setErrorFor(password2, 'Passwords does not match');
		e.preventDefault();
	} else{
		setSuccessFor(password2);
	}

});

function checkInputs() {
	// trim to remove the whitespaces
	const usernameValue = username.value.trim();
	const emailValue = email.value.trim();
	const passwordValue = password.value.trim();
	const password2Value = password2.value.trim();
	
	if(usernameValue === '') {
		setErrorFor(username, 'Username cannot be blank.	');
	} else if(usernameValue < 5){
		setErrorFor(username, 'Username should contain at least 5')
	}else{
		setSuccessFor(username);
	}
	
	if(emailValue === '') {
		setErrorFor(email, 'Email cannot be blank.');
	} else if (!isEmail(emailValue)) {
		setErrorFor(email, 'Not a valid email.');
	} else {
		setSuccessFor(email);
	}
	
	if(passwordValue === '') {
		setErrorFor(password, 'Password cannot be blank.');
	} else if(passwordValue < 8){
		setErrorFor(password, `Password should contain at least 8 characters.`)
	}else if(/[^0-9a-zA-Z]/.test(passwordValue)){
		setErrorFor(password, `Password should not contain any symbols.`)
	}else {
		setSuccessFor(password);
	}
	
	if(password2Value === '') {
		setErrorFor(password2, 'Cannot be blank');
	} else if(passwordValue !== password2Value) {
		setErrorFor(password2, 'Passwords does not match');
	} else{
		setSuccessFor(password2);
	}
}

function setErrorFor(input, message) {
	const formControl = input.parentElement;
	console.log(formControl);
	const small = formControl.querySelector('small');
	formControl.className = 'input-field error';
	small.innerText = message;
}

function setSuccessFor(input) {
	const formControl = input.parentElement;
	formControl.className = 'input-field success';
}


function isEmail(email) {
	return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}
