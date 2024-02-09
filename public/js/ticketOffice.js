// Elementos HTML que se requieren
const barChart = document.getElementById("barChart").getContext("2d");

let chart = new Chart(barChart, {
    type: "bar",
    data: {
        labels: [
            "Enero",
            "Febrero",
            "Marzo",
            "Abril",
            "Mayo",
            "Junio",
            "Julio",
            "Agosto",
            "Septiembre",
            "Octubre",
            "Noviembre",
            "Diciembre",
        ],
        datasets: [
            {
                label: "Ventas de entradas",
                data: [
                    8250, 9900, 11800, 8690, 9000, 7900, 8400, 10100, 12000,
                    12300, 13000, 12400,
                ],
                backgroundColor: "rgba( 86, 157, 197, 0.4)",
                borderColor: "rgba(0, 123, 147, 1)",
                borderWidth: 1.5,
            },
        ],
    },
    options: {
        scales: {
            y: {
                beginAtZero: false,
                ticks: {
                    stepSize: 2000,
                    min: 3000,
                    max: 24000,
                },
            },
        },
        responsive: true,
    },
});
