<?php
$mainurl="http://localhost/php6pmTTS/car-rental/admin/";
$baseurl="http://localhost/php6pmTTS/car-rental/admin/assets/";
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

<!-- about -->
<br>
<div class="about" id="about">
		<div class="container">
		 <div class="wthree_title_agile two">
						        <h3>About <span>Us</span></h3>
				</div>
				<p class="sub_para two">It’s time to drive</p>
		 <div class="inner_w3l_agile_grids">
			<center>
            <div class="col about-left-w3layouts bg-light">
				<h6 class="sub bg-warning">WELCOME TO OUR Rental Car</h6>
				<form method="post" enctype="multipart/form-data">
                <input type="text" name="pg1" placeholder="write a about content" required><?php echo $eddata[0]["pg1"]; ?> </input>
                <br><br><br>
                <input type="text" name="pg2" placeholder="write a about content" required><?php echo $eddata[0]["pg2"]; ?></input>
				<br><br><br>
				<input type="file" name="video" required><?php echo $eddata[0]["video"]; ?></input>
			<br>
				<button type="submit" name="updabout" class="btn btn-success btn-lg">Update About</button>
			<br><br>
            </center>
			</div>
		</form>
			<div class="clearfix"></div>
		</div>
	</div>
 </div>

 <!--about-section-->
