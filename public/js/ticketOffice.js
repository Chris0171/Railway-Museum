// Elementos HTML que se requieren
const barChart = document.getElementById("barChart").getContext("2d");

const typeSelector = document.getElementById("type");
var myChart = null;

typeSelector.addEventListener("change", function () {
    if (myChart !== null) {
        myChart.destroy();
        myChart = chart(barChart, typeSelector.value);
    } else myChart = chart(barChart, typeSelector.value);
});

function chart(chartT, type) {
    let chart;
    if (type == 1) {
        chart = new Chart(chartT, {
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
                            8250, 9900, 11800, 8690, 9000, 7900, 8400, 10100,
                            12000, 12300, 13000, 12400,
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
                maintainAspectRatio: false,
            },
        });
    } else if (type == 2) {
        chart = new Chart(chartT, {
            type: "pie",
            data: {
                labels: [
                    "Personas con discapacidad",
                    "Menores de cuatro años",
                    "Personas sin empleo",
                    "Menores entre 4 y 12 años",
                    "Mayores de 65 años",
                    "Estudiantes",
                    "Profesores",
                    "Adulto",
                ],
                datasets: [
                    {
                        label: "Ventas de entradas",
                        data: [
                            8750, 9900, 11800, 8690, 10210, 8950, 8400, 10100,
                        ],
                        backgroundColor: [
                            "rgba(86, 157, 197, 0.4)",
                            "rgba(197, 86, 102, 0.4)",
                            "rgba(86, 197, 126, 0.4)",
                            "rgba(197, 86, 157, 0.4)",
                            "rgba(197, 126, 86, 0.4)",
                            "rgba(197, 182, 86, 0.4)",
                            "rgba(182, 86, 197, 0.4)",
                            "rgba(86, 102, 197, 0.4)",
                        ],
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
                maintainAspectRatio: false,
                plugins: {
                    datalabels: {
                        color: "#fff", // Color de las etiquetas
                        anchor: "end", // Posición de las etiquetas dentro del segmento
                        align: "start", // Alineación de las etiquetas dentro del segmento
                    },
                },
            },
        });
    }
    return chart;
}
