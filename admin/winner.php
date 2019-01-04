<?php include 'includes/admin_header.php';?>

<?php 
if(isset($_GET['delete']))
{   if($_SESSION['user_role']=="admin"){
    $delete_id = $_GET['delete'];
    $query = "DELETE FROM winner WHERE winner_id = {$delete_id}";
    $delete_winner = mysqli_query($connection,$query);
    if($delete_winner)
    {
       header('location:winner.php');
    }
    else{
        die("Query Failed ".mysqli_error($connection));
    }
}
}   
?>



<div id="wrapper">

        <!-- Navigation -->
       
<?php include 'includes/admin_navigation.php';?>
        <div id="page-wrapper">

            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Winners
                            <small>Till Today</small>
                        </h1>
                     
                    </div>
                </div>
                <!-- /.row -->
       
      <div class="table-responsive">
         <center>
          <table class="table table-hover table-bordered">
              <thead>
                  <th>ID</th>
                  <th>NAME</th>
                  <th>EMAIL</th>
                
                  <th>DELETE</th>
              </thead>
              <tbody>
               <?php 

								$query ="SELECT DISTINCT winner_id, winner_name, winner_email, winner_photo FROM winner WHERE winner_name!=''";
				                $show_data_from_prize = mysqli_query($connection, $query);

				                while ($row = mysqli_fetch_assoc($show_data_from_prize)) {
				                    
				                    $winner_id  	=  $row['winner_id'];
				                    $winner_name  	=  $row['winner_name'];
				                    $winner_email  	=  $row['winner_email'];
				                    $winner_photo 	=  $row['winner_photo'];
                                  
				                    echo "<tr>";
				                    echo "<td>$winner_id</td>";
				                    echo "<td>$winner_name</td>";
				                    echo "<td>$winner_email</td>";
				                    echo "<td>$winner_photo</td>";
				             
				                    

				              

				                 
				                   
				                    echo "<td><a href='winner.php?delete=$winner_id' id='text-link'>Delete</a>";
				                    echo "</tr>";

				                }

							?>

              </tbody>
          </table>
          </center>
      </div>
                
 
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->
    
    
    
    
    </div>
    <!-- /#wrapper -->





<?php include 'includes/admin_footer.php';?>