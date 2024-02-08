// Elemento html que se requieren
const date_hours = document.getElementById("first");
const buyTickets = document.getElementById("second");
const confirmTickets = document.getElementById("third");
const btnsNext = document.getElementsByClassName("btnNext");
const btnsPrev = document.getElementsByClassName("btnPrev");
const date = document.getElementById("calendary");
const hourOptions = document.getElementsByName("franja");
const numSales = document.getElementsByClassName("numSales");
const errorMessage = document.getElementsByClassName("errorMessage");
const thirdCardBody = document.getElementsByClassName("card-body")[2];
const ticketsForm = document.getElementById("ticketForm");

// Variables necesarias para la lógica
let tickets = {};
const ticketsInf = [
    "Entrada para una persona con discapacidad (Gratis)",
    "Entrada para un menor de cuatro años (Gratis)",
    "Entrada para una persona sin empleo (Gratis)",
    "Entrada para un menor entre 4 y 12 años (3€)",
    "Entrada para un mayor de 65 años (3$)",
    "Entrada para un estudiante (3$)",
    "Entrada para un profesor (3$)",
    "Entrada para un adulto (7$)",
];
const dis = 65;
const currentDate = new Date().toISOString().split("T")[0];
const disableDates = ["12-25", "01-01", "01-06"];

date.min = currentDate;
// Eventos
btnsNext[0].addEventListener("click", function () {
    const validate = validateRadioButtons(hourOptions);
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
        buyTickets.style.display = "none";
        confirmTickets.style.display = "block";
        errorMessage[1].style.opacity = 0;
        createCardBody();
    } else {
        errorMessage[1].style.opacity = 1;
    }
});
btnsNext[2].addEventListener("click", function () {
    ticketsForm.submit();
});

btnsPrev[0].addEventListener("click", function () {
    buyTickets.style.display = "none";
    date_hours.style.display = "block";
});
btnsPrev[1].addEventListener("click", function () {
    confirmTickets.style.display = "none";
    buyTickets.style.display = "block";
    thirdCardBody.innerHTML = "";
    tickets = {};
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
            tickets[i] = numSales[i].value;
        }
    }
    return validate;
}

function createCardBody() {
    let cont = 0;
    for (let index in tickets) {
        for (let j = 0; j < parseInt(tickets[index]); j++) {
            if (index == 0) {
                thirdCardBody.appendChild(
                    createRow(ticketsInf[parseInt(index)], 1, cont)
                );
            } else {
                thirdCardBody.appendChild(
                    createRow(ticketsInf[parseInt(index)], 2, cont)
                );
            }
            cont++;
        }
    }
    let lastHr = document.getElementsByTagName("hr");
    lastHr[lastHr.length - 1].style.display = "none";
}

function createRow(TicketInfo, TicketType, id) {
    // Declaracion de elementos
    let row = document.createElement("div");
    let col = document.createElement("div");
    let p = document.createElement("p");
    let hr = document.createElement("hr");

    // Añadir clases a los elementos
    row.classList.add(
        "row",
        "g-3",
        "justify-content-center",
        "pe-5",
        "ps-5",
        "align-items-center"
    );
    col.classList.add("col-12", "me-auto", "lab");
    p.classList.add("fw-bold");
    hr.classList.add(
        "border",
        "border-dark",
        "border-2",
        "rounded-4",
        "pe-5",
        "ps-5"
    );

    // Definir atributos y valores
    p.textContent = TicketInfo;

    // Enlazar elementos
    row.appendChild(col);
    col.appendChild(p);

    switch (TicketType) {
        case 1:
            col = generateCommonFields(col, id);
            col.appendChild(
                generateInputGroup(
                    "text",
                    "Nro tarjeta:",
                    "Introduce tu nro tarjeta de discapacidad..."
                )
            );
            col.appendChild(
                generateRbOption("Discapacidad mayor al 33%.", 0, "radio1")
            );
            col.appendChild(
                generateRbOption("Discapacidad mayor al 50%.", 1, "radio2")
            );
            break;
        case 2:
            col = generateCommonFields(col, id);
            break;
    }
    row.appendChild(hr);

    return row;
}

function generateCommonFields(col, id) {
    col.appendChild(
        generateInputGroup(
            "text",
            "Nombre:",
            "Introduce tu nombre completo...",
            id,
            "name"
        )
    );
    col.appendChild(
        generateInputGroup(
            "text",
            "DNI:",
            "Introduce tu número de identificación...",
            id,
            "dni"
        )
    );
    col.appendChild(
        generateInputGroup(
            "email",
            "Correo:",
            "Introduce tu correo electronico...",
            id,
            "email"
        )
    );

    return col;
}

function generateInputGroup(type, text, placeholder, id, name) {
    // Declaracion de elementos
    let inputGroup = document.createElement("div");
    let span = document.createElement("span");
    let input = document.createElement("input");

    // Añadir clases a los elementos
    inputGroup.classList.add("input-group", "mb-3");
    span.classList.add("input-group-text", "fw-bold", "border-dark");
    input.classList.add("form-control", "border-dark");

    // Definir stilos
    span.style.minWidth = "95px";

    // Definir atributos y valores
    span.textContent = text;
    input.type = type;
    input.placeholder = placeholder;
    input.setAttribute("name", `tickets[${id}][${name}]`);

    // Enlazar elementos
    inputGroup.appendChild(span);
    inputGroup.appendChild(input);

    return inputGroup;
}

function generateRbOption(labelText, value, id) {
    // Declaracion de elementos
    let formCheck = document.createElement("div");
    let input = document.createElement("input");
    let label = document.createElement("label");

    // Añadir clases a los elementos
    formCheck.classList.add("form-check", "form-check-inline");
    input.classList.add("form-check-input");
    label.classList.add("form-check-label");

    // Definir atributos y valores
    input.value = value;
    input.id = id;
    input.type = "radio";
    label.textContent = labelText;
    label.htmlFor = id;

    // Enlazar elementos
    formCheck.appendChild(input);
    formCheck.appendChild(label);
    return formCheck;
}
