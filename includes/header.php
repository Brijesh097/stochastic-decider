<?php ob_start(); ?>    <!-- Output Buffer -->
<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Home | Stochastic Decider</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Icons -->
    <link href="admin/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Google Fonts CDN -->
    <link href="https://fonts.googleapis.com/css?family=Roboto|Ubuntu:400,700" rel="stylesheet">

    <!-- Animate CSS -->
    <link rel="stylesheet" type="text/css" href="css/animate.css">

    <!-- Custom CSS -->
    <link href="css/blog-home.css" rel="stylesheet">
    
    <!-- FlipClock JS -->
    <link rel="stylesheet" href="js/compiled/flipclock.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="js/compiled/flipclock.min.js"></script>
   	<script>
	
<?php

$select_query = "SELECT * FROM timer ORDER BY id DESC LIMIT 1";
$set_timer = mysqli_query($connection,$select_query);
while($row=mysqli_fetch_assoc($set_timer)){
    $month=$row['month'];
    $date=$row['date'];
    $year=$row['year'];




?>
// Set the date we're counting down to
var countDownDate = new Date("<?php echo $month?> <?php echo $date?>, <?php echo $year?>").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();
    
    // Find the distance between now and the count down date
    var distance = countDownDate - now;
    
    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    // Output the result in an element with id="demo"
    document.getElementById("day").innerHTML = days;
    document.getElementById("hour").innerHTML = hours;
    document.getElementById("min").innerHTML = minutes;
    document.getElementById("sec").innerHTML = seconds;
    // If the count down is over, write some text 
    if (distance < 0) {
        clearInterval(x);
		document.getElementById("clockdiv").innerHTML =
		 "The Winner is <?php 
			 $random = rand(1,5);
			 $query = "SELECT * from member WHERE id ='$random'";
			 $result = mysqli_query($connection,$query);
           
          
    
               
			 while($row = mysqli_fetch_assoc($result)){
				 $name = $row['name'];
				 $email = $row['email'];
				 $photo = $row['profile_photo'];
				
				 $id = $row['id'];
			 }
     echo $name;
    $win = "INSERT INTO winner(winner_name,winner_email,winner_photo)VALUE('$name','$email','$photo')";
            $win_res = mysqli_query($connection,$win);
			
       
		 ?>";
        document.getElementById("clockdiv").style('position','absolute');
     
    }
}, 1000);



function changecolor(id)
		{
			document.body.style.background = document.getElementById(id).innerHTML;
		}
      <?php  }?>
	
	</script>
    <!-- Countdown 2 -->
    <!-- <script src="js/jquery.countdown.js"></script> -->

</head>

<body class="animated fadeIn">