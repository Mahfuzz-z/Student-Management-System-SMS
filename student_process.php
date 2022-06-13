<?php

include('db.php');

$name = "";
$address    = "";
$email    = "";
$class    = "";
$tr = "";
$username    = "";
$password    = "";

$errors = array();

// registation
if (isset($_POST['submit'])) 
{
    $name = $_POST['name'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $class = $_POST['class'];
    $tr = $_POST['tr'];
    $username = $_POST['username'];
    $password = $_POST['password'];


    if (empty($name)) {
        array_push($errors, "First name is required");
    }
    if (empty($address)) {
        array_push($errors, "Address is required");
    }
    if (empty($email)) {
        array_push($errors, "Email is required");
    }
    if (empty($class)) {
        array_push($errors, "Class is required");
    }
    if (empty($tr)) {
        array_push($errors, "Transection id is required");
    }
    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }

    $user_check_query = "SELECT * FROM student WHERE username ='$username' OR email='$email' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if ($user) {
        if ($user['email'] === $email) {
            array_push($errors, "email already exists");
        }
        if ($user['username'] === $username) {
            array_push($errors, "Username already exists");
        }
    }

    if (count($errors) == 0) {
        $password = md5($password);

        $query = "INSERT INTO student (name, address, email, class, tr, username, password) 
                  VALUES('$name', '$address', '$email', '$class', '$tr','$username', '$password')";
        if (mysqli_query($db, $query)) {
            //echo "added";
            // $_SESSION['name$name'] = $name;
            // $_SESSION['success'] = "You are now logged in";
            header('location: login.php');
        } else {
            echo "wrong";
            //header('location: signup.php');
        }
    }
}

session_start();
//login
 if (isset($_POST['login'])) {
     //$username = mysqli_real_escape_string($db, $_POST['username']);
     $email = mysqli_real_escape_string($db, $_POST['email']);
     $password = mysqli_real_escape_string($db, $_POST['password']);

     if (empty($email)) {
        array_push($errors, "Email is required");
    }
    
     if (empty($password)) {
         array_push($errors, "Password is required");
     }

     if (count($errors) == 0) {
         $password = md5($password);
         $query = "SELECT * FROM student WHERE username = '$username' or email = '$email' AND password='$password'";
         $results = mysqli_query($db, $query);

         if (mysqli_num_rows($results) == 0) {
             $_SESSION['email'] = $email;
             $_SESSION['success'] = "You are now logged in";
             echo "In";
            header('location: student_dashboard.php');
         } else {
             array_push($errors, "Wrong username/password combination");
             echo "out";
         }
     }
 }
?>
