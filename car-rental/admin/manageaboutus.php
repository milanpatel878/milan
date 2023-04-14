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
            <div class="col about-left-w3layouts bg-warning">
				<h6 class="sub bg-success">WELCOME TO OUR Rental Car</h6>
				<form method="post" enctype="multipart/form-data">
                <input type="text" name="pg1" placeholder="write a about content" required></input>
                <br><br><br>
                <input type="text" name="pg2" placeholder="write a about content" required></input>
				<br><br><br>
				<input type="file" name="vd" required></input>
			<br><br>
				<button type="submit" name="addabout" class="btn btn-success btn-lg">Add About</button>
			</center>
			</div>
			<br><br>
		</form>
			<div class="clearfix"></div>
		</div>
	</div>
 </div>

 <!--about-section-->

<!-- manage about -->
<h1 class="text-center">Manage about Data</h1>
<div style="width:100%; border:solid 0px; overflow:auto; padding:15px; margin:5px">

	<table id="example" class="table table-bordered table-hover p-5" style="overflow:auto">
		<thead>
			<tr>
				<th>pg1</th>
				<th>pg2</th>				
				<th>video</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php
			foreach ($shwaboutdata as $row) 
			{
				?>
				<tr>
					<td><?php echo $row["pg1"]; ?></td>
					<td><?php echo $row["pg2"]; ?></td>
					<td><img src="<?php echo $row["video"]; ?>" class="img-fluid" style="width:85px; height:85px"></td>
					<td><div style="width:100px"><a href="<?php echo $mainurl;?>manageaboutus?delete-id=<?php echo $row["about_id"];?>" onclick="return confirm('Are you sure to Delete data ?')"><i class="bi bi-trash text-danger"></i></a> | <a href="<?php echo $mainurl; ?>editabout? edit-id=<?php echo($row["about_id"]);?>"><i class="bi bi-pencil text-primary"></i></a></div></td>
		<?php
			}
		    ?>
			</tr>
		</tbody>
	</table>
</div>
