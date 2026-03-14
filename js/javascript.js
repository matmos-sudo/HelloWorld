document.addEventListener('DOMContentLoaded', function() {
    const loginForm = document.querySelector('form');
    const usernameInput = document.getElementById('username');
    const passwordInput = document.getElementById('password');
    const usernameError = document.getElementById('username-error');
    const passwordError = document.getElementById('password-error');

    const minLengthPass = 4;
    const minLengthUser = 4;

    loginForm.addEventListener('submit', function(event) {
        event.preventDefault();

        let isValid = true;

        usernameError.style.display = 'none';
        passwordError.style.display = 'none';

        const username = usernameInput.value.trim();
        const password = passwordInput.value.trim();


        if(username.length < minLengthUser) {
            usernameError.textContent = `Username must be at least ${minLengthUser} characters long.`;
            usernameError.style.display = 'block';
            isValid = false;
        }
        if(password.length < minLengthPass){
            passwordError.textContent  = `Password must be at least ${minLengthPass} characters long.`;
            passwordError.style.display = 'block';
            isValid = false;
        }
        if(isValid){
            loginForm.submit();
        }
    });
});
