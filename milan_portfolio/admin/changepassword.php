<?php 
if(!isset($_SESSION["admin_id"]))
{
  echo "<script>
    window.location='./';
  </script>";
}
?>
  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container ms-5">
        <div class="section-title">
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

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
