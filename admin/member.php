<?php include 'includes/admin_header.php';?>

<?php 
if(isset($_GET['Delete']))
{   if($_SESSION['user_role']=="admin"){
    $member_delete_id = $_GET['Delete'];
    $query = "DELETE FROM users WHERE id = {$member_delete_id}";
    $delete_member = mysqli_query($connection,$query);
         header("Location: member.php"); 
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
                            Members
                            <small>Details</small>
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
                  <th>CONTACT</th>
                  
                  <th>PROFILE PHOTO</th>
                  <th>DELETE</th>
              </thead>
              <tbody>
               <?php 

								$query = "SELECT * FROM member";
				                $show_data_from_member = mysqli_query($connection, $query);

				                while ($row = mysqli_fetch_assoc($show_data_from_member)) {
				                    
				                    $member_id  	=  $row['id'];
				                    $member_name  	=  $row['name'];
				                    $member_email  	=  $row['email'];
				                    $member_contact  	=  $row['contact'];
				                   
				                    $member_photo  	=  $row['profile_photo'];
				                   

				                    echo "<tr>";
				                    echo "<td>$member_id</td>";
				                    echo "<td>$member_name</td>";
				                    echo "<td>$member_email</td>";
				                    echo "<td>$member_contact</td>";
				                    
				                    echo "<td align='center'><img src=\"../images/$member_photo\" width='100' ></td>";
         
				                    echo "<td><a href='member.php?Delete=$member_id' id='text-link'>Delete</a>";
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