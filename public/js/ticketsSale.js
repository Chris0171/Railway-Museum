// Elemento html que se requieren
const date_hours = document.getElementById("first");
const buyTickets = document.getElementById("second");
const btnsNext = document.getElementsByClassName("btnNext");
const date = document.getElementById("calendary");
const hourOptions = document.getElementsByName("franja");
const numSales = document.getElementsByClassName("numSales");
const errorMessage = document.getElementsByClassName("errorMessage");

// Eventos
btnsNext[0].addEventListener("click", function () {
    const validate = validateRadioButtons(hourOptions);
    console.log(validate);
    if (date.value && validate) {
        date_hours.style.display = "none";
        buyTickets.style.display = "block";
        errorMessage[0].style.opacity = 0;
    } else {
        errorMessage[0].style.opacity = 1;
    }
});
btnsNext[1].addEventListener("click", function () {
    if (validateTickets()) {
        // Lógica para avanzar
        errorMessage[1].style.opacity = 0;
    } else {
        errorMessage[1].style.opacity = 1;
    }
});

function validateRadioButtons(element) {
    for (let i = 0; i < element.length; i++) {
        if (element[i].checked) return true;
    }
    return false;
}
function validateTickets() {
    let validate = false;
    for (let i = 0; i < numSales.length; i++) {
        if (numSales[i].value != 0) {
            validate = true;
        }
    }
}
