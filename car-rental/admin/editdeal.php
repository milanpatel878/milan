<?php
$mainurl = "http://localhost/php6pmTTS/car-rental/admin/";
$baseurl = "http://localhost/php6pmTTS/car-rental/admin/assets/";
?>

<!-- about -->
<form method="post" enctype="multipart/form-data">
	<div class="services" id="service">
		<div class="container">
			<div class="wthree_title_agile">
				<h3> Today <span>SPECIAL</span> DEALS </h3>
			</div>
			<p class="sub_para">It’s time to drive</p>
			<br>
			<form method="post" enctype="multipart/form-data">
				<div class="container ms-5">
					<div class="row">
						<div class="form-group col-md-4">
							<h5>Deal 1</h5>
							<p>Per day<span>
									RS.</span><br>
								<input type="text" name="rs1" placeholder="enter amount" required><?php echo $eddata[0]["rs1"]; ?></input>
							</p><br>
							<p><input type="text" name="day1" placeholder="enter day" required><?php echo $eddata[0]["day1"]; ?></input></p><br>
							<input type="file" name="photo1" required><?php echo $eddata[0]["photo1"]; ?></input>
						</div>

						<div class="form-group col-md-4">
							<h5>Deal 2</h5>
							<p>Per day<span>
									RS.</span><br>
								<input type="text" name="rs2" placeholder="enter amount" required><?php echo $eddata[0]["rs2"]; ?></input>
							</p><br>
							<p><input type="text" name="day2" placeholder="enter day" required><?php echo $eddata[0]["day2"]; ?></input></p><br>
							<input type="file" name="photo2" required><?php echo $eddata[0]["photo2"]; ?></input>
						</div>

						<div class="form-group col-md-4">
							<h5>Deal 3</h5>
							<p>Per day<span>
									RS.</span><br>
								<input type="text" name="rs3" placeholder="enter amount" required><?php echo $eddata[0]["rs3"]; ?></input>
							</p><br>
							<p><input type="text" name="day3" placeholder="enter day" required><?php echo $eddata[0]["day3"]; ?></input></p><br>
							<input type="file" name="photo3" required><?php echo $eddata[0]["photo3"]; ?></input>
						</div>
					</div>
					<br>
					<center>
						<button type="submit" name="upddeal" class="btn btn-success btn-lg">Update deal</button>
					</center>
			</form>
			<div class="clearfix"> </div>
		</div>
	</div>
	</div>
	<!--//service-section-->

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">