// JavaScript Functions 

function validatePassword() {
  var password = document.getElementById("password");
  var confirmPassword = document.getElementById("confirm_password");

  if (password.value != confirmPassword.value) {
    confirmPassword.setCustomValidity("Passwords do not match");
  } else {
    confirmPassword.setCustomValidity("");
  }
}

var password = document.getElementById("password");
var confirmPassword = document.getElementById("confirm_password");

password.onchange = validatePassword;
confirmPassword.onkeyup = validatePassword;