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
								<input type="text" name="rs1" placeholder="enter amount" required></input>
							</p><br>
							<p><input type="text" name="day1" placeholder="enter day" required></input></p><br>
							<input type="file" name="photo1" required></input>
						</div>

						<div class="form-group col-md-4">
							<h5>Deal 2</h5>
							<p>Per day<span>
									RS.</span><br>
								<input type="text" name="rs2" placeholder="enter amount" required></input>
							</p><br>
							<p><input type="text" name="day2" placeholder="enter day" required></input></p><br>
							<input type="file" name="photo2" required></input>
						</div>

						<div class="form-group col-md-4">
							<h5>Deal 3</h5>
							<p>Per day<span>
									RS.</span><br>
								<input type="text" name="rs3" placeholder="enter amount" required></input>
							</p><br>
							<p><input type="text" name="day3" placeholder="enter day" required></input></p><br>
							<input type="file" name="photo3" required></input>
						</div>
					</div>
					<br>
					<center>
						<button type="submit" name="adddeal" class="btn btn-warning btn-lg">Add deal</button>
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
<!-- manage about -->
<h1 class="text-center">Manage Deal Data</h1>
<div style="width:100%; border:solid 0px; overflow:auto; padding:15px; margin:5px">

	<table id="example" class="table table-bordered table-hover p-5" style="overflow:auto">
		<thead>
			<tr>
				<th>rs1</th>
				<th>day1</th>
				<th>photo1</th>
				<th>rs2</th>
				<th>day2</th>
				<th>photo2</th>
				<th>rs3</th>
				<th>day3</th>
				<th>photo3</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php
			foreach ($shwdata as $row) 
			{
				?>
				<tr>
					<td><?php echo $row["rs1"]; ?></td>
					<td><?php echo $row["day1"]; ?></td>
					<td><img src="<?php echo $row["photo1"]; ?>" class="img-fluid" style="width:85px; height:85px"></td>
					<td><?php echo $row["rs2"]; ?></td>
					<td><?php echo $row["day2"]; ?></td>
					<td><img src="<?php echo $row["photo2"]; ?>" class="img-fluid" style="width:85px; height:85px"></td>
					<td><?php echo $row["rs3"]; ?></td>
					<td><?php echo $row["day3"]; ?></td>
					<td><img src="<?php echo $row["photo3"]; ?>" class="img-fluid" style="width:85px; height:85px"></td>
					<td><div style="width:100px"><a href="<?php echo $mainurl;?>managedeal?delete-id=<?php echo $row["deal_id"];?>" onclick="return confirm('Are you sure to Delete data ?')"><i class="bi bi-trash text-danger"></i></a> | <a href="<?php echo $mainurl;?>editdeal?edit-id=<?php echo ($row["deal_id"]);?>"><i class="bi bi-pencil text-primary"></i></a></div></td>
		<?php
			}
		    ?>
			</tr>
		</tbody>
	</table>
</div>
			