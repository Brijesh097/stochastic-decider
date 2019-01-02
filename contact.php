<?php  include "includes/db.php"; ?>
<?php  include "includes/header.php"; ?>

<!-- Navigation -->
<?php  include "includes/navbar.php"; ?>

<!-- Page Content -->
<div class="container">

  <form action="includes/message.php" method="post">
   <div class="form-group">
<label for="name">Name</label>
<div class="input-group">
<div class="input-group-addon">
 <span class="glyphicon glyphicon-user"></span>
 </div>
  <input type="text" name="name" class="form-control"  style="width:300px;" placeholder="Enter your Name">
</div>
</div>
<div class="form-group">
<label for="name">Email</label>
<div class="input-group">
<div class="input-group-addon">
  <span class="glyphicon glyphicon-envelope"></span>
  </div>
  <input type="email"  name="email" class="form-control"  placeholder="Email" style="width:300px;">
</div>
</div>
<div class="form-group">
    <label for="name">Message</label>
    <div class="input-group">
     <div class="input-group-addon">
  <span><i class="fa fa-comment"></i></span>
  </div>
        <textarea class="form-control" name="message" style="width:300px;" rows="4"></textarea>
    </div>
</div>
<div class="form-group">
<button type="submit" name="submit" id="sub" class="btn btn-warning btn-lg">Submit</button>
    </div>
 </form>
        </div> <!-- /.container -->
    </section>

    <br><br>
    <hr id="hr-style">

    <!-- Footer -->
    <?php include "includes/footer.php";?>
