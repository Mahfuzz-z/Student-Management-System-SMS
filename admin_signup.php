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
                <div id="admin_signup" class=" ">
                    <h3 class="bg-success text-center text-white p-4 mb-5 font-weight-bolder">Admin Sign Up</h3>
                    <form action="adminProcess.php" method="post" >
                       <div class="row">
                           <div class="col-6">
                            <label for="sign_up_admin_first_name">Enter your first name :</label>
                            <input type="text" name="fname" class="form-control form-control-sm p-3 mb-3" id="sign_up_admin_first_name" placeholder="First name" required/>
                           </div>
                           <div class="col-6">
                            <label for="sign_up_admin_last_name">Enter your last name :</label>
                            <input type="text" name="lname" class="form-control form-control-sm p-3 mb-3" id="sign_up_admin_last_name" placeholder="Last name" required/>
                           </div>
        
                            </div>
                           
                            <label for="sign_up_admin_email">Enter your email:</label>
                            <input type="email" name="email" class="form-control form-control-sm p-3 mb-3" id="sign_up_admin_email" placeholder="Enter your email" required/>
        
                            
        
                            <div class="row">
                                <div class="col-6">
                                    <label for="sign_up_admin_password">Enter your password :</label>
                                    <input type="password" name="password"  id="sign_up_admin_password" class="form-control form-control-sm p-3 mb-3" placeholder="Password" required/>
                                </div>
                                <div class="col-6">
                                    <label for="sign_up_admin_password_again">Re-enter your password :</label>
                                    <input type="password" name="password2" id="sign_up_admin_password_again" class="form-control form-control-sm p-3 mb-3" placeholder="Enter same assword" required/>
                                </div>
             
                                 </div>
        
                                 <div class="form-group">
                                    <label for="gender">Gender :</label>
                                    <select class="form-control" id="gender" name= "gender">
                                       <option disabled>Select here..</option>
                                       <option value="male">Male</option>
                                       <option value="female">Female</option>
                                       <option  value="others">Otheres</option>     
                                    </select>
                                 </div>
                            <button type="submit" name="submit" class=" btn btn-block my-3 bg-dark font-weight-bold  px-5  py-3 text-white ">Sign up</button>
                            <p>Already have account?  <a href="admin_login.php">Log in</a></p>
                    </form>
                 </div>

            </div>
                </div>


                 
         
         <!-- Ends of Toogleable dynamic tab -->
      </div>
   
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   </body>
</html>
