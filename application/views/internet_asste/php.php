<script>
    // กราฟงบประมาณ ******************************************************************
    google.charts.load('current', {
        'packages': ['corechart']
    });

    // Set a callback to run when the Google Visualization API is loaded.
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        // Create the data table.
        var data = google.visualization.arrayToDataTable([
            ['Year', 'ราคากลาง', {
                role: 'annotation'
            }, 'ราคาชนะประมูล', {
                role: 'annotation'
            }],
            ['2567', <?php echo $sum_price_build_money_y2567; ?>, '<?php echo $sum_price_build_money_y2567; ?>', <?php echo $sum_money_y2567; ?>, '<?php echo $sum_money_y2567; ?>'],
            ['2566', <?php echo $sum_price_build_money_y2566; ?>, '<?php echo $sum_price_build_money_y2566; ?>', <?php echo $sum_money_y2566; ?>, '<?php echo $sum_money_y2566; ?>'],
            ['2565', <?php echo $sum_price_build_money_y2565; ?>, '<?php echo $sum_price_build_money_y2565; ?>', <?php echo $sum_money_y2565; ?>, '<?php echo $sum_money_y2565; ?>']
        ]);

        // Set chart options
        var options = {
            title: 'จำนวนเงินรวมทุกโครงการ',
            hAxis: {
                // title: 'ปี',
                titleTextStyle: {
                    color: 'black'
                }
            },
            colors: ['#FF62D3', '#5174EE'], // กำหนดสีของกราฟ
            backgroundColor: '#fff', // กำหนดสีพื้นหลังของกราฟ
            legend: {
                position: 'bottom', // เลื่อนป้ายกำกับ (label) ไปไว้ด้านล่างของกราฟ
                textStyle: {
                    color: 'blue'
                } // กำหนดสีของตัวหนังสือในป้ายกำกับ
            },
        };

        // Instantiate and draw the chart.
        var chart = new google.visualization.ColumnChart(document.getElementById('budgetChart'));
        chart.draw(data, options);
    }
</script>
<script>
    // กราฟโครงการ ******************************************************************
    const yValue1 = <?php echo $sum_money_y2567; ?>;
    const xValue1 = <?php echo $count_id_y2567; ?>;
    const yValue2 = <?php echo $sum_money_y2566; ?>;
    const xValue2 = <?php echo $count_id_y2566; ?>;
    const yValue3 = <?php echo $sum_money_y2565; ?>;
    const xValue3 = <?php echo $count_id_y2565; ?>;

    new Chart("myChartProject", {
        type: "line",
        data: {
            datasets: [{
                label: 'ปีงบประมาณ 2567',
                borderColor: "#61A3E0",
                pointStyle: 'circle', // เปลี่ยนรูปแบบของ label เป็นวงกลม
                data: [{
                    x: 0,
                    y: 0
                }, {
                    x: xValue1,
                    y: yValue1
                }]
            }, {
                label: 'ปีงบประมาณ 2566',
                borderColor: "rgba(255,0,0,1)",
                pointStyle: 'circle', // เปลี่ยนรูปแบบของ label เป็นวงกลม
                data: [{
                    x: 0,
                    y: 0
                }, {
                    x: xValue2,
                    y: yValue2
                }]
            }, {
                label: 'ปีงบประมาณ 2565',
                borderColor: "rgba(0,255,0,1)",
                pointStyle: 'circle', // เปลี่ยนรูปแบบของ label เป็นวงกลม
                data: [{
                    x: 0,
                    y: 0
                }, {
                    x: xValue3,
                    y: yValue3
                }]
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        min: 0,
                        max: 15000000,
                        callback: function(value, index, values) {
                            return value.toLocaleString();
                        }
                    }
                }],
                xAxes: [{
                    type: 'linear',
                    ticks: {
                        min: 0,
                        max: 300,
                        callback: function(value, index, values) {
                            return value.toLocaleString();
                        }
                    },
                    display: true
                }]
            },
            legend: {
                position: 'bottom' // เลื่อนป้ายกำกับ (label) ไปไว้ด้านล่างของกราฟ
            }
        }
    });
</script>
<script>
    // เรื่องร้องเรียน 
    $(document).ready(function() {
        var obj = {
            values: [
                <?php echo $total_complain_year; ?>,
                <?php echo $total_complain_success; ?>,
                <?php echo $total_complain_operation; ?>,
                <?php echo $total_complain_accept; ?>,
                <?php echo $total_complain_doing; ?>,
                <?php echo $total_complain_wait; ?>,
                <?php echo $total_complain_cancel; ?>
            ],
            colors: ['#F5900A', '#DBFFDD', '#FFA085', '#CFE5FF', '#CFD7FE', '#FFD361', '#FFE3E3'],
            animation: true,
            animationSpeed: 10,
            fillTextData: false,
            fillTextColor: '#fff',
            fillTextAlign: 1.35,
            fillTextPosition: 'inner',
            doughnutHoleSize: 50,
            doughnutHoleColor: '#fff',
            offset: 0,
            pie: 'normal',
            isStrokePie: {
                stroke: 20,
                overlayStroke: true,
                overlayStrokeColor: '#eee',
                strokeStartEndPoints: 'Yes',
                strokeAnimation: true,
                strokeAnimationSpeed: 40,
                fontSize: '60px',
                textAlignement: 'center',
                fontFamily: 'Arial',
                fontWeight: 'bold'
            }
        };

        var values = obj.values;
        var colors = obj.colors;

        for (var i = 0; i < values.length; i++) {
            var cardId = "card" + values[i];
            var card = $("#" + cardId);
            if (card) {
                card.css("background-color", colors[i]);
            }
        }


        generatePieGraph('myCanvas', obj);
    });
</script>