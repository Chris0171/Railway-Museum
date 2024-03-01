// Elemento html que se requieren
const date_hours = document.getElementById("first");
const buyTickets = document.getElementById("second");
const confirmTickets = document.getElementById("third");
const summaryTickets = document.getElementById("fourth");
const btnsNext = document.getElementsByClassName("btnNext");
const btnsPrev = document.getElementsByClassName("btnPrev");
const date = document.getElementById("calendary");
const hourOptions = document.getElementsByName("timeSlot");
const numSales = document.getElementsByClassName("numSales");
const errorMessage = document.getElementsByClassName("errorMessage");
const thirdCardBody = document.getElementsByClassName("card-body")[2];
const ticketsForm = document.getElementById("ticketForm");
const summaryCardBody = document.getElementById("summaryCardBody");
const btnConfirm = document.getElementById("btnConfirm");
const messageCol = document.getElementsByClassName("messageCol");
const btnModalDate = document.getElementById("modalDate");
const btnModalClose = document.getElementById("btnModalClose");

// Variables necesarias para la lógica
let tickets = {};
const ticketsInf = [
    "Entrada para una persona con discapacidad (Gratis)",
    "Entrada para un menor de cuatro años (Gratis)",
    "Entrada para una persona sin empleo (Gratis)",
    "Entrada para un menor entre 4 y 12 años (3€)",
    "Entrada para un mayor de 65 años (3€)",
    "Entrada para un estudiante (3€)",
    "Entrada para un profesor (3€)",
    "Entrada para un adulto (7€)",
];
const dis = 65;
const minDate = new Date();
const disableDates = ["12-25", "01-01", "01-06"];

minDate.setDate(minDate.getDate() + 1);
date.value = minDate.toISOString().split("T")[0];
date.min = minDate.toISOString().split("T")[0];

let typeArr;
let nameArr;
let dniArr;
let emailArr;

/* ********* Next Button Events *********  */
date.addEventListener("change", function () {
    const selectedDate = new Date(date.value);
    const noOpenDays = [1, 6, 25];

    if (noOpenDays.includes(selectedDate.getDate())) {
        btnModalDate.click();
    }
});
btnModalClose.addEventListener("click", function () {
    date.value = minDate.toISOString().split("T")[0];
});
btnsNext[0].addEventListener("click", function () {
    const validate = validateRadioButtons(hourOptions);
    if (date.value && validate) {
        date_hours.style.display = "none";
        buyTickets.style.display = "block";
        messageCol[0].style.display = "none";
        errorMessage[0].style.display = "none";
        errorMessage[0].style.opacity = 0;
    } else {
        messageCol[0].style.display = "block";
        errorMessage[0].style.display = "block";
        errorMessage[0].style.opacity = 1;
    }
});
btnsNext[1].addEventListener("click", function () {
    if (validateTickets()) {
        buyTickets.style.display = "none";
        confirmTickets.style.display = "block";
        messageCol[1].style.display = "none";
        errorMessage[1].style.opacity = 0;
        errorMessage[1].style.display = "none";
        createCardBody();
    } else {
        messageCol[1].style.display = "block";
        errorMessage[1].style.opacity = "block";
        errorMessage[1].style.opacity = 1;
    }
});
btnsNext[2].addEventListener("click", function () {
    if (checkFormValues()) {
        confirmTickets.style.display = "none";
        summaryTickets.style.display = "block";
        errorMessage[2].style.opacity = 0;
        errorMessage[2].style.display = "none";
        messageCol[2].style.display = "none";
        generateSummaryTBody();
    } else {
        messageCol[2].style.display = "block";
        errorMessage[2].style.opacity = "block";
        errorMessage[2].style.opacity = 1;
    }
});
btnsNext[3].addEventListener("click", function () {
    document.getElementById("btnModal").click();
});
btnConfirm.addEventListener("click", function () {
    ticketsForm.submit();
});

/* ********* Prev Button Events *********  */
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
btnsPrev[2].addEventListener("click", function () {
    confirmTickets.style.display = "block";
    summaryCardBody.innerHTML = "";
    summaryTickets.style.display = "none";
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
function checkFormValues() {
    typeArr = document.getElementsByClassName("type");
    nameArr = document.getElementsByClassName("name");
    dniArr = document.getElementsByClassName("dni");
    emailArr = document.getElementsByClassName("email");

    let flag = true;
    for (let i = 0; i < typeArr.length; i++) {
        if (
            typeArr[i].value == "" ||
            nameArr[i].value == "" ||
            dniArr[i].value == "" ||
            emailArr[i].value == ""
        ) {
            flag = false;
            i = typeArr.length;
        }
    }
    return flag;
}

function createCardBody() {
    let cont = 0;
    for (let index in tickets) {
        for (let j = 0; j < parseInt(tickets[index]); j++) {
            if (index == 0) {
                thirdCardBody.appendChild(
                    createRow(ticketsInf[parseInt(index)], 1, cont, index)
                );
            } else {
                thirdCardBody.appendChild(
                    createRow(ticketsInf[parseInt(index)], 2, cont, index)
                );
            }
            cont++;
        }
    }
    let lastHr = document.getElementsByTagName("hr");
    lastHr[lastHr.length - 1].style.display = "none";
}

function createRow(TicketInfo, TicketType, id, index) {
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
    col.appendChild(generateTicketTypeHiddenInput(id, index));
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
    let divAlert = document.createElement("div");

    // Añadir clases a los elementos
    inputGroup.classList.add("input-group", "mb-3");
    span.classList.add("input-group-text", "fw-bold", "border-dark");
    input.classList.add("form-control", "border-dark", name);
    divAlert.classList.add("invalid-feedback");

    // Definir stilos
    span.style.minWidth = "95px";
    divAlert.textContent = "Debe relledar este campo.";

    // Definir atributos y valores
    span.textContent = text;
    input.type = type;
    input.placeholder = placeholder;
    input.setAttribute("name", `tickets[${id}][${name}]`);
    input.setAttribute("required", "required");

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
    input.getAttribute("name", "dis");
    input.setAttribute("required", "required");

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
function generateTicketTypeHiddenInput(id, type) {
    let input = document.createElement("input");
    input.classList.add("type");
    input.setAttribute("name", `tickets[${id}][ticketType]`);
    input.type = "hidden";
    input.value = type;
    return input;
}

/* ********* Summary Card *********  */
function generateSummaryTBody() {
    for (let i = 0; i < nameArr.length; i++) {
        summaryCardBody.appendChild(
            generateTr(
                typeArr[i].value,
                nameArr[i].value,
                dniArr[i].value,
                emailArr[i].value
            )
        );
    }
}

function generateTr(type, name, email, dni) {
    let tr = document.createElement("tr");
    let tdType = document.createElement("td");
    tdType.textContent = getTicketDataByType(type)[0];
    tr.appendChild(tdType);
    let tdName = document.createElement("td");
    tdName.textContent = name;
    tr.appendChild(tdName);
    let tdEmail = document.createElement("td");
    tdEmail.textContent = email;
    tr.appendChild(tdEmail);
    let tdDni = document.createElement("td");
    tdDni.textContent = dni;
    tr.appendChild(tdDni);
    let tdPrice = document.createElement("td");
    tdPrice.textContent = getTicketDataByType(type)[1];
    tr.appendChild(tdPrice);

    return tr;
}
function getTicketDataByType(type) {
    let data = ["", ""];
    switch (type) {
        case "0":
            data[0] = "Discapacidad";
            data[1] = "0.00€";
            break;
        case "1":
            data[0] = "Menor de 4 años";
            data[1] = "0.00€";
            break;
        case "2":
            data[0] = "Desempleado";
            data[1] = "0.00€";
            break;
        case "3":
            data[0] = "Menor entre 4 y 12 años";
            data[1] = "0.00€";
            break;
        case "4":
            data[0] = "Mayor de 65 años";
            data[1] = "0.00€";
            break;
        case "5":
            data[0] = "Estudiante";
            data[1] = "0.00€";
            break;
        case "6":
            data[0] = "Profesor";
            data[1] = "0.00€";
            break;
        case "7":
            data[0] = "Adulto";
            data[1] = "0.00€";
            break;
    }
    return data;
}
