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
if(isset($_POST["login"]))
{
    $em=$_POST["email"];
    $pass=$_POST["pass"];
    if($em=='kishan@gmail.com' && $pass=='kishan12')
    {
        // location is not passed message
        echo "<h1 style='color:green'>You are Logged in Succefully</h1>";
        header("location:welcome.php");
    }
    else 
    {
        echo "<h1 style='color:red'>Your email and password are wrong try again</h1>";
        header("location:register.php");
    }
}
?>

    <!--header start hear-->

    <div class="container-fluid header p-4">
    <div class="row">
    <div class="col-md-3">
    <b> CONTACT US : <span class="bi bi-telephone"></span> (+91) 8980110081 </b>
    </div>
    <div class="col-md-5">
        <b> <input type="text" name="search" placeholder="Search for products,brands and more..." class="form-control"> </b>
        </div>
        <div class="col-md-4">
            <b>
                <button type="button" class="btn btn-sm btn-dark p-2" id="log-btn" data-bs-toggle="modal" data-bs-target="#login-load"> LOGIN </button>
                <i class="bi bi-facebook"></i>
                <i class="bi bi-instagram"></i>
                <i class="bi bi-whatsapp"></i>
                <i class="bi bi-twitter"></i>
                <i class="bi bi-github"></i>
                <i class="bi bi-cart"></i>CART<span class="badge badge-lg bg-warning">0</span>
            </b>

        </div>
    </div>
    </div>


    <div class="container-fluid bg-primary text-white p-1">
        <nav class="navbar">
            <a href="#" class="navbar-brand text-white"><b> FLIPKART </b></a>
            <ul>
                <li><a href="#"><span class="bi bi-house"></span> HOME</a></li>
                <li><a href="#"></a>ABOUT US</li>
                <li><a href="#"></a>JWELLRY</li>
                <li><a href="#"></a>ELECTRONICS</li>
                <li><a href="#"></a>TOYS</li>
                <li><a href="#"></a>CLOTHES</li>
                <li><a href="#"></a>WATCHES</li>
                <li class="dropdown"><a class="dropdown-toggle" data-bs-toggle="dropdown" href="#"> ACCOUNT<span class="bi bi-person"></span></a>
                <ul class="dropdown-menu bg-primary">
                    <li><a href="#">SIGN UP!</a></li>
                    <li><a href="#">SIGN IN!</a></li>    
                </ul>
                </li>
                <li><a href="#"></a>FEEDBACK</li>
                <li><a href="#"></a>CONTACT US</li>
            </ul>
        </nav>
    </div>

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