
<?php include "db.php"; ?>
<?php include "header.php"; ?>



<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];

    $email = $_POST['email'];

    $message = $_POST['message'];

   $name = mysqli_real_escape_string($connection, $name);
   $email = mysqli_real_escape_string($connection, $email);
   $message = mysqli_real_escape_string($connection, $message);

     $query = "INSERT INTO message(name,email,message) VALUES ('$name', '$email', '$message')";

    $result = mysqli_query($connection, $query);

    if(!$result){
        die('Query FAILED' . mysqli_error($connection));
    }
    else{
       header('Location: ../index.php');
    }
}
    ?>
