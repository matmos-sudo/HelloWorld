document.addEventListener('DOMContentLoaded', function() {
    const loginForm = document.querySelector('form');


    loginForm.addEventListener('submit', function(event) {
        event.preventDefault();

        const username = document.getElementById('username').value.trim();
        const password = document.getElementById('password').value.trim();

        const minLengthPass = 4;
        const minLengthUser = 4;


        if(username.length < minLengthUser) {
            alert(`Username must be at least ${minLengthUser} characters long.`);
        }else if(password.length < minLengthPass){
            alert(`Password must be at least ${minLengthPass} characters long.`);
        }else{
            loginForm.submit();
        }
    });
});
