<!DOCTYPE html>
<html style="background:black;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Network Status</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body style="background:black;">
    <div id="topbar" class="row green">
        <div class="col-md-10">
            <h1>Network Status<strong id="alert" style="visibility: hidden;"> - OUTAGE DETECTED!!!</strong></h1></div>
        <div class="col-md-2">
        <div class="clock">
			<div id="Date"></div>
			  <ul>
				  <li id="hours"></li>
				  <li id="point">:</li>
				  <li id="min"></li>
				  <li id="point">:</li>
				  <li id="sec"></li>
			  </ul>
		</div>
		</div>
    </div>
    <div id="hosts" style="padding-top: 10px;">
        <div>
            <div class="row">
				
				<div class="col-md-3">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Site 1</h3>
						</div>
					<div class="panel-body">
						<!-- Hosts -->
						<div id="11"></div>
						<div id="12"></div>
						<div id="13"></div>
						<div id="14"></div>     
						<!-- End Hosts -->
					</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Site 2</h3>
						</div>
					<div class="panel-body">
						<!-- Hosts -->
						<div id="21"></div>
						<div id="22"></div>
						<div id="23"></div>  
						<div id="24"></div>  
						<!-- End Hosts -->
					</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Site 3</h3>
						</div>
					<div class="panel-body">
						<!-- Hosts -->
						<div id="31"></div>
						<div id="32"></div>
						<div id="33"></div>
						                
						<!-- End Hosts -->
					</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Site 4</h3>
						</div>
					<div class="panel-body">
						<!-- Hosts -->
						<div id="41"></div>
						<div id="42"></div>
						<div id="43"></div>
						
						                
						<!-- End Hosts -->
					</div>
					</div>
				</div>
				<div class="col-md-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Site 5</h3>
						</div>
					<div class="panel-body">
						<div class="col-md-3">
						<!-- Hosts -->
						<div id="51a"></div>
						<div id="52a"></div>
						<div id="53a"></div>
						<div id="54a"></div>

						<!-- End Hosts -->							
						</div>
						<div class="col-md-3">
						<!-- Hosts -->
						<div id="51b"></div>
						<div id="52b"></div>
						<div id="53b"></div>
						<div id="54b"></div>
						<div id="55b"></div>


						<!-- End Hosts -->
						</div>
						<div class="col-md-3">
						<!-- Hosts -->
						<div id="51c"></div>
						<div id="52c"></div>
						<div id="53c"></div>
						<div id="54c"></div>
						<div id="55c"></div>
                        <div id="56c"></div>

						<!-- End Hosts -->
						</div>
						<div class="col-md-3">
						<!-- Hosts -->
							<div id="51d"></div>	
							<div id="52d"></div>
							<div id="53d"></div>
							<div id="54d"></div>
							<div id="55d"></div>
						<!-- End Hosts -->
						</div>
						</div>
					</div>
					</div>
				</div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
// Create two variable with the names of the months and days in an array
var monthNames = [ "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December" ]; 
var dayNames= ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"]

// Create a newDate() object
setInterval( function() {
	var newDate = new Date();
	// Extract the current date from Date object
	newDate.setDate(newDate.getDate());
	// Output the day, date, month and year   
	$('#Date').html(dayNames[newDate.getDay()] + " " + newDate.getDate() + ' ' + monthNames[newDate.getMonth()] + ' ' + newDate.getFullYear());
	},1000);
setInterval( function() {
	// Create a newDate() object and extract the seconds of the current time on the visitor's
	var seconds = new Date().getSeconds();
	// Add a leading zero to seconds value
	$("#sec").html(( seconds < 10 ? "0" : "" ) + seconds);
	},1000);
	
setInterval( function() {
	// Create a newDate() object and extract the minutes of the current time on the visitor's
	var minutes = new Date().getMinutes();
	// Add a leading zero to the minutes value
	$("#min").html(( minutes < 10 ? "0" : "" ) + minutes);
    },1000);
	
setInterval( function() {
	// Create a newDate() object and extract the hours of the current time on the visitor's
	var hours = new Date().getHours();
	// Add a leading zero to the hours value
	$("#hours").html(( hours < 10 ? "0" : "" ) + hours);
    }, 1000);	
});
	</script>
</body>

</html>
