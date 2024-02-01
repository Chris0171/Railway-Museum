// Elemento html que se requieren
const date_hours = document.getElementById("first");
const buyTickets = document.getElementById("second");
const btnsNext = document.getElementsByClassName("btnNext");
const date = document.getElementById("calendary");
const hourOptions = document.getElementsByName("franja");

// Eventos
btnsNext[0].addEventListener("click", function () {
    const validate = validateRadioButtons(hourOptions);
    console.log(validate);
    if (date.value && validate) {
        date_hours.style.display = "none";
        buyTickets.style.display = "flex";
    } else {
        console.log(date.value);
        console.log("No se han rellenado los campos requeridos");
    }
});

function validateRadioButtons(element) {
    let validate;

    for (let i = 0; i < element.length; i++) {
        if (element[i].checked) return true;
    }
    return false;
}
