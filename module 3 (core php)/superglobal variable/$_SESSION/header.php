<?php
session_start();
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

    <?php

     if(isset($_SESSION["email"]))
    { 
    ?>
    <a href="logout.php"><button type="button" class="btn btn-sm btn-danger p-2" id="log-btn" onclick="return confirm('Are you sure to Logout ?')">Logout</button></a>
     
    <?php 
    }
    else 
    {
    ?>
  <button type="button" class="btn btn-sm btn-dark p-2" id="log-btn" data-bs-toggle="modal" data-bs-target="#login-load">Login</button>
     
     <?php 
    }
    ?>   
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

