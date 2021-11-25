import Chart from 'chart.js/auto';

let configs = $( '#chart-config' );
let dates   = JSON.parse( configs.attr( 'data-date' ) );
let prices  = JSON.parse( configs.attr( 'data-price' ) );

const data   = {
    labels: dates,
    datasets: [
        {
            label: 'Цена',
            backgroundColor: 'rgb(222,226,230)',
            borderColor: 'rgb(33,33,221)',
            data: prices,
            cubicInterpolationMode: 'monotone',
            tension: 0.4
        }
    ]
};
const config = {
    type: 'line',
    data: data,
    options: {
        responsive: true,
        plugins: {
            title: {
                display: true,
                text: 'Изменение цены'
            },
        },
        interaction: {
            intersect: false,
        },
        scales: {
            x: {
                display: true,
                title: {
                    display: true,
                    text: 'Дата'
                }
            },
            y: {
                display: true,
                title: {
                    display: true,
                    text: 'Цена'
                },
                suggestedMin: - 10,
                suggestedMax: 200
            }
        }
    },
};

new Chart(
    $( '#price-chart' ),
    config
);
