// Elementos html que se requieren
const loginForm = document.getElementById("loginForm");
const inputPass = document.getElementById("inputPass");
const btnSubmit = document.getElementById("btnSubmit");
const errorMessage = document.getElementsByClassName("errorMessage")[0];

// Eventos
btnSubmit.addEventListener("click", function () {
    console.log(typeof inputPass.value);
    if (inputPass.value == undefined) {
        errorMessage.style.opacity = 1;
    } else {
        loginForm.submit();
    }
});
