<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title> register form </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
    crossorigin="anonymous"></script>

    <script src="main.js"></script>

</head>

<body>
<?php 
require_once("header.php");
require_once("navbar.php");
require_once("login_logic.php");
?>

<!--register form hear-->
<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-5 bg-primary">
            <h1 class="text-white p-3"> CREATE A NEW ACCOUNT</h1>
            <p class="text-white p-2"> GET ACCESS TO YOUR ORDERS, WISHLIST AND RECOMMENDATIONS, SO CREATE YOUR ACCOUNT IN FLIPKART</p>
            <p> <img src="image/login.jpg" class="img-fluid"></p>
        </div>
        <div class="col-md-7">
            <form method="post" class="p-5">
                <div class="form-group mt-1 p-2">
                    <input type="text" name="Email" placeholder="Enter Email/mobile number" required class="form-control email">
                </div>
                <div class="form-group mt-1 p-2">
                    <input type="password" name="pass" placeholder="Enter Password" required class="form-control password">
                </div>
                <div class="form-group mt-1 p-2">
                    <input type="confirm password" name="cpass" placeholder="Enter Confirm password" required class="form-control password">
                </div>
                <div class="form-group mt-1 p-2">
                    <input type="file" name="image" placeholder="upload image" required class="form-control image">
                </div>
                <div class="form-group mt-1 p-2">
                    <textarea name="address" placeholder="Enter Address" required class="form-control address"></textarea>
                </div>
                <div class="form-group mt-1 p-2">
                    <select name="state" placeholder="Enter Your State" required class="form-control state">
                        <option value="">-select state-</option>
                        <option value="">GUJRAT</option>
                    </select>
                    </div>
                <div class="form-group mt-1 p-2">    
                    <select name="city" placeholder="Enter Your City" required class="form-control state">
                        <option value="">-select City-</option>
                        <option value="">RAJKOT</option>
                    </select>
                    </div>
                    <div class="form-group mt-1 p-2">
                        <input type="text" name="mobile" placeholder="Enter Your Mobile number" required class="form-control number">
                    </div> 
                    <div class="form-group mt-3 p-2">
                        <input type="submit" name="register" id="btn-log-register" class="btn btn-sm" value="Register">
                        <input type="Reset" name="Reset" id="btn-log-reset" class="btn btn-sm" value="Reset">
                    </div>
                    <div class="form-group mt-1 p-2">
                        <p>Already have an account <a href="#" data-bs-toggle="modal" data-bs-target="#login-load"> Create login here ? </a> </p>
                    </div>
            </form>
        </div>
    </div>
</div>    

<!--footer here-->
<div class="footer"></div>

<!--modal create hear-->

<div class="modal fade" id="login-load" role="dialog">
     <div class="modal-dialog">
        <div class="modal-content">
            <div class="row">
                <div class="col-md-5 bg-primary">
                    <h1 class="text-white p-3">LOGIN</h1>
                    <p class="text-white p-2"> GET ACCESS TO YOUR ORDERS, WISHLIST AND RECOMMENDATIONS, SO CREATE YOUR ACCOUNT IN FLIPKART </p>
                    <p><img src="image/login.jpg" class="img-fluid"> </p>
                </div>
                <div class="col-md-7">
                    <form method="post" class="p-5">
                        <div class="form-group mt-5 p-2">
                            <input type="text" name="email" placeholder="Enter Email/mobile number" required class="form-control email">
                        </div>
                        <div class="form-group mt-1 p-2">
                            <input type="password" name="pass" placeholder="Enter Password" required class="form-control password">
                            <p class="float-end mt-3"><a href="#">Forget password ?</a> </p>
                        </div>
                        <div class="form-group mt-5 p-2">
                            <p> By continuing,you agree to Flipkart's <a href="#">Terms of use and Privacy Policy. </a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</div>
</div>
</body>
</html>