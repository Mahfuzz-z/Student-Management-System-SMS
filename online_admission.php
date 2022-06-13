<!doctype html>
<html lang="en">

<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <title>Student Admission</title>
</head>

<body>
   <!-- Container start -->
   <div class="container ">
      <div class="colo bg-white pb-5">
         <!-- Main form div start -->
         <div class="main_div_admission_form   col-sm-12 my_class ">
            <div class="admission_form p-4 border bg-dark text-white rounded">
               <h3 class="text-uppercase">Admission Form</h3>
               <p class="text-muted">Fill the form carefully</p>
            </div>
            <form action="student_process.php" method="post" class="my-4">

               <label for="firstname">Enter your name :</label>
               <input type="text" name="name" class="form-control form-control-sm p-3 mb-3" id="" placeholder="First name" required />

               <label for="currentaddress">Address:</label>
               <input type="text" name="address" class="form-control form-control-sm p-3 mb-3" id="" placeholder="Enter your current address" required />

               <label for="email">Enter your email:</label>
               <input type="email" name="email" class="form-control form-control-sm p-3 mb-3" id="" placeholder="Enter your email" required />
               <div class="form-row">
                  <div class="form-group col-md-6">
                     <label for="classsemester">Select class :</label>
                     <select class="form-control" id="class" , name="class">
                        <option>Select here..</option>
                        <option value="5">Class-5</option>
                        <option value="6">Class-6</option>
                        <option value="7">Ckass-7</option>
                        <option value="8">Class-8</option>
                        <option value="9">Class-9</option>
                        <option value="10">Class-10</option>
                     </select>
                  </div>
                  <div class="col-6">
                     <label for="transcetionid">Enter your transection id:</label>
                     <input type="text" name="tr" class="form-control form-control-sm p-3 mb-3" id="" placeholder="Enter transection id from payment gateway" required />
                  </div>

               </div>

               <div class="row">
                  <div class="col-6">
                     <label for="Username">Username</label>
                     <input type="text" name="username" class="form-control form-control-sm p-3 mb-3" id="" placeholder="Enter username" required />
                  </div>
                  <div class="col-6">
                     <label for="Password">Password</label>
                     <input type="password" name="password" class="form-control form-control-sm p-3 mb-3" id="" placeholder="Enter password" required />
                  </div>

               </div>
               <div class="button_div md-5">
                  <button type="submit" name="submit" class=" btn btn-block mt-5  bg-dark font-weight-bold  px-5  py-3 text-white ">Submit</button>
               </div>
               <p>
                  Already have account? <a href="student_login.php">Sign in</a>
               </p>
            </form>
            <!-- Main form div end -->
         </div>
      </div>
      <!-- Conatiner end -->
   </div>
   <!-- Optional JavaScript -->
   <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
