let emailRegex = /^[a-zA-Z.-_]+@+[a-z]+\.+[a-z]{1,3}$/;
let passwordRegex = /^[a-zA-Z]+[0-9]{1,3}$/;

function validateForm() {
    let email = document.getElementById('email-register').value;
    let passLogin = document.getElementById('pass-login').value;
    let passRegister = document.getElementById('pass-register').value;

    if (!emailRegex.test(email)) {
        alert('Invalid Email');
        return;
    }

    if (!passwordRegex.test(passLogin)) {
        alert('Invalid Password for Login');
        return;
    }

    if (!passwordRegex.test(passRegister)) {
        alert('Invalid Password for Registration');
        return;
    }

}