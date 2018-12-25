<?php include 'includes/admin_header.php';?>

<?php 
if(isset($_GET['delete']))
{   if($_SESSION['user_role']=="admin"){
    $prize_delete_id = $_GET['delete'];
    $query = "DELETE FROM prize WHERE prize_id = {$prize_delete_id}";
    $delete_prize = mysqli_query($connection,$query);
         header("Location: prize.php"); 
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
                            Prize
                            <small>For This Week</small>
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
                  <th>IMAGE</th>
                 
                  <th>DELETE</th>
              </thead>
              <tbody>
               <?php 

								$query = "SELECT * FROM prize";
				                $show_data_from_prize = mysqli_query($connection, $query);

				                while ($row = mysqli_fetch_assoc($show_data_from_prize)) {
				                    
				                    $prize_id  	=  $row['prize_id'];
				                    $prize_name  	=  $row['prize_text'];
				                    $prize_image  	=  $row['prize_image'];
				                   

				                    echo "<tr>";
				                    echo "<td>$prize_id</td>";
				                    echo "<td>$prize_name</td>";
				                    echo "<td align='center'><img src=\"images/$prize_image\" width='100' ></td>";
				                    

				              

				                 
				                   
				                    echo "<td><a href='prize.php?delete=$prize_id' id='text-link'>Delete</a>";
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














<?php include 'includes/admin_footer.php'?>