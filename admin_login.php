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
                        <h1><i class="fa fa-fw fa-edit"></i> Admin Login</h1>
                        <hr id="hr-style">
                        <form role="form" action="admin_login.php" method="post" id="login-form" autocomplete="on">

                        <?php 

                            if (isset($_POST['login'])) {

                                $username = mysqli_real_escape_string($connection, $_POST['username']);
                                $password = mysqli_real_escape_string($connection, $_POST['password']);

                                $query = "SELECT * FROM users WHERE username = '$username'";
                                $show_user_info = mysqli_query($connection, $query);
                                if (!$show_user_info) {
                                    die("Sorry! Query failed. " . mysqli_error($connection));
                                }

                                while ($row = mysqli_fetch_assoc($show_user_info)) {
                                    
                                    $db_user_id         =  $row['user_id'];
                                    $db_username        =  $row['username'];
                                    $db_user_firstname  =  $row['user_firstname'];
                                    $db_user_lastname   =  $row['user_lastname'];
                                    $db_user_password   =  $row['user_password'];
                                    $db_user_role       =  $row['user_role'];

                                }

                                // Decrypting password.
                                $password = crypt($password, $db_user_password);

                                if ($username === $db_username && $password === $db_user_password && $db_user_role == 'Admin') {

                                    $_SESSION['username']   =  $db_username;
                                    $_SESSION['firstname']  =  $db_user_firstname;
                                    $_SESSION['lastname']   =  $db_user_lastname;
                                    $_SESSION['user_role']  =  $db_user_role;

                                    header("Location: admin");

                                } else {

                                    echo "<div class='text-center alert alert-danger' role='alert'>
                                                <b>Huh!</b> &nbsp;Sure you're an admin?
                                          </div>";

                                }

                            }

                        ?>

                            <div class="input-group" style="margin-top: 15px;">
                                <input type="text" name="username" placeholder="Enter username" class="form-control" required>
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <span class="glyphicon glyphicon-user"></span>
                                    </button>
                                </span>
                            </div>
                            <div class="input-group" style="margin-top: 15px;">
                                <input type="password" name="password" placeholder="Enter password" class="form-control" required>
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <span class="glyphicon glyphicon-lock"></span>
                                    </button>
                                </span>
                            </div>
                            <hr id="hr-style">
                            <div style="margin-top: 15px;">
                                <button class="btn btn-primary btn-lg btn-block" name="login" type="submit">
                                    Login
                                </button>
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