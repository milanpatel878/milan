<!--register form hear-->

<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-5 bg-primary">
            <h1 class="text-white p-4"> CREATE A NEW ACCOUNT</h1><br>
            <p class="text-white p-5"> GET ACCESS TO YOUR CARS, WISHLIST AND RECOMMENDATIONS, SO CREATE YOUR ACCOUNT IN SELL MY CAR</p><br><br><br>
            <p> <img src="<?php echo $baseurl; ?>images/login.png" class="img-fluid"></p>
        </div>
        <div class="col-md-7">
            <form method="post" class="p-5">
                <div class="form-group mt-1 p-2">
                    <input type="text" name="Email" placeholder="Enter Email/mobile number" required class="form-control email">
                </div>
                <div class="form-group mt-1 p-2">
                    <input type="password" name="pass" placeholder="Enter Password" required class="form-control password">
                </div>
                <div class="form-group mt-1 p-2">
                    <input type="confirm password" name="cpass" placeholder="Enter Confirm password" required class="form-control password">
                </div>
                <div class="form-group mt-1 p-2">
                    <input type="file" name="image" placeholder="upload image" required class="form-control image">
                </div>
                <div class="form-group mt-1 p-2">
                    <textarea name="address" placeholder="Enter Address" required class="form-control address"></textarea>
                </div>
                <div class="form-group mt-1 p-2">
                    <select name="state" placeholder="Enter Your State" required class="form-control state">
                        <option value="">-select state-</option>
                        <option value="">GUJRAT</option>
                        <option value="">PUNJAB</option>
                        <option value="">MAHARASTRA</option>
                        <option value="">UTTAR PRADESH</option>
                        <option value="">DELHI</option>
                        <option value="">HARIYANA</option>
                    </select>
                    </div>
                <div class="form-group mt-1 p-2">    
                    <select name="city" placeholder="Enter Your City" required class="form-control state">
                        <option value="">-select City-</option>
                        <option value="">RAJKOT</option>
                        <option value="">MUMBAI</option>
                        <option value="">JAMNAGAR</option>
                        <option value="">SURAT</option>
                        <option value="">AHEMDABAD</option>
                        <option value="">VADODARA</option>
                        <option value="">PUNE</option>
                    </select>
                    </div>
                    <div class="form-group mt-1 p-2">
                        <input type="text" name="mobile" placeholder="Enter Your Mobile number" required class="form-control number">
                    </div> 
                    <div class="form-group mt-3 p-2">
                        <input type="submit" name="register" id="btn-log-register" class="btn btn-sm" value="Register">
                        <input type="Reset" name="Reset" id="btn-log-reset" class="btn btn-sm" value="Reset">
                    </div>
                    <div class="form-group mt-1 p-2"> <br> <br>
                        <p>Already have an account <a href="login.php" data-bs-toggle="modal" data-bs-target="#login-load">  &nbsp; &nbsp; login here ? </a> </p>
                    </div>
            </form>
        </div>
    </div>
</div>    
