<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Getting Started with Chart JS with www.chartjs3.com</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
        }

        .chartMenu {
            width: 100vw;
            height: 40px;
            background: #1A1A1A;
            color: rgba(54, 162, 235, 1);
        }

        .chartMenu p {
            padding: 10px;
            font-size: 20px;
        }

        .chartCard {
            width: 100vw;
            height: calc(100vh - 40px);
            background: rgba(54, 162, 235, 0.2);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .chartBox {
            width: 700px;
            padding: 20px;
            border-radius: 20px;
            border: solid 3px rgba(54, 162, 235, 1);
            background: white;
        }
    </style>
</head>

<body>
    <div class="chartMenu">
        <p>WWW.CHARTJS3.COM (Chart JS <span id="chartVersion"></span>)</p>
    </div>
    <div class="chartCard">
        <div class="chartBox">
            <canvas id="myChart"></canvas>
        </div>
    </div>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js/dist/chart.umd.min.js"></script>
    <script>
        // setup 
        const data = {
            labels: ['จำนวนเงินรวม', 'ระหว่างดำเนินการ', 'จำนวนเงินรวม', 'สิ้นสุดสัญญา'],
            datasets: [{
                label: 'A',
                data: [18, 5],
                backgroundColor: [
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(54, 162, 21, 0.2)',
                ],
                borderColor: [
                    'rgba(54, 162, 235, 1)',
                    'rgba(54, 162, 21, 1)'
                ],
                hoverBackgroundColor: [
                    'rgba(54, 162, 235, 1)',
                    'rgba(54, 162, 21, 1)'
                ],
            }, {
                label: 'B',
                data: [11, 20],
                backgroundColor: [
                    'rgba(255, 26, 255, 0.2)',
                    'rgba(255, 26, 104, 0.2)'

                ],
                borderColor: [
                    'rgba(255, 26, 255, 1)',
                    'rgba(255, 26, 104, 1)'
                ],
                hoverBackgroundColor: [
                    'rgba(255, 26, 255, 1)',
                    'rgba(255, 26, 104, 1)'
                ],
                // offset: 5,
                // borderRadius: 20, 
            }]
        };

        const doughnutLabel = {
            id: 'doughnutLabel',
            beforeDataSetsDraw(chart, args, pluginOptions) {
                const {
                    ctx,
                    data
                } = chart;

                ctx.save();
                const xCoor = chart.getDatasetMeta(0).data[0].x;
                const yCoor = chart.getDatasetMeta(0).data[0].y;
                ctx.font = 'bold 10px sans-serif';
                ctx.fillStyle = 'rgba(255, 26, 255, 1)';
                ctx.textAlign = 'center';
                ctx.textBaseline = 'middle';
                ctx.fillText(`EE`, xCoor, yCoor);
            }
        }

        const customDatalabels = {
            id: 'customDatalabels',
            afterDatasetsDraw(chart, args, pluginOptions) {
                const {
                    ctx,
                    data,
                    chartArea: {
                        top,
                        bottom,
                        left,
                        right,
                        width,
                        height
                    }
                } =
                chart;

                ctx.save();

                data.datasets[0].data.forEach((datapoint, index) => {
                    console.log(chart.getDatasetMeta(0).data[index]);
                    ctx.font = 'bold 12px sans-serif';
                    ctx.fillStyle = data.datasets[0].borderColor[index].tooltipPosition;
                    ctx.fillText(datapoint, 100, 100)
                })

            }
        }

        // config 
        const config = {
            type: 'doughnut',
            data,
            options: {
                borderWidth: 1,
                responsive: true,
                plugins: {
                    legend: {
                        display: false,
                        position: 'bottom',
                    },
                }
            },
            // Plugins: [doughnutLabel],
            Plugins: [customDatalabels]
        };

        // render init block
        const myChart = new Chart(
            document.getElementById('myChart'),
            config
        );
    </script>

</body>

</html>