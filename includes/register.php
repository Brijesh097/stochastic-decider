<?php include "db.php"; ?>
<?php include "header.php"; ?>

<?php

if(isset($_POST['register'])) {

    $image      =  $_FILES['image']['name'];
    $image_temp =  $_FILES['image']['tmp_name'];
    move_uploaded_file($image_temp, "../images/$image");

    $name       =  $_POST['name'];
    $email      =  $_POST['email'];
    $password   =  $_POST['password'];
    $contact    =  $_POST['contact'];
   
    $user_role  =  "subscriber";

    if(!empty($name) && !empty($email) && !empty($password)) {

        $name      =  mysqli_real_escape_string($connection,$name);
        $email     =  mysqli_real_escape_string($connection,$email);
        $password  =  mysqli_real_escape_string($connection,$password);
        $contact   =  mysqli_real_escape_string($connection,$contact);
      
        $password  =  password_hash($password, PASSWORD_BCRYPT, array('cost' => 12));

        $query = "INSERT INTO member (name, email, contact, password, profile_photo, user_role) ";
        $query .= "VALUES('{$name}','{$email}','{$contact}','{$password}','{$image}', '{$user_role}')";

        $registration_user_query = mysqli_query($connection,$query);
        if(!$registration_user_query) {

            die("Query Failed! " . mysqli_error($connection));
            mysqli_error($connection);

        } else {
        
          echo "<script>alert('Registration done!');
           window.open('../index.php','_self');</script>";
//         header('Location: ../index.php');
           

        }
        
    } else {

        $message = "Fields cannot be empty!";

    }

} else {

    $message = "";

}

?>