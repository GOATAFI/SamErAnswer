let usernameError = document.getElementById('username-error')
function validateUserName(){
    let userName = document.getElementById('username').value
    if(userName.length == 0){
        usernameError.innerHTML = "Enter User name"
        return false
    }
    if(!userName.match( /^[A-Za-z\_]{6,}$/)){
        usernameError.innerHTML = "Enter Valid User Name"
        return false
    }
    usernameError.innerHTML = "All Ok"
}

let fullNameError = document.getElementById('fullname-error')
function validateFullName(){
    let fullName = document.getElementById('fullname').value
    if(!fullName.match(/^[a-zA-Z]+\s[a-zA-Z]+$/)){
        fullNameError.innerHTML = "Enter Valid Full Name"
        return false
    }
    fullNameError.innerHTML = "All Ok"
}

let passError = document.getElementById('password-error')

function validatePassword(){
    let password = document.getElementById('password').value
    if(!password.match(/^(?=.*\d)(?=.*[*#_])[A-Za-z\d\*\#\_]{8,12}$/)){
        passError.innerHTML = "Enter Valid Password"
        return false
    }
    passError.innerHTML = "Pass OK"
}

let emailError = document.getElementById('email-error')
function validateEmail(){
    let email = document.getElementById('email').value
    if(!email.match(/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/)){
        emailError.innerHTML = "Enter Valid Email"
        return false;
    }
    emailError.innerHTML = "Email Ok"

}