<?php
$mainurl="http://localhost/php6pmTTS/car-rental/admin/";
$baseurl="http://localhost/php6pmTTS/car-rental/admin/assets/";
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
<!-- //gallery -->
<div class="gallery" id="gallery">
<!-- gallery -->
	<div class="container">
			<div class="wthree_title_agile">
				<h3> Our <span>Latest</span>  Cars </h3>
			</div>
			<form method="post" enctype="multipart/form-data">

			<input type="file" name="pc1" class="img-responsive" required><?php echo $eddata[0]["pc1"]; ?></input>
			<input type="text" name="dtl1" class="form-control" required><?php echo $eddata[0]["dtl1"]; ?></input>

			<input type="file" name="pc2" class="img-responsive" required><?php echo $eddata[0]["pc2"]; ?></input>
			<input type="text" name="dtl2" class="form-control" required><?php echo $eddata[0]["dtl2"]; ?></input>

			<input type="file" name="pc3" class="img-responsive" required><?php echo $eddata[0]["pc3"]; ?></input>
			<input type="text" name="dtl3" class="form-control" required><?php echo $eddata[0]["dtl3"]; ?></input>

			<input type="file" name="pc4" class="img-responsive" required><?php echo $eddata[0]["pc4"]; ?></input>
			<input type="text" name="dtl4" class="form-control" required><?php echo $eddata[0]["dtl4"]; ?></input>

			<input type="file" name="pc5" class="img-responsive" required><?php echo $eddata[0]["pc5"]; ?></input>
			<input type="text" name="dtl5" class="form-control" required><?php echo $eddata[0]["dtl5"]; ?></input>

			<input type="file" name="pc6" class="img-responsive" required><?php echo $eddata[0]["pc6"]; ?></input>
			<input type="text" name="dtl6" class="form-control" required><?php echo $eddata[0]["dtl6"]; ?></input>

			<input type="file" name="pc7" class="img-responsive" required><?php echo $eddata[0]["pc7"]; ?></input>
			<input type="text" name="dtl7" class="form-control" required><?php echo $eddata[0]["dtl7"]; ?></input>

			<input type="file" name="pc8" class="img-responsive" required><?php echo $eddata[0]["pc8"]; ?></input>
			<input type="text" name="dtl8" class="form-control" required><?php echo $eddata[0]["dtl8"]; ?></input>
			<br>
			<center>
				<button type="submit" name="updgallary" class="btn btn-success btn-lg">Update gallary images</button>
			</center>
			<br>	
		</form>	
	</div>
<!-- gallery -->