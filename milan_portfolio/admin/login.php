<?php 
$mainurl="http://localhost/php6pmTTS/milan_portfolio/aaaa/";
?>
<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
<!-- Template Main CSS File -->
<link href="assets/css/style.css" rel="stylesheet">
<link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
<link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
<link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

<!-- ======= Breadcrumbs ======= -->
<section class="breadcrumbs">
  <div class="container">
    <div class="d-flex justify-content-between align-items-center">
      <h2>Admin Login Here</h2>
      <!-- <ol>
        <li><a href="index.html">Home</a></li>
        <li>Admin Login</li>
      </ol> -->
    </div>
</section><!-- End Breadcrumbs -->

<section class="inner-page">
  <div class="container">

    <div class="row">

      <div class="col-lg-8 mt-5">
        <form  method="post" role="form">

          <div class="form-group col-md-9">
            <label for="name">Your Email</label>
            <input type="email" class="form-control" name="email" id="email" required>
          </div><br>

          <div class="form-group col-md-9">
            <label for="name">Password</label>
            <input type="password" class="form-control" name="pass" id="subject" required>
          </div><br>
          <div class="form-group col-md-9 mt-2">
            <button type="submit" name="log" class="btn btn-lg btn-warning">Sign In</button> &nbsp;
            <a href="<?php echo $mainurl;?>admin-forgetpassword">Forget Password ?</a>

          </div>
        </form>
      </div>


      <div class="col-lg-4 mt-6">

        <img src="assets/img/user.gif" class="img-fluid">
      </div>

    </div>

  </div>

  </div>
</section>

</main><!-- End #main -->


<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/typed.js/typed.min.js"></script>
<script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>