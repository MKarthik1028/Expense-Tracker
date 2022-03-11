<?php
include './Includes/Functions/functions.php';
include './Includes/Functions/auth.php';
$user_id = $_SESSION['user']['id'];

?><!DOCTYPE html>
<html  >
    <head>

	<?php include './top_scripts.php'; ?>
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    </head>
    <body>

	<?php include './Includes/header.php'; ?>


	<section class="features7 cid-sENIyiRsb8" id="features08-3" style="min-height: 500px;">


	    <div class="container">
		<div class="mbr-section-head pb-5">
		    <h4 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
			<strong>Date Wise Analysis</strong>
		    </h4>
		</div>
		<div class="row ">
		    <div class="col-lg-12" id="options_wrapper">
			<form method="GET" class="col-lg-12">
			    <div class="form-group" style="display: inline-block">
				<label>From Date</label>
				<input type="text" class="form-control datepicker" id="from_date" value="<?=date('Y-m-d', time() - 7*24*3600)?>"/>
			    </div>
			    <div class="form-group" style="display: inline-block">
				<label>To Date</label>
				<input type="text" class="form-control datepicker" id="to_date" value="<?=date('Y-m-d')?>"/>
			    </div>
			    <div class="field_wrapper" style="display: inline-block">
				<button type="button" id="btn_show_date_chart" class="btn btn-primary">Show</button>
			    </div>
			</form>
		    </div>
		    <div class="col-lg-12" id="date_chart_wrapper">
			
		    </div>
		</div>
	    </div>
	</section>
	
	
	<section class="features7 cid-sENIyiRsb8" id="features08-3" style="min-height: 500px;">


	    <div class="container">
		<div class="mbr-section-head pb-5">
		    <h4 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
			<strong>Category Wise Analysis</strong>
		    </h4>
		</div>
		<div class="row ">
		    <div class="col-lg-12" id="cat_chart_wrapper">
			
		    </div>
		</div>
	    </div>
	</section>

	
	
	<?php include './Includes/footer.php'; ?>
	<?php include './bottom_scripts.php'; ?>
	<script>
	    $(document).ready(function(){
		function pad(num, size) {
		    var s = num+"";
		    while (s.length < size) s = "0" + s;
		    return s;
		}
		$('.datepicker').glDatePicker({
		    onClick: function(target, cell, date, data) {
			target.val(date.getFullYear() + '-' +
			    pad(date.getMonth()+1, 2) + '-' +
			    pad(date.getDate(), 2));

			if(data != null) {
			    alert(data.message + '\n' + date);
			}
		    }
		});
		
		$('#btn_show_date_chart').on('click', function(){
		    update_date_chart();
		    
		});
		
		function update_date_chart(){
		    var from_date = $('#from_date').val();
		    var to_date = $('#to_date').val();
		    $.ajax({
			url: "get_date_chart.php",
			type: 'POST',
			data: {
			    from_date: from_date,
			    to_date: to_date
			},
			success: function (data, textStatus, jqXHR) {
			    $('#date_chart_wrapper').html(data);
			},
			dataType: 'html'
		    });
		}
		
		update_date_chart();
		
		
		function update_cat_chart(){
		    $.ajax({
			url: "get_cat_chart.php",
			type: 'POST',
			success: function (data, textStatus, jqXHR) {
			    $('#cat_chart_wrapper').html(data);
			},
			dataType: 'html'
		    });
		}
		
		update_cat_chart();
	    });
	</script>


    </body>
</html>