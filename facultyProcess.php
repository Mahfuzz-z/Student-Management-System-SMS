<?php

include('db.php');

$fname = "";
$lname    = "";
$email    = "";
$gender    = "";
$errors = array();

// registation
if (isset($_POST['submit'])) 
{
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];
    $gender =  $_POST['gender'];


    if (empty($fname)) {
        array_push($errors, "First name is required");
    }
    if (empty($lname)) {
        array_push($errors, "Last name is required");
    }
    if (empty($email)) {
        array_push($errors, "Email is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }
    if ($password != $password2) {
        array_push($errors, "Passwords do not match");
    }
    if (empty($_POST['gender'])) {
        array_push($errors, "Select gender");
    }

    $admin_check_query = "SELECT * FROM faculty WHERE email='$email' LIMIT 1";
    $result = mysqli_query($db, $admin_check_query);
    $user = mysqli_fetch_assoc($result);

    if ($user) {
        if ($user['email'] === $email) {
            array_push($errors, "email already exists");
        }
    }

    if (count($errors) == 0) {
        $password = md5($password);

        $query = "INSERT INTO faculty (fname, lname, email, password ,gender) 
                  VALUES('$fname', '$lname', '$email', '$password','$gender' )";
        if (mysqli_query($db, $query)) {
            //echo "added";
            // $_SESSION['fname'] = $fname;
            // $_SESSION['success'] = "You are now logged in";
            header('location: faculty_login.php');
        } else {
            echo "wrong";
            //header('location: signup.php');
        }
    }
}


//login
session_start();
//login
if (isset($_POST['login'])) {
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
        $query = "SELECT * FROM admin WHERE email='$email' AND password='$password'";
        $results = mysqli_query($db, $query);
        
        if (mysqli_num_rows($results) == 1) {
            //echo "result";
            $_SESSION['email'] = $email;
            $_SESSION['success'] = "You are now logged in";
            header('location: faculty_dashboard.php');
        } else {
            array_push($errors, "Wrong username/password combination");
        }
    }
}
?>
