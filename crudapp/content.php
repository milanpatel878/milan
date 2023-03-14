<?php 
$mainurl="http://localhost/php6pmTTS/crudapp/";
$baseurl="http://localhost/php6pmTTS/crudapp/assets";
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script>

$(document).ready(function(){

	$("#Datatbl").DataTable();
})

</script>


<!-- Latest-Arrivals -->
		<div class="container mt-4">
		<h3 class="bg-primary p-2 text-center">INDIAN CRICKETERS</h3>
	
		  <div class="row">
			<div class="col-md-6 mt-3 mb-5">
				<button type="button" data-bs-toggle="modal" data-bs-target="#aduser" class="btn btn-sm btn-warning"><i class="bi bi-person"></i>Add Cricketers</button>
			</div>

			
			<div class="col-md-6 mt-2 mb-5">
			<!-- <input type="search" placeholder="search here"  class="form-control"> -->
			</div>
		  </div>
          
		  <!-- show all users -->

		  <table class="table table-responsive mt-1" id="Datatbl">
			<thead>
				<tr>
					<th>#</th>
					<th>PHOTO</th>
					<th>NAME</th>
					<th>EMAIL</th>
					<th>MOBILE NO.</th>
					<th>ACTION</th>
				</tr>
			</thead>
			<tbody>

				<?php 
                 foreach($shwdata as $row)
				 {
				?>
				<tr>
					<td><?php echo $row["user_id"];?></td>
					<td><img src="<?php echo $row["photo"];?>" class="img-fluid" width="120px" height="90px"></td>
					<td><?php echo $row["name"];?></td>
					<td><?php echo $row["email"];?></td>
					<td><?php echo $row["mono"];?></td>
					<td><a href="" class="btn btn-sm btn-info"><i class="bi bi-pen"></i></a> | <a href="" class="btn btn-sm btn-success"><i class="bi bi-eye"></i></a> | <a href="" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></a> </td>
				</tr>

				<?php

				 }
				
				?>

			</tbody>
		  </table>

        </div>
	<!-- //Newsletter -->

