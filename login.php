

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  
  <div class="container">

   <div class="col-sm-12 ">
      <h1 class="border p-3 bg-success text-center text-white m-5">Log in as</h1>
   </div>

   <div class="col-md-6 col-sm-12 m-auto">
      <form action="" method="post" target="">
                <button class="btn btn-secondary text-white p-2 btn-block md-5" name="stlogin_button" >Student Login</button>
                <button class="btn btn-secondary text-white p-2 btn-block md-5" name="faculty_login_button" >Faculty Login</button>
                <button class="btn btn-secondary text-white p-2 btn-block md-5" name="admin_login_button" >Admin Login</button>
                

            </form>
            <?php
            if(isset($_POST['stlogin_button'])){
                Header("Location:student_login.php");
            }
            if(isset($_POST['faculty_login_button'])){
                Header("Location:faculty_login.php");
            }
            if(isset($_POST['admin_login_button'])){
                Header("Location:admin_login.php");
            }
            ?>
     
            </div>
      
   </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>

