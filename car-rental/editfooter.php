<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

<!-- footer -->
<br>
<div class="newsletter">
<div class="container">
<form method="post" enctype="multipart/form-data">
<div class="col-md-3 footer-grid">
	<h3>About us</h3>
	<label for="name" class="text-success">Edit aboutdetails</label><br>
	<textarea type="text" name="abtdetails" class="form-control" required><?php echo $footerdata[0]["abtdetails"]; ?></textarea>
<div class="w3ls_newsletter_social">
	<ul class="agileits_social_list">
		<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
		<li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
		<li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
		
	</ul>
</div>				
</div>
<div class="col-md-2 footer-grid">
		<h3>Need Help ?</h3>
		<ul>
			
			<li><a class="scroll" href="<?php echo $mainurl; ?>">Home</a></li>
			<li><a class="scroll" href="<?php echo $mainurl; ?>manageaboutus">About</a></li>
			<li><a class="scroll" href="<?php echo $mainurl; ?>manageteam">Team</a></li>
			<li><a class="scroll" href="<?php echo $mainurl; ?>managedeal">Deals</a></li>
			<li><a class="scroll" href="<?php echo $mainurl; ?>managegallary">Gallery</a></li>
		</ul>
	</div>
	<div class="col-md-4 footer-grid">
		<h3>Recently Launched</h3>

		<div class="footer-grid1">
			<div class="footer-grid1-left">
			<label for="name" class="text-success">Edit photo</label><br>
			<input type="file" name="pht1" class="img-responsive" required><?php echo $footerdata[0]["pht1"]; ?>
			</div>
			<div class="footer-grid1-right">
			<label for="name" class="text-success">Edit photo details</label><br>
			<input type="text" name="phtdt1" class="form-control" required><?php echo $footerdata[0]["phtdt1"]; ?>
			</div>
			<div class="clearfix"> </div>
		</div>

		<div class="footer-grid1">
			<div class="footer-grid1-left">
			<label for="name" class="text-success">Edit photo</label><br>
			<input type="file" name="pht2" class="img-responsive" required><?php echo $footerdata[0]["pht2"]; ?></input>
			</div>
			<div class="footer-grid1-right">
			<label for="name" class="text-success">Edit photo details</label><br>
			<input type="text" name="phtdt2" class="form-control" required><?php echo $footerdata[0]["phtdt2"]; ?></input>	
			</div>
			<div class="clearfix"> </div>
		</div>
		
	</div>
	<div class="col-md-3 footer-grid">
		<h3>From Flickr</h3>
		<div class="footer-grid-instagram">
		<label for="name" class="text-success">Edit photo</label><br>
		<input type="file" name="pht3" class="img-responsive" required><?php echo $footerdata[0]["pht3"]; ?></input>
		</div>
		<div class="footer-grid-instagram">
		<label for="name" class="text-success">Edit photo</label><br>
		<input type="file" name="pht4" class="img-responsive" required><?php echo $footerdata[0]["pht4"]; ?></input><br>
		</div>
		<div class="footer-grid-instagram">
		<label for="name" class="text-success">Edit photo</label><br>
		<input type="file" name="pht5" class="img-responsive" required><?php echo $footerdata[0]["pht5"]; ?></input>
		</div>
		<div class="footer-grid-instagram">
		<label for="name" class="text-success">Edit photo</label><br>
		<input type="file" name="pht6" class="img-responsive" required><?php echo $footerdata[0]["pht6"]; ?></input><br>
		</div>
		<div class="clearfix"> </div>
	</div>
	<div class="clearfix"> </div>
	<br>
<center>
	<button type="submit" name="updfooter" class="btn btn-success btn-lg">Update Footer</button>
</center>
</form>
</div>
</div>

<!-- show details -->