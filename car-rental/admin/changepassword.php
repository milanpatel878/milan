<?php 
if(!isset($_SESSION["admin_id"]))
{
  echo "<script>
    window.location='./';
  </script>";
}
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

<link href="<?php echo $baseurl ?>css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo $baseurl ?>css/galleryeffect.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="<?php echo $baseurl ?>css/jquery.flipster.css">
<link rel='stylesheet' href='<?php echo $baseurl ?>css/dscountdown.css' type='text/css' media='all' />
<link href="<?php echo $baseurl ?>css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo $baseurl ?>css/font-awesome.css" rel="stylesheet"> 
<link href="//fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Faster+One" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">


  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container ms-5">
        <div class="section-title">
          <br>
          <h2>Welcome to Admin Dashboard
            <span class="dropdown">
              <button class="btn btn-primary ms-5 dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                Welcome To:<?php echo $_SESSION["email"];?>
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="<?php echo $mainurl;?>change-password">Chgange Password <i class="bi bi-lock"></i></a></li>
                <li><a class="dropdown-item btn btn-sm btn-danger" href="<?php echo $mainurl;?>?admin-logout" onclick="return confirm('Are you sure to Logout as admin ?')">Logout <i class="bi bi-power"></i></a></li>
                
              </ul>
            </span>
          </h2>
          <br>
          <p>Change Your Password </p>
             
          <div class="col-lg-10 mt-5">

          <form  method="post" role="form" class="php-email-form">
              <div class="row">
                
                <div class="form-group col-md-7">
                  <label for="name">Your Old password</label>
                  <input type="password" class="form-control" placeholder="Enter Old password" name="opass" id="email" required>
                </div>

                    
                <div class="form-group col-md-7">
                  <label for="name">Your New password</label>
                  <input type="password" class="form-control" placeholder="Enter New password" name="npass" id="email" required>
                </div>

                    
                <div class="form-group col-md-7">
                  <label for="name">Your Confirm password</label>
                  <input type="password" class="form-control" placeholder="Enter Confirm password" name="cpass" id="email" required>
                </div>


              </div>
           
             
              <div class="form-group mt-3">
             <button type="submit" name="change" class="btn btn-primary btn-lg">Submit!</button></div>
            </form>


        </div>
      </div>



    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  