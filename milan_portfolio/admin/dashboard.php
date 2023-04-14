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
                Welcome To : <?php echo $_SESSION["email"];?>
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="<?php echo $mainurl;?>change-password">Chgange Password <i class="bi bi-lock"></i></a></li>
                <li><a class="dropdown-item btn btn-sm btn-danger" href="<?php echo $mainurl;?>?admin-logout" onclick="return confirm('Are you sure to Logout as admin ?')">Logout <i class="bi bi-power"></i></a></li>
                
              </ul>
            </span>
          </h2>
          <p>Admin should dynamic add all content from fill a forms </p>
             
          <div class="col-lg-10 mt-5">

              <div class="row">
                <div class="col-md-3 m-4 bg-success p-4 text-white">
                  <label for="name">Total Users  <span class="bade badge-lg badge-dark bg-dark p-2 rounded-pill">12</span></label>
                </div>

                <div class="col-md-3 m-4 bg-danger p-4 text-white">
                  <label for="name">Total Contacts <span class="bade badge-lg badge-dark bg-dark p-2 rounded-pill">12</span></label>
                </div>

                <div class="col-md-3 m-4 bg-warning p-4 text-white">
                  <label for="name">Resume Upload  <span class="bade badge-lg badge-dark bg-dark p-2 rounded-pill">12</span></label>
                </div>
               
          </div>
        </div>
      </div>



    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
