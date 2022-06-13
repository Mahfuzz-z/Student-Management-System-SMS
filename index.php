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
        <div class="row">
            <div class="col-md-6 col-sm-12 ">
                <h6 class="  text-center py-3  mt-1 text-danger border">Contact us: school@hotmail.com/ +999 000 000</h6>
            </div>
            <div class="col-md-6 col-sm-12 text-right">
            <form action="" method="post" >
                    <button class="mt-1  btn bg-primary  btn-lg border py-2 px-4 text-white" name="login_button">Login</button>
                <button class="mt-1  btn bg-primary  btn-lg border py-2 px-4 text-white" name="signup_button">Signup</button>
                </form>
            </div>

            <?php
            if(isset($_POST['login_button'])){
                header("Location:login.php");
            }
            if(isset($_POST['signup_button'])){
                header("Location:signup.php");
            }
            ?>


        </div>
    <!-- Instutuion name part -->
   <div class="row d-block m-auto">
       <div class=" bg-success text-white py-3 mt-1 text-center">
           <h1>Amar School & College</h1>
       </div>
   </div>
    <!-- Instutuion details part -->
   
    <!-- Join now part -->
    <div class="row m-auto">
        <div class="col-12 my-4 text-center py-2 text-primary border ">
            <h3>Get admission now !</h3>
        </div>
        
    </div>
    <div class="row mb-3">
        <div class="col-12">
            <form action="" method="post" target="">
                <button class="btn btn-dark text-white p-2 btn-block md-5" name="online_admission_button" >Online admission</button>
            </form>
            <?php
            if(isset($_POST['online_admission_button'])){
                Header("Location:online_admission.php");
            }
            ?>
        </div>
    </div>

    <!-- Notice and events -->
    <div class="row">
        <div class="col-sm-12 col-md-6 text-center  my-2">
            <h3 class="bg-info border border-success py-3 rounded" ">Events</h3>
            <div class="border text-left ">
                <ol>
                    <li><a href="#">Annual picnic</a></li>
                    <li><a href="#">Freshment orientatio</a></li>
                    <li><a href="#">Annual picnic</a></li>
                    <li><a href="#">Freshment orientatio</a></li>
                    <li><a href="#">Annual picnic</a></li>
                     <li><a href="#">New Notice</a></li>
                
                </ol>
                
            </div>
        </div>
        <div class="col-sm-12 col-md-6 text-center  my-2">
            <h3 class=" bg-info border border-success py-3 rounded">Notice</h3>
            <div class="border text-left ">
                <ol>
                    <li><a href="https://www.google.com">Holiday for picnix</a></li>
                    <li><a href="#">Participation in orientatio</a></li>
                    <li><a href="https://www.google.com">Holiday for picnix</a></li>
                    <li><a href="#">Participation in orientatio</a></li>
                    <li><a href="https://www.google.com">Holiday for picnix</a></li>
                    <li><a href="#">Participation in orientatio</a></li>
                    <li><a href="https://www.google.com">Holiday for picnix</a></li>
                    <li><a href="#">Old Event</a></li>
                </ol>
                
            </div>
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
