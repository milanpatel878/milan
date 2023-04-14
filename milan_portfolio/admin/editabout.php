
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
          <h2>Edit About Content</h2>
          <p>Admin shold dynamic add all content from fill a forms </p>
             
          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form  method="post" role="form" enctype="multipart/form-data">
              <div class="row">
              <div class="form-group col-md-6">
                  <label for="name" class="text-success">Edit About Yourself</label>
                  <textarea name="about_yourself" class="form-control" id="name" required><?php echo $eddata[0]["about_yourself"]; ?></textarea>
                </div>

                <div class="form-group col-md-6">
                <label for="name"class="text-success">Edit Upload Photo</label>

                <img src="<?php echo $eddata[0]["photo"]; ?>" class="img-fluid" style="width:80px; height:80px">
                  <input type="file" name="photo" class="form-control" id="name" required>
                </div>

                <div class="form-group col-md-6">
                  <label for="name"class="text-success">Edit Job Title Name</label>
                  <input type="text" value="<?php echo $eddata[0]["jobtitle"]; ?>" name="title" class="form-control" id="name" required>
                </div>
                
                <div class="form-group col-md-6">
                  <label for="name"class="text-success">Edit select DOB</label>
                  <input type="date" name="dob" value="<?php echo $eddata[0]["dob"]; ?>" class="form-control" id="name" required>
                </div>
                
                <div class="form-group col-md-6">
                  <label for="name"class="text-success">Edit Age</label>
                  <input type="number" name="age" class="form-control" id="name" value="<?php echo $eddata[0]["age"];?>" required>
                </div>

                                
                <div class="form-group col-md-6">
                  <label for="name"class="text-success">Edit Your website</label>
                  <input type="text" name="website" value="<?php echo $eddata[0]["website"];?>" class="form-control" id="name" required>
                </div>



                <div class="form-group col-md-6">
                  <label for="name"class="text-success">Edit select Degree</label>
                  <select  name="degree" class="form-control" id="name" required>

                  <option value="">-select Degree-</option>
                   <?php 
                   foreach($shwdata as $shwdata1)
                   {
                    if($shwdata1["degree_id"]==$eddata[0]["degree_id"])
                    {

                   ?>
                  <option value="<?php echo $eddata[0]["degree_id"];?>" selected="selected"><?php echo $eddata[0]["degree_name"];?></option>
                   <?php 
                   }
                   else 
                   {
                   ?>
                    <option value="<?php echo $shwdata1["degree_id"];?>"><?php echo $shwdata1["degree_name"];?></option>
                 
                    <?php 
                   }
                  }
                  ?>
                  </select>
                </div>

                
                <div class="form-group col-md-6">
                  <label for="name"class="text-success">Edit Your phone</label>
                  <input type="text" name="phone" value="<?php echo $eddata[0]["phone"];?>" class="form-control" id="name" required>
                </div>

                
                <div class="form-group col-md-6">
                  <label for="name"class="text-success">Edit Email on</label>
                  <input type="text" name="emailon" value="<?php echo $eddata[0]["email"];?>" class="form-control" id="name" required>
                </div>

                <div class="form-group col-md-6">
                  <label for="name"class="text-success">Edit select City</label>
                  <select  name="city" class="form-control" id="name" required>

                  <option value="">-select City-</option>
                   <?php 
                   foreach($shwcity as  $shwcity1)
                   {
                    if($shwcity1["city_id"]==$eddata[0]["city_id"])
                    {
                   ?>
                  <option value="<?php echo  $eddata[0]["city_id"];?>" selected="selected"><?php echo  $eddata[0]["city_name"];?></option>
                   <?php 
                   }
                   else 
                   {
                   ?>
                     <option value="<?php echo  $shwcity1["city_id"];?>"><?php echo  $shwcity1["city_name"];?></option>
                     <?php 
                   }
                  }
                  ?>
                  </select>
                </div>


                
              <div class="form-group">
                <label for="name"class="text-success">Edit Freelancing</label>
                Available :<input type="radio" value="available"  name="freelance" id="subject"
                <?php  
                if($eddata[0]["freelance"]=="available")
                {
                  echo "checked='checked'";
                }
                ?>>
                Not available :<input type="radio" value="notavailable"  name="freelance" id="subject" <?php  
                if($eddata[0]["freelance"]=="notavailable")
                {
                  echo "checked='checked'";
                }
                ?>>
              </div>
              <div class="form-group">
                <label for="name"class="text-success">Edit Your details</label>
                <textarea class="form-control" name="details" rows="10" required> <?php echo $eddata[0]["details"]; ?> </textarea>
              </div>
              <div class="form-group mt-3">
             <button type="submit" name="updabout" class="btn btn-success btn-lg">Update About here!</button></div>
            </form>
          </div>
        </div>
      </div>


    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

