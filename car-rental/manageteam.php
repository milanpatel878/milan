<?php
$mainurl="http://localhost/php6pmTTS/car-rental/admin/";
$baseurl="http://localhost/php6pmTTS/car-rental/admin/assets/";
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">


<!--//team-section-->
<br>
<div class="middile" id="team">
	<div class="container">
		<div class="wthree_title_agile two">
						        <h3>Amazing <span>Team</span></h3>
				</div>
				<p class="sub_para two">It’s time to drive</p>
				  <div class="inner_w3l_agile_grids">
		<!-- Flipster List -->
		<form method="post" enctype="multipart/form-data">
		<div class="flipster">
		  <ul>
		  	<li>
		  		<div class="about-grid-agile">
					<div class="about-head-w3">
						<h3>CEO</h3>
					</div>
					<div class="about-bottom">
						<div class="about-bottom-image">
						<input type="file" name="photo1" class="img-responsive" required></input>
						</div>
						<div class="about-bottom-bottom">
						<input type="text" name="nm1" placeholder="enter name" required></input>
						<!-- <div class="agileits_social_list">
								<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
								<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
								<a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
							</div> -->
						</div>
						
					</div>
				</div>
		  	</li>
	  		<li>
	  			<div class="about-grid-agile">
					<div class="about-head-w3">
						<h3>MD</h3>
					</div>
					<div class="about-bottom">
						<div class="about-bottom-image">
						<input type="file" name="photo2" class="img-responsive" required></input>
						</div>
						<div class="about-bottom-bottom">
						<input type="text" name="nm2" placeholder="enter name" required></input>
							<!-- <div class="agileits_social_list">
								<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
								<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
								<a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
							</div> -->
						</div>
						
					</div>
				</div>
	  		</li>
	  		<li>
	  			<div class="about-grid-agile">
					<div class="about-head-w3">
						<h3>HR</h3>
					</div>
					<div class="about-bottom">
						<div class="about-bottom-image">
						<input type="file" name="photo3" class="img-responsive" required></input>
						</div>
						<div class="about-bottom-bottom">
						<input type="text" name="nm3" placeholder="enter name" required></input>
							<!-- <div class="agileits_social_list">
								<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
								<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
								<a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
							</div> -->
						</div>
						
					</div>
				</div>
	  		</li>	  		
		  </ul>
		</div>
<!-- End Flipster List -->	
		
			</div>	
			<br>
		        <center>
					<input type="submit" name="addteam" class="btn btn-danger btn-lg" value="Add Team">
				</center>
	</div>
</div>
</form>
<!--//team-section-->

<!-- manage about -->
<h1 class="text-center">Manage Deal Data</h1>
<div style="width:100%; border:solid 0px; overflow:auto; padding:15px; margin:5px">

	<table id="example" class="table table-bordered table-hover p-5" style="overflow:auto">
		<thead>
			<tr>
				<th>photo1</th>
				<th>nm1</th>
				<th>photo2</th>
				<th>nm2</th>
				<th>photo3</th>
				<th>nm3</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php
			foreach($shwteamdata as $row) 
			{
				?>
				<tr>	
					<td><img src="<?php echo $row["photo1"]; ?>" class="img-fluid" style="width:85px; height:85px"></td>
					<td><?php echo $row["nm1"]; ?></td>
					<td><img src="<?php echo $row["photo2"]; ?>" class="img-fluid" style="width:85px; height:85px"></td>
					<td><?php echo $row["nm2"]; ?></td>
					<td><img src="<?php echo $row["photo3"]; ?>" class="img-fluid" style="width:85px; height:85px"></td>
					<td><?php echo $row["nm3"]; ?></td>
					<td><div style="width:100px"><a href="<?php echo $mainurl;?>manageteam?delete-id=<?php echo $row["team_id"];?>" onclick="return confirm('Are you sure to Delete data ?')"><i class="bi bi-trash text-danger"></i></a> | <a href="<?php echo $mainurl;?>editteam?edit-id=<?php echo ($row["team_id"]);?>"><i class="bi bi-pencil text-primary"></i></a></div></td>
		<?php
			}
		    ?>
			</tr>
		</tbody>
	</table>
</div>