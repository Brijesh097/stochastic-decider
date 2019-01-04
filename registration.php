<?php  include "includes/db.php"; ?>
<?php  include "includes/header.php"; ?>

<!-- Navigation -->
<?php  include "includes/navbar.php"; ?>

<!-- Page Content -->
<div class="container">
    
    <section id="login">
        <div class="container">
            <div class="row">
                <br>
                <hr id="hr-style">
                <div class="col-xs-6 col-xs-offset-3">

                    <div class="form-wrap">
                        <h1><i class="fa fa-fw fa-edit"></i> Register</h1>
                        <hr id="hr-style">
                        <form action="includes/register.php" method="post" class="form-horizontal" enctype="multipart/form-data">
       
       
        <div class="form-group">
    <label for="name">Name</label>
    <div class="input-group">
    <div class="input-group-addon">
     <span class="glyphicon glyphicon-user"></span>
     </div>
      <input type="text" name="name" class="form-control"  style="width:300px;" placeholder="Enter your Name" required>
    </div>
    </div>
    <div class="form-group">
    <label for="name">Email</label>
    <div class="input-group">
    <div class="input-group-addon">
      <span class="glyphicon glyphicon-envelope"></span>
      </div>
      <input type="email"  name="email" class="form-control"  placeholder="Email" style="width:300px;" required>
    </div>
  </div>
  <div class="form-group">
    <label for="name">Contact</label>
    <div class="input-group">
    <div class="input-group-addon">
    
     <span><i class="fa fa-phone cust"></i></span>
     </div>
      <input type="text" name="contact" class="form-control"  placeholder="Contact" style="width:300px;" required>
    </div>
  </div>
  <div class="form-group">
    <label for="name">Password</label>
    <div class="input-group">
     <div class="input-group-addon">
      <span><i class="fa fa-key"></i></span>
      </div>
      <input type="password" name="password" class="form-control"  placeholder="Password" style="width:300px;" required>
    </div>
  </div>

    <!-- Payment section -->
    <div class="form-group">
        <label for="pay">Pay ₹100</label>
        <a href="#">Click here</a>
    </div>
    <!-- ./End of payment section -->

  <div class="form-group">
    <label for="name">Photo</label>
    <div class="input-group">
     <div class="input-group-addon">
      <span><i class="fa fa-camera"></i></span>
      </div>
      <input type="file" name="image" class="form-control"   style="width:300px;">
    </div>
  </div>
  <div class="form-group">
 <button type="submit" name="register" id="sub1" class="btn btn-warning btn-lg">Register</button>
        </div>
    </form>
                     
                    </div>

                </div> <!-- /.col-xs-12 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </section>

    <br><br>
    <hr id="hr-style">

    <!-- Footer -->
    <?php include "includes/footer.php";?>