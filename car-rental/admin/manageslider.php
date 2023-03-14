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
						<input type="file" name="img1" class="img-responsive" required></input>
						<input type="text" name="pr1" placeholder="enter price" required></input>
						<input type="file" name="img2" class="img-responsive" required></input>
						<input type="text" name="pr2" placeholder="enter price" required></input>
						<input type="file" name="img3" class="img-responsive" required></input>
						<input type="text" name="pr3" placeholder="enter price" required></input>
						<input type="file" name="img4" class="img-responsive" required></input>
						<input type="text" name="pr4" placeholder="enter price" required></input>
						</div>
						<div class="col-md-4">
						<input type="file" name="img5" class="img-responsive" required></input>
						<input type="text" name="pr5" placeholder="enter price" required></input>
						<input type="file" name="img6" class="img-responsive" required></input>
						<input type="text" name="pr6" placeholder="enter price" required></input>
						<input type="file" name="img7" class="img-responsive" required></input>
						<input type="text" name="pr7" placeholder="enter price" required></input>
						<input type="file" name="img8" class="img-responsive" required></input>
						<input type="text" name="pr8" placeholder="enter price" required></input>
						</div>
						<div class="col-md-4">
						<input type="file" name="img9" class="img-responsive" required></input>
						<input type="text" name="pr9" placeholder="enter price" required></input>
						<input type="file" name="img10" class="img-responsive" required></input>
						<input type="text" name="pr10" placeholder="enter price" required></input>
						<input type="file" name="img11" class="img-responsive" required></input>
						<input type="text" name="pr11" placeholder="enter price" required></input>
						<input type="file" name="img12" class="img-responsive" required></input>
						<input type="text" name="pr12" placeholder="enter price" required></input>
						</div>
						</div>
						<!--//screen-gallery-->
						<br><br>
						<center>
					<button type="submit" name="addslider" class="btn btn-danger btn-lg">Add Slider Images</button>
					</center>
					<br>
				</form>
 </div>
</div>
</div>
<!-- //banner-bottom -->

<h1 class="text-center">Manage slider Data</h1>
<div style="width:100%; border:solid 0px; overflow:auto; padding:15px; margin:5px">

	<table id="example" class="table table-bordered table-hover p-5" style="overflow:auto">
		<thead>
			<tr>
				<th>img1</th>
				<th>pr1</th>
				<th>img2</th>
				<th>pr2</th>
				<th>img3</th>
				<th>pr3</th>
				<th>img4</th>
				<th>pr4</th>
				<th>img5</th>
				<th>pr5</th>
				<th>img6</th>
				<th>pr6</th>
				<th>img7</th>
				<th>pr7</th>
				<th>img8</th>
				<th>pr8</th>
				<th>img9</th>
				<th>pr9</th>
				<th>img10</th>
				<th>pr10</th>
				<th>img11</th>
				<th>pr11</th>
				<th>img12</th>
				<th>pr12</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php
			foreach($shwslidedata as $row) 
			{
				?>
				<tr>	
					<td><img src="<?php echo $row["img1"]; ?>" class="img-fluid" style="width:85px; height:85px"></td>
					<td><?php echo $row["pr1"]; ?></td>
					<td><img src="<?php echo $row["img2"]; ?>" class="img-fluid" style="width:85px; height:85px"></td>
					<td><?php echo $row["pr2"]; ?></td>
					<td><img src="<?php echo $row["img3"]; ?>" class="img-fluid" style="width:85px; height:85px"></td>
					<td><?php echo $row["pr3"]; ?></td>
					<td><img src="<?php echo $row["img4"]; ?>" class="img-fluid" style="width:85px; height:85px"></td>
					<td><?php echo $row["pr4"]; ?></td>
					<td><img src="<?php echo $row["img5"]; ?>" class="img-fluid" style="width:85px; height:85px"></td>
					<td><?php echo $row["pr5"]; ?></td>
					<td><img src="<?php echo $row["img6"]; ?>" class="img-fluid" style="width:85px; height:85px"></td>
					<td><?php echo $row["pr6"]; ?></td>
					<td><img src="<?php echo $row["img7"]; ?>" class="img-fluid" style="width:85px; height:85px"></td>
					<td><?php echo $row["pr7"]; ?></td>
					<td><img src="<?php echo $row["img8"]; ?>" class="img-fluid" style="width:85px; height:85px"></td>
					<td><?php echo $row["pr8"]; ?></td>
					<td><img src="<?php echo $row["img9"]; ?>" class="img-fluid" style="width:85px; height:85px"></td>
					<td><?php echo $row["pr9"]; ?></td>
					<td><img src="<?php echo $row["img10"]; ?>" class="img-fluid" style="width:85px; height:85px"></td>
					<td><?php echo $row["pr10"]; ?></td>
					<td><img src="<?php echo $row["img11"]; ?>" class="img-fluid" style="width:85px; height:85px"></td>
					<td><?php echo $row["pr11"]; ?></td>
					<td><img src="<?php echo $row["img12"]; ?>" class="img-fluid" style="width:85px; height:85px"></td>
					<td><?php echo $row["pr12"]; ?></td>
					<td><div style="width:100px"><a href="<?php echo $mainurl;?>manageslider?delete-id=<?php echo $row["slider_id"];?>" onclick="return confirm('Are you sure to Delete data ?')"><i class="bi bi-trash text-danger"></i></a> | <a href="<?php echo $mainurl;?>editslider?edit-id=<?php echo ($row["slider_id"]);?>"><i class="bi bi-pencil text-primary"></i></a></div></td>
		<?php
			}
		    ?>
			</tr>
		</tbody>
	</table>
</div>