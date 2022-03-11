<?php
include './Includes/Functions/functions.php';
$user_id = $_SESSION['user']['id'];
$from_date = $params['from_date']." 00:00:00";
$to_date = $params['to_date']." 23:59:59";


$sql = "SELECT * FROM expenses WHERE datetime_added >= '$from_date' AND datetime_added <= '$to_date' AND user_id = $user_id";
$expenses = $db->query($sql)->fetchAll(PDO::FETCH_ASSOC);

if(empty($expenses)){
    echo "No expenses were added in the selected date range";
    die;
}
?>

<div class="d_chart_wrapper">
        <div id="chart_div_date" class="chart_div">

        </div>
    </div>

    <script>
        google.charts.load('current', {packages: ['corechart', 'line']});
        google.charts.setOnLoadCallback(drawLogScales);

        function drawLogScales() {
          var data = new google.visualization.DataTable();

            data.addColumn('string', 'y');
            data.addColumn('number', 'Amount');
	    data.addColumn({type: 'string', role: 'tooltip'});

          data.addRows([
            <?php
            foreach($expenses as $expense){
                ?>['<?=date('Y-m-d', strtotime($expense['datetime_added']))?>',
                <?=$expense['amount']?>,
		'<?=$expense['amount']." | ".$expense['description']." | ".$expense['datetime_added']?>'],<?php
            }
            ?>
          ]);

          var options = {
            tooltip: { isHtml: true, width: 200 },
            backgroundColor: { fill:'transparent' },
            hAxis: {
              title: 'Date Time',
              direction: 1, slantedText:false, slantedTextAngle:0,
    //					      ticks: [48,36,24, 12, 0],
              textStyle:{color: '#000'},
              legendTextStyle: { color: '#000' },
                titleTextStyle: { color: '#000' },
    //						viewWindow: {
    //						    min: 0,
    //						    max: 48
    //						}
            },
            height: 500,
            width: '1100',
            curveType: 'function',
            vAxis: {
              title: 'Amount',
              logScale: false,
    //					      format: '#\'%\'',
              textStyle:{color: '#000'},
    					      viewWindow: {
    						    min: 0
    						},
                legendTextStyle: { color: '#000' },
                titleTextStyle: { color: '#000' },
//                ticks: [0,50,100,150,200,250,300,350]
            },

            colors: ['#3c8dbc', '#f08122']
          };


          var formatter = new google.visualization.NumberFormat(
            {suffix: ' min remaining', pattern:'##'}
            );
            formatter.format(data, 0);

    //					    var formatter1 = new google.visualization.NumberFormat(
    //					    {suffix: ' %', pattern:'##'}
    //					    );
    //					    formatter1.format(data, 1);
    //
    //
    //					    formatter1.format(data, 2);

          var chart = new google.visualization.LineChart(document.getElementById('chart_div_date'));
          chart.draw(data, options);
        }
    </script>