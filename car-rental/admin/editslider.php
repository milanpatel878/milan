<?php
$mainurl="http://localhost/php6pmTTS/car-rental/admin/";
$baseurl="http://localhost/php6pmTTS/car-rental/admin/assets/";
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
<!-- /banner-bottom -->
	<div class="banner-bottom">
				<!--//screen-gallery-->
				 <div class="wthree_title_agile">
						        <h3>Most <span>Popular</span>  Cars</h3>
				</div>
						 <p class="sub_para">It’s time to drive</p>
						  <div class="inner_w3l_agile_grids">
						<div class="sreen-gallery-cursual">
							
						<form method="post" enctype="multipart/form-data">
						<div class="container">
						<div class="col-md-4">
						<label for="name" class="text-success">Edit photo </label><br>
						<input type="file" name="img1" class="img-responsive" required><?php echo $sliderdata[0]["img1"]; ?><br>
						<label for="name" class="text-success">Edit price </label><br>
						<input type="text" name="pr1" placeholder="enter price" required><?php echo $sliderdata[0]["pr1"]; ?><br>
						<label for="name" class="text-success">Edit photo </label><br>
						<input type="file" name="img2" class="img-responsive" required><?php echo $sliderdata[0]["img2"]; ?><br>
						<label for="name" class="text-success">Edit price </label><br>
						<input type="text" name="pr2" placeholder="enter price" required><?php echo $sliderdata[0]["pr2"]; ?><br>
						<label for="name" class="text-success">Edit photo </label><br>
						<input type="file" name="img3" class="img-responsive" required><?php echo $sliderdata[0]["img3"]; ?><br>
						<label for="name" class="text-success">Edit price </label><br>
						<input type="text" name="pr3" placeholder="enter price" required><?php echo $sliderdata[0]["pr3"]; ?><br>
						<label for="name" class="text-success">Edit photo </label><br>
						<input type="file" name="img4" class="img-responsive" required><?php echo $sliderdata[0]["img4"]; ?><br>
						<label for="name" class="text-success">Edit price </label><br>
						<input type="text" name="pr4" placeholder="enter price" required><?php echo $sliderdata[0]["pr4"]; ?><br>
						</div>
						<div class="col-md-4">
						<label for="name" class="text-success">Edit photo </label><br>
						<input type="file" name="img5" class="img-responsive" required><?php echo $sliderdata[0]["img5"]; ?><br>
						<label for="name" class="text-success">Edit price </label><br>
						<input type="text" name="pr5" placeholder="enter price" required><?php echo $sliderdata[0]["pr5"]; ?><br>
						<label for="name" class="text-success">Edit photo </label><br>
						<input type="file" name="img6" class="img-responsive" required><?php echo $sliderdata[0]["img6"]; ?><br>
						<label for="name" class="text-success">Edit price </label><br>
						<input type="text" name="pr6" placeholder="enter price" required><?php echo $sliderdata[0]["pr6"]; ?><br>
						<label for="name" class="text-success">Edit photo </label><br>
						<input type="file" name="img7" class="img-responsive" required><?php echo $sliderdata[0]["img7"]; ?><br>
						<label for="name" class="text-success">Edit price </label><br>
						<input type="text" name="pr7" placeholder="enter price" required><?php echo $sliderdata[0]["pr7"]; ?><br>
						<label for="name" class="text-success">Edit photo </label><br>
						<input type="file" name="img8" class="img-responsive" required><?php echo $sliderdata[0]["img8"]; ?><br>
						<label for="name" class="text-success">Edit price </label><br>
						<input type="text" name="pr8" placeholder="enter price" required><?php echo $sliderdata[0]["pr8"]; ?><br>
						</div>
						<div class="col-md-4">
						<label for="name" class="text-success">Edit photo </label><br>
						<input type="file" name="img9" class="img-responsive" required><?php echo $sliderdata[0]["img9"]; ?><br>
						<label for="name" class="text-success">Edit price </label><br>
						<input type="text" name="pr9" placeholder="enter price" required><?php echo $sliderdata[0]["pr9"]; ?><br>
						<label for="name" class="text-success">Edit photo </label><br>
						<input type="file" name="img10" class="img-responsive" required><?php echo $sliderdata[0]["img10"]; ?><br>
						<label for="name" class="text-success">Edit price </label><br>
						<input type="text" name="pr10" placeholder="enter price" required><?php echo $sliderdata[0]["pr10"]; ?><br>
						<label for="name" class="text-success">Edit photo </label><br>
						<input type="file" name="img11" class="img-responsive" required><?php echo $sliderdata[0]["img11"]; ?><br>
						<label for="name" class="text-success">Edit price </label><br>
						<input type="text" name="pr11" placeholder="enter price" required><?php echo $sliderdata[0]["pr11"]; ?><br>
						<label for="name" class="text-success">Edit photo </label><br>
						<input type="file" name="img12" class="img-responsive" required><?php echo $sliderdata[0]["img12"]; ?><br>
						<label for="name" class="text-success">Edit price </label><br>
						<input type="text" name="pr12" placeholder="enter price" required><?php echo $sliderdata[0]["pr12"]; ?><br>
						</div>
						</div>
						<!--//screen-gallery-->
						<br><br>
						<center>
					<button type="submit" name="updslider" class="btn btn-success btn-lg">Update Slider Images</button>
					</center>
					<br>
				</form>
 </div>
</div>
</div>
<!-- //banner-bottom -->
