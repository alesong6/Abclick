document.addEventListener("DOMContentLoaded", function () {
    const loginBtn = document.getElementById("login-btn");

    loginBtn.addEventListener("click", function (event) {
        event.preventDefault();

        const email = document.getElementById("email").value.trim();
        const password = document.getElementById("password").value.trim();
        const errorMessage = document.getElementById("error-message");

        const correctEmail = "senac@gmail.com";
        const correctPassword = "Senac@123";

        if (email === correctEmail && password === correctPassword) {
            window.location.href = "/";
        } else {
            errorMessage.textContent = "E-mail ou senha incorretos!";
            errorMessage.style.color = "red";
        }
    });
});
