<script>
    $(document).ready(function() {
        var obj = {
            values: [
                <?php echo $onlineUsersDay; ?>,
                <?php echo $onlineUsersAll; ?>,
                <?php echo $onlineUsersYear; ?>,
                <?php echo $onlineUsersMonth; ?>,
                <?php echo (!empty($onlineUsersWeek) ? $onlineUsersWeek[0]->user_count : 0); ?>,
                <?php echo $onlineUsersCount; ?>
            ],
            colors: ['#D7D7D7', '#D6AE8B ', '#FFBE5C', '#FFE98E', '#FFE1BA', '#FFE4E2'],
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