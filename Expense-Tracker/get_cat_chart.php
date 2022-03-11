<?php
include './Includes/Functions/functions.php';

$user_id = $_SESSION['user']['id'];

$from_date = $params['from_date']." 00:00:00";
$to_date = $params['to_date']." 23:59:59";


$sql = "SELECT sum(e.amount) as total_expenses, c.name FROM expenses e LEFT JOIN categories c ON e.category_id = c.id WHERE e.user_id = $user_id GROUP BY e.category_id";
$categories = $db->query($sql)->fetchAll(PDO::FETCH_ASSOC);

if(empty($categories)){
    echo "No expenses found";
    die;
}
?>

<div class="c_chart_wrapper">
        <div id="chart_div_cat" class="chart_div">

        </div>
    </div>

<script>
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

	var data = google.visualization.arrayToDataTable([
	  ['Category', 'Total Expenses'],
	  <?php
	  foreach($categories as $cat){
	      ?>
	      ['<?=$cat['name']?>', <?=$cat['total_expenses']?>],
	      <?php
	  }
	  ?>
	]);

	var options = {
	  title: 'Expenses by Category',
	  pieHole: 0.4,
	  height: 300,
	  backgroundColor: 'transparent'
	};

	var chart = new google.visualization.PieChart(document.getElementById('chart_div_cat'));

	chart.draw(data, options);
    }
</script>