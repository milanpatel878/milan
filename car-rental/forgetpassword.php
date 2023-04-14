<?php
$mainurl="http://localhost/php6pmTTS/car-rental/admin/";
$baseurl="http://localhost/php6pmTTS/car-rental/admin/assets/";
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

<br><br><br>
<!-- ======= Breadcrumbs ======= -->
<section class="breadcrumbs">
  <div class="container">
    <div class="d-flex justify-content-between align-items-center">
      <h2>Admin Forget Your Password Here !</h2>

    </div>
</section><!-- End Breadcrumbs -->
<br><br>
<section class="inner-page">
  <div class="container">

    <div class="row">

      <div class="col-lg-8 mt-5">
        <form  method="post" role="form">

          <div class="form-group col-md-9">
            <label for="name">Your Email</label><br><br>
            <input type="email" class="form-control" name="email" id="email" required placeholder="Enter your email">
          </div>
        
          <div class="form-group col-md-9 mt-2">
            <button type="submit" name="admin_frg" class="btn btn-lg btn-primary">Submit</button>
           
          </div>
        </form>
      </div>
    
      <div class="col-lg-4 mt-5">

        <img src="<?php echo $baseurl; ?>/images/user.gif" class="img-fluid">
      </div>
</section>
</main><!-- End #main -->