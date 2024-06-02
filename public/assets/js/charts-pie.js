/**
 * For usage, visit Chart.js docs https://www.chartjs.org/docs/latest/
 */
const pieCtx = document.getElementById("pie");
const groupedData = JSON.parse(pieCtx.getAttribute("data-grouped-data"));
const labels = groupedData.map((data) => data.kategori);
const jmlBuku = groupedData.map((data) => data.jumlah_buku);

function getRandomColor() {
    const letters = "0123456789ABCDEF";
    let color = "#";
    for (let i = 0; i < 6; i++) {
        color += letters[Math.floor(Math.random() * 14)];
    }
    return color;
}

const backgroundColors = labels.map(() => getRandomColor());
const pieConfig = {
    type: "doughnut",
    data: {
        datasets: [
            {
                data: jmlBuku,
                /**
                 * These colors come from Tailwind CSS palette
                 * https://tailwindcss.com/docs/customizing-colors/#default-color-palette
                 */
                // backgroundColor: ["#0694a2", "#1c64f2", "#7e3af2"],
                backgroundColor: backgroundColors,
                label: "Buku per Kategori",
            },
        ],
        labels: labels,
    },
    options: {
        responsive: true,
        cutoutPercentage: 80,
        /**
         * Default legends are ugly and impossible to style.
         * See examples in charts.html to add your own legends
         *  */
        legend: {
            display: true,
            position: "bottom",
            labels: {
                usePointStyle: true,
                boxWidth: 15,
                pointStyle: "circle",
                padding: 20,
            },
        },
    },
};

// change this to the id of your chart element in HMTL

// console.log(backgroundColors);
window.myPie = new Chart(pieCtx, pieConfig);
