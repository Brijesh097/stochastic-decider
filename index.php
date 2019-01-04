
<?php include "includes/db.php"; ?>
<?php include "includes/header.php"; ?>
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
		
			 $query = "SELECT * from winner ORDER BY winner_id DESC LIMIT 1";
			 $result = mysqli_query($connection,$query);
           
          
    
               
			 while($row = mysqli_fetch_assoc($result)){
				 $name = $row['winner_name'];
			 }
     echo $name;
   
       
		 ?>";
        document.getElementById("clockdiv").style('position','absolute');
     
    }
}, 1000);




      <?php  }?>
	
        </script>
    <!-- Navigation -->
    <?php include "includes/navbar.php"; ?>

    <!-- Page Content -->
    <div class="container">

        <!-- <div class="jumbotron">
          <img src="images/2.jpg" class="img-responsive img-thumbnail" alt="Lucky Draw">
        </div> -->

        <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
          <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
          <li data-target="#myCarousel" data-slide-to="3"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img class="first-slide img-responsive" src="images/1.jpg" alt="First slide" style="height: 600px; width: 100%;">
            <div class="container">
              <div class="carousel-caption">
                <h1><strong>Win Carrera GTS 911</strong></h1>
                <p><strong><i>Participate now and stand a chance to win this car!</i></strong></p>
              </div>
            </div>
          </div>
          <div class="item">
            <img class="second-slide img-responsive" src="images/2.jpg" alt="Second slide" style="height: 600px; width: 100%;">
            <div class="container">
              <div class="carousel-caption">
                <h1><strong>Win a ticket to Norway</strong></h1>
                <p><strong><i>Participate now and stand a chance to win a ticket to Norway!</i></strong></p>
              </div>
            </div>
          </div>
          <div class="item">
            <img class="third-slide img-responsive" src="images/3.jpg" alt="Third slide" style="height: 600px; width: 100%;">
            <div class="container">
              <div class="carousel-caption">
                <h1><strong>Space Travel</strong></h1>
                <p><strong><i>Participate now and stand a chance to space travel!</i></strong></p>
              </div>
            </div>
          </div>
          <div class="item">
            <img class="fourth-slide img-responsive" src="images/4.jpg" alt="Fourth slide" style="height: 600px; width: 100%;">
            <div class="container">
              <div class="carousel-caption">
                <h1><strong>Concert</strong></h1>
                <p><strong><i>Participate now and stand a chance to win a concert ticket!</i></strong></p>
              </div>
            </div>
          </div>
          </div>
          <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
          </a>
        </div>

        <hr>

        <div class="well well-lg">

<!--INSERT DATE-->
<?php
if(isset($_POST['set'])){
    $month = $_POST['month'];
    $date = $_POST['date'];
    $year = $_POST['year'];
    
    $query="INSERT INTO timer(month,date,year)VALUE('$month','$date','$year')";
    $insert_date = mysqli_query($connection,$query);
}   ?>

          <!-- FlipClock -->
          <h1 class="text-center" style="font-weight:bolder">Winners will be declared in
          </h1>
  <!-- For Timer -->
  <center>
    <div id="clockdiv">
      <div>
        <span id="day"></span>
        <div class="smalltext">Days</div>
      </div>
      <div>
        <span id="hour"></span>
        <div class="smalltext">Hours</div>
      </div>
      <div>
        <span id="min"></span>
        <div class="smalltext">Minutes</div>
      </div>
      <div>
        <span id="sec"></span>
        <div class="smalltext">Seconds</div>
      </div>
    </div>
  </center>
  <!--End of Timer-->

          <!-- Countdown 2 -->
          <!-- <script type="text/javascript">require('jquery-countdown');</script>
          <div id="getting-started"></div>
          <script type="text/javascript">
            $('#getting-started').countdown('2019/01/01', function(event) {
              $(this).html(event.strftime('%w weeks %d days %H:%M:%S'));
            });
          </script> -->

        </div>

        <!-- <hr> -->

        <div class="page-header">
          <h2>This week's suprise... &nbsp;<small></small></h2>
        </div>

        <div class="row">
                
            <?php 
        
        $query = "SELECT * FROM prize";
        $show_prize=mysqli_query($connection,$query);
        while($row=mysqli_fetch_assoc($show_prize))
        {
            $prize_image = $row['prize_image'];
            $prize_text = $row['prize_text'];
            
            ?>              
                    <div class="col-md-3 col-lg-3">
                       
                           <img id="image" class="img-responsive" src="images/<?php echo $prize_image;?>" alt="" >
                           <p><?php echo $prize_text;?></p>                                          
                    </div>             

            <?php
        }
       
        ?>

        </div>

        <hr>

        <div class="page-header">
          <h2>Our Winners! &nbsp;<small>(Till date)</small></h2>
        </div>

         <div class="row" align="center">
  <?php 
             $query = "SELECT DISTINCT winner_name, winner_photo FROM winner WHERE winner_name!=''";
             $show_winner = mysqli_query($connection,$query);
             while($row=mysqli_fetch_assoc($show_winner))
             {
                 $winner_name = $row['winner_name'];
                 $winner_photo = $row['winner_photo'];
                
             
             ?>
          <div class="col-sm-6 col-md-6">
                    <div class="thumbnail">
                    <img id="image" class="img-responsive" src="images/<?php echo $winner_photo;?>" alt="" >
                      <p><?php echo $winner_name?></p>
           
              
          
                
              </div>
            </div>
            <?php } ?>
          </div>

      

        </div>

        <hr>

        <!-- Footer -->
        <?php include "includes/footer.php"; ?>