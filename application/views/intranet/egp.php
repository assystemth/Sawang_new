<!-- ส่วนทางขวา -->
<div class="flex-item-right">
    <div class="all-report mt-5">
        <h4 class="font-topic-all-report">งบประมาณและโครงการ</h4>
        <div class="row">
            <div class="col-sm-4">
                <div class="card-all-report-project mt-3">
                    <span class="font-topic-egp">โครงการ</span>
                    <div class="mt-3">
                        <canvas id="myChartProject" style="width:100%;max-width:500px; height: 350px;"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card-all-report-project mt-3">
                    <span class="font-topic-egp">งบประมาณ</span>
                    <div class="mt-3">
                        <div id="budgetChart" class="budgetChart"></div>
                    </div>
                </div>
            </div>
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
            <div class="col-sm-4">
                <div class="card-all-report-project mt-3">
                    <span class="font-topic-egp">สถานะโครงการ</span>
                    <div class="mt-3">
                        <canvas id="myChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <!-- <h1>จำนวน project_id ทั้งหมดในตาราง tbl_bp_report_y2567 คือ: <?php echo $count_id_y2567; ?></h1>
            <h1>Sum of Project Money: <?php echo $sum_money_y2567; ?></h1>
            <h1>จำนวน project_id ทั้งหมดในตาราง tbl_bp_report_y2566 คือ: <?php echo $count_id_y2566; ?></h1>
            <h1>Sum of Project Money: <?php echo $sum_money_y2566; ?></h1>
            <h1>จำนวน project_id ทั้งหมดในตาราง tbl_bp_report_y2565 คือ: <?php echo $count_id_y2565; ?></h1>
            <h1>Sum of Project Money: <?php echo $sum_money_y2565; ?></h1> -->
    </div>
</div>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js/dist/chart.umd.min.js"></script>
<script>
    // setup 
    const data = {
        labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
        datasets: [{
            label: 'A',
            data: [18],
            backgroundColor: [
                'rgba(54, 162, 235, 0.2)'
            ],
            borderColor: [
                'rgba(54, 162, 235, 1)'
            ],
            hoverBackgroundColor: [
                'rgba(54, 162, 235, 1)'
            ],
        }, {
            label: 'A',
            data: [5, 20],
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
        }]
    };

    // config 
    const config = {
        type: 'doughnut',
        data,
        options: {
            plugin: {
                borderWidth: 1
            },
            doughnutlabel: {
                labels: [{
                        text: '550',
                        font: {
                            size: 20,
                            weight: 'bold',
                        },
                    },
                    {
                        text: 'total',
                    },
                ],
            },
        }
    };

    // render init block
    const myChart = new Chart(
        document.getElementById('myChart'),
        config
    );

    // Instantly assign Chart.js version
    const chartVersion = document.getElementById('chartVersion');
    chartVersion.innerText = Chart.version;
</script>