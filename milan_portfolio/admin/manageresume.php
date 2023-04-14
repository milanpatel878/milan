
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
          <h2>Add Resume</h2>
          <p>Admin should dynamic add all content from fill a forms </p>
             <br>
          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form  method="post" role="form" enctype="multipart/form-data">
              <div class="row">
              <div class="form-group col-md-6">
                  <label for="name">summary :</label>
                  <textarea name="summary" class="form-control" id="name" required></textarea>
                </div>

                <div class="form-group col-md-6">
                  <label for="name">Name :</label>
                  <input type="text" name="nm" class="form-control" id="name" required>
                </div>

                <div class="form-group col-md-6">
                  <label for="name">About your skill :</label>
                  <textarea name="about_summary" class="form-control" id="name" required></textarea>
                </div>
                
                <div class="form-group col-md-6">
                  <label for="name">Address :</label>
                  <textarea name="address" class="form-control" id="name" required></textarea>
                </div>
                
                <div class="form-group col-md-6">
                  <label for="name">Phone :</label>
                  <input type="text" name="phone" class="form-control" id="name" required>
                </div>

                                
                <div class="form-group col-md-6">
                  <label for="name">email :</label>
                  <input type="text" name="email" class="form-control" id="name" required>
                </div>

              <!-- //education -->
              <div class="form-group col-md-6">
                  <label for="name">select Master Degree :</label>
                  <select name="mdegree" class="form-control" id="name" required>

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
                  <label for="name">year :</label>
                  <select name="myear" class="form-control" id="name" required>
                    <option> select year </option>
                    <?php
                    for($i=1970;$i<=2023;$i++){                  
                    ?>
                    
                    <option>
                    <?php echo $i;
                    ?>   
                  </option>
                  <?php
                 }
                 ?>
                  </select>
                </div>

                <div class="form-group col-md-6">
                  <label for="name">Master University Name :</label>
                  <input type="text" name="munm" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">about master education : </label>
                  <textarea name="abt_master" class="form-control" id="name" required></textarea>
                </div>

                <div class="form-group col-md-6">
                  <label for="name">select Bechelor Degree :</label>
                  <select name="bdegree" class="form-control" id="name" required>

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
                  <label for="name">year:</label>
                  <select name="byear" class="form-control" id="name" required>
                    <option> select year </option>
                    <?php
                    for($i=1970;$i<=2023;$i++){                  
                    ?>
                    
                    <option>
                    <?php echo $i;?>   
                  </option>
                  <?php
                 }
                 ?>
                  </select>
                </div>

                <div class="form-group col-md-6">
                  <label for="name">Bachelor University Name :</label>
                  <input type="text" name="bname" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">about bachelor education :</label>
                  <textarea name="abt_bachelor" class="form-control" id="name" required></textarea>
                </div>

              <div class="form-group mt-3">
             <button type="submit" name="addresume" class="btn btn-success btn-lg">Add Resume</button></div>
            </form>
          </div>
        </div>
      </div>


      <!-- manage about -->
      <h1 class="text-center">Manage Resume Data</h1>
      <div style="width:100%; border:solid 0px; overflow:auto; padding:15px; margin:5px">
  
      <table id="example" class="table table-bordered table-hover p-5" style="overflow:auto">
      <thead>  
      <tr>
        <th>res_sum</th>
        <th>res_nm</th>
        <th>abt_skill</th>
        <th>address</th>
        <th>phone</th>
        <th>email</th>
        <th>mdegree</th>
        <th>myear</th>
        <th>mname</th>
        <th>about_master</th>
        <th>bdegree</th>
        <th>byear</th>
        <th>bname</th>
        <th>about_bachelor</th>
        <th>Action</th>
      </tr>
      </thead>
      <tbody>
        <?php 
         foreach($resumedata as $row)
         {
        ?>
         <tr>
          <td><?php echo $row["res_sum"];?></td>
          <td><?php echo $row["res_nm"];?></td>
          <td><?php echo $row["abt_skill"];?></td>
          <td><?php echo $row["address"];?></td>
          <td><?php echo $row["phone"];?></td>
          <td><?php echo $row["email"];?></td>
          <td><?php echo $row["degree_name"];?></td>
          <td><?php echo $row["myear"];?></td>
          <td><?php echo $row["mname"];?></td>
          <td><?php echo $row["about_master"];?></td>
          <td><?php echo $row["degree_name"];?></td>
          <td><?php echo $row["byear"];?></td>
          <td><?php echo $row["bname"];?></td>
          <td><?php echo $row["about_bachelor"];?></td>
          <td><div style="width:100px"><a href="<?php echo $mainurl;?>manageresume?delete-id=<?php echo $row["about_id"];?>" onclick="return confirm('Are you sure to Delete data ?')"><i class="bi bi-trash text-danger"></i></a> | <a href="<?php echo $mainurl;?>editresume?edit-id=<?php echo base64_encode($row["about_id"]);?>"><i class="bi bi-pencil text-primary"></i></a></div></td>

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