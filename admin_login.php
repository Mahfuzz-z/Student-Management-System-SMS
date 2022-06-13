

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
   <div class="mt-3">
   <div id="admin_form" class="">
                  <h3 class="bg-success text-center text-white p-4 md-3 font-weight-bolder">Admin Login</h3>
                  <form action="adminProcess.php" method="POST" >
                     
                     <label for="adminemail">Enter your email:</label>
                     <input type="adminemail" name="email" class="form-control form-control-lg p-3 mb-3" id="adminemail" placeholder="Email" required>
                     <label for="adminpassword">Enter your password:</label>
                     <input type="password" name="password" class="form-control form-control-lg p-3 mb-3" id="adminpassword" placeholder="Password" required>
                     <button type="submit" name="login" class=" d-block m-auto bg-dark font-weight-bold px-5 text-right py-3 text-white ">Log in</button>
                     <p>Not any account? <a href="admin_signup.php">Sign Up</a></p>
                  </form>
               </div>

         </div>

   
   </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>

