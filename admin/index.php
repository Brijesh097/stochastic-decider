<?php include 'includes/admin_header.php'?>

    <!--INSERT DATE-->
<?php
if(isset($_POST['set'])){
    $month = $_POST['month'];
    $date = $_POST['date'];
    $year = $_POST['year'];
    
    $query="INSERT INTO timer(month,date,year)VALUE('$month','$date','$year')";
    $insert_date = mysqli_query($connection,$query);
}   ?>


    <div id="wrapper">

        <!-- Navigation -->
       <?php include 'includes/admin_navigation.php'?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-6">
                        <h1 class="page-header">
                            Online Lucky Draw
                            <small>Admin-panel</small>
                        </h1>
                     
                    </div>
                    <div class="col-lg-6">
                        <form action="../admin/index.php" method="post">
                           <label for="month">Month</label>
                            <input type="text" name="month">
                             <label for="date">Date</label>
                           <input type="number" name="date" max="31" min="1">
                             <label for="year">Year</label>
                            <input type="number" name="year" max="2020" min="2018">
                            <input type="submit" value="Set" class="btn btn-info" name="set">
                        </form>
                    </div>
                </div>
                
                <!-- /.row -->
       
                <!-- /.row -->
                
<div class="row">
    <div class="col-lg-4 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-file-text fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                    
                    <?php 
                        
                        $query = "SELECT * FROM member";
                        $select_all_user = mysqli_query($connection,$query);
                        $user_count = mysqli_num_rows($select_all_user);

                        echo " <div class='huge'>{$user_count}</div>";
                        ?>
                 
                        <div>Users</div>
                    </div>
                </div>
            </div>
            <a href="member.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-4 col-md-6">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-comments fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                     <?php 
                        
                        $query = "SELECT * FROM prize";
                        $select_all_prize = mysqli_query($connection,$query);
                        $prize_count = mysqli_num_rows($select_all_prize);

                        echo " <div class='huge'>{$prize_count}</div>";
                        ?>
                    
                      <div>Prize</div>
                    </div>
                </div>
            </div>
            <a href="prize.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-4 col-md-6">
        <div class="panel panel-yellow">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-user fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                  <?php 
                        
                        $query = "SELECT * FROM winner";
                        $select_all_winner = mysqli_query($connection,$query);
                        $winner_count = mysqli_num_rows($select_all_winner);

                        echo " <div class='huge'>{$winner_count}</div>";
                        ?>
                        <div> Winner</div>
                    </div>
                </div>
            </div>
            <a href="winner.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
   
</div>
                <!-- /.row -->
                
              
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
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->
    
    
    
    
    </div>
    <!-- /#wrapper -->
<?php include 'includes/admin_footer.php'?>