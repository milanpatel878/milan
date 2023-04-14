
<?php 
if(!isset($_SESSION["admin_id"]))
{
  echo "<script>
    window.location='./';
  </script>";
}
?>

<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container ms-5">
   
        <div class="section-title">
          <h2>Add About Content</h2>
          <p>Admin should dynamic add all content from fill a forms </p>
             
          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form  method="post" role="form" enctype="multipart/form-data">
              <div class="row">
              <div class="form-group col-md-6">
                  <label for="name">About Yourself</label>
                  <textarea name="about_yourself" class="form-control" id="name" required></textarea>
                </div>

                <div class="form-group col-md-6">
                  <label for="name">Upload Photo</label>
                  <input type="file" name="photo" class="form-control" id="name" required>
                </div>

                <div class="form-group col-md-6">
                  <label for="name">Job Title Name</label>
                  <input type="text" name="title" class="form-control" id="name" required>
                </div>
                
                <div class="form-group col-md-6">
                  <label for="name">select DOB</label>
                  <input type="date" name="dob" class="form-control" id="name" required>
                </div>
                
                <div class="form-group col-md-6">
                  <label for="name">Age</label>
                  <input type="number" name="age" class="form-control" id="name" required>
                </div>

                                
                <div class="form-group col-md-6">
                  <label for="name">Your website</label>
                  <input type="text" name="website" class="form-control" id="name" required>
                </div>



                <div class="form-group col-md-6">
                  <label for="name">select Degree</label>
                  <select  name="degree" class="form-control" id="name" required>

                  <option value="">-select Degree-</option>
                   <?php 
                   foreach($shwdata as $shwdata1)
                   {

                   ?>
                  <option value="<?php echo $shwdata1["degree_id"];?>"><?php echo $shwdata1["degree_name"];?></option>
                   <?php 
                   }
                   ?>
                  </select>
                </div>

                
                <div class="form-group col-md-6">
                  <label for="name">Your phone</label>
                  <input type="text" name="phone" class="form-control" id="name" required>
                </div>

                
                <div class="form-group col-md-6">
                  <label for="name">Email on</label>
                  <input type="text" name="emailon" class="form-control" id="name" required>
                </div>

                <div class="form-group col-md-6">
                  <label for="name">select City</label>
                  <select  name="city" class="form-control" id="name" required>

                  <option value="">-select City-</option>
                   <?php 
                   foreach($shwcity as  $shwcity1)
                   {

                   ?>
                  <option value="<?php echo  $shwcity1["city_id"];?>"><?php echo  $shwcity1["city_name"];?></option>
                   <?php 
                   }
                   ?>
                  </select>
                </div>


                
              <div class="form-group">
                <label for="name">Freelancing</label>
                Available :<input type="radio" value="available"  name="freelance" id="subject">
                Not available :<input type="radio" value="notavailable"  name="freelance" id="subject">
              </div>
              <div class="form-group">
                <label for="name">Your details</label>
                <textarea class="form-control" name="details" rows="10" required></textarea>
              </div>
              <div class="form-group mt-3">
             <button type="submit" name="addabout" class="btn btn-success btn-lg">Add About</button></div>
            </form>
          </div>
        </div>
      </div>


      <!-- manage about -->
      <h1 class="text-center">Manage Aboutus Data</h1>
      <div style="width:100%; border:solid 0px; overflow:auto; padding:15px; margin:5px">
  
      <table id="example" class="table table-bordered table-hover p-5" style="overflow:auto">
      <thead>  
      <tr>
        <th>#</th>
        <th>Yourself</th>
        <th>Photo</th>
        <th>Title</th>
        <th>DOB</th>
        <th>Age</th>
        <th>website</th>
        <th>Degree</th>
        <th>Phone</th>
        <th>Email</th>
        <th>City</th>
        <th>Freelancing</th>
        <th>Details</th>
        <th>Action</th>
      </tr>
      </thead>
      <tbody>
        <?php 
         foreach($shwabout as $row)
         {
        ?>
         <tr>
          <td><?php echo $row["about_id"];?></td>
          <td><?php echo $row["about_yourself"];?></td>
          <td><img src="<?php echo $row["photo"];?>" class="img-fluid" style="width:85px; height:85px"></td> 
          <td><?php echo $row["jobtitle"];?></td>
          <td><?php echo $row["dob"];?></td>
          <td><?php echo $row["age"];?></td>
          <td><?php echo $row["website"];?></td>
          <td><?php echo $row["degree_name"];?></td>
          <td><?php echo $row["phone"];?></td>
          <td><?php echo $row["email"];?></td>
          <td><?php echo $row["city_name"];?></td>
          <td><?php echo $row["freelance"];?></td>
          <td><?php echo $row["details"];?></td>
          <td><div style="width:100px"><a href="<?php echo $mainurl;?>manageabout?delete-id=<?php echo $row["about_id"];?>" onclick="return confirm('Are you sure to Delete data ?')"><i class="bi bi-trash text-danger"></i></a> | <a href="<?php echo $mainurl;?>editabout?edit-id=<?php echo base64_encode($row["about_id"]);?>"><i class="bi bi-pencil text-primary"></i></a></div></td>

          <?php 
         }
         ?>
        </tr>
        </tbody>
       
      </table>
      </div>
      

    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>

  <script>
    $(document).ready(function () {
    $('#example').DataTable();
});
  </script>