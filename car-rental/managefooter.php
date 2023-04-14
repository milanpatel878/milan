<!-- footer -->
<br>
	<div class="newsletter">
		<div class="container">
		<form method="post" enctype="multipart/form-data">
			<div class="col-md-3 footer-grid">
				<h3>About us</h3>
				<textarea type="text" name="abtdetails" class="form-control" required></textarea>
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
						<input type="file" name="pht1" class="img-responsive" required></input>
						</div>
						<div class="footer-grid1-right">
						<input type="text" name="phtdt1" class="form-control" required></input>
						</div>
						<div class="clearfix"> </div>
					</div>

					<div class="footer-grid1">
						<div class="footer-grid1-left">
						<input type="file" name="pht2" class="img-responsive" required></input>
						</div>
						<div class="footer-grid1-right">
						<input type="text" name="phtdt2" class="form-control" required></input>	
						</div>
						<div class="clearfix"> </div>
					</div>
					
				</div>
				<div class="col-md-3 footer-grid">
					<h3>From Flickr</h3>
					<div class="footer-grid-instagram">
					<input type="file" name="pht3" class="img-responsive" required></input>
					</div>
					<div class="footer-grid-instagram">
					<input type="file" name="pht4" class="img-responsive" required></input><br>
					</div>
					<div class="footer-grid-instagram">
					<input type="file" name="pht5" class="img-responsive" required></input>
					</div>
					<div class="footer-grid-instagram">
					<input type="file" name="pht6" class="img-responsive" required></input><br>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
				<br>
			<center>
				<button type="submit" name="addfooter" class="btn btn-danger btn-lg">Add Footer</button>
			</center>
		</form>
	</div>
</div>

<!-- show details -->

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

<h1 class="text-center">Manage Footer Data</h1>
<div style="width:100%; border:solid 0px; overflow:auto; padding:15px; margin:5px">

	<table id="example" class="table table-bordered table-hover p-5" style="overflow:auto">
		<thead>
			<tr>
				<th>abtdetails</th>
				<th>pht1</th>
				<th>phtdt1</th>
				<th>pht2</th>
				<th>phtdt2</th>
				<th>pht3</th>
				<th>pht4</th>
				<th>pht5</th>
				<th>pht6</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php
			foreach($shwfooterdata as $row) 
			{
				?>
				<tr>
				    <td><?php echo $row["abtdetails"]; ?></td>	
					<td><img src="<?php echo $row["pht1"]; ?>" class="img-fluid" style="width:85px; height:85px"></td>
					<td><?php echo $row["phtdt1"]; ?></td>
					<td><img src="<?php echo $row["pht2"]; ?>" class="img-fluid" style="width:85px; height:85px"></td>
					<td><?php echo $row["phtdt2"]; ?></td>
					<td><img src="<?php echo $row["pht3"]; ?>" class="img-fluid" style="width:85px; height:85px"></td>
					<td><img src="<?php echo $row["pht4"]; ?>" class="img-fluid" style="width:85px; height:85px"></td>
					<td><img src="<?php echo $row["pht5"]; ?>" class="img-fluid" style="width:85px; height:85px"></td>
					<td><img src="<?php echo $row["pht6"]; ?>" class="img-fluid" style="width:85px; height:85px"></td>
					<td><div style="width:100px"><a href="<?php echo $mainurl;?>managefooter?delete-id=<?php echo $row["footer_id"];?>" onclick="return confirm('Are you sure to Delete data ?')"><i class="bi bi-trash text-danger"></i></a> | <a href="<?php echo $mainurl;?>editfooter?edit-id=<?php echo ($row["footer_id"]);?>"><i class="bi bi-pencil text-primary"></i></a></div></td>
		<?php
			}
		    ?>
			</tr>
		</tbody>
	</table>
</div>