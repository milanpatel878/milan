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

			<input type="file" name="pc1" required></input>
			<input type="text" name="dtl1" class="form-control" required></input>

			<input type="file" name="pc2"  required></input>
			<input type="text" name="dtl2" class="form-control" required></input>

			<input type="file" name="pc3"  required></input>
			<input type="text" name="dtl3" class="form-control" required></input>

			<input type="file" name="pc4" required></input>
			<input type="text" name="dtl4" class="form-control" required></input>

			<input type="file" name="pc5"  required></input>
			<input type="text" name="dtl5" class="form-control" required></input>

			<input type="file" name="pc6" required></input>
			<input type="text" name="dtl6" class="form-control" required></input>

			<input type="file" name="pc7" required></input>
			<input type="text" name="dtl7" class="form-control" required></input>

			<input type="file" name="pc8" required></input>
			<input type="text" name="dtl8" class="form-control" required></input>
			<br>
			<center>
				<button type="submit" name="addgallary" class="btn btn-danger btn-lg">Add gallary images</button>
			</center>
			<br>	
		</form>	
	</div>
<!-- gallery -->

<h1 class="text-center">Manage Gallary Data</h1>
<div style="width:100%; border:solid 0px; overflow:auto; padding:15px; margin:5px">

	<table id="example" class="table table-bordered table-hover p-5" style="overflow:auto">
		<thead>
			<tr>
				<th>pc1</th>
				<th>dtl1</th>
				<th>pc2</th>
				<th>dtl2</th>
				<th>pc3</th>
				<th>dtl3</th>
				<th>pc4</th>
				<th>dtl4</th>
				<th>pc5</th>
				<th>dtl5</th>
				<th>pc6</th>
				<th>dtl6</th>
				<th>pc7</th>
				<th>dtl7</th>
				<th>pc8</th>
				<th>dtl8</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php
			foreach($shwgallarydata as $row) 
			{
				?>
				<tr>	
					<td><img src="<?php echo $row["pc1"]; ?>" class="img-fluid" style="width:85px; height:85px"></td>
					<td><?php echo $row["dtl1"]; ?></td>
					<td><img src="<?php echo $row["pc2"]; ?>" class="img-fluid" style="width:85px; height:85px"></td>
					<td><?php echo $row["dtl2"]; ?></td>
					<td><img src="<?php echo $row["pc3"]; ?>" class="img-fluid" style="width:85px; height:85px"></td>
					<td><?php echo $row["dtl3"]; ?></td>
					<td><img src="<?php echo $row["pc4"]; ?>" class="img-fluid" style="width:85px; height:85px"></td>
					<td><?php echo $row["dtl4"]; ?></td>
					<td><img src="<?php echo $row["pc5"]; ?>" class="img-fluid" style="width:85px; height:85px"></td>
					<td><?php echo $row["dtl5"]; ?></td>
					<td><img src="<?php echo $row["pc6"]; ?>" class="img-fluid" style="width:85px; height:85px"></td>
					<td><?php echo $row["dtl6"]; ?></td>
					<td><img src="<?php echo $row["pc7"]; ?>" class="img-fluid" style="width:85px; height:85px"></td>
					<td><?php echo $row["dtl7"]; ?></td>
					<td><img src="<?php echo $row["pc8"]; ?>" class="img-fluid" style="width:85px; height:85px"></td>
					<td><?php echo $row["dtl8"]; ?></td>
					<td><div style="width:100px"><a href="<?php echo $mainurl;?>managegallary?delete-id=<?php echo $row["gallary_id"];?>" onclick="return confirm('Are you sure to Delete data ?')"><i class="bi bi-trash text-danger"></i></a> | <a href="<?php echo $mainurl;?>editgallary?edit-id=<?php echo ($row["gallary_id"]);?>"><i class="bi bi-pencil text-primary"></i></a></div></td>
		<?php
			}
		    ?>
			</tr>
		</tbody>
	</table>
</div>