let emailRegex = /^[a-zA-Z.-_]+@+[a-z]+\.+[a-z]{1,3}$/;
let passwordRegex = /^[a-zA-Z]+[0-9]{1,3}$/;

function validateForm() {
    let email = document.getElementById('email-register')
    let passLogin = document.getElementById('pass-login')
    let passRegister = document.getElementById('pass-register')

    if(!email.test(emailRegex)) {
        alert('Invalid Email')
        return;
    }
    if(!passLogin.test(passwordRegex)) {
        alert('Invalid Password')
        return;
    }
    if(!passRegister.test(passwordRegex)) {
        alert('Invalid Password')
        return;
    }
}