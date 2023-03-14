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
            <?php
    if(!isset($_SESSION["email"]))
    { 
    ?>
<li class="dropdown"><a class="dropdown-toggle" data-bs-toggle="dropdown" href="#">Account <span
class="bi bi-person"></span></a>
<ul class="dropdown-menu bg-dark">
<li><a href="#">SignUp!</a></li>
<li><a href="#">SignIn!</a></li>
<?php 
    }
    else 
    {
    ?>

<li class="dropdown"><a class="dropdown-toggle" data-bs-toggle="dropdown" href="#">Welcome :<?php echo $_SESSION["email"];?> <span
class="bi bi-person"></span></a>
<ul class="dropdown-menu bg-dark" style="max-width:180px !important">
<li><a href="#">Manage profile!</a></li>
<li><a href="logout.php" onclick="return confirm('Are you sure to Logout ?')">Logout!</a></li>
            
            </ul>
            </li>
  <?php 
    }
    ?>
            <li><a href="#"></a>FEEDBACK</li>
            <li><a href="#"></a>CONTACT US</li>
        </ul>
    </nav>
</div>
